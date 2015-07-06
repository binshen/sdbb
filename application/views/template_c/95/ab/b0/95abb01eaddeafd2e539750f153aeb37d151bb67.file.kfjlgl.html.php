<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 16:35:03
         compiled from "application/views/pc/kfjlgl.html" */ ?>
<?php /*%%SmartyHeaderCode:87619585556ea9dd967fe8-07769047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95abb01eaddeafd2e539750f153aeb37d151bb67' => 
    array (
      0 => 'application/views/pc/kfjlgl.html',
      1 => 1433320501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87619585556ea9dd967fe8-07769047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_556ea9dda66318_74700581',
  'variables' => 
  array (
    'base_url' => 0,
    'projects' => 0,
    'row' => 0,
    'rel_name' => 0,
    'admin_group' => 0,
    'all_count' => 0,
    'data' => 0,
    'roww' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556ea9dda66318_74700581')) {function content_556ea9dda66318_74700581($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
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
<title>客服经理管理</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("pc/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="box_win w454" style="display:none;" id="edit_kfjl">
  <div class="bar3 bg"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/blank.png"  /></a>修改客服经理</div>
  <div class="bdr1" style="background-color:#fff;" >
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin_pc/save_kfjl'),$_smarty_tpl);?>
" id="form_edit">
      <p>姓名:<input id="rel_name" type="text" class="input1" readonly/>
      	<input name='id' type="hidden" class="input1" /></p>
      <p>手机:<input id="username" type="text" class="input1" readonly/></p>
      <p><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
      <input type="checkbox" name='project_id[]' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"/><?php echo $_smarty_tpl->tpl_vars['row']->value['project'];?>
<br/>
      <?php } ?></p>
      
  <a class="qd2 bg"  href="javascript:save_kfjl_edit();">确  定</a>
    </form>
</div>
</div>


<div class="w1000 bdr">
  <?php echo $_smarty_tpl->getSubTemplate ("pc/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="w800">
    <h1>我的房猫><span>客服经理管理</span></h1>
    <p class="nm"><?php echo $_smarty_tpl->tpl_vars['rel_name']->value;?>
<span>(<?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='1') {?>管理员<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='2') {?>客服经理<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='3') {?>业务员<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='4') {?>外联经理<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='5') {?>门店经理<?php }?>)</span></p>
    <p class="zbb"><a href="<?php echo smarty_function_site_url(array('url'=>'admin_pc/add_kfjl'),$_smarty_tpl);?>
">新建客服经理</a>  总报备： <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['bb_count'];?>
</span> |  总带看： <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['dk_count'];?>
</span> |  总成交: <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['qy_count'];?>
</span></p>
    <div class="box1">
      <h2>客户经理列表</h2>
      <table border="0" class="table1">
        <tr>
          <th scope="col">客服经理姓名</th>
          <th scope="col">电话号码</th>
          <th class="w150" scope="col" >操作</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
        <tr <?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index'])) {?>class="grey_bg"<?php }?>>
          <td><a href="javascript:detail('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
')"  class="blue_txt"><?php echo $_smarty_tpl->tpl_vars['row']->value['rel_name'];?>
</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
          <td><a href="javascript:edit_kfjl('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/blank.png"  class="cz_img bg" style='background-position:-582px -62px'/></a></td>
          <td>
          <div class="box_win w550" style="display:none" id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
			<div class="bar2 bg"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/blank.png"  /></a>负责项目</div>
			<div class="bdr1" style="background-color:#fff;">
			<div class="content_l">
			<?php  $_smarty_tpl->tpl_vars['roww'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roww']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['project']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['roww']->key => $_smarty_tpl->tpl_vars['roww']->value) {
$_smarty_tpl->tpl_vars['roww']->_loop = true;
?>
			  <p><?php echo $_smarty_tpl->tpl_vars['roww']->value['project_name'];?>
</p>
			<?php } ?>
			</div>
			<a class="qd2 bg" href="javascript:easyDialog.close();">确 定</a>
			</div>
			</div>
			</td>
          
        </tr>
        <?php } ?>
        
      </table>
    </div>
  </div>
  <div class="clr"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("pc/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script>
function detail(id){
	easyDialog.open({
		container : id,
		fixed : true
	});
}

function edit_kfjl(id){
	$.getJSON("<?php echo smarty_function_site_url(array('url'=>'admin_pc/get_kfjl'),$_smarty_tpl);?>
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
