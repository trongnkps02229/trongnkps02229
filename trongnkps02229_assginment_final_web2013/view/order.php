<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Đơn hàng - Shop YNT - Phong cách độc đáo  </title>
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
                            <br/><br/>
                         
                         
                            <center>        
                            
                              <?php 
            $result=$o->getOrder($_SESSION['oder_id']);
            $odi=$result[0];
            $dc=$result[1];
            $ctid=$result[3];
            $ctn=$result[4];
            $d=new DateTime($dc);
            echo '<h1>Đơn đặt hàng - Hóa đơn số: ' . '<font color="#8A2BE2">' .$odi. '</font>' .'</h1>';
            echo '<h2>Khách hàng: '. '<font color="blue">' . $ctn. '</font>' . '</h2>';
            echo '<h3>Ngày lập: '. '<font color="#FFA07A">' . $d->format('d/m/Y'). '</font>' .'</h3>';
            ?>
            <table width="60%" border="1">
             
                <tr style="background-color:#f1f1f1">
                  
                    <td style="width:150px;">Tên</td>
                    <td style="width:150px;">Đơn giá</td>
                    <td style="width:120px;">Số lượng</td>
                    <td>Thành tiền</td>
                </tr>
                <?php 
                $result1=$o->getOderDetail( $_SESSION['oder_id']);
                while($set=$result1->fetch()):
                
                ?>
                <tr id="trr">
                    
                    <td style="text-align: right;"><?php echo  $set["name"]; ?></td> 
                     <td style="text-align: right;"><?php echo  number_format($set["price"],0,',', '.') . " VNĐ" ; ?></td> 
                    <td style="text-align: right;"><?php echo  $set ["quanlity"]; ?></td> 
                   
                    <td style="text-align: right;"><?php echo  number_format($set["total"],0,',', '.') . " VNĐ" ; ?></td> 
                </tr>
                <?php endwhile; ?>
                <tr id="trr">
                    <td colspan='3' style="text-align: right; font-weight: bold;"> Tổng hóa đơn:</td>
                    <td style="color: red; font-weight: bold;text-align: right;"><?php echo number_format($result['total'],0,',', '.') . " VNĐ" ; ?></td>
                </tr>
             
            </table>


                            
                                <br><br>
                                
                                <img src="images/trong1.png">
                                <h3> Cảm ơn khách hàng đã đặt hàng !! Thank You !! </h3>
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
