<?php
class membersStatus
{
	
	private  $id = 0;
	private $activation =NULL;
	private $status ='active';
	
	
	public function setMembersStatus($id,$activation, $status){
		$this->id =$id;
		$this->activation = $activation;
		$this->status = $status;		
	}
}

//  membersStatusObj = new membersStatus();

?>