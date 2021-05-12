<?php

include 'cnx.php'

class User{

   public $name;
   public $email;
   public $password;
   public $phone;
   private $db_handle;

   public function __construct($name, $email, $password, $phone){
    $this->name = $name;
    $this->email = $email;
    $this->phone = $phone; 
    $this->password = $password;
}
  public function getName(){
    return $this->name;
 }
  public function getemail(){
    return $this->email;
   }
   public function getpass(){
    return $this->password;
}

   public function getphone(){
    return $this->phone;
}

}

class Admin extends User{

    public function insert(){
        $sql = "SELECT * FROM utilisateur";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;

    }
    public function delete(){
        
    }
    public function update(){
        
    }
}















?>