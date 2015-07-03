<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 17:00:42
         compiled from "application/views/qdjlgl.html" */ ?>
<?php /*%%SmartyHeaderCode:199394488354a00acead9997-78951493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a46408fdc90cb8fbab54d0c78b2cacf6f1b3b481' => 
    array (
      0 => 'application/views/qdjlgl.html',
      1 => 1433322037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199394488354a00acead9997-78951493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a00aceb5dff8_84799721',
  'variables' => 
  array (
    'base_url' => 0,
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a00aceb5dff8_84799721')) {function content_54a00aceb5dff8_84799721($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
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
<title>渠道经理管理</title>
</head>
<body>


<div class="popup hd" id="add_qdjl">
  <div class="top_d">添加渠道经理
    <div class="cls"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/cls1.png"/></a></div>
  </div>
  <div class="cntnt">
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/save_qdjl'),$_smarty_tpl);?>
" id="form_add">
      <input id="rel_name" name="rel_name" type="text" value="姓名" onfocus="if(this.value=='姓名'){this.value=''}" class="input1"/>
      <input id="username" name="username" type="text" value="手机号码" onfocus="if(this.value=='手机号码'){this.value=''}" class="input1"/>
      <input type="hidden" name="id" />
      <input type="button"  class="input2" value="提交" onclick="save_qdjl();"/>
    <div class="clr"></div>
  </form>
  </div>
</div>





<div class="rtn"><a href="<?php echo smarty_function_site_url(array('url'=>'admin'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/back.png" /></a></div>
<div class="top">渠道经理管理</div>
<div class="add"><a href="javascript:add_qdjl();"> 新建渠道经理</a></div>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<a href="javascript:;" onclick="s_h_menu(this)"><div class="jllb"><div class="arr_b4"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/arr_b3.png"/></div><span class="spancss2" style="text-indent:27px" ><?php echo $_smarty_tpl->tpl_vars['row']->value['rel_name'];?>
</span><span class="spancss2"> <?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</span> </div></a>
	<ul class="xm hd">
	<li></li>
	</ul>
	<div class="scjl hd"><a href="javascript:edit_qdjl('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');">修改经理 </a></div>
<?php } ?>
<script>
function s_h_menu(obj){
	if(!$(obj).next().is(":hidden")){
		$(obj).next().slideUp(300);
		$(obj).next().next().slideUp(300);
	}else{
		$(".xm").hide();
		$(".scjl").hide();
		$(obj).next().slideDown(300);
		$(obj).next().next().slideDown(300);
	}
}

function add_qdjl(id){
	$("[name='id']").val('');
	easyDialog.open({
		container : 'add_qdjl',
		fixed : false
	});
}

function save_qdjl(){
	if(!$("[name='rel_name']").val() || $("[name='rel_name']").val() =='姓名'){
		alert('请输入姓名！');
		return;
	}
	if(!$("[name='username']").val() || $("[name='username']").val() =='手机号码'){
		alert('请输入手机号码！');
		return;
	}
	var re = /^1\d{10}$/;
	if (!re.test($("[name='username']").val())) {
		alert('手机号码格式错误！');
		return false;
	}
	$("#form_add").submit();
}

function edit_qdjl(id){
	$.getJSON("<?php echo smarty_function_site_url(array('url'=>'admin/get_qdjl'),$_smarty_tpl);?>
/"+id,function(data){
		$("[name='id']").val(data.id);
		$("#username").val(data.username);
		$("#rel_name").val(data.rel_name);
		easyDialog.open({
			container : 'add_qdjl',
			fixed : false
		});
	});
}

function save_qdjl_edit(){
	var i = 0;
	$("#edit_qdjl [name='project_id[]']").each(function(){
		if($(this).is(":checked")){
			i++;
		}
	});
	if(i == 0){
		alert('请至少选择一个项目');
		return false;
	}
	$("#form_edit").submit();
}
</script>
</body>
</html>
<?php }} ?>
