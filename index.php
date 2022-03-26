<!-- PUTERI NUR ALISA BINTI ISMAIL
A19ET0362
SECJ3104 APPLICATION DEVELOPMENT 
INDIVIDUAL TASK 1 -->

<?php
include 'config.php';
session_start();
error_reporting(0);

if (isset($_SESSION['username'])) {
  header("Location: user.php");
}

if (isset($_POST['loginbutton'])) {
  $emailaddress = $_POST['emailaddress'];
  $password = ($_POST['password']);

  $sql = "SELECT * FROM registrationaccount WHERE emailaddress='$emailaddress' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: user.php");
  } else {
    echo "<script>alert('Error! Username or password wrongly entered. Please check again. ')</script>";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;
    }

    form {
      margin: auto;
      width: 25%;
      border: 2px solid black;
      padding: 10px;
      background-color: #FF8976;
      border-radius: 10px;
    }

    body,
    html {
      margin: auto;
      padding: 25px;
      height: 50%;
      background: #FFE5B4;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 10px;
    }

    button {
      background-color: #AA1945;
      color: white;
      padding: 10px 15px;
      margin: 8px;
      border: 10px;
      cursor: pointer;
      width: 45%;
      border-radius: 15px;
    }

    .loginbutton {
      font-size: 17px;
    }

    button:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    .imgcontainer {
      text-align: center;
      margin: 15px 10px;
    }

    img.avatar {
      width: 45%;
      border-radius: 35%;
    }

    .container {
      padding: 14px 20px;
    }

    a {
      color: #AE388B;
    }
  </style>
</head>
<body>
  <form action="" method="post">

    <div class="imgcontainer">
      <img src="img/penguin.gif" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="emailaddress"><b>Email address</b></label>
      <input type="text" placeholder="Enter registered email address" id="emailaddress" name="emailaddress" value="<?php echo $emailaddress; ?>" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="password" name="password" value="<?php echo $_POST['password']; ?>" required>

      <button type="submit" id="loginbutton" name="loginbutton" class="loginbutton">Login</button><br>
      
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      
    </div>

    <div class="container-x">
      First time user? <a href="registration.php"> Sign up here.</a><br>
    </div>

  </form>
</body>
</html>