<?php
    $name= $_POST['name'];
    $e_mail= $_POST['e_mail'];
    $address= $_POST['address'];
    $phone=$_POST['phone'];

    include"Connection.php";

    $sql = "INSERT INTO my_table (name, e_mail, address, phone) VALUES ('$name','$e_mail','$address','$phone')";
    $result = mysqli_query($cn,$sql);

    header('location:http://localhost/Navbar/index.php');
?>