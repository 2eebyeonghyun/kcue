<div class="kr_header_wrap">
    <div id="topBanner_wrap" class="topBanner_wrap">
        <div class="w1300 inner">
            <div class="swiper topBannerSwiper">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide"><a href="#none" title="탑 배너 이미지"></a></li>
                    <li class="swiper-slide"><a href="#none" title="탑 배너 이미지"></a></li>
                    <li class="swiper-slide"><a href="#none" title="탑 배너 이미지"></a></li>
                    <li class="swiper-slide"><a href="#none" title="탑 배너 이미지"></a></li>
                </ul>
            </div>
        </div>

        <div class="swiper-options">
            <div class="swiper-arrows">
                <div class="swiper-button-prev"><img src="<?=DIR?>/img/icon/topBanner_slide_icon.png" alt="탑 배너 슬라이드 아이콘" title="이전 배너 이동"></div>
                <div class="swiper-button-next"><img src="<?=DIR?>/img/icon/topBanner_slide_icon.png" alt="탑 배너 슬라이드 아이콘" title="다음 배너 이동"></div>
            </div>

            <div class="option-box">
                <div class="swiper-pagination"></div>
                <div class="checkbox">
                    <input type="checkbox" name="chkbox" id="today_chk" class="today_chk" value="Y">오늘 다시보지않기
                </div>
                <a href="#none" class="close_btn" title="탑 배너 닫기 버튼"><img src="<?=DIR?>/img/icon/close_icon.png" alt="닫기 아이콘">[ 닫기 ]</a>
            </div>
        </div>
    </div>

    <header class="kr_header">
        <div class="w1300 inner">
            <div class="top">
                <div class="row">
                    <div class="lef">
                        <ul class="fm-site-wrap">
                            <li class="active"><a href="<?=DIR?>/">한국대학교육협의회</a></li>
                            <li><a href="https://www.adiga.kr/" target="_blank">대입정보포털어디가</a></li>
                            <li><a href="https://www.academyinfo.go.kr/" target="_blank">대학알리미</a></li>
                            <li><a href="https://aims.kcue.or.kr/" target="_blank">한국대학평가원</a></li>
                        </ul>
                    </div>
                    <div class="rig">
                        <ul class="util-zone">
                            <li class="popup_chk"><a href="#none" class="pchkBtn">popup<i class="axi axi-angle-up"></i></a></li>
                            <li class="lang-select">
                                <div class="selected">
                                    <div class="selected-value"><i class="axi axi-language"></i>KOR</div>
                                    <div class="arrow"></div>
                                </div>
                                <ul>
                                    <li class="option" onClick="location.href='<?=DIR?>/'"><a href="<?=DIR?>/">KOR</a></li>
                                    <li class="option" onClick="location.href='<?=DIR?>/en/'"><a href="<?=DIR?>/en/">ENG</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <form action="<?=DIR?>/common/search-inner.php" method="post" name="search_frm" id="searchFrm" class="searchFrm">
                <div class="bot">
                    <div class="option_part">
                        <div class="inner">
                            <h1 class="logo">
                                <a href="<?=DIR?>/">
                                  <img class="bk_logo" src="<?=DIR?>/img/en/logo_bk.png" alt="로고">
                                  <img class="wh_logo" src="<?=DIR?>/img/en/logo_wh.png" alt="로고">
                              </a>
                            </h1>

                            <div class="search-wrap">
                                <div class="row">
                                    <input type="text" name="search_box" id="searchBox" class="searchBox" placeholder="무엇을 도와드릴까요?">
                                    <button type="submit" class="search_btn" title="검색하기"><i class="axi axi-search"></i></button>
                                </div>
                            </div>

                            <ul class="util-zone">
                                <li class="sitemap">
                                    <a href="#" title="사이트맵">
                                        <div class="sitemap-btn">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </a>
                                </li>

                                <li class="mobile-btn">
                                    <span></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="nav_part">
                        <nav id="nav" class="nav">
                            <div class="menu_top">
                                <div class="gnb">
                                    <ul>
                                        <li class="">
                                            <a href="<?=DIR?>/about/sub01/sub01.php">대교협소개</a>
                                            <ul class="depth2 menu1">
                                                <li><a href="<?=DIR?>/about/sub01/sub01.php">임원실</a></li>
                                                <li><a href="<?=DIR?>/about/sub02/sub01.php">경영정보</a></li>
                                                <li><a href="<?=DIR?>/about/sub03/sub01.php">사이버홍보실</a></li>
                                                <li><a href="<?=DIR?>/about/location.php">오시는 길</a></li>
                                            </ul>
                                        </li>
                                    
                                        <li class="">
                                            <a href="<?=DIR?>/work/sub01/sub01.php">주요업무</a>
                                            <ul class="depth2 menu2">
                                                <li><a href="<?=DIR?>/work/sub01/sub01.php">대학간 협의조정</a></li>
                                                <li><a href="<?=DIR?>/work/sub02/sub01.php">정책건의 및 자료개발</a></li>
                                                <li><a href="<?=DIR?>/work/sub03/sub01.php">정책세미나 및 포럼</a></li>
                                                <li><a href="<?=DIR?>/work/sub04/sub01.php">특별위원회 운영</a></li>
                                                <li><a href="<?=DIR?>/work/sub05/sub01.php">교수 및 직원연수</a></li>
                                                <li><a href="<?=DIR?>/work/sub06/sub01.php">대학입학</a></li>
                                                <li><a href="<?=DIR?>/work/sub07/sub01.php">대학평가</a></li>
                                                <li><a href="<?=DIR?>/work/sub08/sub01.php">대학정보공시</a></li>
                                                <li><a href="<?=DIR?>/work/sub09/sub01.php">국제협력 및 교류</a></li>
                                                <li><a href="<?=DIR?>/work/sub10/sub01.php">대학교육지원</a></li>
                                            </ul>
                                        </li>
                                    
                                        <li class="">
                                            <a href="<?=DIR?>/publication/sub01.php">발간자료</a>
                                            <ul class="depth2 menu3">
                                                <li><a href="<?=DIR?>/publication/sub01.php">이용안내</a></li>
                                            </ul>
                                        </li>

                                        <li class="">
                                            <a href="<?=DIR?>/news/sub01/sub01.php">대학교육소식</a>
                                            <ul class="depth2 menu4">
                                                <li><a href="<?=DIR?>/news/sub01/sub01.php">언록속 대학교육</a></li>
                                                <li><a href="<?=DIR?>/news/sub02/sub01.php">대교협 보도자료</a></li>
                                                <li><a href="<?=DIR?>/news/sub03/sub01.php">고등교육 동향</a></li>
                                                <li><a href="<?=DIR?>/news/sub04/sub01.php">대교협 소식</a></li>
                                                <li><a href="<?=DIR?>/news/sub05/sub01.php">대교협 활동</a></li>
                                                <li><a href="http://magazine.kcue.or.kr/home/kor/main.do" target="_blank">대학교육</a></li>
                                            </ul>
                                        </li>

                                        <li class="">
                                            <a href="<?=DIR?>/notice/sub01.php">알림마당</a>
                                            <ul class="depth2 menu5">
                                                <li><a href="<?=DIR?>/notice/sub01.php">공지사항</a></li>
                                                <li><a href="<?=DIR?>/notice/sub02.php">대교협 채용공고</a></li>
                                                <li><a href="<?=DIR?>/notice/sub03.php">총장 채용공고</a></li>
                                                <li><a href="<?=DIR?>/notice/sub04.php">교수·강사 채용공고</a></li>
                                                <li><a href="<?=DIR?>/notice/sub05.php">입찰공고</a></li>
                                                <li><a href="<?=DIR?>/notice/sub06.php">자료실</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="gnb_bg"></div>
                </div>

                <div class="mobile_navigation">
                    <div class="util-zone">
                        <div class="row m_Lang-wrap">
                            <ul class="list">
                                <li><a class="m_lang_btn" href="<?=DIR?>/en/">ENG</a></li>
                                <li><a href="#none" class="close_btn"><i class="axi axi-ion-arrow-right-c"></i></a></li>
                            </ul>
                        </div>

                        <div class="row m_Search-wrap">
                            <div class="search-wrap">
                                <input type="text" name="m_search_box" id="m_searchBox" class="m_searchBox" placeholder="무엇을 도와드릴까요?">
                                <button type="submit" class="m_search_btn"><i class="axi axi-search"></i></button>
                            </div>
                            <div class="m_fm-site-wrap"></div>
                        </div>

                        <div class="row m_Gnb-wrap">
                            <div class="m_gnb"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </header>
</div>

