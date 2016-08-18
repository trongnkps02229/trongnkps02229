<?php


class customer {
    
    var $customerId;
    var $user;
    var $pass;
    var $name;
    var $phone;
    var $email;
    var $address;
   
  
    
    public function __construct() {
        if(func_num_args()==7){
            $this->customerId = func_get_arg(0);
            $this->user = func_get_arg(1);
            $this->pass = func_get_arg(2);
            $this->name = func_get_arg(3);
            $this->phone = func_get_arg(4);
            $this->email = func_get_arg(5);
            $this->address = func_get_arg(6);
        }
    }
    
    public function getList(){
        $db = new connect();
        $strQuery = "select * from customer";
        $r = $db->getList($strQuery);
        return $r;        
    }
    
    public function getcustomerById($tmpId){
        $db= new connect();
        $strQuery = "select * from customer where customerId = $tmpId";
        $r = $db->getInstance($strQuery);
        return $r;
    }
    
    public function insert(){
        $db = new connect();
        $strQuery = "insert into customer values (NULL,'$this->user','$this->pass','$this->name','$this->phone','$this->email','$this->address')";
        $db->exec($strQuery);
        
    }
    
    public function update(){
        $db= new connect();
        $strQuery = "update customer set pass = '$this->pass', name='$this->name',phone= '$this->phone' ,email='$this->email',address='$this->address'  where user= '$this->user'";
        $db->exec($strQuery);
    }
    
    public function delete(){
        $db=new connect();
        $strQuery = "delete from customer where user = '$this->user'";
        $db->exec($strQuery);
    }
    
    
    
//    public function login($tmpUser, $tmpPass){
//        $db = new connect();
//       $strQuery = "Select * from customer where user = '$User' and pass = '$Pass'";
//       $result = $db->getInstance($strQuery);
//        if($result==NULL){
//            return 0;
//        }  else {
//            return 1;    
//        }
//      
//    }
    
      function login($user,$pass){
        $db=new connect();
        $str="select * from `customer` where `user`='$user' and `pass`='$pass'";
        $r=$db->getInstance($str);
        return $r;
    }

}
