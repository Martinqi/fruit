<?php
/* Smarty version 3.1.30, created on 2017-07-10 07:16:05
  from "F:\wamp\wamp\www\php\shuiguoApp\fruit\tem\index\zcy-end.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59630d95d72a05_85840722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44b795c4681b3e32fd3655af06ec04486fd6d74f' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\shuiguoApp\\fruit\\tem\\index\\zcy-end.html',
      1 => 1499652760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_59630d95d72a05_85840722 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
common.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
zcy-end.css">
</head>
<body>
<div class="box">
    <a href="javascript:history.go(-1);">
        <img src="<?php echo IMG_PATH;?>
zcy-img/11.png" alt="" class="go">
    </a>
    <div class="title">
        <p>·结算页面·</p>
        <p>SETTLEMENT PAGE</p>
    </div>
</div>
    <div class="img">
        <img src="<?php echo IMG_PATH;?>
zcy-img/12-2.png" class="img1">
        <img src="<?php echo IMG_PATH;?>
zcy-img/13.png" class="img2">
        <img src="<?php echo IMG_PATH;?>
zcy-img/14.png" class="img3">
        <a id="point"></a>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
