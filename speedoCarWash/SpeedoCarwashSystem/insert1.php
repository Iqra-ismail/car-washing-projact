
<!-- insert data into db from query question form -->

<?php
include("config.php");
extract($_POST);
$query="INSERT INTO `contact-data` (name,phone,email,messages) VALUES('".$UName."','".$Phone."','".$Email."','".$msg."')";
 
$result=$mysqli->query($query);

if(!$result){
   // echo"something went wrong";
   ?>
   <script>
      alert('something went wrong');
   </script>
   <?php
}else
// echo"thanku for submitting feedback";
?>
   <script>
      alert('thanku for submitting feedback');
   </script>
   <?php
$mysqli->close();

// print_r($_POST);

?>








<html>
   <head>
      <!-- <link rel="stylesheet" href="style.css"> -->
      <title></title>
      <style>
         .btnnn{
            text-decoration: none;
    background-color:  #dc3545; 
    color: white;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
    text-align: center;
    cursor: pointer;
    font-size: 50px;
    position: absolute;
    top: 50%;
   -ms-transform: translateY(-50%);
    transform: translateY(-50%);
     margin-left: 40%;
    border-radius: 20PX;
    font-weight: bolder;
    
}
 a:hover{
   background-color:#FBD504;;
   border: 10px solid black;
 }

      </style>
   </head>
   <body style="background-image:url('images/back.jpg');background-size:cover">
   <a href=http://localhost/speedoCarWash/SpeedoCarwashSystem/index.php#contactt
    class="button btnnn  font-weight-bold ">Go Back</a>   
      

   </body>
</html>