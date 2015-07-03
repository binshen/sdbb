<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 14:45:20
         compiled from "application/views/admin.html" */ ?>
<?php /*%%SmartyHeaderCode:27429320454a00a5a1e2462-07770363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9f0a2a0bd0c70dee60d4dd245ae92005c21f1d6' => 
    array (
      0 => 'application/views/admin.html',
      1 => 1433310360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27429320454a00a5a1e2462-07770363',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a00a5a22ebf6_04933832',
  'variables' => 
  array (
    'base_url' => 0,
    'all_count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a00a5a22ebf6_04933832')) {function content_54a00a5a22ebf6_04933832($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_glyjm.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<title>管理员</title>
</head>
<body>
<div class="header">
  <div class="tx_adm">管理员</div>
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/main_list'),$_smarty_tpl);?>
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
  <a href="<?php echo smarty_function_site_url(array('url'=>'admin/projects'),$_smarty_tpl);?>
"><div class="box_xmgl"><h1>项目管理</h1><P>项目、奖金、报备</P></div></a>
  <a href="<?php echo smarty_function_site_url(array('url'=>'admin/kfjlgl'),$_smarty_tpl);?>
"><div class="box_kfjlgl">
    <h1>客服经理管理</h1>
    <P>新增活删除经理</P></div></a>
  <a href="<?php echo smarty_function_site_url(array('url'=>'admin/qdjlgl'),$_smarty_tpl);?>
"><div class="box_qdjlgl">
    <h1>渠道经理管理</h1>
    <P>新增活删除经理</P>
  </div></a>
  <a href="<?php echo smarty_function_site_url(array('url'=>'admin/main_list'),$_smarty_tpl);?>
"><div class="box_bbxxlb">
    <h1>报备信息列表</h1>
    <P>项目、奖金、报备</P></div></a>
  
    <!--
  <div class="box_sspt">
    <h1>申诉平台</h1>
    <P>申诉情况处理</P></div>
  -->
  <a href="<?php echo smarty_function_site_url(array('url'=>'login/aqzx'),$_smarty_tpl);?>
"><div class="box_aqzx mgn_b_10">
    <h1>安全中心</h1>
    <P>密码修改、退出</P></div></a>
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
