$(document).ready(function () {
    //Navegação principal
    $('section').eq(0).addClass('visible');
    $('.navbar').on('click', 'a', function () {
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


    //Mexer o logo
    var factor = 50;
    $("#section-1").mousemove(function (e) {
        var width = $(this).innerWidth();
        var height = $(this).innerHeight();
        var newX = (e.pageX / width) * factor;
        var newY = (e.pageY / height) * factor;
        $(this).css('background-position', newX + '%' + ' ' + newY + '%');
    });

    //seguinte
    $("#next").click(function () {
        var graphid= $('.current').next().attr('data-graph');
        $('.slidernav-active').removeClass('slidernav-active');
        $('[data-graph-nav="' + graphid + '"]').addClass(' slidernav-active');
        if ($(".current").next(".graph").length) {
            $(".current").removeClass("current").next(".graph").addClass("current");
            $('.graph-title').text($(".current").attr('data-sectiontitle'));
            $('.sidenav-item').css({ backgroundColor: $('.current').attr('data-graphcolor') })
            $('a').css({ color: $('.current').attr('data-graphcolor') })
            $('.text-red-light').css({ color: $('.current').attr('data-graphcolor') })
            $('.slidernav-item').css({ backgroundColor: $('.current').attr('data-graphcolor') })
        }

    });

});