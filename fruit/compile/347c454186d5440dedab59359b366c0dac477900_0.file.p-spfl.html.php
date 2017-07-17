<?php
/* Smarty version 3.1.30, created on 2017-07-14 16:44:24
  from "F:\wamp\wamp\www\php\zefeng\fruit\tem\index\p-spfl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968d8c8034146_15807016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '347c454186d5440dedab59359b366c0dac477900' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\zefeng\\fruit\\tem\\index\\p-spfl.html',
      1 => 1500043464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer1.html' => 1,
  ),
),false)) {
function content_5968d8c8034146_15807016 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <a href="index.php?m=index&f=lists&a=dapei">
                <div class="box">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt="">
                    <p>#<?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['cenglishname'];?>
</p>
                    <div class="num"><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</div>
                </div>
            </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result2']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <a href="index.php?m=index&f=lists&a=add">
                <div class="box">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt="">
                    <p>#<?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['cenglishname'];?>
</p>
                    <div class="num"><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</div>
                </div>
            </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <!--<a href="p-list.html">-->
                <!--<div class="box">-->
                    <!--<img src="<?php echo IMG_PATH;?>
p-f3_03.png" alt="">-->
                    <!--<p>#热带水果</p>-->
                    <!--<p>redaishuiguozhenhaochi</p>-->
                    <!--<div class="num">3.</div>-->
                <!--</div>-->
            <!--</a>-->
            <!--<a href="p-list.html">-->
                <!--<div class="box">-->
                    <!--<img src="<?php echo IMG_PATH;?>
p-f4_03.png" alt="">-->
                    <!--<p>#进口水果</p>-->
                    <!--<p>jinkoushuiguobuzai</p>-->
                    <!--<div class="num">4.</div>-->
                <!--</div>-->
            <!--</a>-->
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
