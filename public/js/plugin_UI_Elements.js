/*global $, document, window */

$(document).ready(function () {
    "use strict";
    
    /* Start Panel-Well */
    
    $(".panel .hide-body").click(function (e) {
        e.preventDefault();
        $(this).parents(".panel-heading").next().slideToggle();
        $(this).find("i").toggleClass("fa-chevron-down fa-chevron-up");
    });
    
    $(".panel .dropdown > a").click(function (e) {
        e.preventDefault();
        $(this).next().slideToggle();
    });
    
    $(".panel .full-screen").click(function (e) {
        e.preventDefault();
        $(this).parents(".panel").addClass("fullscreen");
    });
    
    $(".panel .anti-full-screen").click(function (e) {
        e.preventDefault();
        $(this).parents(".panel").removeClass("fullscreen");
    });
    
    $(".panel .close-panel").click(function (e) {
        e.preventDefault();
        $(this).parents(".panel").fadeOut();
    });
     
    $(".panel .nav-tabs li a").click(function (e) {
        e.preventDefault();
        
        if (!$(this).parent().hasClass("active")) {
            $(this).parent().addClass("active");
            $(this).parent().siblings().removeClass("active");
            
            $(this).parents(".panel").find("#" + $(this).attr("data-tab")).slideDown();
            $(this).parents(".panel").find("#" + $(this).attr("data-tab")).siblings().slideUp();
        }
    });
    
    /* End Panel-Well */
    
    /* Start Modal */
    
    $("[data-toggle='modal'][data-whatever]").click(function () {
        $($(this).attr('data-target')).find(".modal-title span").text($(this).attr('data-whatever'));
        $($(this).attr('data-target')).find("#recipient-name1").val($(this).attr('data-whatever'));
    });
    
    /* End Modal */
    
    /* Start Sweet Alert */
    
    $(".sweet-alert .body").each(function () {
        $(this).css("margin", (($(window).innerHeight() - $(this).innerHeight())/4) + "px auto");
    });
    
    $(".sa").click(function () {
        $($(this).attr("data-sa")).fadeIn();
        
        if($($(this).attr("data-sa")).hasClass("auto-closing")) {
            $($(this).attr("data-sa")).delay("2000").fadeOut();
        }
    });
    
    $(".sweet-alert .closing").click(function () {
        $(this).parents(".sweet-alert").fadeOut();
    });
    
    /* End Sweet Alert */
    
    /* Start Notifications */
    
    $(".toast-single .close-toast-single").click(function () {
        $(this).parents(".toast-single").hide();
    });
    
    $(".tst").click(function () {
        $(".toast-single").hide();
        $($(this).attr("data-note")).fadeIn(function () {
            $(this).find(".toast-loader").css('width', '100%');
            $(this).delay("2600").fadeOut(function () {
                $(this).find(".toast-loader").css('width', '0');
            });
        });
    });
    
    /* End Notifications */
    
    /* Start DropDowns */
    
    $(document).click(function(){
        $(".dropdown-menu").slideUp();
    });
    
    $(".dropdown.show-on-hover").click(function (e) {
        e.stopPropagation();
    });
    
    $("button[data-toggle='dropdown']").click(function (e) {
        e.stopPropagation();
        $(".dropdown-menu").removeClass("active");
        $(this).next(".dropdown-menu").addClass("active");
        $(".dropdown-menu").not(".active").slideUp();
        $(this).next(".dropdown-menu").slideToggle();
    });
    
    /* End DropDowns */
    
    /* Start Accordion */
    
    $(".one-open .panel-heading [data-toggle]").click(function () {
        
        if($(this).parent().hasClass("activestate")) {
            $(this).parent().removeClass("activestate");
            $($(this).attr("data-toggle")).slideUp();
            $(this).find(".icon-ac-wrap i").toggleClass("fa-plus fa-minus");
        } else {
            $(this).parents(".panel").find(".panel-heading").removeClass("activestate");
            $(this).parents(".panel").find(".panel-collapse").slideUp();
            $(this).parents(".panel").find(".icon-ac-wrap i").removeClass("fa-minus").addClass("fa-plus");
            $(this).parent().addClass("activestate");
            $($(this).attr("data-toggle")).slideDown();
            $(this).find(".icon-ac-wrap i").toggleClass("fa-plus fa-minus");
        }
    });
    
    $(".multiple-open .panel-heading [data-toggle]").click(function () {
        
        $(this).parent().toggleClass("activestate");
        $($(this).attr("data-toggle")).slideToggle();
    });
    
    /* End Accordion */
    
    /* Start Tabs */
    
    $(".pills-struct .nav-pills > li a").not("[data-toggle]").click(function (e) {
        e.preventDefault();
        
        if(!$(this).parent().hasClass("active")) {
            $(this).parents(".pills-struct").find(".nav-pills > li").removeClass("active");
            
            if($(this).hasClass("dropdown-item")) {
                $(this).parents(".dropdown").addClass("active");
            } else {
                $(this).parent().addClass("active");
            }
            
            $(this).parents(".pills-struct").find(".tab-pane").fadeOut(0);
            $(this).parents(".pills-struct").find($(this).attr("data-tab")).fadeIn();
        }
    });
    
    $(".tab-struct .nav-tabs2 > li a").not("[data-toggle]").click(function (e) {
        e.preventDefault();
        
        if(!$(this).parent().hasClass("active")) {
            $(this).parents(".tab-struct").find(".nav-tabs2 > li").removeClass("active");
            
            if($(this).hasClass("dropdown-item")) {
                $(this).parents(".dropdown").addClass("active");
            } else {
                $(this).parent().addClass("active");
            }
            
            $(this).parents(".tab-struct").find(".tab-pane").fadeOut(0);
            $(this).parents(".tab-struct").find($(this).attr("data-tab")).fadeIn();
        }
    });
    
    /* End Tabs */
    
});