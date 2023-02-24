// Templatemela Start
"use strict";
var e = jQuery.noConflict();
var t = jQuery.noConflict();
var n = jQuery.noConflict();
var $owl_carousel=jQuery.noConflict();
jQuery(document).ready(function() {
	jQuery(".mega-menu ul > li.shop-menu > ul").wrap(" <div class='shop-product-outer'> </div>");
});
function Shopcatimage() { 
    "use strict";
	jQuery(".main-navigation").find(".category-image").each(function(i){
		jQuery(this).appendTo(jQuery(this).parent().find("li.shop-menu-image .shop-product-outer > ul > li:nth-child(2)"));
	});
jQuery(".category-image").insertAfter("li.shop-menu-image .shop-product-outer > ul > li:nth-child(2)");
}
jQuery(document).ready(function() {
    "use strict";
    	Shopcatimage()
});
jQuery(window).load(function() {
    "use strict";
    Shopcatimage();
});
jQuery(window).resize(function() {
    "use strict";
    Shopcatimage();
});
function isotopAutoSet() {
    n(function() {
        "use strict";
        var e = n("#portfolio_filter");
        t("#portfolio_filter").css("display", "block");
        t(".loading").css("display", "none");
        e.isotope({});
        var r = n("#portfolio_filter_options .option-set"),
            i = r.find("a");
        i.on("click", function() {
            var t = n(this);
            if (t.hasClass("selected")) {
                return false
            }
            var r = t.parents(".option-set");
            r.find(".selected").removeClass("selected");
            t.addClass("selected");
            var i = {},
                s = r.attr("data-option-key"),
                o = t.attr("data-option-value");
            o = o === "false" ? false : o;
            i[s] = o;
            if (s === "layoutMode" && typeof changeLayoutMode === "function") {
                changeLayoutMode(t, i)
            } else {
                e.isotope(i)
            }
            return false
        })
    })
}
jQuery(document).ready(function() {    "use strict";
    jQuery(".primary-sidebar .tagcloud,.widget_text .textwidget,.primary-sidebar .widget_shopping_cart_content,.primary-sidebar .widget_shopping_cart_content,.primary-sidebar .textwidget").addClass("toggle-block");
    jQuery("footer .tagcloud, footer .widget_shopping_cart_content,footer .textwidget,.site-footer .widget_nav_menu .menu, .site-footer .contact_wrapper, .site-footer .follow-us,.widget .mc4wp-form-fields").addClass("toggle-block");
    jQuery(".primary-sidebar .calendar_wrap, footer .calendar_wrap,.site-footer .gallery,.primary-sidebar .contact_wrapper,.primary-sidebar .payment-methods ul,.primary-sidebar .follow-us ul,.widget .mc4wp-form-fields").addClass("toggle-block");
    jQuery(".primary-sidebar .widget select,footer .widget select").addClass("toggle-block");
    jQuery(".postform").addClass("toggle-block");
    jQuery(".primary-sidebar .price_slider_wrapper").addClass("toggle-block");
    jQuery(".tagcloud").addClass("toggle-block");
    jQuery(".primary-sidebar .widget ul, footer .widget ul,.primary-sidebar .menu-menu-container, footer .menu-menu-container").addClass("toggle-block");
    jQuery(".widget ul.product_list_widget,.widget .textwidget,.widgets-leftbanner .left-banner").addClass("toggle-block");
    jQuery(".product-categories ul").addClass("toggle-block");
    jQuery('.widget_nav_menu ul li').filter(function() {
        return jQuery(this).text() == '';
    }).remove();
    // jQuery('.topbar-link').on("click", function() {
    //     jQuery(".topbar-link-wrapper").slideToggle("medium");
    // });
    jQuery('.account-link').on("click", function() {
        jQuery(".account-link-wrapper").slideToggle("medium");
    });
    jQuery(".box-category-heading").click(function() { 
        jQuery(".box-category-heading ul.product-categories").slideToggle("slow");
   });
    Shadowbox.init({
        overlayOpacity: .8
    }, setupDemos);
    jQuery("br", ".liststyle_content").remove();
    jQuery("select.orderby").customSelect();
    jQuery("ul li:empty").remove();
    jQuery("br", ".brand_block").remove();
    jQuery("br", ".pricing-content-inner").remove();
    jQuery("br", "#vertical_tab .tabs").remove();
    jQuery("p").each(function() {
        var e = jQuery(this);
        if (e.html().replace(/\s|&nbsp;/g, "").length == 0) e.remove()
    });
    e(".nav-button").on("click", function() {
        e(".nav-button, .primary-nav").toggleClass("open")
    });
    jQuery(".gridlist-toggle").prependTo(jQuery("#primary #content"));
    jQuery(".woocommerce-result-count").wrap(" <div class='category-toolbar'> </div>");
    jQuery(".woocommerce-ordering").appendTo(".category-toolbar");
    jQuery(".gridlist-toggle").prependTo(".category-toolbar");
    jQuery(".products .product-category").wrapInner(" <div class='container-inner'> </div>");
    jQuery(".accordion.style5 .single_accordion").each(function(e) {
        jQuery(this).addClass("accord-" + (e + 1))
    });
    jQuery(".quantity.buttons_added").find("input.input-text").attr({
        type: "text"
    });
    jQuery(".nav-menu:first > li").each(function(e) {
        jQuery(this).addClass("main-li")
    });
    jQuery("#woo-small-products p img").each(function(e) {
        jQuery(this).wrap("<div class='image-block'> </div>")
    });
    jQuery(".primary-sidebar .widget .widget-title,.content-sidebar .widget .widget-title,.site-footer .widget-title,.widget .widget-title").each(function(e) {
        jQuery(this).wrap("<div class='title-outer'> </div>")
    });
    jQuery(".sub-container .inner-image").each(function(e) {
        jQuery(this).addClass("image-" + (e + 1))
    });
    jQuery(" .product-categories").addClass('sidebar-category-inner');
    jQuery('.widget_nav_menu ul li').filter(function() {
        return jQuery(this).text() == '';
    }).remove();
    // zoom Gallery
    function singleproductcarousel() {
        "use strict";
        jQuery('.product .flex-control-thumbs').addClass('owl-carousel');
        jQuery(".product .flex-control-thumbs").owlCarousel({
            navigation: true,
            pagination: false,
            items: 4,
            itemsDesktop: [1299, 3],
            itemsDesktopSmall: [991, 3],
            itemsTablet: [600, 2],
            itemsMobile: [320, 1]
        });
    }
    jQuery(document).ready(function() {  "use strict";  singleproductcarousel() });
    jQuery(window).load(function() {  "use strict";	singleproductcarousel() });
    jQuery(window).resize(function() {  "use strict";singleproductcarousel()});	
	jQuery(window).resize(function() {
		"use strict";
		isotopAutoSet()
    });
    //JS for calling horizontalTab
    jQuery(document).ready(function() {
        "use strict";
        jQuery("#horizontalTab").easyResponsiveTabs({
            type: "default",
            width: "auto",
            fit: true,
            closed: "accordion",
            activate: function(e) {
                var t = jQuery(this);
                var n = jQuery("#tabInfo");
                var r = jQuery("span", n);
                r.text(t.text());
                n.show()
            }
        })
    });
    // Categorytab
    jQuery(document).ready(function() {
        "use strict";
        jQuery("#categorytab").easyResponsiveTabs({
            type: "default",
            width: "auto",
            fit: true,
            closed: "accordion",
            activate: function(e) {
                var t = jQuery(this);
                var n = jQuery("#tabInfo");
                var r = jQuery("span", n);
                r.text(t.text());
                n.show()
            }
        })
    });
    (function(e) {
        "use strict";
        var t;
        var n = false;
        var r = e("#to_top");
        var i = e(window);
        var s = e(document.body).children(0).position().top;
        e("#to_top").on("click", function(t) {
            t.preventDefault();
            e("html, body").animate({
                scrollTop: 0
            }, "slow")
        });
        i.scroll(function() {
            window.clearTimeout(t);
            t = window.setTimeout(function() {
                if (i.scrollTop() <= s) {
                    n = false;
                    r.fadeOut(500)
                } else if (n == false) {
                    n = true;
                    r.stop(true, true).show().on("click", function() {
                        r.fadeOut(500)
                    })
                }
            }, 100)
        })
    })(jQuery);
	/* Faq */
    (function(e) {
        "use strict";
        e(".toogle_div a.tog").on("click", function(t) {				
            var n = e(this).parent().find(".tab_content");
            e(this).parent().parent().find(".tab_content").not(n).slideUp();
            if (e(this).hasClass("current")) {
                e(this).removeClass("current")
            } else {
				e(this).parent().parent().find(".tog").removeClass("current");
                e(this).addClass("current")				
            }
            n.stop(false, true).slideToggle().css({
                display: "block"
            });
            t.preventDefault()
        })
    })(jQuery);
    (function(e) {
        "use strict";
        var t = e(".accordion .tab_content").hide();
        e(".accordion a").on("click", function() {
            t.slideUp();
            e(this).parent().next().slideDown();
            return false
        })
    })(jQuery);
    (function(e) {
        "use strict";
        e(".togg div.tog").on("click", function(t) {
            var n = e(this).parent().find(".tab_content");
            e(this).parent().find(".tab_content").not(n).slideUp();
            if (e(this).hasClass("current")) {
                e(this).removeClass("current")
            } else {
                e(this).addClass("current")
            }
            n.stop(false, true).slideToggle().css({
                display: "block"
            });
            t.preventDefault()
        })
    })(jQuery);
    (function(e) {
        "use strict";
        e(".accordion a.tog").on("click", function(t) {
            var n = e(this).parent().find(".tab_content");
            e(this).parent().parent().find(".tab_content").not(n).slideUp();
            if (e(this).hasClass("current")) {
                e(this).removeClass("current")
            } else {
                e(this).parent().parent().find(".tog").removeClass("current");
                e(this).addClass("current");
                n.stop(false, true).slideToggle().css({
                    display: "block"
                })
            }
            t.preventDefault()
        })
    })(jQuery);
    (function(e) {
        "use strict";
        e(".animated").each(function() {
            e(this).one("inview", function(t, n) {
                var r = "";
                var i = e(this),
                    s = i.data("animated") !== undefined ? i.data("animated") : "slideUp";
                r = i.data("delay") !== undefined ? i.data("delay") : 300;
                if (n === true) {
                    setTimeout(function() {
                        i.addClass(s);
                        i.css("opacity", 1)
                    }, r)
                } else {
                    setTimeout(function() {
                        i.removeClass(s);
                        i.css("opacity", 0)
                    }, r)
                }
            })
        })
    })(jQuery);
    jQuery("#commentform textarea").addClass("required");
    jQuery("#commentform").validate();
    jQuery("#shortcode_contactform").validate();
    jQuery(".portfolio-carousel").each(function() {
        "use strict";
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_portfolio_carousel", "");
            n(".portfolio-carousel").addClass("owl-carousel");
            n(".portfolio-carousel").owlCarousel({
                navigation: true,
                pagination: false,
                items: e,
                itemsDesktop: [1400, e],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [767, 2],
                itemsMobile: [479, 1]
            })
        }
    });
    jQuery(".blog-carousel").each(function() {
        "use strict";
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_blog_carousel", "");
            n(".blog-carousel").addClass("owl-carousel");
            n(".blog-carousel").owlCarousel({
                navigation: true,
                pagination: false,
                items: e,
                itemsLarge: [1400, e],
                itemsDesktop: [1200, e],
                itemsDesktopSmall: [979, 2],
                itemsTablet: [767, 2],
                itemsMobile: [479, 1]
            })
        }
    });
    jQuery(".widget .testimonial-carousel").each(function() {
        "use strict";
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_testimonial_carousel", "");
            n(".widget .testimonial-carousel").addClass("owl-carousel");
            n(".widget .testimonial-carousel").owlCarousel({
                navigation: true,
                pagination: false,
				autoPlay: false,
                items: e,
                itemsDesktop: [1200, e],
                itemsDesktopSmall: [979, 12],
                itemsTablet: [767, 1],
                itemsMobile: [479, 1]
            })
        }
    });
    jQuery(".testimonial-carousel").each(function() {
        "use strict";
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_testimonial_carousel", "");
            n(".testimonial-carousel").addClass("owl-carousel");
            n(".testimonial-carousel").owlCarousel({
                navigation: false,
                pagination: true,
                autoPlay: 3000,
                items: e,
                itemsDesktop: [1200, e],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [767, 1],
                itemsMobile: [479, 1]
            })
        }
    });
    jQuery(".upsells ul.products").each(function() {
        if (n(this).attr("class")) {
            var e = n(this).attr("class").replace("columns-", "");
            let x = e.substr(8);
            n(".upsells ul.products").addClass("owl-carousel");
            n(".upsells ul.products").owlCarousel({
                navigation: true,
                pagination: false,
                afterAction: function(el){
                    //remove class active
                    this
                    .$owlItems
                    .removeClass('active')
                    let a = 1;                    
                    let z = x - a;
                    
                    //add class active
                    this
                    .$owlItems //owl internal $ object containing items
                    .eq(this.currentItem + z)
                    .addClass('active')    
                },
                items: x,
                itemsLarge: [1400, 5],
                itemsDesktop: [1200, 4],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [767, 3],
                itemsMobile: [640, 2]
            })
        }
    });
    jQuery(".cross-sells ul.products").each(function() {
        if (n(this).attr("class")) {
            var e = n(this).attr("class").replace("columns-", "");
            let x = e.substr(8);
            console.log(x);
            n(".cross-sells ul.products").addClass("owl-carousel");
            n(".cross-sells ul.products").owlCarousel({
                navigation: true,
                pagination: false,
                afterAction: function(el){
                    //remove class active
                    this
                    .$owlItems
                    .removeClass('active')
                    let a = 1;                    
                    let z = x - a;
                    
                    //add class active
                    this
                    .$owlItems //owl internal $ object containing items
                    .eq(this.currentItem + z)
                    .addClass('active')    
                },
                items: x,
                itemsLarge: [1400, x],
                itemsDesktop: [1200, 4],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [767, 3],
                itemsMobile: [640, 2]
            })
        }
    });
    jQuery(".related ul.products").each(function() {
        if (n(this).attr("class")) {
            var e = n(this).attr("class").replace("columns-", "");
            let x = e.substr(8);
            n(".related ul.products").addClass("owl-carousel");
            n(".related ul.products").owlCarousel({                
                navigation: true,
                pagination: false,
                afterAction: function(el){
                    //remove class active
                    this
                    .$owlItems
                    .removeClass('first active')
                    let a = 1;
                    //add class active
                    this
                    .$owlItems //owl internal $ object containing items
                    .eq(this.currentItem)
                    .addClass('first active')

                    //remove class active
                    this
                    .$owlItems
                    .removeClass('last active')
                    let b = 1;
                    let z = x - b;
                    //add class active
                    this
                    .$owlItems //owl internal $ object containing items
                    .eq(this.currentItem + z)
                    .addClass('last active')  
                },
                items: x,
                itemsLarge: [1400, x],
                itemsDesktop: [1200, 4],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [767, 3],
                itemsMobile: [640, 2]
            })
        }
    });
    jQuery(".team-carousel").each(function() {
        "use strict";
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_team_carousel", "");
            n(".team-carousel").addClass("owl-carousel");
            n(".team-carousel").owlCarousel({
                navigation: true,
                pagination: false,
                items: e,
                itemsLarge: [1400, e],
                itemsDesktop: [1200, 4],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [767, 3],
                itemsMobile: [479, 1]
            })
        }
    });
    jQuery(".hot-product").each(function() {
        "use strict";                                 
            if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_hot_product_carousel", "");
            jQuery(".hot-product .products").addClass("owl-carousel");
            jQuery(".hot-product .products").owlCarousel({
                loop:true,
                //addClassActive: true,
                mouseDrag: true,
                touchDrag: false,
                navigation: true,
                pagination: false,
                autoPlay: 6500,
                afterAction: function(el){
                    //remove class active
                    this
                    .$owlItems
                    .removeClass('active')
                    let a = 1;
                    let z = e -a;
                    //add class active
                    this
                    .$owlItems //owl internal $ object containing items
                    .eq(this.currentItem + z)   
                },
                items: e,
                 itemsLarge: [1400, 1],
                itemsDesktop: [1200, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [767, 1],
                itemsMobile: [479, 1]
                    
            });
        }
    });
    jQuery(".woo-carousel").each(function() {
        "use strict";
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_woo_carousel", "");
            var t = n(this).find("ul.products .product").length;
            if (t > e) {
                n(this).find("ul.products").addClass("owl-carousel");
                n(this).find("ul.products").owlCarousel({
                    navigation: true,
                    pagination: false,
                    afterAction: function(el){
                        //remove class active
                        this
                        .$owlItems
                        .removeClass('first active')
                        let a = 1;
                        //add class active
                        this
                        .$owlItems //owl internal $ object containing items
                        .eq(this.currentItem)
                        .addClass('first active')  
                        
                         //remove class active
                        this
                        .$owlItems
                        .removeClass('last active')
                        let b = 1;
                        let z = e -b;
                        //add class active
                        this
                        .$owlItems //owl internal $ object containing items
                        .eq(this.currentItem + z)
                        .addClass('last active')     
                    },
                    items: e,
                    itemsLarge: [1400, 5],
                    itemsDesktop: [1250, 4],
                    itemsDesktopSmall: [979, 3],
                    itemsTablet: [767, 3],
                    itemsMobile: [640, 2]
                })
            }
        }
    })
    jQuery(".category-carousel").each(function() {
        "use strict";
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_category_carousel", "");
            n(".category-carousel").addClass("owl-carousel");
            n(".category-carousel").owlCarousel({
                navigation: false,
                pagination: false,
                items: e,
                autoPlay: 3000,
                itemsLarge: [1400, e],
                itemsDesktop: [1200, 4],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [767, 3],
                itemsMobile: [479, 2]
            })
        }
    });
    jQuery(".related_posts.blog-list").each(function() {
        "use strict";
        n(".related_posts.blog-list").addClass("owl-carousel");
        n(".related_posts.blog-list").owlCarousel({
            navigation: true,
            pagination: false,
            items: 2,
            itemsLarge: [1400, 2],
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [767, 2],
            itemsMobile: [479, 1],
            afterAction: function(el) {
                this.$owlItems.removeClass('active');
                this.$owlItems.eq(this.currentItem + 1).addClass('active');
            }
        })
    });
});
document.createElement("div");
document.createElement("section");
jQuery(window).load(function() {  "use strict";  isotopAutoSet()});
jQuery(window).resize(function() {"use strict";  isotopAutoSet()});
// JS toggle for sidebar and footer
function SidebarFooterToggle() {
    "use strict";
    jQuery('.widget .title-outer,.site-footer .title-outer,.toggle-content .title-outer,.widget_accepted_payment_methods .title-outer,.widget_nav_menu .title-outer, .woocommerce-shipping-calculator .shipping-calculator-button,.widget_block h2').on("click", function() {
        if (jQuery(this).parent().hasClass('toggled-on')) {
            jQuery(this).parent().removeClass('toggled-on');
            jQuery(this).parent().addClass('toggled-off');
        } else {
            jQuery(this).parent().addClass('toggled-on');
            jQuery(this).parent().removeClass('toggled-off');
        }
        return (false);
    });
}
jQuery(document).ready(function() {
    "use strict";
    SidebarFooterToggle()
});
// JS for adding treeview in navigationMenu sidebar product category
function leftCatMenu() {
    "use strict";
    jQuery('.primary-sidebar .product-categories,.widget_nav_menu,.widget_categories ul,.site-footer .widget_pages ul').addClass('treeview-list');
    jQuery(".primary-sidebar .product-categories.treeview-list,.widget_nav_menu.treeview-list,.widget_categories .treeview-list,.site-footer .widget_pages .treeview-list").treeview({
        animated: "slow",
        collapsed: true,
        unique: true
    });
    jQuery('.treeview-list a.active').parent().removeClass('expandable');
    jQuery('.treeview-list a.active').parent().addClass('collapsable');
    jQuery('.treeview-list .collapsable ul').css('display', 'block');
}
jQuery(document).ready(function() {
    "use strict";
    leftCatMenu()
});
// JS for adding treeview in Mobile Menu
function mobilenavigationMenu() {
    "use strict";
    jQuery('.mobile-menu .mobile-menu-inner').addClass('treeview-list');
    jQuery(".mobile-menu .mobile-menu-inner.treeview-list").treeview({
        animated: "slow",
        collapsed: true,
        unique: true
    });
}
jQuery(window).load(function() {
    "use strict";
    mobilenavigationMenu()
});

