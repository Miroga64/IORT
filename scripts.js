$(document).ready(function(){
    
    let mass = [];

    if($('.atmosphere').length > 0){
        $('.atmosphere').slick({
            fade: true,
            slidesToShow: 1,
            prevArrow: "<div class='atmosphere__arrow'></div>",
            nextArrow: "<div class='atmosphere__arrow rotate'></div>"
        })
    }

    $('.rooms__right__switch__link').on('click', function(){
        $('.rooms__right__switch__link.active').removeClass('active')
        $(this).addClass('active')
        if($(this).hasClass('room_plan')){
            $('.rooms').removeClass('list').addClass('plan')
        }else{
            $('.rooms').removeClass('plan').addClass('list')
        }
    })

    $('svg path').hover(
        function(){
            if($(this).attr('fill-opacity')){
                if(mass.length > 0){
                    clearTimeout(mass[+$(this).attr('data-arr')])
                }
                $(this).attr('fill-opacity', 1)
            }

    }, function(){
        if($(this).attr('fill-opacity')){
            mass[+$(this).attr('data-arr')] = setTimeout(()=>{
                $(this).attr('fill-opacity', 0.2)
            }, 100)
        }
    })

    $(window).on('scroll', function(){

        if($(window).scrollTop() > 20 && $('.header').hasClass('transparent')){
            $('.header').removeClass('transparent')
        }

        if($(window).scrollTop() < 20 && !$('.header').hasClass('transparent') && !$('.header').hasClass('white')){
            $('.header').addClass('transparent') 
        }
    })

    let serv_tab = document.getElementById('custom_scroll');

    if(serv_tab){
        Ps.initialize(serv_tab);	
    }

    $('.space__left__count').on('click', function(){
        $('.space__left__count.active').removeClass('active')
        $(this).addClass('active');
    })

    $('.popup__close').on('click', function(){
        $(this).closest('.popup.active').removeClass('active')
    })

    $('[data-popup]').on('click', function(){
        $(`.${$(this).attr('data-popup')}`).addClass('active')
    })

    $('.doc__left__element').on('click', function(){
        $('.doc__left__element.active').removeClass('active')
        $(this).addClass('active');
    })

    $('.header__btn').on('click', function(){
        $('.header__btn, .menu__mobile').toggleClass('active')
    })

    $('.popup__slider__slider').slick({
        fade: true,
        slidesToShow: 1,
        prevArrow: "<div class='popup__slider__arrow'></div>",
        nextArrow: "<div class='popup__slider__arrow rotate'></div>"
    })

})
