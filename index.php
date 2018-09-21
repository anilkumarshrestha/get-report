<?php 
    require_once 'config.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Swastha Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

</head>
<?php include "header.php";?>

<body>
    
<div class="jumbotron text-center">
  <h1>Swastha</h1>
  <p>Get your health report anywhere anytime.</p> 
<?php
if(isset($_SESSION["doctor"])){
    include "report_upload.php";
} elseif(isset($_SESSION["patient"])){
    include "patient_view.php";
}
?>
</div>
</body>
</html>
