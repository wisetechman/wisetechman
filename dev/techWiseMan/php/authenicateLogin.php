<?php
require ('../library/settings.php');
 require ('entities/membersLogin.php');

if (isset ( $_POST ['formsubmitted'] )) {
	// Initialize a session:
	session_start ();
	$error = array (); // this aaray will store all error messages
	
	if (empty ( $_POST ['e-mail'] )) { // if the email supplied is empty
		$error [] = 'You forgot to enter  your Email ';
	} else {
		
		if (preg_match ( "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST ['e-mail'] )) {
			
			$Email = $_POST ['e-mail'];
		} else {
			$error [] = 'Your EMail Address is invalid  ';
		}
	}
	
	if (empty ( $_POST ['Password'] )) {
		$error [] = 'Please Enter Your Password ';
	} else {
		$Password = $_POST ['Password'];
	}
	if (empty ( $error )) 	// if the array is empty , it means no error found
	{
		$validationStr = validateUserLogin (  $_POST ['e-mail'], $_POST ['Password'] );
		echo '<p>validationStr is now' . $validationStr.'</p>';
		if ($validationStr == 'invalid') {
				
			echo '<div class="errormsgbox">Oops !invalid username /password combination - pls try again.</div>';
		} else {
			
			switch ($validationStr) {
				case 'guest' :
					echo 'guest';
					header ( "Location: guestPage.php" ); /* Redirect to guest user page */
					exit ();
					break;
				
				case 'normal' :
					echo 'normal';
					header ( "Location: userPage.php" ); /* Redirect to user page */
					exit ();
					break;
				case 'admin' :
					echo 'admin';
					header ( "Location: adminPage.php" ); /* Redirect to the adminstator page */
					exit ();
					
					break;
				default :
					echo 'please contact Paul at the IT Dept';
					echo '<p> validationStr is' . $validationStr . '</p>';
			}
		}
	}
}
?>

<?php
/**
 * @from Authenicate Login username/password pair
* against members table of the database
 * and return authorized level if valid or return invalid string
 */
function validateUserLogin( $email, $password) {
	$lowerCaseEmail = strtolower ( $email );
	
	if ($lowerCaseEmail == 'guest@guest.com') {
		session_start ();
		$_SESSION ['username'] = 'guest';
		$_SESSION ['loggedIn'] = 'yes';
		$_SESSION ['authorizationLevel'] = 'guest';
		
		return 'guest';
	}

	$rows = authenticateLogin($email, $password );
	
	foreach ( $rows as $row ) {
		if (! $row) {
			$msg_error = 'Either Your Account is inactive or Email address /Password is Incorrect';
			echo '<div class="warning">' . $msg_error . ' </div>';				
			return 'invalid'; /* both cookies and db do not match */
		} else {
			
			/* There is a matching row in the db - user authenicated save to cookies */
			echo '<p>successfully login in via db</p>';
			
			// session_start ();
			$_SESSION = $row;
			$_SESSION ['username'] = $row['$username'];
			$_SESSION ['loggedIn'] = 'yes';
			return $_SESSION ['authorizationLevel'];
		}
	}
	return 'invalid';
}

function authenticateLogin($email, $password ){
	$login = new  membersLogin;
	$crud= connectDb();
	
	$sql = "select * from  membersLogin where status='active' and email= '" . $email . "' and password ='" . $password . "';";

	$records = $crud->rawSelect ( $sql );

	/**
	 * * fetch only associative array of values **
	*/
	$login = $records->fetchAll ( PDO::FETCH_ASSOC );
	
	$crud = null; // close db connection
	return $login;
}
?>
