<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "dataC";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}

if(isset($_POST['save'])){
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $textA = $_POST['textA'];

    $sql_query="INSERT INTO entryD (fname,email,textA)
    VALUES('$name','$email','$textA')";

    if(mysqli_query($conn,$sql_query)){
        echo "New Details Entry inserted Successfully";
    }
    else{
        echo "Error";
    }
    mysqli_close($conn);
}







?>