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
//@prepros-prepend vendor/foundation/js/plugins/foundation.equalizer.js

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
    
    _app.responsive_embed = function  () {
        $('.entry-content p').each(function(){
            if( $(this).find('iframe[src*="youtube.com"]') ) {
                $(this).find('iframe').wrap('<div class="responsive-embed widescreen"></div>');
            }
            if( $(this).find('iframe[src*="vimeo.com"]') ) {
                $(this).find('iframe').wrap('<div class="responsive-embed widescreen"></div>');
            }
        });
    }
    
    _app.banner_slider = function() {
        
        if( $('.banner-slider').length ) {
            
            const swiper = new Swiper('.banner-slider .swiper-container', {
                // Optional parameters
                loop: true,
                slidesPerView: 1,
                speed: 500,
                spaceBetween: 0,
                pagination: {
                  el: ".banner-swiper-pagination",
                  clickable: true,
                },
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
            
            $(".banner-slider .swiper-container").each(function(index, element){
                const swiper = this.swiper;
                swiper.update();
            });

        }
        
    } 

    _app.locations_slider = function() {
        
        if( $('.locations-swiper').length ) {
            
            const swiper = new Swiper('.locations-swiper .swiper-container', {
                // Optional parameters
                loop: false,
                slidesPerView: 'auto',
                speed: 500,
                spaceBetween: 50,
                navigation: {
                    nextEl: '.locations-button-next',
                    prevEl: '.locations-button-prev',
                  },
            });
            
            $(".locations-swiper .swiper-container").each(function(index, element){
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
            
            let setBioContainerHeight = function() {
                let openBio = $('.bio-open');
                let tmBioHeight = $('.bio-open .tm-bio').outerHeight();
                $(openBio).css('margin-bottom', tmBioHeight);
            }
            
            let scrollToOpenBio = function() {
                let openBio = $('.bio-open');
                let animationDuration = 500;
                let animationEasing = 'swing';
                let headerheight = $('header.site-header').outerHeight();
                let imgHeight = $(openBio).find('.img-wrap').height();
                let scrollPos = $(openBio).offset().top - headerheight + (imgHeight * .5);
                
                if( $(scrollPos).length ) { 
                    $('html, body').stop(true).animate({
                        scrollTop: scrollPos
                    }, animationDuration, animationEasing);
                }
                
            }
            
                
            $('.single-tm a').click(function(e){
                e.preventDefault();

                let tm = $(this).parent().parent();
                let siblingModuleActiveCard = $(tm).parentsUntil('.module.team').parent().siblings().find('.single-tm.bio-open');
                let tmBio = $(tm).find('.tm-bio');
                
                if( $(tm).hasClass('bio-open') ){
                    $(tm).removeClass('bio-open-only').removeClass('bio-open').css('margin-bottom', 16);

                } else {
                    $(tm).addClass('bio-open');
                    
                    if( $(siblingModuleActiveCard).length ) {
                        $(siblingModuleActiveCard).removeClass('bio-open-only').removeClass('bio-open').css('margin-bottom', 16);
                        //scrollToOpenBio();
                    }
                                        
                    if( $(tm).siblings().hasClass('bio-open') ) {
                        $(tm).siblings().removeClass('bio-open');  
                        
                        $(tm).removeClass('bio-open-only');  
                        $(tm).siblings().removeClass('bio-open-only');  
                        $(tm).siblings().css('margin-bottom', 16);  
                        setBioContainerHeight();
                        //scrollToOpenBio();
                    } else {
                        $(tm).addClass('bio-open-only');
                        setBioContainerHeight();
                        //scrollToOpenBio();
                    }
                    


                    //$(tm).removeClass('bio-open').css('margin-bottom', 16);

                }
                
            });
            
            $(window).on("resize", function() {
                setBioContainerHeight();
            });
        
        }
        
    }
    
    _app.resource_filter = function() {
        
        $('.resource-group').each(function() {
            let showAllWrap = $(this).find('.show-all-wrap');
            let showAll = showAllWrap.find('a');            
            let resourceCard = $(this).find('.resource-card');
            
            $(showAll).click(function(e) {
                e.preventDefault();
                $(resourceCard).removeClass('hidden');
                $(showAllWrap).hide();
            });
            
            //$(resourceCard).slice(3).addClass('hidden')
            // $(resourceCard).each(function(i){
            //     console.log($(i));
            // });
            
            //$(this).parent().parent().find('.show-all-wrap').removeClass('hide');            
        });
        
        var $filter_resources = function filter_resources(query_type, query_sector) {
            var query_type = query_type.toLowerCase();
            if (query_type == 'all') query_type = '';
        
            if (query_type.length > 0) {
        
                var items = $('.filter-grid > .cell');
        
                if (items) {
                    items.each(function(index, el) {
                        var type_match = false;
        
                        // type
                        var item_type = $(this).data('type').toLowerCase();
                        if (item_type.indexOf('.'+query_type+'.') !== -1 || query_type.length == 0) {
                            type_match = true;
                        }
                        
                        console.log(query_type);
        
        
                        if (type_match) {
                            //$(this).show(700);
                            $(this).removeClass('hidden');
                        } else {
                            //$(this).hide(500);
                            $(this).addClass('hidden');
                        }
                        
                    }).promise().done( function(){ 
                        $(window).trigger('grid-update');
                    });
                }
        
            } else {
                $('.filter-grid > .cell').removeClass('hidden').promise().done( function(){ 
                    $(window).trigger('grid-update');
                });
            }
        }
        
        // filter the grid on nav click
        $(document).on('click', '.filter-taxonomy button', function(e) {
            e.preventDefault();
        
            if ($(this).hasClass('active')) {
                // do nothing
                $(this).removeClass('active');
                
                
                var scrollV, scrollH, loc = window.location;
                if ("pushState" in history)
                    history.pushState("", document.title, loc.pathname + loc.search);
                else {
                    // Prevent scrolling by storing the page's current scroll offset
                    scrollV = document.body.scrollTop;
                    scrollH = document.body.scrollLeft;
                
                    loc.hash = "";
                
                    // Restore the scroll offset, should be flicker free
                    document.body.scrollTop = scrollV;
                    document.body.scrollLeft = scrollH;
                }
                
                var query_type = '';

                if ($('.filter-grid').length > 0) {
                    $filter_resources(query_type);
                }

                
            } else {
        
                $(this).closest('.filter-taxonomy').find('button.active').removeClass('active');
                $(this).addClass('active');
        
                var _hash = $('.filter-taxonomy button.active[data-tax="type"]').data('hash');
        
                window.location = "#"+_hash;
        
                var query_type = $('.filter-taxonomy button.active[data-tax="type"]').data('term').toLowerCase();

                if ($('.filter-grid').length > 0) {
                	$filter_resources(query_type);
                }
            }				
        
        });
        
        // event after grid is filtered
        $(window).on('grid-update', function(event) {
            $(document).trigger('blazy-revalidate');
        
            $('.filter-taxonomy button').not(this).prop('disabled', false);
            $('.main-navigation .portfolio-link ul a').removeClass('disabled');
        
        });
                
        // load hashbang from menu click while on portfolio page
//         $(window).on('hashchange', function() {
//             var _hash = window.location.hash.substr(1);
//             if (_hash && _hash.length > 0) {
//                 var _hash_split = _hash.split('_'); console.log(_hash_split);
//                 var _hash1 = _hash_split[0];
//                 if ($('button[data-hash="'+_hash1+'"]').length > 0 && $('button[data-hash="'+_hash2+'"]').length > 0) {
//                     //$('button[data-hash="'+_hash+'"]').trigger('click');
//                     //dg_smooth_scroll( $('button[data-hash="'+_hash+'"]'), false, 400 );
//                     //setTimeout(function() {history.pushState(null, null, ' ');}, 1000);
//         
//                     $('.filter-taxonomy button[data-tax="type"]').not($('button[data-hash="'+_hash1+'"]')).removeClass('active');
//                     $('.filter-taxonomy button[data-tax="type"][data-hash="'+_hash1+'"]').addClass('active');
// 
//                     
//                     //$('body').removeClass('tax-packaging');
//                     //$('body').addClass('tax-all');
//         
//                     var query_type = $('.filter-taxonomy button.active[data-tax="type"]').data('term').toLowerCase();
//                     if ($('.filter-grid').length > 0) {
//                         $filter_resources(query_type);
//                     }
//                 }
//         
//                 if ($('button[data-hash="'+_hash1+'"]').length > 0 && _hash2 === undefined) {
//                     $('.filter-taxonomy').find('button').removeClass('active');
//                     $('button[data-hash="'+_hash1+'"]').addClass('active');
//                     $('button[data-tax="sector"][data-term="all"]').addClass('active');
//         
//                     var query_type = $('.filter-taxonomy button.active[data-tax="type"]').data('term').toLowerCase();
//                     if ($('.filter-grid').length > 0) {
//                         $filter_resources(query_type);
//                     }
//                 }
//             } else {
//         
//                 // default to current/ALL tabs (without adding a hash to history state)
//                 $('.filter-taxonomy').find('button').removeClass('active');
//                 $('button[data-hash="current"]').addClass('active');
//                 $('button[data-tax="sector"][data-term="all"]').addClass('active');
//         
//                 var query_type = $('.filter-taxonomy button.active[data-tax="type"]').data('term').toLowerCase();
//                 if ($('.filter-grid').length > 0) {
//                     $filter_resources(query_type);
//                 }
//         
//             }
// 
//         });
        
        // load from hashbang
        var _hash = window.location.hash.substr(1);
        if (_hash && _hash.length > 0) {
            var _hash_split = _hash.split('_');
            var _hash1 = _hash_split[0];
            if ($('button[data-hash="'+_hash1+'"]').length) {
        
                $('.filter-taxonomy button[data-tax="type"]').not($('button[data-hash="'+_hash1+'"]')).removeClass('active');
                $('.filter-taxonomy button[data-tax="type"][data-hash="'+_hash1+'"]').addClass('active');
        
                var query_type = $('.filter-taxonomy button.active[data-tax="type"]').data('term').toLowerCase();
                if ($('.filter-grid').length > 0) {
                    $filter_resources(query_type);
                }
                
                let animationDuration = 500;
                let animationEasing = 'swing';
                let headerheight = $('header.site-header').outerHeight();
                let scrollPos = $('.module.resources').offset().top - headerheight + 20;
                
                setTimeout(function(){
                    $('html, body').stop(true).animate({
                        scrollTop: scrollPos
                    }, animationDuration, animationEasing);
                }, 100);
                
            }

        }
        
        _app.case_study_download = function() {
     
            $(document).bind('gform_confirmation_loaded', function(event, formId){
                console.log(formId);
                if( formId === 2 ){  
                                        
                    const download_file_url = acf_vars.download_file.url;
                    const download_file_name = acf_vars.download_file.filename;
                    const thankYouPage = acf_vars.thank_you_page;
                    
                    $('#gform_confirmation_wrapper_2').siblings('h2').hide();
                                        
                    $('body').append('<button id="download-cs-pdf" class="show-for-sr">download with blob</button>');
                    
                    function downloadFile(url, fileName){
                        //Check the Browser type and download the File.
                        var isIE = false || !!document.documentMode;
                        if (isIE) {
                            window.navigator.msSaveBlob(blob, fileName);
                        } else {
                            
                            fetch(url, { method: 'get', mode: 'no-cors', referrerPolicy: 'no-referrer' })
                            .then(res => res.blob())
                            .then(res => {
                                const aElement = document.createElement('a');
                                aElement.setAttribute('download', fileName);
                                const href = URL.createObjectURL(res);
                                aElement.href = href;
                                // aElement.setAttribute('href', href);
                                aElement.setAttribute('target', '_blank');
                                aElement.click();
                                URL.revokeObjectURL(href);
                            });
                        }
                    };
                    const dlbtn = document.querySelector('#download-cs-pdf');
                    dlbtn.onclick =function () {
                      downloadFile(download_file_url, download_file_name);
                    }
                    dlbtn.click();
                    dlbtn.remove();
                                        
                    setTimeout(function(){
                        // Get current page slug and attached it as a url param to the next page
                        const currentPageSlug = acf_vars.slug;
                        const nextPageUrl = thankYouPage  + '?id=' + currentPageSlug;
                        
                        window.location.assign(nextPageUrl);
                    }, 2000);

                }
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
        _app.responsive_embed();
        _app.banner_slider();
        _app.locations_slider();
        _app.team_bios();
        _app.resource_filter();
        _app.case_study_download();
    }
    
    
    // initialize functions on load
    $(function() {
        _app.init();
    });
	
	
})(jQuery);