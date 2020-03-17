/*global $, document */

$(document).ready(function () {
    "use strict";
    
    /* Start Checkbox */
    
    $(".checkbox input").each(function () {
        
        if($(this).prop("checked")) {
            $(this).next(".checkbox-container").html('<i class="fas fa-check"></i>');
            $(this).next(".checkbox-container").addClass("active");
        } else {
            $(this).next(".checkbox-container").html('');
            $(this).next(".checkbox-container").removeClass("active");
        }
    });
    
    $(".checkbox .checkbox-container").click(function () {
        
        if ($(this).prev().attr("disabled") != "disabled") {
            $(this).toggleClass("active");

            if ($(this).hasClass("active")){
                $(this).html('<i class="fas fa-check"></i>');
                $(this).prev("input").prop('checked', true);
            } else {
                $(this).html('');
                $(this).prev("input").prop('checked', false);
            }
        }
    });
    
    $(".checkbox input").change(function () {
        
        if($(this).prop("checked")) {
            $(this).next(".checkbox-container").html('<i class="fas fa-check"></i>');
            $(this).next(".checkbox-container").addClass("active");
        } else {
            $(this).next(".checkbox-container").html('');
            $(this).next(".checkbox-container").removeClass("active");
        }
    });
    
    /* End Checkbox */
    
    /* Start Radio */
    
    $(".radio input").each(function () {
        
        if($(this).prop("checked")) {
            $(this).next(".radio-container").html('<div class="circle"></div>');
            $(this).next(".radio-container").addClass("active");
        } else {
            $(this).next(".radio-container").html('');
            $(this).next(".radio-container").removeClass("active");
        }
    });
    
    $(".radio .radio-container").click(function () {
        
        if ($(this).prev().attr("disabled") != "disabled") {
            $("input[name='" + $(this).prev().attr("name") + "']").next(".radio-container").html('');
            $("input[name='" + $(this).prev().attr("name") + "']").next(".radio-container").removeClass("active");
            $(this).addClass("active");
            $(this).html('<div class="circle"></div>');
            $(this).prev("input").prop('checked', true);
        }
    });
    
    $(".radio input").change(function () {
        
        if($(this).prop("checked")) {
            $("input[name='" + $(this).attr("name") + "']").next(".radio-container").html('');
            $("input[name='" + $(this).attr("name") + "']").next(".radio-container").removeClass("active");
            $(this).next(".radio-container").html('<div class="circle"></div>');
            $(this).next(".radio-container").addClass("active");
        }
    });
    
    /* End Radio */
    
    /* Start File Input */
    
    $(".fileinput input").change(function () {
        
        if($(this).val() != '') {
            $(this).parents(".fileinput").find(".fileinput-exists").show();
            $(this).parents(".fileinput").find(".fileinput-new").hide();
            $(this).parents(".fileinput").find(".fileinput-filename").text($(this).val().replace(/C:\\fakepath\\/i, ''));
        } else {
            $(this).parents(".fileinput").find(".fileinput-exists").hide();
            $(this).parents(".fileinput").find(".fileinput-new").show();
            $(this).parents(".fileinput").find(".fileinput-filename").text('');
        }
    });
    
    $(".input-group-addon[data-dismiss='fileinput']").click(function (e) {
        e.preventDefault();
        $(this).parents(".fileinput").find("input").val('');
        $(this).parents(".fileinput").find(".fileinput-exists").hide();
        $(this).parents(".fileinput").find(".fileinput-new").show();
        $(this).parents(".fileinput").find(".fileinput-filename").text('');
    });
    
    /* End File Input */
    
});