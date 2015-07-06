<?php /* Smarty version Smarty-3.1.16, created on 2015-07-03 10:29:48
         compiled from "application/views/pc/add_company.html" */ ?>
<?php /*%%SmartyHeaderCode:19395737195595f39c9095e5-54405596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '007eb7d8262701b85cfa5476def36c1ee4c38797' => 
    array (
      0 => 'application/views/pc/add_company.html',
      1 => 1433315275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19395737195595f39c9095e5-54405596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'rel_name' => 0,
    'admin_group' => 0,
    'all_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5595f39c9a7676_14924131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5595f39c9a7676_14924131')) {function content_5595f39c9a7676_14924131($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
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
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/easydialog.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/easydialog.css"/>
<style>
.tj{ background-position: -420px -111px;
    color: #fff;
    display: block;
    font-weight: bold;
    line-height: 42px;
    margin: 60px 140px;
    text-align: center;
    width: 151px;}
</style>
<title>新建公司</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("pc/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000 bdr">
  <?php echo $_smarty_tpl->getSubTemplate ("pc/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="w800">
    <p class="nm"><?php echo $_smarty_tpl->tpl_vars['rel_name']->value;?>
<span>(<?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='1') {?>管理员<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='2') {?>客服经理<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='3') {?>业务员<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='4') {?>外联经理<?php }?><?php if ($_smarty_tpl->tpl_vars['admin_group']->value=='5') {?>门店经理<?php }?>)</span></p>
    <p class="zbb"><a href="<?php echo smarty_function_site_url(array('url'=>'wl_manager_pc/index'),$_smarty_tpl);?>
">签约公司</a>总报备： <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['bb_count'];?>
</span> |  总带看： <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['dk_count'];?>
</span> |  总成交: <span><?php echo $_smarty_tpl->tpl_vars['all_count']->value['qy_count'];?>
</span> </p>
    <div class="box1">
      <h3>新建公司</h3>
      <div class="xzxm_r bg">
        <h3>超便捷</h3>
        <p>只需输入购房者信息</p>
        <h3>真服务</h3>
        <p style="margin-bottom:40px;">诚及时为推荐购房者买到理想房子，让你顺利拿到佣金。</p>
        <h3>高透明</h3>
        <p>平台实时记录客户购房进度供您查询，买房过程的每一步都会短信及时通知。佣金活得全在掌握中。</p>
      </div>
      <form method="post" action="<?php echo smarty_function_site_url(array('url'=>'wl_manager_pc/save_company'),$_smarty_tpl);?>
">
      <div class="xzxm">
        <p>
          <input class="bg" name="company_name" type="text" placeholder="请输入公司名称(*)" required/>
          公司名称： </p>
        <p>
          <input class="bg" name="rel_name" type="text" placeholder="请输入对接经理(*)" required/>
          对接经理： </p>
        <p>
          <input class="bg" name="username" type="text" placeholder="请输入手机号码(*)" required/>
          手机号码： </p>
        <p>
          <input class="bg" style=" width:430px" name="address" type="text" placeholder="请输入公司地址" />
        </p>
        <p>
          <input class="bg" style=" width:430px" name="tel" type="text"  placeholder="请输入联系电话"  />
        </p>
        <p>
          <input class="bg" style=" width:430px" name="zhanghu" type="text"  placeholder="请输入公司账户(*)"  />
        </p>
        <p>
          <input class="bg" style=" width:430px" name="guimo" type="text" placeholder="请输入公司规模(*)"  />
        </p>
        <button type="submit" class="tj bg">提 交</button>
        </div>
        </form>
      <div class="clr"></div>
    </div>
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
</body>
</html>
<?php }} ?>
