<?php /* Smarty version Smarty-3.1.16, created on 2015-07-06 11:32:16
         compiled from "application/views/pc/index.html" */ ?>
<?php /*%%SmartyHeaderCode:653420414556ebce002a928-82254131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e41cb98ef734e76eafb88bcd222a7112d9eeeafd' => 
    array (
      0 => 'application/views/pc/index.html',
      1 => 1435891722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '653420414556ebce002a928-82254131',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_556ebce00b5719_54736224',
  'variables' => 
  array (
    'base_url' => 0,
    'user_info' => 0,
    'pic' => 0,
    'all_count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556ebce00b5719_54736224')) {function content_556ebce00b5719_54736224($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/www/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc_home.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<title>房猫经纪人平台</title>
</head>
<body>
<div class="yp3 bg">1</div>
<div class="yp2 bg"></div>
<div class="yp1"><?php if ($_smarty_tpl->tpl_vars['user_info']->value) {?><a href="javascript:show_user();"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['rel_name'];?>
</a><?php } else { ?><a href="<?php echo smarty_function_site_url(array('url'=>'login_pc'),$_smarty_tpl);?>
">登陆</a><?php }?></div>
<ul class="wd">
  <li><iframe width="280" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=34&icon=1&num=3"></iframe></li>

</ul>
<?php if ($_smarty_tpl->tpl_vars['user_info']->value) {?>
<div class="wndw bg" style="display:none;" id="user">
  <div class="wndw_r">
    <P class="nm"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['rel_name'];?>
</P>
    <a class="jjr bg">经纪人</a>
    <P class="qq"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['phone'];?>
</P>
    <P class="at">Account<span>-</span>Privacy</P>
    <a href="<?php echo smarty_function_site_url(array('url'=>'admin_pc'),$_smarty_tpl);?>
" class="ckzl">进入平台</a> </div>
  <div class="wndw_l"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
uploadfiles/head/s2_<?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
"/></div>
  <div class="wndw_b">
    <p>报备<span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['bb_count'];?>
</span></p>
    <p>带看<span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['dk_count'];?>
</span></p>
    <p>成交<span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['qy_count'];?>
</span></p>
  </div>
</div>
<?php }?>
<div class="srh bg">
  <input name="main_search" type="text" onfocus="showh();" onblur="hides();"/>
  <div class="ahref" style="display:none;"><a href="#">房天下</a><a href="#">房多多</a><a href="#">昆山楼市</a><a href="#">好屋中国</a><a href="#">安居客</a><a href="#">房产信息网</a></div>
  <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/logo_pc.png" /></div>
  <div class="srh_btn bg"><a href="javascript:search_w();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/blank.png" /></a></div>
</div>
<div class="dh bg" style="display:none;">
  <div class="dh_l "><a href="#">导航</a><a href="#">工具</a><a href="#">银行</a><a href="#">资讯</a><a href="#">端口</a><a href="#">经纪</a><a href="#">办事易</a><a href="#"><img src="images/blank.png" /></a></div>
  <div class="dh_r">
    <div class="dh_r_t"><a href="#">我的导航</a><a href="#" class="line">推荐导航</a></div>
    <div class="dh_r_rmwz">热门网址</div>
    <div class="dh_r_logo"><a href="#"><img src="images/dh_logo/logo1.jpg"  /></a><a href="#"><img src="images/dh_logo/logo2.jpg"  /></a><a href="#"><img src="images/dh_logo/logo3.jpg"  /></a><a href="#"><img src="images/dh_logo/logo4.jpg"  /></a><a href="#"><img src="images/dh_logo/logo5.jpg"  /></a><a href="#"><img src="images/dh_logo/logo6.jpg"  /></a><a href="#"><img src="images/dh_logo/logo7.jpg"  /></a><a href="#"><img src="images/dh_logo/logo8.jpg"  /></a><a href="#"><img src="images/dh_logo/logo9.jpg"  /></a><a href="#"  class="bk"><img src="images/dh_logo/logo10.jpg"  /></a><a href="#"><img src="images/dh_logo/logo11.jpg"  /></a><a href="#"><img src="images/dh_logo/logo12.jpg"  /></a><a href="#"><img src="images/dh_logo/logo13.jpg"  /></a><a href="#"><img src="images/dh_logo/logo14.jpg"  /></a><a href="#"><img src="images/dh_logo/logo15.jpg"  /></a><a href="#"><img src="images/dh_logo/logo16.jpg"  /></a><a href="#"><img src="images/dh_logo/logo17.jpg"  /></a><a href="#"><img src="images/dh_logo/logo18.jpg"  /></a></div>
  </div>
  <p>©2014 funmall.com</p>
</div>
</body>
<script>
function show_user(){
	$("#user").toggle(500);
}

function showh(){
	$(".ahref").show();
}

function hides(){
	$(".ahref").hide();
}

function search_w(){
	url='http://www.baidu.com/s?wd=' + $("[name='main_search']").val();
	window.open(url,'');
}
</script>
</html>
<?php }} ?>
