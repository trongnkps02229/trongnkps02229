<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Liên hệ - FeedBack - Yêu cầu - Thắc mắc  - Shop YNT - Phong cách độc đáo  </title>
        <link href="css/style_insert.css" rel="stylesheet" type="text/css" />
        <script>    
            function formtk() {
   var email = document.forms["login"]["Email"].value;
    if (email == ""){
        alert("Vui lòng nhập Email");
        return false;
    }
    if (email.length < 5) {
        alert("Vui lòng nhập hơn 5 kí tự");
        return false;
    }

    var kytụ7 = email.indexOf("@"); kytu7 = email.indexOf(".");
    if (kytu7 == -1) {
        alert("Địa chỉ Email không hợp lệ");
        return false;
    }
    
     var kytu7 = email.indexOf(" ");
    if (kytu7 == 0) {
        alert("Không nhập khoảng trắng");
        return false;
    }
    
    var noidung = document.forms["login"]["noidung"].value;
    if (noidung == ""){
        alert("Vui lòng nhập nội dung");
        return false;
    }
    
      if (noidung.length < 30) {
        alert("Vui lòng nhập hơn 30 kí tự");
        return false;
    }
    
      var kytu8 = noidung.indexOf(" ");
    if (kytu8 == 0) {
        alert("Không nhập khoảng trắng");
        return false;
    }
                
            
           return true;
        alert("Gửi nội dung thành công");
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
                         <a href="#" title="Liên hệ"> 
                            Liên hệ </a> </div> </center><br/><br/>
                            
                            
                            <form  name="login" onsubmit="return formtk();" action="usercontroller.php?action=contact" method="post">
                          
  						
                               
                               
                               <div class="khungchua">
                            		<div class="khungsp4" style="line-height:20px;"> Email khách hàng: </div>
                                    
                                    <div class="khungnhapsp4"> <input type="text" name="Email" title="Nhập email" 
                                                                      placeholder="Nhập email"
                                                                      style="width:170px;"> </div>
                            </div>	
                               
                               
                             <div class="khungchua">
                            		<div class="khungsp4" style="line-height:20px;"> Vấn đề đặt ra: </div>
                                      
                                        <div class="khungnhapsp4"> 
                                           
                                              <input type="radio" name="thacmac" title="Nhập mật khẩu" checked="checked" value="1" title="FeedBack" style="margin-left:-2px;"> FeedBack <br>
                                              <input type="radio" name="thacmac" title="Nhập mật khẩu" value="2" title="Yêu cầu" style="margin-left:-2px;"> Yêu cầu<br>
                                            <input type="radio" name="thacmac" title="Thắc mắc"value="3" title="Thắc mắc - giải đáp" style="margin-left:-2px;"> Thắc mắc - giải đáp
                                          
                                        
                                    
                                    
                                    </div>
                                        
                                  
                                        
                                        
                            </div>	
                                                
                                                
                            
                                <div class="khungchua">
                            		<div class="khungsp4"> Trình bày nội dung: </div>
                                    
                                        <div class="khungnhapsp4"><br> <textarea style="width:320px;height:200px;" name="noidung" placeholder="Nhập nội dung"></textarea> </div>
                                          </div>	     
                          
                           
                                
                                
                                <br><br>
                                     <div class="khungchua">
                            		<div class="khungsp1"> &nbsp; </div>
                                    
                                    <div class="khungnhapsp"> <input type="submit" name="Gui"  value="Gửi" title="Gửi nội dung" style="margin-left:-30px;width:80px;margin-top:20px;"> 
                                    <input type="reset" name="reset"  value="Nhập lại" title="Nhập lại" id="input_reset1" style="margin-right:-17px;margin-top:20px;width:80px"></div>
                            </div>	
                                    
                                    
                                </form>
                                
                                                 
                                                 
                                               
                                                     
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
