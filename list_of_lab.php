<?php
 require('connection.php')
?>

<DOCTYPE html>

<html>
    
    <head>
          <title>list_of_lab </title>

    </head>

    <body>
        <?php
            
            $sql = "SELECT * FROM LAB ";
            
            $query = $conn->query($sql);

            echo"<table border = '1' ><tr> <th> Room_no </th> <th> Name </th> <th> Floor </th> <th> Action </th> </tr>";
            while($data = mysqli_fetch_assoc(  $query ))
            {
                $room = $data['Room_no'];
                $name = $data['Name'];
                $floor = $data['Floor'];
                $id = $data['Serial'];

                echo "<tr>
                      <td>$room</td> 
                      <td>$name</td> 
                      <td>$floor</td>
                      <td><a href = 'edit_lab.php?id=$id'>Edit</td>
                      </tr>";
            }
            
            echo"</table>";
        ?>
        

    </body>

</html>
