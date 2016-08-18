<style>
   .khungtren{margin-top:0px;float:right;margin-left:20px;}
</style>
<a href="usercontroller.php?action=home" title="Home"><img src="images/home6.png" height="30px" width="30px" title="Home"></a>
<a href="usercontroller.php?action=introduce" title="Giới thiệu">Giới thiệu</a> 
        <a href="usercontroller.php?action=product_girl" title="Sản phẩm">Sản phẩm</a> 
        <a href="usercontroller.php?action=cart" title="Giỏ hàng">Giỏ hàng</a>  
         <a href="usercontroller.php?action=contact" title="Liên hệ">Liên hệ</a>
       
         
         
        
   <?php if (isset($_SESSION['cus_to_mer'])){
               echo '<a href="usercontroller.php?action=logout" title="Đăng xuất" style="float:right;font-size:15px;">' .  "thoát" . '</a>';
             echo '<a href="#" style="float:right;margin-right:-35px;font-size:15px;">' . "," . '</a>';
              echo '<a href=#" style="float:right;margin-right:-35px;font-size:15px;color:red;">' . "Xin chào khách hàng ";
            
              
             
              echo  '</a>';
              
             
   }
              else{  
                     
                  ?>
              
      <a  href="usercontroller.php?action=insert_account_form" title="Đăng kí" style="float:right;"> Đăng kí
                
                </a>
         <a href="#" style="float:right;margin-right:-35px;"> / </a>
         <a href="usercontroller.php?action=login" title="Đăng kí" style="float:right;margin-right:-35px;"> Đăng nhập
                
                </a>  
              <?php } ?> 
      
             
