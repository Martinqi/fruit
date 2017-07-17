<?php
/* Smarty version 3.1.30, created on 2017-07-14 10:42:41
  from "D:\wamp\www\myworks\fruit\tem\index\zjl-spy.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59688401985f24_07983882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56cbe185c407335728f922ee0bcd3c2d197be34c' => 
    array (
      0 => 'D:\\wamp\\www\\myworks\\fruit\\tem\\index\\zjl-spy.html',
      1 => 1499901640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59688401985f24_07983882 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
zjl-common.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
zjl-spy.css" />
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="x5-orientation" content="portrait | landscape" />
	    <meta name="screen-orientation" content="portrait">
	    <meta name="x5-fullscreen" content="true" />
	    <meta name="full-screen" content="yes">
	    <meta name="format-detection" content="telephone=no, email=no" />
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
   		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.min.js"><?php echo '</script'; ?>
>		
	</head>
	<body>
		<div class="swiper-container">
     		<div class="swiper-wrapper">
	            <div class="swiper-slide">
	            	<img src="<?php echo IMG_PATH;?>
zjl-spy1.png" alt=""  /><a href="index.php?a=main" class='jump'>跳过</a>
	            </div>
	            <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
zjl-spy2.png" alt="" /></div>
	            <div class="swiper-slide">
	            	<img src="<?php echo IMG_PATH;?>
zjl-spy3.png" alt="" />
	            	<a href="index.php?a=main" class="ty">立即体验</a>
	            </div>      
   		    </div>
	        <div class="swiper-pagination" class='swiper'></div>	       
		</div>
		<?php echo '<script'; ?>
>
		    var swiper = new Swiper('.swiper-container', {
		        pagination: '.swiper-pagination',
		        paginationClickable: true
		    });
	    <?php echo '</script'; ?>
>
    		
	</body>
</html>
<?php }
}
