jQuery(document).ready(function ($) {
    
/**
* Sub Menu
*/
$('.navbar .menu-item-has-children').append('<span class="sub-toggle"> <i class="fa fa-plus"></i> </span>');
$('.navbar .page_item_has_children').append('<span class="sub-toggle-children"> <i class="fa fa-plus"></i> </span>');

$('.navbar .sub-toggle').click(function() {
    $(this).parent('.menu-item-has-children').children('ul.sub-menu').first().slideToggle('1000');
   /* $(this).parent('.menu-item-has-children').children('.fa-plus').first().toggleClass('fa-minus');*/
    $(this).parent('.menu-item-has-children').children('.sub-toggle').children('i').toggleClass('fa-minus');

});

$('.navbar .sub-toggle-children').click(function() {
    $(this).parent('.page_item_has_children').children('ul.sub-menu').first().slideToggle('1000');
    $(this).children('.fa-plus').first().toggleClass('fa-minus');
});


$('.menu-nav-toggle').click(function(){
    $(this).toggleClass('open');
    $(this).parent('.navbar-header').next().first().slideToggle('1000');
})

/**
 * Gallery Lightbox
 */
$("a[rel^='prettyPhoto']").prettyPhoto({
    theme: 'light_rounded',
    slideshow: 5000,
    autoplay_slideshow: false,
    keyboard_shortcuts: true,
    deeplinking: false,
    default_width: 500,
    default_height: 344,
    social_tools: false,
    allow_resize: false
});


/**
 * Main Banner Slider
 */
var owl = $('#main-slider');
owl.owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

/**
 * Our Trainers
 */
var trainers = $('#trainers-slider');
trainers.owlCarousel({
    loop: true,
    margin: 10,
    autoplay: false,

    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

//Fired before current slide change
owl.on('change.owl.carousel', function (event) {
    var $currentItem = $('.owl-item', owl).eq(event.item.index);
    var $elemsToanim = $currentItem.find("[data-animation-out]");
    setAnimation($elemsToanim, 'out');
});

// Fired after current slide has been changed
var round = 0;
owl.on('changed.owl.carousel', function (event) {

    var $currentItem = $('.owl-item', owl).eq(event.item.index);
    var $elemsToanim = $currentItem.find("[data-animation-in]");

    setAnimation($elemsToanim, 'in');
})
// add animate.css class(es) to the elements to be animated
function setAnimation(_elem, _InOut) {
    // Store all animationend event name in a string.
    // cf animate.css documentation
    var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

    _elem.each(function () {
        var $elem = $(this);
        var $animationType = 'animated ' + $elem.data('animation-' + _InOut);

        $elem.addClass($animationType).one(animationEndEvent, function () {
            $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
        });
    });
}


});


