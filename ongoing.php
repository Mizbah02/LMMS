<?php
 require('connection.php');

 $sql = "SELECT * FROM class WHERE Date = CURRENT_DATE AND  Begin_time<=CURRENT_TIME AND End_time>=CURRENT_TIME";

 $query = $conn->query($sql);
 $row = $query->fetch_assoc();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        <div class ="container">
            <div class ="row">
                <div class ="col">

                </div>
                <div class ="col">
                    <h3>Ongoing Classes</h3>
                <table class="table">
  <thead>
    <tr>
     
      <th scope="col">Room No</th>
      <th scope="col">Course</th>
      <th scope="col">Date</th>
      <th scope="col">Begining Time</th>
      <th scope="col">Ending Time</th>
   
    </tr>
  </thead>
  <tbody>
    <?php
      while($row = $query->fetch_assoc()){
    ?>
    <tr>
     
      <td><?php echo $row['Room'];?></td>
      <td><?php echo $row['Course'];?></td>
      <td><?php echo $row['Date'];?></td>
      <td><?php echo $row['Begin_time'];?></td>
      <td><?php echo $row['End_time'];?></td>
      
    </tr>

    <?php }?>
  </tbody>
</table>
                </div>
                <div class ="col">
                    
                </div>
            </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>