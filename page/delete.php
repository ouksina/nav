<?php
    include "../model/Connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        mysqli_query($cn,"DELETE FROM my_table WHERE id=$id");
    }
?>