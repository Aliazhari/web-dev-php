<?php
/**
 *
 * Author: Ali Azhari
 * File:   view/header.php
 *
 * 2018
 */

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Triko | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/<?php echo $css;?>">

  <style>



  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .nav-tabs li a {
    color: #777;
  }

  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;

    background-color: #ccc;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #000 !important;
  }

  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: #ccc !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }

  footer .trademark-text {
    text-align:left;
    font-size:10px;
  }
  footer ul {
    list-style-type:none;
    text-align:left;
  }
  footer .li-header {
    font-size: 16px;
    color: #83b502;
  }
  footer .li-social-media {
    display: inline-block
    width: 30px;
    height: 30px;
    margin-right: 1px;
  }
  .form-control {
    border-radius: 0;
  }
  .li-social-media a:hover {
    background-color:#2d2d2d !important;
  }
  textarea {
    resize: none;
  }

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
