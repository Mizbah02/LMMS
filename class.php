<?php
 require('connection.php');
?>

<DOCTYPE html>

<html>
    
    <head>
          <title> Class </title>

    </head>

    <body>
        <?php
             if(isset($_GET['Room']))
             {
                $id = $_GET['id'];
                $room =  $_GET['Room'];
                $Course =  $_GET['Course'];
                
                $btime = $_GET['btime'];
                $etime = $_GET['etime'];
                $date = $_GET['date'];
                
                $sql = "INSERT INTO class (Room ,Course,Begin_time,End_time , date )
                       VALUES('$room','$Course','$btime','$btime','$date' )";

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
            Course : <br>
            <input type = "text" name = "Course" ><br><br> 
             Date: <br>
            <input type = "date" name = "date" ><br><br> 
            Begining Time : <br>
            <input type = "time" name = "btime" ><br><br> 
            Ending Time :<br>
            <input type = "time" name = "etime" ><br><br> 
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
