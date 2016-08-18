<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Danh sách sản phẩm nam - Shop YNT - Phong cách độc đáo  </title>
        <link href="../controller/css/style_list.css" rel="stylesheet" type="text/css" />
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
         
    </head>
    <body>
      
        <div class="head">
      				 
        			  <div class="logo" title="YNT">  <a href="usercontroller.php?action=home"> <img src="images/logo.png">  </a>
                      </div>
     				 
                       
                        <div class="menu">
                      <?php
                      include 'header.php';
                      ?>
                       </div> 
                       
                      
                       
                       
                       
        
        </div>
        
        
        
        <div class="box">
        
        			<div class="content3">
                    		<img src="images/banner1.jpg" title="YNT Shop">
                            <br/><br/>
                           <center>
                             <div class="tieudegioithieu1">
                         <a href="#" title="Danh sách sản phẩm"> 
                            Danh sách sản phẩm </a> </div>  </center><br/><br/>
                            
                            <center>
                            <div class="khung_quanly"> <a href="usercontroller.php?action=product_girl">  Đồ Nữ </a>
                            </div>
                             <div class="khung_quanly"> <a href="usercontroller.php?action=product_boy"><font color="#FF0000">Đồ Nam </font> </a>
                            </div>
                             <div class="khung_quanly"> <a href="usercontroller.php?action=product_two"> Đồ đôi </a>
                            </div>
                            </center>
                            
                            <br/><br/>
                            
                            
                            
                            
                            <center>                
      <table>
                <tr>
                    <?php 
                    $pro = new product();
                    $result=$pro->getList1();
                    $j=1;
                    while ($set = $result ->fetch()):
                    ?>
                    <td>
                        <form action="usercontroller.php?action=add_cart" method="post">
                            <input type="hidden" name="action" value="add_cart"/>
                            <table style="margin-right:90px;" class="khunghinhsanpham">
                                <tr>
                                    <td>
                                        <img src="images/sanpham/<?php echo $set[4] ?>" width="250px" />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        <input type="hidden" name ="productkey" value ="<?php echo $set[0]; ?>"/>
                                        
                                            
                                        <span style="color:blue;font-size:13pt;font-weight:bold"><?php echo $set[1]   ?> - <?php echo $set[2]   ?></span> <br>
                                       <span style="color:red;font-size:13pt;font-weight:bold"><?php echo number_format($set[5],0,',', '.') . " VNĐ" ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                      Số lượng :  <select name="itemqty">
                                            <?php 
                                            for ($i=1; $i<=10;$i++):
                                            ?>
                                            <option value="<?php echo $i; ?>">
                                            <?php echo $i; ?>
                                            </option>
                                            <?php endfor; ?>
                                        </select>
                                        <input type ="submit" value="Đặt hàng"/>
                                    </td>
                                </tr>
                                <br><br><br>
                            </table>
                        </form>
                    </td>
                    <?php 
                    if($j%3==0)
                        echo '</tr> <tr>';
                    $j++;
                endwhile;
                    ?>
                </tr>
                
            </table>
                                
                                </center>
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
