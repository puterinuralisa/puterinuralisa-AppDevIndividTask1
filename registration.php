<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title> Registration Form | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
  
</div>

<div>
    <form action="register.php" method="post">
        <div class="container">
         
        <div class="row">
        <div class="col-sm-3"> 
        
        <div style="font-size:26px;font-weight:600">REGISTRATION FORM</div>
        
        <p> Please fill in your information correctly. </p>
        <hr class="mb-3"> 
        
        <label><b>First name</b></label><br/>
        <input class="form-control" type="text" name="firstname" required>

        <br/><label><b>Surname</b></label><br/>
        <input class="form-control" type="text" name="surname" required>

        <br/><label><b>Middle name</b></label><br/>
        <input class="form-control" type="text" name="middlename" required>

        <br/><label><b>Matric number</b></label><br/>
        <input class="form-control" type="text" name="matricnum" required>

        <br/><label><b>Email address</b></label><br/>
        <input class="form-control" type="text" name="emailaddress" required>

        <br/><label><b>Username </label></b><br/>
        <input class="form-control" type="text" name="username" required>

        <br/><label><b>Phone number</b></label><br/>
        <input class="form-control" type="text" name="phonenumber" required>

        <br/><label><b>Password </label></b><br/>
        <input class="form-control" type="text" name="password" required>

        <hr class="mb-3"> 
        <input class="btn btn-primary" type="submit" name="register" id="registeration" value="REGISTER">
        </div> 
    </div>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(function(){
        $('#registeration').click(function(){
            Swal.fire({
            'title': 'Hello, welcome! ',
            'text': 'This is the registration page. Kindly fill in your details here to register.',
            'type': 'success'
             })   
        });
    }); 
     
</script>
</body>
</hmtl>
