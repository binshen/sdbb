<?php /* Smarty version Smarty-3.1.16, created on 2015-07-03 09:23:22
         compiled from "application/views/md_huoyue.html" */ ?>
<?php /*%%SmartyHeaderCode:37660304454a1fa75093f71-99893228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ead357f2b170a70bfe61424dd86e7725f45e079f' => 
    array (
      0 => 'application/views/md_huoyue.html',
      1 => 1433310361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37660304454a1fa75093f71-99893228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a1fa751ecd21_85592957',
  'variables' => 
  array (
    'base_url' => 0,
    'data' => 0,
    'k' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1fa751ecd21_85592957')) {function content_54a1fa751ecd21_85592957($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_hydcx.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_common.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_xzqdjl.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<title>活跃度查询</title>
</head>
<body>
<div class="rtn"><a href="<?php echo smarty_function_site_url(array('url'=>'md_manager'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/back.png" /></a></div>
<div class="top">活跃度查询</div>
<div  class="pm">
  <ul>
    <li><a href="<?php echo smarty_function_site_url(array('url'=>'md_manager/huoyue/1'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='1') {?>class="line"<?php }?>>综合排名</a></li>
    <li><a href="<?php echo smarty_function_site_url(array('url'=>'md_manager/huoyue/2'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='2') {?>class="line"<?php }?>>报备排名</a></li>
    <li><a href="<?php echo smarty_function_site_url(array('url'=>'md_manager/huoyue/3'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='3') {?>class="line"<?php }?>>带看排名</a></li>
    <li style=" background-image:none"><a href="<?php echo smarty_function_site_url(array('url'=>'md_manager/huoyue/4'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='4') {?>class="line"<?php }?>>成交排名</a></li>
  </ul>
  <div class="clr"></div>
</div>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['res_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
<div class="box">
  <div <?php if ($_smarty_tpl->tpl_vars['k']->value<=2) {?>class="icon1"<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['rel_name'];?>
</div>
  <div class="icon2">
  <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='1') {?>总分:<?php echo $_smarty_tpl->tpl_vars['row']->value['bb_count']+$_smarty_tpl->tpl_vars['row']->value['dk_count']*50+$_smarty_tpl->tpl_vars['row']->value['qy_count']*500;?>
（报备<?php echo $_smarty_tpl->tpl_vars['row']->value['bb_count'];?>
分 带看<?php echo $_smarty_tpl->tpl_vars['row']->value['dk_count']*50;?>
分 成交<?php echo $_smarty_tpl->tpl_vars['row']->value['qy_count']*500;?>
分）<?php }?>
  <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='2') {?>总分:<?php echo $_smarty_tpl->tpl_vars['row']->value['bb_count'];?>
（报备<?php echo $_smarty_tpl->tpl_vars['row']->value['bb_count'];?>
分）<?php }?>
  <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='3') {?>总分:<?php echo $_smarty_tpl->tpl_vars['row']->value['dk_count']*50;?>
（带看<?php echo $_smarty_tpl->tpl_vars['row']->value['dk_count']*50;?>
分）<?php }?>
  <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='4') {?>总分:<?php echo $_smarty_tpl->tpl_vars['row']->value['qy_count']*500;?>
（成交<?php echo $_smarty_tpl->tpl_vars['row']->value['qy_count']*500;?>
分）<?php }?>
  
  </div>
  <div class="icon3">邀请码：<?php echo $_smarty_tpl->tpl_vars['row']->value['yqm'];?>
</div>
  <div class="icon4">业务员手机：<?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</div>
</div>
<?php } ?>
<div class="arr_r" >
	<?php if ($_smarty_tpl->tpl_vars['data']->value['pageNum']>=$_smarty_tpl->tpl_vars['data']->value['total_page']) {?>
	<a><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/arr_r2.png"/></a>
	<?php } else { ?>
	<a href="javascript:get_search('<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum']+1;?>
');"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/arr_r1.png"/></a>
	<?php }?>
</div>
<div class="arr_l">
	<?php if ($_smarty_tpl->tpl_vars['data']->value['pageNum']<=1) {?>
	<a><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/arr_l2.png"/></a>
	<?php } else { ?>
	<a href="javascript:get_search('<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum']-1;?>
');"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/arr_l1.png"/></a>
	<?php }?>
</div>
<div class="page" style="overflow:hidden; width:100px;position:relative; backgroud:url(<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/arr_b2.png) 170px 3px;border:0px;background-color:transparent;"> 
<?php if ($_smarty_tpl->tpl_vars['data']->value['total_page']!=0) {?>
  <select onchange="get_search(this.value);" class="select1" style="width:230px;border:0px;">
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['data']->value['total_page']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?> 
  <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1==$_smarty_tpl->tpl_vars['data']->value['pageNum']) {?>selected='selected'<?php }?>>第  <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['total_page'];?>
  页</option>
  <?php endfor; endif; ?>
  </select>
<?php }?>
</div>
</body>
<script>
function get_search(page){
	location.href = "<?php echo smarty_function_site_url(array('url'=>'md_manager/huoyue'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];?>
/"+page;
}
</script>
</html>
<?php }} ?>
