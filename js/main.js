var autoHyphen = function (target) { // 예약확인 하이픈추가
    target.value = target
        .value
        .replace(/[^0-9]/g, '')
        .replace(/^(\d{0,3})(\d{0,4})(\d{0,4})$/g, "$1-$2-$3")
        .replace(/(\-{1,2})$/g, "");
}

var autoHyphen2 = function (target) { // 예약확인 하이픈추가
    target.value = target
        .value
        .replace(/[^0-9]/g, '')
        .replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/, "$1-$2-$3");
}

$(function () {
    $(function () {
        var swiper = new Swiper(".mainSwiper", {
            cssMode: true,
            centeredSlides: true,
            speed: 800,
            effect: 'slide',
            autoplay: {
                delay: 6000,
                disableOnInteraction: false
            },
            pagination: {
                el: '.mainSwiper .swiper-options .swiper-pagination'
            },
            autoplayDisableOnInteraction: true,
        });

        $('.mainSwiper .swiper-options .swiper-auto > button').on('click', function () {
            $('.mainSwiper .swiper-options .swiper-auto > button').toggleClass('active');

            if ($(this).hasClass('btn-play')) {
                swiper
                    .autoplay
                    .start();
            } else {
                swiper
                    .autoplay
                    .stop();
            }
        })
    });

    var swiper = new Swiper(".mainPop-swiper", {
        cssMode: true,
        centeredSlides: true,
        speed: 800,
        effect: 'slide',
        autoplay: {
            delay: 15000,
            disableOnInteraction: false
        },
        navigation: {
            nextEl: ".mainPop-swiper .swiper-options .slideBtn.btn-next",
            prevEl: ".mainPop-swiper .swiper-options .slideBtn.btn-prev"
        },
        pagination: {
            el: ".mainPop-swiper .swiper-options .pager-fraction",
            type: "fraction",
            clickable: true
        },
        autoplayDisableOnInteraction: true,
        autoHeight: true
    });

    $('.mainPop-swiper .swiper-auto .main_btn').on('click', function () {
        $('.mainPop-swiper .swiper-auto .main_btn').toggleClass('active');

        if ($(this).hasClass('btn-play')) {
            swiper
                .autoplay
                .start();
        } else {
            swiper
                .autoplay
                .stop();
        }
    });

    var swiper = new Swiper(".topBannerSwiper", {
        slidesPerView: 2,
        spaceBetween: 20,
        navigation: {
            nextEl: ".topBanner_wrap .swiper-options .swiper-arrows .swiper-button-next",
            prevEl: ".topBanner_wrap .swiper-options .swiper-arrows .swiper-button-prev"
        },
        pagination: {
            el: ".topBanner_wrap .swiper-options .swiper-pagination",
            type: "fraction"
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20
            }
        }
    });

    var swiper = new Swiper(".bookSwiper", {
        slidesPerView: 2,
        spaceBetween: 25,
        speed: 1000,
        effect: 'slide',
        autoplay: {
            delay: 6000,
            disableOnInteraction: false
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 25
            }
        }
    });

	$(function () {
		var swiper = new Swiper(".fotBannerSwiper", {
			cssMode: true,
			slidesPerView: 4,
			spaceBetween: 70,
			speed: 1000,
			effect: 'slide',
			loop: true,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false
			},
			navigation: {
				nextEl: ".fot_banner_wrap .swiper-options .swiper-button-next",
				prevEl: ".fot_banner_wrap .swiper-options .swiper-button-prev"
			},
			breakpoints: {
				320: {
					slidesPerView: 2,
					spaceBetween: 30
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 50
				},
				1240: {
					slidesPerView: 4,
					spaceBetween: 70
				}
			}
		});

		$('.fot_banner_wrap .swiper-auto .footer_btn').on('click', function () {
			$('.fot_banner_wrap .swiper-auto .footer_btn').toggleClass('active');

			if ($(this).hasClass('btn-play')) {
				swiper
					.autoplay
					.start();
			} else {
				swiper
					.autoplay
					.stop();
			}
		});
	});

    var swiper = new Swiper(".webzineSwiper", {});

    var swiper = new Swiper(".webzineBannerSwiper", {
        slidesPerView: 5,
        spaceBetween: 10,
        freeMode: true,
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 10
            }
        }
    });
})

