<? 
$_dep = array(1,2,1);
$_tit = array('대교협소개','경영정보','일반현황');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page about-page sub02-wrap history-page sub01">
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

                    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/about/sub02/sub02_table.php"; ?>
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
                                <table class="row-table">
                                    <thead>
                                        <tr>
                                            <th class="rt01"></th>
                                            <th class="rt02"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th><span class="title">설립근거</span></th>
                                            <td>
                                                <ul class="list">
                                                    <li><p class="text">한국대학교육협의회법 (법률 제3727호 : 1984.4.10 공포)</p></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span class="title">설립일</span></th>
                                            <td>
                                                <ul class="list">
                                                    <li><p class="text">1982년 4월 2일</p></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span class="title">설립목적</span></th>
                                            <td>
                                                <ul class="list">
                                                    <li><p class="text">전국 4년제 대학의 학사,재정,시설 등 주요 관심사에 대하여 전국 4년제 대학의 학사,재정,시설 등 주요 관심사에 대하여<br> 대학간 상호협력과 대학교육의 질적 수준 향상에 필요한 사항을 정부에 건의하여 정책에 반영하게 함으로써,<br> 대학의 자율성과 창의성을 제고하고 공공성 및 책무성을 강화하여 대학교육의 건전한 발전을 도모함</p></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span class="title">주요기능 및 역할</span></th>
                                            <td>
                                                <ul class="list dot-list">
                                                    <li><p class="text">대학의 학생선발제도에 관한 연구개발과 그 지원</p></li>
                                                    <li><p class="text">대학의 재정지원책 및 그 조성방안</p></li>
                                                    <li><p class="text">대학의 평가</p></li>
                                                    <li><p class="text">기타 대학 상호간의 협동에 관한 업무의 수행</p></li>
                                                    <li><p class="text">대학의 교육제도와 그 운영에 관한 연구 개발</p></li>
                                                    <li><p class="text">교육부 장관이 위탁하는 사업의 수행</p></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span class="title">소재지</span></th>
                                            <td>
                                                <ul class="list">
                                                    <li><p class="text">(우)08504 서울특별시 금천구 서부샛길 606 (가산동, 대성디폴리스 A동, 22~23층)</p></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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