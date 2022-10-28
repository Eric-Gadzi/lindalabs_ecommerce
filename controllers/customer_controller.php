<?php
//connect to the user account class
include("../classes/customer_class.php");



//sanitize data




//--INSERT--//
function addCustomer_ctr($customer_name,$customer_email,$customer_pass,$customer_country,$customer_city,$customer_contact,$customer_image,$user_role){
    $customer=new customer_class();
    return $customer->addCustomer($customer_name,$customer_email,$customer_pass,$customer_country,$customer_city,$customer_contact,$customer_image,$user_role);

}

//--Checking if email Exist--//
function checkLoginCred_ctr($itemEmail){
    $customer=new customer_class();
    return $customer->checkLoginCred($itemEmail);

}
function checkEmailExist_ctr($itemEmail){
    $customer=new customer_class();
    return $customer->checkEmailExist($itemEmail);

}

//--SELECT--//
function selectACustomer_ctr($itemid){
    $customer=new customer_class();
    return $customer->selectACustomer($itemid);
}

function selectAllCustomers_ctr(){
    $customer=new customer_class();
    return $customer->selectAllCustomers();
}

//--UPDATE--//
function updateContact_ctr($itemid,$itemA,$itemB,$itemC,$itemD,$itemE,$itemF,$itemG,$itemH){
    $customer=new customer_class();
    return $customer->updateContact($itemid,$itemA,$itemB,$itemC,$itemD,$itemE,$itemF,$itemG,$itemH);
    
}

//--DELETE--//
function deleteCustomer_ctr($itemid){
    $customer=new customer_class();
    return $customer->deleteCustomer($itemid);
    
}
// addCustomer_ctr("Linda","my25@mail","123456789","Ghana","Kumasi","0242953618","4556","1");
?>