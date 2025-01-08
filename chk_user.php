<?php
    session_start();

    require('db_connect.php');
    if(isset ($_POST['username'])){
        //รับค่าจากฟอร์ม login
        $_user=$_POST['username'];
        $_pwd=md5($_POST['pwd']); //เข้ารหัส md5

        echo $_user;
        echo  $_pwd;

        $sql="SELECT*FROM user WHERE username='$_user' AND password='$_pwd'";
        $result=mysqli_query($con,$sql);

            if(mysqli_num_rows($result)==1){
                $result_row=mysqli_fetch_array($result);
                $_SESSION['id']=$result_row['id'];
                $_SESSION['username']=$result_row['username'];
                $_SESSION['level']=$result_row['level'];

                if($_SESSION['level']=="user"){
                    header("location:blogs.php");
                }else{
                    echo "<script>";
                    echo "alert(\"Username or Password Fail\");";
                    echo "window.history.back()";
                    echo "</script>";
                }
            }else{
                header("location:login.php");
            }
    }
?>