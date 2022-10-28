<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class general_class extends db_connection
{
	//--INSERT--//
	public function addContact($itemone,$itemtwo){
		//write sql
		$sql="INSERT INTO `phonebook` (`pname`, `pphoned`) VALUES ('$itemone','$itemtwo')";
		//exceute sql
		return $this->db_query($sql);
		

	}
	
	

	//--SELECT--//
	public function selectOne($itemid){
		$sql="SELECT `pname` FROM `phonebook` WHERE `pid`='$itemid' ";
		return $this->getAdata($sql);

	}

	public function selectAll(){
		$sql="SELECT * FROM `phonebook`";
		return $this->getAllData($sql);

	}



	//--UPDATE--//
	public function updateContact($itemid,$newitemone,$newitemtwo){
		$sql="UPDATE `phonebook` SET `pname`='$newitemone',`pphoned`='$newitemtwo' WHERE `pid`='$itemid' ";
		//exceute sql
		return $this->db_query($sql);

	}



	//--DELETE--//
	public function deleteContact($itemid){
		//write sql
		$sql="DELETE FROM `phonebook` WHERE `pid`='$itemid'";
		//exceute sql
		return $this->db_query($sql);
		

	}
	
	

}

?>