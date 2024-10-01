<? 
$_dep = array(2,10,2);
$_tit = array('주요업무','대학교원지원','사립대학교원 임용보고');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub010 under02">
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
                                    <span class="title">사업 목적</span>
                                    <ul class="list-text">
                                        <li><p class="text">사립대학 교원임용 보고 수시 접수</p></li>
                                        <li><p class="text">사립대학교 교원임용에 대한 자율적 관리</p></li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">법적 근거</span>
                                    <ul class="list-text">
                                        <li><p class="text">사립학교법 제54조 임용에 관한 보고</p></li>
                                        <li><p class="text">행정권한의 위임 및 위탁에 관한 규정(대통령령) 제45조 제6항에 의거 한국대학교육협의회장에게 위탁</p></li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">임용보고 대상</span>
                                    <ul class="list-text">
                                        <li><p class="text">고등교육법 제14조 2항에 규정하고 있는 사립대학 교원 : 교수, 부교수, 조교수, 강사</p></li>
                                        <li><p class="text">고등교육법 제17조 2항에 규정하고 있는 사립대학 교원 : 겸임교원 및 초빙교원 등</p></li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">임용보고 내용</span>
                                    <ul class="list-text">
                                        <li><span class="title">전임교원 : </span><p class="text">신규임용, 승진, 재임용, 의원면직, 직권면직, 해임·파면, 재임용 탈락, 정년·명예 퇴직, 사망퇴직, 전보, 전직, 휴직·복직, 당연퇴직, 계약만료</p></li>
                                        <li><span class="title">비전임교원 : </span><p class="text">신규임용, 재임용, 의원면직, 직권면직, 재임용 탈락, 정년, 사망퇴직, 당연퇴직, 계약만료</p></li>
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
                                        <li><p>담당부서 : 기획혁신팀</p></li>
                                        <li><p>문의전화 : 02) 6919-3818</p></li>
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
<script src="<?=DIR?>/en/js/main.js"></script>
<script src="<?=DIR?>/en/js/header.js"></script>
</html>