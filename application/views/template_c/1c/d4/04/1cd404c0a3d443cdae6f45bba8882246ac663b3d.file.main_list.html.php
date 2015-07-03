<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 16:59:00
         compiled from "application/views/main_list.html" */ ?>
<?php /*%%SmartyHeaderCode:43345423854a00ada3d7811-77339700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cd404c0a3d443cdae6f45bba8882246ac663b3d' => 
    array (
      0 => 'application/views/main_list.html',
      1 => 1433321452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43345423854a00ada3d7811-77339700',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a00ada5c41b6_34589521',
  'variables' => 
  array (
    'base_url' => 0,
    'data' => 0,
    'projects' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a00ada5c41b6_34589521')) {function content_54a00ada5c41b6_34589521($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_khjlgljm.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_common.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_xzqdjl.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<style>
li{
border-bottom:1px dotted #ccc;
line-height:35px;
margin-left:20px;
}
</style>

<title>报备信息总列表</title>
</head>
<body>

<div class="rtn"><a href="<?php echo smarty_function_site_url(array('url'=>'admin'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/back.png" /></a></div>
<div class="top">报备信息总列表</div>

<?php if ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='4') {?>
<form method="post" action="<?php echo smarty_function_site_url(array('url'=>'wl_manager/main_list'),$_smarty_tpl);?>
">
<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='5') {?>
<form method="post" action="<?php echo smarty_function_site_url(array('url'=>'md_manager/main_list'),$_smarty_tpl);?>
">
<?php } else { ?>
<form method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/main_list'),$_smarty_tpl);?>
">
<?php }?>
<div class="box_select">
    <select class="select1" name="project_id" onchange="get_search('1');">
		<option value="">-请选择报备项目-</option>
	    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['project_id']==$_smarty_tpl->tpl_vars['row']->value['id']) {?>selected='selected'<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['project'];?>
</option>
	    <?php } ?>
	</select>
    <select name="status" class="select1"  onchange="get_search('1');">
    	<option value="" >-请选择状态-</option>
        <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='1') {?>selected='selected'<?php }?>>已报备</option>
        <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='2') {?>selected='selected'<?php }?>>报备即将到期</option>
        <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='3') {?>selected='selected'<?php }?>>已带看</option>
        <option value="4" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='4') {?>selected='selected'<?php }?>>带看即将到期</option>
        <option value="5" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='5') {?>selected='selected'<?php }?>>已签约</option>
        <option value="-1" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='-1') {?>selected='selected'<?php }?>>已删除</option>
        <option value="-2" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='-2') {?>selected='selected'<?php }?>>已过期</option>
   	</select>
   	<div class="srch">
   		<input name="main_search" type="text" class="inp_key" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['main_search'];?>
" placeholder="客户、业务员(姓名、电话)模糊搜索"/>
    		<a href="javascript:get_search('1');"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/blank.png" /></a>
    </div>
   	
   	
   	
   	
</div>
</form>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['res_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<div class="jllb" onclick="s_h_menu(this)">
  <div class="arr_b4"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/arr_b3.png"/></a></div>
  
  <span class="spancss1" ><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</span><span class="spancss2">/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['cdate'],'%y-%m-%d');?>
</span><span class="spancss3">/<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='1') {?>报备成功<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='2') {?>报备即将到期<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='3') {?>带看成功<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='4') {?>带看即将到期<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='5') {?>签约成功<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='-1') {?>业务员删除<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='-2') {?>已过期<?php }?>
    </span>
  
  </div>
<ul class="xx hd" style="list-style:outside none none">
    <li>客户:<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
</li>
	<li>业务员:<?php echo $_smarty_tpl->tpl_vars['row']->value['ywy_name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['row']->value['ywy_phone'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['yqm'];?>
</li>
	<li>报备时间:<?php echo $_smarty_tpl->tpl_vars['row']->value['cdate'];?>
</li>
	<li>带看时间:<?php echo $_smarty_tpl->tpl_vars['row']->value['ddate'];?>
</li>
	<li>签约公司:<?php echo $_smarty_tpl->tpl_vars['row']->value['company_name'];?>
 </li>
	<li>门店经理:<?php echo $_smarty_tpl->tpl_vars['row']->value['md_name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['row']->value['md_phone'];?>
</li>
	<li>渠道经理:<?php echo $_smarty_tpl->tpl_vars['row']->value['qd_name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['row']->value['qd_phone'];?>
</li>
	<li>报备状态:
	<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='1') {?>报备成功<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='2') {?>报备即将到期<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='3') {?>带看成功<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='4') {?>带看即将到期<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='5') {?>签约成功<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='-1') {?>业务员删除<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='-2') {?>已过期<?php }?>
	</li>
</ul>
<?php } ?>

<div style="width:100%; float:left; margin-top:10px; text-align:center; position:relative">
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
<div class="page" style="overflow:hidden; margin:0px auto;left:32%; width:130px; position: absolute; backgroud:url(<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/arr_b2.png) 170px 3px;border:0px;background-color:transparent;"> 
<?php if ($_smarty_tpl->tpl_vars['data']->value['total_page']!=0) {?>
  <select onchange="get_search(this.value);" class="select1" style="width:130px;border:0px; margin-top:15px;">
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
</div>
<script>
function s_h_menu(obj){
	if(!$(obj).next().is(":hidden")){
		$(obj).next().slideUp(300);
	}else{
		$(".xx").hide();
		$(obj).next().slideDown(300);
	}
}


function get_search(page){
	<?php if ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='4') {?>
	$('form').attr('action',"<?php echo smarty_function_site_url(array('url'=>'wl_manager/main_list'),$_smarty_tpl);?>
"+"/" + page);
	<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='5') {?>
	$('form').attr('action',"<?php echo smarty_function_site_url(array('url'=>'md_manager/main_list'),$_smarty_tpl);?>
"+"/" + page);
	<?php } else { ?>
	$('form').attr('action',"<?php echo smarty_function_site_url(array('url'=>'admin/main_list'),$_smarty_tpl);?>
"+"/" + page);
	<?php }?>
	$("form").submit();
}
</script>
</body>
</html>
<?php }} ?>
