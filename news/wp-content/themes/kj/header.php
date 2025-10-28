<!doctype html>
<html lang="ja">
<head>
<?php if(getenv('APP_ENV') == 'prod'):?>
<base href="/" target="_self">
<?php else:?>
<base href="/kijukaikan/" target="_self">
<?php endif;?>
<?php wp_head(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

<link rel="stylesheet" href="./js/slick/slick.css" media="all">
<link rel="stylesheet" href="./js/slick/slick-theme.css" media="all">
<link rel="stylesheet" href="./css/font.css" media="all">
<link rel="stylesheet" href="./css/style.css" media="all">
<link rel="stylesheet" href="./css/common.css?<?= time()?>" media="all">
<link rel="stylesheet" href="./css/sub.css" media="all">
<link rel="stylesheet" href="./css/vender/lightbox/lightbox.css" media="all">
<link rel="stylesheet" href="./css/vender/flexslider/flexslider.css" media="all">
<link rel="stylesheet" href="./css/print.css" media="print">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div id="page">

<header class="header clearfix">
    <div class="li-wapper">
        <div class="logo">
            <a href="./"><img src="./images/logo.png" alt="喜重会館"></a>
        </div>
        <div class="info">
            <a href=""><img src="./images/info/tel.svg" alt="0982522670"></a>
        </div>
    </div>
    <nav class="nav">
        <ul class="clearfix">
            <li><a href="./">TOP</a>
            <li><a href="./wedding.php">婚礼</a>
            <li><a href="./kaiseki.php">宴会</a>
            <li><a href="./iwaizen.php">祝膳</a>
            <li><a href="./butsuzen.php">仏膳</a>
            <li><a href="./sushi.php">オードブル・寿司</a>
            <li><a href="./takeout.php">弁当類</a>
            <li><a href="./access.php">ご注文方法・配達エリア</a></li>
        </ul>
    </nav>
    <div class="nav-button-wrap">
        <div class="nav-button">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <strong>MENU</strong>
    </div>
</header>