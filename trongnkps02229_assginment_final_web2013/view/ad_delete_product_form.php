  <?php
            if(!isset($_SESSION["cus_to_mers"])){
                header("Location:usercontroller.php?action=login");
            }
        ?>
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Xóa sản phẩm - Shop YNT - Phong cách độc đáo  </title>
        <link href="../controller/css/style_update.css" rel="stylesheet" type="text/css" />
        <script>
		  function formsp() {
                      
                      
                      var a = document.forms["login"]["MaSP"].value;
    if (a == "") {
        alert("Vui lòng nhập mã sản phẩm");
        return false;
    }
    
     if (a.length > 16) {
        alert("Mã sản phẫm không quá 16 kí tự");
        return false;
    }
    
	 if (a.length < 3) {
        alert("Mã sản phẫm ít nhất 3 kí tự");
        return false;
    }
    
      var kytu = a.indexOf(" ");
    if (kytu == 0) {
        alert("Không nhập khoảng trắng");
        return false;
    }
    
    
		 var y = document.forms["login"]["TenSP"].value;
    var kty = isNaN(y);
    if (y == "") {
        alert("Vui lòng nhập tên sản phẩm");
        return false;
    }
    if (kty == false) {
        alert("Tên sản phẩm phải dạng chữ");
        return false;
    }
    if (y.length > 32) {
        alert("Tên sản phẩm không quá 30 kí tự");
        return false;
    }
	
	 if (y.length < 5) {
        alert("Tên sản phẩm ít nhất 5 kí tự");
        return false;
    }
    
	 var kytu1 = y.indexOf(" ");
    if (kytu1 == 0) {
        alert("Không nhập khoảng trắng");
        return false;
    }
	
	 var g = document.forms["login"]["LoaiSP"].value;
    if (g == "--") {
        alert("Vui lòng chọn loại sản phẩm");
        return false;
    }
	
	
	
	  var ef = document.forms["login"]["HaSP"].value;
    if (ef == ""){
        alert("Hãy chọn hình ảnh sản phẩm ");
		return false;
	}
      ef = String(ef);
	  var kytuef1 = ef.indexOf(".jpg");
        var kytuef2 = ef.indexOf(".png");
		
	
       

        if ((kytuef1 == -1) && (kytuef2 == -1)) {
            alert("File không hợp lệ, chỉ nhận file dạng JPG hoặc PNG");
			return false;}
       
       
		
	
	if (ef.length > 32) {
        alert("Hình ảnh sản phẩm không quá 32 kí tự");
        return false;
    }
	
	
	
	
	
	
	
	
	
	  var cd = document.forms["login"]["GiaSP"].value;
    if (cd == "") {
        alert("Vui lòng nhập giá sản phẩm");
        return false;
    }
   
      var ktcd = isNaN(cd);
    if(ktcd == true){
        alert("Giá sản phẩm phải ở dạng số");
        return false;
    }
    cd = String(cd);
    
    if (cd.length > 8) {
        alert("Giá sản phẩm không quá 8 kí tự");
        return false;
    }
    
	
	if (cd.length < 5) {
        alert("Giá sản phẩm ít nhất 5 kí tự");
        return false;
    }
    var kytucd = cd.indexOf(" ");
    if (kytucd == 0) {
        alert("Không nhập khoảng trắng");
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
	cursor :url("images/hieuung/clovely.cur"), progress;
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
                         <a href="#" title="Xóa sản phẩm"> 
                            Xóa sản phẩm </a> </div> </center><br/>
                            
                        <?php
           
           
                $n = new product();
                $pro = $n->getproductById($_GET["id"]);                
            
        ?>
                            
                            <form action="admincontroller.php?action=delete_product_process" method="post" onsubmit="return formsp();" name="login">
                               
                                
                                       
                                   <?php if(isset($_GET['id'])): ?>
                                    <center>    <img src="images/sanpham/<?php echo $pro[4]  ?> " title="<?php echo $pro[4]  ?>"> </center>
                                      <div class="khungchua">
                                        <div class="khungsp"> Mã sản phẩm: </div> 
                                    
                                    <div class="khungnhapsp"> <input type="text" name="MaSP" placeholder="Nhập mã sản phẩm" 
                                                                     value="<?php echo $pro[1]; ?>"  readonly="readonly" style="width:170px;"
                                                                     title="<?php echo $pro[1]; ?>"> </div>
                            </div>	
                            
                                          <?php endif; ?>
                            
                             <div class="khungchua">
                            		<div class="khungsp"> Tên sản phẩm: </div>
                                    
                                    <div class="khungnhapsp"> <input type="text" name="TenSP" placeholder="Nhập tên sản phẩm"
                                                                     value="<?php echo $pro[2]; ?>"
                                                                     title="<?php echo $pro[2]; ?>" readonly="readonly" style="width:170px;"> </div>
                            </div>	
                            
                              <div class="khungchua">
                            		<div class="khungsp"> Loại sản phẩm </div>
                                    
                                    <div class="khungnhapsp"> 
                                    <input type="text" name="LoaiSP"
                                                                     value="<?php echo $pro[3]; ?>" readonly="readonly" 
                                                                     placeholder="Nhập giá sản phẩm" title="<?php echo $pro[3]; ?>" style="width:170px;">
                                                       
                                     </div>
                            </div>	
                            
                         
					
                           
							   <div class="khungchua">
                            		<div class="khungsp"> Giá sản phẩm: </div>
                                    
                                    <div class="khungnhapsp"> <input type="text" name="GiaSP"
                                                                     value="<?php echo $pro[5]; ?>" readonly="readonly" 
                                                                     placeholder="Nhập giá sản phẩm" title="<?php echo $pro[5]; ?>" style="width:170px;"> </div>
                            </div>	
					
                                
                                
                                  <div class="khungchua">
                            		<div class="khungsp"> &nbsp; </div>
                                    
                                    <div class="khungnhapsp"> <input type="submit" name="ok"  value="Xóa bỏ" title="Xóa bỏ" style="margin-left:-1px;width:80px" > 
                                        <a href="admincontroller.php?action=product"> <input type="button" name="quayve"  value="Quay về" title="Quay về trang chủ" id="input_reset" style="margin-right:-17px;width:80px"></a></div>
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
