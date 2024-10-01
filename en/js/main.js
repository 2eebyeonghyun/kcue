$(function () {
    var Enswiper = new Swiper('.en_mainSwiper', {
        cssMode: true,
        centeredSlides: true,
        speed: 800,
        effect: 'slide',
        autoplay: {
            delay: 6000,
            disableOnInteraction: false
        },
        slidesPerView: 1,
        pagination: {
            el: '.en_mainSwiper .swiper-options .pagination-bullet',
            type: 'bullets'
        },
        navigation: {
            nextEl: ".en_mainSwiper .swiper-options .swiper-button-next",
            prevEl: ".en_mainSwiper .swiper-options .swiper-button-prev"
        }
    });

    var numberPasing = new Swiper(".en_mainSwiper", {
        pagination: {
            el: ".en_mainSwiper .swiper-options .pagination-number .pager-fraction",
            type: "fraction",
            clickable: true
        }
    });

    $('.en_mainSwiper .swiper-options .swiper-auto .slideBtn').on(
        'click',
        function () {
            $('.en_mainSwiper .swiper-options .swiper-auto .slideBtn').toggleClass(
                'active'
            );

            if ($(this).hasClass('btn-play')) {
                Enswiper
                    .autoplay
                    .start();
            } else {
                Enswiper
                    .autoplay
                    .stop();
            }
        }
    );

    Enswiper.controller.control = numberPasing;

    var swiper = new Swiper('.f_bannerSwiper', {
        slidesPerView: 5,
        spaceBetween: 130,
        loop: true,
        speed: 1000,
        effect: 'slide',
        autoplay: {
            delay: 6000,
            disableOnInteraction: false
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
                slidesPerView: 5,
                spaceBetween: 130
            }
        }
    });

    var swiper = new Swiper('.news_Swiper', {
        slidesPerView: 3,
        spaceBetween: 40,
        pagination: {
            el: ".news_Swiper .swiper-options .swiper-pagination"
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            1240: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        }
    });

    var swiper = new Swiper('.en_publicationSwiper', {
        slidesPerView: 3,
        spaceBetween: 40,
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            1240: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        }
    });
});

$(function () {
    const selectBoxElements = document.querySelectorAll(".lang");

    function toggleSelectBox(selectBox) {
        selectBox
            .classList
            .toggle("active");
    }

    function selectOption(optionElement) {
        const selectBox = optionElement.closest(".lang");
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
            .contains("select") || targetElement.closest(".lang");

        if (isSelect) {
            return;
        }

        const allSelectBoxElements = document.querySelectorAll(".lang");

        allSelectBoxElements.forEach(boxElement => {
            boxElement
                .classList
                .remove("active");
        });
    });
})

function CooperTab(index) {
    var tabs = document.querySelectorAll(
        '.cooperation-table .tab_wrap .list .tab_item'
    );
    var tabContents = document.querySelectorAll(
        '.cooperation-table .tab_inner_wrap .tab_inner'
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

function admissionTab(index) {
  var tabs = document.querySelectorAll(
      '.admission-page .tab_wrap .list .tab_item'
  );
  var tabContents = document.querySelectorAll(
      '.admission-page .tab_inner_wrap .tab_inner'
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