<? 
$_dep = array(4,1);
$_tit = array('PUBLICATIONS','Publications');
include $_SERVER['DOCUMENT_ROOT']."/kcue/inc/common.php"; 
?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/header.php"; ?>

    <div class="wrap">
        <section class="en_main-page publications-page">
            <? include $_SERVER['DOCUMENT_ROOT']."/kcue/en/inc/svis.php"; ?>
            
            <article class="cont cont1">
                <div class="inner w1350">
                    <div class="contents">
                        <div class="publications_view_information">
                            <div class="imgbox">
                                <img src="<?=DIR?>/img/en/publications/publications_img.png" alt="publications img">
                            </div>
                            <div class="infobox">
                                <span class="title">[Magazine] UNESCO Global Convention on the Recognition of Higher Education Qualifications - Expansion of International Higher Education Mobility</span>
                                
                                <ul class="subject_box">
                                    <li>Publication Type</li>
                                    <li>Publisher</li>
                                    <li>Published Date</li>
                                </ul>

                                <div class="pb-btn-wrap">
                                    <a href="#none" class="download-file">File Download<i class="axi axi-file-download"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="publications_view_contents">
                            <div class="row">
                                <div class="en_textbox">
                                    <span class="title">Contents</span>
                                    <span class="line"></span>
                                </div>

                                <div class="contents">
                                    <ul class="subject_box">
                                        <li>
                                            UNESCO Global Convention on the Recognition of Higher Education Qualifications - Expansion of International Higher Education Mobility<br> 
                                            - Prologue<br> 
                                            - Background and progress of the implementation of the Convention<br> 
                                            - Convention on the Recognition of Domestic Qualifications<br> 
                                            - the main contents of the Convention<br> 
                                            - the meaning of Convention
                                        </li>
                                        <li>Lee Da-in (Ms.) / Coordinator</li>
                                        <li>
                                            Korea Academic Recognition Information Center(KARIC)<br> 
                                            Korean Council for University Education(KCUE)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="publications_view_list">
                            <div class="list-view">
                                <ul class="list">
                                    <li class="next">
                                        <span class="title">Next</span>
                                        <a href="#none" class="list_subject">[Magazine] Korea Academic Recognition Center contributes to...</a>
                                    </li>
                                    <li class="prev">
                                        <span class="title">Previous</span>
                                        <a href="#none" class="list_subject">KCUE brochure</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="list-btn">
                                <a href="<?=DIR?>/en/news/news.php">List</a>
                            </div>
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