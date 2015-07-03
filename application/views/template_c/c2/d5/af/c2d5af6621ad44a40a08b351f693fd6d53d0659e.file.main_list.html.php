<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 15:16:54
         compiled from "application/views/pc/main_list.html" */ ?>
<?php /*%%SmartyHeaderCode:61285161556ea9e673c0f5-85128181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2d5af6621ad44a40a08b351f693fd6d53d0659e' => 
    array (
      0 => 'application/views/pc/main_list.html',
      1 => 1433315275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61285161556ea9e673c0f5-85128181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'rel_name' => 0,
    'admin_group' => 0,
    'all_count' => 0,
    'projects' => 0,
    'row' => 0,
    'data' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_556ea9e6a8e072_01469800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556ea9e6a8e072_01469800')) {function content_556ea9e6a8e072_01469800($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
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
<title>我的房猫</title>
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
      <h3>我的客户状态</h3>
      <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'kf_manager_pc/index'),$_smarty_tpl);?>
">
      <div class="xzxm" style="margin:10px 110px; width:520px" >
        <p>
          <select class="bg" style="width:400px" name="project_id" onchange="get_search('1');">
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
          选择项目： </p>
        <p>

        <select name="status" class="bg" style="width:400px"   onchange="get_search('1');">
	    	<option value="" >-请选择状态-</option>
	        <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='1') {?>selected='selected'<?php }?>>已报备</option>
	        <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='2') {?>selected='selected'<?php }?>>报备即将到期</option>
	        <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='3') {?>selected='selected'<?php }?>>已带看</option>
	        <option value="4" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='4') {?>selected='selected'<?php }?>>带看即将到期</option>
	        <option value="5" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='5') {?>selected='selected'<?php }?>>已签约</option>
	        <option value="-2" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='-2') {?>selected='selected'<?php }?>>已过期</option>
    	</select>
          选择状态： </p>
      </div>
      </form>
      <table border="0" class="table2">
        <tr>
          <th scope="col">姓 名</th>
          <th scope="col">电话号码</th>
          <th scope="col" >状 态</th>
          <th scope="col" >所属项目</th>
          <th scope="col" >创建时间</th>
          <th scope="col" class="w150" >业务员</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['res_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
        <tr <?php if ((1 & $_smarty_tpl->tpl_vars['k']->value)) {?>class="grey_bg"<?php }?>>
          <td ><a href="javascript:detail('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
')"  class="blue_txt"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
</td>
          <td>
		  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='1') {?>已报备<?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='2') {?>即将到期<?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='3') {?>已带看<?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='4') {?>即将到期<?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='5') {?>已签约<?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='-2') {?>已过期<?php }?>
		</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['project'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cdate'];?>
</td>
          <td>
          <?php echo $_smarty_tpl->tpl_vars['row']->value['ywy_name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['row']->value['ywy_phone'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['yqm'];?>

          </td>
          <td>
          <div class="box_win w550" style="display:none" id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
			<div class="bar2 bg"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/blank.png"  /></a>状态确认</div>
			<div class="bdr1" style="background-color:#fff;">
			  <div class="content_r"><p>手机号码：<?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>

			    </p>
			    <p>创建时间：<?php echo $_smarty_tpl->tpl_vars['row']->value['cdate'];?>
</p>
			    <p>所属项目：<?php echo $_smarty_tpl->tpl_vars['row']->value['project'];?>
</p>
			    <p>客户性别：<?php echo $_smarty_tpl->tpl_vars['row']->value['sex'];?>
</p>
			  </div>
			<div class="content_l">
			  <p>客       户：<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</p>
			  <p>业务员:<?php echo $_smarty_tpl->tpl_vars['row']->value['ywy_name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['row']->value['ywy_phone'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['yqm'];?>
</p>
			  <p>状态：<?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='1') {?>已报备<?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='2') {?>即将到期<?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='3') {?>已带看<?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='4') {?>即将到期<?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='5') {?>已签约<?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='-2') {?>已过期<?php }?></p>
			  <p>客户来源：<?php echo $_smarty_tpl->tpl_vars['row']->value['target'];?>
</p>
			  <p>身份证号：<?php echo $_smarty_tpl->tpl_vars['row']->value['idno'];?>
</p>
			  <p>备 注：<?php echo $_smarty_tpl->tpl_vars['row']->value['remark'];?>
</p>
			</div>
			<a class="qd2 bg" href="javascript:easyDialog.close();">确 定</a>
			</div>
			</div>
			</td>
        </tr>
        <?php } ?>
        
      </table>
    </div>

    
	<?php if ($_smarty_tpl->tpl_vars['data']->value['res_list']) {?>
	<div class="page">
		<?php if ($_smarty_tpl->tpl_vars['data']->value['pageNum']<$_smarty_tpl->tpl_vars['data']->value['total_page']) {?>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='4') {?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'wl_manager_pc/main_list'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum']+1;?>
" class="pg3 bg">下一页</a>
			<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='5') {?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/main_list'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum']+1;?>
" class="pg3 bg">下一页</a>
			<?php } else { ?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'admin_pc/main_list'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum']+1;?>
" class="pg3 bg">下一页</a>
			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['max_p']<$_smarty_tpl->tpl_vars['data']->value['total_page']) {?>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='4') {?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'wl_manager_pc/main_list'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['total_page'];?>
" class="pg2 bg"><?php echo $_smarty_tpl->tpl_vars['data']->value['total_page'];?>
</a>
			<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='5') {?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/main_list'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['total_page'];?>
" class="pg2 bg"><?php echo $_smarty_tpl->tpl_vars['data']->value['total_page'];?>
</a>
			<?php } else { ?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'admin_pc/main_list'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['total_page'];?>
" class="pg2 bg"><?php echo $_smarty_tpl->tpl_vars['data']->value['total_page'];?>
</a>
			<?php }?>
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
			<?php if ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='4') {?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'wl_manager_pc/main_list'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" class="pg2 bg"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a>
			<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='5') {?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/main_list'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" class="pg2 bg"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a>
			<?php } else { ?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'admin_pc/main_list'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" class="pg2 bg"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a>
			<?php }?>
		<?php }?>
		<?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['min_p']>1) {?>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['min_p']>2) {?>
		<span>...</span>
		<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='4') {?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'wl_manager_pc/main_list'),$_smarty_tpl);?>
/1" class="pg2 bg">1</a>
			<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='5') {?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/main_list'),$_smarty_tpl);?>
/1" class="pg2 bg">1</a>
			<?php } else { ?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'admin_pc/main_list'),$_smarty_tpl);?>
/1" class="pg2 bg">1</a>
			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['pageNum']>1) {?>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='4') {?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'wl_manager_pc/main_list'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum']-1;?>
" class="pg3 bg">上一页</a>
			<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='5') {?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/main_list'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum']-1;?>
" class="pg3 bg">上一页</a>
			<?php } else { ?>
			<a href="<?php echo smarty_function_site_url(array('url'=>'admin_pc/main_list'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum']-1;?>
" class="pg3 bg">上一页</a>
			<?php }?>
		<?php }?>
	</div>
	<?php }?>
    
    
    
  </div>
  <div class="clr"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("pc/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>


function get_search(page){
	<?php if ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='4') {?>
	$('form').attr('action',"<?php echo smarty_function_site_url(array('url'=>'wl_manager_pc/main_list'),$_smarty_tpl);?>
"+"/" + page);
	<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['admin_group']=='5') {?>
	$('form').attr('action',"<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/main_list'),$_smarty_tpl);?>
"+"/" + page);
	<?php } else { ?>
	$('form').attr('action',"<?php echo smarty_function_site_url(array('url'=>'admin_pc/main_list'),$_smarty_tpl);?>
"+"/" + page);
	<?php }?>
	$("form").submit();
	$("form").submit();
}


var callFn = function(){
	get_search(<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum'];?>
);
};



function detail(id){
	easyDialog.open({
		container : id,
		fixed : true
	});
}


</script>
</body>
</html>
<?php }} ?>
