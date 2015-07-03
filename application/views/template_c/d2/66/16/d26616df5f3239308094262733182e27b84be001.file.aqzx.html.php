<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 16:42:37
         compiled from "application/views/aqzx.html" */ ?>
<?php /*%%SmartyHeaderCode:127111687654a0a76b5f3483-48644926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd26616df5f3239308094262733182e27b84be001' => 
    array (
      0 => 'application/views/aqzx.html',
      1 => 1433310360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127111687654a0a76b5f3483-48644926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a0a76b6586b6_49252840',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a0a76b6586b6_49252840')) {function content_54a0a76b6586b6_49252840($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_aqzx.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_common.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_xzqdjl.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/easydialog.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/easydialog.css"/>
<title>安全中心</title>
</head>
<body>

<div class="popup hd" id="change_pwd">
  <div class="top_d">修改密码
    <div class="cls"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/cls1.png"/></a></div>
  </div>
  <div class="cntnt">
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'login/change_pwd'),$_smarty_tpl);?>
">
      <input name="passwd" type="text" value="原密码(*)" onfocus="if(this.value=='原密码(*)'){this.value=''}" onblur="if(this.value==''){this.value='原密码(*)'}" class="input1"/>
      <input name="new_passwd" type="text" value="新密码(*)" onfocus="if(this.value=='新密码(*)'){this.value=''}" onblur="if(this.value==''){this.value='新密码(*)'}" class="input1"/>
      <input name="re_passwd" type="text" value="再次输入新密码(*)" onfocus="if(this.value=='再次输入新密码(*)'){this.value=''}" onblur="if(this.value==''){this.value='再次输入新密码(*)'}" class="input1"/>
      
      <input type="button"  class="input2" value="提交" onclick="save_change_pwd();"/>
    <div class="clr"></div>
  </form>
  </div>
</div>



<div class="rtn"><a href="<?php echo smarty_function_site_url(array('url'=>'user'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/back.png" /></a></div>
<div class="top">安全中心</div>
<div class="lock"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/bg_lock.png" " /></div>
<a  href="javascript:change_pwd();"  class="xgmm" >修改密码</a>
<a  href="<?php echo smarty_function_site_url(array('url'=>'login/logout'),$_smarty_tpl);?>
"  class="xgmm" >安全退出</a>

<script>
function change_pwd(){
	easyDialog.open({
		container : 'change_pwd',
		fixed : false
	});
}

function save_change_pwd(){
	if(!$("[name='passwd']").val() || $("[name='passwd']").val() =='原密码(*)'){
		alert('请输入原密码！');
		return;
	}
	if(!$("[name='new_passwd']").val() || $("[name='new_passwd']").val() =='新密码(*)'){
		alert('请输入新密码！');
		return;
	}
	if(!$("[name='re_passwd']").val() || $("[name='re_passwd']").val() =='再次输入新密码(*)'){
		alert('请再次输入新密码！');
		return;
	}
	if($("[name='new_passwd']").val() != $("[name='re_passwd']").val()){
		alert('两次输入的密码不一致！');
		return;
	}
	$('form').submit();
	
}
</script>

</body>
</html>
<?php }} ?>
