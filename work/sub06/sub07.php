<? 
$_dep = array(2,6,7);
$_tit = array('주요업무','대학입학','대입지원방법 위반 사전예방');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub06 under01">
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
                                <a href="#none" class="linkBtn_" target="_blank">대입원서지원정보 바로가기<i class="axi axi-chevron-right"></i></a>
                            </div>

                            <div class="row-contents">
                                <div class="row">
                                    <span class="title">목적</span>
                                    <p class="text">대학에 지원 또는 등록하는 과정에서 발생할 수 있는 위반 사항에 대한 검색을 통해 최종 위반자가 되어 입학 취소가 되지 않도록 대입지원방법 위반 사전예방 업무 수행</p>
                                </div>

                                <div class="row">
                                    <span class="title">근거</span>
                                    <p class="text">고등교육법 시행령 제42조(입학지원방법 등), 제42조의2(입학지원방법 위반자의 처리), 제73조(고유식별정보의 처리), 대학입학전형 기본사항</p>
                                </div>

                                <div class="row">
                                    <span class="title">대입지원방법 위반 종류</span>

                                    <ul class="list-text">
                                        <li>수시모집 지원횟수 6회 초과(전문대학, 산업대학 제외)</li>
                                        <li>수시모집 예치금 이중납부</li>
                                        <li>수시모집 합격 후 정시/추가모집 지원</li>
                                        <li>정시모집 동일군 복수 지원(전문대학, 산업대학 제외)</li>
                                        <li>2개 이상 대학 이중등록</li>
                                        <li>정시모집 등록 후 추가모집 지원(전문대학, 산업대학 제외)</li>
                                    </ul>

                                    <p class="informaton">※ 위 사항에 대해 위반 검색 후 대학에 통보</p>
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