<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<style> 
.topright 
{
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}
.topleft
{
  border: 2px solid red;
  background: url(paper.gif);
  padding: 10px;
  border-top-left-radius: 40%;
}
.topleft1 {
  position: absolute;
  top: 8px;
  left: 16px;
  font-size: 18px;
}
</style>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" /><link rel="stylesheet" href="css/animate.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="css/font.css" type="text/css" />
<link rel="stylesheet" href="css/app.css" type="text/css" />
    <title>Welcome</title>
</head>
<body>
<div class="topright">
<div class="input-group">
    <a href="logout.php"><p style="text-align:center;"><p class="login-text" style="font-size: 2rem; font-weight: 800;">Logout</p></p>
</div>
</a>
</div>
<div class="topleft1">
    <?php 
    echo "<h1>Welcome, " . $_SESSION['username'] . "</h1>"; 
    ?>

</body>
</html>