<?php

function calc_tax_takeout($price,$flag){

    return $flag ? $price * 1.08 : $price;

} 


$iwaizen = [
    ['name'=>'祝い膳2段','price' => 3800,'takeout'=>true,'img'=>'iwaizen/1_3800.jpg','tax'=>true],
    ['name'=>'祝い膳2段','price' => 3500,'takeout'=>true,'img'=>'iwaizen/2_3500.jpg','tax'=>true],
    ['name'=>'祝い膳2段','price' => 3300,'takeout'=>true,'img'=>'iwaizen/3_3300.jpg','tax'=>true],
    ['name'=>'祝い膳2段(茶碗蒸し・お吸い物無し)','price' => 3000,'takeout'=>true,'img'=>'iwaizen/9_3000.jpg','tax'=>true],
    ['name'=>'祝い膳1段','price' => 2500,'takeout'=>true,'img'=>'iwaizen/4_2500.jpg','tax'=>true],
    ['name'=>'お食い初め料理','price' => 4000,'takeout'=>true,'img'=>'iwaizen/4400_ta4320.jpg','tax'=>true],

    ['name'=>'祝弁当','price' => 2000,'takeout'=>true,'img'=>'takeout/1_2000_i.jpg','tax'=>true],
  //  ['name'=>'祝弁当','price' => 1500,'takeout'=>true,'img'=>'takeout/2_1500_i.jpg','tax'=>true],
    ['name'=>'赤飯','price' => 1000,'takeout'=>true,'img'=>'iwaizen/6_1000.jpg','tax'=>true],
    ['name'=>'赤飯','price' => 500,'takeout'=>true,'img'=>'iwaizen/7_500.jpg','tax'=>true],
];

$butsuzen = [
    ['name'=>'仏膳2段','price'=> 4000,'takeout'=>true,'img'=> 'butsuzen/1_4000.jpg','tax'=>true],
    ['name'=>'仏膳2段','price'=> 3800,'takeout'=>true,'img'=> 'butsuzen/2_3800.jpg','tax'=>true],
    ['name'=>'仏膳2段','price'=> 3300,'takeout'=>true,'img'=> 'butsuzen/3_3300.jpg','tax'=>true],
    ['name'=>'仏膳2段','price'=> 3000,'takeout'=>true,'img'=> 'butsuzen/4_3000.jpg','tax'=>true],
    ['name'=>'仏膳1段','price'=> 2800,'takeout'=>true,'img'=>'butsuzen/5_2800.jpg','tax'=>true ],
    ['name'=>'仏弁当','price'=> 2000,'takeout'=>true,'img'=> 'takeout/3_2000_b.jpg','tax'=>true],
  //  ['name'=>'仏弁当','price'=> 1500,'takeout'=>true,'img'=> 'takeout/4_1500_b.jpg','tax'=>true],
];

$sushi = [
    ['name'=>'寿司入りオードブル','price' => 5000,'takeout'=>true,'img'=>'sushi/1_5000.jpg','tax'=>true],
    ['name'=>'オードブル','price' => 3000,'takeout'=>true,'img'=>'sushi/2_3000.jpg','tax'=>true],
    ['name'=>'オードブル','price' => 5000,'takeout'=>true,'img'=>'sushi/12_5000.jpg','tax'=>true],
    ['name'=>'寿司盛り','price' => 5000,'takeout'=>true,'img'=>'sushi/11_5000.jpg','tax'=>true],
    ['name'=>'寿司盛り','price' => 3000,'takeout'=>true,'img'=>'sushi/5_3000.jpg','tax'=>true],
    ['name'=>'伝統の竹の子寿司','price' => 1800,'takeout'=>true,'img'=>'sushi/6_1800.jpg','tax'=>false],
    //['name'=>'竹の子寿司','price' => 1200,'takeout'=>true,'img'=>'sushi/7_1200.jpg','tax'=>true],
    ['name'=>'伝統の竹の子寿司','price' => 600,'takeout'=>true,'img'=>'sushi/8_600.jpg','tax'=>false],
   // ['name'=>'お頭付き刺身盛り','price' => 5000,'takeout'=>true,'img'=>'sushi/9_5000.jpg','tax'=>true],
   // ['name'=>'刺身盛り','price' => 5000,'takeout'=>true,'img'=>'sushi/10_5000.jpg','tax'=>true]
];

