<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH</title>
    <link href="ss.css" rel="stylesheet">
    <style>
        body{
            width:100%;
            height:100vh;
            color: blue;
            background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(pt.jpg);
            background-size: cover;
            background-position: center;
        }
 div.login-boxx {
  position: relative;
  top: 110%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0, 0, 0, 0.548);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}
div.login-boxx .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
div.login-boxx .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}
div.login-boxx .user-box input:focus ~ label,
div.login-boxx .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}
        </style>
</head>
<body>
                     <div class="login-box">
                        <h2>KNOW CRIMINAL DETAILS BY DATE</h2>
                        <div class="user-box">

                        <form action="" method="GET">
                                    <input type="date" name="datee" value="<?php if(isset($_GET['datee'])){echo $_GET['datee'];} ?>" class="form-control">
                                    <a><button type="submit" class="btn btn-primary">Search</button></a>
                                    <a href="home.html"><button type="button" class="hello">Get back</button></a>
                        </form>
    </div>
    </div>

                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","crimes");

                                    if(isset($_GET['datee']))
                                    {
                                        $userid = $_GET['datee'];

                                        $query = "SELECT * FROM criminal c, cases d WHERE c.CASE_ID=d.CASE_ID AND c.DOC ='$userid'";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="login-boxx">
                                                <div class="user-box">
                                                    Criminal Name
                                                    <input type="text" value="<?= $row['C_NAME']; ?>" class="form-control">
                                                    </div>
                                                    <div class="user-box">
                                                    Criminal Phone
                                                    <input type="text" value="<?= $row['C_PHONE']; ?>" class="form-control">
                                                    </div>
                                                    <div class="user-box">
                                                    Case Id
                                                    <input type="text" value="<?= $row['CASE_ID']; ?>" class="form-control">
                                                    </div>
                                                    <div class="user-box">
                                                    Case Type
                                                    <input type="text" value="<?= $row['CASE_TYPE']; ?>" class="form-control">
                                                    </div>
                                            </div>
                                            </br>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>
</html>