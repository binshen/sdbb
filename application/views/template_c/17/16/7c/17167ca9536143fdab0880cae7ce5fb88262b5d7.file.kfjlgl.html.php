<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 17:16:01
         compiled from "application/views/kfjlgl.html" */ ?>
<?php /*%%SmartyHeaderCode:155226441954a00ac34ffa15-18674571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17167ca9536143fdab0880cae7ce5fb88262b5d7' => 
    array (
      0 => 'application/views/kfjlgl.html',
      1 => 1433321511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155226441954a00ac34ffa15-18674571',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a00ac35c58a7_09839309',
  'variables' => 
  array (
    'base_url' => 0,
    'projects' => 0,
    'row' => 0,
    'data' => 0,
    'roww' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a00ac35c58a7_09839309')) {function content_54a00ac35c58a7_09839309($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
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
<title>客户经理管理</title>
</head>
<body>


<div class="popup hd" id="add_kfjl">
  <div class="top_d">添加客服经理
    <div class="cls"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/cls1.png"/></a></div>
  </div>
  <div class="cntnt">
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/save_kfjl'),$_smarty_tpl);?>
" id="form_add">
      <input name="rel_name" type="text" value="姓名" onfocus="if(this.value=='姓名'){this.value=''}" class="input1"/>
      <input name="username" type="text" value="手机号码" onfocus="if(this.value=='手机号码'){this.value=''}" class="input1"/>
      <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
      <input type="checkbox" name='project_id[]' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"/><?php echo $_smarty_tpl->tpl_vars['row']->value['project'];?>
<br />
      <?php } ?>
      <input type="button"  class="input2" value="提交" onclick="save_kfjl();"/>
    <div class="clr"></div>
  </form>
  </div>
</div>


<div class="popup hd" id="edit_kfjl">
  <div class="top_d">修改客服经理
    <div class="cls"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/cls1.png"/></a></div>
  </div>
  <div class="cntnt">
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/save_kfjl'),$_smarty_tpl);?>
" id="form_edit">
      <input id="rel_name" type="text" class="input1" readonly/>
      <input id="username" type="text" class="input1" readonly/>
      <input name='id' type="hidden" class="input1" />
      <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
      <input type="checkbox" name='project_id[]' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"/><?php echo $_smarty_tpl->tpl_vars['row']->value['project'];?>
<br />
      <?php } ?>
      <input type="button"  class="input2" value="提交" onclick="save_kfjl_edit();"/>
    <div class="clr"></div>
  </form>
  </div>
</div>




<div class="rtn"><a href="<?php echo smarty_function_site_url(array('url'=>'admin'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/back.png" /></a></div>
<div class="top">客服经理管理</div>
<div class="add"><a href="javascript:add_kfjl();"> 新建客服经理</a></div>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<a href="javascript:;" onclick="s_h_menu(this)"><div class="jllb"><div class="arr_b4"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/arr_b3.png"/></div><span class="spancss2" style="text-indent:27px" ><?php echo $_smarty_tpl->tpl_vars['row']->value['rel_name'];?>
</span><span class="spancss2" > <?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</span> </div></a>
	<ul class="xm hd">
	<?php  $_smarty_tpl->tpl_vars['roww'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roww']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['project']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['roww']->key => $_smarty_tpl->tpl_vars['roww']->value) {
$_smarty_tpl->tpl_vars['roww']->_loop = true;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['roww']->value['project_name'];?>
</li>
	<?php } ?>
	</ul>
	<div class="scjl hd"><a href="javascript:edit_kfjl('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');">修改经理 </a></div>
<?php } ?>
<script>
function s_h_menu(obj){
	if(!$(obj).next().is(":hidden")){
		$(obj).next().slideUp(300);
	}else{
		$(".xx").hide();
		$(obj).next().slideDown(300);
	}
}


function add_kfjl(id){
	easyDialog.open({
		container : 'add_kfjl',
		fixed : false
	});
}

function save_kfjl(){
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
	var i = 0;
	$("#add_kfjl [name='project_id[]']").each(function(){
		if($(this).is(":checked")){
			i++;
		}
	});
	if(i == 0){
		alert('请至少选择一个项目');
		return false;
	}
	$("#form_add").submit();
}

function edit_kfjl(id){
	$.getJSON("<?php echo smarty_function_site_url(array('url'=>'admin/get_kfjl'),$_smarty_tpl);?>
/"+id,function(data){
		$("[name='id']").val(data.id);
		$("#username").val(data.username);
		$("#rel_name").val(data.rel_name);
		$("[name='project_id[]']").each(function(){
			if($.inArray($(this).val(),data.list) >= 0){
				$(this).attr("checked","checked");
			}
		});
		easyDialog.open({
			container : 'edit_kfjl',
			fixed : false
		});
	});
}

function save_kfjl_edit(){
	var i = 0;
	$("#edit_kfjl [name='project_id[]']").each(function(){
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
