<?php 
	include './inc/price.php';
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>祝膳 | 喜重会館 宴会・婚礼・仕出し・祝膳・仏膳 | 宮崎県日向市</title>
<meta name="viewport" content="width=device-width initial-scale=1.0">
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

<div id="menupage">
<?php include './inc/header.php';?>
<h3 class="pagetitle">祝膳</h3>

<div class="block m-t-40">
    <div class="contents">
        <p class="cp">ハレの佳き日を華やかに彩る祝いの膳。</p>
        <div class="menu-txt">
            前日、当日のお申し込みはお断りする場合があります。<br/>
            早めにご注文ください。
        </div>
        <div class="menu-txt">
            写真はイメージになります。当館は、季節や仕入れ状況等により内容が異なります。
        </div>
        <div class="tile a1-b1-c3 am40-bm40-cm30 m-t-20">
            <?php foreach($iwaizen as $i):?>
            <div class="menu-warp">
                <div class="thumb"><img src="./images/<?= $i['img']?>"></div>
                <strong><?= $i['name']?></strong>
             
               <div class="price takeout">テイクアウト：<?= number_format(calc_tax_takeout($i['price'],$i['tax']))?><span>円(税込)</span></div>
                <div class="price"><?= number_format($i['price'] * 1.1)?><span>円(税込)</span></div>
            </div>
            <?php endforeach?>
            <?php foreach($sushi as $i):?>
            <div class="menu-warp">
                <div class="thumb"><img src="./images/<?= $i['img']?>"></div>
                <strong><?= $i['name']?></strong>
                <?php if($i['tax']):?>
               <div class="price takeout">テイクアウト：<?= number_format(calc_tax_takeout($i['price'],$i['tax']))?><span>円(税込)</span></div>
                <div class="price"><?= number_format($i['price'] * 1.1)?><span>円(税込)</span></div>
                <?php else:?>
                    <div class="price"><?= number_format($i['price'])?><span>円(税込)</span></div>
                <?php endif?>
            </div>
            <?php endforeach?>
           
        </div>
    </div>
</div><!--/.block-->




</div><!-- #page -->



<?php include './inc/footer.php';?>

<script src="./js/slick/slick.min.js"></script>
<script src="./js/jquery.easing.1.3.js"></script>
<script src="./js/jquery.tile.js"></script>
<script src="./js/vender/jquery.flexslider.js"></script>
<script src="./js/imgLiquid-min.js"></script>
<script src="./js/vender/lightbox.js"></script>
<script src="./js/script.js"></script>

</body>
</html>