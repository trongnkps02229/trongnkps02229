<?php
session_start();
   include '../model/customer.php';
      include '../model/connect.php';
      include '../model/admin.php';
      include '../model/product.php';
      include '../model/cart.php';
       include '../model/order.php';


if(isset($_POST["action"])){
    $action = $_POST["action"];
}else if(isset($_GET["action"])){
    $action = $_GET["action"];
}else{
    $action="intro";
}

switch($action){
     case "intro":
        include "../view/intro.php";
        break;
    
  
    case "home":
        include "../view/home.php";
        break;
    
    
     case "introduce":
         include "../view/introduce.php";
        break;
    
    case "contact":
         include "../view/contact.php";
        break;
  
    case "product_girl":
        include "../view/product_girl.php";
        break;
    
     case "product_boy":
        include "../view/product_boy.php";
        break;
    
     case "product_two":
        include "../view/product_two.php";
        break;
    
    case "account":
        include "../view/account.php";
        break;
    
 
    
    
    
    
    
 
    case "insert_account_form":
       include "../view/insert_account_form.php";
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

header("location:usercontroller.php?action=login");
         
         
        break;
    
     case "login":
       include "../view/login.php";
        break;
    
    
      
     
    
    
   case "loginProcess":
//    $user = $_POST['txtUsername'];
//        $pass = $_POST['txtPassword'];
//       
//       
//        
//       
//        if ((count($us) != 1) &&  ($us = $u->login($user, $pass)) &&  ($u = new customer())){
//            $_SESSION['cus_to_mer'] = $us[1];
//            include '../view/order.php';
//            
//        } else if 
//            
//       ((count($us) != 1) &&  ($us = $e->login($user, $pass)) &&  ($e = new admin())){
//            $_SESSION['cus_to_mer'] = $us[1];
//            include '../view/ad_product.php';        
//       }   
//           else {
//            echo '<script> alert("Sai user hoac pass!");</script>';
//            include '../view/login.php';
//        }
//       
        
       
        
      
        $d = new admin();
        $user = $_POST["txtUsername"];
        $pass = $_POST["txtPassword"];
         $u = new customer();
          
          
     if(($us = $u->login($user, $pass)) && (count($us) != 1))
       
    	{
           $_SESSION['cus_to_mer'] = "$us[0]";
           header("location:usercontroller.php?action=home");
           
       }else if (($us = $d->login($user, $pass)) && (count($us) != 1))
       
    	{
           $_SESSION['cus_to_mers'] = "$us[0]";
           header("location:admincontroller.php?action=product");
            
             
       }
       
         
       else{
             include "../view/login.php";
                echo '<script> alert("Sai tài khoản hoặc mật khẩu.");</script>';
             
       }
        break;

    
        
        
      case "logout":
       session_destroy();
       header("location:usercontroller.php?action=login");
        break;
      
  
    
     case "add_cart":
        add_item($_POST['productkey'], $_POST['itemqty']);
        include '../view/cart.php';
        break;
    case "update_cart":
        $new_list = $_POST['newqty']; // array
        foreach ($new_list as $key => $qty) { // $key = id ( [?] ) 
            if ($_SESSION['cart'][$key] != $qty) {
                update_item($key, $qty);
            }
        }
        include '../view/cart.php';
        break;
    case "empty_cart":
        unset($_SESSION['cart']);
        include '../view/product_girl.php';
        break;
    
     case "cart":
        
        include '../view/cart.php';
        break;
    
     case 'order':
        if (!isset($_SESSION['cus_to_mer'])) {
            echo '<script> alert("Bạn phải đăng nhập để thanh toán sản phẩm!");</script>';
            include '../view/login.php';
        } else {
            $o = new Oder();
            $orderId = $o->CreateOder($_SESSION['cus_to_mer']);
            $_SESSION['oder_id'] = $orderId;
            $total = 0;
            foreach ($_SESSION['cart'] as $key => $item) {
                $o->insertOderDetail($orderId, $key, $item['cost'], $item['qty'], $item['total']);
                $total+=$item['total'];
            }
            $o->updateOderTotal($orderId, $total);
            include '../view/order.php';
        }
        break;
   
    case "datHang":
        echo $id = $_GET["id"];
        echo $quantity = $_GET["ProQuantity"];
        add_item($id, $quantity);
        include "../view/cart.php";
        break;
    
}

?>
