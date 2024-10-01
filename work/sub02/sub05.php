<? 
$_dep = array(2,2,5);
$_tit = array('주요업무','정책건의 및 자료개발','KCUE컨소시엄 운영');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub02 under05">
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
                                <span class="title"><?=$_tit[2]?></span>
                            </div>

                            <div class="row-contents">
                                <div class="row">
                                    <span class="title">목적</span>
                                    <p class="text">대학도서관의 학술 전자정보 공동구매 지원 및 협상을 통한 연구인프라 구축</p>
                                </div>

                                <div class="row">
                                    <span class="title">주요내용</span>
                                    <ul class="list-text">
                                        <li>대학도서관 전자정보 컨소시엄 협상을 통한 합리적인 구독조건 체계 확립</li>
                                        <li>연구지원을 위한 회원대학의 학술정보 공유 네트워크 형성</li>
                                        <li>국가경쟁력 제고를 위한 연구정보 인프라 고도화를 위한 방안 모색</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="company-infoBox">
                                <div class="img">
                                    <img src="<?=DIR?>/img/company_img.png" alt="하단 회사정보 이미지">
                                </div>
                                <div class="textbox">
                                    <ul class="list">
                                        <li><p>담당부서 : 고등교육연구소 정책연구팀</p></li>
                                        <li><p>문의전화 : 02) 6919-3907</p></li>
                                    </ul>
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