// JS for adding treeview in navigationMenu sidebar product category
function leftCatMenu1() {
    "use strict";
    jQuery('.box-category-container .product-categories').addClass('treeview-list');
    jQuery(".box-category-container .product-categories").treeview({
        animated: "slow",
        collapsed: true,
        unique: true
    });
    jQuery('.treeview-list a.active').parent().removeClass('expandable');
    jQuery('.treeview-list a.active').parent().addClass('collapsable');
    jQuery('.treeview-list .collapsable ul').css('display', 'block');
}
jQuery(document).ready(function() {
    "use strict";
    leftCatMenu1()
});

// JS for adding active class in Sidebar Category Menu
function categoryMenu() {
    "use strict";
    jQuery(".box-category").addClass('toggled-on');
    jQuery('.category-toggle').on("click", function() {
        if (jQuery(this).parent().hasClass('active')) {
            jQuery(this).parent().removeClass('active');
        } else {
            jQuery('.category-toggle').parent().removeClass('active');
            jQuery(this).parent().addClass('active');  
        }
    });
    jQuery('.close-menu').on("click", function() {
        if (jQuery(this).parent().parent().parent().hasClass('active')) {
            jQuery(this).parent().parent().parent().removeClass('active');
        } else {
            jQuery('.close-menu').parent().parent().parent().removeClass('active');
            jQuery(this).parent().parent().parent().addClass('active');
        }
    });
}
jQuery(document).ready(function() {
    "use strict";
    categoryMenu();
});

