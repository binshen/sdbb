<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 15:16:49
         compiled from "application/views/pc/qdjlgl.html" */ ?>
<?php /*%%SmartyHeaderCode:706524596556ea9e11ca0d9-97478950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fba102d00bda9af2b45bca58769f1484de4cf85d' => 
    array (
      0 => 'application/views/pc/qdjlgl.html',
      1 => 1433315275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '706524596556ea9e11ca0d9-97478950',
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
  'unifunc' => 'content_556ea9e1296679_33944414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556ea9e1296679_33944414')) {function content_556ea9e1296679_33944414($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc_fm.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc_popup.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc_common.css" rel="stylesheet" type="text/css"/>

<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/easydialog.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/easydialog.css"/>
<title>渠道经理管理</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("pc/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="box_win w454" style="display:none;" id="add_qdjl">
  <div class="bar3 bg"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/blank.png"  /></a>修改渠道经理</div>
  <div class="bdr1" style="background-color:#fff;" >
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin_pc/save_qdjl'),$_smarty_tpl);?>
" id="form_add">
      <p>姓名:<input id="rel_name" name="rel_name" type="text"  required="required" />
      	<input name='id' type="hidden" class="input1" /></p>
      <p>手机:<input id="username" name="username" type="text" required/></p>
  <a class="qd2 bg"  href="javascript:save_qdjl();">确  定</a>
    </form>
</div>
</div>


<div class="w1000 bdr">
  <?php echo $_smarty_tpl->getSubTemplate ("pc/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="w800">
    <h1>我的房猫><span>渠道经理管理</span></h1>
    <p class="nm"><?php echo $_smarty_tpl->tpl_vars['rel_name']->value;?>
<span>(<?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='1') {?>管理员<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='2') {?>客服经理<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='3') {?>业务员<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='4') {?>外联经理<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='5') {?>门店经理<?php }?>)</span></p>
    <p class="zbb"><a href="<?php echo smarty_function_site_url(array('url'=>'admin_pc/add_qdjl'),$_smarty_tpl);?>
">新建渠道经理</a>  总报备： <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['bb_count'];?>
</span> |  总带看： <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['dk_count'];?>
</span> |  总成交: <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['qy_count'];?>
</span></p>
    <div class="box1">
      <h2>客户经理列表</h2>
      <table border="0" class="table1">
        <tr>
          <th scope="col">渠道经理姓名</th>
          <th scope="col">电话号码</th>
          <th class="w150" scope="col" >操作</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
        <tr <?php if ((1 & $_smarty_tpl->tpl_vars['k']->value)) {?>class="grey_bg"<?php }?>>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['rel_name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
          <td><a href="javascript:edit_qdjl('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/blank.png"  class="cz_img bg" style='background-position:-582px -62px'/></a></td>
        </tr>
        <?php } ?>
        
      </table>
    </div>
  </div>
  <div class="clr"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("pc/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script>
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

function save_qdjl(){
	if(!$("[name='rel_name']").val() ){
		alert('请输入姓名！');
		return;
	}
	if(!$("[name='username']").val()){
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
</script>
</body>
</html>
<?php }} ?>
