<?php /* Smarty version Smarty-3.1.16, created on 2015-07-06 11:52:34
         compiled from "application/views/wdbb.html" */ ?>
<?php /*%%SmartyHeaderCode:12205663554a0e1735a2871-51803412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e3224d9983bc420c3b2d389011f0e8b4134184' => 
    array (
      0 => 'application/views/wdbb.html',
      1 => 1435891722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12205663554a0e1735a2871-51803412',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a0e1737b33b5_06745735',
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
<?php if ($_valid && !is_callable('content_54a0e1737b33b5_06745735')) {function content_54a0e1737b33b5_06745735($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/www/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_style.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/easydialog.css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_xzqdjl.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_common.css" rel="stylesheet" type="text/css">
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/easydialog.min.js"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_khjlgljm.css" rel="stylesheet" type="text/css"/>

<title>我的报备</title>
</head>
<body>
<div class="rtn"><a href="<?php echo smarty_function_site_url(array('url'=>'user'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/back.png" /></a></div>
<div class="top"><span class="span_centrer">我的报备</span></div>
<div class="add"><a href="<?php echo smarty_function_site_url(array('url'=>'user/wybb'),$_smarty_tpl);?>
"> 我要报备</a></div>
<div class="box_select">
	<form method="post" action="<?php echo smarty_function_site_url(array('url'=>'user/wdbb'),$_smarty_tpl);?>
">
		<select class="select1" name="project_id" onchange="get_search('1');">
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
  
    	<select name="status" class="select1"  onchange="get_search('1');">
	    	<option value="" >-请选择状态-</option>
	        <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='1') {?>selected='selected'<?php }?>>已报备</option>
	        <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='2') {?>selected='selected'<?php }?>>报备即将到期</option>
	        <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='3') {?>selected='selected'<?php }?>>已带看</option>
	        <option value="4" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='4') {?>selected='selected'<?php }?>>带看即将到期</option>
	        <option value="5" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='5') {?>selected='selected'<?php }?>>已签约</option>
	        <option value="-2" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='-2') {?>selected='selected'<?php }?>>已过期</option>
    	</select>
	</form>
</div>
<div class="bblb">
  <h1>报备列表</h1>
</div>

<div class="popup hd" id="remark">
  <div class="top_d">备注修改
    <div class="cls"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/cls1.png"/></a></div>
  </div>
  <div class="cntnt">
      <input name="remark" type="text" value="备注" onfocus="if(this.value=='备注'){this.value=''}" class="input1"/>
      <input type="hidden" name="r_id" value="">
      <input type="button"  class="input2" value="提交" onclick="save_bz();"/>
    <div class="clr"></div>
  </div>
</div>

<div class="popup hd" id="re_bb">
  <div class="top_d">报备至其它项目
    <div class="cls"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/cls1.png"/></a></div>
  </div>
  <div class="cntnt" style="font-size:16px;">
      <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
      <input type="checkbox" name="rbb_project[]" id="lab_<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" >
      <label for="lab_<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" style="line-height:20px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['project'];?>
</label><br />
      <?php } ?>
      <input type="hidden" name="rbb_id" value="">
      <input type="button"  class="input2" value="提交" onclick="save_re_bb();"/>
    <div class="clr"></div>
  </div>
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
  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='-2') {?><div class="icon_zt0"><b>已过期</b></div><?php }?>
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
	  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='5') {?>class="bar_zt5"<?php }?>
	  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='-2') {?>class="bar_zt0"<?php }?> >
  </div>
  <div class="zt"><span>已报备</span><span>即将到期</span><span>已带看</span><span>即将到期</span><span>已签约</span></div>
    
  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']!='5') {?><a href="javascript:del_bb('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');" class="qx"><b>删除</b></a><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='2') {?><a href="javascript:re_bb('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');" class="bbgl"><b>重新报备</b></a><?php }?>
  <a href="javascript:re_bz('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');" class="qx"><b>备注</b></a>
  <a href="javascript:other_bb('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
');" class="bbgl"><b>报备其它</b></a>
  <div class="clr"></div>
</div>
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
<?php echo $_smarty_tpl->getSubTemplate ("foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
	$('form').attr('action',"<?php echo smarty_function_site_url(array('url'=>'user/wdbb'),$_smarty_tpl);?>
"+"/" + page);
	$("form").submit();
}
var callFn = function(){
	get_search(<?php echo $_smarty_tpl->tpl_vars['data']->value['pageNum'];?>
);
};
function del_bb(id){
	if(confirm("确定删除吗？")){
		$.get("<?php echo smarty_function_site_url(array('url'=>'user/del_bb'),$_smarty_tpl);?>
/"+id,function(data){
			if(data == '1'){
					easyDialog.open({
						container : {
							content : '删除成功'
						},
						autoClose : 1000,
						callback : callFn
						
					});
			}
		});
	}
}

function re_bb(id){
	if(confirm("确定重新报备吗？")){
		$.get("<?php echo smarty_function_site_url(array('url'=>'user/re_bb'),$_smarty_tpl);?>
/"+id,function(data){
			if(data == '1'){
				easyDialog.open({
					container : {
						content : '报备成功'
					},
					autoClose : 1000,
					callback : callFn
					
				});
			}
		});
	}
}

function re_bz(id){
	$("[name='r_id']").val(id);
	$.get("<?php echo smarty_function_site_url(array('url'=>'user/get_bz'),$_smarty_tpl);?>
/"+id,function(data){
		$("[name='remark']").val(data);
		easyDialog.open({
			container : 'remark',
			fixed : true
		});
	});
}

function other_bb(id){
	$("[name='rbb_id']").val(id);
	easyDialog.open({
		container : 're_bb',
		fixed : true
	});
}

function save_bz(){
	id = $("[name='r_id']").val();
	remark = $("[name='remark']").val();
	$.post("<?php echo smarty_function_site_url(array('url'=>'user/save_bz'),$_smarty_tpl);?>
",{id:id,remark:remark},function(data){
		if(data == '1'){
			easyDialog.open({
				container : {
					content : '保存成功'
				},
				autoClose : 1000,
				callback : callFn
				
			});
		}else{
			easyDialog.open({
				container : {
					content : '系统错误'
				},
				autoClose : 1000,
				
			});
		}
	});
}

function save_re_bb(){
	id = $("[name='rbb_id']").val();

	var project_id = [];
	$("input[name='rbb_project[]']:checked").each(function (i, n) {
	    project_id.push(n.value);
	});

	
	$.post("<?php echo smarty_function_site_url(array('url'=>'user/save_re_bb'),$_smarty_tpl);?>
",{id:id,project_id:project_id},function(data){
		if(data == '1'){
			easyDialog.open({
				container : {
					content : '保存成功'
				},
				autoClose : 1000,
				callback : callFn
				
			});
		}else{
			easyDialog.open({
				container : {
					content : '系统错误'
				},
				autoClose : 1000,
				
			});
		}
	});
}


</script>
</body>

</html>
<?php }} ?>
