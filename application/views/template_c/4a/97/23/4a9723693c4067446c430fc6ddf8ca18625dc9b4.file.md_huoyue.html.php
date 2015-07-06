<?php /* Smarty version Smarty-3.1.16, created on 2015-07-03 10:00:26
         compiled from "application/views/pc/md_huoyue.html" */ ?>
<?php /*%%SmartyHeaderCode:15474833885595ecba236c16-04770461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a9723693c4067446c430fc6ddf8ca18625dc9b4' => 
    array (
      0 => 'application/views/pc/md_huoyue.html',
      1 => 1433315275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15474833885595ecba236c16-04770461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'rel_name' => 0,
    'admin_group' => 0,
    'all_count' => 0,
    'data' => 0,
    'k' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5595ecba4217f1_92320986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5595ecba4217f1_92320986')) {function content_5595ecba4217f1_92320986($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc_fm.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc_common.css" rel="stylesheet" type="text/css"/>
<title>活跃度查询</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("pc/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000 bdr">
  <?php echo $_smarty_tpl->getSubTemplate ("pc/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="w800">
    <p class="nm"><?php echo $_smarty_tpl->tpl_vars['rel_name']->value;?>
<span>(<?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='1') {?>管理员<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='2') {?>客服经理<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='3') {?>业务员<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='4') {?>外联经理<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='5') {?>门店经理<?php }?>)</span></p>
    <p class="zbb">总报备： <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['bb_count'];?>
</span> |  总带看： <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['dk_count'];?>
</span> |  总成交: <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['qy_count'];?>
</span> </p>
    <div class="box1">
      <h3>活跃度查询</h3>
      <div class="pm">
		  <a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/huoyue/1'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='1') {?>class="line"<?php }?>>综合排名</a><span>|</span>
	      <a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/huoyue/2'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='2') {?>class="line"<?php }?>>报备排名</a><span>|</span>
	      <a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/huoyue/3'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='3') {?>class="line"<?php }?>>带看排名</a><span>|</span>
	      <a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/huoyue/4'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='4') {?>class="line"<?php }?>>成交排名</a>
	  </div> 
      <table border="0" class="table2">
        <tr>
          <th scope="col">排名</th>
          <th scope="col">姓名</th>
          <th scope="col"  class="w210">总分</th>
          <th scope="col" >邀请码</th>
          <th scope="col">手机号码</th>
        </tr>
        
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['res_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
        <tr <?php if ((1 & $_smarty_tpl->tpl_vars['k']->value)) {?>class="grey_bg"<?php }?>>
          <td><?php if (($_smarty_tpl->tpl_vars['data']->value['pageNum']-1)*$_smarty_tpl->tpl_vars['data']->value['per_page']+$_smarty_tpl->tpl_vars['k']->value<=2) {?><img class="img_pm<?php echo ($_smarty_tpl->tpl_vars['data']->value['pageNum']-1)*$_smarty_tpl->tpl_vars['data']->value['per_page']+$_smarty_tpl->tpl_vars['k']->value+1;?>
 bg" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/blank.png" /><?php } else { ?><?php echo ($_smarty_tpl->tpl_vars['data']->value['pageNum']-1)*$_smarty_tpl->tpl_vars['data']->value['per_page']+$_smarty_tpl->tpl_vars['k']->value+1;?>
<?php }?></td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['rel_name'];?>
</td>
          <td>
		  <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='1') {?><?php echo $_smarty_tpl->tpl_vars['row']->value['bb_count']+$_smarty_tpl->tpl_vars['row']->value['dk_count']*50+$_smarty_tpl->tpl_vars['row']->value['qy_count']*500;?>
<br/>（报备<?php echo $_smarty_tpl->tpl_vars['row']->value['bb_count'];?>
分 带看<?php echo $_smarty_tpl->tpl_vars['row']->value['dk_count']*50;?>
分 成交<?php echo $_smarty_tpl->tpl_vars['row']->value['qy_count']*500;?>
分）<?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='2') {?><?php echo $_smarty_tpl->tpl_vars['row']->value['bb_count'];?>
<br/>（报备<?php echo $_smarty_tpl->tpl_vars['row']->value['bb_count'];?>
分）<?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='3') {?><?php echo $_smarty_tpl->tpl_vars['row']->value['dk_count']*50;?>
<br/>（带看<?php echo $_smarty_tpl->tpl_vars['row']->value['dk_count']*50;?>
分）<?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=='4') {?><?php echo $_smarty_tpl->tpl_vars['row']->value['qy_count']*500;?>
<br/>（成交<?php echo $_smarty_tpl->tpl_vars['row']->value['qy_count']*500;?>
分）<?php }?>
		  
		  </td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['yqm'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
        </tr>
        <?php } ?>
        
        
      </table>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['data']->value['res_list']) {?>
	<div class="page">
		<?php if ($_smarty_tpl->tpl_vars['data']->value['pageNum']<$_smarty_tpl->tpl_vars['data']->value['total_page']) {?><a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/huoyue'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum']+1;?>
" class="pg3 bg">下一页</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['max_p']<$_smarty_tpl->tpl_vars['data']->value['total_page']) {?>
		<a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/huoyue'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['total_page'];?>
" class="pg2 bg"><?php echo $_smarty_tpl->tpl_vars['data']->value['total_page'];?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['max_p']+1<$_smarty_tpl->tpl_vars['data']->value['total_page']) {?>
		<span>...</span>
		<?php }?>
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['page_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['row']->value==$_smarty_tpl->tpl_vars['data']->value['pageNum']) {?>
		<a class="pg1 bg "><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a>
		<?php } else { ?>
		<a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/huoyue'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
"  class="pg2 bg "><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a>
		<?php }?>
		<?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['min_p']>1) {?>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['min_p']>2) {?>
		<span>...</span>
		<?php }?>
		<a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/huoyue'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];?>
/1" class="pg2 bg">1</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['pageNum']>1) {?><a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/huoyue'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum']-1;?>
" class="pg3 bg">上一页</a><?php }?>
	</div>
	<?php }?>
    
  </div>
  <div class="clr"></div>
</div>
<div class="footer">
  <p>©2000-2014 ksls.com.cn 房猫经纪人 </p>
  <p>微信公众账号:kunshanloushi &nbsp;&nbsp;&nbsp;&nbsp;客服电话:400-626-9900</p>
</div>
</body>
</html>
<?php }} ?>
