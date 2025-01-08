<?php
    require('db_connect.php');

    $_header=$_POST['header'];
    $_content=$_POST['content'];

    $sql="INSERT INTO blogs(header,content) VALUES('$_header','$_content')";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:blogs.php");
    }else{
        echo "Insert Content Fail";
    }
?>
