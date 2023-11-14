<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $idno = $_POST['idnum'];
        $password = $_POST['pass'];

        if(!empty($idno) && !empty($password) && !is_numeric($idno))

        {
            $query = "select * from form where idnum= '$idno' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['pass']== $password)
                    {
                        header("location: index.php");
                        die;
                    }
                }
            }
            echo "<script type='text/javascript'> alert('Wrong ID NUMBER or PASSWORD!') </script>";
        }

        else{
            echo "<script type='text/javascript'> alert('Wrong ID NUMBER or PASSWORD!) </script>";
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
   
    <title>ICpEP.SE</title>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <!-- h4 -->
        <form method="POST">
            <label>User Name:</label>

            <!-- idnum is nasa phpadmin yan yung pang usrname -->
            <input type="text" name="idnum" required>

            <label>Password:</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="Log In">
        </form>
        
        <p><a href="#">Forgot Password?</a></p>

    </div>
    
</body>
</html>