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

class product_class extends db_connection
{ 
    //Add product Brand
    public function addProductBrand($brandName){
        $sql="INSERT INTO `brands`(`brand_name`) VALUES ('$brandName')";
        return $this->db_query($sql);

    }
    //Add product Category
    public function addProductCategory($cat_name){
        $sql="INSERT INTO `categories`(`cat_name`) VALUES ('$cat_name')";
        return $this->db_query($sql);


    }
    //Add product 
    public function addProduct($product_cat,$product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords){
        $sql="INSERT INTO `products`(`product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
        return $this->db_query($sql);


    }

}
?>