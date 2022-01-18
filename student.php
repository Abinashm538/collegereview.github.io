<?php
include 'dbcon.php';
$reg=$_POST['reg'];
$pass=$_POST['password'];
if(isset($_POST['reg'])){
    $sql="SELECT * FROM `student` WHERE `reg_no`='$reg' AND `password`='$pass';";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)){
        header("Location: write.php");
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
    <form action="student.php" method="post">
        <h2>STUDENT LOGIN</h2>
        <label>REGISTRATION NO</label>
        <input type="integer" name="reg" required placeholder="REGISTRATION NO"><br>
        <label>PASSWORD</label>
        <input type="password" name="password" required placeholder="PASSWORD"><br>
        <button type="submit" valeu="submit" name="submit">LOGIN</buttontype>
    </form>
</body>
</html>