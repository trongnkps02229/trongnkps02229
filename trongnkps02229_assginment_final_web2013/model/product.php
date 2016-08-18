<?php


class product {
    
    var $productId;
    var $productCode;
    var $name;
    var $type;
    var $image;
    var $price;
    
    public function __construct() {
        if(func_num_args()==6){
            $this->productId = func_get_arg(0);
            $this->productCode = func_get_arg(1);
            $this->name = func_get_arg(2);
            $this->type = func_get_arg(3);
            $this->image = func_get_arg(4);
            $this->price = func_get_arg(5);
        }
    }
    
    public function getList3(){
        $db = new connect();
        $strQuery = "select * from product WHERE type like 'Đồ nữ'";
        $r = $db->getList($strQuery);
        return $r;        
    }
	
	  public function getList1(){
        $db = new connect();
        $strQuery = "select * from product WHERE type like 'Đồ nam'";
        $r = $db->getList($strQuery);
        return $r;        
    }
	  public function getList2(){
        $db = new connect();
        $strQuery = "select * from product WHERE type like 'Đồ đôi'";
        $r = $db->getList($strQuery);
        return $r;        
    }
	
	
		  public function getList(){
        $db = new connect();
        $strQuery = "select * from product";
        $r = $db->getList($strQuery);
        return $r;        
    }
	
    
    public function getproductById($tmpId){
        $db=new connect();
        $strQuery = "select * from product where productId = $tmpId";
        $r = $db->getInstance($strQuery);
        return $r;
    }
    
    public function insert(){
        $db = new connect();
        $strQuery = "insert into product values (NULL,'$this->productCode','$this->name','$this->type','$this->image',$this->price)";
        $db->exec($strQuery);
        
    }
    
    public function update(){
        $db= new connect();
        $strQuery = "update product set name = '$this->name',type = '$this->type', image='$this->image',price='$this->price'  where productCode= '$this->productCode'";
        $db->exec($strQuery);
    }
    
    public function delete(){
        $db=new connect();
        $strQuery = "delete from product where productCode = '$this->productCode'";
        $db->exec($strQuery);
    }
    
    
  
}
