<?php
                session_start();
                include("connector.php");

                if (isset($_POST['submit'])){

                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    
                    $result=mysqli_query($conn,"SELECT* from  login where username='$username' and password='$password'") or die("Failed to query database".mysql_error());
                    
                    $rowcount=mysqli_num_rows($result);
                    if($rowcount==true) {
                        $_SESSION["username"]=$username;
                        header('location:index.html');
                    }
                    else{
                        echo "wrong username/password";
                    }

                }
        ?>

        <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="loginn.css">
    
    <title>login</title>
    <style type="text/css">
        body{
    background-image: url(images/images3.jpg);
    background-size: cover;
    background-attachment: fixed;
}
.container{
    text-align: center;
    padding-top: 200px;
    
}
.btn_login{
    color: rgb(27, 5, 68);
    background-color: blue;
}
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row" style="margin-top:10px ;">
            <div class="col-md-12 ">
                <form action="#" method="post">
                    <div class="form_input">
                        <input type="text" name="username" placeholder="Enter your username">
                    </div>
                    <br> 
                    <div class="form_input">
                        <input type="password" name="password" placeholder="Enter your password">
                    </div>
                    <br>
                    <input type="submit" name="submit" value="LOGIN" class="login">
                </form>
            </div>
            
           
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>