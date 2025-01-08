<?php

    require('db_connect.php');

    $_id = $_GET['id'];
    
    $sql = "DELETE FROM blogs WHERE $_id = id";
    $result = mysqli_query($con, $sql);

    if($result){
        header("location:blogs.php");
        exit(3);
    }
    else{
        echo "Delete Fail !!".mysqli_error($con);
    };

?>