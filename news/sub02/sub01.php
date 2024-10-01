<? 
$_dep = array(4,2);
$_tit = array('대학교육소식','대교협 보도자료');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page news-page sub02 under01">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/svis.php"; ?>

            <article class="cont cont1">
                <div class="inner w1300">
                    <div class="kr-topTitle-wrap">
                        <span class="title"><?=$_tit[1]?></span>
                        <ul class="sub-list">
                            <li class="home">
                                <i class="axi axi-home"></i>홈</li>
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
                            <div class="row-contents">
                                <div class="row">
                                    <div class="news-search-wrap">
                                        <form action="?" method="post" name="newsFrm" id="news_frm" class="news_frm">
                                            <div class="search-box search-box-wrap">
                                                <div class="inner">

                                                    <div class="search-">
                                                        <select name="" id="searchSelect" class="searchSelect">
                                                            <option value="opt1">전체</option>
                                                            <option value="opt2">제목</option>
                                                            <option value="opt3">내용</option>
                                                        </select>

                                                        <input type="text" name="newsSearch" id="news_text" class="news_text input textbox" placeholder="검색어를 입력하세요.">
                                                    </div>

                                                    <div class="btn-">
                                                        <button type="submit" class="search-btn">검색<i class="axi axi-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-boxWrap">
                                                <div class="topCount-wrap">
                                                    <span class="text">총
                                                        <p class="number">16538</p>건</span>
                                                </div>

                                                <table class="row-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="rt01">번호</th>
                                                            <th class="rt02">제목</th>
                                                            <th class="rt03">작성자</th>
                                                            <th class="rt04">첨부</th>
                                                            <th class="rt05">작성일</th>
                                                            <th class="rt06">조회</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="news_number">16538</td>
                                                            <td class="news_subject">
                                                                <a href="#none">한국고용정보원 워크넷 직업정보 제공</a>
                                                            </td>
                                                            <td class="news_writer">미디어홍보TF팀</td>
                                                            <td class="news_file file"><a href="#none" class="downloadFile" download></a></td>
                                                            <td class="news_date">2024-01-31</td>
                                                            <td class="news_count">32</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="news_number">16537</td>
                                                            <td class="news_subject">
                                                                <a href="#none">한국고용정보원 워크넷 직업정보 제공</a>
                                                            </td>
                                                            <td class="news_writer">미디어홍보TF팀</td>
                                                            <td class="news_file"><a href="#none" class="downloadFile" download></a></td>
                                                            <td class="news_date">2024-01-31</td>
                                                            <td class="news_count">32</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/pagenation.php"; ?>
                                            </div>
                                        </form>
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
                                        <li><p>담당부서 : 기획혁신팀</p></li>
                                        <li><p>문의전화 : 02) 6919-3815</p></li>
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