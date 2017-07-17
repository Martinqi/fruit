<?php
/* Smarty version 3.1.30, created on 2017-07-14 18:42:22
  from "F:\wamp\wamp\www\php\zefeng\fruit\tem\index\hyymypage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968f46ec523c7_19396906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c1e4cddcbf3a7927c1620508ee1441117e91510' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\zefeng\\fruit\\tem\\index\\hyymypage.html',
      1 => 1500050466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer3.html' => 1,
  ),
),false)) {
function content_5968f46ec523c7_19396906 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人主页</title>
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
hyymypage.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
zepto.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll.js"><?php echo '</script'; ?>
>
</head>
<body>
    <nav>
        <p>·我的·</p>
        <p>MYPAGE</p>
    </nav>
    <div class="iscroll">
        <div class="zhuti">
            <header>
                <div class="back"></div>
                <?php if ($_smarty_tpl->tpl_vars['login']->value == null) {?>
                <div class="photono">
                    <a href="index.php?m=index&f=login&a=info">
                        <div class="position">
                            <img src="<?php echo IMG_PATH;?>
hyymoren.png" alt="">
                        </div>
                        <p class="kuailogin">快点我登陆吧</p>
                    </a>
                </div>
                <?php } else { ?>
                <div class="photo">
                    <div class="position">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['photo'];?>
" alt="">
                    </div>
                    <div class="jianjie">
                        <p><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['englishname'];?>
</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['nicheng'];?>
</p>
                        <p>********</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['jianjie'];?>
</p>
                    </div>
                </div>
                    <?php }?>
            </header>
            <ul class="bodys">
                <li>
                    <a href="index.php?m=index&f=location&a=add">
                        <div class="left">
                            <img src="<?php echo IMG_PATH;?>
hyyxiaoxi.png" alt="">
                        </div>
                        <p>地址管理 <span>TUICHUNGU</span> <span class="more">&gt;</span></p>
                    </a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['login']->value != null) {?>
                <li>
                    <a href="index.php?m=index&f=login&a=edit">
                        <div class="left">
                            <img src="<?php echo IMG_PATH;?>
hyydingdan.png" alt="">
                        </div>
                        <p>修改信息 <span>XIUGAIXINXI</span> <span class="more">&gt;</span></p>
                    </a>
                </li>
                <li>
                    <a href="index.php?m=index&f=login&a=logout">
                        <div class="left">
                            <img src="<?php echo IMG_PATH;?>
hyyxiaoxi.png" alt="">
                        </div>
                        <p>退出登录 <span>TUICHUNGU</span> <span class="more">&gt;</span></p>
                    </a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
