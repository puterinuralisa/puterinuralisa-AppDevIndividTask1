
<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>

body{
    background-color:pink;
    font-size:20px;
    text-align:center;
}

</style>

    <?php echo "<h1>Welcome, dear " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a><br>
    <img src="img/welcome.gif" alt="Avatar" class="avatar">
  
</body>
</html>