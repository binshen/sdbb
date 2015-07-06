<?php /* Smarty version Smarty-3.1.16, created on 2015-07-06 11:32:34
         compiled from "application/views/projects.html" */ ?>
<?php /*%%SmartyHeaderCode:182127699154a00a76c89579-65488210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4356f8dffc57d7a34b05e243a49dc5cb6defe069' => 
    array (
      0 => 'application/views/projects.html',
      1 => 1435891722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182127699154a00a76c89579-65488210',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a00a76cf5900_61821958',
  'variables' => 
  array (
    'base_url' => 0,
    'projects' => 0,
    'k' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a00a76cf5900_61821958')) {function content_54a00a76cf5900_61821958($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/www/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_common.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<title>项目管理</title>
</head>
<body>
<div class="rtn"><a href="<?php echo smarty_function_site_url(array('url'=>'admin'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/back.png" /></a></div>
<div class="top">项目管理</div>
<div class="bblb">
  <h1>项目信息总列表</h1>
</div>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
<div class="box_list <?php if ($_smarty_tpl->tpl_vars['k']->value==0) {?>mgn_t_10<?php }?>" onclick="s_h_menu(this)">
  <div class="arr_b3"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/arr_b3.png"/></div>
  <div class="xm2"><?php echo $_smarty_tpl->tpl_vars['row']->value['project'];?>
</div>
</div>
<div class="xx hd">
  <ul>
    <li>报备有效期  <?php echo $_smarty_tpl->tpl_vars['row']->value['bb_valid'];?>
 天</li>
	<li>带看效期  <?php echo $_smarty_tpl->tpl_vars['row']->value['qy_valid'];?>
 天</li>
	<li style="border:0">佣金:  <?php echo $_smarty_tpl->tpl_vars['row']->value['remark'];?>
</li>
  </ul>
  <div class="clr"></div>
</div>
<?php } ?>
<script>
function s_h_menu(obj){
	if(!$(obj).next().is(":hidden")){
		$(obj).next().slideUp(300);
	}else{
		$(".xx").hide();
		$(obj).next().slideDown(300);
	}
}


</script>
</body>
</html>
<?php }} ?>
