<? 
$_dep = array(1,3,5);
$_tit = array('대교협소개','사이버홍보','CI 소개');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page about-page sub03-wrap cyber-page sub05">
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
                            <div class="titlebox">
                                <div class="box">
                                    <span class="spanBox blue"></span>
                                    <span class="spanBox gray"></span>
                                </div>
                                <span class="title">CI 소개</span>
                            </div>

                            <div class="row-contents">
                                <div class="row">
                                    <span class="title">심볼마크</span>
                                    <div class="box">
                                        <div class="lef">
                                            <p class="text">한국대학교육협의회의 CI시스템 도입은 협의회의 설립목표와 고등교육관련 서비스를 종합하여 시각이미지면에서 포괄적 통일성을 이루기 위함이다. 따라서 심볼마크는 대학교육협의회내의 모든 구성원들에게 소속감을 조성하고 대외적으로 대학교육 협의회의 일관된 이미지를 전달하기 위한것으로 사용규정에 따라 정확하게 표현되도록 각별히 유념해야 한다. 이로서 대학교육협의회를 이미지화하는 모든 제작물 즉, 서식류, 문구류, 증서류, 각종간행물류, 포장류, 사인류, 잡기비품류, 유니폼류 등에 사용된다.</p>

                                            <div class="btnWrap">
                                                <a href="#none" class="btn_ btn1" download>JPG 다운로드</a>
                                                <a href="#none" class="btn_ btn2" download>AI 다운로드</a>
                                            </div>
                                        </div>
                                        <div class="rig">
                                            <div class="img">
                                                <img src="<?=DIR?>/img/about/CI_logo.png" alt="대교협 심볼마크">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <span class="title">시그니처 좌우조합</span>
                                    <p class="text">법인심볼마크는 한국대학교육협의회의 시각이미지 통합시스템의 기본요소로서 법인이미지를 대내외에 표현하는 모든 커뮤니케이션의 핵심이 된 대표적 상징물이다. 따라서 통일된 법인 이미지의 유지관리를 위해서는 규정된 사용법에 대하여 정확하게 표현해야 한다.</p>

                                    <div class="simbol-wrap">
                                        <div class="logo-wrap">
                                            <div class="logo color">
                                                <img src="<?=DIR?>/img/logo_color.png" alt="대교협 로고">
                                            </div>
                                            <div class="logo black">
                                                <img src="<?=DIR?>/img/logo.png" alt="대교협 로고">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <span class="title">컬러시스템</span>

                                    <div class="color-system">
                                        <div class="lef">
                                            <div class="textbox">
                                                <span class="color-title">KCUE BLUE</span>
                                                <p class="color">C100 M100 Y0 K0<br> R19 G0 B124</p>
                                            </div>
                                        </div>

                                        <div class="rig">
                                            <div class="textbox">
                                                <span class="color-title">KCUE BLACK</span>
                                                <p class="color">C0 M0 Y0 K0<br> R0 G0 B0</p>
                                            </div>
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