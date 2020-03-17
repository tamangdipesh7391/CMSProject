
<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?=base_url('layouts/css/font-face.css" rel="stylesheet')?>" media="all">
    <link href="<?=base_url('layouts/vendor/font-awesome-4.7/css/font-awesome.min.css')?>" rel="stylesheet" media="all">
    <link href="<?=base_url('layouts/vendor/font-awesome-5/css/fontawesome-all.min.css')?>" rel="stylesheet" media="all">
    <link href="<?=base_url('layouts/vendor/mdi-font/css/material-design-iconic-font.min.css')?>" rel="stylesheet" media="all">


    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url('layouts/css/bootstrap.min.css')?>">
    

   <!-- custom styles -->
   <link href="<?=base_url('layouts/css/theme.css')?>" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="<?=base_url('layouts/css/style.css')?>">
</head>

<body class="">
   <?php if(isset($_SESSION['status'])=='Success') { ?>
    <header class="header-desktop">
      <a href="<?=base_url('logout.php');?>" style="float: right;margin-top: 10px;
    margin-right: 12px;"> <button class="btn btn-warning btn-lg" >Logout</button></a>
    </header>

    <?php } ?>