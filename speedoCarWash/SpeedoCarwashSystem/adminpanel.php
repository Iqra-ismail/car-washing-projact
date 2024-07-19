
<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location:login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpanel</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    

<style>
    body{
        margin: 0;
    }
    .header{
        font-family: poppins;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 60px;
        background-color: #204969;
    }
    .header button{
        background-color: #f0f0f0;
        font-size: 16px;
        padding: 8px 12px;
        border: 2px solid black;
        border-radius: 5px;

    }
    .vl {
  border-left: 6px solid #204969;
  height: 700px;
  position: absolute;
  left:13%;
  
  margin-left: -3px;
  top: 10;
}
.func{
    font-size: 30px;
    color: black;
    margin-left: 15px;
    font-weight: bold;
}



.btn1{
    margin-top: 100px;
    background-color: #204969;
    margin-left: 43%;
    border-radius: 10px;
    border:4px solid yellow;
    padding: 15px 15px;
    width: 400px;

    
}
.btn2{
    background-color:#204969;
    margin-left: 43%;
    border-radius: 10px;
    border:4px solid yellow;
    padding: 15px 15px;
    margin-top: 3%;
    width: 400px;

}
.btn1 button{
    margin-left: 40px;
    border:none ;
    height: 60px;
    background-color:#204969;


}
.btn1 button h1{
    font-size:30px;
    font-weight: bold;
    color:white;

}
.btn2 button{
    margin-left: 40px;
    border:none ;
    height: 60px;
    background-color:#204969;


}
.btn2 button h1{
    font-size:30px;
    font-weight: bold;
    color:white;

}





</style>


</head>
<body>
    <div class="header">
   <h1>WELCOME TO ADMIN PANEL-<?php echo $_SESSION['AdminLoginId'] ?></h1> 
  
   <form method="post">
   <button name="Logout">LOGOUT</button>
   </form>
   </div>

<?php   
if(isset($_POST['Logout'])){
    session_destroy();
    header("location:login.php");
}

?>


<div class="vl"></div>
<br><br>
<div class="func"><a href="http://localhost/SpeedoCarwashSystem/"><i class="fa fa-home" aria-hidden="true">Home</i></a></div>
<br><br>
<div class="btn1"><button><a href="http://localhost/SpeedoCarwashSystem/display.php"><h1>View List of Customer Query</h1></button> </a></div>
<br>
<div class="btn2"><button><a href="http://localhost/SpeedoCarwashSystem/display1.php"><h1>List of Orders</h1></a></button></div>
 











<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>