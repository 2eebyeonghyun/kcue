<? include $_SERVER['DOCUMENT_ROOT']."/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/inc/header.php"; ?>

    <div class="wrap">
        <section class="kr_main-page main-page">
            <article class="cont cont1">
                <div class="inner">
                    <div class="lef">
                        <div class="swiper mainSwiper">
                            <div class="swiper-wrapper">
                                <?php
                                //메인배너
                                $table_board = "G_Banner";
                                $List   = $db -> SelectList("Select * From ".$table_board." Where Position='main' AND Display='Y' order by Sort asc, idx asc");
                                if($List) {
                                    foreach($List as $key => $Value){
                                        $BannerFileUrl = "<img src='"._UPLOAD_ . $Value['BannerFile']."' alt='{$Value['Subject']}' class='slide-img' />";
                                        $BannerTarget = ($Value["Target"]=="Y") ? "target='_blank'" : "";
                                        $BannerLink = ($Value["Link"]) ? "<a href='{$Value['Link']}' {$BannerTarget}>" : "";
                                ?>
                                <div class="swiper-slide">
                                    <?=$BannerLink?><?=$BannerFileUrl?>
                                    <div class="textbox">
                                        <span class="s_text"><?=$Value["Subject"]?></span>
                                        <p class="m_text"><?=$Value["SubSubject"]?></p>
                                    </div>
                                    </a>
                                </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>

                            <div class="swiper-options">
                                <div class="swiper-pagination pagination-bullet"></div>
                                <div class="swiper-auto">
                                    <button type="button" class="slideBtn btn-play">슬라이드 재생</button>
                                    <button type="button" class="slideBtn btn-stop active">슬라이드 일시정지</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rig">
                        <ul class="fm_site_wrap">
                            <li class="site">
                                <div class="left">
                                    <div class="img">
                                        <img src="<?=DIR?>/img/fm_logo1.png" alt="adiga 로고">
                                    </div>
                                    <div class="text">대입지원 정보조회, 대입전형 정보조회</div>
                                </div>
                                <div class="right">
                                    <a href="https://adiga.kr/"  target="_blank">
                                        <p class="text">바로가기</p>
                                        <img src="<?=DIR?>/img/icon/fm_arrow_icon.png" alt="바로가기 화살 아이콘" class="arrow_icon">
                                    </a>
                                </div>
                            </li>
                            <li class="site">
                                <div class="left">
                                    <div class="img">
                                        <img src="<?=DIR?>/img/fm_logo2.png" alt="대학알리미 로고" style="mix-blend-mode: darken;">
                                    </div>
                                    <div class="text">대학의 주요 공시정보 제공</div>
                                </div>
                                <div class="right">
                                    <a href="https://academyinfo.go.kr/index.do"  target="_blank">
                                        <p class="text">바로가기</p>
                                        <img src="<?=DIR?>/img/icon/fm_arrow_icon.png" alt="바로가기 화살 아이콘" class="arrow_icon">
                                    </a>
                                </div>
                            </li>
                            <li class="site">
                                <div class="left">
                                    <div class="img">
                                        <img src="<?=DIR?>/img/fm_logo3.png" alt="한국대학평가원 로고">
                                    </div>
                                    <div class="text">대학평가 소개, 대학기관평가인증 결과 조회</div>
                                </div>
                                <div class="right">
                                    <a href="https://aims.kcue.or.kr/"  target="_blank">
                                        <p class="text">바로가기</p>
                                        <img src="<?=DIR?>/img/icon/fm_arrow_icon.png" alt="바로가기 화살 아이콘" class="arrow_icon">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="cont cont2">
                <div class="w1300 inner">
                    <div class="contents">
                        <div class="lef">
                            <div class="notive-wrap">
                                <div class="tab_wrap">
                                    <ul class="list">
                                        <li class="tab_item active" onclick="activeTab(0)">공지사항</li>
                                        <li class="tab_item" onclick="activeTab(1)">입찰공고</li>
                                        <li class="tab_item" onclick="activeTab(2)">자료실</li>
                                    </ul>
                                </div>

                                <div class="contents">
                                    <div class="tab_inner_wrap">
                                        <div class="tab_inner active">
                                            <div class="row">
                                                <div class="top">
                                                    <?php
                                                    $Board['board_id'] = "notice";
                                                    $table_board = "G_Notice";
                                                    $WHERE = null;
                                                    $WHERE[] = " Status = 'Y' ";
                                                    $WHERE[] = " BoardID = '".$Board['board_id']."' ";
                                                    $WhereQuery = (is_array($WHERE))? " and (".implode(" and ", $WHERE).")" : "";
                                                    $Value = $db->SelectOne("Select * From ".$table_board." Where (1) {$WhereQuery} order by idx desc limit 0,1");
                                                    $Value['RegDate'] = str_replace("-",".",substr($Value['RegDate'],0,10));
                                                    ?>
                                                    <div class="dateBox">
                                                        <span class="day"><?=substr($Value['RegDate'],-2)?></span>
                                                        <p class="yymm"><?=substr($Value['RegDate'],0,7)?></p>
                                                    </div>
                                                    <a href="/notice/sub01.php?at=view&idx=<?=$Value['idx']?>" class="title"><span class="new"><img src="<?=DIR?>/img/icon/new_icon.png" alt="뉴 아이콘"></span><p><?=$Value['Subject']?></p></a>
                                                </div>

                                                <div class="bot">
                                                    <ul class="news-list">
                                                        <?php
                                                        $List = $db->SelectList("Select * From ".$table_board." Where (1) {$WhereQuery} order by idx desc limit 1,6");
                                                        if ($List) {
                                                            foreach ($List as $key => $Value) {
                                                                $Value['RegDate'] = str_replace("-",".",substr($Value['RegDate'],0,10));
                                                        ?>
                                                        <li>
                                                            <a href="/notice/sub01.php?at=view&idx=<?=$Value['idx']?>">
                                                                <span class="title"><?=$Value['Subject']?></span>
                                                                <p class="date"><?=$Value['RegDate']?></p>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>

                                                <a href="/notice/sub01.php" class="moveBtn"><i class="axi axi-plus"></i></a>
                                            </div>
                                        </div>

                                        <div class="tab_inner">
                                            <div class="row">
                                                <div class="top">
                                                    <?php
                                                    $Board['board_id'] = "bid";
                                                    $table_board = "G_Board";
                                                    $WHERE = null;
                                                    $WHERE[] = " Status = 'Y' ";
                                                    $WHERE[] = " BoardID = '".$Board['board_id']."' ";
                                                    $WhereQuery = (is_array($WHERE))? " and (".implode(" and ", $WHERE).")" : "";
                                                    $Value = $db->SelectOne("Select * From ".$table_board." Where (1) {$WhereQuery} order by idx desc limit 0,1");
                                                    $Value['RegDate'] = str_replace("-",".",substr($Value['RegDate'],0,10));
                                                    ?>
                                                    <div class="dateBox">
                                                        <span class="day"><?=substr($Value['RegDate'],-2)?></span>
                                                        <p class="yymm"><?=substr($Value['RegDate'],0,7)?></p>
                                                    </div>
                                                    <a href="/notice/sub05.php?at=view&idx=<?=$Value['idx']?>" class="title"><span class="new"><img src="<?=DIR?>/img/icon/new_icon.png" alt="뉴 아이콘"></span><p><?=$Value['Subject']?></p></a>
                                                </div>

                                                <div class="bot">
                                                    <ul class="news-list">
                                                        <?php
                                                        $List = $db->SelectList("Select * From ".$table_board." Where (1) {$WhereQuery} order by idx desc limit 1,6");
                                                        if ($List) {
                                                            foreach ($List as $key => $Value) {
                                                                $Value['RegDate'] = str_replace("-",".",substr($Value['RegDate'],0,10));
                                                        ?>
                                                        <li>
                                                            <a href="/notice/sub05.php?at=view&idx=<?=$Value['idx']?>">
                                                                <span class="title"><?=$Value['Subject']?></span>
                                                                <p class="date"><?=$Value['RegDate']?></p>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>

                                                <a href="/notice/sub05.php" class="moveBtn"><i class="axi axi-plus"></i></a>
                                            </div>
                                        </div>

                                        <div class="tab_inner">
                                            <div class="row">
                                                <div class="top">
                                                    <?php
                                                    $Board['board_id'] = "pds";
                                                    $table_board = "G_Board";
                                                    $WHERE = null;
                                                    $WHERE[] = " Status = 'Y' ";
                                                    $WHERE[] = " BoardID = '".$Board['board_id']."' ";
                                                    $WhereQuery = (is_array($WHERE))? " and (".implode(" and ", $WHERE).")" : "";
                                                    $Value = $db->SelectOne("Select * From ".$table_board." Where (1) {$WhereQuery} order by idx desc limit 0,1");
                                                    $Value['RegDate'] = str_replace("-",".",substr($Value['RegDate'],0,10));
                                                    ?>
                                                    <div class="dateBox">
                                                        <span class="day"><?=substr($Value['RegDate'],-2)?></span>
                                                        <p class="yymm"><?=substr($Value['RegDate'],0,7)?></p>
                                                    </div>
                                                    <a href="/notice/sub06.php?at=view&idx=<?=$Value['idx']?>" class="title"><span class="new"><img src="<?=DIR?>/img/icon/new_icon.png" alt="뉴 아이콘"></span><p><?=$Value['Subject']?></p></a>
                                                </div>

                                                <div class="bot">
                                                    <ul class="news-list">
                                                        <?php
                                                        $List = $db->SelectList("Select * From ".$table_board." Where (1) {$WhereQuery} order by idx desc limit 1,6");
                                                        if ($List) {
                                                            foreach ($List as $key => $Value) {
                                                                $Value['RegDate'] = str_replace("-",".",substr($Value['RegDate'],0,10));
                                                        ?>
                                                        <li>
                                                            <a href="/notice/sub06.php?at=view&idx=<?=$Value['idx']?>">
                                                                <span class="title"><?=$Value['Subject']?></span>
                                                                <p class="date"><?=$Value['RegDate']?></p>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>

                                                <a href="/notice/sub06.php" class="moveBtn"><i class="axi axi-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rig">
                            <div class="popup-zone">
                                <div class="swiper mainPop-swiper">
                                    <ul class="swiper-wrapper">
                                        <?php
                                        // 중단팝업
                                        $table_board = "G_Banner";
                                        $List   = $db -> SelectList("Select * From ".$table_board." Where Position='middle' AND Display='Y' order by Sort asc, idx asc");
                                        if($List) {
                                            foreach($List as $key => $Value){
                                                $BannerFileUrl = "<img src='"._UPLOAD_ . $Value['BannerFile']."' alt='{$Value['Subject']}' style='max-width:500px; max-height:310px;' />";
                                                $BannerTarget = ($Value["Target"]=="Y") ? "target='_blank'" : "";
                                                $BannerLink = ($Value["Link"]) ? "<a href='{$Value['Link']}' {$BannerTarget}>" : "";
                                        ?>
                                        <li class="swiper-slide"><?=$BannerLink?><?=$BannerFileUrl?></a></li>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                    
                                    <div class="swiper-options">
                                        <div class="swiper-options-detail">
                                            <strong class="control-box"><b>POPUP</b> ZONE</strong>
                                            <div class="swiper-pager">
                                                <div class="pager-fraction">
                                                    <span class="swiper-pagination-current"></span>
                                                    <span class="swiper-pagination-line"></span>
                                                    <span class="swiper-pagination-total"></span>
                                                </div>
                                                
                                                <button type="button" class="slideBtn btn-prev"><i class="axi axi-ion-chevron-left"></i></button>
                                                
                                                <div class="swiper-auto">
                                                    <button type="button" class="slideBtn btn-play"><i class="axi axi-play-arrow"></i></button>
                                                    <button type="button" class="slideBtn btn-stop active"><i class="axi axi-pause2"></i></button>
                                                </div>
                                                
                                                <button type="button" class="slideBtn btn-next"><i class="axi axi-ion-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="cont cont3">
                <div class="w1300 inner">
                    <ul class="work-list">
                        <li class="work-item hover-no">
                            <div class="toptext">
                                <span>대학교육협의회</span>
                                <p>주요업무<a href="https://www.kcue.or.kr/work/sub01/sub01.php"><i class="axi axi-plus"></i></a></p>
                            </div>
                            <p class="text">한국대학교육협의회의 주요 업무를 소개합니다.</p>
                        </li>
                        <li class="work-item">
                            <a href="/work/sub02/sub01.php">
                                <h6 class="title">정책건의 및 자료개발</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon1.png" alt="Policy Research">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="/work/sub09/sub01.php">
                                <h6 class="title">국제협력 및 교류</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon2.png" alt="International Cooperation">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="/work/sub06/sub01.php">
                                <h6 class="title">대학입학</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon3.png" alt="Admission">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="/work/sub07/sub01.php">
                                <h6 class="title">대학평가</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon4.png" alt="Quality Assurance">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="/work/sub08/sub01.php">
                                <h6 class="title">대학정보공시</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon5.png" alt="Information Disclosure">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="/work/sub05/sub01.php">
                                <h6 class="title">교수 및 직원연수</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon6.png" alt="General Education">
                                </div>
                            </a>
                        </li>
                        <li class="work-item">
                            <a href="/work/sub10/sub01.php">
                                <h6 class="title">대학교원지원</h6>
                                <div class="img">
                                    <img src="<?=DIR?>/img/en/icon/section03_icon7.png" alt="Talent Development">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>

            <article class="cont cont4">
                <div class="w1300 inner">
                    <div class="kr_textbox">
                        <span class="title">대교협 <p>활동사진</p></span>
                        <a href="/news/sub05/sub01.php" class="moreBtn_"><i class="axi axi-plus"></i></a>
                    </div>

                    <div class="contents">
                        <div class="lef">
                            <div class="imgbox">
                                <?php
                                $defaultImage = "/img/en/logo_df_thm.png";
                                $Board['board_id'] = "photo";
                                $Board['table_attach'] = "G_Board_Attach";
                                $table_board = "G_Board";
                                $WHERE = null;
                                $WHERE[] = " Status = 'Y' ";
                                $WHERE[] = " BoardID = '".$Board['board_id']."' ";
                                $WhereQuery = (is_array($WHERE))? " and (".implode(" and ", $WHERE).")" : "";
                                $Value = $db->SelectOne("Select * From ".$table_board." Where (1) {$WhereQuery} order by idx desc limit 0,1");
                                $Value['RegDate'] = str_replace("-",".",substr($Value['RegDate'],0,10));

                                $imageSrc = $ImageGroup = null;
                                $AttachArray = AttachArray($Value['idx']);
                                if($AttachArray){
                                  $AttachArrayCnt = count($AttachArray);
                                  for($j=0; $j < $AttachArrayCnt; $j++){
                                    if($j==0){
                                      $FirstImage = $AttachArray[0];
                                      $imageSrc = "<img src='"._CORE_."/act/thumb.php?src=".$FirstImage['SavePath']."/".$FirstImage['SaveName']."&x=610&y=420&f=0' >";
                                    }
                                  }
                                }
                                if (!$imageSrc) {
                                    if ($Value['Image_01']) {
                                        $imageSrc =  "<img src='".$Value['Image_01']."'>";
                                    } else {
                                        $imageSrc =  "<img src='".$defaultImage."'>";
                                    }
                                }                                
                                ?>
                                <a href="/news/sub05/sub01.php?at=view&idx=<?=$Value['idx']?>">
                                <div class="img">
                                    <?=$imageSrc?>
                                </div>
                                <div class="information">
                                    <div class="lef">
                                        <span class="new"><img src="<?=DIR?>/img/icon/new_icon.png" alt="뉴 아이콘"></span>
                                        <p class="imgtitle"><?=$Value['Subject']?></p>
                                    </div>
                                    <div class="rig">
                                        <p class="name"><?=$Value['UserName']?></p>
                                        <p class="date"><?=$Value['RegDate']?></p>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>

                        <div class="rig">
                            <ul class="album-list">
                            <?php
                            $List = $db->SelectList("Select * From ".$table_board." Where (1) {$WhereQuery} order by idx desc limit 1,3");
                            if ($List) {
                                foreach ($List as $key => $Value) {
                                    $Value['RegDate'] = str_replace("-",".",substr($Value['RegDate'],0,10));

                                    $imageSrc = $ImageGroup = null;
                                    $AttachArray = AttachArray($Value['idx']);
                                    if($AttachArray){
                                      $AttachArrayCnt = count($AttachArray);
                                      for($j=0; $j < $AttachArrayCnt; $j++){
                                        if($j==0){
                                          $FirstImage = $AttachArray[0];
                                          $imageSrc = "<img src='"._CORE_."/act/thumb.php?src=".$FirstImage['SavePath']."/".$FirstImage['SaveName']."&x=230&y=120&f=0' >";
                                        }
                                      }
                                    }
                                    if (!$imageSrc) {
                                        if ($Value['Image_01']) {
                                            $imageSrc =  "<img src='".$Value['Image_01']."'>";
                                        } else {
                                            $imageSrc =  "<img src='".$defaultImage."'>";
                                        }
                                    }                                
                            ?>                            
                                <li class="album-item">
                                    <a href="/news/sub05/sub01.php?at=view&idx=<?=$Value['idx']?>">
                                        <div class="img">
                                            <?=$imageSrc?>
                                        </div>
                                        <div class="information">
                                            <span class="title"><?=$Value['Subject']?></span>
                                            <p class="partTeam"><?=$Value['UserName']?></p>
                                            <p class="date"><?=$Value['RegDate']?></p>
                                        </div>
                                    </a>
                                </li>
                            <?php
                                }
                            }
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>

            <article class="cont cont5">
                <div class="w1300 inner">
                    <div class="contents">
                        <div class="lef">
                            <div class="kr_textbox">
                                <span class="title">대교협 <p>소식</p></span>
                                <a href="/news/sub02/sub01.php" class="moreBtn_"><i class="axi axi-plus"></i></a>
                            </div>

                            <div class="contents-wrap">
                                <div class="notice-wrap">
                                    <div class="tab_wrap">
                                        <ul class="list">
                                            <li class="tab_item active" onclick="noticeTab(0)">보도자료</li>
                                            <li class="tab_item" onclick="noticeTab(1)">고등교육 정책</li>
                                        </ul>
                                    </div>

                                    <div class="contents-view">
                                        <div class="tab_inner_wrap">
                                            <div class="tab_inner active">
                                                <ul class="notice-list">
                                                <?php
                                                $Board['board_id'] = "news";
                                                $table_board = "G_Notice";
                                                $WHERE = null;
                                                $WHERE[] = " Status = 'Y' ";
                                                $WHERE[] = " BoardID = '".$Board['board_id']."' ";
                                                $WhereQuery = (is_array($WHERE))? " and (".implode(" and ", $WHERE).")" : "";
                                                $List = $db->SelectList("Select * From ".$table_board." Where (1) {$WhereQuery} order by idx desc limit 8");
                                                if ($List) {
                                                    foreach ($List as $key => $Value) {
                                                        $Value['RegDate'] = str_replace("-",".",substr($Value['RegDate'],0,10));
                                                ?>
                                                    <li class="notice-item<? if ($key==0) {?> new<?}?>">
                                                        <a href="/news/sub02/sub01.php?at=view&idx=<?=$Value['idx']?>"><? if ($key==0) {?><p class="new"><img src="<?=DIR?>/img/icon/new_icon.png" alt="뉴 아이콘"></p><?}?><span class="title"><?=$Value['Subject']?></span></a>
                                                        <p class="date"><?=$Value['RegDate']?></p>
                                                    </li>
                                                <?php
                                                    }
                                                }
                                                ?>
                                                </ul>
                                                <a href="/news/sub02/sub01.php" class="moveBtn"><i class="axi axi-plus"></i></a>
                                            </div>

                                            <div class="tab_inner">
                                                <ul class="notice-list">
                                                <?php
                                                $Board['board_id'] = "high";
                                                $table_board = "G_Notice";
                                                $WHERE = null;
                                                $WHERE[] = " Status = 'Y' ";
                                                $WHERE[] = " BoardID = '".$Board['board_id']."' ";
                                                $WhereQuery = (is_array($WHERE))? " and (".implode(" and ", $WHERE).")" : "";
                                                $List = $db->SelectList("Select * From ".$table_board." Where (1) {$WhereQuery} order by idx desc limit 8");
                                                if ($List) {
                                                    foreach ($List as $key => $Value) {
                                                        $Value['RegDate'] = str_replace("-",".",substr($Value['RegDate'],0,10));
                                                ?>
                                                    <li class="notice-item<? if ($key==0) {?> new<?}?>">
                                                        <a href="/news/sub03/sub01.php?at=view&idx=<?=$Value['idx']?>"><? if ($key==0) {?><p class="new"><img src="<?=DIR?>/img/icon/new_icon.png" alt="뉴 아이콘"></p><?}?><span class="title"><?=$Value['Subject']?></span></a>
                                                        <p class="date"><?=$Value['RegDate']?></p>
                                                    </li>
                                                <?php
                                                    }
                                                }
                                                ?>
                                                </ul>
                                                <a href="/news/sub03/sub01.php" class="moveBtn"><i class="axi axi-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rig">
                            <div class="kr_textbox">
                                <span class="title">대교협 <p>발간물</p></span>
                                <a href="/news/sub04/sub01.php" class="moreBtn_"><i class="axi axi-plus"></i></a>
                            </div>
                            <?php
                            $table_board = "G_PublicationK";
                            $Value  = $db -> SelectOne("Select * From ".$table_board);
                            if ($Value['BannerFile1']) {
                                $BannerImg1 = "<img src='"._UPLOAD_ .$Value['BannerFile1']."' style='border-top-left-radius: 15px; border-top-right-radius: 15px;' />";
                            } else {
                                $BannerImg1 = "";
                            }
                            if ($Value['BannerURL1']) {
                                $BannerURL1 = $Value['BannerURL1'];
                            } else {
                                $BannerURL1 = "javascript:alert('준비중입니다.');";
                            }

                            if ($Value['BannerFile2']) {
                                $BannerImg2 = "<img src='"._UPLOAD_ .$Value['BannerFile2']."' style='border-top-left-radius: 15px; border-top-right-radius: 15px;' />";
                            } else {
                                $BannerImg2 = "";
                            }
                            if ($Value['BannerURL2']) {
                                $BannerURL2 = $Value['BannerURL2'];
                            } else {
                                $BannerURL2 = "javascript:alert('준비중입니다.');";
                            }
                            ?>
                            <div class="contents-wrap">
                                <div class="swiper bookSwiper">
                                    <ul class="swiper-wrapper">
                                        <li class="swiper-slide">
                                            <a href="<?=$BannerURL1?>" target="_blank">
                                                <div class="imgbox"><?=$BannerImg1?></div>
                                                <div class="textbox">
                                                    <p class="text"><?=$Value["BannerYear1"]?> <b><?=$Value["BannerNo1"]?></b>호 <b>대교협 소식</b></p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="swiper-slide">
                                            <a href="<?=$BannerURL2?>" target="_blank">
                                                <div class="imgbox"><?=$BannerImg2?></div>
                                                <div class="textbox">
                                                    <p class="text"><?=$Value["BannerYear2"]?> <b><?=$Value["BannerNo2"]?></b>호 <b>대학교육</b></p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-wrap">
                                    <a href="/news/sub04/sub03.php">
                                        <p class="text"><b>대교협소식(Weekly News)</b> 구독신청</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php"; ?>
</body>
</html>