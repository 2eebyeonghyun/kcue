<? 
$_dep = array(1,3,3);
$_tit = array('대교협소개','사이버홍보','대교협 40년사');
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
                                        <img src="<?=DIR?>/img/about/brochure_img3.png" alt="브로슈어 이미지">
                                    </div>
                                    <div class="rig">
                                        <p class="top-t">지난 40년의 발자취를 정리하고<br> 더욱 발전적인 내일을 설계합니다.</p>
                                        <span class="bot-t">대교협 40년사</span>

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