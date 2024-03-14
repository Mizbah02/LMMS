<?php
 require('connection.php');
?>

<DOCTYPE html>

<html>
    
    <head>
          <title> LAB </title>

    </head>

    <body>
        <?php
             if(isset($_GET['Room_no']))
             {
                $room = $_GET['Room_no'];
                $lname = $_GET['Name'];
                $floor = $_GET['Floor'];
                
                $sql = "INSERT INTO lab (Room_no, Name , Floor )
                       VALUES('$room','$lname','$floor' )";

                if($conn->query($sql)==true){
                   echo 'Data Inserted'; 
                }
                else
                {
                    echo 'Not inserted';
                }      
             }
        ?>
        <form action = "Lab.php" method = "GET">
            ROOM : <br>
            <input type = "text" name = "Room_no" ><br><br>  
           LAB NAME : <br>
            <input type = "text" name = "Name" ><br><br> 
            FLOOR : <br>
            <input type = "text" name = "Floor" ><br><br> 

            <input type = "submit" value = "Submit" ><br><br> 
        </form>


    </body>

</html>