function activeTab(index) {
    var tabs = document.querySelectorAll(
        '.main-page .cont2 .tab_wrap .list .tab_item'
    );
    var tabContents = document.querySelectorAll(
        '.main-page .cont2 .tab_inner_wrap .tab_inner'
    );

    tabs.forEach(function (tab) {
        tab
            .classList
            .remove('active');
    });
    tabContents.forEach(function (tabContent) {
        tabContent
            .classList
            .remove('active');
    });

    tabs[index]
        .classList
        .add('active');
    tabContents[index]
        .classList
        .add('active');
}

function noticeTab(index) {
    var tabs = document.querySelectorAll(
        '.main-page .cont5 .tab_wrap .list .tab_item'
    );
    var tabContents = document.querySelectorAll(
        '.main-page .cont5 .tab_inner_wrap .tab_inner'
    );

    tabs.forEach(function (tab) {
        tab
            .classList
            .remove('active');
    });
    tabContents.forEach(function (tabContent) {
        tabContent
            .classList
            .remove('active');
    });

    tabs[index]
        .classList
        .add('active');
    tabContents[index]
        .classList
        .add('active');
}

function suggestTab(index) {
    var tabs = document.querySelectorAll(
        '.suggest-table .tab_wrap .list .tab_item'
    );
    var tabContents = document.querySelectorAll(
        '.suggest-table .tab_inner_wrap .tab_inner'
    );

    tabs.forEach(function (tab) {
        tab
            .classList
            .remove('active');
    });
    tabContents.forEach(function (tabContent) {
        tabContent
            .classList
            .remove('active');
    });

    tabs[index]
        .classList
        .add('active');
    tabContents[index]
        .classList
        .add('active');
}

function WorkTab(index) {
    var tabs = document.querySelectorAll('.contents-tab .tab_wrap .list .tab_item');
    var tabContents = document.querySelectorAll(
        '.contents-tab .tab_inner_wrap .tab_inner'
    );

    tabs.forEach(function (tab) {
        tab
            .classList
            .remove('active');
    });
    tabContents.forEach(function (tabContent) {
        tabContent
            .classList
            .remove('active');
    });

    tabs[index]
        .classList
        .add('active');
    tabContents[index]
        .classList
        .add('active');
}

$(function () {
    const selectBoxElements = document.querySelectorAll(".lang-select");

    function toggleSelectBox(selectBox) {
        selectBox
            .classList
            .toggle("active");
    }

    function selectOption(optionElement) {
        const selectBox = optionElement.closest(".lang-select");
        const selectedElement = selectBox.querySelector(".selected-value");
        selectedElement.textContent = optionElement.textContent;
    }

    selectBoxElements.forEach(selectBoxElement => {
        selectBoxElement.addEventListener("click", function (e) {
            const targetElement = e.target;
            const isOptionElement = targetElement
                .classList
                .contains("option");

            if (isOptionElement) {
                selectOption(targetElement);
            }

            toggleSelectBox(selectBoxElement);
        });
    });

    document.addEventListener("click", function (e) {
        const targetElement = e.target;
        const isSelect = targetElement
            .classList
            .contains("select") || targetElement.closest(".lang-select");

        if (isSelect) {
            return;
        }

        const allSelectBoxElements = document.querySelectorAll(".lang-select");

        allSelectBoxElements.forEach(boxElement => {
            boxElement
                .classList
                .remove("active");
        });
    });
})

$(function () {
    var item = $('.dropdown_list .item');

    item.on('click', function () {
        $('.dropdown_list .item').removeClass('on');
        $(this).addClass('on');
    })
});

$(document).ready(function () {
    AOS.init({once: true});
});