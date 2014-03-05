<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Activate Your Account</title>

<style type="text/css">
body {
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
	font-size:12px;
}

 .success {
	border: 1px solid;
	margin: 0 auto;
	padding:10px 5px 10px 60px;
	background-repeat: no-repeat;
	background-position: 10px center;

     width:450px;
     color: #4F8A10;
	background-color: #DFF2BF;
	background-image:url('images/success.png');
}

 .errormsgbox {
	border: 1px solid;
	margin: 0 auto;
	padding:10px 5px 10px 60px;
	background-repeat: no-repeat;
	background-position: 10px center;

     width:450px;
    	color: #D8000C;
	background-color: #FFBABA;
	background-image: url('images/error.png');
}

</style>

</head>
<body>
<?php
include ('../library/settings.php');

if (isset($_GET['email']) && preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $_GET['email']))
{
    $email = $_GET['email'];
}
if (isset($_GET['key']) && (strlen($_GET['key']) == 32))//The Activation key will always be 32 since it is MD5 Hash
{
    $key = $_GET['key'];
}


if (isset($email) && isset($key))
{
	
	$crud = connectDb ();
    // Update the database to set the "activation" field to null

    $rtn = $crud->dbUpdateActivation( $key);

    echo '<div class="success">Your account is now active. You may now <a href="loginPage.php">Log in</a></div>';
    
    // Print a customized message:
/*
 *     echo '<p>'.$rtn.'</p>';

    if ($upated)//if update query was successfull
    {
		echo '<div class="success">Your account is now active. You may now <a href="loginPage.php">Log in</a></div>';
    } else{
		echo '<div class="errormsgbox">Oops !Your account could not be activated. Please recheck the link or contact the system administrator.</div>';
		
    }
    */
//    mysqli_close($dbc);

} else {
        echo '<div class="errormsgbox">Error Occured .</div>';
}
	$crud = null; // close db connection
?>
</body>
</html>