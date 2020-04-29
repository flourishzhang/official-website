   	
      if(navigator.appName == "Microsoft Internet Explorer"&&parseInt(navigator.appVersion.split(";")[1].replace(/[ ]/g, "").replace("MSIE",""))<10){
        alert("您的浏览器版本过低，为了更好的浏览网页。请下载IE10及以上版本,或者使用其它浏览器！");
        $('div').removeClass('fromLeft');
        $('div').removeClass('fromRight');
        $('div').removeClass('fromTop');
        $('div').removeClass('fromBottom');
      }
	  function scrollAnimate(className, animate, removeAnimate) {
	        var obj = $(className);//获取元素
	        obj.each(function (index, el) {
	            var objH = obj.eq(index).outerHeight();   //获取元素高度
	            var wScrollTop = $(window).scrollTop();   //获取折叠高度
	            var objTop = obj.eq(index).offset().top - wScrollTop;  //获取元素距离窗口距离
	            var wH = $(window).height();   //获取窗口高度
	            var block = wH - objH / 3;    //定义元素距离浏览器顶部距离为多少时显示元素
	            if (objTop <= block) {
	                obj.eq(index).stop().css({
	                    "animation-name": animate
	                })
	            } else {
	                obj.eq(index).css({
	                    "animation-name": removeAnimate
	                })
	            }
	        });
	    }
	
	    // 触发滚动事件调用函数
	    $(window).load(function () {
			scrollAnimate(".fromLeft", "fromLeft", "none");
			scrollAnimate(".fromRight", "fromRight", "none")
			scrollAnimate(".fromTop", "fromTop", "none");
			scrollAnimate(".fromBottom", "fromBottom", "none");
	    });
	    $(window).scroll(function (event) {
	        scrollAnimate(".fromLeft", "fromLeft", "none");
	        scrollAnimate(".fromRight", "fromRight", "none")
	        scrollAnimate(".fromTop", "fromTop", "none");
	        scrollAnimate(".fromBottom", "fromBottom", "none");
	    });
	    
	    $(function () {
	        // $('.rtTop').hide();
	        // $('.rtTop h4 img').hover(function () {
	        //     $(this).stop().animate({ "top": "-43px" }, 200)
	        // }, function () {
	        //     $(this).stop().animate({ "top": "0" }, 200)
	        // })
	        // $(window).scroll(function () {
	        //     var st = $(document).scrollTop();
	        //     if (st > 1000) {
	        //         $('.rtTop').show();
	        //     } else {
	        //         $('.rtTop').hide();
	        //     }
	
	        // })
	        $('#toptop').click(function () {
	            $('html,body').animate({ 'scrollTop': 0 }, 500);
	        })
	    });
