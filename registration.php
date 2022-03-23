<!DOCTYPE html>
<html>
<head>
	<title> Registration Form | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
    <form action="registrationform.php" method="post">
        <div class="container">
        <div style="font-size:26px;font-weight:600">REGISTRATION FORM</div>
        <p> Please fill in your information correctly. </p>
        <label>First name </label><br/>
        <input type="text" name="firstname" required>

        <label>Surname </label><br/>
        <input type="text" name="surname" required>

        <label>Middle name </label><br/>
        <input type="text" name="middlename" required>

        <label>Matric number </label><br/>
        <input type="text" name="matricnum" required>

        <label>Email address </label><br/>
        <input type="text" name="emailaddress" required>

        <label>Username </label><br/>
        <input type="text" name="username" required>

        <label>Phone number </label><br/>
        <input type="text" name="phonenumber" required>

        <label>Password </label><br/>
        <input type="text" name="password" required>

    </div>
    </form>
</div>

	
</body>
</hmtl>
