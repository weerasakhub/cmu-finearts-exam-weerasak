<?php

    require('db_connect.php');

    $_id = $_POST['id'];
    $_header=$_POST['header'];
    $_content=$_POST['content'];

    $sql = "UPDATE blogs SET header='$_header', content='$_content' WHERE id='$_id'";

    $result = mysqli_query($con, $sql);
    if($result){
        echo "Success Update";
        header("location:blogs.php");
        exit(3);
    }else{
        echo "Fail Update !!".mysqli_error($con);
    };

?>