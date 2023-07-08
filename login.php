<?php
if (isset($_REQUEST["password"]))
{
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    require 'connect.php';

    //retrieve one record that matches the email
    //check the password hash
    //store the data in a session
    $query=mysqli_prepare($con, "SELECT * FROM users WHERE email = ?");
//    the prepare query makes it difficult to hack
    mysqli_stmt_bind_param($query,"s", $email); // add the data
    mysqli_stmt_execute($query); //execute the query
    $result = mysqli_stmt_get_result($query);
    if (mysqli_num_rows($result) == 1)
    {
        $user = mysqli_fetch_assoc($result);
//        var_dump($user);
//        die();
        $hash= $user["password"];
        if (password_verify($password, $hash))
        {
            session_start();
            $_SESSION["names"]= $user["names"];
            $_SESSION["id"]= $user["id"];
            $_SESSION["admin"]= $user["admin"];

            $_SESSION["logged_in"]= true;
            header("location:add-product.php");
            //success

        }else{
            setcookie("error", "wrong username or password", time()+3);
            header("location:login.php");

        }

    }
    else{
        setcookie("error", "wrong username or password", time()+3);
        header("location:login.php");
    }



}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script
</head>
<style>
    .sign{
        font-family: Arial,Helvetica,sans-serif;
        font-size: 14px;
        font-weight: bold;
        color: antiquewhite ;
    }
</style>


<body background="image/Vintage%20Gaming%20Logo.jfif">

<?php include 'navbar.php' ?>
<?php //include 'carousel.php' ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5 shadow-sm">
            <h4 class="sign">Sign In</h4>

            <?php include 'alert.php'?>

            <form action="login.php" method="post">

                <div class="form-group">
                    <label class="sign">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="form-group">
                    <label class="sign">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>

                <button class="btn btn-success">Sign In</button>

            </form>
        </div>
    </div>
</div>


</body>
</html>



