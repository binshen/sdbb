<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 14:06:29
         compiled from "application/views/foot.html" */ ?>
<?php /*%%SmartyHeaderCode:38758278654a000b0893b83-01938231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '812b00563f33e26350647776f824b9ebc7faf111' => 
    array (
      0 => 'application/views/foot.html',
      1 => 1433310360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38758278654a000b0893b83-01938231',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a000b08bc534_29710052',
  'variables' => 
  array (
    'flag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a000b08bc534_29710052')) {function content_54a000b08bc534_29710052($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?>	<div id="bottom-nav">
        <a data-tab="index" href="<?php echo smarty_function_site_url(array('url'=>'index'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['flag']->value=='a') {?>class="active"<?php }?>><i class="ch-index"></i><span>楼盘</span></a>
        <a data-tab="photos" href="<?php echo smarty_function_site_url(array('url'=>'news'),$_smarty_tpl);?>
"  <?php if ($_smarty_tpl->tpl_vars['flag']->value=='b') {?>class="active"<?php }?>><i class="ch-showhome"></i><span>动态</span></a>
        <a data-tab="people" href="<?php echo smarty_function_site_url(array('url'=>'tools'),$_smarty_tpl);?>
"  <?php if ($_smarty_tpl->tpl_vars['flag']->value=='c') {?>class="active"<?php }?>><i class="ch-people"></i><span>工具</span></a>
        <a data-tab="findpros" href="<?php echo smarty_function_site_url(array('url'=>'user'),$_smarty_tpl);?>
"  <?php if ($_smarty_tpl->tpl_vars['flag']->value=='d') {?>class="active"<?php }?>  _hover-ignore="1"><i class="ch-pros"></i><span>我的房猫</span></a>
    </div><?php }} ?>
