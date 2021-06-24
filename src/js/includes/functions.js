// -----------------------------------------------
// -----------------------------------------------
// Header onScroll

window.onscroll = function() {myFunction(), hideHeaderBar()};

var header = document.getElementById("header");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("header--scrolled");
  } else {
    header.classList.remove("header--scrolled");
  }
}


var prevScrollpos = window.pageYOffset;

function hideHeaderBar(){
    var currentScrollPos = window.pageYOffset;
    if (currentScrollPos > prevScrollpos) {
        jQuery('.header-bar').removeClass('active');
        jQuery('.info-switch span').removeClass('active');
    }else{
        /*jQuery('.header-bar').removeClass('active');*/
    }
    prevScrollpos = currentScrollPos;
}


// -----------------------------------------------
// -----------------------------------------------
// Off-Canvas
// https://github.com/appleple/hiraku2

var offcanvas = new Hiraku(".offcanvas", {
    btn: "#offcanvas-trigger",
    fixedHeader: "#header",
    width: '50%',
    direction: "right"
});
offcanvas.on('open', function(){
    offcanvas.btn.classList.add('is-active');
});
offcanvas.on('close', function(){
    offcanvas.btn.classList.remove('is-active');
});


// -----------------------------------------------
// -----------------------------------------------
// jQuery Functions

jQuery(document).ready(function () {
    'use strict';

    if (window.location.hash) {
        setTimeout(function() {
            scrollTo(window.location.hash);
        }, 1);
    }

    //INFO SWITCHER
    jQuery('.info-switch span').click(function(){
        jQuery('.info-switch span').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.header-bar').addClass('active');
        if(jQuery('.info-switch .allgemeine-infos-btn').hasClass('active')){
            jQuery('.kontakt-infos').removeClass('active');
            jQuery('.allgemeine-infos').addClass('active');
        }else{
            jQuery('.allgemeine-infos').removeClass('active');
            jQuery('.kontakt-infos').addClass('active');
        }
    });

    // CUSTOM POPUP
    jQuery('.open-custom-popup').click(function(){
        jQuery('.custom-popup').css('display', 'flex');
    });
    jQuery('.custom-popup .popup-close').click(function(){
        jQuery('.custom-popup').css('display', 'none');
    });

    var today = new Date().getDay();
    jQuery('.oeffnungszeiten-table tr:nth-child('+today+')').css('background', '#143A89');
    jQuery('.oeffnungszeiten-table tr:nth-child('+today+')').css('color', '#fff');

    // -----------------------------------------------
    // -----------------------------------------------
    // MODAL / LIGHTBOX

    MicroModal.init({
        openTrigger: 'data-custom-open',
    });

    jQuery('[data-custom-open="dyn-modal"]').click(function() {
        var title = jQuery(this).data('title');
        var content = decodeURIComponent(jQuery(this).data('content').replace(/\+/g, ' '));

        jQuery('#dyn-modal-title').empty().append(title);
        jQuery('#dyn-modal-content').empty().append(content);
    });

    jQuery('[data-custom-open="dyn-modal"]').click(function() {
        var title = jQuery(this).data('title');
        var subtitle = jQuery(this).data('subtitle');
        var content = decodeURIComponent(jQuery(this).data('content').replace(/\+/g, ' '));

        jQuery('#dyn-modal-title').empty().append(title);
        jQuery('#dyn-modal-subtitle').empty().append(subtitle);
        jQuery('#dyn-modal-content').empty().append(content);
    });

    // -----------------------------------------------
    // -----------------------------------------------
    // ANCHOR LINKS

    jQuery('main a[href*="#"]:not([class*=accordion]):not(._brlbs-btn), header a[href*="#"]:not([class*=accordion]), .offcanvas a[href*="#"]:not([class*=accordion]), .w-scrollto').stop().click(function(e) {
        var target = jQuery(this).attr("href");
        var current_url = window.location.origin + window.location.pathname;

        if(target !== "#") {

            if(target.charAt(0) == '#') {
                e.preventDefault();
                scrollTo(target);
                //UIkit.offcanvas('#offcanvas').hide();
                offcanvas.close();

            } else if(target.indexOf(current_url) !== -1) {
                e.preventDefault();
                target = target.replace(current_url, '');
                scrollTo(target);
                //UIkit.offcanvas('#offcanvas').hide();
                offcanvas.close();

            }
        }
    });

    // -----------------------------------------------
    // -----------------------------------------------

});

function scrollTo(target)
{
    var distance = jQuery(target).offset().top;
    var navHeight = jQuery('.header').outerHeight() + 40;

    jQuery('html, body').animate({
        scrollTop: (distance-navHeight)
    }, 600);
}

