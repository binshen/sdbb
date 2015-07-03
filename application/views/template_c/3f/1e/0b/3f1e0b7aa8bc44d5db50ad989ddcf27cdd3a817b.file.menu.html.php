<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 15:16:16
         compiled from "application/views/pc/menu.html" */ ?>
<?php /*%%SmartyHeaderCode:1262773732556ea9c02c5e37-88740175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f1e0b7aa8bc44d5db50ad989ddcf27cdd3a817b' => 
    array (
      0 => 'application/views/pc/menu.html',
      1 => 1433315275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1262773732556ea9c02c5e37-88740175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rel_name' => 0,
    'base_url' => 0,
    'pic' => 0,
    'admin_group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_556ea9c0325176_16734754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556ea9c0325176_16734754')) {function content_556ea9c0325176_16734754($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><div class="w172_l">
   <p><?php echo $_smarty_tpl->tpl_vars['rel_name']->value;?>
</p>
   <img class="tx" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
uploadfiles/head/s2_<?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
" />
   <?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='1') {?>
   <a href="<?php echo smarty_function_site_url(array('url'=>'admin_pc/index'),$_smarty_tpl);?>
">项目管理</a>
   <a href="<?php echo smarty_function_site_url(array('url'=>'admin_pc/kfjlgl'),$_smarty_tpl);?>
">客服经理管理</a>
   <a href="<?php echo smarty_function_site_url(array('url'=>'admin_pc/qdjlgl'),$_smarty_tpl);?>
">渠道经理管理</a>
   <a href="<?php echo smarty_function_site_url(array('url'=>'admin_pc/main_list'),$_smarty_tpl);?>
">报备信息列表</a>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='2') {?>
   <a href="<?php echo smarty_function_site_url(array('url'=>'kf_manager_pc/index'),$_smarty_tpl);?>
">审核管理</a>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='3') {?>
   <a href="<?php echo smarty_function_site_url(array('url'=>'user_pc/index'),$_smarty_tpl);?>
">我的报备</a>
   <a href="<?php echo smarty_function_site_url(array('url'=>'user_pc/wybb'),$_smarty_tpl);?>
">我要报备</a>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='4') {?>
   <a href="<?php echo smarty_function_site_url(array('url'=>'wl_manager_pc/index'),$_smarty_tpl);?>
">签约公司</a>
   <a href="<?php echo smarty_function_site_url(array('url'=>'wl_manager_pc/huoyue'),$_smarty_tpl);?>
">活跃度查询</a>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='5') {?>
	<a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/index'),$_smarty_tpl);?>
">业务员</a>
	<a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/huoyue'),$_smarty_tpl);?>
">活跃度查询</a>
	<a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/main_list'),$_smarty_tpl);?>
">报备信息列表</a>
	<?php }?>

   <a href="<?php echo smarty_function_site_url(array('url'=>'login_pc/aqzx'),$_smarty_tpl);?>
">个人中心</a>
   <div class="ewm"><span>房猫手机移动端</span> <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/ewm.jpg" /> <span>手机端快速便捷报备</span> </div>
 </div><?php }} ?>
