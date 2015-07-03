// 数组对象扩展
Array.isArray = Array.isArray || function(val) {
  return Object.prototype.toString.call(val) === '[object Array]';
};
Array.prototype.indexOf = Array.prototype.indexOf || function(val) {
  for (var i = 0, len = this.length; i < len; i++) {
    if (this[i] === val) {
      return i;
    }
  }
  return -1;
};

$(function() {
	//兼容IE的表单文本框和文本域placeholder效果
	$('input[placeholder], textarea[placeholder]').placeholder();
	
	//设定快速导航栏消息中心小图标
	//setTimeout(function(){
		//$('#hd .extra .ico-link a.msg i.count').fadeOut();
	//},5000);

});

// 全选
(function($){
    $.extend({
        checkAll: function(options){
            var defaultConfig = {
                allId: 'check-all',  //全选框id
                allRel: '',  //全选框rel属性
                itemRel: 'id',  //各项选框rel属性
				itemValuesId: 'ids',  //赋值对象的id
				separator: ','  //分隔符
            };
            var options = $.extend(defaultConfig, options);
            var allControl = (options.allRel == '') ? $('#' + options.allId) : $(':checkbox[rel="' + options.allRel + '"]');
			var itemValuesControl = $('#' + options.itemValuesId);
            allControl.each(function(){
                $(this).bind('click', function(){
                    var isChecked = !!$(this).attr('checked'); //全选和非全选
                    $(':checkbox[rel="' + options.itemRel + '"]').attr('checked', isChecked);
                    allControl.attr('checked', isChecked);
					getValues();
                });
            });

            $(':checkbox[rel="' + options.itemRel + '"]').each(function(index){
                $(this).bind('click', function(){
                    if(!$(this).attr('checked')) allControl.attr('checked', false); //单个取消选择时，取消全选框的选中状态
					else {
						var item_length = $(':checkbox[rel="' + options.itemRel + '"]').length,
						    check_length = $(':checkbox[rel="' + options.itemRel + '"]:checked').length;
						if(check_length == item_length) allControl.attr('checked', true); //单个选择时，判断是否全选了
					}
                    getValues();
                });
            });
			
            //将选中的复选框数据传给赋值对象			
			function getValues(){
				var checkedItems = $(':checkbox[rel="' + options.itemRel + '"]:checked'),
					itemValStr = '';
				for(var i=0; i<checkedItems.length; i++){
					itemValStr += checkedItems.eq(i).val() + options.separator;
				}
				itemValuesControl.val(itemValStr);
			}
        }
    });
})(jQuery);

