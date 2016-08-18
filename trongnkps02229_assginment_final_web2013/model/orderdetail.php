<?php

class chitietdathang {
     var $IdSP;
     var $IdDH;
     var $Gia;
    var $Soluong;
    var $Thanhtien;
    
    
    function __construct() {
        if(func_num_args() == 5) {
            $this->IdSP = func_get_arg(0);
            $this->IdDH = func_get_arg(1);
            $this->Gia = func_get_arg(2);
            $this->Soluong = func_get_arg(3);
            $this->Thanhtien = func_get_arg(4);
        }
            
    }
    
    public function getList(){
        $db = new connect();
        $strQuery = "select * from chitietdathang";
        $r = $db->getList($strQuery);
        return $r;
    }
    
//    public function getChitietdathangId ($tmpIdSP,$tmpIdDH) { 
//        $db = new connect();
//        $strQuery = "Select * from chitietkhachhang where IdSP = $tmpIdSP" and IdDH = $tmpIdDH" ;
//        $r = $db->getInstance($strQuery);
//        return $r;
//    }
    
     public function insert(){
        $db = new connect();
        $strQuery = "insert into chitietdathang values($this->IdSP,$this->IdDH,$this->Gia,$this->Soluong,$this->Thanhtien)";
        $db->exec($strQuery);
        
    }
    
     public function update(){
        $db = new connect();
        $strQuery = "update chitietdathang set Gia = '$this->Gia',Soluong = '$this->Soluong',Thanhtien = '$this->Thanhtien', where IdSP = $this->IdSP and IdDH = $this->IdSP";
        $db->exec($strQuery);   
        
    }
    
     public function delete(){
        $db = new connect();
        $strQuery = "delete from chitietdathang where IdSP = $this->IdSP and IdDH = $this->IdDH" ;
        $db->exec($strQuery);
        
    }
}
