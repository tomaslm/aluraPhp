<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once "show-alert.php";
?>
<html>

<head>
    <meta charset="utf-8">
    <title>My store</title>
    <link href="css/store.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a href="index.php" class="navbar-brand bg-dark">My
            store</a>

        <!-- <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

        <div class="navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="product-form.php">Add
                        product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product-list.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="container">
        <div class="principal">
        <?php
showAlert("success");
showAlert("danger");
?>