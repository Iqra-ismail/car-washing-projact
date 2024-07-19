<?php
include "connec.php";
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    body{
        background-color:blueviolet;
    }
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}
img.avatar {
  width: 20%;
  border-radius: 50%;
}
.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}
form{
    box-shadow: 10px 10px rgb(82, 11,77);
    border-radius: 10px;
}
h2{
     text-align: center;
    font-size: 45px;
    color: white;
    font-weight: bold;
}

</style>





</head>
<body><br><br>
<h2>Login To AdminSite</h2>

 
  <form class="modal-content"  method="post">
    <div class="imgcontainer">
      <img src="images/adminpic.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="signin">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <span class="psw"> <br>Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<?php
if(isset($_POST['signin'])){
  $query="SELECT * FROM `login` WHERE `username`='$_POST[uname]' AND `password`='$_POST[psw]'";
  $result=mysqli_query($con,$query); 
  if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION['AdminLoginId']=$_POST['uname'];
    header("location:adminpanel.php");
  }
  else{
    echo"<script> alert('Incorrect Password!!');</script>";
  }
  
}

?>
</body>
</html>