jQuery("html").removeClass("no-js").addClass("js");
if (navigator.appVersion.indexOf("Mac") !== -1) {
    jQuery("html").addClass("osx")
}
jQuery(document).ready(function (e) {
    e("a[data-rel]").each(function () {
        e(this).attr("rel", e(this).data("rel"))
    });
    e("a[rel^='prettyPhoto']").prettyPhoto({
        animation_speed: "normal",
        slideshow: 5e3,
        autoplay_slideshow: false,
        social_tools: false,
        keyboard_shortcuts: true,
        show_title: false,
        opacity: 0.98,
        theme: 'light_rounded' /* light_rounded / dark_rounded / light_square / dark_square / facebook */
    });
    e(".fittext1").fitText(1, {
        minFontSize: "15px",
        maxFontSize: "30px"
    });
    e(".fittext2").fitText(.4, {
        minFontSize: "30px",
        maxFontSize: "86px"
    });
    e(".fittext3").fitText(.4, {
        minFontSize: "30px",
        maxFontSize: "86px"
    });
    e(".fittext4").fitText(1.5, {
        minFontSize: "15px",
        maxFontSize: "24px"
    });
    (function () {
        e(window).load(function () {
            e("a[rel=external]").attr("target", "_blank")
        })
    })();
    e(window).load(function () {
        e(".slider1").flexslider({
            animation: "slide",
            animationLoop: false,
            directionNav: false,
            itemWidth: 300,
            itemMargin: 0
        });
        e(".slider2").flexslider({
            animation: "slide",
            directionNav: true,
            slideshow: false,
            animationLoop: false
        });
        e(".flexslider").flexslider({
            animation: "slide",
            slideshow: false,
            directionNav: false,
            start: function (t) {
                e("body").removeClass("loading")
            }
        })
    });
    e("nav").sticky({
        topSpacing: 0
    });
    e("nav").localScroll({
        duration: 600,
        offset: {
            top: 0,
            left: 0
        }
    });
    e(".select-menu").change(function () {
        e("html, body").animate({
            scrollTop: e(e(this).find("option:selected").val()).offset().top
        }, 1e3, function () {
            window.location.hash = e(this).find("option:selected").val()
        })
    });
    e("<option />", {
        selected: "selected",
        value: "",
        text: "Navigation"
    }).appendTo(".select-menu");
    e(".navi a").each(function () {
        var t = e(this);
        e("<option />", {
            value: t.attr("href"),
            text: t.attr("title")
        }).appendTo(".select-menu")
    });
    e(window).scroll(function () {
        var t = e(window).scrollTop();
        e('.navi a[href*="home"]').addClass("active");
        e('.navi a[href*="about"]').removeClass("active");
        e('.navi a[href*="location"]').removeClass("active");
        e('.navi a[href*="gifts"]').removeClass("active");
        e('.navi a[href*="tableware"]').removeClass("active");
        e('.navi a[href*="gallery"]').removeClass("active");
        e('.navi a[href*="contact"]').removeClass("active");
        if (t >= e("#home").height() + e("#slide").height() - 60) {
            e('.navi a[href*="home"]').removeClass("active");
            e('.navi a[href*="about"]').addClass("active")
        }
        if (t >= e("#home").height() + e("#slide").height() + e("#about").height()) {
            e('.navi a[href*="home"]').removeClass("active");
            e('.navi a[href*="about"]').removeClass("active");
            e('.navi a[href*="location"]').addClass("active")
        }
        if (t >= e("#home").height() + e("#slide").height() + e("#about").height() + e("#location").height()) {
            e('.navi a[href*="home"]').removeClass("active");
            e('.navi a[href*="about"]').removeClass("active");
            e('.navi a[href*="location"]').removeClass("active");
            e('.navi a[href*="gifts"]').addClass("active")
        }
        if (t >= e("#home").height() + e("#slide").height() + e("#about").height() + e("#location").height() + e("#gifts").height()) {
            e('.navi a[href*="home"]').removeClass("active");
            e('.navi a[href*="about"]').removeClass("active");
            e('.navi a[href*="location"]').removeClass("active");
            e('.navi a[href*="gifts"]').removeClass("active");
            e('.navi a[href*="tableware"]').addClass("active")
        }
        if (t >= e("#home").height() + e("#slide").height() + e("#about").height() + e("#location").height() + e("#gifts").height() + e("#tableware").height()) {
            e('.navi a[href*="home"]').removeClass("active");
            e('.navi a[href*="about"]').removeClass("active");
            e('.navi a[href*="location"]').removeClass("active");
            e('.navi a[href*="gifts"]').removeClass("active");
            e('.navi a[href*="tableware"]').removeClass("active");
            e('.navi a[href*="gallery"]').addClass("active")
        }
        if (t >= e("#home").height() + e("#slide").height() + e("#about").height() + e("#location").height() + e("#gifts").height() + e("#tableware").height() + e("#gallery").height()) {
            e('.navi a[href*="home"]').removeClass("active");
            e('.navi a[href*="about"]').removeClass("active");
            e('.navi a[href*="location"]').removeClass("active");
            e('.navi a[href*="gifts"]').removeClass("active");
            e('.navi a[href*="tableware"]').removeClass("active");
            e('.navi a[href*="gallery"]').removeClass("active");
            e('.navi a[href*="contact"]').addClass("active")
        }
    })
})
$('.img-container').height($('.span4').width());
window.onresize = function (event) {
    $('.img-container').height($('.span4').width());
}
// $('.img-container').height($('.img-container').width());



$('.color').each(function() {
    $(this).css('background-color', $(this).data('color'))
});
$(document).ready(function() {
  $('.jqzoom').jqzoom({
            zoomType: 'innerzoom',
            preloadImages: false,
            alwaysOn:false
        }).hide().eq(0).show();
});
// $('.shop_images').eq(0).show();

$('.color').on('click', function() {
    var color = $(this).data('color');
    $('.shop_images .jqzoom').hide();
    $('.shop_images .jqzoom[data-color='+color+']').show();
    $('option[data-color='+color+']').attr("selected",true);
})