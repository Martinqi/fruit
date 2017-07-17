<?php
/* Smarty version 3.1.30, created on 2017-07-14 17:33:42
  from "F:\wamp\wamp\www\php\zefeng\fruit\tem\index\p-list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968e456f3a638_65024909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b105af966dcdcb68193e8ee77ce1c010fb9882ef' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\zefeng\\fruit\\tem\\index\\p-list.html',
      1 => 1500046422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer1.html' => 1,
  ),
),false)) {
function content_5968e456f3a638_65024909 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="list">
            <a href="index.php?m=index&f=show&a=add">
                <div class="left" style="overflow: hidden">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt="" style="height:100%;border-radius: 0.2rem">
                </div>
                <div class="right">
                    <p><b> <?php echo $_smarty_tpl->tpl_vars['v']->value['jiacu'];?>
 </b> <?php echo $_smarty_tpl->tpl_vars['v']->value['Engtitle'];?>
 </p>
                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</p>
                    <p>草莓营养价值丰富，被誉为是“水果皇后”含有丰富的维生素维。</p>
                    <div class="one">
                        <img src="<?php echo IMG_PATH;?>
p-zan.png">
                        <span><?php echo $_smarty_tpl->tpl_vars['v']->value['kucun'];?>
</span>
                    </div>
                    <div class="two">
                        <p>RMB:<b style="margin-left: .1rem"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</b></p>
                        <div class="buy">立即购买</div>
                    </div>
                </div>
            </a>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
