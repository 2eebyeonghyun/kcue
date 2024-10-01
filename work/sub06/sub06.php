<? 
$_dep = array(2,6,6);
$_tit = array('주요업무','대학입학','표준 공통원서접수서비스 운영');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub06 under06">
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
                                <a href="#none" class="linkBtn_" target="_blank">표준 공통원서 접수서비스 바로가기<i class="axi axi-chevron-right"></i></a>
                            </div>

                            <div class="row-contents">
                                <div class="row">
                                    <span class="title">표준 공통원서 접수서비스란?</span>
                                    <ul class="list-text">
                                        <li><p class="text">수험생의 원서접수 절차를 간소화하여 편의성을 높이고, 개인정보를 안전하게 보호하기 위해 구축된 원서접수 서비스입니다.</p></li>
                                        <li>
                                            <p class="text">
                                                대학별 원서의 공통항목을 표준화하여, 한 번 작성하면 희망하는 여러 대학에 지원이 가능합니다.<br> 
                                                <i>※ 공통항목 : 성명, 주민등록번호, 주소, 이메일, 연락처, 최종학력, 계좌정보</i>
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text">
                                                원서접수 대행사를 통해 원서를 접수 받는 대부분의 대학에 적용됩니다.(2023학년도 기준)<br> 
                                                <i>※ 적용대학 : 일반대 186개교 / 전문대 : 134개교 / 기타 : 5개교</i><br> 
                                                <i>※ 미적용 대학 : 광주가톨릭대학교, 대전가톨릭대학교, 수원가톨릭대학교, 영산선학대학교, 중앙승가대학교, 광주과학기술원, 한국방송통신대학교, 공군사관학교, 육군사관학교, 해군사관학교, 국군간호사관학교, 경찰대학, 울산과학기술원, 대구경북과학기술원, 한국에너지공과대학교, 한국전통문화대학교</i>
                                            </p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">표준 공통원서의 특징</span>
                                    <ul class="list-text">
                                        <li>
                                            <p class="text">
                                                원서접수 대행사마다 회원가입을 하지 않아도 됩니다.<br> 
                                                <i>※ 대행사 한 곳을 통해 통합회원으로 가입하면 여러 대행사에 로그인이 가능합니다.</i>
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text">
                                                공통원서 작성 한 번으로 여러 대학에 지원이 가능합니다.<br> 
                                                <i>※ 공통원서를 한 번 작성하여 저장하면, 희망하는 대학에 원서를 접수할 때마다 불러와 활용할 수 있고, 내보내기/불러오기 기능을 통해 어느 대행사를 이용하든 작성된 공통원서를 활용할 수 있습니다.</i>
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text">
                                                원서에 기재되는 개인정보는 안전하게 보호됩니다.<br> 
                                                <i>※ 개인정보는 암호화되어 수험생 본인과 대학 담당자만 열람이 가능합니다.</i>
                                            </p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <span class="title">표준 공통원서 접수서비스 이용방법</span>

                                    <ul class="step-wrap">
                                        <li>
                                            <div class="imgbox">
                                                <img src="<?=DIR?>/img/work/sub6_6_1.png" alt="통합회원 가입">
                                            </div>
                                            <div class="txtbox">
                                                <span class="title">통합회원 가입</span>
                                                <p class="text">대행사 한 곳을 통해 통합회원으로 가입하면, 어느 대행사를 이용하던 로그인이 가능</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="imgbox">
                                                <img src="<?=DIR?>/img/work/sub6_6_2.png" alt="공통원서 작성">
                                            </div>
                                            <div class="txtbox">
                                                <span class="title">공통원서 작성</span>
                                                <p class="text">공통원서 작성<br> (성명, 주민등록번호, 주소, 이메일주소, 연락처, 최종학력, 출신고교, 졸업예정년도, 계좌정보)</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="imgbox">
                                                <img src="<?=DIR?>/img/work/sub6_6_3.png" alt="공통원서 내보내기/불러오기">
                                            </div>
                                            <div class="txtbox">
                                                <span class="title">공통원서<br> 내보내기/불러오기</span>
                                                <p class="text">공통원서를 원서접수 대행사간 연계하여, 어느대행사를 이용하던 원서접수 가능</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="imgbox">
                                                <img src="<?=DIR?>/img/work/sub6_6_4.png" alt="원서 추가항목 작성">
                                            </div>
                                            <div class="txtbox">
                                                <span class="title">원서 추가항목 작성</span>
                                                <p class="text">희망하는 대학을 검색하여 지원전형, 지원학과 등 대학의 추가 항목을 작성</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="imgbox">
                                                <img src="<?=DIR?>/img/work/sub6_6_5.png" alt="원서 결제">
                                            </div>
                                            <div class="txtbox">
                                                <span class="title">원서 결제</span>
                                                <p class="text">각각의 원서를 개별결제 또는 저장해놓은 여러원서를 묶어서 묶음결제 가능</p>
                                            </div>
                                        </li>
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
                                        <li><p>담당부서 : 정보화지원팀</p></li>
                                        <li><p>문의전화 : 02) 02-6919-3972</p></li>
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