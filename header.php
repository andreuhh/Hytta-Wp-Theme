<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hytta Outdoor</title>
    <!-- Reset css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" />
    <!-- Style css -->
    <!--<link rel="stylesheet" href="style.css">-->
    <!-- Font -->
    <!--<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">-->
    <!-- Font Awesome -->
    <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons">-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="header">
        <div class="header__logo">
            <a href="<?php echo site_url('/')?>">
                <img src="img/logoprova.png" alt="">
            </a>        
        </div>
        <ul class="header__menu">
            <li><a href="<?php echo site_url('/attività') ?>">Attività</a></li>
            <li><a href="<?php echo site_url('/noleggio') ?>">Noleggio</a></li>
            <li><a href="<?php echo site_url('/chi-siamo') ?>">Chi siamo</a></li>
            <li><a href="<?php echo site_url('/diventa-partner') ?>">Diventa Partner</a></li>
            <li class="only-mobile"><a href="" class="orange">Accedi</a></li>
        </ul>
        <div class="header__cta">
            <a href="" class="button">Accedi</a>
            <a href="<?php echo site_url('/carrello') ?>">Carrello</a>
        </div>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>