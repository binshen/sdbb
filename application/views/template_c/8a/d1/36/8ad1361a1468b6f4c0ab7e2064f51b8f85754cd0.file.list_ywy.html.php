<?php /* Smarty version Smarty-3.1.16, created on 2015-07-03 09:22:22
         compiled from "application/views/list_ywy.html" */ ?>
<?php /*%%SmartyHeaderCode:206983055354a0e1268e2d31-82511321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ad1361a1468b6f4c0ab7e2064f51b8f85754cd0' => 
    array (
      0 => 'application/views/list_ywy.html',
      1 => 1433321543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206983055354a0e1268e2d31-82511321',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a0e1269e3413_86531165',
  'variables' => 
  array (
    'base_url' => 0,
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a0e1269e3413_86531165')) {function content_54a0e1269e3413_86531165($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_khjlgljm.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_common.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_xzqdjl.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/easydialog.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/easydialog.css"/>
<title>业务员管理</title>
</head>
<body>


<div class="popup hd" id="add_ywy">
  <div class="top_d">添加业务员
    <div class="cls"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/cls1.png"/></a></div>
  </div>
  <div class="cntnt">
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'md_manager/save_ywy'),$_smarty_tpl);?>
" id="form_add">
      <input name="rel_name" type="text" value="姓名" onfocus="if(this.value=='姓名'){this.value=''}" class="input1"/>
      <input name="username" type="text" value="手机号码" onfocus="if(this.value=='手机号码'){this.value=''}" class="input1"/>
      <input type="button"  class="input2" value="提交" onclick="save_ywy();"/>
    <div class="clr"></div>
  </form>
  </div>
</div>


<div class="popup hd" id="edit_ywy">
  <div class="top_d">修改业务员
    <div class="cls"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/cls1.png"/></a></div>
  </div>
  <div class="cntnt">
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'md_manager/save_ywy'),$_smarty_tpl);?>
" id="form_edit">
      <input name="rel_name" type="text" class="input1" />
      <input name="username" type="text" class="input1" />
      <input name='id' type="hidden" class="input1" />
      <input type="button"  class="input2" value="提交" onclick="save_ywy_edit();"/>
    <div class="clr"></div>
  </form>
  </div>
</div>




<div class="rtn"><a href="<?php echo smarty_function_site_url(array('url'=>'md_manager'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/back.png" /></a></div>
<div class="top">业务员管理</div>
<div class="add"><a href="javascript:add_ywy();"> 新建业务员</a></div>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['res_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<a href="javascript:;" onclick="s_h_menu(this)"><div class="jllb"><div class="arr_b4"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/arr_b3.png"/></div><?php echo $_smarty_tpl->tpl_vars['row']->value['rel_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
 </div></a>
	<ul class="xm hd">
	<li>邀请码：<?php echo $_smarty_tpl->tpl_vars['row']->value['yqm'];?>
</li>
	</ul>
	<div class="scjl hd"><a href="javascript:edit_ywy('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');">修改业务员 </a></div>
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


<script>
function s_h_menu(obj){
	if(!$(obj).next().is(":hidden")){
		$(obj).next().slideUp(300);
		//$(obj).next().next().slideUp(300);
	}else{
		$(".xm").hide();
		$(".scjl").hide();
		$(obj).next().slideDown(300);
		//$(obj).next().next().slideDown(300);
	}
}

function add_ywy(id){
	easyDialog.open({
		container : 'add_ywy',
		fixed : false
	});
}

function save_ywy(){
	if(!$("#add_ywy [name='rel_name']").val() || $("#add_ywy [name='rel_name']").val() =='姓名'){
		alert('请输入姓名！');
		return;
	}
	if(!$("#add_ywy [name='username']").val() || $("#add_ywy [name='username']").val() =='手机号码'){
		alert('请输入手机号码！');
		return;
	}
	var re = /^1\d{10}$/;
	if (!re.test($("#add_ywy [name='username']").val())) {
		alert('手机号码格式错误！');
		return false;
	}
	$("#form_add").submit();
}

function edit_ywy(id){
	$.getJSON("<?php echo smarty_function_site_url(array('url'=>'md_manager/get_ywy'),$_smarty_tpl);?>
/"+id,function(data){
		$("[name='id']").val(data.id);
		$("#edit_ywy [name='username']").val(data.username);
		$("#edit_ywy [name='rel_name']").val(data.rel_name);
		easyDialog.open({
			container : 'edit_ywy',
			fixed : false
		});
	});
}

function save_ywy_edit(){
	if(!$("#edit_ywy [name='rel_name']").val() || $("#edit_ywy [name='rel_name']").val() =='姓名'){
		alert('请输入姓名！');
		return;
	}
	if(!$("#edit_ywy [name='username']").val() || $("#edit_ywy [name='username']").val() =='手机号码'){
		alert('请输入手机号码！');
		return;
	}
	var re = /^1\d{10}$/;
	if (!re.test($("#edit_ywy [name='username']").val())) {
		alert('手机号码格式错误！');
		return false;
	}
	
	$("#form_edit").submit();
}

function get_search(page){
	location.href = "<?php echo smarty_function_site_url(array('url'=>'md_manager/list_ywy'),$_smarty_tpl);?>
/"+page;
}
</script>
</body>
</html>
<?php }} ?>
