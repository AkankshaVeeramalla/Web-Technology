<html>
    <head>
        <style>
             table{
                margin-left: 500px;
                margin-top: 100px;
                width: 200px;
                height: 200px;
            }
            div{
                width: 100%;
                height: 70px;
                margin-top: 0px;
                background-image:url('login.jpeg');
            }
            td,tr{
                padding: 30px;
            }
            p{
                text-align: center;
            }
            body{
                background-color: antiquewhite;
            }   
        </style>
    </head>
    <body>
        <div><h1 align="center">FACEBOOK</h1></div>
        <form action="login.php" method="post">
            <table border="1">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="Username" required></td>
                </tr>
                <tr>
                    <td>Enter password</td>
                    <td><input type="text" name="password" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Login"></td>
                </tr>
            </table>
            <p class="signin">Don't have an account?<a href="signup.html"> Click here to Sign in</a></p>
        </form>
        <style>
            body {
              background-color: whitesmoke;
              font-family: Arial, sans-serif;
              margin: 0px;
              padding: 0px; 
              box-sizing: border-box;
              overflow: visible;
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
              padding-left: 95px 20px;
              background-color: #fff;
              border-radius: 5px;
              box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
            }
          </style>
        </head>
        <body>
          <div class="container">
            <?php  
            $con=mysqli_connect("localhost","root","","login");
            $sql="select * from images order by likes desc limit 3"; 
            $res=mysqli_query($con,$sql);
            if(mysqli_num_rows($res)>0){
              while($images= mysqli_fetch_assoc($res))
             {
                echo "<hr>";
                ?>
                <?php
                   echo "<h3 style=' font-family:cursive' ><i>".$images['uname']."</i></h3>"; ?>
                <img src="uploads/<?=$images['filename']?>" width="500px" height="400px">
                <button type='submit' name='submit' value='<?php echo $images['filename']; ?>'> Like</button>
                <span style="float:right;"><?php echo $images['likes'];?></span>
                
        
     
          <?php  }}?>
            
          </div>
                    
        </div>
    </body>
</html>