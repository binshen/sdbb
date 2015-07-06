<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 14:06:29
         compiled from "application/views/index.html" */ ?>
<?php /*%%SmartyHeaderCode:76972998854a000b0821df3-47681653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff80296b2898d091110b00951dd78f97b5410838' => 
    array (
      0 => 'application/views/index.html',
      1 => 1433310360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76972998854a000b0821df3-47681653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a000b088f313_86896403',
  'variables' => 
  array (
    'rel_name' => 0,
    'index_info' => 0,
    'base_url' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a000b088f313_86896403')) {function content_54a000b088f313_86896403($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable = no' name='viewport'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="css/nav_bottom.css" rel="stylesheet" type="text/css"/>
<!--Required libraries-->
<script src="js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<script src="js/modernizr-custom-v2.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery-finger-v0.1.0.min.js" type="text/javascript"></script>
<!--Include flickerplate-->
<link href="css/flickerplate.css" type="text/css" rel="stylesheet"/>
<script src="js/flickerplate.min.js" type="text/javascript"></script>
<!--Execute flickerplate-->
<script>
	$(document).ready(function(){
		$('.flicker-example').flicker();
	});
	</script>
<title>楼盘-房猫经纪人触屏版</title>
</head>
<body>
<div id="page">
	<div class="scroll">
		<section id="J_Nav" class="header">
		<!-- head -->
		<div class="head">
			<div class="head-in" id="J_headNav">
				<div class="logo">
					<a href="#">
					<s></s>
					</a>
				</div>
				<div class="naver1">
                     <?php if ($_smarty_tpl->tpl_vars['rel_name']->value) {?>
					<span class="login01"><b>欢迎您：<?php echo $_smarty_tpl->tpl_vars['rel_name']->value;?>
</b></span> 
                     <?php } else { ?>
					<span class="login01"><a id="userLogin" href="<?php echo smarty_function_site_url(array('url'=>'login'),$_smarty_tpl);?>
" style=" font-size:16px; font-weight:bold; font-family:微软雅黑; color:#ffffff">登录</a></span>   
                     <?php }?>
				</div>
				<div class="hd-menu">
					<a class="btn-hd-menu"></a>
				</div>
			</div>
		</div>
		<div id="J_TodayTMS">
			<!--  Banner -->
			<section id="J_TodayBanner">
			<div class="banner">
				<div class="in-slider ishide">
					<div class="in-slider-cont">
						<div class="flicker-example" data-block-text="false">
							<ul>
								<li data-background="images/field.jpg">
								<div class="flick-title">
									5万享10万房猫优惠
								</div>
								<div class="flick-sub-text">
									生态宜居，500亩玉湖环绕
								</div>
								</li>
								<li data-background="images/forest.jpg">
								<div class="flick-title">
									都市繁华中绝版臻稀的核心区
								</div>
								<div class="flick-sub-text">
									5A级写字楼财富由你掌控
								</div>
								</li>
								<li data-background="images/frozen-water.jpg">
								<div class="flick-title">
									捕捉昆山最惠房源
								</div>
								<div class="flick-sub-text">
									靠谱服务
基于看房服务的评价体系，靠谱经纪人/
								</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="in-slider-status" style="display: none;">
					</div>
				</div>
			</div>
			</section>
		</div>
	</div>
	<!--  导航 -->
	<div class="con notice">
		<span class=""></span><a class="noticebar">
                        <?php echo $_smarty_tpl->tpl_vars['index_info']->value['message'];?>
                     
		</a>
	</div>
	<h3 class="bg-heading2">精选楼盘</h3>
	<div id="__idx_shaijia" class="pjt-list">
	
	
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index_info']->value['project']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<div class="item flat-box">
			<a href="#">
			<div class="pics">
				<img class="cover-l" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
uploadfiles/huxing/<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
"/>
				<span class="price-tag"><b><?php echo $_smarty_tpl->tpl_vars['row']->value['project'];?>
</b></span>
			</div>
			</a>
			<div class="cp-author">
			</div>
			<ul class="pjt-menu">
				<li class="border "><a href="#">均价<?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
<span></span></a></li>
				<li class="border active"><a href="<?php echo smarty_function_site_url(array('url'=>'user/wybb'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">我要报备<span>+</span></a></li>
				
			</ul>
		</div>
<?php } ?>	
		
		
		
		
		<div id="closeFoot" class="myhodonw">
			<div class="newmid">
				<span><a href="javascript:scroll(0,0)" id="M_GoTop">top<b></b></a></span>
				<p>
					<a href="#">经纪人登录</a>
				</p>
			</div>
			<div class="mydown">
				<ul>
					<li>©2000-2014 ksls.com.cn 房猫经纪人</li>
					<li><span class="lione"><a href="http://weibo.com/ksls"></a></span><span>|</span><span class="lione02"><a href="#"></a></span><span>微信公众账号:kunshanloushi</span></li>
					<li>客服电话:400-626-9900</li>
				</ul>
			</div>
			<div class="clear03">
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
	</html><?php }} ?>
