<?php 
	include './inc/price.php';
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>喜重会館・アンクールピュール 宴会・婚礼・仕出し・祝膳・仏膳 | 宮崎県日向市</title>
<link rel="canonical" href="http://www.kijyuukaikan.jp/" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="仕出し・仏膳・祝膳・お弁当。日向市・美々津・門川・諸塚・北郷・西郷エリアに配達いたします。テイクアウトにも可。各種宴会・忘年会・新年会・祝賀会・法事・結納もお任せください。">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

<link rel="stylesheet" href="./js/slick/slick.css" media="all">
<link rel="stylesheet" href="./js/slick/slick-theme.css" media="all">
<link rel="stylesheet" href="./css/font.css" media="all">
<link rel="stylesheet" href="./css/style.css" media="all">
<link rel="stylesheet" href="./css/common.css" media="all">
<link rel="stylesheet" href="./css/top.css?<?= time()?>" media="all">
<link rel="stylesheet" href="./css/vender/lightbox/lightbox.css" media="all">
<link rel="stylesheet" href="./css/vender/flexslider/flexslider.css" media="all">
<!--
<link rel="stylesheet" href="./css/print.css" media="print">
-->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
</head>

<div id="page">
<header class="header  clearfix">
    <div class="li-wapper">
        <div class="logo">
            <a href="./"><img src="./images/logo.png" alt="喜重会館"></a>
        </div>
        <div class="info">
            <a href=""><img src="./images/header_tel.png" alt="0982522670"></a>
        </div>
    </div>
</header>

<section class="infomation">
    <div class="contents">
    <h3 class="title-l">NEWS <span>お知らせ</span></h3>
       <ul class="topnews_list">
        <!--
            <li><a href="./osechi.php"><span>2024.11.01</span>おせち&オードブルのご案内</a></li>
            -->
       </ul>
    </div>
</section>



<div class="menu-wrap clearfix">
    <nav class="nav">
        <ul>
            <li><a href="./">TOP</a>
            <li><a href="./osechi.php">おせち</a>
            <li><a href="./wedding.html">婚礼</a>
            <li><a href="./kaiseki.html">宴会</a>
            <li><a href="./iwaizen.php">祝膳</a>
            <li><a href="./butsuzen.php">仏膳</a>
            <li><a href="./sushi.php">オードブル・寿司</a>
            <li><a href="./takeout.php">弁当類</a>
            <li><a href="./access.html">ご注文方法・配達エリア</a></li>

        </ul>
    </nav>
</div>

<div class="mainimg">
    <div class="slider">
        <div><img src="./images/mainimg2.jpg" alt="喜重会館-外観"></div>

        <div><img src="./images/mainimg.jpg" alt="ウエディング-人前式"></div>
    </div>

</div>





<section class="wedding">
    <div class="contents">
        <div class="cf">
            <div class="h_area">
                <h2><span>WEDDING</span></h2>
                <h3>婚礼</h3>
                <p> あなたらしいウエディングのきっかけに。</p>
                <div class="w-btn-wrap">
                    <a href="./wedding.html" class="btn btn-wedding">詳しくはこちら</a>
                </div>
            </div>
            <div class="img_area">
                <img src="./images/top_wedding2.jpg" alt="あなたらしいウエディングのきっかけに">
            </div>
        </div>
    </div>
</section>

<section class="kaiseki">
    <div class="contents">
        <div class="cf">
            <div class="h_area">
                <h2><span>PARTY</span></h2>
                <h3>宴会</h3>
                <p>3,300円/人〜 から承ります。</p>
                <div class="w-btn-wrap">
                    <a href="./kaiseki.html" class="btn btn-kaiseki">詳しくはこちら</a>
                </div>
            </div>
            <div class="img_area">
                <img src="./images/top_enkai.png" alt="宴会案内">
            </div>
        </div>
    </div>
</section>


<div class="top-menu p-t-50">
    <div class="contents">
        <h3 class="title-l">祝膳 <span>ハレの佳き日を華やかに彩る祝いの膳。</span></h3>
        <div class="tile a2-b2-c3 am20-bm20-cm30 m-t-40 clearfix">
            <?php $count = 0; foreach($iwaizen as $i):?>
            <div class="menu-warp">
                <div class="thumb"><img src="./images/<?= $i['img']?>"></div>
                <div class="txt">
                    写真はイメージになります。当館は、季節や仕入れ状況等により内容が異なります。
                </div>
                <strong><?= $i['name']?></strong>
 
               <div class="price takeout">テイクアウト：<?= number_format(calc_tax_takeout($i['price'],$i['tax']))?><span>円(税込)</span></div>
                <div class="price"><?= number_format($i['price'] * 1.1)?><span>円(税込)</span></div>
            </div>
            <?php $count++; if($count > 2)break; endforeach?>
        </div>
        <div class="btn-wrap">
            <a href="./iwaizen.php" class="btn">詳しくはこちら</a>
        </div>
    </div>
   
