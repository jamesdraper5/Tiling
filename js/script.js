$(document).ready(function() {


	var openPhotoSwipe = function(e) {
		e.preventDefault();
	    var pswpElement = document.querySelectorAll('.pswp')[0];

	    // build items array
	    var items = [
	        {
	            src: "img/tiling-work/bath.jpg",
	            w: 836,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/kitchen-tiling-4.jpg",
	            w: 1000,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/bathroom-tiling-cork.jpg",
	            w: 400,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/floor-tiling.jpg",
	            w: 720,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/bathroom-tiling-cork-3.jpg",
	            w: 430,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/bathroom-tiling-cork-4.jpg",
	            w: 450,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/floor-tiling-2.jpg",
	            w: 550,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/tiling-shower.jpg",
	            w: 400,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/kitchen-tiling.jpg",
	            w: 800,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/bathroom-tiling-cork-2.jpg",
	            w: 800,
	            h: 530
	        },
	        {
	            src: "img/tiling-work/kitchen-tiling-2.jpg",
	            w: 800,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/kitchen-tiling-3.jpg",
	            w: 800,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/cork-bathroom-tiling-3.jpg",
	            w: 450,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/kitchen-tiling-cork.jpg",
	            w: 800,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/mosaic-tiling-cork.jpg",
	            w: 750,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/cork-bathroom-tiling-2.jpg",
	            w: 800,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/mosaic-tiling.jpg",
	            w: 750,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/mosaic-tiling-2.jpg",
	            w: 815,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/tiling-cork.jpg",
	            w: 800,
	            h: 600
	        },
	        {
	            src: "img/tiling-work/cork-bathroom-tiling-1.jpg",
	            w: 800,
	            h: 600
	        }
	    ];



	    // define options (if needed)
	    var options = {
	        history: true,
	        focus: true,

	        showAnimationDuration: 0,
	        hideAnimationDuration: 0

	    };

	    var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
	    gallery.init();
	};

	//openPhotoSwipe();

	$('.js-show-gallery').on('click', openPhotoSwipe);

});

