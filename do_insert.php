<?php session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    exit(0);
}

// TODO: insert the new school based on data from the insert.php form

header("location:index.php");
?>
