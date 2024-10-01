<? 
$_dep = array(1,2,5);
$_tit = array('대교협소개','경영정보','조직현황');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page about-page sub02-wrap history-page">
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
                                <div class="imgBox">
                                    <img src="<?=DIR?>/img/about/orgChart_img.png" alt="조직도">
                                </div>

                                <div class="org-search-wrap">
                                    <form action="?" method="post" name="orgFrm" id="org_frm" class="org_frm">
                                        <div class="search-box">
                                            <div class="inner">
                                                <div class="search-">
                                                    <select name="" id="searchSelect" class="searchSelect">
                                                        <option value="opt1">중소벤처기업부</option>
                                                        <option value="opt2">장관실</option>
                                                        <option value="opt3">차관실</option>
                                                    </select>

                                                    <input type="text" name="orgSearch" id="org_text" class="org_text input" placeholder="이름을 입력해주세요.">
                                                </div>

                                                <div class="btn-">
                                                    <button type="submit" class="org_Search_btn">검색<i class="axi axi-search"></i></button>
                                                    <a href="#none" class="allList_btn">전체목록<i class="axi axi-list2"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-boxWrap">
                                            <table class="row-table">
                                                <thead>
                                                    <tr>
                                                        <th class="rt01">부서</th>
                                                        <th class="rt02">직위</th>
                                                        <th class="rt03">이름</th>
                                                        <th class="rt04">담당업무</th>
                                                        <th class="rt05">연락처</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span class="dep">기획혁신팀</span></td>
                                                        <td><p>팀장</p></td>
                                                        <td><p>이성은</p></td>
                                                        <td><p>기획혁신팀 업무 총괄</p></td>
                                                        <td><p>02-69149-3811</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="dep">기획혁신팀</span></td>
                                                        <td><p>책임전문원</p></td>
                                                        <td><p>차상욱</p></td>
                                                        <td><p>예산 수립 및 관리(국고, 수입대체,평가), 발전기금 조성<br> 정부 훈련 및 비상 계획 수립 업무<br> 비밀소유 및 비밀취급 인가 업무<br> 언론스크랩 제작 및 배포</p></td>
                                                        <td><p>02-69149-3811</p></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/pagenation.php"; ?>
                                    </form>
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