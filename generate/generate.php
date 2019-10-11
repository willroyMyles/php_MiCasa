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
    $locFile = "locationFile.txt"; // create file
    $handle = fopen($locFile,'a+') or die("cannot open file: ". $locFile); // open file
    $data = $_SESSION["location"]; // get info
    fwrite($handle, $data->toString()); // write to file
    fclose($handle); //close file
    header("Location: ../registerproperty.php?loc=success");
}
if(isset($_POST["descGen"])){
    $descFile = "descriptionFile.txt"; // create file
    $handle = fopen($descFile,'a+') or die("cannot open file: ". $descFile); // open file
    $data = $_SESSION["description"]; // get info
    fwrite($handle, $data->toString()); // write to file
    fclose($handle); //close file
    header("Location: ../registerproperty.php?desc=success");
}
?>