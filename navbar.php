<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>
    .navbar-dark .navbar-nav .nav-link{
        color: #1b1e21;
    }
    .logo{
        position: relative;

    }

</style>
<body>

<nav class="navbar navbar-expand-md bg-success navbar-dark">
    <!-- Brand -->
    <div class="logo"><a href="index.php"> <img src="image/Monogram%20CJ%20Logo.jfif" width="90"></a></div>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <!--   ' ml auto' pushes the nav bar to the right-->
            <?php if (isset($_SESSION["logged_in"])): ?>




                <li class="nav-item">
                    <a class="nav-link" href="add-product.php">Add Console</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add-customer.php">Add Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sales.php">Sale</a>
                </li>


                <?php if ($_SESSION["admin"]==1): ?>

                    <li class="nav-item">
                        <a class="nav-link" href="add-user.php">Add User</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="sales-report.php">Reports</a>
                    </li>


                <?php endif; ?>


                <!--sign out dropdown-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <?= $_SESSION["names"] ?>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="logout.php">Sign Out</a>
                    </div>
                </li>



            <?php endif; ?>

            <?php if ( ! isset($_SESSION["logged_in"])): ?>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>

            <?php endif; ?>

        </ul>
    </div>
</nav>
</body>
</html>