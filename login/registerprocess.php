<?php
//require customer controller file
require("../controllers/customer_controller.php");

if(isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $contact=$_POST['contact'];
    $image=NULL;
    $uRoles=1;
    
    $newpassword= password_hash($password, PASSWORD_ARGON2I);

    

    //Check if email exists
    if(checkEmailExist_ctr($email) === NULL){

        $addCust=addCustomer_ctr($fullname,$email,$newpassword,$country,$city,$contact,$image,$uRoles);
        if($addCust){
           
            echo "Success";
            header('location:login.php');
        }
        else{
            echo "Registration Failed";
        }

    }
    else{
        echo "Email Exist already";
    }
    

    

    

}
?>