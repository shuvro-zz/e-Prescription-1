<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient Treatment Management</title>
    <link rel="stylesheet" href="style.css">

    <?php
    include("connection.php");
    error_reporting(0);
    session_start();

    $patient_id=$_SESSION["patient_id"];
    ?>
</head>
<body>


<div class="navbar">

    <a class="header"  href="index.php">Patient Treatment Management</a>
    <a class="menu" href="#home">Home</a>
    <a class="menu" href="#news">About Us</a>
    <a class="menu" href="#contact">Contact</a>
    <a class="menu1" href="login.php">Logout</a>

</div>
<div class="main-body">
    <style>
        .div0{
            display: flex;
        }
        .div1{
            border: 2px solid black;
            width: 20%;
            height: 200px;
            margin: 5px;

        }
        .div2{
            border: 2px solid black;
            width: 75%;
            margin: 5px;
        }
    </style>
    <?php
    $query ="SELECT * FROM patients where patient_id='$patient_id'";
    $data = mysqli_query($conn,$query);
    //$total=mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
    $fname=$result['first_name'];
    $lname=$result['last_name'];




    ?>
    <h1 style="text-align: center;"><?php echo "Welcome ".$fname." ". $lname;?></h1>
    <div class="div0">
        <div class="div1">
            <style>
                ul {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    width: 100%;

                }

                li a {
                    display: block;
                    color: #000;
                    padding: 8px 16px;
                    text-decoration: none;
                    background-color: #f1f1f1;
                    margin:5px;
                }

                /* Change the link color on hover */
                li a:hover {
                    background-color: #555;
                    color: white;
                }


            </style>
            <?php

            $query4 ="SELECT * FROM treatments where patient_id='$patient_id'";
            $data4 = mysqli_query($conn,$query4);
            $total4=mysqli_num_rows($data4);
            $count=0;

            ?>
            <ul>

                <li><a href="patient.php">Prescription(<?php echo $total4; ?>)</a></li>
                <li><a href="patientupdate.php">Update Information</a></li>

            </ul>
        </div>
        <div class="div2">
            <form method="get">
                Phone No.:<input type="text" name="phone_no" value="<?php echo$result['phone_no']; ?>"   /><br><br>

                Email:<input type="text" name="email" value="<?php echo$result['email']; ?>"  /><br><br>

                Password:<input type="text" name="password"  value="<?php echo$result['password']; ?>" /><br><br>

                Address:<input type="text" name="address"  value="<?php echo$result['address']; ?>" /><br><br>
                <input type="submit" name="patient_submit" VALUE="Submit" >
            </form>

<?php
            if ($_GET['patient_submit']) {
            $phone_no = $_GET['phone_no'];
            $email = $_GET['email'];
            $password = $_GET['password'];
            $address = $_GET['address'];


            $query2 = "update patients set phone_no='$phone_no' , email='$email' ,password='$password',address='$address' WHERE patient_id='$patient_id'";
            $data2 = mysqli_query($conn,$query2);

            if ($data2) {
            echo "Data updated successfully";
            }
            
            }
            ?>
        </div>
    </div>
</div>
<div class="footer">
    <p><footer>&copy; Copyright 2018 kmhasan</footer></p>
</div>
</body>
</html>