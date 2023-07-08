<?php
if (isset($_GET["id"]))
{
    session_start();
    $_SESSION["products"][] = (int)$_GET["id"];  //adding the ids
}
header("location:sales.php");

