<!-- PUTERI NUR ALISA BINTI ISMAIL
A19ET0362
SECJ3104 APPLICATION DEVELOPMENT 
INDIVIDUAL TASK 1 -->

<?php
include 'config.php';
error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $firstname     = $_POST['firstname'];
    $surname       = $_POST['surname'];
    $emailaddress  = $_POST['emailaddress'];
    $username      = $_POST['username'];
    $phonenumber   = $_POST['phonenumber'];
    $password      = $_POST['password'];

    $sql = "SELECT * FROM registrationaccount WHERE emailaddress='$emailaddress'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO registrationaccount (firstname, surname, emailaddress, username, phonenumber, password)
					VALUES ('$firstname', '$surname', '$emailaddress', '$username', '$phonenumber', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('User registration successful! Please proceed to the login page.')</script>";
        } else {
            echo "<script>alert('Error! Please try again.')</script>";
        }
    } else {
        echo "<script>alert('Error! Email address already exists. Please try again.')</script>";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title> Registration Form | PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        form {
            margin: auto;
            width: 50%;
            border: 2px solid black;
            padding: 10px;
            background-color: #FF8976;
            border-radius: 10px;
        }

        body,
        html {
            margin: auto;
            padding: 20px;
            height: 50%;
            background: #FFE5B4;
        }

        input[type=text] {
            margin: auto;
            width: 70%;
        }

        input[type=submit] {
            background-color: #AA1945;
            border: 2px solid white;

        }

        a {
            color: #AE388B;
        }
    </style>
    <div>
        <form style="text-align: center;" method="post">
            <div class="container">
                <div class="row">
                    <div style="font-size:26px;font-weight:600">REGISTRATION FORM</div>

                    <p>Please fill in all the required information. </p>
                    <hr class="mb-3">

                    <label><b>First name</b></label><br />
                    <input class="form-control" type="text" name="firstname" required>

                    <br /><label><b>Surname</b></label><br />
                    <input class="form-control" type="text" name="surname" required>

                    <br /><label><b>Email address</b></label><br />
                    <input class="form-control" type="text" name="emailaddress" required>

                    <br /><label><b>Username </label></b><br />
                    <input class="form-control" type="text" name="username" required>

                    <br /><label><b>Phone number</b></label><br />
                    <input class="form-control" type="text" name="phonenumber" required>

                    <br /><label><b>Password </label></b><br />
                    <input class="form-control" type="text" name="password" required>

                    <hr class="mb-3">
                    <input style="margin: 4px 2px;" class="btn btn-primary" type="submit" name="submit" id="submit" value="REGISTER">
                    <a href="index.php"> Already have an account? Login here. </a><br>

                </div>
            </div>
        </form>
    </div>
</body>
</hmtl>