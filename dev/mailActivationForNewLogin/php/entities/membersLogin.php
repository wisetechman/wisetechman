<?php
// include ('../library/settings.php');

class membersLogin
{
	
	private  $id = 0;
	private  $username = NULL;
	private  $password = NULL;
	private  $email = NULL;
	private  $authorizationLevel = 'normal';
	private $status ='active';

		
	public function setMembersLogin($id, $username, $password , $email, $authorizationLevel ){
		$this->id =$id;
		$this->username =  $username;
		$this->password = $password ;		
		$this->email =  $email;
		$this->authorizationLevel =  $authorizationLevel ;
		$this->status = $status;
	}	
}

?>