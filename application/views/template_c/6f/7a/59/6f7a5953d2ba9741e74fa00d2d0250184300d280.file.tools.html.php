<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 14:22:58
         compiled from "application/views/tools.html" */ ?>
<?php /*%%SmartyHeaderCode:112139572354a003b3a9a426-49472043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f7a5953d2ba9741e74fa00d2d0250184300d280' => 
    array (
      0 => 'application/views/tools.html',
      1 => 1433310369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112139572354a003b3a9a426-49472043',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a003b3ae8302_93018943',
  'variables' => 
  array (
    'base_url' => 0,
    'rel_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a003b3ae8302_93018943')) {function content_54a003b3ae8302_93018943($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable = no' name='viewport'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/nav_bottom.css" rel="stylesheet" type="text/css"/>
<title>工具-房猫经纪人触屏版</title>
</head>
<body>
<div id="page">
	<div class="scroll">
		<section id="J_Nav" class="header">
		<!-- head -->
		<div class="head">
			<div class="head-in" id="J_headNav">
				<div class="logo">
					<a href="#!/today" data-spm-anchor-id="a2141.7240237.100000.2">
					<s></s>
					</a>
				</div>
				<div class="naver1">
                 <?php if ($_smarty_tpl->tpl_vars['rel_name']->value) {?>
                 	<span class="login01"><b>欢迎您：<?php echo $_smarty_tpl->tpl_vars['rel_name']->value;?>
</b></span> 
                 <?php } else { ?>
                   <span class="login01"><a id="userLogin" href="<?php echo smarty_function_site_url(array('url'=>'login'),$_smarty_tpl);?>
" style="font-size:14px; color:#ffffff; font-weight:bold; font-family:微软雅黑">登录</a></span>   
                 <?php }?>
                    
                </div>
				<div class="hd-menu">
					<a class="btn-hd-menu"></a>
				</div>
			</div>
		</div>
		<div style="padding:20px 5px 0 0;">
			<ul class="unstyled defaultlist pt20">
				<li class="f">
				<a href="<?php echo smarty_function_site_url(array('url'=>'tools/fangdai'),$_smarty_tpl);?>
">
				<h3>房贷计算器</h3>
				<figure class="jp_icon"></figure>
				</a>
				</li>
				<li class="h">
				<a href="#">
				<h3>税费计算器</h3>
				<figure class="jd_icon"></figure>
				</a>
				</li>
			</ul>
			<ul class="unstyled defaultlist">
				<li class="a">
				<a href="#">
				<h3>查房价</h3>
				<figure class="hb_icon"></figure>
				</a>
				</li>
				<li class="p">
				<a href="#">
				<h3> 房产政策</h3>
				<figure class="mp_icon"></figure>
				</a>
				</li>
			</ul>
			<ul class="unstyled defaultlist">
				<li class="t">
				<a href="#">
				<h3> 积分商城</h3>
				<figure class="hcp_icon"></figure>
				</a>
				</li>
				<li class="m">
				<a href="#">
				<h3> 帮助咨询</h3>
				<figure class="wdxc_icon"></figure>
				</a>
				</li>
			</ul>
		</div>
		<div id="J_TodayTMS">
			<!--  Banner -->
			<section id="J_TodayBanner">
			<div class="banner">
				<div class="in-slider ishide">
					<div class="in-slider-cont">
					</div>
					<div class="in-slider-status" style="display: none;">
					</div>
				</div>
			</div>
			</section>
			
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
	</html><?php }} ?>
