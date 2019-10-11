<?php

class User{
    var $name;
    var $username;
    var $email;
    var $phone;
    var $password;

    function toString(){
      return "===================New Information=================== \n
      name : {$this->name} \n
      username : {$this->username} \n
      email : {$this->email} \n
      phone : {$this->phone} \n
      password : {$this->password}
      ";
    }

    function getUserName(){
      return "{$this->username}";
    }
}

class Description{
    var $prop;
    var $build;
    var $list;
    var $bed;
    var $bath;
    var $size;
    var $price;

    function printWithUserName($username){
      return "===================New Information=================== \n
      user name : {$username} \n
      property type : {$this->prop} \n
      building type : {$this->build} \n
      listing type : {$this->list} \n
      number of beds : {$this->bed} \n
      number of baths : {$this->bath} \n
      size : {$this->size} \n
      price : $ {$this->price} \n
      ";    }


    function toString(){
      return "===================New Information=================== \n
      property type : {$this->prop} \n
      building type : {$this->build} \n
      listing type : {$this->list} \n
      number of beds : {$this->bed} \n
      number of baths : {$this->bath} \n
      size : {$this->size} \n
      price : $ {$this->price} \n
      ";    }
}

class Location{
    var $address1;
    var $address2;
    var $city;
    var $parish;

function printWithUserName($username){
  return "===================New Information=================== \n
  user name : {$username} \n
  address one : {$this->address1} \n
  address two : {$this->address2} \n
  city : {$this->city} \n
  parish : {$this->parish} \n
  ";
}

    function toString(){
      return "===================New Information=================== \n
      address one : {$this->address1} \n
      address two : {$this->address2} \n
      city : {$this->city} \n
      parish : {$this->parish} \n
      ";    }
   }

?>
