<?php
//connect to database class
require("../settings/db_class.php");

/**
*A class to handle all customer functions 
*/
/**
 *@author Linda
 *
 */

class customer_class extends db_connection
{ 
    //--Add Customer--//
    public function addCustomer($customer_name,$customer_email,$customer_pass,$customer_country,$customer_city,$customer_contact,$customer_image,$user_role){
		//write sql
		$sql="INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_image`, `user_role`) VALUES ('$customer_name','$customer_email','$customer_pass','$customer_country','$customer_city','$customer_contact','$customer_image','$user_role')";
		//exceute sql
		return $this->db_query($sql);
		

	}
    //--Select Customer or Customers--//
    public function selectACustomer($itemid){
		$sql="SELECT `customer_name` FROM `customer` WHERE `customer_id`='$itemid'";
		return $this->getAdata($sql);

	}

    public function selectAllCustomers(){
		$sql="SELECT * FROM `customer`";
		return $this->getAllData($sql);

	}
    //--Edith Customer Details--//
    public function updateContact($itemid,$itemA,$itemB,$itemC,$itemD,$itemE,$itemF,$itemG){
		$sql="UPDATE `customer` SET `customer_name`='$itemA',`customer_email`='$itemB',`customer_pass`='$itemC',`customer_country`='$itemD',`customer_city`='$itemE',`customer_contact`='$itemF',`user_role`='$itemG' WHERE `customer_id`= '$itemid' ";
		//exceute sql
		return $this->db_query($sql);

	}

    //--Delete Customer--//
    public function deleteCustomer($itemid){
		//write sql
		$sql="DELETE FROM `customer`  WHERE `customer_id`='$itemid'";
		//exceute sql
		return $this->db_query($sql);
		

	}
 //---Check if email Exist--//
	public function checkEmailExist($itemEmail){
		$sql="SELECT `customer_email` FROM `customer` WHERE `customer_email`='$itemEmail'";
		return $this->getAdata($sql);
	}

	public function checkLoginCred($itemEmail){
		$sql="SELECT  * FROM `customer` WHERE `customer_email`='$itemEmail'";
		return $this->getAdata($sql);

	}
}

// "$data= new customer_class();
// $data->addCustomer("Linda",gadzi."my@mail","123456789","Ghana","Kumasi","0242953618","4556","1");"
// $data= new customer_class();
// print_r($data->checkEmailExist("gadzi.eric@gmail.com"));


   
?>
