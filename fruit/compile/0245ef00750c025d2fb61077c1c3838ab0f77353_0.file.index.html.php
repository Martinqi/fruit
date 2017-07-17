<?php
/* Smarty version 3.1.30, created on 2017-07-15 02:49:06
  from "F:\wamp\wamp\www\php\zefeng\fruit\tem\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5969668295ace4_46618725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0245ef00750c025d2fb61077c1c3838ab0f77353' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\zefeng\\fruit\\tem\\index\\index.html',
      1 => 1500079446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_5969668295ace4_46618725 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
yzf-index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
yzf-index.js"><?php echo '</script'; ?>
>
    <title>首页</title>
</head>
<body>
    <!--顶部-->
    <header>
        <a href="javascript:;"></a>
        <a href="index.php?m=index&f=search&a=add"><img src="<?php echo IMG_PATH;?>
index2_05.png" alt=""></a>
        <div class="yzf-font1">
            <span></span>
            <span></span>
            <p>送青来</p>
            <p class="yzf-font2">SONG QINGLAI</p>
        </div>
    </header>
    <!--轮播-->
    <div class="scrolls">
        <div class="zhuti">
            <div class="swiper-container swiper1">
                <div class="swiper-wrapper">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banner']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <a class="swiper-slide" href="index.php?m=index&f=lists&a=add">
                        <div >
                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
">
                        </div>
                    </a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <!--推荐-->
                    <!--推荐标题-->
            <div class="yzf-tjtitle">
                <section class="active">
                    <span></span>
                    <span></span>
                    <p class="yzf-tjtitlefont">热卖推荐</p>
                    <p class="yzf-tjtitlefont2"><b>REMAI</b>TUIJIAN</p>
                </section>
                <section>
                    <span></span>
                    <span></span>
                    <p class="yzf-tjtitlefont">特价推荐</p>
                    <p class="yzf-tjtitlefont2"><b>TEJIA</b>TUIJIAN</p>
                </section>
                <img src="<?php echo IMG_PATH;?>
index_03.png" alt="">
            </div>
                    <!--推荐内容-->
            <div class="yzf-tjcon">
                <!--第二个内容-->
                <div class="yzf-titwo">
                    <div class="swiper-container swiper2">
                        <div class="swiper-wrapper">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lunbo']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <section class="swiper-slide">
                                <div class="yzf-bj">
                                    <div class="yzf-list">
                                        <img src=" <?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
 " alt="">
                                        <p><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</p>
                                        <span><b>GANNAN</b>QICHENG</span>
                                        <img class="yzf-zan" src="<?php echo IMG_PATH;?>
index_19.png" alt="">
                                        <span class="yzf-num"><?php echo $_smarty_tpl->tpl_vars['v']->value['kucun'];?>
</span>
                                        <img class="yzf-zan" src="<?php echo IMG_PATH;?>
index_21.png" alt="">
                                        <span class="yzf-num"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span>
                                    </div>
                                </div>
                            </section>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                    </div>
                </div>
                <!--第一个内容-->
                <div class="yzf-tione">
                    <div class="swiper-container swiper3">
                        <div class="swiper-wrapper">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lunbo']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <section class="swiper-slide">
                                <div class="yzf-bj">
                                    <div class="yzf-list">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt="">
                                        <p><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</p>
                                        <span><b>GANNAN</b>QICHENG</span>
                                        <img class="yzf-zan" src="<?php echo IMG_PATH;?>
index_19.png" alt="">
                                        <span class="yzf-num"><?php echo $_smarty_tpl->tpl_vars['v']->value['kucun'];?>
</span>
                                        <img class="yzf-zan" src="<?php echo IMG_PATH;?>
index_21.png" alt="">
                                        <span class="yzf-num"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span>
                                    </div>
                                </div>
                            </section>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                    </div>
                </div>
            </div>
            <!--热卖板块-->
            <section class="yzf-hot">
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

            </section>
        </div>
    </div>

    <!--底部-->
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
