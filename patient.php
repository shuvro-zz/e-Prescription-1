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

                #customers {
                //font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                    margin: 0px;
                    margin-bottom: 50px;
                }

                #customers td, #customers th {
                    border: 2px solid #ddd;
                    padding: 5px;
                    text-align: center;
                }

                #customers tr:nth-child(even){background-color: #f2f2f2;}

                #customers tr:hover {background-color: #ddd;}

                #customers th {
                    padding: 10px;
                    background-color: #4CAF50;
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
            <h2 style="text-align: center;color: white; border: 1px solid black;padding: 4px;background-color: #0c5460;">Your Treatment History</h2>

            <table id="customers">
                <tr>
                    <th>Serial No.</th>
                    <th>Dates</th>
                    <th>Times</th>
                    <th>Doctor Names</th>
                    <th>Diseases</th>
                    <th>Prescriptions</th>
                </tr>

                <?php
                while ( $result4 = mysqli_fetch_assoc($data4)){
                    $count++;
                    ?>
                    <tr>
                        <td><?php echo $count?></td>
                        <td><?php echo $result4['_date']?></td>
                        <td><?php echo $result4['time']?></td>
                        <?php
                        $doc_id=$result4['doctor_id'];
                        $query5 ="SELECT * FROM doctors where doctor_id='$doc_id'";
                        $data5 = mysqli_query($conn,$query5);
                        $result5 = mysqli_fetch_assoc($data5);
                        ?>
                        <td><?php echo $result5['first_name']." ".$result5['last_name']?></td>
                        <td><?php echo $result4['title']?></td>
                        <td><?php echo $result4['description']?></td>

                    </tr>

                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<div class="footer">
    <p><footer>&copy; Copyright 2018 kmhasan</footer></p>
</div>
</body>
</html>