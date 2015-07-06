<?php /* Smarty version Smarty-3.1.16, created on 2015-07-03 08:54:19
         compiled from "application/views/m_list_bb.html" */ ?>
<?php /*%%SmartyHeaderCode:209107375854a0a786275a32-09186969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '620a15c2a039d7221e80a27bd3718372d064189d' => 
    array (
      0 => 'application/views/m_list_bb.html',
      1 => 1433310361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209107375854a0a786275a32-09186969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a0a786446675_68753095',
  'variables' => 
  array (
    'base_url' => 0,
    'projects' => 0,
    'row' => 0,
    'data' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a0a786446675_68753095')) {function content_54a0a786446675_68753095($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_xzqdjl.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_common.css" rel="stylesheet" type="text/css">
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/easydialog.css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/easydialog.min.js"></script>
<title>报备管理</title>
</head>
<body>
<div class="rtn"><a href="<?php echo smarty_function_site_url(array('url'=>'kf_manager'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/back.png" /></a></div>
<div class="top"><span class="span_centrer">我的报备</span></div>
<div class="box_select">
	<form method="post" action="<?php echo smarty_function_site_url(array('url'=>'kf_manager/wdbb'),$_smarty_tpl);?>
">
			<select class="select1" style="border:0px;background-color:transparent;width: 310px; padding-left: 60px;" name="project_id"  onchange="get_search('1');">
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
	  
	    	<select name="status" class="select1"  style="border:0px;background-color:transparent;width: 310px; padding-left: 60px;"  onchange="get_search('1');">
		    	<option value="" >-请选择状态-</option>
		        <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='1') {?>selected='selected'<?php }?>>已报备</option>
		        <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='2') {?>selected='selected'<?php }?>>报备即将到期</option>
		        <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='3') {?>selected='selected'<?php }?>>已带看</option>
		        <option value="4" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='4') {?>selected='selected'<?php }?>>带看即将到期</option>
		        <option value="5" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='5') {?>selected='selected'<?php }?>>已签约</option>
	    	</select>
	</form>
</div>
<div class="bblb">
  <h1>报备列表</h1>
</div>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['res_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
<div class="box_list <?php if ($_smarty_tpl->tpl_vars['k']->value==0) {?>mgn_t_10<?php }?>">
  <div class="arr_b"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/arr_b.png"/></div>
  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='1') {?><div class="icon_zt1"><b>已报备</b></div><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='2') {?><div class="icon_zt2"><b>即将到期</b></div><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='3') {?><div class="icon_zt3"><b>已带看</b></div><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='4') {?><div class="icon_zt4"><b>即将到期</b></div><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='5') {?><div class="icon_zt5"><b>已签约</b></div><?php }?>
  <div class="xm"><b><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</b></div>
  <div class="tel"><b><?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
</b></div>
</div>
<div class="xx hd">

  <ul>
    <li>创建时间：<?php echo $_smarty_tpl->tpl_vars['row']->value['cdate'];?>
</li>
    <li>带看时间：<?php echo $_smarty_tpl->tpl_vars['row']->value['ddate'];?>
</li>
    <li>所属项目：<?php echo $_smarty_tpl->tpl_vars['row']->value['project'];?>
</li>
    <li>客户来源：<?php echo $_smarty_tpl->tpl_vars['row']->value['target'];?>
</li>
    <li>客户性别：<?php echo $_smarty_tpl->tpl_vars['row']->value['sex'];?>
</li>
    <li>身份证号：<?php echo $_smarty_tpl->tpl_vars['row']->value['idno'];?>
</li>
    <li>备注：<?php echo $_smarty_tpl->tpl_vars['row']->value['remark'];?>
</li>
  </ul>

  
  <div<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='1') {?> class="bar_zt1"<?php }?>
	  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='2') {?>class="bar_zt2"<?php }?>
	  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='3') {?>class="bar_zt3"<?php }?>
	  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='4') {?>class="bar_zt4"<?php }?>
	  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='5') {?>class="bar_zt5"<?php }?>>
  </div>
  <div class="zt"><span>已报备</span><span>即将到期</span><span>已带看</span><span>即将到期</span><span>已签约</span></div>
    
  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='1'||$_smarty_tpl->tpl_vars['row']->value['status']=='2') {?><a href="javascript:confirm_dk('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');" class="bbgl"><b>确认带看</b></a><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='3'||$_smarty_tpl->tpl_vars['row']->value['status']=='4') {?><a href="javascript:confirm_qy('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');" class="bbgl"><b>确认签约</b></a><?php }?>
  <div class="clr"></div>
</div>
<?php } ?>

<div class="arr_r" <?php if ($_smarty_tpl->tpl_vars['data']->value['pageNum']>=$_smarty_tpl->tpl_vars['data']->value['total_page']) {?>style="margin:34px 10px 0 0"<?php }?>>
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
  <select onchange="get_search(this.value);"class="select1" style="width:230px;border:0px;">
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

<script>
$(".box_list").click(function(){
	if(!$(this).next().is(":hidden")){
		$(this).next().slideUp(300);
	}else{
		$(".xx").hide();
		$(this).next().slideDown(300) ;
	}

});

function get_search(page){
	$('form').attr('action',"<?php echo smarty_function_site_url(array('url'=>'kf_manager/m_list_bb'),$_smarty_tpl);?>
"+"/" + page);
	$("form").submit();
}
var callFn = function(){
	get_search(<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum'];?>
);
};


function confirm_dk(id){
	if(confirm("确定确认业务员带看吗？")){
		$.get("<?php echo smarty_function_site_url(array('url'=>'kf_manager/confirm_dk'),$_smarty_tpl);?>
/"+id,function(data){
			if(data == '1'){
				easyDialog.open({
					container : {
						content : '确认带看成功'
					},
					autoClose : 1000,
					callback : callFn
					
				});
			}
		});
	}
}

function confirm_qy(id){
	if(confirm("确定要确认签约吗？")){
		$.get("<?php echo smarty_function_site_url(array('url'=>'kf_manager/confirm_qy'),$_smarty_tpl);?>
/"+id,function(data){
			if(data == '1'){
				easyDialog.open({
					container : {
						content : '确认签约成功'
					},
					autoClose : 1000,
					callback : callFn
					
				});
			}
		});
	}
}

</script>
</body>

</html>
<?php }} ?>
