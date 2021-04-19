<?php
if ($_SESSION["admin"]==0){
    header("location:sales.php");
}