// JS for treeview for sidebar page list
function leftPageMenu() {
    "use strict";
    jQuery("#secondary .widget_pages ul").addClass('page-list');
    jQuery("#secondary .widget_pages ul.page-list").treeview({
        animated: "slow",
        collapsed: true,
        unique: true
    });
}
jQuery(window).load(function() {
    "use strict";
    leftPageMenu()
});
// JS for calling Owl Carousel
jQuery(window).load(function() {
    "use strict";
    jQuery('.aboutus .slides').owlCarousel({
        items: 1,
        autoPlay: 5000,
        singleItem: true,
        navigation: false,
        pagination: true,
        transitionStyle: 'fade'
    });
    jQuery('.banner-slider-container .slides').owlCarousel({
        items: 1,
        autoPlay: 5000,
        singleItem: true,
        navigation: false,
        pagination: true,
        transitionStyle: 'fade'
    });
});
// JS for adding active class in Mobile Menu
function mobileMenu() {
    "use strict";
    if (jQuery(window).width() < 1201) {
        jQuery('.mega-menu .mega').attr('id', 'menu-menu');
        jQuery('#menu-all-pages').removeClass('mega');
        jQuery('.mega-menu > ul').removeClass('mega');
    } else {
        jQuery('.mega-menu .mega > ul').addClass('mega');
        jQuery('.mega-menu .mega > ul').attr('id', 'menu-menu');
    }
    jQuery(".mobile-navigation").addClass('toggled-on');
    jQuery('.menu-toggle').on("click", function() {
        if (jQuery(this).parent().hasClass('active')) {
            jQuery(this).parent().removeClass('active');
        } else {
            jQuery('.menu-toggle').parent().removeClass('active');
            jQuery(this).parent().addClass('active');
        }
    });
    jQuery('.close-menu').on("click", function() {
        if (jQuery(this).parent().parent().hasClass('active')) {
            jQuery(this).parent().parent().removeClass('active');
        } else {
            jQuery('.close-menu').parent().parent().removeClass('active');
            jQuery(this).parent().parent().addClass('active');
        }
    });
}
jQuery(document).ready(function() {  "use strict";  mobileMenu() });

