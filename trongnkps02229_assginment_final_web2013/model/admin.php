<?php


class admin {
    var $managementId;
    var $user;
    var $pass;
    
    public function __construct() {
        if(func_num_args()==3){
            $this->managementId = func_get_arg(0);
            $this->user = func_get_arg(1);
            $this->pass = func_get_arg(2);
           
        }
    }
    
//    public function login($tmpUser, $tmpPass){
//        $db = new connect();
//       $strQuery = "Select * from management where user = '$tmpUser' and pass = '$tmpPass'";
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
        $str="select * from `management` where `user`='$user' and `pass`='$pass'";
        $r=$db->getInstance($str);
        return $r;
    }
}
