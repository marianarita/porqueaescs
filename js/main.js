$(document).ready(function () {
    //Navegação principal
    $('section').eq(0).addClass('visible');
    $('.navbar').on('click', 'a', function () {
        $('.navbar-item-active').removeClass('navbar-item-active')
        $(this).addClass('navbar-item-active')
        $('.current').removeClass('current');
        $('.slidernav-active').removeClass('slidernav-active');
        $('[data-graph="1"]').addClass('current');
        $('[data-graph-nav="1"]').addClass('slidernav-active')
        $('.sidenav-item').css({ backgroundColor: $('.current').attr('data-graphcolor') })
        $('a').css({ color: $('.current').attr('data-graphcolor') })
        $('.text-red-light').css({ color: $('.current').attr('data-graphcolor') })
        $('.slidernav-item').css({ backgroundColor: $('.current').attr('data-graphcolor') })
        $($(this).attr('href')).addClass('visible').siblings('section:visible').removeClass('visible');
        $('.visible').each(function (i) {
            var id = $(this).attr('id');
            $('.sidenav-item').removeClass('sidenav-active');
            $('[data-section="' + id + '"]').attr('data-color');
            $('a').css({ color: $('[data-section="' + id + '"]').attr('data-color') })
            $('.sidenav-item').css({ backgroundColor: $('[data-section="' + id + '"]').attr('data-color') })
            $('[data-section="' + id + '"]').addClass('sidenav-active');
        })
    });

    $('.sidenav').on('click', '.sidenav-item', function () {
        //console.log(this);
        $('section:visible').removeClass('visible');
        $('.sidenav-item').removeClass('sidenav-active');
        var id = $(this).attr('data-section');
        //console.log(id)
        //debugger;   
        $('[data-sectionid="' + id + '"]').addClass('visible');
        $('[data-section="' + id + '"]').attr('data-color');
        $('a').css({ color: $('[data-section="' + id + '"]').attr('data-color') })
        $('.sidenav-item').css({ backgroundColor: $('[data-section="' + id + '"]').attr('data-color') })
        $('[data-section="' + id + '"]').addClass('sidenav-active');
        $('.navbar-item-active').removeClass('navbar-item-active')
        $('.navbar').find('[href="' + '#' + id + '"]').addClass('navbar-item-active');
        $('.current').removeClass('current');
        $('.slidernav-active').removeClass('slidernav-active');
        $('[data-graph="1"]').addClass('current');
        $('[data-graph-nav="1"]').addClass('slidernav-active')
    });

    //Mexer o logo
    var factor = 150;
    $("#section-1").mousemove(function (e) {
        var width = $(this).innerWidth();
        var height = $(this).innerHeight();
        var newX = 10 - (e.pageX - width / 2) / factor;
        var newY = 50 - (e.pageY - height / 2) / factor;
        $(this).css('background-position', newX + '%' + ' ' + newY + '%');
    });

    //seguinte
    $("#next").click(function () {
        var graphid = $('.current').next().attr('data-graph');
        $('.slidernav-active').removeClass('slidernav-active');
        $('[data-graph-nav="' + graphid + '"]').addClass(' slidernav-active');
        if ($(".current").next(".graph").length) {
            $(".current").removeClass("current").next(".graph").addClass("current");
            $('.graph-title').text($(".current").attr('data-sectiontitle'));
            $('.sidenav-item').css({ backgroundColor: $('.current').attr('data-graphcolor') })
            $('a').css({ color: $('.current').attr('data-graphcolor') })
            $('.text-red-light').css({ color: $('.current').attr('data-graphcolor') })
            $('.slidernav-item').css({ backgroundColor: $('.current').attr('data-graphcolor') })
            if ($(".current").next(".graph").length == 0) {
                $('.slider-next').fadeOut(200);
            }
            if ($('.slider-prev').css('display') == 'none') {
                $('.slider-prev').fadeIn(200);
            }
        };
    });
    $('.slider-prev').css({ display: 'none' });

    $("#prev").click(function () {
        var graphid = $('.current').prev().attr('data-graph');
        $('.slidernav-active').removeClass('slidernav-active');
        $('[data-graph-nav="' + graphid + '"]').addClass(' slidernav-active');
        if ($(".current").prev(".graph").length) {
            $(".current").removeClass("current").prev(".graph").addClass("current");
            $('.graph-title').text($(".current").attr('data-sectiontitle'));
            $('.sidenav-item').css({ backgroundColor: $('.current').attr('data-graphcolor') })
            $('a').css({ color: $('.current').attr('data-graphcolor') })
            $('.text-red-light').css({ color: $('.current').attr('data-graphcolor') })
            $('.slidernav-item').css({ backgroundColor: $('.current').attr('data-graphcolor') })
            if ($(".current").prev(".graph").length == 0) {
                $('.slider-prev').fadeOut(200);
            }
            if ($('.slider-next').css('display') == 'none') {
                $('.slider-next').fadeIn(200);
            }
        }
    });

    $('.slidernav-item').on('click', function () {
        var graphid = $(this).attr('data-graph-nav');
        $('.slidernav-active').removeClass('slidernav-active');
        $('.current').removeClass('current');
        $('[data-graph-nav="' + graphid + '"]').addClass(' slidernav-active');
        $('[data-graph="' + graphid + '"]').addClass('current');
        $('.graph-title').text($(".current").attr('data-sectiontitle'));
        $('.sidenav-item').css({ backgroundColor: $('.current').attr('data-graphcolor') })
        $('a').css({ color: $('.current').attr('data-graphcolor') })
        $('.text-red-light').css({ color: $('.current').attr('data-graphcolor') })
        $('.slidernav-item').css({ backgroundColor: $('.current').attr('data-graphcolor') })
    });

    $("#switch").change(function () {
        if (this.checked) {
            $('h1, h2, h3, h4, h5, h6').css({ color: 'black' })
            $('h2').css({ color: 'black' })
            $('blockquote').css({ color: 'black' })
            $('.btn').css({ borderColor: 'black' })
            $('p').css({ color: 'black' })
            $('body').css({ backgroundColor: 'white' })
            $('.sol').stop().fadeOut(300, function () {
                $('.lua').fadeIn()
            });
            $('.nav-logo').css({ filter: 'invert(100)' })
        } else {
            $('h1, h2, h3, h4, h5, h6').css({ color: 'white' })
            $('h2').css({ color: 'white' })
            $('blockquote').css({ color: 'white' })
            $('.btn').css({ borderColor: 'white' })
            $('p').css({ color: 'white' })
            $('body').css({ backgroundColor: 'var(--bg-blue)' })
            $('.lua').stop().fadeOut(300, function () {
                $('.sol').fadeIn()
            });
            $('.nav-logo').css({ filter: 'invert(0)' })
        }
    });


    /* $('#navegar').on('click', function () {
         $('.navbar').children()[1].click();
     })*/

    $('.btn').on('click', function () {
        var sectionid = $(this).attr('href');
        $('.navbar').find('[href="' + sectionid + '"]').click()

    })

    $('.switch-label').click(function () {
        if ($(this).data('count')) {
            $(this).data('count', $(this).data('count') + 1);
        } else {
            $(this).data('count', 1);
        }
        console.log($(this).data('count'));
        if ($(this).data('count') == 10) {
            alert('Dum Dum DUM! Another One Bites The Dust!');
        }
    });


    console.log("%c L(a)INDO!", "font-weight: bold; font-size: 50px;color: red; text-shadow: 3px 3px 0 rgb(217,31,38) , 6px 6px 0 rgb(226,91,14) , 9px 9px 0 rgb(245,221,8) , 12px 12px 0 rgb(5,148,68) , 15px 15px 0 rgb(2,135,206) , 18px 18px 0 rgb(4,77,145) , 21px 21px 0 rgb(42,21,113)");

});