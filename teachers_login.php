<?php

$connect=mysqli_connect("localhost","root","","db_tech");

$_SESSION['login']=true;
if($_SESSION['login']){

if(isset($_REQUEST["login"])){
    $email=$_REQUEST["email"];
    $idn=$_REQUEST["idn"];
   $query= mysqli_query($connect, "select * from teachers where email='$email' && idn='$idn'");
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true)
    {
        header('location: getdata.php');
    }
    else{
        echo "<p style='color:red'>Wrong Email or ID Number</p>";
    }
}
}
else{
    header('location: /index.html');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teachers' login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="left-section">
        <div id="left-cover" class="cover cover-hide">
            <img src="cover.png" alt="">
           
            <button type="button" class="switch-btn" onclick="location.reload()">Login</button>
        </div>
        <div id="left-form" class="form fade-in-element">
            <h1 class="l">Teacher's Login</h1>
            <form method="post">
                <input type="text" name="email" class="input-box" placeholder="Email" required>
                <input type="password" name="idn" class="input-box" placeholder="ID Number" required>
                <input type="submit" name="login" class="btn" value="Login">
            </form>
        </div>
    </section>
</body>
</html>