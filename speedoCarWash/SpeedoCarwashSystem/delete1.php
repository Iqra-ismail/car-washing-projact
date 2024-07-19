
<!-- dlete record coding for customer query form -->
<?php
include 'config.php';

$id=$_GET['id'];
$deletequery="delete from booknow where id=$id";

$query=mysqli_query($mysqli,$deletequery);
if($query){
 ?>
   <script>
      alert('Delete successfully!');
   </script>
   <?php
}else
?>
   <script>
      alert('Not Deleted!');
   </script>
   <?php

header('location:display1.php');



?>
