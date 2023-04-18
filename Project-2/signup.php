<
<?php
    session_start();

    $uid=$_POST['Username'];
    $pwd=$_POST['password'];
    $pwd1=$_POST['re-password'];

    $con = mysqli_connect('localhost','root','','login');

    $sql = "SELECT * FROM `insert` WHERE `username`='$uid' ";
    $res = mysqli_query($con,$sql);
    if(mysqli_num_rows($res) == 1){
        session_start();
        echo "<script> alert('Username already exists') </script>";
        header('Location:signup.html');
    }
    else{

    $sql1 = "INSERT INTO `insert` (`username`, `password`) VALUES ('$uid', '$pwd') ";
    $res1 = mysqli_query($con,$sql1);
    $_SESSION['uname']=$uid;
    $_SESSION['pwd']=$pwd;
    header('Location:home.php'); 
    }   
?>
