<?php

//สำหรับการ TEST เพื่อ Authentication เท่านั้น
    require('db_connect.php');

    $_username=$_POST['username'];
    $_password=md5($_POST['password']);
    $_lv=$_POST['lv'];

    $sql="INSERT INTO user(username,password,level) VALUES('$_username','$_password','$_lv')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Insert Success";
    }else{
        echo "Insert Fail";
    }
?>