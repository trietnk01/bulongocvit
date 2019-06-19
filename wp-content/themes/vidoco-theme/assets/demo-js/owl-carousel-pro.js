jQuery(document).ready(function(){
	jQuery(".owl-carousel-banner").owlCarousel({
        autoplay:true,
        loop:true,
        margin:0,
        nav:false,
        navText: ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
        dots:true,
        mouseDrag: true,
        touchDrag: true,
        lazyLoad: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            }
        }
    });
    jQuery(".owl-carousel-brand").owlCarousel({
        autoplay:false,
        loop:true,
        margin:100,
        nav:false,
        navText: ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
        dots:false,
        mouseDrag: true,
        touchDrag: true,
        lazyLoad: true,
        responsiveClass:true,
        responsive:{
            240:{
                margin:2,
            },
            768:{
                items:9,
                margin:2,
            }
        }
    });
    jQuery(".owl-carousel-product-detail-img").owlCarousel({
        autoplay:false,
        loop:true,
        margin:0,
        nav:false,
        navText: ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
        dots:false,
        mouseDrag: true,
        touchDrag: true,
        lazyLoad: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            }
        }
    });
    jQuery(".owl-carousel-product-thumbnail").owlCarousel({
        autoplay:false,
        loop:true,
        margin:5,
        nav:true,
        navText: ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
        dots:false,
        mouseDrag: true,
        touchDrag: true,
        lazyLoad: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:4
            }
        }
    });
    jQuery(".owl-carousel-product-related").owlCarousel({
        autoplay:true,
        loop:true,
        margin:60,
        nav:false,
        navText: ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
        dots:false,
        mouseDrag: true,
        touchDrag: true,
        lazyLoad: true,
        responsiveClass:true,
        responsive:{
            240:{
                margin:0,
                items:1,
            },
            414:{
                margin:30,
                items:2,
            },
            740:{
                margin:40,
                items:2,
            },
            768:{
                margin:35,
            },
            1024:{
                items:3
            }
        }
    });
});