<? 
$_dep = array(2,2,3);
$_tit = array('주요업무','정책건의 및 자료개발','대학교육지 발간');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub02 under03">
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
                                        <li>대학교육의 이론과 실제에 관한 자료와 정보를 제공하여 대학사회의 공감대를 형성하고, 대학교육 개혁과 발전 촉진</li>
                                        <li>대학 현안문제와 상호발전을 위한 논의의 장과 해결책을 제시하여 대학사회의 여론 형성 및 정보공유의 기회 마련</li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">주요내용</span>
                                    <ul class="list-text">
                                        <li>1983년 창간호를 시작으로 연간 4회(계간) 발간</li>
                                        <li>게재내용 : 총장칼럼, 인물인터뷰, 특집기획, 이슈진단 및 분석, 입법동향, 해외고등교육동향 등</li>
                                        <li>배포 : 회원대학, 전문대학, 정부, 국회, 교육유관기관, 산업체 등</li>
                                        <li>편집자문위원회 운영 : 외부 전문가 포함 자문위원회 운영</li>
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
                                        <li><p>문의전화 : 02) 6919-3906</p></li>
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