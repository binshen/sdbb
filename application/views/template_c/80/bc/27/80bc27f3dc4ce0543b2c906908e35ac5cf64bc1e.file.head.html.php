<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 15:16:16
         compiled from "application/views/pc/head.html" */ ?>
<?php /*%%SmartyHeaderCode:1591693645556ea9c02b09a3-54387315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80bc27f3dc4ce0543b2c906908e35ac5cf64bc1e' => 
    array (
      0 => 'application/views/pc/head.html',
      1 => 1433315275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1591693645556ea9c02b09a3-54387315',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rel_name' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_556ea9c02c31b3_63989308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556ea9c02c31b3_63989308')) {function content_556ea9c02c31b3_63989308($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><div class="w1000 top"><span class="sjb bg"><a href="#">手机版</a></span><span>忘记密码?</span><span>|</span><span><a href="<?php echo smarty_function_site_url(array('url'=>'login_pc/logout'),$_smarty_tpl);?>
">退出登录</a></span><span>|</span><span class="nm"><?php echo $_smarty_tpl->tpl_vars['rel_name']->value;?>
</span><span>欢迎，</span></div>
<div class="w1000">
  <div class="srh bg"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/blank.png" />
    <input name="" type="text" />
    <span><a href="<?php echo smarty_function_site_url(array('url'=>'index'),$_smarty_tpl);?>
"  style="color:#fff;">首页</a></span><a href="<?php echo smarty_function_site_url(array('url'=>'index'),$_smarty_tpl);?>
"><span style="color:#fff;">我的房猫</span></a><span>设置</span> </div>
  <div class="logo bg"></div>
</div><?php }} ?>
