

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<style>
    
  body{
    background-image: url('images/back.jpg');
  }  
 
    
    
   h1{
    font-size: 30px;
    color: white;
    text-align: center;
    margin-top: -20px;
    margin-bottom: 20px;
   }
    tr :nth-child(even){
    background-color: aqua;
   }
   table{
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,0,.30);
    border-radius: 10px;
    border-color: #FBD504;
    border-style: solid;
    margin: auto;
   } 
   th, td{
    border: 1px solid #f2f2f2;
    padding: 8px  30px;
    text-align: center;
    color: gray;
   }
   th{
    text-transform: uppercase;
    font-weight: 500;
   }
   td{
    font-size: 13px;
   }
   .fa{
    text-transform: uppercase;
   }
   .fa-trash{
    color:#ff0000;
   }



</style>






</head>
<body>
    <br><br>
    <div class="main-div">
        <h1>List of Customer Query</h1>
        <div class="container">
            <div class="table-responsive">
                <table width="100%">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Delete_Record</th>
                    </tr>
                    <tbody>

                    <?php
                      include 'config.php';
                      $selectquery = "select * from `contact-data`";
                      $query=mysqli_query($mysqli,$selectquery);
                      $nums = mysqli_num_rows($query);
                      // echo $nums;

                      // echo $res[1];
                      // echo $nums;

                      while($res=mysqli_fetch_array($query)){
                      ?>
                      
            
                      <tr>
                            <td><?php echo $res['id']; ?></td>
                            <td><?php  echo $res['name']; ?></td>
                            <td><?php  echo $res['phone'];  ?></td>
                            <td><?php  echo $res['email'];  ?></td>
                            <td><?php  echo $res['messages'];  ?></td>
                            <td></td>
                            <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-bs-toggle="tooltip" title="Delete">
                              Delete<i class="fa-solid fa-trash"></i></a></td>
                      </tr>
                      
                      
                      <?php
                       }
                       ?>

                       
                    </tbody>
                </table>
            </div>
        </div>

    </div>




















    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>