<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 15:18:33
         compiled from "application/views/pc/aqzx.html" */ ?>
<?php /*%%SmartyHeaderCode:1833586302556eaa4926ac03-30856392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da853826631f60f8a6099f525751ef49e951ebd4' => 
    array (
      0 => 'application/views/pc/aqzx.html',
      1 => 1433315275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1833586302556eaa4926ac03-30856392',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'pic' => 0,
    'rel_name' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_556eaa4930f7a5_16953579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556eaa4930f7a5_16953579')) {function content_556eaa4930f7a5_16953579($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc_fm.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc_popup.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/pc_common.css" rel="stylesheet" type="text/css"/>

<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/easydialog.css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/easydialog.min.js"></script>
<title>个人中心</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("pc/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="box_win w454" style="display:none;" id="change_pwd">
  <div class="bar3 bg"><a href="javascript:easyDialog.close();"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/blank.png"  /></a>修改密码</div>
  <div class="bdr1" style="background-color:#fff;">
  <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'login_pc/change_pwd'),$_smarty_tpl);?>
">
  <P style="margin-left:30px">修改密码关系到您的帐号安全</P>
  <p>旧的密码：
    <input  class="bg" name="passwd" type="text" placeholder="请输入旧密码(*)" required/>
  </p>
  <p>新的密码：
    <input class="bg" name="new_passwd" type="text" placeholder="请输入新密码(*)" required/>
  </p>
  <p>确定密码：
    <input class="bg" name="re_passwd" type="text" placeholder="请再次输入新密码(*)" required/>
  </p>
  <a class="qd2 bg"  href="javascript:save_change_pwd();">确  定</a>
  <h4>* 默认密码为888888。<br />
    * 请勿随意泄露密码，以防被不法分子利用，骗取帐号信息。</h4>
    </form>
</div>
</div>


<div class="w1000 bdr">
  <?php echo $_smarty_tpl->getSubTemplate ("pc/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="w800">
    <h1>我的房猫><span>个人中心</span></h1>
    <div class="aqzx">
      <div class="xgtx"><a href="<?php echo smarty_function_site_url(array('url'=>'login_pc/change_pic'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
uploadfiles/head/s2_<?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
" /> 修改头像 </a></div>
      <p>姓 名：<?php echo $_smarty_tpl->tpl_vars['rel_name']->value;?>
</p>
      <p>手机号码：<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
　</p>
      <div class="clr"></div>
    </div>
    <p class="zhaq">账户安全</p>
    <p class="rzsj bg">认证手机<span><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span></p>
    <p class="ggmm bg">更改密码<span>修改密码关系到您的帐号安全</span> <a href="javascript:;" id="open_change_pwd">更改密码</a></p>
  </div>
  <div class="clr"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("pc/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
<script>
$("#open_change_pwd").click(function(){
	easyDialog.open({
		container : 'change_pwd',
		fixed : true
	});
});

function save_change_pwd(){
	if(!$("[name='passwd']").val() || $("[name='passwd']").val() =='原密码(*)'){
		alert('请输入原密码！');
		return;
	}
	if(!$("[name='new_passwd']").val() || $("[name='new_passwd']").val() =='新密码(*)'){
		alert('请输入新密码！');
		return;
	}
	if(!$("[name='re_passwd']").val() || $("[name='re_passwd']").val() =='再次输入新密码(*)'){
		alert('请再次输入新密码！');
		return;
	}
	if($("[name='new_passwd']").val() != $("[name='re_passwd']").val()){
		alert('两次输入的密码不一致！');
		return;
	}
	$('form').submit();
	
}

</script>
</body>
</html>
<?php }} ?>
