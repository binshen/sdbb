/* =================================================
// jQuery  common Plugins 1.0
// author:fangdd.com
// date:2011-8-9
// =================================================*/
;
(function($){
    $.fn.extend({
        switchFocus:function(){   //文本框聚焦、失焦移除和恢复文字插件
            var $this = $(this);
            var dValue = $this.attr("placeholder");
            //兼容两个时期写法，日后应统一将dvalue属性改写成placeholder
            if( null == dValue )dValue = $this.attr("dvalue");
            if( null == dValue )dValue = this.defaultValue;
            $this.focus(function(){
                if( this.value == dValue )this.value = '';
            }).blur(function(){
                if( this.value == '' )this.value = dValue;
            });
            return $this;
        }
        ,
        chkAll:function(s){   //全选
            var selector=$(s), _self= $(this)[0];
            if(selector.length==0)return;
            $(this).click(function(){
                selector.each(function(i){
                    this.checked=_self.checked;
                });
            })
        }
        ,
        chkReverse:function(s){   //反选
            var selector=$(s), _self= $(this)[0];
            if(selector.length==0)return;
            $(this).click(function(){
                if(_self.checked){
                    selector.each(function(i){
                        this.checked=! this.checked;
                    });
                }
            })
        }
        ,
        star:function(){   //评分
            $(this).click(function(){
                var $elm = $(this);
                var rating_id = $elm.parent().attr("id");
                //后台评分处理
                $.ajax({
                    "type": "post",
                    "url": site_url+"/",
                    "data": {
                        "mod": "house", 
                        "app": "point", 
                        "act": "sub", 
                        "id": rating_id
                    },
                    "dataType": "json",
                    "success": function(msg) {
                        var title = $elm.attr("title");
                        var cl = $elm.parent().attr("class");
                        $elm.parent().parent().removeClass().addClass("rating "+cl+"star");
                        $elm.blur();
                        $elm.parent().parent().next("b,em").html(title);
                    }
                });                
                return false;
            })
        }
        ,
        popup:function(opts){
            opts=$.extend({
                target:null,              //弹出层
                close:null,                //关闭按钮
                position:"b",            //相对触发层的位置 l左  r右 t上 b下 默认值为b
                offsetX:0,                 // 水平偏移  默认值为0
                offsetY:0,                 // 垂直偏移  默认值为0
                isAnim:false,            //弹出时是否需要动画效果  默认值为false
                anim:"show",           //弹出时的动画效果  默认值为"show"
                speed:400                //动画效果执行时间 默认值为400
            },opts);
            var _self= $(this);
            $(this).click(function(){
                if(opts.target==null) return;
                var $target=$(opts.target),
                offset = _self.offset(),
                w=_self.outerWidth(),
                h=_self.outerHeight(),
                x=y=0;
                switch(opts.position){
                    case "l":
                        x=offset.left-$target.outerWidth()-opts.offsetX;
                        y=offset.top-opts.offsetY;
                        break
                    case "r":
                        x=offset.left+w+opts.offsetX;
                        y=offset.top-opts.offsetY;
                        break
                    case "t":
                        x=offset.left-opts.offsetX;
                        y=offset.top-$target.outerHeight()-opts.offsetY;
                        break
                    case "b":
                    default:
                        x=offset.left+opts.offsetX;
                        y=offset.top+h+opts.offsetY;
                }
                if ($target.is(':hidden')) {
                    $target.css({
                        "position":"absolute",
                        "z-index":9999,
                        "left":x,
                        "top":y
                    });
                    opts.isAnim && $target[opts.anim](opts.speed);
                    (!opts.isAnim) &&  $target.show();
                }
                else{
                    $target.hide();
                }
            })
            $(opts.close) && $(opts.close).click(function (){
                $(opts.target).hide()
            });
        }
        ,
        tabs:function(options){  //选项卡插件
            options = $.extend({
                event : 'click',			  //默认事件
                timeout : 0,			      //延迟时间
                auto : 0,                       //是否自动切换
                callback : null              //回调函数
            }, options);
            var self = $(this),tabBox = self.children( 'div.tab-box' ).children( 'div' ),menu = self.children( '.tab-menu' ),items = menu.find( 'li' ),timer;
            var tabHandle = function( elem ){
                elem.siblings( 'li' ).removeClass( 'current' ).end().addClass( 'current' );
                tabBox.siblings( 'div' ).addClass( 'hide' ).end().eq( elem.index() ).removeClass( 'hide' );
            },
            delay = function( elem, time ){
                time ?
                setTimeout(function(){
                    tabHandle( elem );
                    if( options.callback )options.callback( self )
                }, time) :
                (function (){
                    tabHandle( elem );
                    if( options.callback )options.callback( self )
                })()
            },
            start = function(){
                if( !options.auto ) return;
                timer = setInterval( autoRun, options.auto );
            },
            autoRun = function(){
                var current = menu.find( 'li.current' ),firstItem = items.eq(0),len = items.length,index = current.index() + 1,item = index === len ? firstItem : current.next( 'li' ),i = index === len ? 0 : index;
                current.removeClass( 'current' );
                item.addClass( 'current' );
                tabBox.siblings( 'div' ).addClass( 'hide' ).end().eq(i).removeClass( 'hide' );
            };
            items.bind( options.event, function(){
                delay( $(this), options.timeout );

            });
            if( options.auto ){
                start();
                self.hover(function(){
                    clearInterval( timer );
                    timer = undefined;
                },function(){
                    start();
                });
            }
            return this;
        }
        ,
        strlen:function(value)
        {
            var length = value.length;
            for(var i = 0; i < value.length; i++)
            {
                if(value.charCodeAt(i) > 127)
                {
                    length++;
                }
            }
            return length;
        }
    });
    $.fn.lazyload = function(options) {
        var settings = {
            threshold: 0,
            failurelimit: 0,
            event: "scroll",
            effect: "show",
            container: window
        };
        if (options) $.extend(settings, options);
        var elements = this;
        if ("scroll" == settings.event) $(settings.container).bind("scroll",
            function(event) {
                var counter = 0;
                elements.each(function() {
                    if ($.abovethetop(this, settings) || $.leftofbegin(this, settings));
                    else if (!$.belowthefold(this, settings) && !$.rightoffold(this, settings)) {
                        $(this).trigger("appear")
                    } else if (counter++>settings.failurelimit) return false
                });
                var temp = $.grep(elements,
                    function(element) {
                        return ! element.loaded
                    });
                elements = $(temp)
            });
        this.each(function() {
            var self = this;
            if (undefined == $(self).attr("original")) $(self).attr("original", $(self).attr("src"));
            if ("scroll" != settings.event || undefined == $(self).attr("src") || settings.placeholder == $(self).attr("src") || ($.abovethetop(self, settings) || $.leftofbegin(self, settings) || $.belowthefold(self, settings) || $.rightoffold(self, settings))) {
                if (settings.placeholder) {
                    $(self).attr("src", settings.placeholder)
                } else $(self).removeAttr("src");
                self.loaded = false
            } else self.loaded = true;
            $(self).one("appear",
                function() {
                    if (!this.loaded) $("<img />").bind("load",
                        function() {
                            $(self).hide().attr("src", $(self).attr("original"))[settings.effect](settings.effectspeed);
                            self.loaded = true
                        }).attr("src", $(self).attr("original"))
                });
            if ("scroll" != settings.event) $(self).bind(settings.event,
                function(event) {
                    if (!self.loaded) $(self).trigger("appear")
                })
        });
        $(settings.container).trigger(settings.event);
        return this
    };
    $.belowthefold = function(element, settings) {
        if (settings.container === undefined || settings.container === window) {
            var fold = $(window).height() + $(window).scrollTop()
        } else var fold = $(settings.container).offset().top + $(settings.container).height();
        return fold <= $(element).offset().top - settings.threshold
    };
    $.rightoffold = function(element, settings) {
        if (settings.container === undefined || settings.container === window) {
            var fold = $(window).width() + $(window).scrollLeft()
        } else var fold = $(settings.container).offset().left + $(settings.container).width();
        return fold <= $(element).offset().left - settings.threshold
    };
    $.abovethetop = function(element, settings) {
        if (settings.container === undefined || settings.container === window) {
            var fold = $(window).scrollTop()
        } else var fold = $(settings.container).offset().top;
        return fold >= $(element).offset().top + settings.threshold + $(element).height()
    };
    $.leftofbegin = function(element, settings) {
        if (settings.container === undefined || settings.container === window) {
            var fold = $(window).scrollLeft()
        } else var fold = $(settings.container).offset().left;
        return fold >= $(element).offset().left + settings.threshold + $(element).width()
    };
    $.extend($.expr[':'], {
        "below-the-fold": "$.belowthefold(a, {threshold : 0, container: window})",
        "above-the-fold": "!$.belowthefold(a, {threshold : 0, container: window})",
        "right-of-fold": "$.rightoffold(a, {threshold : 0, container: window})",
        "left-of-fold": "!$.rightoffold(a, {threshold : 0, container: window})"
    })
    /**
	 * $ is an alias to jQuery object
	 *
	 */
    $.fn.lightBox = function(settings) {
        // Settings to configure the jQuery lightBox plugin how you like
        settings = jQuery.extend({
            // Configuration related to overlay
            overlayBgColor: 		'#000',		// (string) Background color to overlay; inform a hexadecimal value like: #RRGGBB. Where RR, GG, and BB are the hexadecimal values for the red, green, and blue values of the color.
            overlayOpacity:			0.8,		// (integer) Opacity value to overlay; inform: 0.X. Where X are number from 0 to 9
            // Configuration related to navigation
            fixedNavigation:		false,		// (boolean) Boolean that informs if the navigation (next and prev button) will be fixed or not in the interface.
            // Configuration related to images
            imageLoading:			'/themes/default_l/images/lightbox-ico-loading.gif',		// (string) Path and the name of the loading icon
            imageBtnPrev:			'/themes/default_l/images/lightbox-btn-prev.gif',			// (string) Path and the name of the prev button image
            imageBtnNext:			'/themes/default_l/images/lightbox-btn-next.gif',			// (string) Path and the name of the next button image
            imageBtnClose:			'/themes/default_l/images/lightbox-btn-close.gif',		// (string) Path and the name of the close btn
            imageBlank:				'/themes/default_l/images/lightbox-blank.gif',			// (string) Path and the name of a blank image (one pixel)
            // Configuration related to container image box
            containerBorderSize:	10,			// (integer) If you adjust the padding in the CSS for the container, #lightbox-container-image-box, you will need to update this value
            containerResizeSpeed:	400,		// (integer) Specify the resize duration of container image. These number are miliseconds. 400 is default.
            // Configuration related to texts in caption. For example: Image 2 of 8. You can alter either "Image" and "of" texts.
            txtImage:				'Image',	// (string) Specify text "Image"
            txtOf:					'of',		// (string) Specify text "of"
            // Configuration related to keyboard navigation
            keyToClose:				'c',		// (string) (c = close) Letter to close the jQuery lightBox interface. Beyond this letter, the letter X and the SCAPE key is used to.
            keyToPrev:				'p',		// (string) (p = previous) Letter to show the previous image
            keyToNext:				'n',		// (string) (n = next) Letter to show the next image.
            // Don磘 alter these variables in any way
            imageArray:				[],
            activeImage:			0
        },settings);
        // Caching the jQuery object with all elements matched
        var jQueryMatchedObj = this; // This, in this context, refer to jQuery object
        /**
		 * Initializing the plugin calling the start function
		 *
		 * @return boolean false
		 */
        function _initialize() {
            _start(this,jQueryMatchedObj); // This, in this context, refer to object (link) which the user have clicked
            return false; // Avoid the browser following the link
        }
        /**
		 * Start the jQuery lightBox plugin
		 *
		 * @param object objClicked The object (link) whick the user have clicked
		 * @param object jQueryMatchedObj The jQuery object with all elements matched
		 */
        function _start(objClicked,jQueryMatchedObj) {
            // Hime some elements to avoid conflict with overlay in IE. These elements appear above the overlay.
            $('embed, object, select').css({
                'visibility' : 'hidden'
            });
            // Call the function to create the markup structure; style some elements; assign events in some elements.
            _set_interface();
            // Unset total images in imageArray
            settings.imageArray.length = 0;
            // Unset image active information
            settings.activeImage = 0;
            // We have an image set? Or just an image? Let磗 see it.
            if ( jQueryMatchedObj.length == 1 ) {
                settings.imageArray.push(new Array(objClicked.getAttribute('href'),objClicked.getAttribute('title')));
            } else {
                // Add an Array (as many as we have), with href and title atributes, inside the Array that storage the images references
                for ( var i = 0; i < jQueryMatchedObj.length; i++ ) {
                    settings.imageArray.push(new Array(jQueryMatchedObj[i].getAttribute('href'),jQueryMatchedObj[i].getAttribute('title')));
                }
            }
            while ( settings.imageArray[settings.activeImage][0] != objClicked.getAttribute('href') ) {
                settings.activeImage++;
            }
            // Call the function that prepares image exibition
            _set_image_to_view();
        }
        /**
		 * Create the jQuery lightBox plugin interface
		 *
		 * The HTML markup will be like that:
			<div id="jquery-overlay"></div>
			<div id="jquery-lightbox">
				<div id="lightbox-container-image-box">
					<div id="lightbox-container-image">
						<img src="../fotos/XX.jpg" id="lightbox-image">
						<div id="lightbox-nav">
							<a href="#" id="lightbox-nav-btnPrev"></a>
							<a href="#" id="lightbox-nav-btnNext"></a>
						</div>
						<div id="lightbox-loading">
							<a href="#" id="lightbox-loading-link">
								<img src="../images/lightbox-ico-loading.gif">
							</a>
						</div>
					</div>
				</div>
				<div id="lightbox-container-image-data-box">
					<div id="lightbox-container-image-data">
						<div id="lightbox-image-details">
							<span id="lightbox-image-details-caption"></span>
							<span id="lightbox-image-details-currentNumber"></span>
						</div>
						<div id="lightbox-secNav">
							<a href="#" id="lightbox-secNav-btnClose">
								<img src="../images/lightbox-btn-close.gif">
							</a>
						</div>
					</div>
				</div>
			</div>
		 *
		 */
        function _set_interface() {
            // Apply the HTML markup into body tag
            $('body').append('<div id="jquery-overlay"></div><div id="jquery-lightbox"><div id="lightbox-container-image-box"><div id="lightbox-container-image"><img id="lightbox-image"><div style="" id="lightbox-nav"><a href="#" id="lightbox-nav-btnPrev"></a><a href="#" id="lightbox-nav-btnNext"></a></div><div id="lightbox-loading"><a href="#" id="lightbox-loading-link"><img src="' + settings.imageLoading + '"></a></div></div></div><div id="lightbox-container-image-data-box"><div id="lightbox-container-image-data"><div id="lightbox-image-details"><span id="lightbox-image-details-caption"></span><span id="lightbox-image-details-currentNumber"></span></div><div id="lightbox-secNav"><a href="#" id="lightbox-secNav-btnClose"><img src="' + settings.imageBtnClose + '"></a></div></div></div></div>');
            // Get page sizes
            var arrPageSizes = ___getPageSize();
            // Style overlay and show it
            $('#jquery-overlay').css({
                backgroundColor:	settings.overlayBgColor,
                opacity:			settings.overlayOpacity,
                width:				arrPageSizes[0],
                height:				arrPageSizes[1]
            }).fadeIn();
            // Get page scroll
            var arrPageScroll = ___getPageScroll();
            // Calculate top and left offset for the jquery-lightbox div object and show it
            $('#jquery-lightbox').css({
                top:	arrPageScroll[1] + (arrPageSizes[3] / 10),
                left:	arrPageScroll[0]
            }).show();
            // Assigning click events in elements to close overlay
            $('#jquery-overlay,#jquery-lightbox').click(function() {
                _finish();
            });
            // Assign the _finish function to lightbox-loading-link and lightbox-secNav-btnClose objects
            $('#lightbox-loading-link,#lightbox-secNav-btnClose').click(function() {
                _finish();
                return false;
            });
            // If window was resized, calculate the new overlay dimensions
            $(window).resize(function() {
                // Get page sizes
                var arrPageSizes = ___getPageSize();
                // Style overlay and show it
                $('#jquery-overlay').css({
                    width:		arrPageSizes[0],
                    height:		arrPageSizes[1]
                });
                // Get page scroll
                var arrPageScroll = ___getPageScroll();
                // Calculate top and left offset for the jquery-lightbox div object and show it
                $('#jquery-lightbox').css({
                    top:	arrPageScroll[1] + (arrPageSizes[3] / 10),
                    left:	arrPageScroll[0]
                });
            });
        }
        /**
		 * Prepares image exibition; doing a image磗 preloader to calculate it磗 size
		 *
		 */
        function _set_image_to_view() { // show the loading
            // Show the loading
            $('#lightbox-loading').show();
            if ( settings.fixedNavigation ) {
                $('#lightbox-image,#lightbox-container-image-data-box,#lightbox-image-details-currentNumber').hide();
            } else {
                // Hide some elements
                $('#lightbox-image,#lightbox-nav,#lightbox-nav-btnPrev,#lightbox-nav-btnNext,#lightbox-container-image-data-box,#lightbox-image-details-currentNumber').hide();
            }
            // Image preload process
            var objImagePreloader = new Image();
            objImagePreloader.onload = function() {
                $('#lightbox-image').attr('src',settings.imageArray[settings.activeImage][0]);
                // Perfomance an effect in the image container resizing it
                _resize_container_image_box(objImagePreloader.width,objImagePreloader.height);
                //	clear onLoad, IE behaves irratically with animated gifs otherwise
                objImagePreloader.onload=function(){};
            };
            objImagePreloader.src = settings.imageArray[settings.activeImage][0];
        };
        /**
		 * Perfomance an effect in the image container resizing it
		 *
		 * @param integer intImageWidth The image磗 width that will be showed
		 * @param integer intImageHeight The image磗 height that will be showed
		 */
        function _resize_container_image_box(intImageWidth,intImageHeight) {
            // Get current width and height
            var intCurrentWidth = $('#lightbox-container-image-box').width();
            var intCurrentHeight = $('#lightbox-container-image-box').height();
            // Get the width and height of the selected image plus the padding
            var intWidth = (intImageWidth + (settings.containerBorderSize * 2)); // Plus the image磗 width and the left and right padding value
            var intHeight = (intImageHeight + (settings.containerBorderSize * 2)); // Plus the image磗 height and the left and right padding value
            // Diferences
            var intDiffW = intCurrentWidth - intWidth;
            var intDiffH = intCurrentHeight - intHeight;
            // Perfomance the effect
            $('#lightbox-container-image-box').animate({
                width: intWidth, 
                height: intHeight
            },settings.containerResizeSpeed,function() {
                _show_image();
            });
            if ( ( intDiffW == 0 ) && ( intDiffH == 0 ) ) {
                if ( $.browser.msie ) {
                    ___pause(250);
                } else {
                    ___pause(100);
                }
            }
            $('#lightbox-container-image-data-box').css({
                width: intImageWidth
            });
            $('#lightbox-nav-btnPrev,#lightbox-nav-btnNext').css({
                height: intImageHeight + (settings.containerBorderSize * 2)
            });
        };
        /**
		 * Show the prepared image
		 *
		 */
        function _show_image() {
            $('#lightbox-loading').hide();
            $('#lightbox-image').fadeIn(function() {
                _show_image_data();
                _set_navigation();
            });
            _preload_neighbor_images();
        };
        /**
		 * Show the image information
		 *
		 */
        function _show_image_data() {
            $('#lightbox-container-image-data-box').slideDown('fast');
            $('#lightbox-image-details-caption').hide();
            if ( settings.imageArray[settings.activeImage][1] ) {
                $('#lightbox-image-details-caption').html(settings.imageArray[settings.activeImage][1]).show();
            }
            // If we have a image set, display 'Image X of X'
            if ( settings.imageArray.length > 1 ) {
                $('#lightbox-image-details-currentNumber').html(settings.txtImage + ' ' + ( settings.activeImage + 1 ) + ' ' + settings.txtOf + ' ' + settings.imageArray.length).show();
            }
        }
        /**
		 * Display the button navigations
		 *
		 */
        function _set_navigation() {
            $('#lightbox-nav').show();

            // Instead to define this configuration in CSS file, we define here. And it磗 need to IE. Just.
            $('#lightbox-nav-btnPrev,#lightbox-nav-btnNext').css({
                'background' : 'transparent url(' + settings.imageBlank + ') no-repeat'
            });

            // Show the prev button, if not the first image in set
            if ( settings.activeImage != 0 ) {
                if ( settings.fixedNavigation ) {
                    $('#lightbox-nav-btnPrev').css({
                        'background' : 'url(' + settings.imageBtnPrev + ') left 15% no-repeat'
                    })
                    .unbind()
                    .bind('click',function() {
                        settings.activeImage = settings.activeImage - 1;
                        _set_image_to_view();
                        return false;
                    });
                } else {
                    // Show the images button for Next buttons
                    $('#lightbox-nav-btnPrev').unbind().hover(function() {
                        $(this).css({
                            'background' : 'url(' + settings.imageBtnPrev + ') left 15% no-repeat'
                        });
                    },function() {
                        $(this).css({
                            'background' : 'transparent url(' + settings.imageBlank + ') no-repeat'
                        });
                    }).show().bind('click',function() {
                        settings.activeImage = settings.activeImage - 1;
                        _set_image_to_view();
                        return false;
                    });
                }
            }

            // Show the next button, if not the last image in set
            if ( settings.activeImage != ( settings.imageArray.length -1 ) ) {
                if ( settings.fixedNavigation ) {
                    $('#lightbox-nav-btnNext').css({
                        'background' : 'url(' + settings.imageBtnNext + ') right 15% no-repeat'
                    })
                    .unbind()
                    .bind('click',function() {
                        settings.activeImage = settings.activeImage + 1;
                        _set_image_to_view();
                        return false;
                    });
                } else {
                    // Show the images button for Next buttons
                    $('#lightbox-nav-btnNext').unbind().hover(function() {
                        $(this).css({
                            'background' : 'url(' + settings.imageBtnNext + ') right 15% no-repeat'
                        });
                    },function() {
                        $(this).css({
                            'background' : 'transparent url(' + settings.imageBlank + ') no-repeat'
                        });
                    }).show().bind('click',function() {
                        settings.activeImage = settings.activeImage + 1;
                        _set_image_to_view();
                        return false;
                    });
                }
            }
            // Enable keyboard navigation
            _enable_keyboard_navigation();
        }
        /**
		 * Enable a support to keyboard navigation
		 *
		 */
        function _enable_keyboard_navigation() {
            $(document).keydown(function(objEvent) {
                _keyboard_action(objEvent);
            });
        }
        /**
		 * Disable the support to keyboard navigation
		 *
		 */
        function _disable_keyboard_navigation() {
            $(document).unbind();
        }
        /**
		 * Perform the keyboard actions
		 *
		 */
        function _keyboard_action(objEvent) {
            // To ie
            if ( objEvent == null ) {
                keycode = event.keyCode;
                escapeKey = 27;
            // To Mozilla
            } else {
                keycode = objEvent.keyCode;
                escapeKey = objEvent.DOM_VK_ESCAPE;
            }
            // Get the key in lower case form
            key = String.fromCharCode(keycode).toLowerCase();
            // Verify the keys to close the ligthBox
            if ( ( key == settings.keyToClose ) || ( key == 'x' ) || ( keycode == escapeKey ) ) {
                _finish();
            }
            // Verify the key to show the previous image
            if ( ( key == settings.keyToPrev ) || ( keycode == 37 ) ) {
                // If we磖e not showing the first image, call the previous
                if ( settings.activeImage != 0 ) {
                    settings.activeImage = settings.activeImage - 1;
                    _set_image_to_view();
                    _disable_keyboard_navigation();
                }
            }
            // Verify the key to show the next image
            if ( ( key == settings.keyToNext ) || ( keycode == 39 ) ) {
                // If we磖e not showing the last image, call the next
                if ( settings.activeImage != ( settings.imageArray.length - 1 ) ) {
                    settings.activeImage = settings.activeImage + 1;
                    _set_image_to_view();
                    _disable_keyboard_navigation();
                }
            }
        }
        /**
		 * Preload prev and next images being showed
		 *
		 */
        function _preload_neighbor_images() {
            if ( (settings.imageArray.length -1) > settings.activeImage ) {
                objNext = new Image();
                objNext.src = settings.imageArray[settings.activeImage + 1][0];
            }
            if ( settings.activeImage > 0 ) {
                objPrev = new Image();
                objPrev.src = settings.imageArray[settings.activeImage -1][0];
            }
        }
        /**
		 * Remove jQuery lightBox plugin HTML markup
		 *
		 */
        function _finish() {
            $('#jquery-lightbox').remove();
            $('#jquery-overlay').fadeOut(function() {
                $('#jquery-overlay').remove();
            });
            // Show some elements to avoid conflict with overlay in IE. These elements appear above the overlay.
            $('embed, object, select').css({
                'visibility' : 'visible'
            });
        }
        /**
		 / THIRD FUNCTION
		 * getPageSize() by quirksmode.com
		 *
		 * @return Array Return an array with page width, height and window width, height
		 */
        function ___getPageSize() {
            var xScroll, yScroll;
            if (window.innerHeight && window.scrollMaxY) {
                xScroll = window.innerWidth + window.scrollMaxX;
                yScroll = window.innerHeight + window.scrollMaxY;
            } else if (document.body.scrollHeight > document.body.offsetHeight){ // all but Explorer Mac
                xScroll = document.body.scrollWidth;
                yScroll = document.body.scrollHeight;
            } else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari
                xScroll = document.body.offsetWidth;
                yScroll = document.body.offsetHeight;
            }
            var windowWidth, windowHeight;
            if (self.innerHeight) {	// all except Explorer
                if(document.documentElement.clientWidth){
                    windowWidth = document.documentElement.clientWidth;
                } else {
                    windowWidth = self.innerWidth;
                }
                windowHeight = self.innerHeight;
            } else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode
                windowWidth = document.documentElement.clientWidth;
                windowHeight = document.documentElement.clientHeight;
            } else if (document.body) { // other Explorers
                windowWidth = document.body.clientWidth;
                windowHeight = document.body.clientHeight;
            }
            // for small pages with total height less then height of the viewport
            if(yScroll < windowHeight){
                pageHeight = windowHeight;
            } else {
                pageHeight = yScroll;
            }
            // for small pages with total width less then width of the viewport
            if(xScroll < windowWidth){
                pageWidth = xScroll;
            } else {
                pageWidth = windowWidth;
            }
            arrayPageSize = new Array(pageWidth,pageHeight,windowWidth,windowHeight);
            return arrayPageSize;
        };
        /**
		 / THIRD FUNCTION
		 * getPageScroll() by quirksmode.com
		 *
		 * @return Array Return an array with x,y page scroll values.
		 */
        function ___getPageScroll() {
            var xScroll, yScroll;
            if (self.pageYOffset) {
                yScroll = self.pageYOffset;
                xScroll = self.pageXOffset;
            } else if (document.documentElement && document.documentElement.scrollTop) {	 // Explorer 6 Strict
                yScroll = document.documentElement.scrollTop;
                xScroll = document.documentElement.scrollLeft;
            } else if (document.body) {// all other Explorers
                yScroll = document.body.scrollTop;
                xScroll = document.body.scrollLeft;
            }
            arrayPageScroll = new Array(xScroll,yScroll);
            return arrayPageScroll;
        };
        /**
		  * Stop the code execution from a escified time in milisecond
		  *
		  */
        function ___pause(ms) {
            var date = new Date();
            curDate = null;
            do {
                var curDate = new Date();
            }
            while ( curDate - date < ms);
        };
        // Return the jQuery object for chaining. The unbind method is used to avoid click conflict when the plugin is called more than once
        return this.unbind('click').click(_initialize);
    };
})(jQuery);
var fangddFun = {
    // 设为首页
    setHomePage: function( obj ) {
        var aUrls=document.URL.split("/");
        var vDomainName="http://"+aUrls[2]+"/";
        try{//IE
            obj.style.behavior='url(#default#homepage)';
            obj.setHomePage(vDomainName);
        }catch(e){//other
            if(window.netscape) {//ff
                try {
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
                }
                catch (e) {
                    alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将[signed.applets.codebase_principal_support]设置为'true'");
                }
                var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
                prefs.setCharPref('browser.startup.homepage',vDomainName);
            };
        };
    },
    // 加入收藏
    addFavorite: function() {
        var aUrls=document.URL.split("/");
        var vDomainName="http://"+aUrls[2]+"/";
        var description=document.title;
        try{//IE
            window.external.AddFavorite(vDomainName,description);
        }catch(e){//FF
            window.sidebar.addPanel(description,vDomainName,"");
        };
    },

    // 复制地址
    copyURL: function() {
        var myHerf=top.location.href;
        var title=document.title;
        if(window.clipboardData){
            var tempCurLink=title + "\n" + myHerf;
            var ok=window.clipboardData.setData("Text",tempCurLink);
            if(ok) alert("复制成功！按Ctrl+V ,粘贴到QQ或微博上发给你的好友们吧！");
        }else{
            prompt("按Ctrl+C复制当前网址", myHerf + " " + title);
        }
    }
};
jQuery.fn.floatdiv=function(location){
    var $body = $("body"),
    ww = $body.width(),
    wh = $body.height(),
    top = -1,
    loc = null;
    return this.each(function(){ //返回jq对象,可链式操作
        loc=location;
        var top=loc.top;
        if(typeof(top)!='undefined'&&typeof(top)==='string' ){
            top=top.replace("px","");
        }
        if (!$.browser.msie || $.browser.version > 6 ) {
            $(this).css(loc).css({
                position:"fixed",
                zIndex:"80"
            });
        }else{ //ie6
            var style= $(this).get(0).style,
            dom = '(document.documentElement || document.body)',
            html = document.getElementsByTagName('html')[0];
            style.setExpression('top', 'eval(' + dom + '.scrollTop + ' + top + ') + "px"');
            $(this).css("position","absolute").css("left",loc.left).css("right",loc.right);
            // 给IE6 fixed 提供一个“不抖动的环境”
            // 只需要 html 与 body 标签其一使用背景静止定位即可让IE6下滚动条拖动元素也不会抖动
            // 注意：IE6如果 body 已经设置了背景图像静止定位后还给 html 标签设置会让 body 设置的背景静止(fixed)失效
            if (document.body.currentStyle['backgroundAttachment'] !== 'fixed') {
                html.style.backgroundImage = 'url(about:blank)';
                html.style.backgroundAttachment = 'fixed';
            };
        }
    });
};
//跨域Ajax
var fddAjax = function( param ){
    if( ! param || ! param.url )return false;
    param.type = param.type || "post";
    param.dataType = param.dataType || "json";
    param.url = site_url+"/ajax.php?url=" + encodeURIComponent(encodeURIComponent(param.url));
    $.ajax(param);
};
//评论文字计数
function autoText(el, opts){
    var el, opts, max, sh, ie;
    el = typeof el=="string" ? document.getElementById(el) : el;
    opts = Object(opts);
    max = opts.max || Number.MAX_VALUE;
    el.onfocus = el.onblur = el.onkeyup = function (){
        var val = this.value;
        if (val.length>max) this.value = val.slice(0, max)
        if (opts.change instanceof Function) opts.change.call(this, max - val.length)
    }
    if (opts.auto) { //高度是否自动变化
        el.style.overflow = 'hidden';
        el.setAttribute('rows', 2);
        sh = el.offsetHeight;
        if(!!window.ActiveXObject){
            el.onpropertychange =function (e){
                this.style.height=Math.max(sh, this.scrollHeight) + 'px'// ie scrollHeight auto size
            }
        }else{
            el.oninput = function (){
                this.style.height = 0; // no-ie
                this.style.height=Math.max(sh, this.scrollHeight - 4) + 'px'
            }
        }
    }
}
