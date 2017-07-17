<?php
/* Smarty version 3.1.30, created on 2017-07-15 05:07:46
  from "F:\wamp\wamp\www\php\zefeng\fruit\tem\index\hyyreg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59698702802f49_26100217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a6ae64ac9fb3fa9e65ef1b2adddad8c61b2db86' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\zefeng\\fruit\\tem\\index\\hyyreg.html',
      1 => 1500088066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59698702802f49_26100217 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
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
hyyreg.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
zepto.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
touch.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
hyyindex.js"><?php echo '</script'; ?>
>
</head>
<body>
    <nav>
        <a href="javascript" onclick="history.go(-1)">&lt;</a>
    </nav>
    <form class="input">
        <div class="label">
            <span>用户名</span> <span class="first">YONGHU</span>
            <input class="user" name="mname" type="text" placeholder="请输入用户名" >
            <img src="<?php echo IMG_PATH;?>
hyyiconuser.png" alt="">
        </div>
        <p></p>
        <div class="label">
            <span>手机号</span> <span class="first">SHOJIH</span>
            <input class="user" name="phonenum" type="text" placeholder="请输入手机号" >
            <img src="<?php echo IMG_PATH;?>
hyyiconuser.png" alt="">
        </div>
        <p></p>
        <div class="label">
            <span class="mi">密码</span> <span class="first">MIMASH</span>
            <input class="pass mpass" name="mpass" type="password" placeholder="请输入密码">
            <img src="<?php echo IMG_PATH;?>
hyyiconpass.png" alt="">
        </div>
        <p></p>
        <div class="label">
            <span class="mi">验证码</span> <span class="first">YANXHENG</span>
            <input class="pass" name="code" type="text" placeholder="请输入验证码">
            <img src="<?php echo SELF_PATH;?>
?m=index&f=login&a=code" alt="" onclick=this.src="<?php echo SELF_PATH;?>
?m=index&f=login&a=code&c="+Math.random() style="height: 0.7rem">
        </div>
    </form>
    <div class="loginbtn willReg">注册</div>
</body>
</html>
<?php }
}
