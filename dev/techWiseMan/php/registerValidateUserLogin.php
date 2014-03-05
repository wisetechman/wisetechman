<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="utf-8">
<title>Register New Users</title>
<?php
require ('common-external-includes.php');
?>

<?php
/**
 *  authenicate the user loggin in the loginPage.php page on the client side
 */
include 'CrudClass.php';

/**
 * new crud object for the userLogin table **
 */
$crud = new crud ();

/**
 * * The DSN **
 */

$crud->dsn = "mysql:dbname=wisetechman;host=localhost";

/**
 * * MySQL username and password **
 */

$crud->username = 'message';
$crud->password = 'board';

/* pah */

$userName = $_POST ['username'];

/* make sure username has not been used before */
$userNameUsed =checkUserName($crud, $userName);
if($userNameUsed == 'ok'){

// $pWord = md5($_POST['pwd']);
	$passWord = $_POST ['password'];
	$companyName = $_POST ['company'];
	$telephoneNumber = $_POST ['telephone'];

/**
echo '<p>'.$userName.'</p>';
echo '<p>'.$passWord.'</p>';
echo '<p>'.$companyName.'</p>';
echo '<p>'.$telephoneNumber.'</p>';
*/

	$values = array(
		array('username'=>$userName, 'password'=>$passWord,'authorizationLevel'=>'normal','accountStatus'=>'active',
				'companyName'=>$companyName,'telephoneNumber'=>$telephoneNumber));
/*** insert the array of values ***/
	$crud->dbInsert('userlogin', $values);
	echo '<p>You are now registerated, please may log in</P>';
	echo "<p><a href='loginPage.php'>Press to Return to Login page</a><p/>";
//	header ( "Location: loginPage.php");

}else{
	echo '<p>user already an active user - please pick another name of login</p>';
	echo "<p><a href='registerUserPage.php'>Press to return to Registration page </a><p/>";
//	header ( "Location: registerUserPage.php");
}

?>

<?php
/**
 * @ check  Login username i snot already used - i.e. an active name in the db

 */
function checkUserName($crud, $username2Check) {
	$sql = "select username from userlogin where accountStatus='active' and username= '".$username2Check."';";
	// echo $sql;
	$records = $crud->rawSelect ( $sql );

	/**
	 * * fetch only associative array of values **
	 */
	$rows = $records->fetchAll ( PDO::FETCH_ASSOC );
	if(!$rows){
		return 'ok';
	}else{
		return 'no';
	}
}
?>
</head>

<body>


</body>
</html>