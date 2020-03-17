/*global $, document, window */

$(document).ready(function () {
    "use strict";
    
    $("aside").innerHeight($(window).innerHeight() - 66);
    $("nav .messages-tab").innerHeight($(window).innerHeight() - (68 + 36 + 20));
    $("nav .messages-tab .body ul").innerHeight($(window).innerHeight() - (68 + 36 + 20 + 45 + 60));

    $("aside .group-list > ul > li.active > a > .drop").toggleClass("fa-chevron-right fa-chevron-down");
    $("aside .group-list > ul > li.active .sub-list").css("display", "block");
    $("aside .group-list > ul > li.active").addClass("active2");
    
    $("aside .group-list > ul > li.drop-down > a").click(function (e) {
        e.preventDefault();
        
        if (!$(this).parent().hasClass("active2")) {
            $("aside .group-list > ul > li").removeClass("active2");
            $("aside .group-list > ul > li .sub-list").slideUp();
            $("aside .group-list > ul > li > a > .drop").removeClass("fa-chevron-down").addClass("fa-chevron-right");
            $(this).parent().addClass("active2");
            $(this).parent().find(".sub-list").slideDown();
            $(this).parent().find("a > .drop").removeClass("fa-chevron-right").addClass("fa-chevron-down");
        } else {
            $(this).parent().toggleClass("active2");
            $(this).parent().find(".sub-list").slideToggle();
            $(this).parent().find("a > .drop").toggleClass("fa-chevron-right fa-chevron-down");
        }
        $("aside").getNiceScroll().resize();
    });
    
    $("aside .group-list > ul > li.drop-down .drop-down > a").click(function (e) {
        e.preventDefault();
        
        if (!$(this).parent().hasClass("active2")) {
            $("aside .group-list > ul > .drop-down li.drop-down").removeClass("active2");
            $("aside .group-list > ul > .drop-down li.drop-down .sub-list2").slideUp();
            $("aside .group-list > ul > .drop-down li.drop-down > a > .drop").removeClass("fa-chevron-down").addClass("fa-chevron-right");
            $(this).parent().addClass("active2");
            $(this).parent().find(".sub-list2").slideDown();
            $(this).parent().find("a > .drop").removeClass("fa-chevron-right").addClass("fa-chevron-down");
        } else {
            $(this).parent().toggleClass("active2");
            $(this).parent().find(".sub-list2").slideToggle();
            $(this).parent().find("a > .drop").toggleClass("fa-chevron-right fa-chevron-down");
        }
        $("aside").getNiceScroll().resize();
    });
    
    $("nav .left-side .sidebar-collabse").click(function () {
        
        if ($(window).innerWidth() < 992) {
            
            if ($("aside").css("left") == '0px') {
                $("aside").animate({left: '-225px'});
            } else {
                $("aside").animate({left: '0'});
            }
            
        } else {
            
            if ($("aside").css('left') == '0px') {
                
                $("aside").animate({left: '-225px'});
                $("nav .heading").animate({left: '-225px'});
                $(".content").animate({paddingLeft: 0});
                $("nav").animate({paddingLeft: 0});
            } else {
                
                $(".content").animate({paddingLeft: 225});
                $("nav").animate({paddingLeft: 225});
                $("nav .heading").animate({left: '0'});
                $("aside").animate({left: '0'});
            }
            
        }
    });
    
    $("nav .right-side .nav-tabs").click(function () {
        
        if (!$(this).hasClass("active")) {
            $("nav .right-side .nav-tabs").removeClass("active");
            $(this).addClass("active");
            $("nav .nav-tab").fadeOut();
            $(".tab-" + $(this).attr("data-tab")).fadeIn();
        } else {
            $(this).removeClass("active");
            $(".tab-" + $(this).attr("data-tab")).fadeOut();
        }
    });
    
    $("nav .right-side .tab-messages .tab").click(function () {
        
        if(!$(this).hasClass("active")) {
            $("nav .right-side .tab-messages .tab").removeClass("active");
            $("nav .right-side .tab-messages .messages-tab").fadeOut(0);
            $(this).addClass("active");
            $("nav .right-side .tab-messages ." + $(this).attr("data-tab")).fadeIn();
        }
    });
    
    $(".user").parent().css("position", "relative");
    
    $("html, aside, .messages-tab, .tab-siteMap").niceScroll();
    
    $('.siteMap-slick').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    
});