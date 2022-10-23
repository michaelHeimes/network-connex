/**
 * Required
 */
 
 //@prepros-prepend vendor/foundation/js/plugins/foundation.core.js

/**
 * Optional Plugins
 * Remove * to enable any plugins you want to use
 */
 
 // What Input
 //@*prepros-prepend vendor/whatinput.js
 
 // Foundation Utilities
 // https://get.foundation/sites/docs/javascript-utilities.html
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.box.min.js
 //@*prepros-prepend vendor/foundation/js/plugins/foundation.util.imageLoader.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.keyboard.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.mediaQuery.min.js
 //@*prepros-prepend vendor/foundation/js/plugins/foundation.util.motion.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.nest.min.js
 //@*prepros-prepend vendor/foundation/js/plugins/foundation.util.timer.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.touch.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.triggers.min.js


// JS Form Validation
//@prepros-prepend vendor/foundation/js/plugins/foundation.abide.js

// Accordian
//@prepros-prepend vendor/foundation/js/plugins/foundation.accordion.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.accordionMenu.js
//@*prepros-prepend vendor/foundation/js/plugins/foundation.responsiveAccordionTabs.js

// Menu enhancements
//@prepros-prepend vendor/foundation/js/plugins/foundation.drilldown.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.dropdown.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.dropdownMenu.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.responsiveMenu.js
//@*prepros-prepend vendor/foundation/js/plugins/foundation.responsiveToggle.js

// Equalize heights
//@*prepros-prepend vendor/foundation/js/plugins/foundation.equalizer.js

// Responsive Images
//@prepros-prepend vendor/foundation/js/plugins/foundation.interchange.js

// Navigation Widget
//@*prepros-prepend vendor/foundation/js/plugins/foundation.magellan.js

// Offcanvas Naviagtion Option
//@prepros-prepend vendor/foundation/js/plugins/foundation.offcanvas.js

// Carousel (don't ever use)
//@*prepros-prepend vendor/foundation/js/plugins/foundation.orbit.js

// Modals
//@prepros-prepend vendor/foundation/js/plugins/foundation.reveal.js

// Form UI element
//@*prepros-prepend vendor/foundation/js/plugins/foundation.slider.js

// Anchor Link Scrolling
//@prepros-prepend vendor/foundation/js/plugins/foundation.smoothScroll.js

// Sticky Elements
//@prepros-prepend vendor/foundation/js/plugins/foundation.sticky.js

// Tabs UI
//@*prepros-prepend vendor/foundation/js/plugins/foundation.tabs.js

// On/Off UI Switching
//@*prepros-prepend vendor/foundation/js/plugins/foundation.toggler.js

// Tooltips
//@*prepros-prepend vendor/foundation/js/plugins/foundation.tooltip.js

// What Input
//@prepros-prepend vendor/what-input.js

// Swiper
//@prepros-prepend vendor/swiper-bundle.js

