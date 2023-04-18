<!DOCTYPE html>
<html>
<head>
  <title>Facebook-Home Page</title>
  <style>
    /* body {
      background-color: whitesmoke;
      font-family: Arial, sans-serif;
      margin: 0px;
      padding: 0px; 
      box-sizing: border-box;
    }

    nav{
        width:100%;
        height: 100px;
        padding: 0px 100px;
        position: fixed; 
        background-color: steelblue;
      } 
    nav.logo p 
    {
      font-size: 30px;
      font-weight: bold; 
      float: left;
      color: white;
      text-transform: uppercase;
      Letter-spacing: 1.5px;
      cursor: pointer ;
    }
    nav ul{
      justify-content: space-between;
    }
    nav li{
        display: inline-block;
        list-style: none;
    }
    nav li a{
        font-size: 18px; 
        text-transform: uppercase; 
        padding:0px 30px; 
        color:white; 
        text-decoration: none;
}
    a:hover{
      color: #ff8c69;
      transition: all 0.3s ease 0s;
    }
    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 95px 30px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
    } */
    body {
      background-color: whitesmoke;
      font-family: Arial, sans-serif;
      margin: 0px;
      padding: 0px; 
      box-sizing: border-box;
    }
    a {
      color: #555;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }

    /* Navigation styles */
    nav {
      width:100%;
        height: 90px;
        padding: 0px 100px;
        position: fixed; 
      background-color: #fff;
      border-bottom: 2px solid #2c3e50;
      padding: 10px;
      margin-bottom: 20px;
      box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
    }
    nav ul {
      margin: 0;
      padding: 0;
      list-style: none;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    nav li {
      margin-right: 20px;
    }
    nav a {
      color: #2c3e50;
      font-weight: bold;
      transition: all 0.3s ease;
      padding: 10px;
      border-radius: 5px;
    }
    nav a:hover {
      color: #fff;
      background-color: #2c3e50;
      cursor: pointer;
    }
    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 95px 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>    
    <nav>
      <div class='header'>
      <h1>Hello <?php session_start(); echo $_SESSION['uname'] ?></h1>
      </div>
      <ul>
        <li><a href="home.php" target="right">Home</a></li>
        <li><a href='home_profile.php'>My Profile</a></li>
        <li><a href='home_upload.php'>Upload Photo</a></li>
        <li><a href="home_mostlikes.php">Most Likes Posts</a></li>
        <li><a href='home_logout.php' >Logout</a></li>
      </ul>
    </nav>
  <div class="container">
    <?php  
    $con=mysqli_connect("localhost","root","","login");
    $sql="SELECT * FROM `images` ORDER BY `id` DESC";//************** */
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
      while($images= mysqli_fetch_assoc($res))
     {
        echo "<hr>";
        ?>

        <?php
           echo "<h3 style=' font-family:cursive' ><i>".$images['uname']."</i></h3>"; ?>
        <img src="uploads/<?=$images['filename']?>" width="500px" height="400px">
        <form method='post' action='like.php'> <button type='submit' name='submit' value='<?php echo $images['filename']; ?>' id="but"> Like</button></form>
        <span ><?php echo $images['likes'];?></span>

<?php   echo "<table><tr><td><h5>" .$images['uname']."</h5></td>";echo "<td>".$images['description']."</td>";
echo "<td ><div style='padding-left:200px;'> </h5></td></tr></table>";
echo "<i></i>";
?>


  <?php  }}?>
  <script>
    document.getElementById("but").addEventListener("click",function f1()
    {
      document.getElementById("but").innerHTML="dislike";
    })
    </script>

    
  </div>
</body>
</html>
