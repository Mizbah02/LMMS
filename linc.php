<?php
 require('connection.php');
?>

<DOCTYPE html>

<html>
    
    <head>
          <title> linc </title>

    </head>

    <body>
        <?php
          
          $sql = "SELECT * FROM Lab ORDER BY Name ASC";
         $query =  $conn->query($sql);
        ?>
        <form action = "linc.php" method = "GET">

           LAB NAME : <br>
            <select onChange = "window.location.href=this.value">
               <?php
                     while( $data = mysqli_fetch_array( $query)){

                        $id = $data['Serial'];
                      
                        $lname = $data['Name'];
                        $x = ".php";
                        
                         $z = $lname . $x;
                     echo"<option value='$z'>$lname</option>";
                      
                     }
                ?>
            </select>
            <br><br>
         
        
        </form>
        
    </body>

</html>
