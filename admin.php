<?php
include 'dbcon.php';
$user=$_POST['username'];
$pass=$_POST['password'];
if(isset($_POST['username'])){
    $sql="SELECT * FROM `admin` WHERE `username`='$user' AND `password`='$pass';";
    $result = mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)){
        header("Location: add.php");
       
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student.css">
    <title>login</title>
</head>
<body>
    <form action="admin.php" method="post">
        <h2>ADMIN LOGIN</h2>
        <label>User Name</label>
        <input type="text" name="username" required placeholder="REGISTRATION NO"><br>
        <label>Password</label>
        <input type="password" name="password" required placeholder="PASWORD"><br>
        <button type="submit" valeu="submit" name="submit">LOGIN</buttontype>
    </form>
</body>
</html>