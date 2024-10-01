<? 
$_dep = array(1,2,8);
$_tit = array('대교협소개','경영정보','회원대학현황');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page about-page sub02-wrap history-page sub07">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/svis.php"; ?>

            <article class="cont cont1">
                <div class="inner w1300">
                    <div class="kr-topTitle-wrap">
                        <span class="title"><?=$_tit[2]?></span>
                        <ul class="sub-list">
                            <li class="home">
                                <i class="axi axi-home"></i>홈</li>
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
                                <span class="title">회원대학현황</span>
                            </div>

                            <div class="row-contents">
                                <div class="college_list">
                                    <form action="?" method="post" name="collegeFrm" id="college_frm" class="college_frm">
                                        <div class="search-box">
                                            <div class="inner">
                                                <div class="search-">
                                                    <ul class="list">
                                                        <li>
                                                            <span class="title">구분</span>
                                                            <select name="" id="select01" class="college-sl select01">
                                                                <option value="sl1-opt1">전체</option>
                                                                <option value="sl1-opt2"></option>
                                                                <option value="sl1-opt3"></option>
                                                            </select>
                                                        </li>
                                                        <li>
                                                            <span class="title">유형</span>
                                                            <select name="" id="select02" class="college-sl select02">
                                                                <option value="sl2-opt1">전체</option>
                                                                <option value="sl2-opt2"></option>
                                                                <option value="sl2-opt3"></option>
                                                            </select>
                                                        </li>
                                                        <li>
                                                            <span class="title">지역</span>
                                                            <select name="" id="select03" class="college-sl select03">
                                                                <option value="sl3-opt1">전체</option>
                                                                <option value="sl3-opt2"></option>
                                                                <option value="sl3-opt3"></option>
                                                            </select>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="search- search2-">
                                                    <ul class="list">
                                                        <li class="w100">
                                                            <span class="title">대학명</span>
                                                            <input type="text" name="st" id="searchbox" class="college-sl textbox" value="">
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="btn-">
                                                    <button type="submit" class="org_Search_btn">검색<i class="axi axi-search"></i></button>
                                                    <a href="#none" class="download_btn">회원대학 주소록 다운로드</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-boxWrap">
                                            <table class="row-table">
                                                <thead>
                                                    <tr>
                                                        <th class="rt01">대학명</th>
                                                        <th class="rt02">구분</th>
                                                        <th class="rt03">지역</th>
                                                        <th class="rt04">주소</th>
                                                        <th class="rt05">연락처</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <th><span class="title">경운대학교</span></th>
                                                        <td>공립</td>
                                                        <td>대전광역시</td>
                                                        <td class="vta-t">
                                                            <ul class="list">
                                                                <li><span class="title">우편번호 : </span><p class="text">02504</p></li>
                                                                <li><span class="title">주소 : </span><p class="text">서울특별시 동대문구 서울시립대로 163 (전농동 90번지)</p></li>
                                                            </ul>
                                                        </td>
                                                        <td class="vta-t">
                                                            <ul class="list">
                                                                <li><span class="title">대표전화 : </span><p class="text">054)770-5114</p></li>
                                                                <li><span class="title">팩스 : </span><p class="text">054)748-2784</p></li>
                                                            </ul>
                                                        </td>
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