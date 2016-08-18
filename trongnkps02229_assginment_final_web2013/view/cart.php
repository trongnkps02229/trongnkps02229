<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Giỏ hàng - Shop YNT - Phong cách độc đáo  </title>
        <link href="css/style_list.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="images/logo.ico" />
         <!--Hieu ung con tro chuot-->
<script type="text/javascript" src="images/hieuung/rainbow.js"></script>
<style type="text/css">
a:hover
{
text-decoration: none;
cursor : url("images/hieuung/clovely.cur"), progress;
}
 
HTML,BODY{cursor: url("images/hieuung/clovel.cur"), url("images/hieuung/rainbow-ani.gif"), auto;}
</style>
<!--Ket thuc hieu ung-->
  <script type="text/javascript" src="javascript/jquery.min.js"></script>
  <script type="text/javascript" src="javascript/slider/jquery.slider.min.js"></script>
	
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".slider").slideshow({
        width      : 960,
        height     : 300,
       
      });
    });
  </script>
	<style type="text/css">

		
		
	

		

		#go_top{
			display:block;
			
			height:31px;
			position:fixed;
			
			bottom:100px;
			right:70px;
			display:none;
		}

		#go_top:before{
			
			position:Absolute;
		
			
			border:20px solid transparent;
			border-bottom:20px solid yellow;
			left:5px;
			top:-8px;
		}
		


		
						
		</style>
           <script>
         
         
            function formtk() {
  var f = document.forms["login"]["txtUsername"].value;
   
    if (f == "") {
        alert("Vui lòng nhập tên tài khoản");
        return false;
    }
   
   
	
        
        
        
	  var k = document.forms["login"]["txtPassword"].value;
   
    if (k == "") {
        alert("Vui lòng nhập mật khẩu");
        return false;
    }
   
        return true;
            }
   
         
         
         
                  
		

	  
         </script>
    </head>
    <body>
      
        <div class="head">
      				 
        			  <div class="logo" title="YNT"> 
                                      <a href="usercontroller.php?action=home"> <img src="images/logo.png">  </a>
                      </div>
     				 
                       
                     <div class="menu">
                      <?php
                      include 'header.php';
                      ?>
                       </div> 
                       
                       
                       
        
        </div>
        
        
        
        <div class="box">
        
        			<div class="content4">
                    		<img src="images/banner1.jpg" title="YNT Shop">
                            <br/>
                         
                            <center>
                            
                            
                             <h1>Danh sách giỏ hàng</h1>
        <?php if(!isset($_SESSION['cart']) || count($_SESSION['cart'])== 0 ): ?>
                             <h2><p style="color: red;">Bạn chưa chọn sản phẩm! </h2></p>
                            <img src="images/trong.png">
        <?php else: ?>
                            
                                 <div class="noi"><a href="?action=product_girl">Thêm sản phẩm</a> -
                                     <a href="?action=empty_cart">Làm trống giỏ hàng</a> </div> <br>
        <form action="usercontroller.php" method="POST">
            <input type="hidden" name="action" value="update_cart"/>
            <table border="1" width="60%">
                <tr style="background-color:#f1f1f1;">
                    <td style="width:150px;">Tên sản phẩm</td>
                     <td style="width:150px;">Giá</td> 
                     <td style="width:120px;"> Số lượng</td>
                      <td>Thành Tiền</td>
                </tr>
                <?php 
                        foreach ($_SESSION['cart'] as $key =>$item):
                           
                            $cost = number_format($item['cost'],0,',', '.') . " VNĐ";
                        $total = number_format($item['total'],0,',', '.') . " VNĐ";
                      
                ?>
                <tr id="trr">
                    <td style="text-align: right;">
                        <?php echo $item['name'];?>
                    </td>
                    <td style="text-align: right;">
                        <?php echo $cost ?>
                    </td>
                    <td style="text-align: right;">
                        <input type="text" name ="newqty[<?php echo $key; ?>]" value ="<?php echo $item['qty']; ?>"style="width:98%;text-align:right;"/>
                    </td>
                    <td style="text-align:right;">
                        <?php echo $total; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr id="trr">
                    <td colspan="3" style="text-align: right;">
                        <b>Tổng tiền</b>
                    </td >
                    <td style="text-align: right;">
                        <b>  <font color="red">  <?php echo get_subtotal(); ?> </font> <b>
                    </td>
                </tr>
                <tr id="trr">
                    <td colspan="4" style="text-align: right;">
                        <input type="submit" value="Cập nhật" style="margin-right:37px;"/>
                        <span class="noi">   <a href="?action=order" style="margin-right:2px;">Thanh toán</a> </span>
                    </td>
                </tr>
            </table>
            <br>
            
            <br> <p style="color:red">*Nhấn Thanh toán để mua hàng, làm trống giỏ hàng hoặc thêm sản phẩm.</p>
            <p style="color:red">*Có thể chọn lại số lượng và phải nhấn cập nhật. Chọn số 0 để bỏ sản phẩm.</p>
    <img src="images/trong2.png">
        </form> 
        <?php endif; ?>
                           
        
        <style>
            .noi a{
                text-decoration: none;font-size:20px; color:blue;
            }
            .noi a:hover{ text-decoration:none;}
        </style>
        </div>
</center>

                            
                            
        
       
       
                            </div>
                            
                            
                          
                            
                              
                            
                           
                    </div>
                     <a href="#" id="go_top" title="Đầu trang"> <img src="images/top1.jpg"></a>

		<script type="text/javascript">
		(function(){
			// Ẩn hiện icon go-top
			$(window).scroll(function(){
				if( $(window).scrollTop() == 0 ) {
					$('#go_top').stop(false,true).fadeOut(600);
				}else{
					$('#go_top').stop(false,true).fadeIn(600);
				}
			});
			
			// Cuộn trang lên với scrollTop
			$('#go_top').click(function(){
				$('body,html').animate({scrollTop:0},400);
				return false;
			})
		})(jQuery);
		</script>		
                    
        </div>
        
        
      
      
      <div class="foter">
     <a href="usercontroller.php?action=home"> <br/> Cửa hàng quần áo YNT<br/>Bản quyền này của &copy;trongnkps02229<br>
     				</a>
      </div>
      
    </body>
</html>
