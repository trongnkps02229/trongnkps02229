

<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Tài khoản - Shop YNT - Phong cách độc đáo  </title>
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
                         <a href="admincontroller.php?action=insert_account_form" title="Thêm tài khoản"> 
                             <img src="images/cong.png" height="30px" width="30px">  Thêm tài khoản   </a> </div>
                           <center>
                             <div class="tieudegioithieu1">
                         <a href="#" title="Danh sách khách hàng "> 
                            Danh sách khách hàng</a> </div>  </center><br/><br/>
                            
                          
                            
                            
                             
                              
                   <!--           <div class="div_stt">
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
                            
                              </table>
                            </div> -->
                            							<center>
                            								<div class="tenkhachhang">
                                                            <table>
                                                            	<tr>
                                                                	
                                                                    <td  id="vien" style="width:150px;text-align:center;">   Tên tài khoản </td>
                                                                    <td  id="vien" style="width:150px;text-align:center;"> Mật khẩu  	</td>
                                                                    <td  id="vien" style="width:150px;text-align:center;"> Tên khách hàng	</td>
                                                                 	    <td  id="vien" style="width:250px;text-align:center;"> Email  	</td>
                                                                     <td  id="vien" style="width:50px;text-align:center;">Sửa 	</td>
                                                                     <td  id="vien" style="width:50px;text-align:center;"> Xóa 	</td>
                                                                </tr>
                                                                
                                                                </table>
                            								</div>
                            								
          <?php
          
            $n = new customer();
            $r = $n->getList();
            
           
            while($set = $r->fetch()):
        ?>
              					
                   
                   								<table>        
                                                				<tr id="trr">
                                                                	
                                                                    <td id="vien2" style="width:150px;text-align:center;"> <?php echo $set[1]  ?> </td>
                                                                    <td id="vien2" style="width:150px;text-align:center;"><?php echo $set[2]  ?> 	</td>
                                                                    <td id="vien2" style="width:150px;text-align:center;"> <?php echo $set[3]  ?> 	</td>
                                                                 	    <td id="vien2" style="width:250px;text-align:center;"> <?php echo $set[5]  ?>  	</td>
                                                                     <td id="vien2" style="width:50px;text-align:center;"> <a href="admincontroller.php?action=update_account_form&id=<?php echo $set[0]  ?>" title="Sửa"> <img src="images/fix.png" width="30px" height="30px"> </a>	</td>
                                                                     <td id="vien2" style="width:50px;text-align:center;"> <a href="admincontroller.php?action=delete_account_form&id=<?php echo $set[0]  ?>" title="Xóa"><img src="images/del.png" width="30px" height="30px"> </a> 	</td>
                                                                </tr>
                                                      </table>          
                                                               
                                                    	
                                                            
                                                                
                                                                
                                                               
                                                                
                                                          
                                                           
                                                                
                                                            
                                                           
                                                  
            
        <?php
            endwhile;
          
        ?>
            
       
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
     <a href="#"> <br/> Cửa hàng quần áo YNT<br/>Bản quyền này của &copy;trongnkps02229<br>
     				</a>
      </div>
      
    </body>
</html>