// JS for adding menu more link in navigation
function moreTab() {
    "use strict";
    var max_elem = 9;
    if (jQuery(window).width() < 1023) {
        var max_elem = 6;
    }
    jQuery('#site-navigation').addClass('more');
    jQuery('#site-navigation.more .mega > li').first().addClass('home_first');
    var items = jQuery('#site-navigation.more .mega > li');
    var surplus = items.slice(max_elem, items.length);
    surplus.wrapAll('<li class="cat-item level-0 hiden_menu cat-parent"><ul class="children">');
    jQuery('.hiden_menu').prepend('<a href="#" class="level-0  activSub">More</a>');
}
jQuery(document).ready(function() {
    "use strict";
    moreTab()
});


// JS for Sticky Header
function StickyHeader() {
    "use strict";
    var num = 300; //number of pixels before modifying styles
    jQuery(window).bind('scroll', function() {
        if (jQuery(window).scrollTop() > num) {
            jQuery('.header-fix').addClass('sticky-menu');
            jQuery('.site-header-fix').addClass('header-style');
            jQuery('.category-box').addClass('home-category-fix');
            jQuery('.home-category').addClass('home-category-fix1');
        } else {
            jQuery('.header-fix').removeClass('sticky-menu');
            jQuery('.site-header-fix').removeClass('header-style');
            jQuery('.category-box').removeClass('home-category-fix');
        }
    })
}
jQuery(document).ready(function() {
    "use strict";
    StickyHeader()
});
jQuery(window).resize(function() {
    "use strict";
    StickyHeader()
});
// JS for calling account toggle,top bar link toggle and responsive menu toggle
jQuery(document).ready(function() {
    "use strict";
    jQuery(".header-toggle").on("click", function() {
        jQuery(this).parent().toggleClass('active').parent().find('.woocommerce-product-search,.search-form').fadeToggle('fast');
    });
});
jQuery(window).load(function() {
    "use strict";
	if(jQuery(window).width() < 768) {	
	jQuery( ".header-search" ).appendTo( ".header-right" );
	}
});

