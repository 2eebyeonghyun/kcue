<? 
$_dep = array(3,1);
$_tit = array('발간자료','이용안내');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page publication-page sub01">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/svis.php"; ?>
            
            <article class="cont cont1">
                <div class="inner w1300">
                    <div class="kr-topTitle-wrap">
                        <span class="title"><?=$_tit[1]?></span>
                        <ul class="sub-list">
                            <li class="home"><i class="axi axi-home"></i>홈</li>
                            <li><?=$_tit[0]?></li>
                            <li><?=$_tit[1]?></li>
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
                                <span class="title"><?=$_tit[1]?></span>
                            </div>

                            <div class="row-contents">
                                <div class="row">
                                    <span class="title">소장자료</span>
                                    <table class="row-table">
                                        <thead>
                                            <tr>
                                                <th class="rt01"></th>
                                                <th class="rt02"></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <th><span class="title">연구보고서</span></th>
                                                <td>
                                                    <ul class="list">
                                                        <li>각종 연구보고서는 다음과 같은 내용들을 담고 있음</li>
                                                        <li>- 대학교육의 이념, 역사, 비젼</li>
                                                        <li>- 고등교육 법령 및 체제</li>
                                                        <li>- 대학 입학제도</li>
                                                        <li>- 교육과정 운영 및 개발</li>
                                                        <li>- 대학재정 및 운영</li>
                                                        <li>- 대학평가</li>
                                                        <li>- 대학간 협동 및 산학협동</li>
                                                        <li>- 대학시설 및 정원</li>
                                                        <li>- 교직원 연수</li>
                                                        <li>- 학사운영제도</li>
                                                        <li>- 고등교육의 국제화</li>
                                                        <li>- 직능별 및 개별대학의 발전방안</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><span class="title">세미나 자료</span></th>
                                                <td>
                                                    <ul class="list">
                                                        <li>국내, 국제세미나 자료</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><span class="title">참고자료</span></th>
                                                <td>
                                                    <ul class="list">
                                                        <li>국내외 고등교육 관련 통계, 대학입학 모집요강, 교수명부, 대학개혁사례집, 대학 평가 편람 및 기준 등의 자료임</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><span class="title">워크숍 및 연수자료</span></th>
                                                <td>
                                                    <ul class="list">
                                                        <li>대학교수, 학생, 교수법, 연구 등의 내용을 담고 있으며, 대학 교수, 직원을 대상으로 실시한 연수의 교재자료임. 종류는 다음과 같음</li>
                                                        <li>- 경영관리자 연수자료(총학장 및 처실장 대상)</li>
                                                        <li>- 교수 연수자료</li>
                                                        <li>- 행정직원 연수자료</li>
                                                        <li>- 특별과정 연수자료</li>
                                                        <li>- 해외연수자료</li>
                                                        <li>- 패키지 프로그램 자료 (패키지 프로그램 : 특정 주제와 대학현장에서 쟁점이 되는 사항을 집중적으로 다루는 심화과정 연수)</li>
                                                        <li>- 대학 자체연수</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row">
                                    <span class="title">이용 가능 시간</span>
                                    <table class="row-table">
                                        <thead>
                                            <tr>
                                                <th class="rt01"></th>
                                                <th class="rt02"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th><span class="title">이용 가능 시간</span></th>
                                                <td><p class="text">평 일(월~금) 09:00∼18:00</p></td>
                                            </tr>
                                            <tr>
                                                <th><span class="title">휴관일</span></th>
                                                <td><p class="text">토요일, 공휴일, 국경일, 본 협의회 창립 기념일(4월 2일)</p></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row">
                                    <span class="title">이용대상</span>
                                    <p class="text">본 협의회 임 · 직원, 회원대학 교직원 및 관련기관의 임직원 / 교육학 관련 분야 전공 대학원생</p>
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
                                        <li><p>담당부서 : 고등교육연구소</p></li>
                                        <li><p>문의전화 : 02) 6919-3908</p></li>
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