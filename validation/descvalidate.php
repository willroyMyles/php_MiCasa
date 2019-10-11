<?php

include("../partials/session.php");

    if(isset($_POST['submit'])){
        $prop = $_POST['prop'];
        $build = $_POST['build'];
        $list = $_POST['list'];
        $bed = $_POST['bed'];
        $price = $_POST['price'];
        $size = $_POST['land'];
        $bath = $_POST['bath'];
        
      

        //check if fields are empty
        if(empty($prop) || empty($build)
        || empty($list) || empty($bed) || empty($price)
        || empty($size) || empty($bath)){
        
            header("Location: ../description.php?desc=empty");
            exit();
        }
        // if there is a letter in price or arce  return error
        if(preg_match('/^[a-z]+$/i',$price) == 1 || preg_match('/^[a-z]+$/i',$size)==1){
            //contains maybe?
            header("Location: ../description.php?desc=price/parish");
            exit();
        }

        $des = new Description();
        $des->prop = $prop;
        $des->build = $build;
        $des->list = $list;
        $des->bed = $bed;
        $des->bath = $bath;
        $des->size = $size;
        $des->price = $price;

        $_SESSION["description"] = $des;

        //all clear
            header("Location: ../description.php?desc=success");
        exit();
    }else{
        header("Location: ../description.php?desc=failed");

    }

?>