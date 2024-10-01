$(function () {
    $(".sitemap-btn").on("click", function () {
        $(this).toggleClass('x');
        $(".header_ui").toggleClass('on');
        $(".sitemap-menu").toggleClass('active');
        $(".sitemap-contents").toggleClass('on');
        $(".wide-white-bg").toggleClass('on');
        $('body').toggleClass('fixed');
    });

    $(".en_header .gnb > ul")
        .clone()
        .appendTo(".m_gnb")

    $(".en_header .gnb > ul").hover(function () {
        $(".en_header").addClass("hover");
        $(".en_header .gnb > ul > li > ul")
            .stop()
            .slideDown(400);
        $(".en_header .bg")
            .stop()
            .slideDown(300)
    }, function () {
        $(".en_header").removeClass("hover");
        $(".en_header .gnb > ul > li > ul")
            .stop()
            .slideUp(400);
        $(".en_header .bg")
            .stop()
            .slideUp(500)
    })

    $(".en_header .header_ui .util-zone > li.lang > span").on(
        "click",
        function () {
            $(this)
                .next()
                .stop()
                .slideToggle()
        }
    )
    $(".en_header .header_ui .m_btn").on("click", function () {
        $(this).toggleClass("on");
        $(".en_header .header_ui .m_gnb").toggleClass("on");
        $(".en_header .header_ui .m_gnb > ul > li > a")
            .next()
            .stop()
            .slideUp();
    })

    $(".en_header .header_ui .m_gnb > ul > li > a").on("click", function (e) {
        e.preventDefault();
        $(this)
            .next()
            .stop()
            .slideToggle();
        $(".en_header .header_ui .m_gnb > ul > li > a")
            .not(this)
            .next()
            .stop()
            .slideUp();
    })

    $(window).scroll(function () {
        if ($(this).scrollTop() > 10) {
            $(".en_header").addClass("scroll")
        } else {
            $(".en_header").removeClass("scroll")
        }
    })
    for (var i = 1; i <= 10; i++) {
        $(".gnb .sub_depth0" + i)
            .clone()
            .appendTo(".lnb0" + i);
    };

    var $winUrl = location.pathname;
    lnbFn($(".lnb .sub_depth > li"));

    function lnbFn(obj) {
        obj
            .find("a")
            .each(function () {
                $menuUrl01 = $(this).attr("href");
                $res = $menuUrl01.split("/");
                var resLast = $res[$res.length - 1];
                if ($winUrl.match(resLast)) {
                    $(this)
                        .parent()
                        .addClass("on");
                }
            });
    }
});

$(function () {
    function wrapWindowByMask() {
        // 화면의 높이와 너비를 변수로 만듭니다.
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();

        // fade 애니메이션 : 1초 동안 검게 됐다가 80%의 불투명으로 변합니다.
        $('.mask_search').addClass('visible');
        $('.window').addClass('visible');

        // 레이어 팝업을 가운데로 띄우기 위해 화면의 높이와 너비의 가운데 값과 스크롤 값을 더하여 변수로 만듭니다.
        var left = (
            $(window).scrollLeft() + ($(window).width() - $('.window').width()) / 2
        );
        var top = (
            $(window).scrollTop() + ($(window).height() - $('.window').height()) / 2
        );

        // css 스타일을 변경합니다.
        $('.window').css({'left': '50%', 'top': '50%'});

    }

    $(document).ready(function () {
        // showMask를 클릭시 작동하며 검은 마스크 배경과 레이어 팝업을 띄웁니다.
        $('.showMask').click(function (e) {
            e.preventDefault();
            wrapWindowByMask();
        });

        // 닫기(close)를 눌렀을 때 작동합니다.
        $('.window .close').click(function (e) {
            e.preventDefault();
            $('.mask_search').removeClass('visible');
            $('.window').removeClass('visible');
        });

        // 뒤 검은 마스크를 클릭시에도 모두 제거하도록 처리합니다.
        $('.mask_search').click(function () {
            $('.mask_search').removeClass('visible');
            $('.window').removeClass('visible');
        });
    });
})