<?php

class User{
    var $name;
    var $username;
    var $email;
    var $phone;
    var $password;

    function toString(){
        return "". $this->name . $this->username . $this->email . $this->phone . $this->password;
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
    
    function toString(){
        return "". $this->prop . $this->build . $this->list . $this->bed . $this->bath . $this->size . $this->price;
    }
}

class Location{
    var $address1;
    var $address2;
    var $city;
    var $parish;
    function toString(){
        return "". $this->address1 . $this->address2 . $this->city . $this->parish ;
    }
   }

?>