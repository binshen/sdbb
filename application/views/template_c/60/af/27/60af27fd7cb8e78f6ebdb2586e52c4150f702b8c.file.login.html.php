<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 15:08:01
         compiled from "application/views/pc/login.html" */ ?>
<?php /*%%SmartyHeaderCode:606764765556ea7d1a84324-27755860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60af27fd7cb8e78f6ebdb2586e52c4150f702b8c' => 
    array (
      0 => 'application/views/pc/login.html',
      1 => 1433315275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '606764765556ea7d1a84324-27755860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_556ea7d1ac64e3_83915842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556ea7d1ac64e3_83915842')) {function content_556ea7d1ac64e3_83915842($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc_popup.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc_common.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<title>房猫登陆</title>
</head>
<body>
<div class="w945">
<div class="hydl bg">欢迎登录</div>

<form method="post" class="c-form login-form" id="J_Register" action="<?php echo smarty_function_site_url(array('url'=>'login_pc/check_login'),$_smarty_tpl);?>
">
  <div class="box_dl"><p>用户名</p><input class="input1 bg" name="name" type="text" placeholder="请输入11位手机号码" required/><p>密码</p>
  <input class="input2 bg" name="passwd" type="password" placeholder="请输入您的登录密码" required/>
  <a href="javascript:$('form').submit();" class="dl bg">登 录</a><a href="#" class="wjmm">忘记密码？</a></div>
  </form>
  
  
  <div class="bg_f bg"></div>
</div>
</body>
</html>
<?php }} ?>
