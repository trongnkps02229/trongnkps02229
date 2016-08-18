<?php
 

session_start();
   include '../model/customer.php';
      include '../model/connect.php';
       include '../model/admin.php';
        include '../model/product.php';
       
$c = new customer();
$d = new admin();

if(isset($_POST["action"])){
    $action = $_POST["action"];
}else if(isset($_GET["action"])){
    $action = $_GET["action"];
}else{
    $action="product";
}


switch($action){
  
    case "product":
        include "../view/ad_product.php";
        
        break;
    
   
    
    
    
    case "account":
        include "../view/ad_account.php";
        break;
    

    
    
  
     case "cart":
        include "../view/ad_cart.php";
        break;
    
   
    
//     case "contact":
//        include "../view/contact.php";
//        break;
    
    
    
    
    
//    case "connect":
//        include "../model/connect.php";
//        break;
//    
//     case "products":
//        include "../model/products.php";
//        break;
//    
    
    
    
    
    
    
    
    case "insert_product_form":
       include "../view/ad_insert_product_form.php";
        break;
    
    case "insert_product_process":
       $MaSP = $_POST["MaSP"];
$TenSP = $_POST["TenSP"];
$LoaiSP = $_POST["LoaiSP"];
$HaSP = $_POST["HaSP"];
$GiaSP = $_POST["GiaSP"];


$products= new product(null,$MaSP,$TenSP,$LoaiSP,$HaSP,$GiaSP);
$ai = $products->insert();
        header('location:admincontroller.php?action=product');  
        
        break;
    
   
    
    case "update_product_form":
       include "../view/ad_update_product_form.php";
        break;
    
  
    
     case "update_product_process":
      $MaSP = $_POST["MaSP"];
$TenSP = $_POST["TenSP"];
$LoaiSP = $_POST["LoaiSP"];
$HaSP = $_POST["HaSP"];
$GiaSP = $_POST["GiaSP"];


$products= new product(null,$MaSP,$TenSP,$LoaiSP,$HaSP,$GiaSP);
$ai = $products->update();


     header('location:admincontroller.php?action=product');


   
    
        break;
    
    
    
    
  
    
    case "delete_product_form":
       include "../view/ad_delete_product_form.php";
        break;
    
      case "delete_product_process":
     $MaSP = $_POST["MaSP"];


$products= new product(null,$MaSP,null,null,null,null);
$ai = $products->delete();

          header('location:admincontroller.php?action=product');
          
         
        break;
    
    
    
    
    
     
    
    case "insert_account_form":
       include "../view/ad_insert_account_form.php";
        
        break;
    
     case "insert_account_process":
    
         
         $TenTK = $_POST["TenTK"];
$MkTK = $_POST["MkTK"];
$TenKH = $_POST["TenKH"];
$Sdt = $_POST["Sdt"];
$Email = $_POST["Email"];
$DiaChi = $_POST["DiaChi"];



$customers= new customer(null,$TenTK,$MkTK,$TenKH,$Sdt,$Email,$DiaChi);
$ai = $customers->insert();

header('location:admincontroller.php?action=account');
        break;
    
    
    
    
    
    case "update_account_form":
       include "../view/ad_update_account_form.php";
        break;
    
    case "update_account_process":
     $TenTK = $_POST["TenTK"];
$MkTK = $_POST["MkTK"];
$TenKH = $_POST["TenKH"];
$Sdt = $_POST["Sdt"];
$Email = $_POST["Email"];
$DiaChi = $_POST["DiaChi"];



$customers= new customer(null,$TenTK,$MkTK,$TenKH,$Sdt,$Email,$DiaChi);
$ai = $customers->update();

header('location:admincontroller.php?action=account');
        break;
    
    
    
    
   
    
    case "delete_account_form":
       include "../view/ad_delete_account_form.php";
        break;
    
     case "delete_account_process":
       $TenTK = $_POST["TenTK"];


$customers= new customer(null,$TenTK,null,null,null,null,null);
$ai = $customers->delete();
  header('location:admincontroller.php?action=account');
        break;
    
    
       case "logout":
       session_destroy();
       header("location: usercontroller.php?action=login");
        break;
  
   
}
        
   

?>
