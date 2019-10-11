<?php
include("../partials/session.php");
// generate registration file
if(isset($_POST["regGen"])){
    $regFile = "registrationFile.txt"; // create file
    $handle = fopen($regFile,'a+') or die("cannot open file: ". $regFile); // open file
    $data = $_SESSION["user"]; // get info
    fwrite($handle, $data->toString()); // write to file
    fclose($handle); //close file
    header("Location: ../registerproperty.php?reg=success");
}
if(isset($_POST["locGen"])){

  if(!isset($_SESSION['user']) || empty($_SESSION['user'])){
    header("Location: ../registerproperty.php?loc=failed");
    exit();
  }
    $locFile = "locationFile.txt"; // create file
    $handle = fopen($locFile,'a+') or die("cannot open file: ". $locFile); // open file
    $data = $_SESSION["location"]; // get info
    $user = $_SESSION["user"]; // get user info
    fwrite($handle, $data->printWithUserName($user->getUserName())); // write to file
    fclose($handle); //close file
    header("Location: ../registerproperty.php?loc=success");
}
if(isset($_POST["descGen"])){
  if(!isset($_SESSION['user']) || empty($_SESSION['user'])){
    header("Location: ../registerproperty.php?loc=failed");
    exit();
  }
    $descFile = "descriptionFile.txt"; // create file
    $handle = fopen($descFile,'a+') or die("cannot open file: ". $descFile); // open file
    $data = $_SESSION["description"]; // get info
    $user = $_SESSION["user"]; // get user info
    fwrite($handle, $data->printWithUserName($user->getUserName())); // write to file
    fclose($handle); //close file
    header("Location: ../registerproperty.php?desc=success");
}

if(isset($_POST['clearInfo'])){
  unset($_SESSION['user']);
  unset($_SESSION['location']);
  unset($_SESSION['description']);
  header("Location: ../registerproperty.php");
}

if(isset($_POST['delFiles'])){
  $file = "locationFile.txt";
  unlink($file);
  $file = "descriptionFile.txt";
  unlink($file);
  $file = "registrationFile.txt";
  unlink($file);
  header("Location: ../registerproperty.php");
}
?>
