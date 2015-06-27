$(document).ready(function() {

	function sliderInit() {
		var winHeight = $(window).height();
		var winWidth = $(window).width();
		var imgHolder = $("div.imgHolder");

		var activePic = $("#slider li.active");
		var activeHeight = activePic.height();
		var activeWidth = activePic.width();
		
		var lastImg = ($("#slider").find("li").length) - 1;
		var totalImgWidth = [];
		var totalImgHeight = [];

		$(".wrapper").fadeOut(800);
		$("footer").fadeOut(800);

		$("#slider li img").each(function(){
			var imgWidth = $(this).width();
			var imgHeight = $(this).height();
			totalImgWidth.push(imgWidth);
			totalImgHeight.push(imgHeight);
		})

		imgHolder.css({"margin-top" : (winHeight - activeHeight)/2, "margin-left" : (winWidth - activeWidth)/2 })

		$(".sliderNav").click(function() {
			var direction = $(this).data("dir");
			activePic.removeClass("active");
			if($(this).data("dir") === "next") {
				if(activePic.index() === lastImg) {
					activePic = $("#slider li").eq(0).addClass("active");
				} else {
					activePic = activePic.next().addClass("active");
				}
			} else {
				if(activePic.index() === 0) {
					activePic = $("#slider li").eq(lastImg).addClass("active");
				} else {
					activePic = activePic.prev().addClass("active");
				}
			}
			activeHeight = activePic.height();
			activeWidth = activePic.width();
			
			var imgNum = activePic.index();
			var imgPos = 0;
			for(var i=0; i<imgNum; i++) {
				imgPos += totalImgWidth[i];
			}
			
			imgHolder.fadeOut(800, function() {
				$("#slider ul").css({"margin-left" : -imgPos});	
				$(this).css({
					"width" : activeWidth, 
					"height" : activeHeight, 
					"margin-top" : (winHeight - activeHeight)/2, 
					"margin-left" : (winWidth - activeWidth)/2 
				})
			}).fadeIn(800);
		})

		$("#slider #closeBtn").click(function() {
			$("#slider").fadeOut(800);
			$(".wrapper").fadeIn(800);
			$("footer").fadeIn(800);
		})
	}

	$(".workImg").hover(
		function() { 
			$(this).find(".sliderCTA").fadeIn();
		},
		function() { 
			$(this).find(".sliderCTA").fadeOut();
		}
	).click(function() {
		$("#slider").fadeIn(800);
		sliderInit();
	});	

	$(".homeSlider").hover(
		function() { 
			$(this).find(".sliderCTA").fadeIn();
		},
		function() { 
			$(this).find(".sliderCTA").fadeOut();
		}
	).click(function() {
		$("#slider").fadeIn(800);
		sliderInit();
	});	

	$("#workBtn").click(function(e) {
		$("#slider").fadeIn(800);
		sliderInit();
		e.preventDefault();
	});
})

