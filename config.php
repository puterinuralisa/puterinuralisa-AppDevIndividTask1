<!-- PUTERI NUR ALISA BINTI ISMAIL
A19ET0362
SECJ3104 APPLICATION DEVELOPMENT 
INDIVIDUAL TASK 1 -->

<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "registrationaccount";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
?>