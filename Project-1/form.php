<?php
$n=$_POST["nm"];
$e=$_POST["em"]
$p=$_POST["pwd"]
$d=$_POST["dt"]
$g=$_POST["gn"]
$r=$_POST["rel"]
$con=mysqli_connect('localhost','root',' ','test1');
$query="INSERT INTO reg values('$n','$e','$d','$g','$r');
$res=mysqli_query($con,$query);
if($res)
{
    echo "<script>alert("registered succcessfully")
          </script>"
}
else
{
    echo"<script>alert("failed")</script>"
}
?>