<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <div class="main">
        <div class="myform">
            <h2>Registration Form</h2>
            <form method="POST">
                <input type="text" placeholder="Enter Full Name" name="txtfullname">
                <input type="text" placeholder="Enter Email Address" name="txtemail">
                <input type="text" placeholder="Enter Username" name="txtusername">
                <input type="password" placeholder="Enter Password" name="txtpassword">
                <input type="submit" value="Register User" name="btnregister">
            </form>
        </div>
    </div>
    <?php
    include("connection.php");


    
if(isset($_POST['btnregister']))
{
$fullname = $_POST['txtfullname'];
$emailaddress = $_POST['txtemail'];
 $username = $_POST['txtusername'];
$password = $_POST['txtpassword'];
$query = "INSERT INTO tbl_user(full_name, email_address, user_name, user_password) VALUES ('$fullname', '$emailaddress', '$username', '$password')";
$result = mysqli_query($connection, $query);
if($result)
{
echo "<script>alert('User Registered')</script>";
}
}
 ?>
</body>

</html>