<?php /* Smarty version Smarty-3.1.16, created on 2015-07-03 09:19:28
         compiled from "application/views/qy_company.html" */ ?>
<?php /*%%SmartyHeaderCode:163036276754a0c809147194-65352703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '268ffc192958aba945f001f2914b29aba4e7c045' => 
    array (
      0 => 'application/views/qy_company.html',
      1 => 1433321790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163036276754a0c809147194-65352703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a0c80920d956_19290860',
  'variables' => 
  array (
    'base_url' => 0,
    'list' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a0c80920d956_19290860')) {function content_54a0c80920d956_19290860($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_khjlgljm.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_xzqdjl.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_common.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/easydialog.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/easydialog.css"/>
<title>渠道经理管理界面</title>
</head>
<body>

<div class="popup hd" id="add_company">
  <div class="top_d">新增公司
    <div class="cls"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/cls1.png"/></a></div>
  </div>
  <div class="cntnt">
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'wl_manager/save_company'),$_smarty_tpl);?>
" id="form_add">
      <input name="company_name" type="text" value="公司名称(*)" onfocus="if(this.value=='公司名称(*)'){this.value=''}" onblur="if(this.value==''){this.value='公司名称(*)'}" class="input1"/>
      <input name="rel_name" type="text" value="公司对接经理(*)" onfocus="if(this.value=='公司对接经理(*)'){this.value=''}" onblur="if(this.value==''){this.value='公司对接经理(*)'}" class="input1"/>
      <input name="username" type="text" value="手机号码(*)" onfocus="if(this.value=='手机号码(*)'){this.value=''}" onblur="if(this.value==''){this.value='手机号码(*)'}" class="input1"/>
      <input name="address" type="text" value="公司地址" onfocus="if(this.value=='公司地址'){this.value=''}" onblur="if(this.value==''){this.value='公司地址'}" class="input1"/>
      <input name="tel" type="text" value="联系固话" onfocus="if(this.value=='联系固话'){this.value=''}" onblur="if(this.value==''){this.value='联系固话'}" class="input1"/>
      <input name="zhanghu" type="text" value="公司账户" onfocus="if(this.value=='公司账户'){this.value=''}" onblur="if(this.value==''){this.value='公司账户'}" class="input1"/>
      <input name="guimo" type="text" value="公司规模" onfocus="if(this.value=='公司规模'){this.value=''}" onblur="if(this.value==''){this.value='公司规模'}" class="input1"/>
      
      <input type="button"  class="input2" value="提交" onclick="save_company();"/>
    <div class="clr"></div>
  </form>
  </div>
</div>

<div class="popup hd" id="edit_company">
  <div class="top_d">修改公司
    <div class="cls"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/cls1.png"/></a></div>
  </div>
  <div class="cntnt">
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'wl_manager/save_company'),$_smarty_tpl);?>
" id="form_edit">
      <input name="company_name" type="text" value="公司名称(*)" onfocus="if(this.value=='公司名称(*)'){this.value=''}" onblur="if(this.value==''){this.value='公司名称(*)'}" class="input1"/>
      <input name="rel_name" type="text" value="公司对接经理(*)" onfocus="if(this.value=='公司对接经理(*)'){this.value=''}" onblur="if(this.value==''){this.value='公司对接经理(*)'}" class="input1"/>
      <input name="username" type="text" value="手机号码(*)" onfocus="if(this.value=='手机号码(*)'){this.value=''}" onblur="if(this.value==''){this.value='手机号码(*)'}" class="input1"/>
      <input name="address" type="text" value="公司地址" onfocus="if(this.value=='公司地址'){this.value=''}" onblur="if(this.value==''){this.value='公司地址'}" class="input1"/>
      <input name="tel" type="text" value="联系固话" onfocus="if(this.value=='联系固话'){this.value=''}" onblur="if(this.value==''){this.value='联系固话'}" class="input1"/>
      <input name="zhanghu" type="text" value="公司账户" onfocus="if(this.value=='公司账户'){this.value=''}" onblur="if(this.value==''){this.value='公司账户'}" class="input1"/>
      <input name="guimo" type="text" value="公司规模" onfocus="if(this.value=='公司规模'){this.value=''}" onblur="if(this.value==''){this.value='公司规模'}" class="input1"/>
      <input type="hidden" name="id" />
      <input type="button"  class="input2" value="提交" onclick="save_company_edit();"/>
    <div class="clr"></div>
  </form>
  </div>
</div>


<div class="rtn"><a href="<?php echo smarty_function_site_url(array('url'=>'wl_manager'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/back.png" /></a></div>
<div class="top">签约公司管理</div>
<div class="add"><a href="javascript:add_company();"> 新建公司</a></div>
<div class="qdjlzlb">渠道经理签约公司列表</div>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<div class="qygslb" onclick="s_h_menu(this)"><div class="arr_b4"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/arr_b3.png"/></a></div><?php echo $_smarty_tpl->tpl_vars['row']->value['company_name'];?>
</div>
  <ul class="xm hd">
	<li>联系人：<?php echo $_smarty_tpl->tpl_vars['row']->value['rel_name'];?>
</li>
	<li>联系人手机：<?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
</li>
	<li>公司邀请码：<?php echo $_smarty_tpl->tpl_vars['row']->value['yqm'];?>
</li>
	<li>公司地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
</li>
	<li>公司固话<?php echo $_smarty_tpl->tpl_vars['row']->value['tel'];?>
</li>
	<li>公司账户<?php echo $_smarty_tpl->tpl_vars['row']->value['zhanghu'];?>
</li>
	<li>公司规模：<?php echo $_smarty_tpl->tpl_vars['row']->value['guimo'];?>
</li>
	</ul>
<div class="scjl hd"><a href="javascript:edit_company('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');">修改 </a></div>
<?php } ?>



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

function add_company(){
	$("#add_company input").each(function(){
		if($(this).val() == ''){
			$(this).val($(this).get(0).defaultValue);
		}
	});
	easyDialog.open({
		container : 'add_company',
		fixed : false
	});
}

function edit_company(id){
	$.getJSON("<?php echo smarty_function_site_url(array('url'=>'wl_manager/get_company'),$_smarty_tpl);?>
/"+id,function(data){
		$("#edit_company [name='company_name']").val(data.company_name);
		$("#edit_company [name='rel_name']").val(data.rel_name);
		$("#edit_company [name='username']").val(data.username);
		$("#edit_company [name='address']").val(data.address);
		$("#edit_company [name='tel']").val(data.tel);
		$("#edit_company [name='zhanghu']").val(data.zhanghu);
		$("#edit_company [name='guimo']").val(data.guimo);
		$("#edit_company [name='id']").val(data.id);

		$("#edit_company input").each(function(){
			if($(this).val() == ''){
				$(this).val($(this).get(0).defaultValue);
			}
		});
		easyDialog.open({
			container : 'edit_company',
			fixed : false
		});

		
	});

}
function save_company(){
	if(!$("#add_company [name='company_name']").val() || $("#add_company [name='company_name']").val() =='公司名称(*)'){
		alert('请输入公司名称！');
		return;
	}
	if(!$("#add_company [name='rel_name']").val() || $("#add_company [name='rel_name']").val() =='公司对接经理(*)'){
		alert('请输入对接经理！');
		return;
	}
	if(!$("#add_company [name='username']").val() || $("#add_company [name='username']").val() =='手机号码'){
		alert('请输入手机号码！');
		return;
	}
	var re = /^1\d{10}$/;
	if (!re.test($("#add_company [name='username']").val())) {
		alert('手机号码格式错误！');
		return false;
	}
	$("#form_add").submit();
}

function save_company_edit(){
	if(!$("#edit_company [name='company_name']").val() || $("#edit_company [name='company_name']").val() =='公司名称(*)'){
		alert('请输入公司名称！');
		return;
	}
	if(!$("#edit_company [name='rel_name']").val() || $("#edit_company [name='rel_name']").val() =='公司对接经理(*)'){
		alert('请输入对接经理！');
		return;
	}
	if(!$("#edit_company [name='username']").val() || $("#edit_company [name='username']").val() =='手机号码'){
		alert('请输入手机号码！');
		return;
	}
	var re = /^1\d{10}$/;
	if (!re.test($("#edit_company [name='username']").val())) {
		alert('手机号码格式错误！');
		return false;
	}
	$("#form_edit").submit();
}
</script>
</body>
</html>
<?php }} ?>
