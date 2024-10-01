<? 
$_dep = array(2,2,4);
$_tit = array('주요업무','정책건의 및 자료개발','고등교육 동향정보 제공');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub02 under04">
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
                                    <ul class="list-text">
                                        <li>국내 주요신문에서 다뤄진 고등교육 관련 기사를 선별하여 메일링 서비스</li>
                                        <li>한 주간의 고등교육 주요 정책, 회원대학 소식 및 대교협 동정 등을 뉴스레터 형식으로 제작하여 제공</li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">주요내용</span>
                                    <ul class="list-text">
                                        <li>고등교육 언론기사 메일링 서비스 : 주 5회 매일 제공</li>
                                        <li>대교협 소식(Weekly News)</li>
                                    </ul>

                                    <div class="button-wrap">
                                        <a href="<?=DIR?>/news/sub04/sub01.php" class="btn_" title="이사회 명단 바로가기">바로가기<i class="axi axi-chevron-right"></i></a>
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
                                        <li><p>담당부서 : 기획홍보팀</p></li>
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