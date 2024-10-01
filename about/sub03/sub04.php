<? 
$_dep = array(1,3,4);
$_tit = array('대교협소개','사이버홍보','MOU 현황');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page about-page sub03-wrap cyber-page mou-page">
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
                                <span class="title">MOU 현황</span>
                            </div>

                            <div class="row-contents">
                                <table class="row-table">
                                    <thead>
                                        <tr>
                                            <th class="rt01">체결일</th>
                                            <th class="rt02">체결기관</th>
                                            <th class="rt03">협약서</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th><span class="title">2022.09.06</span></th>
                                            <td>
                                                <p>
                                                    <반도체 관련 인재 양성을 위한 업무협약서><br> 
                                                    교육부, 산업통상자원부, 과학기술정보통신부, 전국시도교육감협의회, 한국대학교육협의회, 한국전문대학교육협의회, 삼성전자, SK하이닉스, (주)네패스, 알파솔루션즈, 한국반도체산업협회, 국가나노인프라협의체, 대한전자공학회, 반도체공학회, 한국산업기술진흥원
                                                </p>
                                            </td>
                                            <td>
                                                <a href="#none" class="filedownload_btn" download>다운로드</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th><span class="title">2022.09.06</span></th>
                                            <td>
                                                <p>
                                                    <반도체 관련 인재 양성을 위한 업무협약서><br> 
                                                    교육부, 산업통상자원부, 과학기술정보통신부, 전국시도교육감협의회, 한국대학교육협의회, 한국전문대학교육협의회, 삼성전자, SK하이닉스, (주)네패스, 알파솔루션즈, 한국반도체산업협회, 국가나노인프라협의체, 대한전자공학회, 반도체공학회, 한국산업기술진흥원
                                                </p>
                                            </td>
                                            <td>
                                                <a href="#none" class="filedownload_btn" download>다운로드</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <? include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/pagenation.php"; ?>
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