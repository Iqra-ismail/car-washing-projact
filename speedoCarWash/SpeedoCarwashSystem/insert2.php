<!-- code for insert data in db from book now form -->

<?php
include 'connection.php';

if(isset($_POST['booknow'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $carmodel=$_POST['carmodel'];
    $address=$_POST['address'];
    $insertquery="insert into booknow(name,phone,email,date,carmodel,address) 
    values('$name','$phone','$email','$date','$carmodel','$address')";

  $res = $con->exec($insertquery);
   if($res){
    ?>
    <script>alert('Your order has been placed successfully!');</script>
    <?php
   }
   else{
    ?>
    <script>alert("We're unable to save your order due to some issue, please try again. Thank You");</script>
    <?php
   }
    
}





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
   <a href="http://localhost/speedoCarWash/SpeedoCarwashSystem/contact.php"
    class="button btnnn  font-weight-bold ">Go Back</a>   
      

   </body>
</html>