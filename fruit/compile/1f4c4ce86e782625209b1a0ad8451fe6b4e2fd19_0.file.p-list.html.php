<?php
/* Smarty version 3.1.30, created on 2017-07-14 07:39:44
  from "F:\wamp\wamp\www\php\shuiguoApp\fruit\tem\index\p-list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968592044e859_65466974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f4c4ce86e782625209b1a0ad8451fe6b4e2fd19' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\shuiguoApp\\fruit\\tem\\index\\p-list.html',
      1 => 1500010676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer1.html' => 1,
  ),
),false)) {
function content_5968592044e859_65466974 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
p-list.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="top">
    <span></span>
    <span></span>
    <p style="font-size: 15px">分类</p>
    <p style="font-size: 12px">SHAPFENLEI</p>
    <a href="javascript:;" onclick="history.go(-1)"> <img class="hou" src="<?php echo IMG_PATH;?>
p-hou.png"></a>
    <div style="height: 50px;width: 100%"></div>
</div>

<div class="iscroll">
    <div class="zhuti">
        <div class="biao">
            <img src="<?php echo IMG_PATH;?>
p-l1_02.png">
        </div>
        <div class="list">
            <div class="left" style="background-image: url('<?php echo IMG_PATH;?>
p-l1.png');background-size: cover">
            </div>
            <div class="right">
                <p><b>RIBEN</b>ZHANGJICAOMEI</p>
                <p>日本章姬草莓</p>
                <p>草莓营养价值丰富，被誉为是“水果皇后”含有丰富的维生素维。</p>
                <div class="one">
                    <img src="<?php echo IMG_PATH;?>
p-zan.png">
                    <span>1024</span>
                </div>
                <div class="two">
                    <p>RMB:<b style="margin-left: .1rem">23.5</b></p>
                    <div class="buy">立即购买</div>
                </div>
            </div>
        </div>
        <div class="list">
        <div class="left" style="background-image: url('<?php echo IMG_PATH;?>
p-l2.png');background-size: cover">
        </div>
        <div class="right">
            <p><b>TAIGUO</b>BAIHUANAIYEZI</p>
            <p>泰国百花奶椰子</p>
            <p>果肉纯白色，质腻滑，味浓甜，芳香，纤维少，品质优。</p>
            <div class="one">
                <img src="<?php echo IMG_PATH;?>
p-zan.png">
                <span>1024</span>
            </div>
            <div class="two">
                <p>RMB:<b style="margin-left: .1rem">23.5</b></p>
                <div class="buy">立即购买</div>
            </div>
        </div>
        </div>
        <div class="list">
        <div class="left" style="background-image: url('<?php echo IMG_PATH;?>
p-l1.png');background-size: cover">
        </div>
        <div class="right">
            <a href="index.php?m=index&f=show&a=add">
                <p><b>RIBEN</b>ZHANGJICAOMEI</p>
                <p>日本章姬草莓</p>
                <p>草莓营养价值丰富，被誉为是“水果皇后”含有丰富的维生素维。</p>
                <div class="one">
                    <img src="<?php echo IMG_PATH;?>
p-zan.png">
                    <span>1024</span>
                </div>
                <div class="two">
                    <p>RMB:<b style="margin-left: .1rem">23.5</b></p>
                    <div class="buy">立即购买</div>
                </div>
            </a>
        </div>
        </div>
        <div class="list">
        <div class="left" style="background-image: url('<?php echo IMG_PATH;?>
p-l2.png');background-size: cover">
        </div>
        <div class="right">
            <a href="index.php?m=index&f=show&a=add">
                <p><b>TAIGUO</b>BAIHUANAIYEZI</p>
                <p>泰国百花奶味椰</p>
                <p>果肉纯白色，质腻滑，味浓甜，芳香，纤维少，品质优。</p>
                <div class="one">
                    <img src="<?php echo IMG_PATH;?>
p-zan.png">
                    <span>1024</span>
                </div>
                <div class="two">
                    <p>RMB:<b style="margin-left: .1rem">23.5</b></p>
                    <div class="buy">立即购买</div>
                </div>
            </a>
        </div>
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
