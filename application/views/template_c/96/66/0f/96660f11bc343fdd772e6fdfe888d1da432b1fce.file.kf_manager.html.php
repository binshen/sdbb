<?php /* Smarty version Smarty-3.1.16, created on 2015-07-03 08:54:12
         compiled from "application/views/kf_manager.html" */ ?>
<?php /*%%SmartyHeaderCode:11601818154a0a781b52519-06857142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96660f11bc343fdd772e6fdfe888d1da432b1fce' => 
    array (
      0 => 'application/views/kf_manager.html',
      1 => 1433310360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11601818154a0a781b52519-06857142',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a0a781bac888_18191790',
  'variables' => 
  array (
    'base_url' => 0,
    'rel_name' => 0,
    'all_count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a0a781bac888_18191790')) {function content_54a0a781bac888_18191790($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_common.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_glyjm.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<title>客服经理</title>
</head>
<body>
<div class="header">
  <div class="tx_kfjljm"><?php echo $_smarty_tpl->tpl_vars['rel_name']->value;?>
</div>
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'kf_manager/m_list_bb'),$_smarty_tpl);?>
">
  <ul>
    <li><a href="javascript:get_search('');">总报备（<?php echo $_smarty_tpl->tpl_vars['all_count']->value['bb_count'];?>
）</a></li>
    <li>|</li>
    <li><a href="javascript:get_search('3');">总带看（<?php echo $_smarty_tpl->tpl_vars['all_count']->value['dk_count'];?>
）</a></li>
    <li>|</li>
    <li><a href="javascript:get_search('5');">总成交（<?php echo $_smarty_tpl->tpl_vars['all_count']->value['qy_count'];?>
）</a></li>

  </ul>
  <input type="hidden" name="status" />
  </form>
</div>
<div class="box">
  <a href="<?php echo smarty_function_site_url(array('url'=>'kf_manager/m_list_bb'),$_smarty_tpl);?>
"><div class="box_shgl"><h1>审核管理</h1><P>项目、奖金、报备</P></div></a>
  <a><div class="box_dthtgl"><h1>动态后台管理</h1><P>动态发布及处理</P></div></a>
  <a><div class="box_sspt"><h1>申诉平台</h1><P>申诉情况处理</P></div></a>
  <a href="<?php echo smarty_function_site_url(array('url'=>'login/aqzx'),$_smarty_tpl);?>
"><div class="box_aqzx mgn_b_10"><h1>安全中心</h1><P>密码修改、退出</P></div></a>
  <div class="clr"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>
function get_search(status){
	$("[name='status']").val(status);
	$("form").submit();
}
</script>
</body>
</html>
<?php }} ?>
