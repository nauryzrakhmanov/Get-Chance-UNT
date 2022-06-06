<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div>
    <?php 
    $mysqli = new mysqli('localhost', 'root' , '', 'database');
    $result = $mysqli->query("SELECT DISTINCT name FROM `university` ");
    $result2 = $mysqli->query("SELECT DISTINCT information FROM `university` ");

   ?>
    <div class="row justify-content-center"> 
      <table class="table">
        <thead>
          <tr>
            <th>University'es </th>
            <th>Information </th>
          </tr>
        </thead>        
        <?php 
        while ($row = $result->fetch_assoc() AND $pow = $result2->fetch_assoc()): ?>
          <tr>
            <td><?php echo $row['name']; ?> </td>
            <td><?php echo $pow['information']; ?> </td>
          </tr>
        <?php endwhile;  ?>
      </table>
    </div>   

  </div>
</body>
</html>