// DOM Ready
(function($) {
	'use strict';
    
    var _app = window._app || {};
    
    _app.foundation_init = function() {
        $(document).foundation();
    }
        
    _app.emptyParentLinks = function() {
            
        $('.menu li a[href="#"]').click(function(e) {
            e.preventDefault ? e.preventDefault() : e.returnValue = false;
        });	
        
    };
    
    _app.fixed_nav_hack = function() {
        $('.off-canvas').on('opened.zf.offCanvas', function() {
            $('header.site-header').addClass('off-canvas-content is-open-right has-transition-push');		
            $('header.site-header #top-bar-menu .menu-toggle-wrap a#menu-toggle').addClass('clicked');	
        });
        
        $('.off-canvas').on('close.zf.offCanvas', function() {
            $('header.site-header').removeClass('off-canvas-content is-open-right has-transition-push');
            $('header.site-header #top-bar-menu .menu-toggle-wrap a#menu-toggle').removeClass('clicked');
        });
        
        $(window).on('resize', function() {
            if ($(window).width() > 1023) {
                $('.off-canvas').foundation('close');
                $('header.site-header').removeClass('off-canvas-content has-transition-push');
                $('header.site-header #top-bar-menu .menu-toggle-wrap a#menu-toggle').removeClass('clicked');
            }
        });    
    }
    
    _app.display_on_load = function() {
        $('.display-on-load').css('visibility', 'visible');
    }
    
    // Custom Functions
    
    _app.banner_slider = function() {
        
        if( $('.banner-slider').length ) {
            
            const swiper = new Swiper('.banner-slider .swiper-container', {
                // Optional parameters
                loop: true,
                slidesPerView: 1,
                speed: 500,
                spaceBetween: 0,
                autoplay: {
                    delay: 7000,
                },
                on: {
                    realIndexChange: function () {
                        let index = this.realIndex + 1; /* slide 1 => slides[1] */
                        let color_theme = this.slides[index].dataset.theme;
                        $('.banner-slider').attr('color-theme', color_theme);
                    },
                }
            });
            
            $(".blog-slider .swiper-container").each(function(index, element){
                const swiper = this.swiper;
                swiper.update();
            });

        }
        
    } 
    
    _app.team_bios = function() {
    
        if( $('.team').length ) {
            
            // var tmContainer = 0;
            // var tmLeftOffset = 0;
            // var tmLeftPostion = 0;
            
            const setOffset = function() {

                let tmContainer = $('.team-wrap');
                let tmContainerWidth = $(tmContainer).width() - 16;
                let tmContainerOffset = $(tmContainer).offset().left;
                
                $('.tm-bio').width(tmContainer);
    
                $('.single-tm').each( function(){
                    let tm = $(this);
                    let tmWidth = $(tm).outerWidth();
                    let tmLeftOffset = $(tm).offset().left;
                    let tmRightOffset = $(window).width() - tmLeftOffset - tmLeftOffset - tmWidth;
                    
                    let bio = $(tm).find('.tm-bio');
                    $(bio).css('left', -tmLeftOffset + tmContainerOffset);
                    $(bio).width(tmContainerWidth + 32);
                });
                
            }
                        
            $(window).on("load resize", function() {
                setOffset();
            });
            
            const setBioContainerHeight = function() {
                let openBio = $('.bio-open');
                let tmBioHeight = $('.bio-open .tm-bio').outerHeight();
                $(openBio).css('margin-bottom', tmBioHeight);
                
                let animationDuration = 500;
                let animationEasing = 'swing';
                let headerheight = $('header.site-header').outerHeight();
                let imgHeight = $(openBio).find('.img-wrap').height();
                let scrollPos = $(openBio).offset().top - headerheight + (imgHeight * .5);
                    
                $('html, body').stop(true).animate({
                    scrollTop: scrollPos
                  }, animationDuration, animationEasing);
                
            }
                
            $('.single-tm a').click(function(e){
                e.preventDefault();

                let tm = $(this).parent().parent();
                let tmBio = $(tm).find('.tm-bio');

                
                
                if( $(tm).hasClass('bio-open') ){
                    $(tm).removeClass('bio-open-only'); 
                    $(tm).removeClass('bio-open').css('margin-bottom', 16);;

                } else {
                    $(tm).addClass('bio-open');
                    
                    if( $(tm).siblings().hasClass('bio-open') ) {
                        $(tm).siblings().removeClass('bio-open');  
                        
                        $(tm).removeClass('bio-open-only');  
                        $(tm).siblings().removeClass('bio-open-only');  
                        //setTimeout(function() {
                            setBioContainerHeight();
                        //}, 250);
                        $(tm).siblings().css('margin-bottom', 16);  
                    } else {
                        $(tm).addClass('bio-open-only');
                        setBioContainerHeight();
                    }
                    


                    //$(tm).removeClass('bio-open').css('margin-bottom', 16);

                }
                
            });
            
            $(window).on("resize", function() {
                setBioContainerHeight();
            });
                
            $('.single-tm').each( function(){

                
            });
        
        }
        
    }
            
    _app.init = function() {
        
        // Standard Functions
        _app.foundation_init();
        _app.emptyParentLinks();
        _app.fixed_nav_hack();
        _app.display_on_load();
        
        // Custom Functions
        _app.banner_slider();
        _app.team_bios();
    }
    
    
    // initialize functions on load
    $(function() {
        _app.init();
    });
	
	
})(jQuery);