<?php
            if(!isset($_SESSION["cus_to_mers"])){
                header("Location:usercontroller.php?action=login");
            }
        ?> 
        <a href="admincontroller.php?action=product" title="Sản phẩm">Sản phẩm</a>
        <a href="admincontroller.php?action=account" title="Tài khoản">Tài khoản</a>
        
         <a href="#" title="Đặt hàng">Đặt hàng</a>
        
          <a href="#" title="Phản hồi">Phản hồi</a>
         
      <?php if (isset($_SESSION['cus_to_mers'])){
               echo '<a href="admincontroller.php?action=logout" title="Đăng xuất" style="float:right;font-size:15px;">' .  "thoát" . '</a>';
             echo '<a href="#" style="float:right;margin-right:-35px;font-size:15px;">' . "," . '</a>';
              echo '<a href=#" style="float:right;margin-right:-35px;font-size:15px;color:red;">' . "Xin chào Admin ";
            
              
             
              echo  '</a>';
              
             
   }
              else{  
                     
                  ?>
              
    
                
                  
              <?php } ?> 
      
        
       
