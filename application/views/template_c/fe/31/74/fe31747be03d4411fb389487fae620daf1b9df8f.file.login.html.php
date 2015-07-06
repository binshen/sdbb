<?php /* Smarty version Smarty-3.1.16, created on 2015-07-06 11:32:26
         compiled from "application/views/login.html" */ ?>
<?php /*%%SmartyHeaderCode:57222866954a0024edbf855-29179730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe31747be03d4411fb389487fae620daf1b9df8f' => 
    array (
      0 => 'application/views/login.html',
      1 => 1435891722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57222866954a0024edbf855-29179730',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a0024ee05bb3_74451227',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a0024ee05bb3_74451227')) {function content_54a0024ee05bb3_74451227($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/www/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable = no' name='viewport'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/reg1.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<title>会员登录 -房猫经纪人触屏版</title>
</head>
<style>html, body {
background-color: #eee;
color: #333;
font-size: 14px;
-webkit-text-size-adjust: none;
}</style>
<body>
<div id="tbh5v0" class="login">
    <header class="c-nav">
            <div class="c-nav-w">
              <div class="c-nav-s">
                <a class="c-btn c-btn-aw" href="<?php echo smarty_function_site_url(array('url'=>'index'),$_smarty_tpl);?>
">返回</a>
              </div>
              <div class="c-nav-c">
                <span class="omit">用户登录</span>
              </div>
              <div class="c-nav-e">
                
              </div>
            </div>
        </header>
     
<section class="innercontent">

            <form method="post" class="c-form login-form" id="J_Register" action="<?php echo smarty_function_site_url(array('url'=>'login/check_login'),$_smarty_tpl);?>
">
                <fieldset>
                    <div class="field username">
                        <div class="c-form-search st">
                            <input type="text" id="J_UserNameTxt" placeholder="账号/手机" value="" class="c-f-text" name="name"/><span></span></button>
                        </div>
                        <div class="tips"></div>
                    </div>
                    <div class="field pwd">
                        <div class="ptxt st">
                            <input id="J_PassWordTxt" type="password"  name="passwd"value="" placeholder="密码" class="c-f-text"/>
                            
                        </div>
                         <div class="tips"></div>
                    </div>

                    <div class="field identifyCode">
                        
                        <div class="tips"></div>
                    </div>

                    <div class="field submit-btn">
                        <input type="button" class="c-btn-orange" onclick="$('form').submit();" value="登录"/>
                        </div>
                        
<div class="field login-option">
                        <span class="reg-find-pwd">
           
                                                        <!--<a href="forget_password.html" class="forget-pwd" target="_top" data-spm-anchor-id="0.0.0.0">修改密码</a>
                                                    --></span>
                    </div>

                </fieldset>
            </form>
</section>

<div id="J_um_mob" class="none"><img src="https://ynuf.alipay.com/dc.htm?token=Ta60f9f1944e56061da6f416d6d8e92a91416549443927&amp;jsInfo=1360%7C667%7C1360%7C728%7C-%7C-%7C-%7C-%7C-%7C-%7C-" width="0" height="0" frameborder="0"></div>
<script type="text/javascript">
(function(host) {
   var properties = ['innerWidth', 'innerHeight', 'outerWidth', 'outerHeight', 'screenX', 'screenY', 'availWidth', 'availHeight', 'colorDepth', 'width', 'height'],
      values = [];

   for(var i = 0, len = properties.length; i < len; i++) {
      var p = properties[i];
      values.push(host[p] || '-');
   }
   var method = host.encodeURIComponent || host.escape;
   param = method(values.join('|'));     
   var render ="https://ynuf.alipay.com/dc.htm?token=Ta60f9f1944e56061da6f416d6d8e92a91416549443927";
   if(navigator.userAgent.indexOf('AppleWebKit') > 0 && navigator.vendor && navigator.vendor.indexOf('Apple') !== -1) {     
      render = "https://ynuf.alipay.com/la.htm?token=Ta60f9f1944e56061da6f416d6d8e92a91416549443927";   
   }      
   var url=render+"&jsInfo="+param; 
   if(navigator.userAgent.indexOf('AppleWebKit') > 0 && navigator.vendor && navigator.vendor.indexOf('Apple') !== -1) {  
   document.getElementById('J_um_mob').innerHTML = '<iframe src='+url+' width="0" height="0" frameborder="0"/>';
   }else{
   document.getElementById('J_um_mob').innerHTML = '<img src='+url+' width="0" height="0" frameborder="0"/>';
   }
})(this);
</script>


    </div>

</body>
</html>
<?php }} ?>
