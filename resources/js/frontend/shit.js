$(function () {

    /*******************************  Main page ***************************************************/
    /*--- Slider on main page ---*/


    /*--- Open seo-text on main page ---*/
    $('.seo-block__btn-read-more').click(function() {
        $('.seo-block__wrapper-seo-text').css('height','auto');
        $('.seo-block__btn-read-more').hide();
    });


    /*--- Button Go Up in footer ---*/

    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#scrollup').fadeIn();
            $('#scrollup').css('display','flex');
        } else {
            $('#scrollup').fadeOut();
        }
    });

    $('#scrollup').click(function(){
        $('html, body').animate({ scrollTop: 0 }, 400);
        return false;
    });

    /************************************* Template Big Card Product *********************************************/
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        focusOnSelect: true,
        vertical: true,
        verticalSwiping: true
    });

    /*--- Open big photo ---*/
    $('.slider-product__btn-look-big-picture').click(function() {
        $('.overflow').addClass('active');
        $('.popup__popup-big-photo-on-template-BC-product').addClass('active');
        $('body').css('overflow','hiden');
    });

    $('.popup__btn-close').click(function() {
        $('.overflow').removeClass('active');
        $('.popup__popup-big-photo-on-template-BC-product').removeClass('active');
        $('body').css('overflow','auto');
    });

    /*--- tabs on Template-BC-product---*/
    $('#template-product-card__open-tab-1').click(function() {
        $('#template-product-card__open-tab-1').toggleClass('active');
        $('#template-product-card__tab-1').toggleClass('active');

        $('#template-product-card__open-tab-2, #template-product-card__open-tab-3').removeClass('active');
        $('#template-product-card__tab-2, #template-product-card__tab-3').removeClass('active');
    });
    $('#template-product-card__open-tab-2').click(function() {
        $('#template-product-card__open-tab-2').toggleClass('active');
        $('#template-product-card__tab-2').toggleClass('active');

        $('#template-product-card__open-tab-1, #template-product-card__open-tab-3').removeClass('active');
        $('#template-product-card__tab-1, #template-product-card__tab-3').removeClass('active');
    });
    $('#template-product-card__open-tab-3').click(function() {
        $('#template-product-card__open-tab-3').toggleClass('active');
        $('#template-product-card__tab-3').toggleClass('active');

        $('#template-product-card__open-tab-1, #template-product-card__open-tab-2').removeClass('active');
        $('#template-product-card__tab-1, #template-product-card__tab-2').removeClass('active');
    });

    /*--- tabs on BC-product---*/
    $('#product-card__open-tab-1').click(function() {
        $('#product-card__open-tab-1').toggleClass('active');
        $('#product-card__tab-1').toggleClass('active');

        $('#product-card__open-tab-2').removeClass('active');
        $('#product-card__tab-2').removeClass('active');
    });
    $('#product-card__open-tab-2').click(function() {
        $('#product-card__open-tab-2').toggleClass('active');
        $('#product-card__tab-2').toggleClass('active');

        $('#product-card__open-tab-1').removeClass('active');
        $('#product-card__tab-1').removeClass('active');
    });

    /*--- add stars raiting ---*/
    $('.tab-content__my-rating-star.one').click(function() {
        $('.tab-content__my-rating-star.one').addClass('active');

        $('.tab-content__my-rating-star.two').removeClass('active');
        $('.tab-content__my-rating-star.three').removeClass('active');
        $('.tab-content__my-rating-star.four').removeClass('active');
        $('.tab-content__my-rating-star.five').removeClass('active');

        $('#my-rating-value').text('1');
    });

    $('.tab-content__my-rating-star.two').click(function() {
        $('.tab-content__my-rating-star.one').addClass('active');
        $('.tab-content__my-rating-star.two').addClass('active');

        $('.tab-content__my-rating-star.three').removeClass('active');
        $('.tab-content__my-rating-star.four').removeClass('active');
        $('.tab-content__my-rating-star.five').removeClass('active');

        $('#my-rating-value').text('2');
    });

    $('.tab-content__my-rating-star.three').click(function() {
        $('.tab-content__my-rating-star.one').addClass('active');
        $('.tab-content__my-rating-star.two').addClass('active');
        $('.tab-content__my-rating-star.three').addClass('active');

        $('.tab-content__my-rating-star.four').removeClass('active');
        $('.tab-content__my-rating-star.five').removeClass('active');

        $('#my-rating-value').text('3');
    });

    $('.tab-content__my-rating-star.four').click(function() {
        $('.tab-content__my-rating-star.one').addClass('active');
        $('.tab-content__my-rating-star.two').addClass('active');
        $('.tab-content__my-rating-star.three').addClass('active');
        $('.tab-content__my-rating-star.four').addClass('active');

        $('.tab-content__my-rating-star.five').removeClass('active');

        $('#my-rating-value').text('4');
    });

    $('.tab-content__my-rating-star.five').click(function() {
        $('.tab-content__my-rating-star.one').addClass('active');
        $('.tab-content__my-rating-star.two').addClass('active');
        $('.tab-content__my-rating-star.three').addClass('active');
        $('.tab-content__my-rating-star.four').addClass('active');
        $('.tab-content__my-rating-star.five').addClass('active');

        $('#my-rating-value').text('5');
    });

    /*--- Открытие и закрытие фильтров ---*/
    $('.filter-item-volume__menu-volume').click(function() {
        $('.menu-volume__items-menu').toggleClass('active');
        $('.filter-item-volume__menu-volume').toggleClass('active');
    });

    $('.filter-item-manufacturer__menu-manufacturer').click(function() {
        $('.menu-manufacturer__items-menu').toggleClass('active');
        $('.filter-item-manufacturer__menu-manufacturer').toggleClass('active');
    });

    $('.filter-item-price__menu-price').click(function() {
        $('.menu-price__items-menu').toggleClass('active');
        $('.filter-item-price__menu-price').toggleClass('active');
    });

    $('.filter-item-rating__menu-rating').click(function() {
        $('.menu-rating__items-menu').toggleClass('active');
        $('.filter-item-rating__menu-rating').toggleClass('active');
    });

    $('.filter-item-type__menu-type').click(function() {
        $('.menu-type__items-menu').toggleClass('active');
        $('.filter-item-type__menu-type').toggleClass('active');
    });

    /*--- Переключение сортировок ---*/
    $('.sort-results__btn-sort-popular').click(function() {
        if(!$('.sort-results__btn-sort-popular').hasClass('active')) {
            $('.sort-results__btn-sort-popular').addClass('active');
            $('.sort-results__btn-sort-rating').removeClass('active');
            $('.sort-results__btn-sort-highest').removeClass('active');
            $('.sort-results__btn-sort-lowest').removeClass('active');
        }
    });

    $('.sort-results__btn-sort-rating').click(function() {
        $('.sort-results__btn-sort-popular').removeClass('active');
        $('.sort-results__btn-sort-rating').addClass('active');
        $('.sort-results__btn-sort-highest').removeClass('active');
        $('.sort-results__btn-sort-lowest').removeClass('active');
    });

    $('.sort-results__btn-sort-highest').click(function() {
        $('.sort-results__btn-sort-popular').removeClass('active');
        $('.sort-results__btn-sort-rating').removeClass('active');
        $('.sort-results__btn-sort-highest').addClass('active');
        $('.sort-results__btn-sort-lowest').removeClass('active');
    });

    $('.sort-results__btn-sort-lowest').click(function() {
        $('.sort-results__btn-sort-popular').removeClass('active');
        $('.sort-results__btn-sort-rating').removeClass('active');
        $('.sort-results__btn-sort-highest').removeClass('active');
        $('.sort-results__btn-sort-lowest').addClass('active');
    });

    /*--- Переключение отображения результатов (плитка/список) ---*/
    $('.view-display-results__btn-type-tile').click(function() {
        if(!$('.view-display-results__btn-type-tile').hasClass('active')) {
            $('.view-display-results__btn-type-tile').addClass('active');
            $('.view-display-results__btn-type-list').removeClass('active');

            $('.results-products__wrapper-results-products').removeClass('list');
            $('.results-products__wrapper-results-products').addClass('tile');
        }
    });

    $('.view-display-results__btn-type-list').click(function() {
        if(!$('.view-display-results__btn-type-list').hasClass('active')) {
            $('.view-display-results__btn-type-tile').removeClass('active');
            $('.view-display-results__btn-type-list').addClass('active');

            $('.results-products__wrapper-results-products').removeClass('tile');
            $('.results-products__wrapper-results-products').addClass('list');
        }
    });

});
