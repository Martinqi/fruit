<?php
/* Smarty version 3.1.30, created on 2017-07-14 10:42:55
  from "D:\wamp\www\myworks\fruit\tem\index\p-spfl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968840fe4d609_91235150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a37f47840e1a37880248a760ef704c156dd9624e' => 
    array (
      0 => 'D:\\wamp\\www\\myworks\\fruit\\tem\\index\\p-spfl.html',
      1 => 1500010680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer1.html' => 1,
  ),
),false)) {
function content_5968840fe4d609_91235150 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
p-spfl.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
demoUtils.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="top">
    <p style="font-size: 15px">·分类·</p>
    <p style="font-size: 12px">SHAPFENLEI</p>
</div>
<div style="height: 50px;width: 100%"></div>

<div class="iscroll">
    <div class="zhuti">
        <div class="list">
            <a href="index.php?m=index&f=lists&a=dapei">
                <div class="box">
                    <img src="<?php echo IMG_PATH;?>
p-f1_03.png" alt="">
                    <p>#营养搭配</p>
                    <p>weinindeshenghuobaojiahuhang</p>
                    <div class="num">1.</div>
                </div>
            </a>
            <a href="index.php?m=index&f=lists&a=add">
                <div class="box">
                    <img src="<?php echo IMG_PATH;?>
p-f2_03.png" alt="">
                    <p>#所有商品</p>
                    <p>suoyoushangpingkjssadv</p>
                    <div class="num">2.</div>
                </div>
            </a>
            <a href="p-list.html">
                <div class="box">
                    <img src="<?php echo IMG_PATH;?>
p-f3_03.png" alt="">
                    <p>#热带水果</p>
                    <p>redaishuiguozhenhaochi</p>
                    <div class="num">3.</div>
                </div>
            </a>
            <a href="p-list.html">
                <div class="box">
                    <img src="<?php echo IMG_PATH;?>
p-f4_03.png" alt="">
                    <p>#进口水果</p>
                    <p>jinkoushuiguobuzai</p>
                    <div class="num">4.</div>
                </div>
            </a>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    window.onload=function () {
        var myScroll = new IScroll('.iscroll',
            {
                mouseWheel: true,
                click:true,
            });
    }

<?php echo '</script'; ?>
><?php }
}
