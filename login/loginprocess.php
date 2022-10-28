<?php
//require customer controller file
require("../controllers/customer_controller.php");

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    //password issues
    
    //check if email 
    $login=checkLoginCred_ctr($email);
    if($login){
        $hashpassword=$login['customer_pass'];
        if (password_verify($password, $hashpassword)) {
            header("location:sucess.php");
        } else {
            echo 'Invalid password.';
        }
}
    else{
        echo "Email unaviable";
    }

   

}
?>