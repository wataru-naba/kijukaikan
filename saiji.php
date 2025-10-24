<?php 
	include './inc/price.php';
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>祭事 | 喜重会館 宴会・婚礼・仕出し・祝膳・仏膳 | 宮崎県日向市</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

<link rel="stylesheet" href="./js/slick/slick.css" media="all">
<link rel="stylesheet" href="./js/slick/slick-theme.css" media="all">
<link rel="stylesheet" href="./css/font.css" media="all">
<link rel="stylesheet" href="./css/style.css" media="all">
<link rel="stylesheet" href="./css/common.css" media="all">
<link rel="stylesheet" href="./css/sub.css" media="all">
<link rel="stylesheet" href="./css/vender/lightbox/lightbox.css" media="all">
<link rel="stylesheet" href="./css/vender/flexslider/flexslider.css" media="all">
<link rel="stylesheet" href="./css/print.css" media="print">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<div id="menupage">
<header class="header clearfix">
    <div class="li-wapper">
        <div class="logo">
            <a href="./"><img src="./images/logo.png" alt="喜重会館"></a>
        </div>
        <div class="info">
            <a href=""><img src="./images/header_tel.png" alt="0982522670"></a>
        </div>
    </div>
    <nav class="nav">
        <ul class="clearfix">
            <li><a href="./">TOP</a>
            <li><a href="./wedding.html">婚礼</a>
            <li><a href="./kaiseki.html">宴会</a>
            <li><a href="./iwaizen.php">祝膳</a>
            <li><a href="./butsuzen.php">仏膳</a>
            <li><a href="./sushi.php">オードブル・寿司</a>
            <li><a href="./takeout.php">弁当類</a>
            <li><a href="./access.html">ご注文方法・配達エリア</a></li>
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
<h3 class="pagetitle">祭事</h3>

<div class="block m-t-40">
    <div class="contents">
        <div class="menu-txt">
            前日、当日のお申し込みはお断りする場合があります。<br/>
            早めにご注文ください。
        </div>
        
        <div class="menu-txt">
            写真はイメージになります。当館は、季節や仕入れ状況等により内容が異なります。
        </div>
        <div class="tile a1-b1-c3 am40-bm40-cm30 m-t-20">
            <?php foreach($saiji as $i):?>
            <div class="menu-warp">
                <div class="thumb"><img src="./images/<?= $i['img']?>"></div>
                <strong><?= $i['name']?></strong>
               <div class="price"><?= number_format($i['price'])?><span>円〜</span></div>
            </div>
            <?php endforeach?>
    
        </div>
           
       
           
        </div>
    </div>
</div><!--/.block-->


<div class="footer-info">
    <a href="tel:0982522670"><img src="./images/footer_tel.png" alt="ご連絡先"></a>
</div>

</div><!-- #page -->

<footer>
    <div class="txt">
        喜重会館 0982-52-2670<br/>
        〒883-0014 宮崎県日向市原町４丁目５−５
    </div>
    ©️ kijukaikan,co
</footer>

<script src="./js/slick/slick.min.js"></script>
<script src="./js/jquery.easing.1.3.js"></script>
<script src="./js/jquery.tile.js"></script>
<script src="./js/vender/jquery.flexslider.js"></script>
<script src="./js/imgLiquid-min.js"></script>
<script src="./js/vender/lightbox.js"></script>
<script src="./js/script.js"></script>

</body>
</html>