<? 
$_dep = array(1,3,2);
$_tit = array('대교협소개','사이버홍보','뉴스로 본 대학 40년');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page about-page sub03-wrap cyber-page sub01">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/svis.php"; ?>
            
            <article class="cont cont1">
                <div class="inner w1300">
                    <div class="kr-topTitle-wrap">
                        <span class="title"><?=$_tit[2]?></span>
                        <ul class="sub-list">
                            <li class="home"><i class="axi axi-home"></i>홈</li>
                            <li><?=$_tit[0]?></li>
                            <li><?=$_tit[1]?></li>
                            <li><?=$_tit[2]?></li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="cont cont2">
                <div class="inner w1300">
                    <div class="contents">
                        <div class="row">
                            <div class="row-contents">
                                <div class="brochure-wrap">
                                    <div class="lef">
                                        <img src="<?=DIR?>/img/about/brochure_img2.png" alt="브로슈어 이미지">
                                    </div>
                                    <div class="rig">
                                        <p class="top-t">한국대학교육협의회<br> 한국대학신문 공동기획</p>
                                        <span class="bot-t">뉴스로 본 대학 40년</span>

                                        <div class="line">
                                            <span class="blue"></span>
                                            <span class="gray"></span>
                                        </div>

                                        <div class="btn-wrap">
                                            <a href="#none" class="btn_ btn1" target="_blank">PDF파일 보기</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/footer.php"; ?>
        </section>
    </div>
</body>
</html>