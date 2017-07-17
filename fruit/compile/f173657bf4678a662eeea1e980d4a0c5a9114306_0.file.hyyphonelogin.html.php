<?php
/* Smarty version 3.1.30, created on 2017-07-15 03:58:14
  from "F:\wamp\wamp\www\php\zefeng\fruit\tem\index\hyyphonelogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596976b693ee38_58062838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f173657bf4678a662eeea1e980d4a0c5a9114306' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\zefeng\\fruit\\tem\\index\\hyyphonelogin.html',
      1 => 1500083730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596976b693ee38_58062838 (Smarty_Internal_Template $_smarty_tpl) {
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
hyyphonelogin.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
zepto.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
touch.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
hyyphonelogin.js"><?php echo '</script'; ?>
>
</head>
<body>
    <nav>
        <a href="javascript:;" onclick="history.go(-1)">&lt;</a>
    </nav>
    <div class="login">
        <img src="<?php echo IMG_PATH;?>
hyylogo.png" alt="">
    </div>
    <div class="loginword">
        <img src="<?php echo IMG_PATH;?>
hyyname.png" alt="">
    </div>
    <div class="input">
        <div class="label">
            <span>手机号</span> <span class="first">PHONE</span>
            <input class="user" type="text" placeholder="请输入手机号">
        </div>
        <p></p>
        <div class="label">
            <span class="tap" style="text-align: center">获取验证码</span>
            <input name="yanzheng" class="pass" type="password" placeholder="请输入验证码">
        </div>
    </div>
    <div class="loginbtn">登录</div>
</body>
</html>
<?php }
}
