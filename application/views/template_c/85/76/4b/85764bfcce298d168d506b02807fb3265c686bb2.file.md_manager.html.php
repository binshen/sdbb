<?php /* Smarty version Smarty-3.1.16, created on 2015-07-06 11:54:54
         compiled from "application/views/md_manager.html" */ ?>
<?php /*%%SmartyHeaderCode:79403918454a0e0fdc54e12-57755725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85764bfcce298d168d506b02807fb3265c686bb2' => 
    array (
      0 => 'application/views/md_manager.html',
      1 => 1436154892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79403918454a0e0fdc54e12-57755725',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a0e0fdcb2257_95395073',
  'variables' => 
  array (
    'base_url' => 0,
    'rel_name' => 0,
    'all_count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a0e0fdcb2257_95395073')) {function content_54a0e0fdcb2257_95395073($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/www/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="css/hh_common.css" rel="stylesheet" type="text/css"/>
<link href="css/hh_glyjm.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<title>门店经理</title>
</head>
<body>
<div class="header3">
  <div class="tx_mdjl"><?php echo $_smarty_tpl->tpl_vars['rel_name']->value;?>
</div>
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'md_manager/main_list'),$_smarty_tpl);?>
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
  <a href="<?php echo smarty_function_site_url(array('url'=>'md_manager/list_ywy'),$_smarty_tpl);?>
"><div class="box_zhkt">
    <h1>账户开通</h1>
    <P>新增或删除业务员</P></div></a>
  <a href="<?php echo smarty_function_site_url(array('url'=>'md_manager/huoyue/1'),$_smarty_tpl);?>
"><div class="box_hydcx">
    <h1>活跃度查询</h1>
    <P>业务排名及搜索</P></div></a>
  <div class="box_sspt">
    <h1>申诉平台</h1>
    <P>申诉情况处理</P></div>
  <a href="<?php echo smarty_function_site_url(array('url'=>'login/aqzx'),$_smarty_tpl);?>
"><div class="box_aqzx mgn_b_10">
    <h1>安全中心</h1>
    <P>密码修改、退出</P></div></a>
    <a href="<?php echo smarty_function_site_url(array('url'=>'md_manager/wybb'),$_smarty_tpl);?>
"><div class="box_dthtgl"><h1>我要报备</h1><P>我要报备</P></div></a>
    <a href="<?php echo smarty_function_site_url(array('url'=>'md_manager/wdbb'),$_smarty_tpl);?>
"><div class="box_shgl"><h1>我的报备</h1><P>我的报备</P></div></a>
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
