<?php /* Smarty version Smarty-3.1.16, created on 2015-06-03 14:13:41
         compiled from "application/views/news.html" */ ?>
<?php /*%%SmartyHeaderCode:52346520454a00a2f73e386-08783230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9c1d6278708ab06c43772695e762ddd05af5b92' => 
    array (
      0 => 'application/views/news.html',
      1 => 1433310361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52346520454a00a2f73e386-08783230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a00a2f77ea07_46412831',
  'variables' => 
  array (
    'base_url' => 0,
    'total_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a00a2f77ea07_46412831')) {function content_54a00a2f77ea07_46412831($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/var/www/html/sdbb/application/libraries/smarty/plugins/function.site_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_lpxq.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/hh_common.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery-v1.10.2.min.js" type="text/javascript"></script>
<title>动态</title>
<style>
a.qx {
    background: url("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/bg.png") no-repeat scroll 0 -193px rgba(0, 0, 0, 0);
    color: #333;
    font-size: 12px;
    padding: 5px 10px 4px;
    margin-left:8px;
    text-decoration: none;
}
.pic_box{
   position:relative;
   width:100%;
   height:auto;
   overflow:hidden
   }
.pic_img{
   position:relative;
   width:100%;
   height:auto;
   overflow:hidden;
   float:left;
   list-style-type:none;
   margin:0px;
   padding:0px;
   margin-left: -4%;
   }
 .pic_img li{
  float:left;
  width:28%;
  height: auto;
  margin-left:4%;
  overflow:hidden;
  background:#006666;
  margin-top:10px
  }
 .pic_img li img{
  max-width:100%
  }
.box_show{
     display:none;
    position:fixed;
	width:100%;
	height:100%;
	z-index:100;
	}
.box_open{
	width:100%;
	height:100%;
	background:#000000;
	opacity:0.75
	}
.box_img{
    position:absolute;
	width:80%;
	top:10%;
	left:10%;
	height:auto;
	overflow:hidden;
	border:0px solid #CCCCCC;
	border-radius:10px;
   -websit-border-radius:10px;
   -moz-border-radius:10px;
   -o-border-radius:10px;
   }
.box_img img{
   max-width:100%
   }
.main_news{
  padding-bottom:30px
  }
</style>
</head>
<body>

<div class="top">动 态</div>
<input type="hidden" name="page" value="1" autocomplete="off"/>
<div class="main_news">



</div>


<div class="zzjz"></div>
<!--<div class="zzjz">正在加载...</div>-->
<?php echo $_smarty_tpl->getSubTemplate ("foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script>
$(document).ready(function(){
	get_news('1');	
});
function get_news(page){
	$.getJSON("<?php echo smarty_function_site_url(array('url'=>'news/list_news'),$_smarty_tpl);?>
/"+page,function(data){
		html = '';
		if(data){
			$.each(data,function(i,item){
				html += '<div class="fmxb"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/blank.png"  class="fmxb_img"/><h2>房猫小编</h2><span>管理员</span><p>'+item.content+'</p><p>'+item.cdate+'</span></p><div class="pic_box"><div class="box_show"><div class="box_open"></div><div class="box_img"><img src="images/bg_share.jpg"></div></div><ul class="pic_img"><li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/sinn.jpg"></li><li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/sinn.jpg"></li><li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/sinn.jpg"></li><li><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/sinn.jpg"></li></ul></div></div>';
				if(item.comment){
					html += '<div class="mz">';
					$.each(item.comment,function(ii,itemm){
						html += '<span>'+itemm.rel_name+'</span>';
					});
					html += '</div>';

					
					$.each(item.comment,function(ii,itemm){
						html += '<p class="ly">';
						html += '<span>'+itemm.rel_name+':</span>'+itemm.comment;
						html += '</p>'
					});
					
				}
				html += '<div class="slj"><input name="" type="text" placeholder="我来说两句" class="input1"/><a class="qx" href="javascript:;" onclick="save_comment('+item.id+',this);"><b>评论</b></a></div>';
			});
			
			$(".main_news").append(html);
			
			
		}

	});
}
$(function(){     
	var winH = $(window).height(); //页面可视区域高度    
	 var i = 1; //设置当前页数     
	 $(window).scroll(function () {
		 var pageH = $(document.body).height();         
		 var scrollT = $(window).scrollTop(); //滚动条top         
		 var aa = (pageH-winH-scrollT)/winH;         
		 if(aa<0.02){   
			 
			 if(parseInt($("[name='page']").val()) < <?php echo $_smarty_tpl->tpl_vars['total_page']->value;?>
){
				 page = parseInt($("[name='page']").val()) + 1;
				 $("[name='page']").val(page);
				 get_news(page);
			}
			 
		 }     
		  }); 
	  }); 

function save_comment(id,obj){
	comment = $(obj).parent().find('.input1').val();
	if(!comment){
		alert("请输入评论内容");
		return;
	}
	$.post("<?php echo smarty_function_site_url(array('url'=>'news/save_comment'),$_smarty_tpl);?>
",{head_id:id,comment:comment},function(data){
		if(data == '-1'){
			alert('请先登陆');
		}else if(data == '1'){
			alert('提交成功');
			location.reload();
		}else{
			alert('系统繁忙');
		}
	});
}
</script>
</body>
</html>
<?php }} ?>
