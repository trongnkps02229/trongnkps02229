<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Đăng nhập - Shop YNT - Phong cách độc đáo  </title>
        <link href="css/style_insert.css" rel="stylesheet" type="text/css" />
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
         
          
      
      <link rel="shortcut icon" href="images/logo.ico" />
        <!--Hieu ung con tro chuot-->
<script type="text/javascript" src="images/hieuung/rainbow.js"></script>
<style type="text/css">
a:hover
{
text-decoration: none;
cursor : url("images/hieuung/clovely.cur"), progress;
}

input[type="reset"]{
	cursor : url("images/hieuung/clovely.cur"), progress;
}

input[type="submit"]{
	cursor : url("images/hieuung/clovely.cur"), progress;
}

input[type="file"]{
	cursor :url("images/hieuung/clovely.cur"), auto;
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
        
        			<div class="content">
                    		<img src="images/banner1.jpg" title="YNT Shop">
                            
                           
                            <div class="khunginput">
                            <br/>
                            <center>
                            <div class="tieudegioithieu1">
                         <a href="#" title="Đăng nhập"> 
                            Đăng nhập </a> </div> </center><br/><br/>
                            
                            
                            <form  name="login" onsubmit="return formtk();" action="usercontroller.php?action=loginProcess" method="post">
                          
  						<input type="hidden" name="action" value="loginProcess">	
                               
                               
                               <div class="khungchua">
                            		<div class="khungsp1"> Tài khoản: </div>
                                    
                                    <div class="khungnhapsp1"> <input type="text" name="txtUsername" title="Nhập tài khoản" style="width:170px;"> </div>
                            </div>	
                               
                               
                             <div class="khungchua">
                            		<div class="khungsp1"> Mật khẩu: </div>
                                    
                                    <div class="khungnhapsp"> <input type="password" name="txtPassword" title="Nhập mật khẩu" style="width:170px;"> </div>
                            </div>	
                            
                           
                          
                           
                                
                                
                                
                                     <div class="khungchua">
                            		<div class="khungsp1"> &nbsp; </div>
                                    
                                    <div class="khungnhapsp"> <input type="submit" name="ok"  value="Đăng Nhập" title="Đăng nhập" style="margin-left:-1px;"> 
                                    <input type="reset" name="reset"  value="Hủy bỏ" title="Nhập lại" id="input_reset1" style="margin-right:-17px;"></div>
                            </div>	
                                    
                                    
                                </form>
                                       Đăng kí  tài khoản hoặc sử dụng tài khoản có sẳn bên dưới : <br/> <br/>        
                                       <center>      TK: admin </br>Pass: 123456 </br> để đăng nhập thử  ở chế độ admin <br/>--------------------------------------------<br/>
                                           TK: customer <br/> Pass:123456  <br/>để đăng nhập thử ở chế độ khách hàng <br/>--------------------------------------------<br/></center>
                                                 
                                                 
                                               
                                                     
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
