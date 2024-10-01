$(function () {
    var $wrap = $('.wrap'),
        $header = $('header'),
        $nav = $('.nav'),
        $gnb = $('.gnb > ul'),
        $gnbHover = $('.nav .gnb > ul > li'),
        $gnbHover_a = $('.nav .gnb > ul > li a'),
        $gnbSub = $('.nav .gnb > ul > li > ul'),
        $bnt_all = $('.allmenu'),
        $gnb_bg = $('header .gnb_bg'),
        $allmenu = $('.allmenu'),
        $searchTop = $('.search_top'),
        $allmenuBox = $('#allmenuBox'),
        $menuBtn = $('.util-zone .sitemap-btn'),
        $closeTopbtn = $('.topBanner_wrap .close_btn'),
        $popupbtn = $('.kr_header .popup_chk'),
        $topBanner_wrap = $('.topBanner_wrap');

    $(window).on('scroll', function () {
        bodyScroll = $(document).scrollTop();
        if (bodyScroll > 0) {
            $header.addClass('fix');
            $header
                .parent()
                .parent()
                .addClass('fix');
        } else {
            $header.removeClass('fix');
            $header
                .parent()
                .parent()
                .removeClass('fix');
        }
    });

    $(window).on('scroll', function () {
        bodyScroll = $(document).scrollTop();
        if (bodyScroll > 0) {
            $topBanner_wrap.addClass('fix');
            $topBanner_wrap
                .parent()
                .parent()
                .addClass('fix');
        } else {
            $topBanner_wrap.removeClass('fix');
            $topBanner_wrap
                .parent()
                .parent()
                .removeClass('fix');
        }
    });

    var menuCont = function () {

        /* web gnb menu */
        $searchTop.on('mouseenter', function () {
            $(this).addClass('on');
        });

        $gnbHover.each(function () {
            if ($wrap.is('.web')) {
                $(this).on('mouseenter', function () {
                    $header.addClass('on');
                    $nav.addClass('over');
                    $('.nav .gnb > ul > li').removeClass('on');
                    $(this).addClass('on');
                    $gnb_bg.addClass('on');
                });
            } else {
                $(this).off('mouseenter mouseleave');
            }
        });
        $header.on('mouseleave', function () {
            $header.removeClass('on');
            $nav.removeClass('over');
            $(this).removeClass('on');
            $gnb_bg.removeClass('on');

        });

    }

    var windowSize = function () {

        var winWidth = $(window).width();
        if (winWidth > 1023) {
            $wrap.addClass('web');
            $wrap.removeClass('mobile');
            if ($wrap.is('.web')) {
                $('#rightBox .family').each(function () {
                    var $list = $(this);
                    var $btn = $list.find('.box > a');
                    var menuTime;
                    $btn.off('click');
                    $btn.click(function () {
                        if ($list.is('.on')) {
                            $(".family").removeClass('on');
                        } else {
                            $(".family").addClass('on');
                        }
                    });
                    $btn.mouseenter(function () {
                        $(this)
                            .parent()
                            .parent()
                            .addClass('on');
                    });
                    $(document).on('click', 'header, #container', function () {
                        $(".family").removeClass('on');
                    });
                    $list.mouseleave(function () {
                        clearTimeout(menuTime);
                        menuTime = setTimeout(mTime, 1);
                    });

                    function mTime() {
                        $(".family").removeClass('on');
                    }
                });
            }
        } else {
            $wrap.removeClass('web');
            $wrap.addClass('mobile');
            $bnt_all.removeClass('active');
            if ($wrap.is('.mobile')) {
                $('.allmenu_bottom').on('click', '.family .box a', function () {
                    $(".family").toggleClass('on');
                });
                $(document).on('click', 'header, .menuBox', function () {
                    $(".family").removeClass('on');
                });
            }
        }

        $bnt_all.off('click');
        $bnt_all.click(function () {
            $header.removeClass('on');
            $nav.removeClass('over');
            $('#nav #gnb > ul > li').removeClass('on');
            $gnb_bg.removeClass('on');
            $header.toggleClass('ov');
            $allmenu.toggleClass('on');
            $allmenuBox.toggleClass('on');
            $searchTop.removeClass('on');
            if ($(this).is('.on')) {
                $('.menu_top')
                    .clone()
                    .appendTo('#allmenuBox .menuBox');
                $('#rightBox .mbox')
                    .clone()
                    .appendTo('.allmenu_bottom');
                $(".family").removeClass('on');
                $allmenu.addClass('on');
                $wrap
                    .parent()
                    .addClass('hidden');
                $wrap
                    .parent()
                    .parent()
                    .addClass('hidden');
                $('#rightBox').addClass('on');

                $('.allmenuBox .gnb > ul > li').each(function () {
                    $(this)
                        .not('.link')
                        .children("a")
                        .off("click")
                        .on("click", function (e) {
                            e.preventDefault();
                            var depth2 = $(this).siblings('.depth2');
                            if (!depth2.is(':visible')) {
                                $('.gnb > ul')
                                    .find('.depth2')
                                    .stop()
                                    .slideUp();
                                depth2
                                    .stop()
                                    .slideDown();
                                $('.gnb > ul li').removeClass('hover');
                                $(this)
                                    .parent()
                                    .addClass('hover');
                            } else {
                                $('.gnb > ul')
                                    .find('.depth2')
                                    .stop()
                                    .slideUp();
                                $('.gnb > ul li').removeClass('hover');
                            };
                        });
                });

            } else {
                $('.allmenuBox .menuBox').empty();
                $('.allmenu_bottom').empty();
                $(this).removeClass('on');
                $('#rightBox').removeClass('on');
                $wrap
                    .parent()
                    .removeClass('hidden');
                $wrap
                    .parent()
                    .parent()
                    .removeClass('hidden');
                $header.removeClass('ov');
                $allmenu.removeClass('on');
            }
        });

        $(document).on('click', '.allmenuBox .gnb > ul > li > ul > li a', function () {
            $('.allmenuBox .menuBox').empty();
            $('.allmenu_bottom').empty();
            $('#rightBox').removeClass('on');
            $wrap
                .parent()
                .removeClass('hidden');
            $wrap
                .parent()
                .parent()
                .removeClass('hidden');
            $header.removeClass('ov');
            $allmenu.removeClass('on');
            $allmenuBox.removeClass('on');
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length
                    ? target
                    : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target
                            .offset()
                            .top - 100
                    }, 700);
                }
            }
        });

        menuCont();
    }

    $(window).load(function () {
        windowSize();
        menuCont;
    });

    $(window).resize(function () {
        windowSize();
        menuCont;
    });

    $(window).on("orientationchange", function (event) {
        windowSize();
        menuCont;
    });

    /* scroll mov */
    var top_space = 0;
    if ($('header').length) {
        top_space = $('header').outerHeight();
    }

    $('.gnb > ul > li > ul > li a').click(function (event) {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target
                        .offset()
                        .top - top_space
                }, 500);
                return false;
            }
        }
    });

    $menuBtn.on('click', function () {
        $header.toggleClass('on');
        $gnb_bg.toggleClass('on');
        $nav.toggleClass('over');
    })

    $closeTopbtn.on('click', function () {
        $('.topBanner_wrap').addClass('close');
    });

    $popupbtn.on('click', function () {
        $('.topBanner_wrap').toggleClass('close');
        $(this).toggleClass('on');
    });
});

$(function () {
    var closs = $('.kr_header .mobile_navigation .close_btn');
    var mgnb = $('.kr_header .mobile_navigation');

    closs.on('click', function () {
        mgnb.toggleClass('on');
    });

    $(".kr_header .gnb > ul")
        .clone()
        .appendTo(".m_gnb")

    $(".kr_header .mobile-btn").on("click", function () {
        $(this).toggleClass("on");
        $(".kr_header .mobile_navigation").toggleClass("on");
        $(".kr_header .m_gnb > ul > li > a")
            .next()
            .stop()
            .slideUp();
    });

    $(".kr_header .m_gnb > ul > li > a").on("click", function (e) {
        e.preventDefault();
        $(this)
            .next()
            .stop()
            .slideToggle();
        $(".kr_header .m_gnb > ul > li > a")
            .not(this)
            .next()
            .stop()
            .slideUp();
    });

    $(".kr_header .fm-site-wrap")
        .clone()
        .appendTo(".m_fm-site-wrap")
});