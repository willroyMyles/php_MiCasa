<?php
include("../partials/session.php");

    if(isset($_POST['submit'])){
        $sa1 = $_POST['sa1'];
        $sa2 = $_POST['sa2'];
        $city = $_POST['city'];
        $parish = $_POST['parish'];
        

        //check if fields are empty
        if(empty($sa1) || empty($city)
        || empty($parish)){
        
            header("Location: ../location.php?loc=empty");
            exit();
        }

        // a number and letters have to be present in string
        if(preg_match('/^[a-z0-9- ]+$/i',$sa1) == 0 || preg_match('/^[a-z0-9- ]+$/i',$sa2) == 0){
            //contains maybe?
            header("Location: ../location.php?loc=address");
            echo "heelo";
            exit();
        }

        // if there is a number in city or parish  return error
        if(preg_match('/^[0-9- ]+$/i',$city) == 1 || preg_match('/^[0-9- ]+$/i',$parish)==1){
            //contains maybe?
            header("Location: ../location.php?loc=cityparish");
            echo "heelo";
            exit();
        }

       $location = new Location();
       $location->address1 = $sa1;
       $location->address2 = $sa2;
       $location->city = $city;
       $location->parish = $parish;

       $_SESSION["location"] = $location;

        //all clear
        header("Location: ../location.php?loc=success");
        exit();
    }else{
        header("Location: ../registration.php?reg=failed");

    }

?>