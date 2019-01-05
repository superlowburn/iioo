<?php include "header.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title><?php echo $title . " - " . $tagline;?></title>
  </head>
  <body>
    <div class="container">
    <h1><?php echo $title . " - ";?><small class="text-muted"><?php echo $tagline; ?></small</h1>
    </div>

<?php
include('db.php');
if(!$connection){
  die("DB connection failed");
}

$query = "Select * from posts order by id desc";
$result = mysqli_query($connection, $query);
if(!$result){
  die('Query Failed' . mysqli_error());
}
 ?>

    <div class="container">
    <?php
      while($row = mysqli_fetch_assoc($result)){
        ?>
        <h3><?php echo $row['title']; ?></h3>
        <?php echo $row['body']; ?>
        <?php
      }

    ?>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
