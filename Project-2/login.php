<?php
    session_start();
    
    $uid=$_POST['Username'];
    $pwd=$_POST['password'];

    $con = mysqli_connect('localhost','root','','login');

    if(! $con){
        die('Connection Failed');
    }

    $sql = "SELECT * FROM `insert` WHERE `username`='$uid'  AND `password`='$pwd' ";
    $res = mysqli_query($con,$sql);

    if(mysqli_num_rows($res) == 0){
        echo "Invalid Username or password. Try again!!! ";
        header('Location:signup.html');
    }
    else{
    $sql1 = "SELECT * FROM `insert` WHERE `username`='$uid' AND `password`='$pwd' ";
    $res1 = mysqli_query($con,$sql1);
    if(mysqli_num_rows($res1) != 1){
        echo "Invalid password";
        header('Location:login.html');
    }
    $_SESSION['uname']=$uid;
    $_SESSION['pwd']=$pwd;

    header('Location:home.php');
}
    ?>