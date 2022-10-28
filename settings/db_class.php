<?php
//database

//database credentials
require('db_cred.php');

/**
 *@author Linda Arthur
 *@version 1.1
 */
class db_connection
{
	//properties
	public $result=NULL;
	public $conn=NULL;
	

	//connect
	/**
	*Database connection
	*@return bolean
	**/
	function connect(){
		$this->conn=mysqli_connect(SERVERNAME, HOSTNAME, PASSWORD,DATABASE);
		if(mysqli_connect_errno()){
			return false;
		}
		else{
			return true;
			
		}

	} 
	

	//execute a query
	/**
	*Query the Database
	*@param takes a connection and sql query
	*@return bolean
	**/
	function db_query($sql_Query){
		if(!$this->connect()){
			return false;
		}
		elseif($this->conn==null){
			return false;
		}

		$this->result= mysqli_query($this->conn,$sql_Query);
		if($this->result ==false){
			return false;
		}
		else{
			return true;
		}
	}
	


	//execute a query with mysqli real escape string
	//to saveguard from sql injection
	/**
	*Query the Database
	*@param takes a connection and sql query
	*@return bolean
	**/
	


	//fetch a data
	/**
	*get select data
	*@return a record
	**/
	function getAdata($sql_Query){
		//excuting query
		if(!$this->db_query($sql_Query)){
			return false;
		}
		elseif($this->result==NULL){
			return false;
		}
		//return the record
		return mysqli_fetch_assoc($this->result);
		

	}
	


	//fetch all data
	/**
	*get select data
	*@return all record
	**/
	public function getAllData($sql_Query){
		if(!$this->db_query($sql_Query)){
			return false;
		}
		elseif($this->result==NULL){
			return false;
		}
		return mysqli_fetch_all($this->result,MYSQLI_ASSOC);
	}
	


	//count data
	/**
	*get select data
	*@return a count
	**/

	public function countData(){
		//check if result was set
		if ($this->result == null) {
			return false;
		}
		elseif ($this->result == false) {
			return true;
		}
		
		//return a record
		return mysqli_num_rows($this->result);
	}
	
	
}


?>