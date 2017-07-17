<?php
/* Smarty version 3.1.30, created on 2017-07-15 03:38:01
  from "F:\wamp\wamp\www\php\zefeng\fruit\tem\index\zcy-change.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596971f9f35451_44127337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '077ebbe6294b7d460d54a4ceb34f4fb67877fa10' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\zefeng\\fruit\\tem\\index\\zcy-change.html',
      1 => 1500082682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596971f9f35451_44127337 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
zcy-change.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
fabu.js"><?php echo '</script'; ?>
>

</head>
<body>
<header>
    <a href="javascript:history.go(-1);" id="go">
        <img src="<?php echo IMG_PATH;?>
zcy-img/11.png" alt="" class="go">
    </a>
    <p>· 个人信息 ·</p>
    <p>Personal Information</p>
</header>
<form action="index.php?m=index&f=edit&a=change" method="post" enctype="multipart/form-data">
<ul>
    <li>
        <span>头像</span>
        <div class="box">
            <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['photo'];?>
" alt="" id="img">
            <input type="file" name="file" multiple="multiple" class="file">
            <input type="hidden" name="photo" id="immg"  class="form">
        </div>
    </li>
    <li>
        <span>昵称</span>
        <input type="text" class="one" name="nicheng" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['nicheng'];?>
">
    </li>
    <li>
        <span>英文名</span>
        <input type="text" class="one" name="englishname" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['englishname'];?>
">
    </li>
    <li>
        <span>电话</span>
        <input type="text" class="one" name="phonenum" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['phonenum'];?>
">
    </li>
    <li>
        <span>签名</span>
        <input type="text" class="one" name="jianjie" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['jianjie'];?>
">
    </li>
</ul>
<button class="button">提交</button>
</form>
</body>
</html><?php }
}
