<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")


    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $yearlvl = $_POST['yrlvl'];
        $sect = $_POST['section'];
        $idno = $_POST['idnum'];
        $gmail = $_POST['email'];
        $password = $_POST['pass'];

        if(!empty($idno) && !empty($password) && !is_numeric($idno))
    
        {
            $query = "insert into form (fname, lname, yrlvl, section, idnum, email, pass) values ('$firstname', '$lastname', '$yearlvl', '$sect', '$idno', '$gmail', '$password')";
       
            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Successfully Registered') </script>";
        }

        else
        {
            echo "<script type='text/javascript'> alert('Please enter a valid information') </script>";
        }

        

    }





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="web-team-img/icpep-logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="web-team.css">
   
    <title>Create Account</title>
</head>
<body>
    <div class="signup">
        <h1>Create an Account</h1>
        <!-- h4 -->
        <form method="POST" >
            <label>First Name:</label>
            <input type="text" name="fname" required>
            <label>Last Name:</label>
            <input type="text" name="lname" required>
            <label>Year Level:</label>
            <input type="text" name="yrlvl" required>
            <label>Section:</label>
            <input type="text" name="section" required>
            <label>ID Number:</label>
            <input type="text" name="idnum" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Password:</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="Create Account">
        </form>
        

    </div>
    
</body>
</html>