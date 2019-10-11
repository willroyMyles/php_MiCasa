<?php

include("../partials/session.php");

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        //check if fields are empty
        if(empty($name) || empty($username) || empty($email)
        || empty($phone) || empty($password) || empty($password2)){
            header("Location: ../registration.php?reg=empty");
            exit();
        }

        //check email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

            header("Location: ../registration.php?reg=email");
            exit();
        }

        //check phone
        if(strlen($phone) != 10){

            header("Location: ../registration.php?reg=phone");
            exit();
        }

        //check passwords
        if(strcmp($password, $password2)!=0){
            header("Location: ../registration.php?reg=mismatch");
            exit();
        }
     

        $user = new User();
        $user->name = $name;
        $user->username = $username;
        $user->email = $email;
        $user->phone = $phone;
        $user->password = $password;

        $_SESSION["user"] = $user;
        //all clear
        header("Location: ../registration.php?reg=success");
        exit();
    }else{
        header("Location: ../registration.php?reg=failed");

    }

?>