<?php
    session_start();
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login</title>
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <div class="main">
        <div class="myform">
            <h2>Login Form</h2>
            <form method="POST">
                <input type="text" placeholder="Enter Username" name="txtusername">
                <input type="password" placeholder="Enter Password" name="txtpassword">
                <input type="submit" value="login" name="btnlogin">
            </form>
        </div>
    </div>
    <?php



if(isset($_POST['btnlogin']))
{
 $username = $_POST['txtusername'];
$password = $_POST['txtpassword'];

$query = "SELECT * FROM tbl_user WHERE user_name='$username' and user_password='$password'";
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result))
{
$_SESSION['myuser'] = $username;
header("location:../index.php");
}
else{
    echo"<script>alert('Incorrect Username or Password')</script>";
}
}
 ?>
</body>
</html>