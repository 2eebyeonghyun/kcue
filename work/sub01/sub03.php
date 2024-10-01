<? 
$_dep = array(2,1,3);
$_tit = array('주요업무','대학간 협의조정','총장협의회 지원');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page work-page sub01 under03">
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
                                    <span class="title">주요내용</span>
                                    
                                    <div class="subject-table">
                                        <ul class="list">
                                            <li>
                                                <span class="title">[각협의회 운영지원]</span>
                                                <ul class="sub-list">
                                                    <li>협의회별 활동 내역 및 계획 조사</li>
                                                    <li>설립별, 특성별 대학총장협의회 운영 경비 지원</li>
                                                </ul>
                                            </li>

                                            <li>
                                                <span class="title">[대학 현장의 의견 수렴 및 대학 특성에 맞는 정책 개발]</span>
                                                <ul class="sub-list">
                                                    <li>협의회 행사에 대교협 관계자가 참석하여 협의회의 현안을 파악하고 대교협과 대학간의 긴밀한 협력관계 구축</li>
                                                    <li>의견 수렴 내용을 기초로 한 정책연구 수행</li>
                                                    <li>정책 개발 내용의 정부 건의</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <span class="title">설립별 특성별 지역별 총장협의회 현황</span>
                                    
                                    <table class="row-table">
                                        <thead>
                                            <tr>
                                                <th class="rt01">협의회명</th>
                                                <th class="rt02">회장명</th>
                                                <th class="rt03">소속대학</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><span class="title">전국국·공립대학총장협의회</span></td>
                                                <td><p>이진숙</p></td>
                                                <td><p>충남대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">한국사립대학총장협의회</span></td>
                                                <td><p>장윤금</p></td>
                                                <td><p>숙명여자대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">거점국립대학교총장협의회</span></td>
                                                <td><p>차정인</p></td>
                                                <td><p>부산대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">국가중심국공립대학교총장협의회</span></td>
                                                <td><p>장영수</p></td>
                                                <td><p>부경대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">강원지역대학총장협의회</span></td>
                                                <td><p>반선섭</p></td>
                                                <td><p>강릉원주대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">경인지역대학총장협의회</span></td>
                                                <td><p>조명우</p></td>
                                                <td><p>인하대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">광주·전남지역대학교총장협의회</span></td>
                                                <td><p>정성택</p></td>
                                                <td><p>전남대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">대구·경북지역대학교총장협의회</span></td>
                                                <td><p>정현태</p></td>
                                                <td><p>경일대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">대전·세종·충남지역대학교총장협의회</span></td>
                                                <td><p>오덕성</p></td>
                                                <td><p>우송대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">부산·울산·경남·제주지역대학교총장협의회</span></td>
                                                <td><p>김일환</p></td>
                                                <td><p>제주대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">전북지역대학교총장협의회</span></td>
                                                <td><p>박진배</p></td>
                                                <td><p>전주대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">충북지역대학교총장협의회</span></td>
                                                <td><p>황윤원</p></td>
                                                <td><p>중원대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">서울총장포럼</span></td>
                                                <td><p>홍성태</p></td>
                                                <td><p>상명대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">전국교원양성대학교총장협의회</span></td>
                                                <td><p>박판우</p></td>
                                                <td><p>대구교육대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">한국가톨릭계대학총장협의회</span></td>
                                                <td><p>원종철</p></td>
                                                <td><p>가톨릭대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">한국신학대학총장협의회</span></td>
                                                <td><p>최대해</p></td>
                                                <td><p>대신대학교 총장</p></td>
                                            </tr>
                                            <tr>
                                                <td><span class="title">한국여자대학총장협의회</span></td>
                                                <td><p>김명애</p></td>
                                                <td><p>동덕여자대학교 총장</p></td>
                                            </tr>
                                        </tbody>
                                    </table>
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