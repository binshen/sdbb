<?php /* Smarty version Smarty-3.1.16, created on 2015-07-03 09:25:18
         compiled from "application/views/wybb.html" */ ?>
<?php /*%%SmartyHeaderCode:76300625554a016113831b0-15558965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86bcb2fc8ed6068cc5dd4c7d26123a0c87c66998' => 
    array (
      0 => 'application/views/wybb.html',
      1 => 1433310370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76300625554a016113831b0-15558965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a016113f6103_28681939',
  'variables' => 
  array (
    'base_url' => 0,
    'projects' => 0,
    'row' => 0,
    'project_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a016113f6103_28681939')) {function content_54a016113f6103_28681939($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable = no' name='viewport'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/reg.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/report.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/easydialog.css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/easydialog.min.js"></script>
<title>报备 -房猫经纪人触屏版</title>
</head>

<body>
<div id="naver" class="login">
	<header class="c-nav">
	<div class="c-nav-w">
		<div class="c-nav-s">
			<a class="c-btn c-btn-aw" href="<?php echo smarty_function_site_url(array('url'=>'user'),$_smarty_tpl);?>
">返回</a>
		</div>
		<div class="c-nav-c">
			<span class="omit">我要报备</span>
		</div>
	</div>
	</header>
	<div data-role="content" class="ui-content">
		<div class="container width90 pt20">
		<form method="post" action="<?php echo smarty_function_site_url(array('url'=>'user/save_bb'),$_smarty_tpl);?>
">
				<ul class="search-group unstyled">
		
					<li>
					<div class="coupon-nav coupon-nav-style">
						<span class="search-icon location-icon"></span>
						<span class="coupon-label">选择项目：</span>
						<div class="select1">
							<select style="border:0px;background-color:transparent;width: 310px; padding-left: 60px;" name="k_project" id="k_project">
							    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['project_id']->value==$_smarty_tpl->tpl_vars['row']->value['id']) {?>selected='selected'<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['project'];?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
					</li>
					<li>
					<div class="coupon-nav coupon-nav-style">
						<span class="search-icon time-icon"></span>
						<span class="coupon-label">客户来源：</span>
						
						<div class="select1">
							<select style="border:0px;background-color:transparent;width: 310px; padding-left: 60px;" name="k_target" id="k_target">
							    <option value="网络">网络</option>
								<option value="派单">派单</option>
								<option value="朋友介绍">朋友介绍</option>
								<option value="电销">电销</option>
								<option value="其它">其它</option>
							</select>
						</div>
						
						
					</div>
					</li>
					<li>
					<div class="coupon-nav coupon-nav-style">
						<span class="search-icon time-icon"></span>
						<span class="coupon-label">客户性别：</span>
						
						<div class="select1">
							<select style="border:0px;background-color:transparent;width: 310px; padding-left: 60px;" name="k_sex" id="k_sex">
							    <option value="先生">先生</option>
								<option value="女士">女士</option>
							</select>
						</div>
						
						
					</div>
					<div data-role="fieldcontain" class="ui-hide-label no-field-separator div_input ui-field-contain ui-body ui-br">
						<label for="k_name" class="ui-input-text">客户姓名 (*)</label><input id="k_name" name="k_name" placeholder="请输入客户的姓名(*)" class="required ui-input-text ui-body-c ui-corner-all ui-shadow-inset" autocomplete="off">
					</div>
					<div data-role="fieldcontain" class="ui-hide-label no-field-separator div_input ui-field-contain ui-body ui-br">
						<label for="k_phone" class="ui-input-text">客户手机(*)</label><input id="k_phone" name="k_phone" placeholder="请输入客户的手机(*)" class="required ui-input-text ui-body-c ui-corner-all ui-shadow-inset">
					</div>
					<div data-role="fieldcontain" class="ui-hide-label no-field-separator div_input ui-field-contain ui-body ui-br">
						<label for="k_idno" class="ui-input-text">身份证</label><input id="k_idno" name="k_idno" placeholder="请输入客户的身份证" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset">
					</div>
					<div data-role="fieldcontain" class="ui-hide-label no-field-separator div_input ui-field-contain ui-body ui-br">
						<label for="k_remark" class="ui-input-text">备注</label><textarea cols="40" rows="8" id="k_remark" name="k_remark" placeholder="请输入客户的备注" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset"></textarea>
					</div>
					</li>
				</ul>
				
				<div class="control-group tc">
					<button class="btn-large orange button width80" style="padding-left:0px;padding-right: 0px;" id="btnOK" onclick="return check_input();">提交</button>
				</div>
			</form>
		</div>
	</div>
	
	
</div>
<script>
function check_input(){
	if(!$("#k_name").val()){
		easyDialog.open({
			container : {
				content : '客户姓名不能为空'
			},
			autoClose : 2000,
			
		});
		return false;
	}
	if(!$("#k_phone").val()){
		easyDialog.open({
			container : {
				content : '客户电话不能为空'
			},
			autoClose : 2000,
			
		});
		return false;
	}else{
		var re = /^1\d{10}$/;
		if (!re.test($("#k_phone").val())) {
			easyDialog.open({
				container : {
					content : '电话填写错误'
				},
				autoClose : 2000,
				
			});
			return false;
		} 
					
	}

}
</script>

</body>
</html><?php }} ?>