$takeout = [

    ['name'=>'祝弁当','price' => 2000,'takeout'=>true,'img'=>'takeout/1_2000_i.jpg','tax'=>true],
   // ['name'=>'祝弁当','price' => 1500,'takeout'=>true,'img'=>'takeout/2_1500_i.jpg','tax'=>true],
    ['name'=>'仏弁当','price'=> 2000,'takeout'=>true,'img'=> 'takeout/3_2000_b.jpg','tax'=>true],
  //  ['name'=>'仏弁当','price'=> 1500,'takeout'=>true,'img'=> 'takeout/4_1500_b.jpg','tax'=>true],
   /* ['name'=>'お弁当','price'=> 1000,'takeout'=>true,'img'=> 'takeout/5_1000.jpg','tax'=>true],
    ['name'=>'お弁当','price'=> 1000,'takeout'=>true,'img'=> 'takeout/10_1000.jpeg'],*/
    ['name'=>'お弁当','price'=> 800,'takeout'=>true,'img'=> 'takeout/6_800.jpg','tax'=>true],
  //  ['name'=>'行楽お弁当','price'=> 700,'takeout'=>true,'img'=> 'takeout/9_700.jpg','tax'=>true], 
    ['name'=>'子供弁当','price'=> 1000,'takeout'=>true,'img'=> 'takeout/8_1000.jpg','tax'=>true],
];

$osechi = [
    ['name'=>'おせち重','price' => 15000,'takeout'=>true,'img'=>'osechi/1_15000.jpg','tax'=>true],
    ['name'=>'おせち重','price' => 20000,'takeout'=>true,'img'=>'osechi/2_20000.jpg','tax'=>true],
    ['name'=>'おせち重','price' => 25000,'takeout'=>true,'img'=>'osechi/3_25000.jpg','tax'=>true],
    ['name'=>'おせち重','price' => 30000,'takeout'=>true,'img'=>'osechi/4_30000.jpg','tax'=>true],
    ['name'=>'盛','price' => 5000,'takeout'=>true,'img'=>'osechi/5_5000.jpg','tax'=>true],
    ['name'=>'おせち盛','price' => 10000,'takeout'=>true,'img'=>'osechi/6_10000.jpg','tax'=>true],
    ['name'=>'盛','price' => 10000,'takeout'=>true,'img'=>'osechi/7_10000.jpg','tax'=>true],
    ['name'=>'おせち盛','price' => 20000,'takeout'=>true,'img'=>'osechi/8_20000.jpg','tax'=>true],
    ['name'=>'おせち盛','price' => 25000,'takeout'=>true,'img'=>'osechi/9_25000.jpg','tax'=>true],
];

$saiji = [
    ['name'=>'バラ寿司　一升','price'=> 2700,'takeout'=>true,'img'=> 'butsuzen/6_400.jpg','tax'=>true],
    ['name'=>'バラ寿司　５個から','price'=> 432,'takeout'=>true,'img'=> 'butsuzen/6_400.jpg','tax'=>true],
    ['name'=>'赤飯　５個から','price' => 540,'takeout'=>true,'img'=>'iwaizen/6_1000.jpg','tax'=>true],
    ['name'=>'お花見お弁当','price'=> 1080,'takeout'=>true,'img'=> 'takeout/5_1000.jpg','tax'=>true],
    ['name'=>'運動会オードブル','price' => 3240,'takeout'=>true,'img'=>'sushi/2_3000.jpg','tax'=>true],
    ['name'=>'お花見オードブル','price' => 3240,'takeout'=>true,'img'=>'sushi/2_3000.jpg','tax'=>true],
    ['name'=>'忘年会用オードブル','price' => 3240,'takeout'=>true,'img'=>'sushi/2_3000.jpg','tax'=>true],  
    ['name'=>'年末おせち＆オードブル','price' => 3240,'takeout'=>true,'img'=>'sushi/2_3000.jpg','tax'=>true],
    
];