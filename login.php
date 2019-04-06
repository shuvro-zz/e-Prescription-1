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
            height: 600px;
        //outline-style: dashed;
            margin-top: -50px;
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
<div class="main-body" style="height:650px;">
    <div class="div0">
        <div class="div1">
            <h3 class="div1_title">Doctor Login</h3>
            <form method="get">
                <fieldset class="div1_form">
                    <legend>Please Fill The Form</legend>

                    Email:<input type="text" name="email"   /><br><br>
                    Password:<input type="text" name="password"   /><br><br>

                    <input type="submit" name="doctor_submit" VALUE="Submit" >
                </fieldset>
            </form>

        </div>
        <?php
        include("connection.php");
        error_reporting(0);
        session_start();
        $query ="SELECT * FROM doctors";
        $data = mysqli_query($conn,$query);
        $total=mysqli_num_rows($data);

        $email=$_GET['email'];
        $password=$_GET['password'];

        if($_GET['doctor_submit']){
            if($total != 0 ){
                if ($email !='' && $password !=''){
                    $sum=1;

                    while ( $result = mysqli_fetch_assoc($data)) {

                        if($email == $result['email'] && $password == $result['password']){
                            $sum=0;
                            $_SESSION["doctor_id"] =$result['doctor_id'];
                            unset($email);
                            unset($password);
                            header("Location:doctor.php");
                        }

                    }
                    if($sum == 1){
                        ?>
                        <script>alert('Wrong email or password');</script>
                        <?php

                    }
                }
                else{
                    ?>
                        <script>alert('Fill all field');</script>
                    <?php
                }
            }
            else {
                //echo "No record found";
                ?>
                    <script>alert('No record found');</script>
                <?php
            }


        }

        ?>

        <div class="line" style=" border-left: 6px solid green;
    height: 600px; margin: 4px; margin-top: -29px;"></div>
        <div class="div2">
            <h3 class="div2_title">Patient Login</h3>
            <form method="get">
                <fieldset class="div2_form">
                    <legend>Please Fill The Form</legend>

                    Email:<input type="text" name="email1"   /><br><br>

                    Password:<input type="text" name="password1"   /><br><br>

                    <input type="submit" name="patient_submit" VALUE="Submit" >
                </fieldset>
            </form>
        </div>
        <?php
        $query1 ="SELECT * FROM patients";
        $data1 = mysqli_query($conn,$query1);
        $total1=mysqli_num_rows($data1);

        $email1=$_GET['email1'];
        $password1=$_GET['password1'];

        if($_GET['patient_submit']){
            if($total1 != 0 ){
            if ($email1 !='' && $password1 !=''){
                $sum1=1;

                while ( $result1 = mysqli_fetch_assoc($data1)) {

                    if($email1 == $result1['email'] && $password1 == $result1['password']){
                        $sum1=0;
                        $_SESSION["patient_id"] =$result1['patient_id'];
                        header("Location:patient.php");
                    }

                }
            if($sum1 == 1){
                ?>
                <script>alert('Wrong email or password');</script>
            <?php

            }
            }
            else{
            ?>
                <script>alert('Fill all field');</script>
            <?php
            }
            }
            else {
            //echo "No record found";
            ?>
                <script>alert('No record found');</script>
                <?php
            }


        }

        ?>
    </div>

</div>
<div class="footer">
    <p><footer>&copy; Copyright 2018 kmhasan</footer></p>
</div>
</body>
</html>