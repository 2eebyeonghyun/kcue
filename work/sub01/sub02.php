<? 
$_dep = array(2,1,2);
$_tit = array('주요업무','대학간 협의조정','이사회 운영');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub01 under02">
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
                                    <p class="text">법 및 정관에 의한 협의회의 중요사항 심의 및 의결</p>
                                </div>

                                <div class="row">
                                    <span class="title">기능</span>
                                    <ul class="list-text">
                                        <li>임원집행에 관한 사항</li>
                                        <li>업무계획 운영에 관한 사항</li>
                                        <li>예산 및 결산에 관한 사항</li>
                                        <li>총회에서 위임받은 사항</li>
                                        <li>정관에 의하여 그 권한에 속하는 사항</li>
                                        <li>기타 주요사항</li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">이사회 명단</span>
                                    <div class="button-wrap">
                                        <a href="#none" class="btn_" title="이사회 명단 바로가기">바로가기<i class="axi axi-chevron-right"></i></a>
                                    </div>
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
                                        <li><p>담당부서 : 기획혁신팀</p></li>
                                        <li><p>문의전화 : 02) 6919-3817</p></li>
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