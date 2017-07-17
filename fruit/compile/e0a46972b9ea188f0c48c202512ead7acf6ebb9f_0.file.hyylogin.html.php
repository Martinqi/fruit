<?php
/* Smarty version 3.1.30, created on 2017-07-14 03:39:02
  from "F:\wamp\wamp\www\php\shuiguoApp\fruit\tem\index\hyylogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596820b6992848_75772759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0a46972b9ea188f0c48c202512ead7acf6ebb9f' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\shuiguoApp\\fruit\\tem\\index\\hyylogin.html',
      1 => 1499968078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596820b6992848_75772759 (Smarty_Internal_Template $_smarty_tpl) {
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
hyylogin.css">
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
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
hyylogin.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
hyyindex.js"><?php echo '</script'; ?>
>
    <style>
        /*#mname-error*/
    </style>
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
    <form action="" id="Form" class="loginBox">
        <div class="input" >
            <div class="label">
                <span>用户名</span> <span class="first">YONGHU</span>
                <input class="user" type="text" placeholder="请输入用户名" name="mname">
                <img src="<?php echo IMG_PATH;?>
hyyiconuser.png" alt="">
            </div>
            <p></p>
            <div class="label">
                <span class="mi">密码</span> <span class="first">MIMASH</span>
                <input class="pass" type="password" placeholder="请输入密码" name="mpass">
                <img src="<?php echo IMG_PATH;?>
hyyiconpass.png" alt="">
            </div>
        </div>
        <div class="lose">
            <section>
                <div class="bottom">
                    <p></p>
                </div>
                <a href="javascript:;">记住密码</a>
            </section>
            <section>
                <a href="javascript:;">忘记密码?</a>
            </section>
        </div>
    <div class="loginbtn willLogin">登录</div>
    </form>
</body>
</html>
<?php }
}
