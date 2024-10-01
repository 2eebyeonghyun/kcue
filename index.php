<? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page main-page">
            <article class="cont cont1">
                <div class="inner">
                    <div class="lef">
                        <div class="swiper mainSwiper">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide">
                                    <img src="<?=DIR?>/img/example.png" alt="예시 이미지" class="slide-img">
                                    <div class="textbox">
                                        <span class="s_text">한국대학교육협의회</span>
                                        <p class="m_text">21세기 대한민국<br> 대학교육의 미래를 선도합니다.</p>
                                    </div>
                                </li>

                                <li class="swiper-slide">
                                    <img src="<?=DIR?>/img/example.png" alt="예시 이미지" class="slide-img">
                                    <div class="textbox">
                                        <span class="s_text">한국대학교육협의회</span>
                                        <p class="m_text">21세기 대한민국<br> 대학교육의 미래를 선도합니다.</p>
                                    </div>
                                </li>

                                <li class="swiper-slide">
                                    <img src="<?=DIR?>/img/example.png" alt="예시 이미지" class="slide-img">
                                    <div class="textbox">
                                        <span class="s_text">한국대학교육협의회</span>
                                        <p class="m_text">21세기 대한민국<br> 대학교육의 미래를 선도합니다.</p>
                                    </div>
                                </li>

                                <li class="swiper-slide">
                                    <img src="<?=DIR?>/img/example.png" alt="예시 이미지" class="slide-img">
                                    <div class="textbox">
                                        <span class="s_text">한국대학교육협의회</span>
                                        <p class="m_text">21세기 대한민국<br> 대학교육의 미래를 선도합니다.</p>
                                    </div>
                                </li>
                            </ul>

                            <div class="swiper-options">
                                <div class="swiper-pagination pagination-bullet"></div>
                                <div class="swiper-auto">
                                    <button type="button" class="main_btn slideBtn btn-play" title="슬라이드 재생 버튼">슬라이드 재생</button>
                                    <button type="button" class="main_btn slideBtn btn-stop active" title="슬라이드 정지 버튼">슬라이드 일시정지</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rig">
                        <ul class="fm_site_wrap">
                            <li class="site">
                                <div class="left">
                                    <div class="img">
                                        <img src="<?=DIR?>/img/fm_logo1.png" alt="adiga 로고">
                                    </div>
                                    <div class="text">대입지원 정보조회, 대입전형 정보조회</div>
                                </div>
                                <div class="right">
                                    <a href="?">
                                        <p class="text">바로가기</p>
                                        <img src="<?=DIR?>/img/icon/fm_arrow_icon.png" alt="바로가기 화살 아이콘" class="arrow_icon">
                                    </a>
                                </div>
                            </li>
                            <li class="site">
                                <div class="left">
                                    <div class="img">
                                        <img src="<?=DIR?>/img/fm_logo2.png" alt="대학알리미 로고" style="mix-blend-mode: darken;">
                                    </div>
                                    <div class="text">대학의 주요 공시정보 제공</div>
                                </div>
                                <div class="right">
                                    <a href="?">
                                        <p class="text">바로가기</p>
                                        <img src="<?=DIR?>/img/icon/fm_arrow_icon.png" alt="바로가기 화살 아이콘" class="arrow_icon">
                                    </a>
                                </div>
                            </li>
                            <li class="site">
                                <div class="left">
                                    <div class="img">
                                        <img src="<?=DIR?>/img/fm_logo3.png" alt="한국대학평가원 로고">
                                    </div>
                                    <div class="text">대학평가 소개, 대학기관평가인증 결과 조회</div>
                                </div>
                                <div class="right">
                                    <a href="?">
                                        <p class="text">바로가기</p>
                                        <img src="<?=DIR?>/img/icon/fm_arrow_icon.png" alt="바로가기 화살 아이콘" class="arrow_icon">
                                    </a>
                                </div>
                            </li>
                            <li class="site">
                                <div class="left">
                                    <div class="img">
                                        <img src="<?=DIR?>/img/fm_logo4.png" alt="한국교양기초교육원">
                                    </div>
                                    <div class="text">기초교양교육 강화사업 소개,<br>교양교육 관련 자료 제공</div>
                                </div>
                                <div class="right">
                                    <a href="?">
                                        <p class="text">바로가기</p>
                                        <img src="<?=DIR?>/img/icon/fm_arrow_icon.png" alt="바로가기 화살 아이콘" class="arrow_icon">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="cont cont2">
                <div class="w1300 inner">
                    <div class="contents">
                        <div class="lef">
                            <div class="notive-wrap">
                                <div class="tab_wrap">
                                    <ul class="list">
                                        <li class="tab_item active" onclick="activeTab(0)">공지사항</li>
                                        <li class="tab_item" onclick="activeTab(1)">입찰공고</li>
                                        <li class="tab_item" onclick="activeTab(2)">자료실</li>
                                    </ul>
                                </div>

                                <div class="contents">
                                    <div class="tab_inner_wrap">
                                        <div class="tab_inner active">
                                            <div class="row">
                                                <div class="top">
                                                    <div class="dateBox">
                                                        <span class="day">04</span>
                                                        <p class="yymm">2023.08</p>
                                                    </div>

                                                    <a href="#none" class="title"><span class="new"><img src="<?=DIR?>/img/icon/new_icon.png" alt="뉴 아이콘"></span><p>23년 '도전.한국' 하반기 공모전 개최 안내</p></a>
                                                </div>

                                                <div class="bot">
                                                    <ul class="news-list">
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <a href="#none" class="moveBtn" title="더보기 버튼"><i class="axi axi-plus"></i></a>
                                            </div>
                                        </div>

                                        <div class="tab_inner">
                                            <div class="row">
                                                <div class="top">
                                                    <div class="dateBox">
                                                        <span class="day">04</span>
                                                        <p class="yymm">2023.08</p>
                                                    </div>

                                                    <a href="#none" class="title"><span class="new"><img src="<?=DIR?>/img/icon/new_icon.png" alt="뉴 아이콘"></span><p>23년 '도전.한국' 하반기 공모전 개최 안내</p></a>
                                                </div>

                                                <div class="bot">
                                                    <ul class="news-list">
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <a href="#none" class="moveBtn" title="더보기 버튼"><i class="axi axi-plus"></i></a>
                                            </div>
                                        </div>

                                        <div class="tab_inner">
                                            <div class="row">
                                                <div class="top">
                                                    <div class="dateBox">
                                                        <span class="day">04</span>
                                                        <p class="yymm">2023.08</p>
                                                    </div>

                                                    <a href="#none" class="title"><span class="new"><img src="<?=DIR?>/img/icon/new_icon.png" alt="뉴 아이콘"></span><p>23년 '도전.한국' 하반기 공모전 개최 안내</p></a>
                                                </div>

                                                <div class="bot">
                                                    <ul class="news-list">
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#none">
                                                                <span class="title">한국대학교육협의회 고등교육연구소 정책 한국대학교육협의회 고등교육연구소 정책</span>
                                                                <p class="date">2023.07.14</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <a href="#none" class="moveBtn" title="더보기 버튼"><i class="axi axi-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rig">
                            <div class="popup-zone">
                                <div class="swiper mainPop-swiper">
                                    <ul class="swiper-wrapper">
                                        <li class="swiper-slide"><a href="#none"><img src="<?=DIR?>/img/example.png" alt="예시 이미지"></a></li>
                                        <li class="swiper-slide"><a href="#none"><img src="<?=DIR?>/img/example.png" alt="예시 이미지"></a></li>
                                        <li class="swiper-slide"><a href="#none"><img src="<?=DIR?>/img/example.png" alt="예시 이미지"></a></li>
                                    </ul>
                                    
                                    <div class="swiper-options">
                                        <div class="swiper-options-detail">
                                            <strong class="control-box"><b>POPUP</b> ZONE</strong>
                                            <div class="swiper-pager">
                                                <div class="pager-fraction">
                                                    <span class="swiper-pagination-current"></span>
                                                    <span class="swiper-pagination-line"></span>
                                                    <span class="swiper-pagination-total"></span>
                                                </div>
                                                
                                                <button type="button" class="slideBtn btn-prev" title="이전 슬라이드"><i class="axi axi-ion-chevron-left"></i></button>
                                                
                                                <div class="swiper-auto">
                                                    <button type="button" class="slideBtn btn-play" title="슬라이드 재생"><i class="axi axi-play-arrow"></i></button>
                                                    <button type="button" class="slideBtn btn-stop active" title="슬라이드 정지"><i class="axi axi-pause2"></i></button>
                                                </div>
                                                
                                                <button type="button" class="slideBtn btn-next" title="다음 슬라이드"><i class="axi axi-ion-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="cont cont3">
                <div class="w1300 inner">
                    <ul class="work-list">
                        <li class="work-item hover-no">
                            <div class="toptext">
                                <span>대학교육협의회</span>
                                <p>주요업무<a href="#none" title="더보기 버튼"><i class="axi axi-plus"></i></a></p>
                            </div>
                            <p class="text">한국대학교육협의회의 주요 업무를 소개합니다.</p>
                        </li>
                        <li class="work-item">
                            <a href="#none">
                                <h6 class="title">정책건의 및 자료개발</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon1.png" alt="Policy Research">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="#none">
                                <h6 class="title">국제협력 및 교류</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon2.png" alt="International Cooperation">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="#none">
                                <h6 class="title">대학입학</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon3.png" alt="Admission">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="#none">
                                <h6 class="title">대학평가</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon4.png" alt="Quality Assurance">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="#none">
                                <h6 class="title">대학정보공시</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon5.png" alt="Information Disclosure">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="#none">
                                <h6 class="title">교수 및 직원연수</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon6.png" alt="General Education">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="#none">
                                <h6 class="title">대학교원지원</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon7.png" alt="Talent Development">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>

            <article class="cont cont4">
                <div class="w1300 inner">
                    <div class="kr_textbox">
                        <span class="title">대교협 <p>활동사진</p></span>
                        <a href="#none" class="moreBtn_" title="더보기 버튼"><i class="axi axi-plus"></i></a>
                    </div>

                    <div class="contents">
                        <div class="lef">
                            <div class="imgbox">
                                <div class="img">
                                    <img src="<?=DIR?>/img/album-main-img1.png" alt="대교협 제256차 이사회">
                                </div>
                                <div class="information">
                                    <div class="lef">
                                        <span class="new"><img src="<?=DIR?>/img/icon/new_icon.png" alt="뉴 아이콘"></span>
                                        <p class="imgtitle">대교협 제256차 이사회</p>
                                    </div>
                                    <div class="rig">
                                        <p class="name">기획혁신팀</p>
                                        <p class="date">2023.09.18</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rig">
                            <ul class="album-list">
                                <li class="album-item">
                                    <a href="#none">
                                        <div class="img">
                                            <img src="<?=DIR?>/img/album-list-img1.png" alt="활동사진 이미지">
                                        </div>
                                        <div class="information">
                                            <span class="title">대교협-교육부 늘봄학교 및 체육예술교육 활성화 협약</span>
                                            <p class="partTeam">미디어홍보TF팀</p>
                                            <p class="date">2023.09.14</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="album-item">
                                    <a href="#none">
                                        <div class="img">
                                            <img src="<?=DIR?>/img/album-list-img1.png" alt="활동사진 이미지">
                                        </div>
                                        <div class="information">
                                            <span class="title">제1회 아세안 교수초청 장학사업 장학생 교류행사</span>
                                            <p class="partTeam">국제화지원팀</p>
                                            <p class="date">2023.08.21</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="album-item">
                                    <a href="#none">
                                        <div class="img">
                                            <img src="<?=DIR?>/img/album-list-img1.png" alt="활동사진 이미지">
                                        </div>
                                        <div class="information">
                                            <span class="title">2024학년도 수시 대학입학정보박람회</span>
                                            <p class="partTeam">미디어홍보TF팀</p>
                                            <p class="date">2023.08.10</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>

            <article class="cont cont5">
                <div class="w1300 inner">
                    <div class="contents">
                        <div class="lef">
                            <div class="kr_textbox">
                                <span class="title">대교협 <p>소식</p></span>
                                <a href="#none" class="moreBtn_" title="더보기 버튼"><i class="axi axi-plus"></i></a>
                            </div>

                            <div class="contents-wrap">
                                <div class="notice-wrap">
                                    <div class="tab_wrap">
                                        <ul class="list">
                                            <li class="tab_item active" onclick="noticeTab(0)">보도자료</li>
                                            <li class="tab_item" onclick="noticeTab(1)">고등교육 정책</li>
                                        </ul>
                                    </div>

                                    <div class="contents-view">
                                        <div class="tab_inner_wrap">
                                            <div class="tab_inner active">
                                                <ul class="notice-list">
                                                    <li class="notice-item new">
                                                        <a href="#none"><p class="new"><img src="<?=DIR?>/img/icon/new_icon.png" alt="뉴 아이콘"></p><span class="title">2024학년도 수시모집 대입 원서접수 시작</span></a>
                                                        <p class="date">2023.09.06</p>
                                                    </li>
                                                    <li class="notice-item">
                                                        <a href="#none"><span class="title">2023년 8월 대학정보공시 분석 결과 발표</span></a>
                                                        <p class="date">2023.08.31</p>
                                                    </li>
                                                    <li class="notice-item">
                                                        <a href="#none"><span class="title">2023년 8월 대학정보공시 분석 결과 발표</span></a>
                                                        <p class="date">2023.08.31</p>
                                                    </li>
                                                    <li class="notice-item">
                                                        <a href="#none"><span class="title">2023년 8월 대학정보공시 분석 결과 발표</span></a>
                                                        <p class="date">2023.08.31</p>
                                                    </li>
                                                    <li class="notice-item">
                                                        <a href="#none"><span class="title">2023년 8월 대학정보공시 분석 결과 발표</span></a>
                                                        <p class="date">2023.08.31</p>
                                                    </li>
                                                    <li class="notice-item">
                                                        <a href="#none"><span class="title">2023년 8월 대학정보공시 분석 결과 발표</span></a>
                                                        <p class="date">2023.08.31</p>
                                                    </li>
                                                    <li class="notice-item">
                                                        <a href="#none"><span class="title">2023년 8월 대학정보공시 분석 결과 발표</span></a>
                                                        <p class="date">2023.08.31</p>
                                                    </li>
                                                    <li class="notice-item">
                                                        <a href="#none"><span class="title">2023년 8월 대학정보공시 분석 결과 발표</span></a>
                                                        <p class="date">2023.08.31</p>
                                                    </li>
                                                </ul>

                                                <a href="#none" class="moveBtn" title="더보기 버튼"><i class="axi axi-plus"></i></a>
                                            </div>

                                            <div class="tab_inner">
                                                <ul class="notice-list">
                                                    <li class="notice-item new">
                                                        <a href="#none"><p class="new"><img src="<?=DIR?>/img/icon/new_icon.png" alt="뉴 아이콘"></p><span class="title">2024학년도 수시모집 대입 원서접수 시작</span></a>
                                                        <p class="date">2023.09.06</p>
                                                    </li>
                                                    <li class="notice-item">
                                                        <a href="#none"><span class="title">2023년 8월 대학정보공시 분석 결과 발표</span></a>
                                                        <p class="date">2023.08.31</p>
                                                    </li>
                                                    <li class="notice-item">
                                                        <a href="#none"><span class="title">2023년 8월 대학정보공시 분석 결과 발표</span></a>
                                                        <p class="date">2023.08.31</p>
                                                    </li>
                                                    <li class="notice-item">
                                                        <a href="#none"><span class="title">2023년 8월 대학정보공시 분석 결과 발표</span></a>
                                                        <p class="date">2023.08.31</p>
                                                    </li>
                                                    <li class="notice-item">
                                                        <a href="#none"><span class="title">2023년 8월 대학정보공시 분석 결과 발표</span></a>
                                                        <p class="date">2023.08.31</p>
                                                    </li>
                                                    <li class="notice-item">
                                                        <a href="#none"><span class="title">2023년 8월 대학정보공시 분석 결과 발표</span></a>
                                                        <p class="date">2023.08.31</p>
                                                    </li>
                                                    <li class="notice-item">
                                                        <a href="#none"><span class="title">2023년 8월 대학정보공시 분석 결과 발표</span></a>
                                                        <p class="date">2023.08.31</p>
                                                    </li>
                                                    <li class="notice-item">
                                                        <a href="#none"><span class="title">2023년 8월 대학정보공시 분석 결과 발표</span></a>
                                                        <p class="date">2023.08.31</p>
                                                    </li>
                                                </ul>

                                                <a href="#none" class="moveBtn" title="더보기 버튼"><i class="axi axi-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rig">
                            <div class="kr_textbox">
                                <span class="title">대교협 <p>발간물</p></span>
                                <a href="#none" class="moreBtn_" title="더보기 버튼"><i class="axi axi-plus"></i></a>
                            </div>

                            <div class="contents-wrap">
                                <div class="swiper bookSwiper">
                                    <ul class="swiper-wrapper">
                                        <li class="swiper-slide">
                                            <a href="#none" target="_blank">
                                                <div class="imgbox"><img src="<?=DIR?>/img/example.png" alt="예시 이미지"></div>
                                                <div class="textbox">
                                                    <p class="text">2023 <b>985</b>호 <b>대교협 소식</b></p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="swiper-slide">
                                            <a href="#none" target="_blank">
                                                <div class="imgbox"><img src="<?=DIR?>/img/example.png" alt="예시 이미지"></div>
                                                <div class="textbox">
                                                    <p class="text">2023 <b>221</b>호 <b>대학교육</b></p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="swiper-slide">
                                            <a href="#none" target="_blank">
                                                <div class="imgbox"><img src="<?=DIR?>/img/example.png" alt="예시 이미지"></div>
                                                <div class="textbox">
                                                    <p class="text">2023 <b>985</b>호 <b>대교협 소식</b></p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="swiper-slide">
                                            <a href="#none" target="_blank">
                                                <div class="imgbox"><img src="<?=DIR?>/img/example.png" alt="예시 이미지"></div>
                                                <div class="textbox">
                                                    <p class="text">2023 <b>221</b>호 <b>대학교육</b></p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-wrap">
                                    <a href="#none">
                                        <p class="text"><b>대교협소식(Weekly News)</b> 구독신청</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/footer.php"; ?>
</body>
</html>