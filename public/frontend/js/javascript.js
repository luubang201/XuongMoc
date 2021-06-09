$(window).scroll(function () {
    let header = $('header').height();
    if ($(window).scrollTop() > 20) {
        $('header').addClass('fixed');
    } else {
        $('header').removeClass('fixed');
    }
});

$('.res-menu').click(function () {
    $(this).toggleClass('active');
    if ($('.menu').attr('data-show') == 0) {
        $('.menu').addClass('active');
        $('.menu').removeClass('noactive');
        $('.menu').attr('data-show', 1);
    } else {
        $('.menu').addClass('noactive');

        setTimeout(function () {
            $('.menu').removeClass('active');
            $('.menu').attr('data-show', 0);
        }, 200)
    }
});

//Toggled Search Bar
$(document).ready(function () {
    $('[data-toggle=search-form]').click(function () {
        $('.search-form-wrapper').toggleClass('active');
        $('.search-form-wrapper .search').focus();
        $('.wrap').toggleClass('search-form-open sidebar-move');
    });
    $('[data-toggle=search-form-close]').click(function () {
        $('.search-form-wrapper').removeClass('active');
        $('.wrap').removeClass('search-form-open');
    });
    $('.search-form-wrapper .search').keypress(function (event) {
        if ($(this).val() == "Search") $(this).val("");
    });

    $('.search-close').click(function (event) {
        $('.search-form-wrapper').removeClass('active');
        $('.wrap').removeClass('search-form-open');
    });
});

//Click outside div to hide div in pure JavaScript
window.onload = function () {
    var searchnav = document.getElementById('search-nav');
    var maincontent = document.getElementById('main-content');
    var overlay = document.getElementById('site-overlay');
    var openMenu = document.getElementById('open-search');
    document.onclick = function (e) {
        if (e.target.id == 'main-content') {
            searchnav.classList.remove('active');
            maincontent.classList.remove('sidebar-move');
            overlay.classList.remove('active');
        }
        if (e.target === openMenu) {
            searchnav.style.display = 'block';
            maincontent.classList.add('search-form-open sidebar-move');
            overlay.classList.add('active');
        }
    };
};

// Slick Banner Product
$('.banner-prod').slick({
    dots: true,
    arrow: true,
    infinite: true,
    slidesToScroll: 1,
    slidesToShow: 1
});

// Slick Hot Product
$('.slide-prd').slick({
    arrow: true,
    infinite: true,
    slidesToScroll: 1,
    slidesToShow: 4,
    responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

// Slick Partner
$('.slide-partner').slick({
    dots: false,
    arrow: false,
    infinite: false,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }
    ]
});