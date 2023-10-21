
$(document).ready(function(){
	"use strict";

	var window_width 	 = $(window).width(),
	window_height 		 = window.innerHeight,
	header_height 		 = $(".default-header").height(),
	header_height_static = $(".site-header.static").outerHeight(),
	fitscreen 			 = window_height - header_height;


	$(".fullscreen").css("height", window_height)
    $(".fitscreen").css("height", fitscreen);

  //------- Active Nice Select --------//

    $('select').niceSelect();


    $('.navbar-nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });

    $('.img-pop-up').magnificPopup({
        type: 'image',
        gallery:{
        enabled:true
        }
    });

    // Search Toggle
    $("#search_input_box").hide();
    $("#search").on("click", function () {
        $("#search_input_box").slideToggle();
        $("#search_input").focus();
    });
    $("#close_search").on("click", function () {
        $('#search_input_box').slideUp(500);
    });

    /*==========================
		javaScript for sticky header
		============================*/
	$(".sticky-header").sticky();

  //  setTimeout(toggleMute,1000);
    const anchor = document.querySelector('.header');
    const vid = document.createElement('video');
    vid.setAttribute('loop', '');
    vid.setAttribute('src', 'http://127.0.0.1:8000/video/bihter_aptallik_etme.mp4');
    vid.oncanplay = () => {
        vid.muted = true;
        vid.play();
    }
    anchor.appendChild(vid);

 });

function toggleMute() {

    var video=document.getElementById("videoId");

    if(video.muted){
        video.muted = false;
    } else {
        debugger;
        video.muted = true;
        video.play()
    }

}

