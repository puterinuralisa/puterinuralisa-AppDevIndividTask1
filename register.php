<?php
require_once('config.php');
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
<?php
    if(isset($_POST['register'])){
        $firstname     = $_POST['firstname'];
        $surname       = $_POST['surname'];
        $middlename    = $_POST['middlename'];
        $matricnum     = $_POST['matricnum'];
        $emailaddress  = $_POST['emailaddress'];
        $username      = $_POST['username'];
        $phonenumber   = $_POST['phonenumber'];
        $password      = $_POST['password'];

        $sql = "INSERT INTO registrationaccount (firstname, surname, middlename, matricnum, emailaddress, username, phonenumber, password) VALUES (?,?,?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname, $surname,$middlename,$matricnum,$emailaddress,$username,$phonenumber,$password]);
        if($result){
            echo 'Data successfully saved. ';
        } else {
            echo 'ERORR. Data are not able to be saved. ';
;        }
    }
    ?>
</body>
</html>