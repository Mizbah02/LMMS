<?php
 require('connection.php');
?>

<DOCTYPE html>

<html>
    
    <head>
          <title> Report </title>

    </head>

    <body>
        <?php
             if(isset($_GET['Description']))
             {
                $id = $_GET['id'];
                $room =  $_GET['Room'];
                $device_id =  $_GET['Device_id'];
                $desc = $_GET['Description'];
                $time = $_GET['time'];
                $date = $_GET['date'];
                
                $sql = "INSERT INTO report (Room , Device_id ,Description,time , date )
                       VALUES('$room','$device_id','$desc','$time','$date' )";

                if($conn->query($sql)==true){
                   echo 'Data Inserted'; 
                }
                else
                {
                    echo 'Not inserted';
                }      
             }
        ?>
   <div class="container">
  <form>
      <input type = "text" name = "id" hidden ><br><br>  
            Room : <br>
            <input type = "text" name = "Room" ><br><br> 
            Device_id : <br>
            <input type = "text" name = "Device_id" ><br><br> 
           Description : <br>
            <input type = "text" name = "Description" ><br><br> 
             Date: <br>
            <input type = "date" name = "date" ><br><br> 
            Time : <br>
            <input type = "time" name = "time" ><br><br> 
            <input type = "text" name = "status" hidden >

            <input type = "submit" value = "Submit" ><br><br> 
  </form>
</div>
 
<style>
  .container {
    width: 50%; /* adjust to desired width */
    margin: 0 auto; /* center the container */
  }
</style>


    </body>

</html>
