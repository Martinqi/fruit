<?php
/* Smarty version 3.1.30, created on 2017-07-14 18:22:42
  from "F:\wamp\wamp\www\php\zefeng\fruit\tem\index\hyylogininfo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968efd20223c0_57340145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0af11863ccc268345f76d33c967a35b61fe58e32' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\zefeng\\fruit\\tem\\index\\hyylogininfo.html',
      1 => 1500035486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5968efd20223c0_57340145 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="x5-orientation" content="portrait | landscape" />
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-fullscreen" content="true" />
    <meta name="full-screen" content="yes">
    <meta name="format-detection" content="telephone=no, email=no" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
common.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
hyylogininfo.css">
</head>
<body>
    <nav>
        <a href="javascript" onclick="history.go(-1)">&lt;</a>
    </nav>
    <div class="login">
        <img src="<?php echo IMG_PATH;?>
hyylogo.png" alt="">
    </div>
    <div class="loginword">
        <img src="<?php echo IMG_PATH;?>
hyyname.png" alt="">
    </div>
    <a href="index.php?m=index&f=login&a=log">
        <div class="loginbtn">登录</div>
    </a>
    <a href="index.php?m=index&f=login&a=reg">
        <div class="regbtn">注册</div>
    </a>
    <a href="index.php?m=index&f=login&a=phone">
        <div class="loginphone">
            <img src="<?php echo IMG_PATH;?>
hyyphonelogin.png" alt="">
        </div>
    </a>
</body>
</html><?php }
}
