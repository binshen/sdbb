<?php /* Smarty version Smarty-3.1.16, created on 2015-07-03 09:25:10
         compiled from "application/views/user_center.html" */ ?>
<?php /*%%SmartyHeaderCode:114447277154a00a4092d0a9-75103317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '548c0b8acb2470ea41d933b103cb4b6dc2949444' => 
    array (
      0 => 'application/views/user_center.html',
      1 => 1433310370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114447277154a00a4092d0a9-75103317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a00a40998681_45851683',
  'variables' => 
  array (
    'base_url' => 0,
    'rel_name' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a00a40998681_45851683')) {function content_54a00a40998681_45851683($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?>
<!DOCTYPE>
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
<title>业务员</title>
</head>
<body>
<div class="header">
  <div class="tx_kfjljm"><?php echo $_smarty_tpl->tpl_vars['rel_name']->value;?>
</div>
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'user/wdbb'),$_smarty_tpl);?>
">
  <ul>
    <li><a href="javascript:get_search('1');"><span class="kj"><?php echo $_smarty_tpl->tpl_vars['count']->value['bb'];?>
</span><strong>已报备</strong></a></li>
    <li>|</li>
    <li><a href="javascript:get_search('3');"><span class="dt"><?php echo $_smarty_tpl->tpl_vars['count']->value['dk'];?>
</span><strong>已带看</strong></a></li>
    <li>|</li>
    <li><a href="javascript:get_search('5');"><span class="hm"><?php echo $_smarty_tpl->tpl_vars['count']->value['qy'];?>
</span><strong>已签约</strong></li>
    <li>|</li>
    <li><a href="javascript:get_search('2');"><span class="zx"><?php echo $_smarty_tpl->tpl_vars['count']->value['jjdq'];?>
</span><strong>报备将到期</strong></a></li>
    <li>|</li>
	<li><a href="javascript:get_search('-2');"><span class="zx"><?php echo $_smarty_tpl->tpl_vars['count']->value['dq'];?>
</span><strong>已过期</strong></a></li>
  </ul>
  <input type="hidden" name="status" />
  </form>
</div>
<div class="box">
  <a href="<?php echo smarty_function_site_url(array('url'=>'user/wdbb'),$_smarty_tpl);?>
"><div class="box_shgl"><h1>我的报备</h1><P>我的报备</P></div></a>
  <a href="<?php echo smarty_function_site_url(array('url'=>'user/wybb'),$_smarty_tpl);?>
"><div class="box_dthtgl"><h1>我要报备</h1><P>我要报备</P></div></a>
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
</html><?php }} ?>
