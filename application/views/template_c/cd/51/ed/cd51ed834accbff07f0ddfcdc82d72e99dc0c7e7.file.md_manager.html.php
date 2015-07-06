<?php /* Smarty version Smarty-3.1.16, created on 2015-07-03 10:00:17
         compiled from "application/views/pc/md_manager.html" */ ?>
<?php /*%%SmartyHeaderCode:57681635595ecb12cdcd8-39543834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd51ed834accbff07f0ddfcdc82d72e99dc0c7e7' => 
    array (
      0 => 'application/views/pc/md_manager.html',
      1 => 1433315275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57681635595ecb12cdcd8-39543834',
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
  'unifunc' => 'content_5595ecb142cbb9_71812254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5595ecb142cbb9_71812254')) {function content_5595ecb142cbb9_71812254($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
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
<title>门店经理-业务员列表</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("pc/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="box_win w454" style="display:none;" id="edit_ywy">
  <div class="bar3 bg"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/blank.png"  /></a>修改密码</div>
  <div class="bdr1" style="background-color:#fff;" >
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'md_manager/save_ywy'),$_smarty_tpl);?>
" id="form_edit">
      <p>姓名:<input name="rel_name" type="text" class="input1" placeholder="请输入姓名(*)" required/><input name='id' type="hidden" class="input1" /></p>
      <p>手机:<input name="username" type="text" class="input1" placeholder="请输入手机(*)" required/></p>
  <a class="qd2 bg"  href="javascript:save_ywy_edit();">确  定</a>
    </form>
</div>
</div>



<div class="w1000 bdr">
  <?php echo $_smarty_tpl->getSubTemplate ("pc/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="w800">
    <h1>我的房猫><span>业务员列表</span></h1>
    <p class="nm"><?php echo $_smarty_tpl->tpl_vars['rel_name']->value;?>
<span>(<?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='1') {?>管理员<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='2') {?>客服经理<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='3') {?>业务员<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='4') {?>外联经理<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='5') {?>门店经理<?php }?>)</span></p>
    <p class="zbb"><a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/add_ywy'),$_smarty_tpl);?>
">新增业务员</a>总报备： <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['bb_count'];?>
</span> |  总带看： <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['dk_count'];?>
</span> |  总成交: <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['qy_count'];?>
</span> </p>
    <div class="box1">
      <h2>业务员列表</h2>
      <table border="0" class="table1">
        <tr >
          <th scope="col">业务员姓名</th>
          <th scope="col">电话号码</th>
          <th scope="col">邀请码</th>
          <th class="w150" scope="col" >操作</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['res_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
        <tr <?php if ((1 & $_smarty_tpl->tpl_vars['k']->value)) {?>class="grey_bg"<?php }?>>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['rel_name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['yqm'];?>
</td>
          <td><a href="javascript:edit_ywy('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/blank.png"  class="cz_img bg" style='background-position:-582px -62px'/></a></td>
        </tr>
        <?php } ?>
        
      </table>
    </div>
   	<?php if ($_smarty_tpl->tpl_vars['data']->value['res_list']) {?>
	<div class="page">
		<?php if ($_smarty_tpl->tpl_vars['data']->value['pageNum']<$_smarty_tpl->tpl_vars['data']->value['total_page']) {?><a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/index'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum']+1;?>
" class="pg3 bg">下一页</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['max_p']<$_smarty_tpl->tpl_vars['data']->value['total_page']) {?>
		<a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/index'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['total_page'];?>
" class="pg2 bg"><?php echo $_smarty_tpl->tpl_vars['data']->value['total_page'];?>
</a>
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
		<a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/index'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
"  class="pg2 bg "><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a>
		<?php }?>
		<?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['min_p']>1) {?>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['min_p']>2) {?>
		<span>...</span>
		<?php }?>
		<a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/index'),$_smarty_tpl);?>
/1" class="pg2 bg">1</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['pageNum']>1) {?><a href="<?php echo smarty_function_site_url(array('url'=>'md_manager_pc/index'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum']-1;?>
" class="pg3 bg">上一页</a><?php }?>
	</div>
	<?php }?>
  </div>
  <div class="clr"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("pc/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script>
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
</script>

<script>
/* www.51-n.com 原创代码 qQ:229256237
 * 检测浏览器是否支持 placeholder 属性
 * 为不支持 placeholder 属性的浏览器写兼容代码
 * 注意，需要 placeholder 的表单控件不要写value属性。
 * 本代码只操作 input 控件，如果需要支持其他控件请自己修改代码
 * 下面对 required 属性的操作同理。
*/        
var testElement=document.createElement('input');
var placeholderSupported='placeholder' in testElement;
if(!placeholderSupported){
        var inputs=document.getElementsByTagName('input');
        for(var n=0;n<inputs.length;n++){
                var input=inputs[n];
                var placeholder=input.placeholder?input.placeholder:input.getAttribute('placeholder');
                //部分浏览器不支持直接操作自定义属性，用 getAttribute() 来获取自定义属性。
                if(!placeholder) continue;
                input.value=placeholder;
                input.onfocus=function(){
                        if(this.value==this.getAttribute('placeholder')){
                                this.value='';
                        }
                };
                input.onmouseover=function(){
                        this.focus();
                }
                input.onblur=function(){
                        if(this.value==''){
                                this.value=this.getAttribute('placeholder');
                        }
                }
        }
}else{
        var inputs=document.getElementsByTagName('input');                
        for(var n=0;n<inputs.length;n++){
                inputs[n].onmouseover=function(){
                        this.focus();
                }
        }
}
/* 检测浏览器是否支持 required 属性
 * 为不支持 required 属性的浏览器写兼容代码
*/                
var requiredSupported='required' in testElement&&!/Version\/[\d\.]+\s*Safari/i.test(navigator.userAgent);
if(!requiredSupported){
        document.getElementsByTagName('form')[0].onsubmit=function(e){
                var inputs=document.getElementsByTagName('input');
                for(var n=0;n<inputs.length;n++){
                        var input=inputs[n];
                        var placeholder=input.placeholder?input.placeholder:input.getAttribute('placeholder');                                        
                        if(!placeholder) continue;
                        if(!input.value||(input.value==placeholder)){
                                alert('请填写'+placeholder);
                                e=e||window.event;
                                e.preventDefault&&e.preventDefault();
                                e.returnValue=false;
                                break;
                        }
                }
        };
}
</script>
</body>
</html>
<?php }} ?>
