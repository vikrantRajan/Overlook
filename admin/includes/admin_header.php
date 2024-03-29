<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "../../../overlookDB/ConnectToDB.php" ?>
<?php include "classes/QueryCheck.php" ?>
<?php include "classes/Categories.php" ?>
<?php include "classes/Comments.php" ?>
<?php include "classes/Posts.php" ?>
<?php include "classes/Users.php" ?>
<?php include "classes/Orders.php" ?>

<?php 

if(!isset($_SESSION['user_role'])){
        header("Location: login.php");
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rainbowtique</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript" src="js/script.js"></script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">
    </script>
</head>

<body>