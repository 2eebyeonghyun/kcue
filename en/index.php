<? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; ?>

<link rel="stylesheet" href="<?=DIR?>/en/css/jquery.fullPage.css">

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/header.php"; ?>

    <div class="wrap">
        <section id="fullpage" class="en_main-page">
            <article id="section0" class="section section1">
                <div class="swiper en_mainSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide mainV_01">
                            <div class="inner">
                                <div class="textbox">
                                    <span class="s_text">Working for universities in the 21st century</span>
                                    <p class="m_text">Korean Council<br> for University Education</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide mainV_01">
                            <div class="inner">
                                <div class="textbox">
                                    <span class="s_text">Working for universities in the 21st century</span>
                                    <p class="m_text">Korean Council<br> for University Education</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-options">
                        <div class="left-options">
                            <div class="swiper-pagination pagination-number">
                                <div class="swiper-button-prev"></div>
                                <div class="pager-fraction"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>

                        <div class="right-options">
                            <div class="swiper-pagination pagination-bullet"></div>
                            <div class="swiper-auto">
                                <button type="button" class="slideBtn btn-play">슬라이드 재생</button>
                                <button type="button" class="slideBtn btn-stop active">슬라이드 일시정지</button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article id="section1" class="section section2 new">
                <div class="inner">
                    <div class="textbox Textbtn-wrap">
                        <span class="title"><strong class="imp">KCUE</strong> NEWS</span>
                        <a href="<?=DIR?>/en/news/news.php" class="moveBtn_"><i class="axi axi-plus"></i></a>
                    </div>

                    <div class="contents">
                        <div class="swiper news_Swiper">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide">
                                    <a href="<?=DIR?>/en/news/news_view.php">
                                        <div class="imgbox">
                                            <img src="<?=DIR?>/img/en/mainA.png" alt="kcue news img">
                                        </div>

                                        <div class="infobox">
                                            <h6 class="title">[Activities] First session of the Intergovernmental Conference of...</h6>
                                            <p class="date">2023-05-09</p>
                                            <p class="information-text">Korea Academic Recognition Center(KARIC) attended the First session of the Intergovernmental Conference of States Parties to the Global Convention...</p>
                                        </div>
                                    </a>
                                </li>
                                
                                <li class="swiper-slide">
                                    <a href="<?=DIR?>/en/news/news_view.php">
                                        <div class="imgbox">
                                            <img src="<?=DIR?>/img/en/mainA.png" alt="kcue news img">
                                        </div>

                                        <div class="infobox">
                                            <h6 class="title">[Activities] First session of the Intergovernmental Conference of...</h6>
                                            <p class="date">2023-05-09</p>
                                            <p class="information-text">Korea Academic Recognition Center(KARIC) attended the First session of the Intergovernmental Conference of States Parties to the Global Convention...</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="swiper-slide">
                                    <a href="<?=DIR?>/en/news/news_view.php">
                                        <div class="imgbox">
                                            <img src="<?=DIR?>/img/en/mainA.png" alt="kcue news img">
                                        </div>

                                        <div class="infobox">
                                            <h6 class="title">[Activities] First session of the Intergovernmental Conference of...</h6>
                                            <p class="date">2023-05-09</p>
                                            <p class="information-text">Korea Academic Recognition Center(KARIC) attended the First session of the Intergovernmental Conference of States Parties to the Global Convention...</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div class="swiper-options">
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article id="section2" class="section section3">
                <div class="inner">
                    <ul class="work-list">
                        <li class="work-item hover-no">
                            <span class="title"><strong class="imp">KCUE</strong> WORKS</span>
                            <p class="text">The main work of<br> the Korean Council for University Education</p>
                        </li>
                        <li class="work-item">
                            <a href="<?=DIR?>/en/work/research.php">
                                <h6 class="title">Policy Research</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon1.png" alt="Policy Research">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="<?=DIR?>/en/work/cooperation.php">
                                <h6 class="title">International<br> Cooperation</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon2.png" alt="International Cooperation">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="<?=DIR?>/en/work/admission.php">
                                <h6 class="title">Admission</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon3.png" alt="Admission">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="<?=DIR?>/en/work/quality">
                                <h6 class="title">Quality<br> Assurance</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon4.png" alt="Quality Assurance">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="<?=DIR?>/en/work/disclosure.php">
                                <h6 class="title">Information<br> Disclosure</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon5.png" alt="Information Disclosure">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="<?=DIR?>/en/work/education.php">
                                <h6 class="title">General<br> Education</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon6.png" alt="General Education">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="<?=DIR?>/en/work/talent.php">
                                <h6 class="title">Talent<br> Development</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon7.png" alt="Talent Development">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>

            <article id="section3" class="section section4">
                <div class="inner">
                    <div class="textbox Textbtn-wrap">
                        <span class="title"><strong class="imp">KCUE</strong> PUBLICATION</span>
                        <a href="<?=DIR?>/en/publications/publications.php" class="moveBtn_"><i class="axi axi-plus"></i></a>
                    </div>

                    <div class="contents">
                        <!-- <ul class="publication-list">
                            <li class="publication-item">
                                <a href="#none">
                                    <div class="imgbox">
                                        <span></span>
                                    </div>

                                    <div class="infobox">
                                        <h6 class="title"><b>KCUE</b> Brochure</h6>
                                    </div>

                                    <div class="hover-view">
                                        <div onclick="location.href='<?=DIR?>/'">
                                            <span class="title"><b>KCUE</b> Brochure</span>
                                            <p class="button"><i class="axi axi-plus"></i></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="publication-item">
                                <a href="#none">
                                    <div class="imgbox">
                                        <span></span>
                                    </div>

                                    <div class="infobox">
                                        <h6 class="title"><b>KCUE</b> Webzine</h6>
                                    </div>

                                    <div class="hover-view">
                                        <div onclick="location.href='<?=DIR?>/'">
                                            <span class="title"><b>KCUE</b> Webzine</span>
                                            <p class="button"><i class="axi axi-plus"></i></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="publication-item">
                                <a href="#none">
                                    <div class="imgbox">
                                        <span></span>
                                    </div>

                                    <div class="infobox">
                                        <h6 class="title"><b>Higher Education</b> System Leaflet</h6>
                                    </div>

                                    <div class="hover-view">
                                        <div onclick="location.href='<?=DIR?>/'">
                                            <span class="title"><b>Higher Education</b><br> System Leaflet</span>
                                            <p class="button"><i class="axi axi-plus"></i></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul> -->
                    
                        <div class="swiper en_publicationSwiper">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide">
                                    <a href="#none">
                                        <div class="imgbox"><span><img src="<?=DIR?>/en/img/mainA.png" alt="publication 이미지"></span></div>

                                        <div class="infobox">
                                            <h6 class="title"><b>KCUE</b> Brochure</h6>
                                        </div>

                                        <div class="hover-view">
                                            <div>
                                                <span class="title"><b>KCUE</b> Brochure</span>
                                                <p class="button"><i class="axi axi-plus"></i></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="swiper-slide">
                                    <a href="#none">
                                        <div class="imgbox"><span><img src="<?=DIR?>/en/img/mainA.png" alt="publication 이미지"></span></div>

                                        <div class="infobox">
                                            <h6 class="title"><b>KCUE</b> Webzine</h6>
                                        </div>

                                        <div class="hover-view">
                                            <div>
                                                <span class="title"><b>KCUE</b> Webzine</span>
                                                <p class="button"><i class="axi axi-plus"></i></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="swiper-slide">
                                    <a href="#none">
                                        <div class="imgbox"><span><img src="<?=DIR?>/en/img/mainA.png" alt="publication 이미지"></span></div>

                                        <div class="infobox">
                                            <h6 class="title"><b>Higher Education System</b> Leaflet</h6>
                                        </div>

                                        <div class="hover-view">
                                            <div>
                                                <span class="title"><b>Higher Education System </b><br> Leaflet</span>
                                                <p class="button"><i class="axi axi-plus"></i></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>

            <article id="footer-wrap" class="section footer-wrap fp-auto-height">
                <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/footer.php"; ?>
            </article>
        </section>
    </div>
</body>
<script src="<?=DIR?>/en/js/jquery.fullPage.js"></script>
<script src="<?=DIR?>/en/js/scrolloverflow.js"></script>
<script src="<?=DIR?>/en/js/fullpage.js"></script>
<script src="<?=DIR?>/en/js/main.js"></script>
<script src="<?=DIR?>/en/js/header.js"></script>
</html>