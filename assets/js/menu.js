jQuery(document).ready(function () {
    jQuery("#respMenu").aceResponsiveMenu({
        resizeWidth: '768', // Set the same in Media query       
        animationSpeed: 'fast', //slow, medium, fast
        accoridonExpAll: false //Expands all the accordion menu on click
    });
});

    window.alert = function(){};
    var defaultCSS = document.getElementById('bootstrap-css');
    function changeCSS(css){
        if(css) jQuery('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
        else jQuery('head > link').filter(':first').replaceWith(defaultCSS); 
    }
    jQuery( document ).ready(function() {
        var iframe_height = parseInt(jQuery('html').height()); 
        window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
    });


    (function ($) {
        $.fn.aceResponsiveMenu = function (options) {

            //plugin's default options
            var defaults = {
                resizeWidth: '768',
                animationSpeed: 'fast',
                accoridonExpAll: false
            };

            //Variables
            var options = $.extend(defaults, options),
                opt = options,
                $resizeWidth = opt.resizeWidth,
                $animationSpeed = opt.animationSpeed,
                $expandAll = opt.accoridonExpAll,
                $aceMenu = jQuery(this),
                $menuStyle = jQuery(this).attr('data-menu-style');

            // Initilizing        
            $aceMenu.find('ul').addClass("sub-menu");
            // $aceMenu.find('ul').siblings('a').append('<span class="arrow "></span>');
            if ($menuStyle == 'accordion') { jQuery(this).addClass('collapse'); }

            // Window resize on menu breakpoint 
            if (jQuery(window).innerWidth() <= $resizeWidth) {
                menuCollapse();
            }
            jQuery(window).resize(function () {
                menuCollapse();
            });

            // Menu Toggle
            function menuCollapse() {
                var w = jQuery(window).innerWidth();
                if (w <= $resizeWidth) {
                    $aceMenu.find('li.menu-active').removeClass('menu-active');
                    $aceMenu.find('ul.slide').removeClass('slide').removeAttr('style');
                    $aceMenu.addClass('collapse hide-menu');
                    $aceMenu.attr('data-menu-style', '');
                    jQuery('.menu-toggle').show();
                } else {
                    $aceMenu.attr('data-menu-style', $menuStyle);
                    $aceMenu.removeClass('collapse hide-menu').removeAttr('style');
                    jQuery('.menu-toggle').hide();
                    if ($aceMenu.attr('data-menu-style') == 'accordion') {
                        $aceMenu.addClass('collapse');
                        return;
                    }
                    $aceMenu.find('li.menu-active').removeClass('menu-active');
                    $aceMenu.find('ul.slide').removeClass('slide').removeAttr('style');
                }
            }

            //ToggleBtn Click
            jQuery('#menu-btn').click(function () {
                $aceMenu.slideToggle().toggleClass('hide-menu');
            });


            // Main function 
            return this.each(function () {
                // Function for Horizontal menu on mouseenter
                $aceMenu.on('mouseover', '> li a', function () {
                    if ($aceMenu.hasClass('collapse') === true) {
                        return false;
                    }
                    jQuery(this).off('click', '> li a');
                    jQuery(this).parent('li').siblings().children('.sub-menu').stop(true, true).slideUp($animationSpeed).removeClass('slide').removeAttr('style').stop();
                    jQuery(this).parent().addClass('menu-active').children('.sub-menu').slideDown($animationSpeed).addClass('slide');
                    return;
                });
                $aceMenu.on('mouseleave', 'li', function () {
                    if ($aceMenu.hasClass('collapse') === true) {
                        return false;
                    }
                    jQuery(this).off('click', '> li a');
                    jQuery(this).removeClass('menu-active');
                    jQuery(this).children('ul.sub-menu').stop(true, true).slideUp($animationSpeed).removeClass('slide').removeAttr('style');
                    return;
                });
                //End of Horizontal menu function

                // Function for Vertical/Responsive Menu on mouse click
                $aceMenu.on('click', '> li a', function () {
                    if ($aceMenu.hasClass('collapse') === false) {
                        //return false;
                    }
                    jQuery(this).off('mouseover', '> li a');
                    if (jQuery(this).parent().hasClass('menu-active')) {
                        jQuery(this).parent().children('.sub-menu').slideUp().removeClass('slide');
                        jQuery(this).parent().removeClass('menu-active');
                    } else {
                        if ($expandAll == true) {
                            jQuery(this).parent().addClass('menu-active').children('.sub-menu').slideDown($animationSpeed).addClass('slide');
                            return;
                        }
                        jQuery(this).parent().siblings().removeClass('menu-active');
                        jQuery(this).parent('li').siblings().children('.sub-menu').slideUp().removeClass('slide');
                        jQuery(this).parent().addClass('menu-active').children('.sub-menu').slideDown($animationSpeed).addClass('slide');
                    }
                });
                //End of responsive menu function

            });
            //End of Main function
        }
    })(jQuery);