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
             if(isset($_GET['Name']))
             {
               
                $lname = $_GET['Name'];
                
                $sql = "INSERT INTO lab ( Name )
                       VALUES('$lname' )";

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

           LAB NAME : <br>
            <input type = "text" name = "Name" ><br><br> 

            <input type = "submit" value = "Submit" ><br><br> 
        </form>


    </body>

</html>
