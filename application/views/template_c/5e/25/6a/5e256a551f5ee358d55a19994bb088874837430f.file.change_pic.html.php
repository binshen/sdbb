<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 15:18:34
         compiled from "application/views/pc/change_pic.html" */ ?>
<?php /*%%SmartyHeaderCode:1616399978556eaa4a8aa610-46906695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e256a551f5ee358d55a19994bb088874837430f' => 
    array (
      0 => 'application/views/pc/change_pic.html',
      1 => 1433315275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1616399978556eaa4a8aa610-46906695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'pic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_556eaa4a927313_14711469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556eaa4a927313_14711469')) {function content_556eaa4a927313_14711469($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc_fm.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc_common.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/easydialog.css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/easydialog.min.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/swfobject.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/fullAvatarEditor.js"></script>
<style>
#swf {
    display: none;
}
</style>
<title>头像修改</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("pc/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000 bdr">
  <?php echo $_smarty_tpl->getSubTemplate ("pc/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="w800">
    <h1>我的房猫><span>头像修改</span></h1>
    <div class="txxg">
      <div class="txxg_l">
      
      <label style="height:auto;" ><span class="input-title">头像修改：</span>
	      <div id="swfContainer">本组件需要安装Flash Player后才可使用，请从<a href="http://www.adobe.com/go/getflashplayer">这里</a>下载安装。</div>
  		  
		  
	  </label>
      
      
      </div>
      <div class="f-cc">
	  	<input type="hidden" name="old_pic" value="$data.pic">
	  	<img  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
uploadfiles/head/s2_<?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
" id="view_pic"/>
	  </div>
	 <div class="f-cc">
	  	<a class="u-btn u-btn-c3" id="reupload" href="javascript:;">修改头像</a>
	  </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("pc/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script>
swfobject.addDomLoadEvent(function () {
	var swf = new fullAvatarEditor("fullAvatarEditor.swf", "expressInstall.swf", "swfContainer", {
			id : 'swf',
			upload_url : '<?php echo smarty_function_site_url(array('url'=>"login_pc/upload_pic"),$_smarty_tpl);?>
',
			method : 'post',
			src_upload : 0,
			avatar_scale : 2,
		}, function (msg) {
			switch(msg.code)
			{
				case 1 : break;
				case 2 : 
					document.getElementById("upload").style.display = "inline";
					break;
				case 3 :
					break;
				case 5 : 
					if(msg.type == 0)
					{
						$("#head_pic").val(msg.content.pic);
						$("#swf").css("display","none");
						$("#reupload").css("display","block");
						$("#reupload").html("修改图片");
						src = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
uploadfiles/head/s1_'+msg.content.pic;
						$("#view_pic").attr('src',src);
						$("#view_pic").css("display","block");
					}
				break;
			}
		}
	);
	document.getElementById("upload").onclick=function(){
		swf.call("upload");
	};
});

$("#reupload").click(function(){
	$("#swf").css("display","block");
	$("#view_pic").css("display","none");
	$("#reupload").css("display","none");
});
</script>
</body>
</html>
<?php }} ?>
