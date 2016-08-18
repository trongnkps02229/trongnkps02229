  <?php
            if(!isset($_SESSION["cus_to_mers"])){
                header("Location:usercontroller.php?action=login");
            }
        ?>

<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Thêm tài khoản - Shop YNT - Phong cách độc đáo  </title>
        <link href="css/style_insert.css" rel="stylesheet" type="text/css" />
        <script>
		  function formtk() {
  var f = document.forms["login"]["TenTK"].value;
   
    if (f == "") {
        alert("Vui lòng nhập tên tài khoản");
        return false;
    }
   
    
    if (f.length > 32) {
        alert("Tên tài khoản không quá 32 kí tự");
        return false;
    }
	
	 if (f.length < 5) {
        alert("Tên khách hàng ít nhất 5 kí tự");
        return false;
    }
    
     var kytu3 = f.indexOf(" ");
    if (kytu3 == 0) {
        alert("Không nhập khoảng trắng");
        return false;
    }
	
        
        
        
	  var k = document.forms["login"]["MkTK"].value;
   
    if (k == "") {
        alert("Vui lòng nhập mật khẩu");
        return false;
    }
   
    
    if (k.length > 32) {
        alert("Mật khẩu không quá 32 kí tự");
        return false;
    }
	
	 if (k.length < 5) {
        alert("Mật khẩu ít nhất 5 kí tự");
        return false;
    }
    
     var kytu4 = k.indexOf(" ");
    if (kytu4 == 0) {
        alert("Không nhập khoảng trắng");
        return false;
    }
	
	
	
var y = document.forms["login"]["TenKH"].value;
    var kty = isNaN(y);
    if (y == "") {
        alert("Vui lòng nhập tên khách hàng");
        return false;
    }
    if (kty == false) {
        alert("Tên khách hàng phải dạng chữ");
        return false;
    }
    if (y.length > 32) {
        alert("Tên khách hàng không quá 32 kí tự");
        return false;
    }
	
	 if (y.length < 5) {
        alert("Tên khách hàng ít nhất 5 kí tự");
        return false;
    }
    
     var kytu5 = y.indexOf(" ");
    if (kytu5 == 0) {
        alert("Không nhập khoảng trắng");
        return false;
        
        
    }
	
     
 var z = document.forms["login"]["Sdt"].value;
 var ktrasdt = isNaN(z);
      
   
    if (z == "") {
        alert("Vui lòng nhập số điện thoại");
        return false;
    }
     if (ktrasdt == true) {
        alert("số điện thoại phải ở định dạng số");
        return false;
    }
    
    if (z.length > 15) {
        alert("Số điện thoại không quá 15 kí tự");
        return false;
    }
	
	 if (z.length < 10) {
        alert("Số điện thoại ít nhất 10 kí tự");
        return false;
    }





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
   
    
    
    
    
    
    
    
    
       var diachi = document.forms["login"]["DiaChi"].value;
    if (diachi == "") {
        alert("Vui lòng nhập địa chỉ");
        return false;
    }  
    
     
    
      if (diachi.length < 5 ) {
        alert("Địa chỉ phải hơn 5 ký tự");
        return false;
    }   
    
    if (diachi.length > 75) {
        alert("Địa chỉ không quá 75 ký tự");
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
                            
                           
                            <div class="khunginput">
                            <br/>
                            <center>
                            <div class="tieudegioithieu1">
                         <a href="#" title="Tạo tài khoản"> 
                            Thêm tài khoản </a> </div> </center><br/><br/>
                            
                            
                            <form action="admincontroller.php?action=insert_account_process"
                                 
                                  method="POST" onsubmit="return formtk();" name="login">
                          
  							
                             
                               
                               
                           	   <div class="khungchua">
                            		<div class="khungsp"> Tên tài khoản: </div>
                                    
                                    <div class="khungnhapsp"> <input type="text" name="TenTK"
                                                                      style="width:170px;"
                                                                     placeholder="Nhập tên tài khoản" title="Nhập tên tài khoản"> </div>
                            </div>	
					
                           
							   <div class="khungchua">
                            		<div class="khungsp"> Mật khẩu: </div>
                                    
                                    <div class="khungnhapsp"> <input type="text" name="MkTK" 
                                                                      style="width:170px;"
                                                                     placeholder="Nhập mật khẩu" title="Nhập mật khẩu"> </div>
                            </div>	
                               
                               
                             <div class="khungchua">
                            		<div class="khungsp"> Tên khách hàng: </div>
                                    
                                    <div class="khungnhapsp"> <input type="text" name="TenKH" 
                                                                      style="width:170px;"
                                                                     placeholder="Nhập tên khách hàng" title="Nhập tên khách hàng"> </div>
                            </div>	
                           
				
                                 <div class="khungchua">
                            		<div class="khungsp"> Số điện thoại: </div>
                                    
                                    <div class="khungnhapsp"> <input type="text" name="Sdt" 
                                                                      style="width:170px;"
                                                                     placeholder="Nhập số điện thoại" title="Nhập số điện thoại"> </div>
                            </div>	
                           
                                 <div class="khungchua">
                            		<div class="khungsp"> Email: </div>
                                    
                                    <div class="khungnhapsp"> <input type="text" name="Email"
                                                                      style="width:170px;"
                                                                     placeholder="Nhập email" title="Nhập email"> </div>
                            </div>	
                               
                               
                               <div class="khungchua">
                            		<div class="khungsp"> Địa chỉ: </div>
                                    
                                    <div class="khungnhapsp"> <input type="text" name="DiaChi" 
                                                                      style="width:170px;"
                                                                     placeholder="Nhập địa chỉ" title="Nhập địa chỉ"> </div>
                            </div>	
                                
                                
                                     <div class="khungchua">
                            		<div class="khungsp"> &nbsp; </div>
                                    
                                    <div class="khungnhapsp"> <input type="submit" name="ok"  value="Đăng kí" title="Đăng kí" style="margin-left:-1px;width:80px"> 
                                    <input type="reset" name="reset"  value="Nhập lại" title="Nhập lại" id="input_reset" style="margin-right:-17px;width:80px"></div>
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
     <a href="#"> <br/> Cửa hàng quần áo YNT<br/>Bản quyền này của &copy;trongnkps02229<br>
     				</a>
      </div>
      
    </body>
</html>
