<?php
include ('../library/settings.php');

if (isset ( $_POST ['formsubmitted'] )) {
	$error = array (); // Declare An Array to store any error message
	if (empty ( $_POST ['name'] )) { // if no name has been supplied
		$error [] = 'Please Enter a name '; // add to array "error"
	} else {
		$name = $_POST ['name']; // else assign it a variable
	}
	
	if (empty ( $_POST ['e-mail'] )) {
		$error [] = 'Please Enter your Email ';
	} else {
		
		if (preg_match ( "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST ['e-mail'] )) {
			// regular expression for email validation
			$EmailTo = $_POST ['e-mail'];
		} else {
			$error [] = 'Your EMail Address is invalid  ';
		}
	}
	
	if (empty ( $_POST ['Password'] )) {
		$error [] = 'Please Enter Your Password ';
	} else {
		$Password = $_POST ['Password'];
	}
	
	if (empty ( $error )) 	// send to Database if there's no error '
	
	{ // If everything's OK...
		
		/* Make sure the email address is available: */
		
		$query_verify_email = unusedEmail ( $EmailTo );
		
		if ($query_verify_email) { // IF no previous user is using this email .
		                           
			// Create a unique activation code:
			$activation = md5 ( uniqid ( rand (), true ) );
			
			$updateStatus = updateDb ( $name, $EmailTo, $Password, $activation );
			
			/* need to verifty db updated is sucessful */
			sendEmail ( $EmailTo, $activation );
			
			if ($updateStatus) { // If the Insert Query was successfull.
				
				echo '<div class="success">Thank you for registering! A confirmation email
has been sent to ' . $EmailTo . ' Please click on the Activation Link to Activate your account </div>';
			} else { // If it did not run OK.
				echo '<div class="errormsgbox">You could not be registered due to a system error. We apologize for any
inconvenience.</div>';
			}
		} else { // The email address is not available.
			echo '<div class="errormsgbox" >That email address has already been registered.</div>';
		}
	} else { // If the "error" array contains error msg , display them
		
		echo '<div class="errormsgbox"> <ol>';
		foreach ( $error as $key => $values ) {
			echo '	<li>' . $values . '</li>';
		}
		echo '</ol></div>';
	}
}
?>
<?php

function sendEmail($EmailTo, $activation) {
	
	// example on using PHPMailer with GMAIL cclass.phpmailer.php
	include ("../library/PHPMailer_v5.1/class.phpmailer.php");
	include ("../library/PHPMailer_v5.1/class.smtp.php"); // note, this is optional - gets called from main class if not already loaded
	                                                      
	// This is the address that will appear coming from ( Sender )
	                                                      // define('EMAIL', 'buddy@techwiseman.com');
	
	$mail = new PHPMailer ();
	
	// $body = $mail->getFile('/PHPMailer_v5.1/test/contents.html');
	// $body = eregi_replace("[\]",'',$body);
	$body = 'this is a test mail';
	
	$mail->IsSMTP ();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port
	
	$mail->Username = "paharry@gmail.com"; // GMAIL username
	$mail->Password = "a00191332"; // GMAIL password
	
	$mail->From = "supportto@techwiseman.com";
	$mail->FromName = "Buddy";
	$mail->Subject = "Please click on the link to complete registration";
	// $mail->AltBody = "This is the body when user views in plain text format"; //Text Body
	// $mail->WordWrap = 50; // set word wrap
	
	$body = " To activate your account, please click on this link:\n\n";
	$body .= WEBSITE_URL . '/mailActivationForNewLogin/php/activateUserRegistration.php?email=' . urlencode ( $EmailTo ) . "&key=$activation";
	
	$mail->MsgHTML ( $body );
	
	// $mail->AddReplyTo("support@techwiseman.com","Webmaster");
	// $mail->AddAttachment("c:/shop/vec_accounts.xlsx"); // attachment
	// $mail->AddAttachment("/path/to/image.jpg", "new.jpg"); // attachment
	
	$mail->AddAddress ( $EmailTo );
	
	$mail->IsHTML ( true ); // send as HTML
	
	if (! $mail->Send ()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	}
	/*
	 * else { echo "Message has been sent please read the email sent to your email account and click the enclosed link"; }
	 */
}
function unusedEmail($email) {
	/**
	 * records below could be replaced by $login object - but why!
	 * $login = new membersLogin;
	 */
	$used = TRUE;
	$crud = connectDb ();
	
	$sql = "select * from  membersLogin where email= '" . $email . "';";
	
	$records = $crud->rawSelect ( $sql );
	
	foreach ( $records as $row ) {
		foreach ( $row as $fieldname => $value ) {
			$used = FALSE;
			// echo $fieldname.' = '.$value.'<br />';
		}
		// echo '<hr />';
	}
	
	$crud = null; // close db connection
	return $used;
}
function updateDb($name, $EmailTo, $Password, $activation) {
	$retStatus = FALSE;
	
	$crud = connectDb ();
	$values1 = array (
			array (
					'activation' => $activation,
					'status' => 'active' 
			) 
	);
	$crud->dbInsert ( 'membersStatus', $values1 );
	
	/* lets make sure insert in db was sucessful */
	
	$sql = "select * from .membersstatus where  activation = '" . $activation . "';";
	
	$rows = $crud->rawSelect ( $sql );
	
	if (sizeof ( $rows ) == 0) {
		echo 'Query Failed pls contact IT support';
	} else {
		/*
		 * membersstatus has been insert sucessfully now insert record for membersLogin db table
		 */
		foreach ( $rows as $row ) {
			$id = $row ['id'];
		}
		
		// echo '<p>'.$id.'</p>';
		
		$values2 = array (
				array (
						'id' => $id,
						'username' => $name,
						'email' => $EmailTo,
						'password' => $Password 
				) 
		);
		$rows = $crud->dbInsert ( 'memberslogin', $values2 );
		// echo '<p>insert 2 finish </p>';
		$retStatus = TRUE;
	}
	
	$crud = null; // close db connection
	return $retStatus;
}

?>

<style type="text/css">
body {
	font-family: "Lucida Grande", "Lucida Sans Unicode", Verdana, Arial,
		Helvetica, sans-serif;
	font-size: 12px;
}

.success {
	border: 1px solid;
	margin: 0 auto;
	padding: 10px 5px 10px 60px;
	background-repeat: no-repeat;
	background-position: 10px center;
	width: 450px;
	color: #4F8A10;
	background-color: #DFF2BF;
	background-image: url('images/success.png');
}

.errormsgbox {
	border: 1px solid;
	margin: 0 auto;
	padding: 10px 5px 10px 60px;
	background-repeat: no-repeat;
	background-position: 10px center;
	width: 450px;
	color: #D8000C;
	background-color: #FFBABA;
	background-image: url('images/error.png');
}
</style>