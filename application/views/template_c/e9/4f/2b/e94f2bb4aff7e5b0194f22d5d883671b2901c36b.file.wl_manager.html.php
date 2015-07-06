<?php /* Smarty version Smarty-3.1.16, created on 2015-07-03 09:19:20
         compiled from "application/views/wl_manager.html" */ ?>
<?php /*%%SmartyHeaderCode:40839644454a0c7956ac859-30685510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e94f2bb4aff7e5b0194f22d5d883671b2901c36b' => 
    array (
      0 => 'application/views/wl_manager.html',
      1 => 1433310370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40839644454a0c7956ac859-30685510',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a0c7957063f6_83704012',
  'variables' => 
  array (
    'base_url' => 0,
    'rel_name' => 0,
    'all_count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a0c7957063f6_83704012')) {function content_54a0c7957063f6_83704012($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="css/hh_common.css" rel="stylesheet" type="text/css"/>
<link href="css/hh_glyjm.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<title>外联经理</title>
</head>
<body>
<div class="header4">
  <div class="tx_wljl"><?php echo $_smarty_tpl->tpl_vars['rel_name']->value;?>
</div>
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'wl_manager/main_list'),$_smarty_tpl);?>
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
  <a href="<?php echo smarty_function_site_url(array('url'=>'wl_manager/qy_company'),$_smarty_tpl);?>
"><div class="box_zhkt">
    <h1>账户开通</h1>
    <P>新增或删除业务员</P></div></a>
  <a href="<?php echo smarty_function_site_url(array('url'=>'wl_manager/huoyue/1'),$_smarty_tpl);?>
"><div class="box_hydcx">
    <h1>活跃度查询</h1>
    <P>业务排名及搜索</P></div></a>
  <a href="<?php echo smarty_function_site_url(array('url'=>'wl_manager/qy_company'),$_smarty_tpl);?>
"><div class="box_qygslb">
    <h1>签约公司列表</h1>
    <P>签约公司信息</P></div></a>
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
