<?php
/* Smarty version 3.1.30, created on 2017-07-14 17:22:04
  from "F:\wamp\wamp\www\php\zefeng\fruit\tem\index\zjl-comments.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968e19c911ef7_39439492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd75efc70b371e9e5ad65b599bfbae14370c2c318' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\php\\zefeng\\fruit\\tem\\index\\zjl-comments.html',
      1 => 1500029578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5968e19c911ef7_39439492 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
zjl-comments.css" />
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
common.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<header>
			<nav>
				<div class='left'>
					<a href="javascript:;" onclick="history.go(-1)"><img src="<?php echo IMG_PATH;?>
zjl-back.png" alt="" /></a>
				</div>
				<div class='right'>
					<span class='dian'>.</span>
					<span>发布评论</span>
					<span class='dian'>.</span>
				</div>
				
			</nav>
		</header>
		<div class='shop'>
			<div class='shops'>
				<span>香蕉</span>
				<p>香蕉你个波娜娜</p>
			</div>
			
		</div>
		<div class='con'>
			<textarea name="con" rows="20"></textarea>
		</div>
		<button>发布</button>
	</body>
</html>
<?php }
}
