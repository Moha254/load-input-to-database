<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $second_name=$_POST['second_name'];

    $sql= "INSERT INTO `student_info`( `first_name`, `second_name`) 
    VALUES (' $first_name','$second_name')";
    $result= mysqli_query($conn,$sql);
    if($result){
        header('location: assignment.php');

    }
    else{
        die(mysqli_error($result));
    }
}

?>