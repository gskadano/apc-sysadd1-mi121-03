<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


<img src="logo.PNG" alt="Smiley face" style="float: left">

<table style="float: right"> 
    <tr> <td><h2 style="float: right">Calendar: </h2> </td> </tr>
    <tr><td><input type="date" style="float: right"> </td></tr>
</table>

<head>

<style>
body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}
 
.fadein { 
position:relative; height:332px; width:500px; margin:0 auto;
background: url("slideshow-bg.png") repeat-x scroll left top transparent;
padding: 10px;
 }
.fadein img { position:absolute; left:50px; top:80px; }




</style>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>
 
</head>
<body>
<div class="fadein">
<img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xpa1/t1.0-9/10347545_4456510787838_5598134013676143985_n.jpg">
<img src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpa1/t1.0-9/10537363_4456510227824_3020636130644429675_n.jpg">
<img src="https://scontent-a-lax.xx.fbcdn.net/hphotos-xpf1/t1.0-9/10550938_4456511747862_5425212068525909161_n.jpg">
<img src="https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xap1/t1.0-9/10411989_4456512627884_6604271508412173389_n.jpg">
</div>
    
    
     
</body>



