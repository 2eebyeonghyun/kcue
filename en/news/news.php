<? 
$_dep = array(3,1);
$_tit = array('NEWS','News');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/header.php"; ?>

    <div class="wrap">
        <section class="en_main-page news-page">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/svis.php"; ?>
            
            <article class="cont cont1">
                <div class="inner w1350">
                    <div class="en_textbox">
                        <span class="title">KCUE News</span>
                        <span class="line"></span>
                    </div>

                    <div class="contents">
                        <div class="table news-table-wrap">
                            <table class="news-table">
                                <thead>
                                    <tr>
                                        <th class="th1">Num</th>
                                        <th class="th2">Photo</th>
                                        <th class="th3">Subject</th>
                                        <th class="th4">Writer</th>
                                        <th class="th5">Data</th>
                                        <th class="th6">Hit</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="background">
                                        <td class="number tag"><p>Notice</p></td>
                                        <td class="mobile-display-none"><a href="<?=DIR?>/en/news/news_view.php" class="news_img"><img src="<?=DIR?>/img/en/news/news_img1.png" alt="news img"></a></td>
                                        <td class="news_subject"><a href="<?=DIR?>/en/news/news_view.php" class="news_subject">[Call for Application] 2020-2 Higher Educat…</a></td>
                                        <td class="news_writer"><p>KCUE</p></td>
                                        <td class="news_data"><p>08-25</p></td>
                                        <td class="news_hit"><p>24290</p></td>
                                    </tr>
                                    <tr class="">
                                        <td class="number"><p>106</p></td>
                                        <td class="mobile-display-none"><a href="<?=DIR?>/en/news/news_view.php" class="news_img"><img src="<?=DIR?>/img/en/news/news_img1.png" alt="news img"></a></td>
                                        <td class="news_subject"><a href="<?=DIR?>/en/news/news_view.php" class="news_subject">[Call for Application] 2020-2 Higher Educat…</a></td>
                                        <td class="news_writer"><p>KCUE</p></td>
                                        <td class="news_data"><p>03-04</p></td>
                                        <td class="news_hit"><p>24299</p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </article>

            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/footer.php"; ?>
        </section>
    </div>
</body>
<script src="<?=DIR?>/en/js/main.js"></script>
<script src="<?=DIR?>/en/js/header.js"></script>
</html>