//Search bar toggle
var header_search_toggle_btn = jQuery('#header_search_toggle'),
    header_search_form = jQuery('#header_search_form'),
    header_search_form_close_btn = header_search_form.find('.close_btn');
    header_buttons = jQuery('#header_buttons');


header_search_toggle_btn.click(function () {
    header_buttons.removeClass('flipInX').addClass('fadeOut');
    header_search_form.css('display','block').removeClass('flipOutX').addClass('flipInX');
    header_search_form.find('.search-field').focus();
})
header_search_form_close_btn.click(function () {
   header_search_form.removeClass('flipInX').addClass('flipOutX');
    header_buttons.removeClass('fadeOut').addClass('flipInX');
});


/********************************

 Top slider Owl Carousel

 ********************************/

var top_slider = jQuery('#top_slider');

top_slider.owlCarousel({
    singleItem: true,
    autoPlay: true,
    lazyLoad: true
});


/********************************

 back to top button

 ********************************/
var btt = $('.back-to-top');
btt.on('click', function () {
    $('html, body').animate({
        scrollTop: 0
    }, 800, function () {
        btt.fadeOut();
    });
})
$(window).on('scroll', function () {
    var self = $(this),
        height = self.height(),
        top = self.scrollTop();

    if (top > height) {
        if (!btt.is(':visible')) {
            btt.fadeIn();
        }
    }
})

/********************************

   Vertical Carousel

 ********************************/
var secteur_activite = jQuery('.secteur-activite'),
    secteur_activite_main_carousel = secteur_activite.find('.main-carousel');

secteur_activite_main_carousel.owlCarousel({
    singleItem: true,
    autoPlay: true,
    lazyLoad: true
});


$('.vert-carousel').each(function () {
    var vertCarousel = $(this),
        carousel = vertCarousel.find('.owl-carousel'),
        prevBtn = vertCarousel.find('.prev'),
        nextBtn = vertCarousel.find('.next'),
        thumbnails = vertCarousel.find('.thumbs'),
        items = vertCarousel.find('.thumb');

    carousel.owlCarousel({
        singleItem: true,
        autoPlay: true,
        lazyLoad: true,
        itemsDesktop: 	[1199,1],
        itemsDesktopSmall: [979,1],
        itemsTablet: [768,1]
    });

    var owl = carousel.data('owlCarousel');

    items.each(function (index) {
        $(this).click(function () {
            owl.goTo(index);
        })
    })


    prevBtn.click(function () {
        owl.prev()
    })
    nextBtn.click(function () {
        owl.next()
    })
})



/********************************

 Metiers carousel

 ********************************/

var carousel_metiers_section = $('#carousel_metiers'),
    carousel_metiers = carousel_metiers_section.find('.owl-carousel'),
    prevBtn = carousel_metiers_section.find('.control.prev'),
    nextBtn = carousel_metiers_section.find('.control.next');


carousel_metiers.owlCarousel({
    items: 4,
    autoPlay: true,
    lazyLoad: true
});

var owlMetiers = carousel_metiers.data('owlCarousel');

prevBtn.click(function () {
    owlMetiers.prev();
})
nextBtn.click(function () {
    owlMetiers.next();
})

/********************************

   Evenements carouosel

 ********************************/

var carousel_evenements_section = $('#carousel_evenements'),
    carousel_evenements = carousel_evenements_section.find('.owl-carousel');

var slide_controls = carousel_evenements_section.find('.frame');


carousel_evenements.owlCarousel({
    singleItem: true,
    autoPlay: true,
    lazyLoad: true,
    slideSpeed: 1000,
    afterAction: updateFrame
});

var owl_evenements = carousel_evenements.data('owlCarousel');

function carouselEvenements() {
    slide_controls.each(function (index) {
        $(this).hover(function () {
            carousel_evenements_section
                .find('.active')
                .removeClass('active');

            $(this).addClass('active');
            owl_evenements.goTo(index);
        })
    })
}
$(carouselEvenements());

function updateFrame() {
    var current = this.currentItem;
    carousel_evenements_section
        .find('.frame')
        .removeClass('active')
        .eq(current)
        .addClass('active');
}

