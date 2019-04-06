<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient Treatment Management</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


    <div class="navbar">

        <a class="header"  href="index.php">Patient Treatment Management</a>
        <a class="menu" href="#home">Home</a>
        <a class="menu" href="#news">About Us</a>
        <a class="menu" href="#contact">Contact</a>
        <a class="menu1" href="login.php">Login</a>
        <a class="menu1" href="signup.php">SignUp</a>
        <?php
        // remove all session variables
        session_unset();

        error_reporting(0);

        ?>

    </div>
    <div class="main-body" style="height: 620px;">
        <h1>Homepage</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad adipisci atque blanditiis consectetur cum dolorem, eaque earum explicabo molestias nisi perspiciatis, qui ullam! Dolorem ipsam laboriosam magni minima quod!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad adipisci atque blanditiis consectetur cum dolorem, eaque earum explicabo molestias nisi perspiciatis, qui ullam! Dolorem ipsam laboriosam magni minima quod!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad adipisci atque blanditiis consectetur cum dolorem, eaque earum explicabo molestias nisi perspiciatis, qui ullam! Dolorem ipsam laboriosam magni minima quod!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad adipisci atque blanditiis consectetur cum dolorem, eaque earum explicabo molestias nisi perspiciatis, qui ullam! Dolorem ipsam laboriosam magni minima quod!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad adipisci atque blanditiis consectetur cum dolorem, eaque earum explicabo molestias nisi perspiciatis, qui ullam! Dolorem ipsam laboriosam magni minima quod!</p>

    </div>
    <div class="footer">
        <p><footer>&copy; Copyright 2018 kmhasan</footer></p>
    </div>
</body>
</html>