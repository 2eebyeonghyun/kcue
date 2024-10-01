<? 
$_dep = array(2,1,1);
$_tit = array('주요업무','대학간 협의조정','총회운영');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub01 under01">
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
                                    <p class="text">법 및 정관에 의한 협의회의 최고의결기관으로서의 기능 수행</p>
                                </div>

                                <div class="row">
                                    <span class="title">기능</span>
                                    <ul class="list-text">
                                        <li>임원 선출에 관한 사항</li>
                                        <li>정관 변경에 관한 사항</li>
                                        <li>예산 및 결산의 승인</li>
                                        <li>사업계획의 승인</li>
                                        <li>기타 중요사항</li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">총회의 소집 및 시기</span>
                                    <p class="text">총회는 정기총회와 임시총회로 나누어져 있고, 정기총회는 연 1회 개최하며,<br> 임시총회는 필요시 회장이 수시 소집하여 각종 사안을 심의 의결하도록 하고 있음</p>
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