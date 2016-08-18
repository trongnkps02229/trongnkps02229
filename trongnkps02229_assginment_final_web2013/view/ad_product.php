
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Danh sách sản phẩm - Shop YNT - Phong cách độc đáo  </title>
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
      				 
        			  <div class="logo" title="YNT">  <a href="#"> <img src="images/logo.png">  </a>
                      </div>
     				 
                       
                        <div class="menu">
                      <?php
                      include 'ad_header.php';
                      ?>
                       </div> 
                       
                      
                       
                       
                       
        
        </div>
        
        
        
        <div class="box">
        
        			<div class="content">
                    		<img src="images/banner1.jpg" title="YNT Shop">
                            <br/><br/>
                            
                              <div class="tieudegioithieu2">
                         <a href="admincontroller.php?action=insert_product_form" title="Thêm sản phẩm"> 
                             <img src="images/cong.png" height="30px" width="30px">  Thêm sản phẩm   </a> </div>
                           <center>
                             <div class="tieudegioithieu1">
                         <a href="#" title="Danh sách sản phẩm"> 
                            Danh sách sản phẩm   </a> </div>  </center><br/><br/>
                            
                            <center>
                         
<!--                              <div class="div_stt">
                              <table>
                           <tr>   <td id="vien">STT </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">1 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">2 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">3 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">4 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">5 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">6 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">7 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">8 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">9 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">10 </td> <tr>
                              <tr>   <td id="vien2" style="height:35px;">11 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">12 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">13 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">14 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">15 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">16 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">17 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">18 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">19 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">20 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">21 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">22</td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">23 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">24 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">25 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">26 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">27 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">28 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">29 </td> <tr>
                             <tr>   <td id="vien2" style="height:35px;">30 </td> <tr>
                            
                              </table>
                            </div>-->
                            				
                                            
                                            	<div class="tenkhachhang1">
                                                            <table>
                                                            	<tr >
                                                                	
                                                                    <td  id="vien" style="width:130px;text-align:center;">   Mã sản phẩm </td>
                                                                    <td  id="vien" style="width:150px;text-align:center;"> Tên sản phẩm  	</td>
                                                                    <td  id="vien" style="width:150px;text-align:center;"> Loại sản phẩm 	</td>
                                                                 	    <td  id="vien" style="width:150px;text-align:center;"> Hình ảnh  	</td>
                                                                          <td  id="vien" style="width:150px;text-align:center;"> Giá   	</td>
                                                                     <td  id="vien" style="width:50px;text-align:center;">Sửa 	</td>
                                                                     <td  id="vien" style="width:50px;text-align:center;"> Xóa 	</td>
                                                                </tr>
                                                                
                                                                </table>
                            								</div>
                            
                            
                            
                            
                            
           <?php            
            $n = new product();
            $r = $n->getList();
            while($set = $r->fetch()):
        ?>
             	<table>        
                                                				<tr id="trr">
                                                                	
                                                                    <td id="vien2" style="width:130px;text-align:center;"> <?php echo $set[1]  ?> </td>
                                                                    <td id="vien2" style="width:150px;text-align:center;"><?php echo $set[2]  ?> 	</td>
                                                                    <td id="vien2" style="width:150px;text-align:center;"> <?php echo $set[3]  ?> 	</td>
                                                                 	    <td id="vien2" style="width:150px;text-align:center;"> <img src="images/sanpham/<?php echo $set[4]  ?> " height="100px" width="100px">  	</td>
                                                                          <td  id="vien2" style="width:150px;text-align:center;"><?php echo number_format($set[5],0,',', '.') ?>  	</td>
                                                                     <td id="vien2" style="width:50px;text-align:center;"> <a href="admincontroller.php?action=update_product_form&id=<?php echo $set[0]  ?>" title="Sửa"> <img src="images/fix.png" width="30px" height="30px"> </a>	</td>
                                                                     <td id="vien2" style="width:50px;text-align:center;"> <a href="admincontroller.php?action=delete_product_form&id=<?php echo $set[0]  ?>" title="Xóa"><img src="images/del.png" width="30px" height="30px"> </a> 	</td>
                                                                </tr>
                                                      </table>          
                                                               
        <?php
            endwhile;
            
        ?>
       
       
       
       
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
     <a href="#"> <br/> Cửa hàng quần áo YNT<br/>Bản quyền này của &copy;trongnkps02229<br>
     				</a>
      </div>
      
    </body>
</html>