// Countdown
function timecounter() {
    "use strict";
    jQuery('.countbox.hastime').each(function() {
        var countTime = jQuery(this).attr('data-time');
        jQuery(this).countdown(countTime, function(event) {
            jQuery(this).html(
                '<span class="timebox day"><span class="timebox-inner">' + event.strftime('%D') + '</span><span class="time day">day</span></span><span class="timebox hour"><span class="timebox-inner">' + event.strftime('%H') + '</span><span class="time hour">hour</span></span><span class="timebox minute"><span class="timebox-inner">' + event.strftime('%M') + '</span><span class="time min">min</span></span><span class="timebox second"><span class="timebox-inner">' + event.strftime('%S') + '</span><span class="time sec">sec</span></span>'
            );
        });
    });
}
jQuery(window).load(function() {
    "use strict";
    timecounter();
});
jQuery(window).resize(function() {
    "use strict";
    timecounter();
});
/***** Quantity format code  ******/
jQuery(document).ready(function($) {
    $(document).on('click', '.woocommerce .quantity .quantity-btn', function() {
        var $input = $(this).closest('.quantity').find('.input-text');
        if ($(this).hasClass('plus')) {
            $input.trigger('stepUp').trigger('change');
        }
        if ($(this).hasClass('minus')) {
            $input.trigger('stepDown').trigger('change');
        }
    });
});
//Preloader
jQuery(window).load(function() {
    "use strict";
    var preloaderFadeOutTime = 10;
        function hidePreloader() {
            var preloader = jQuery('.spinner-wrapper');
            preloader.fadeOut(preloaderFadeOutTime);
        }
        hidePreloader();
});


 // JS for auto adjust height for product li
 jQuery(window).load(function() {
	"use strict";
	var $height = 0 ;
	jQuery(".woo-list li.product .container-inner").each(function(){
	if((jQuery(this).height())>$height){
		$height = jQuery(this).height();
	}
	});
	jQuery(".woo-list li.product .container-inner").each(function(){
		jQuery(this).css("height",$height)
	});
});