// 浮动广告窗口
$.fixedAdWin = function(opts) { 
    if (! (this instanceof arguments.callee)) {
        return new arguments.callee(opts);
    }
    this.init.apply(this, arguments);
}
$.fixedAdWin.prototype = {
    constructor: $.fixedAdWin,
    init: function(opts) {
        var self = this,
            fixedRbWin = null,
            fixedRbWinHeight = 0;

        $.extend(this, {
            imgSrc: '', // 图片地址
            linkUrl: '', // 链接地址
            wrapClass: 'fixed-rb-win', // 窗口容器的class
            fixedPos: 'middle', // 窗口显示位置，rightBottom: 右下角，middle: 居中
            closeBtnClass: 'close' // 关闭按钮的class
        }, opts || {});

        this.show();
        this.closeWin();
        this.fixedForIE6();

        $(window).resize(function(){
            self.setPos();
        }); 
    },
    // 创建窗口
    creat: function() {
        this.fixedRbWin = $('<div class="' + this.wrapClass +'">' +
                              '<a href="javascript:;" class="' + this.closeBtnClass +'" title="关闭">&#10005;</a>' + 
                              '<a href="' + this.linkUrl +'" target="_blank"><img src="' + this.imgSrc +'"></a>' + 
                              '<iframe class="iframe-cover"></iframe>' +
                            '</div>');
        $('body').append(this.fixedRbWin);
    },
    // 设置窗口定位值
    setPos: function() {
        var fixedPos = this.fixedPos,
            fixedRbWin = this.fixedRbWin;

        var fixedRbWinHeight = fixedRbWin.outerHeight(true);
            this.fixedRbWinHeight = fixedRbWinHeight;
        
        switch(fixedPos) {
            case 'rightBottom':
                fixedRbWin.css({
                    'right': 0,
                    'bottom': 0
                });
                break;

            case 'middle':
                fixedRbWin.animate({
                    'left': ($(window).width() - fixedRbWin.outerWidth(true)) / 2,
                    'top': ($(window).height() - fixedRbWin.outerHeight(true)) / 2
                }, 500);
                break;

            default:
                break;
        }
    },
    // 显示窗口
    show: function() {
        this.creat();
        this.setPos();

        switch(this.fixedPos) {
            case 'rightBottom':
                this.fixedRbWin.show().css('height', 0).animate({'height': this.fixedRbWinHeight}, 500);
                break;

            case 'middle':
                this.fixedRbWin.show();
                break;

            default:
                break;
        }
    },
    // 兼容IE6滚动Fixed
    fixedForIE6: function() {
        var fixedPos = this.fixedPos,
            fixedRbWin = this.fixedRbWin;

        var ie6 = $.browser.msie && $.browser.version == '6.0';
        $(window).scroll(function(){
            if(ie6 && fixedRbWin.is(':visible')) {
                switch(fixedPos) {
                    case 'rightBottom':
                        fixedRbWin.css({
                            'position': 'absolute',
                            'bottom': 'auto',
                            'top': function() {
                                return $(window).scrollTop() + $(window).height() - fixedRbWin.outerHeight(true);
                            }
                        });
                        break;
                    case 'middle':
                        fixedRbWin.css({
                            'left': ($(window).width() - fixedRbWin.outerWidth(true)) / 2,
                            'top': function() {
                                return $(window).scrollTop() + ($(window).height() - fixedRbWin.outerHeight(true)) / 2;
                            }
                        });
                        break;
                    default:
                        break;
                }
            }
        });
    },
    // 关闭窗口
    closeWin: function() {
        var fixedRbWin = this.fixedRbWin;
        var fixedRbWinHeight = this.fixedRbWinHeight;
        var closeBtn = this.fixedRbWin.find('.' + this.closeBtnClass);
        var fixedPos = this.fixedPos;
        closeBtn.click(function() {
            if(fixedPos == 'rightBottom') {
                fixedRbWin.animate({'height': 0}, 500);
                setTimeout(function() {fixedRbWin.hide();}, 500);
            } else {
                fixedRbWin.fadeOut();
            }
            
        });
    }

}

/**
 *  AutoScrol自动滚动效果
 */

$.AutoScroll = function(opts) { 
    //如果在构造实例的时候忘了new,就重新实例化
    if (! (this instanceof arguments.callee)) {
        return new arguments.callee(opts);
    }
    //执行类似其他语言的初始化函数，利用apply指定上下文(context)为该实例，并且传入参数
    this.init.apply(this, arguments);
}

$.AutoScroll.prototype ={
    constructor: $.AutoScroll,
    init: function(opts) {
        var self=this;
        //配置属性
        $.extend(this, {
            wrap:null,
            selector:'>li', 
            scrollCount:1,
            dir:'v',              //滚动方向,'v'垂直,'h'水平
            interval:3000,
            fxTime:1000
        },opts || {});
        this.timer=null;
        this.run();
    },
    run:function (){
        var self=this,
            count=this.dir==='v'?'height':'width',
            m=self.dir==='v'?'marginTop':'marginLeft';
        self.wrap.hover(function (){
            clearInterval(self.timer);
            self.timer=null;
        },function (){
            self.timer=setInterval(function() {
                var scrollnum =parseFloat(self.wrap.find(self.selector+':first')[count]())*self.scrollCount,opt={};
                opt[m]=-scrollnum + 'px';
                self.wrap.animate(opt,self.fxTime,function() {
                    self.wrap.css(m,0).find(self.selector+':lt('+self.scrollCount+')').appendTo(self.wrap);
                });
            },self.interval);
        }).trigger('mouseleave');
    }
}
