<?php
include "connect.php";

if(isset($_POST['update'])){
    $firstName = $_POST['firstName'];
    $lasttName = $_POST['lasstName'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    $sqk = "UPDATE 'signup' SET 'firstName' = '$lastName', 'lastName' = '$lastName', 'age' = '$age', 'email' = '$email', 'newPassword' = '$newPassword', 'confirmPassword' = '$confirmPassword' ";

    $result = $conn->query($sql);

    if($result == TRUE){
        echo "Record Updated Successfully";
    }
    else{
        echo "Error:".$sql. "<br>" . $conn->error;
    }
}

if(isset($_GET['id'])){
    $usr_id = $-GET['id'];

    $sql = "SELECT *FROM 'users' WHERE 'id'='$user_id'";

    
}