<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title><?= $title; ?></title>
    <meta name="description" content="Tlearning">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <link rel="manifest" href="__manifest.json">

</head>

<body>
    <!-- loader -->
    <div id="loader">
        <img src="<?php echo base_url('assets/img/logo-icon.png') ?>" alt="icon" class="loading-icon">
    </div>
    <!-- loader -->

    <!-- App Header -->
    <div class="appHeader">

            <div class="left">
                <a href="#" class="headerButton goBack">
                    <ion-icon name="chevron-back-outline"></ion-icon>
                </a>
            </div>

        <div class="pageTitle">
            <?= $active?>
        </div>
    </div>

    <!-- * App Header -->
    <div id="appCapsule" class="full-height">