</div>

<div class="top-menu">
    <div class="contents">
        <h3 class="title-l">仏膳 <span>法事や法要にあった仕出し。</span></h3>
        <div class="tile a2-b2-c3 am20-bm20-cm30 m-t-40">
            <?php $count = 0; foreach($butsuzen as $i):?>
            <div class="menu-warp">
                <div class="thumb"><img src="./images/<?= $i['img']?>"></div>
                <div class="txt">
                    写真はイメージになります。当館は、季節や仕入れ状況等により内容が異なります。
                </div>
                <strong><?= $i['name']?></strong>
 
                <div class="price takeout">テイクアウト：<?= number_format(calc_tax_takeout($i['price'],$i['tax']))?><span>円(税込)</span></div>
                <div class="price"><?= number_format($i['price'] * 1.1)?><span>円(税込)</span></div>
            </div>
            <?php $count++; if($count > 2)break; endforeach?>
           
        </div>
        <div class="btn-wrap">
            <a href="./butsuzen.php" class="btn">詳しくはこちら</a>
        </div>
    </div>
</div>

<div class="top-menu">
    <div class="contents">
        <h3 class="title-l">オードブル・寿司 <span>パーティ・懇親会等におすすめ。</span></h3>
        <div class="tile a2-b2-c3 am20-bm20-cm30 m-t-40">
             <?php $count = 0; foreach($sushi as $i):?>
            <div class="menu-warp">
                <div class="thumb"><img src="./images/<?= $i['img']?>"></div>
                <div class="txt">
                    写真はイメージになります。当館は、季節や仕入れ状況等により内容が異なります。
                </div>
                <strong><?= $i['name']?></strong>
 
               <div class="price takeout">テイクアウト：<?= number_format(calc_tax_takeout($i['price'],$i['tax']))?><span>円(税込)</span></div>
                <div class="price"><?= number_format($i['price'] * 1.1)?><span>円(税込)</span></div>
            </div>
            <?php $count++; if($count > 2)break; endforeach?>
        </div>
        <div class="btn-wrap">
            <a href="./sushi.php" class="btn">詳しくはこちら</a>
        </div>
    </div>
</div>

<div class="top-menu">
    <div class="contents">
        <h3 class="title-l">お弁当等</h3>
        <div class="tile a2-b2-c3 am20-bm20-cm30 m-t-40">
            <?php $count = 0; foreach($takeout as $i):?>
            <div class="menu-warp">
                <div class="thumb"><img src="./images/<?= $i['img']?>"></div>
                <div class="txt">
                    写真はイメージになります。当館は、季節や仕入れ状況等により内容が異なります。
                </div>
                <strong><?= $i['name']?></strong>
                <div class="price"><?= number_format(calc_tax_takeout($i['price'],$i['tax']))?><span>円(税込)</span></div>
            </div>
            <?php $count++; if($count > 2)break; endforeach?>
        </div>
        <div class="btn-wrap">
            <a href="./takeout.php" class="btn">詳しくはこちら</a>
        </div>
    </div>
</div>

<div class="footer-info">
    <a href="tel:0982522670"><img src="./images/footer_tel.png" alt="ご連絡先"></a>
</div>


</div><!-- #page -->

<footer>
    <div class="txt">
        喜重会館 tel.0982-52-2670<br/>
        〒883-0014 宮崎県日向市原町４丁目５−５
    </div>
    ©️2020 kijukaikan.co
</footer>

<div class="modal js-modal">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <a class="js-modal-close" href="">閉じる</a><br/>
        <img src="./images/chirashi/hina.png">
    </div><!--modal__inner-->
</div><!--modal-->

<script src="./js/jquery.easing.1.3.js"></script>
<script src="./js/jquery.tile.js"></script>
<script src="./js/vender/jquery.flexslider.js"></script>
<script src="./js/imgLiquid-min.js"></script>
<script src="./js/vender/lightbox.js"></script>
<script src="./js/slick/slick.js"></script>

<script src="./js/script.js?0133"></script>
<script> 
$.getJSON( "/news/wp-json/wp/v2/posts", function(results) {
        $.each(results, function(i, item) {
        
        if(i === 3){
            return false;
        }
        var date_data = new Date(item.date);
        var year = date_data.getFullYear();
        var month = date_data.getMonth() + 1;
        var day = date_data.getDate();
        var title = item.title.rendered;
        var link = item.link;
        var date = year + '.' + month + '.' + day;
        $('.topnews_list').append(`<li><a href='${link}'><span>${date}</span>${title}</a></li>`);
        });
    });
</script>

</body>
</body>
</html>