/********************************

 Photos métier carousel

 ********************************/

var photosMetier = $('#photos-metier').find('.owl-carousel');
photosMetier.owlCarousel({
    items: 3,
    itemsDesktop: [1199, 2],
    itemsDesktopSmall: [979, 2],
    itemsTablet: [768, 2],
    autoPlay: true,
    lazyLoad: true,
    slideSpeed: 1000
});


/********************************

 section temoignages carousel

 ********************************/

var carousel_section_temoignages = $('#section_temoignages'),
    carousel_temoignages = carousel_section_temoignages.find('.owl-carousel'),
    prevBtn = carousel_section_temoignages.find('.control.prev'),
    nextBtn = carousel_section_temoignages.find('.control.next');
carousel_temoignages.owlCarousel({
    items: 2,
    itemsDesktop: [1199,2],
    itemsDesktopSmall: [979,2],
    itemsTablet: [768,1],
    autoPlay: true,
    lazyLoad: true,
    transitionStyle : "goDown"
});

var owlTemoignages = carousel_temoignages.data('owlCarousel');

prevBtn.click(function () {
    owlTemoignages.prev();
})
nextBtn.click(function () {
    owlTemoignages.next();
})


/********************************

   Items animations on scroll

 ********************************/




var $animation_elements = jQuery('*[data-animate]'),
    $window = jQuery(window);

$window.on('scroll',check_if_in_view);

function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    $.each($animation_elements, function() {
        var $element = jQuery(this);
        var $animation = $element.attr('data-animate');
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);


        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
            $element.addClass('animated data-animated '+$animation);
        }
    });
}


/********************************

   scroll to top function

 ********************************/


$(function() {
    $('a.anchor[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});



/********************************

 Tooltip activation

 ********************************/

$(function () { $("[data-toggle='tooltip']").tooltip(); });



/********************************

 Hyphenator run

 ********************************/

Hyphenator.config({
    classname: 'the-content'
});
Hyphenator.run();


/********************************

 Google map

 ********************************/


function initMap() {
    var etablissement = {lat: 0.397249, lng: 9.445977};
    var map = new google.maps.Map(document.getElementById('googlemap'), {
        center: etablissement,
        zoom: 18,
        scrollwheel: false
    });

    var marker = new google.maps.Marker({
        position: etablissement,
        map: map,
        animation: google.maps.Animation.DROP,
        title: 'Emplacement de l\'établissement'
    });
}


/********************************

 Exerpt function

 ********************************/


var extraits = $('.extrait');
var extraitShort = $('.extrait-short');
extraits.each(function () {
    var excerpt = $(this);
    if (excerpt.text().length > 145) {
        excerpt.text(excerpt.text().substring(0, 145) + ' [...]');
    }
});
extraitShort.each(function () {
    var excerpt = $(this);
    if (excerpt.text().length > 100) {
        excerpt.text(excerpt.text().substring(0, 100) + ' [...]');
    }
});





/********************************

 posts-widget tabs

 ********************************/
var posts_widget = $('.posts-widget');
var postsWidgetCarousel = posts_widget.find('.owl-carousel');

postsWidgetCarousel.owlCarousel({
    singleItem: true,
    dots: false,
    afterAction: updateTabs
});

var owlPostsWidget = postsWidgetCarousel.data('owlCarousel');
var tabs = posts_widget.find('.tab');

tabs.each(function (index) {
    $(this).click(function () {
        owlPostsWidget.goTo(index);
    })
})

function updateTabs() {
    var current = this.currentItem;

    posts_widget
        .find('.tab')
        .removeClass('active')
        .eq(current)
        .addClass('active');
}

/********************************

 Dropdown Toggle Clear defaults

 ********************************/

/*$('.dropdown-toggle').click(function () {
    $(this).preventDefault();
})*/
/*

$('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).removeClass('animated flipOutX').addClass('animated flipInX').css('display','block');
}, function() {
    $(this).find('.dropdown-menu').stop(true, true).removeClass('animated flipInX').addClass('animated flipOutX').css('display','none');
})
*/
