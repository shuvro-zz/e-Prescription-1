<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient Treatment Management</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .div0{
            display: flex;
            margin: 10px;
            padding:20px;
            height: auto;
            border: 2px solid black;
            margin-top: 20px;
            background-color: #b9bbbe;

        }
        .div1 a {
            background-color: #f44336;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            margin: 10px;

        }
        .div1,.div2{
            width: 50%;
            height: auto;
            //outline-style: dashed;
            margin-top: 0px;
        }

        .div1_title,.div2_title{
            border: 1px solid white;
            text-align: center;
            background-color: #103572;
            padding: 5px;
            color: white;
        }
        .div1_form,.div2_form{
            margin-top: -10px;
        }
        .div2{
            width: 50%;
        }
        .div2 a {
            background-color: #4CAF50;;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            margin: 10px;

        }
    </style>
</head>
<body>


<div class="navbar">

    <a class="header"  href="index.php">Patient Treatment Management</a>
    <a class="menu" href="#home">Home</a>
    <a class="menu" href="#news">About Us</a>
    <a class="menu" href="#contact">Contact</a>
    <a class="menu1" href="login.php">Login</a>
    <a class="menu1" href="signup.php">SignUp</a>

</div>
<div class="main-body" style="height:auto;">
    <div class="div0">
        <div class="div1">
            <h3 class="div1_title">Doctor Registration Form</h3>
            <form method="post">
                <fieldset class="div1_form">
                    <legend>Please Fill The Form</legend>
                    First Name:<input type="text" name="first_name"  /><br><br>

                    Last Name:<input type="text" name="last_name"  /><br><br>

                    Gender:
                    <input type="radio" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" value="female"> Female<br><br>

                    Phone No.:<input type="text" name="phone_no"  /><br><br>

                    Email:<input type="text" name="email"   /><br><br>
                    Password:<input type="text" name="password"   /><br><br>

                    <input type="submit" name="doctor_submit" VALUE="Submit" >
                </fieldset>
            </form>

        </div>
        <?php
        include("connection.php");
        error_reporting(0);
        if ($_POST['doctor_submit']){

            $query ="INSERT INTO doctors (first_name, last_name, gender, phone_no,email,password) VALUES('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['gender']}', '{$_POST['phone_no']}', '{$_POST['email']}', '{$_POST['password']}' )";

            $data = mysqli_query($conn,$query);
        }

        ?>

        <div class="line" style=" border-left: 6px solid green;
    height: auto; margin: 4px; margin-top: 15px;"></div>
        <div class="div2">
            <h3 class="div2_title">Patient Registration Form</h3>
            <form method="post">
                <fieldset class="div2_form">
                    <legend>Please Fill The Form</legend>
                    First Name:<input type="text" name="first_name"  /><br><br>

                    Last Name:<input type="text" name="last_name"  /><br><br>

                    Gender:
                    <input type="radio" name="gender" value="Male" checked> Male
                    <input type="radio" name="gender" value="Female"> Female<br><br>

                    Blood Group.:
                    <select name="blood_group" >
                        <option>Select one</option>
                        <option>A+</option>
                        <option>AB+</option>
                        <option>B+</option>
                        <option>O+</option>
                        <option>A-</option>
                        <option>AB-</option>
                        <option>B-</option>
                        <option>O-</option>
                    </select><br><br>

                    Age:<input type="text" name="age"   /><br><br>

                    Phone No.:<input type="text" name="phone_no"   /><br><br>

                    Email:<input type="text" name="email"   /><br><br>

                    Password:<input type="text" name="password"   /><br><br>

                    Address:<input type="text" name="address"   /><br><br>
                    <input type="submit" name="patient_submit" VALUE="Submit" >
                </fieldset>
            </form>
        </div>
        <?php

        if ($_POST['patient_submit']){

            $query1 ="INSERT INTO patients (first_name, last_name, gender, blood_group, age,phone_no,email,password,address) VALUES('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['gender']}', '{$_POST['blood_group']}','{$_POST['age']}', '{$_POST['phone_no']}', '{$_POST['email']}', '{$_POST['password']}','{$_POST['address']}' )";

            $data1 = mysqli_query($conn,$query1);
        }

        ?>
    </div>

</div>
<div class="footer">
    <p><footer>&copy; Copyright 2018 kmhasan</footer></p>
</div>
</body>
</html>