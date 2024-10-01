<div id="snb" class="snb-wrap">
    <ul class="sub_menu">
        <li class="home">
            <a href="<?=DIR?>/">
                <i class="axi axi-home"></i>
            </a>
        </li>

        <li class="ov">
            <span><?=$_tit[0]?></span>
            <ul>
                <li class="<?pubGnb('1');?>">
                    <a href="<?=DIR?>/about/sub01/sub01.php">대교협소개</a>
                </li>
                <li class="<?pubGnb('2');?>">
                    <a href="<?=DIR?>/work/sub01/sub01.php">주요업무</a>
                </li>
                <li class="<?pubGnb('3');?>">
                    <a href="<?=DIR?>/publication/sub01.php">발간자료</a>
                </li>
                <li class="<?pubGnb('4');?>">
                    <a href="<?=DIR?>/news/sub01/sub01.php">대학교육소식</a>
                </li>
                <li class="<?pubGnb('5');?>">
                    <a href="<?=DIR?>/notice/sub01.php">알림마당</a>
                </li>
            </ul>
        </li>

        <li class="ov second-ov">
            <span><?=$_tit[1]?></span>
            <?if($_dep[0]==1){?>
            <ul>
                <li class="<?pubGnb('1,1');?>">
                    <a href="<?=DIR?>/about/sub01/sub01.php">임원실</a>
                </li>
                <li class="<?pubGnb('1,2');?>">
                    <a href="<?=DIR?>/about/sub02/sub01.php">경영정보</a>
                </li>
                <li class="<?pubGnb('1,3');?>">
                    <a href="<?=DIR?>/about/sub03/sub01.php">사이버홍보실</a>
                </li>
                <li class="<?pubGnb('1,4');?>">
                    <a href="<?=DIR?>/about/location.php">오시는 길</a>
                </li>
            </ul>
        <?}else if($_dep[0]==2){?>
            <ul>
                <li class="<?pubGnb('2,1');?>">
                    <a href="<?=DIR?>/work/sub01/sub01.php">대학간 협의조정</a>
                </li>
                <li class="<?pubGnb('2,2');?>">
                    <a href="<?=DIR?>/work/sub02/sub01.php">정책건의 및 자료개발</a>
                </li>
                <li class="<?pubGnb('2,3');?>">
                    <a href="<?=DIR?>/work/sub03/sub01.php">정책세미나 및 포럼</a>
                </li>
                <li class="<?pubGnb('2,4');?>">
                    <a href="<?=DIR?>/work/sub04/sub01.php">특별위원회 운영</a>
                </li>
                <li class="<?pubGnb('2,5');?>">
                    <a href="<?=DIR?>/work/sub05/sub01.php">교수 및 직원연수</a>
                </li>
                <li class="<?pubGnb('2,6');?>">
                    <a href="<?=DIR?>/work/sub06/sub01.php">대학입학</a>
                </li>
                <li class="<?pubGnb('2,7');?>">
                    <a href="<?=DIR?>/work/sub07/sub01.php">대학평가</a>
                </li>
                <li class="<?pubGnb('2,8');?>">
                    <a href="<?=DIR?>/work/sub08/sub01.php">대학정보공시</a>
                </li>
                <li class="<?pubGnb('2,9');?>">
                    <a href="<?=DIR?>/work/sub09/sub01.php">국제협력 및 교류</a>
                </li>
                <li class="<?pubGnb('2,10');?>">
                    <a href="<?=DIR?>/work/sub10/sub01.php">대학교원지원</a>
                </li>
            </ul>
        <?}else if($_dep[0]==3){?>
            <ul>
                <li class="<?pubGnb('3,1');?>">
                    <a href="<?=DIR?>/publication/sub01.php">이용안내</a>
                </li>
            </ul>
        <?}else if($_dep[0]==4){?>
            <ul>
                <li class="<?pubGnb('4,1');?>">
                    <a href="<?=DIR?>/news/sub01/sub01.php">언록속의 대학교육</a>
                </li>
                <li class="<?pubGnb('4,2');?>">
                    <a href="<?=DIR?>/news/sub02/sub01.php">대교협 보도자료</a>
                </li>
                <li class="<?pubGnb('4,3');?>">
                    <a href="<?=DIR?>/news/sub03/sub01.php">고등교육 동향</a>
                </li>
                <li class="<?pubGnb('4,4');?>">
                    <a href="<?=DIR?>/news/sub04/sub01.php">대교협 소식</a>
                </li>
                <li class="<?pubGnb('4,5');?>">
                    <a href="<?=DIR?>/news/sub05/sub01.php">대교협 활동</a>
                </li>
                <li class="<?pubGnb('4,6');?>">
                    <a href="http://magazine.kcue.or.kr/home/kor/main.do" target="_blank">대학교육</a>
                </li>
            </ul>
        <?}else if($_dep[0]==5){?>
            <ul>
                <li class="<?pubGnb('5,1');?>">
                    <a href="<?=DIR?>/notice/sub01.php">공지사항</a>
                </li>
                <li class="<?pubGnb('5,2');?>">
                    <a href="<?=DIR?>/notice/sub02.php">대교협 채용공고</a>
                </li>
                <li class="<?pubGnb('5,3');?>">
                    <a href="<?=DIR?>/notice/sub03.php">총장 채용공고</a>
                </li>
                <li class="<?pubGnb('5,4');?>">
                    <a href="<?=DIR?>/notice/sub04.php">교수·강사 채용공고</a>
                </li>
                <li class="<?pubGnb('5,5');?>">
                    <a href="<?=DIR?>/notice/sub05.php">입찰공고</a>
                </li>
                <li class="<?pubGnb('5,6');?>">
                    <a href="<?=DIR?>/notice/sub06.php">자료실</a>
                </li>
            </ul>
        <?}?>
        </li>

        <?if($_dep[2]){?>
        <li class="ov last-ov">
            <span><?=$_tit[2]?></span>
            <?if($_dep[0]==1&&$_dep[1]==1){?>
            <ul>
                <li class="<?pubGnb('1,1,1');?>">
                    <a href="<?=DIR?>/about/sub01/sub01.php">회장 인사말</a>
                </li>
                <li class="<?pubGnb('1,1,2');?>">
                    <a href="<?=DIR?>/about/sub01/sub02.php">역대회장</a>
                </li>
                <li class="<?pubGnb('1,1,3');?>">
                    <a href="<?=DIR?>/about/sub01/sub03.php">사무총장</a>
                </li>
            </ul>
        <?}else if($_dep[0]==1&&$_dep[1]==2){?>
            <ul>
                <li class="<?pubGnb('1,2,1,0');?>">
                    <a href="<?=DIR?>/about/sub02/sub01.php">일반현황</a>
                </li>
                <li class="<?pubGnb('1,2,1,1');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub01.php">연혁</a>
                </li>
                <li class="<?pubGnb('1,2,1,2');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub02.php">법</a>
                </li>
                <li class="<?pubGnb('1,2,1,3');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub03.php">정관</a>
                </li>
                <li class="<?pubGnb('1,2,1,4');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub04.php">조직현황</a>
                </li>
                <li class="<?pubGnb('1,2,1,5');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub05.php">임직원수</a>
                </li>
                <li class="<?pubGnb('1,2,1,6');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub06.php">회원대학현황</a>
                </li>
                <li class="<?pubGnb('1,2,1,7');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub07.php">유연근무현황</a>
                </li>
                <li class="<?pubGnb('1,2,1,8');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub08.php">임원국외출장정보</a>
                </li>
                <li class="<?pubGnb('1,2,1,9');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub09.php">요약재무상태표</a>
                </li>
                <li class="<?pubGnb('1,2,1,10');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub10.php">요약운영성과표</a>
                </li>
                <li class="<?pubGnb('1,2,1,11');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub11.php">수입 · 지출현황</a>
                </li>
                <li class="<?pubGnb('1,2,1,12');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub12.php">주요사업</a>
                </li>
                <li class="<?pubGnb('1,2,1,13');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub13.php">국회 지적사항</a>
                </li>
                <li class="<?pubGnb('1,2,1,7');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub07.php">채용정보</a>
                </li>
                <li class="<?pubGnb('1,2,1,7');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub07.php">입찰정보</a>
                </li>
                <li class="<?pubGnb('1,2,1,7');?>">
                    <a href="<?=DIR?>/about/sub02/tab/sub07.php">연구보고서</a>
                </li>
            </ul>
        <?}else if($_dep[0]==1&&$_dep[1]==3){?>
            <ul>
                <li class="<?pubGnb('1,1,1');?>">
                    <a href="<?=DIR?>/about/sub03/sub01.php">대교협브로슈어</a>
                </li>
                <li class="<?pubGnb('1,3,2');?>">
                    <a href="<?=DIR?>/about/sub03/sub02.php">뉴스로 본 대학 40년</a>
                </li>
                <li class="<?pubGnb('1,3,3');?>">
                    <a href="<?=DIR?>/about/sub03/sub03.php">대교협 40년사</a>
                </li>
                <li class="<?pubGnb('1,3,4');?>">
                    <a href="<?=DIR?>/about/sub03/sub04.php">MOU 현황</a>
                </li>
                <li class="<?pubGnb('1,3,5');?>">
                    <a href="<?=DIR?>/about/sub03/sub05.php">CI 소개</a>
                </li>
            </ul>

        <?}else if($_dep[0]==2&&$_dep[1]==1){?>
            <ul>
                <li class="<?pubGnb('2,1,1');?>">
                    <a href="<?=DIR?>/work/sub01/sub01.php">총회운영</a>
                </li>
                <li class="<?pubGnb('2,1,2');?>">
                    <a href="<?=DIR?>/work/sub01/sub02.php">이사회운영</a>
                </li>
                <li class="<?pubGnb('2,1,3');?>">
                    <a href="<?=DIR?>/work/sub01/sub03.php">총장협의회 지원</a>
                </li>
                <li class="<?pubGnb('2,1,4');?>">
                    <a href="<?=DIR?>/work/sub01/sub04.php">대학직능단체 지원</a>
                </li>
            </ul>
        <?}else if($_dep[0]==2&&$_dep[1]==2){?>
            <ul>
                <li class="<?pubGnb('2,2,1');?>">
                    <a href="<?=DIR?>/work/sub02/sub01.php">정책건의</a>
                </li>
                <li class="<?pubGnb('2,2,2');?>">
                    <a href="<?=DIR?>/work/sub02/sub02.php">고등교육정책 자료개발</a>
                </li>
                <li class="<?pubGnb('2,2,3');?>">
                    <a href="<?=DIR?>/work/sub02/sub03.php">대학교육지 발간</a>
                </li>
                <li class="<?pubGnb('2,2,4');?>">
                    <a href="<?=DIR?>/work/sub02/sub04.php">고등교육 동향정보 제공</a>
                </li>
                <li class="<?pubGnb('2,2,5');?>">
                    <a href="<?=DIR?>/work/sub02/sub05.php">KCUE컨소시엄 운영</a>
                </li>
            </ul>
        <?}else if($_dep[0]==2&&$_dep[1]==3){?>
            <ul>
                <li class="<?pubGnb('2,3,1');?>">
                    <a href="<?=DIR?>/work/sub03/sub01.php">대학총장세미나</a>
                </li>
                <li class="<?pubGnb('2,3,2');?>">
                    <a href="<?=DIR?>/work/sub03/sub02.php">대학교육정책포럼</a>
                </li>
                <li class="<?pubGnb('2,3,3');?>">
                    <a href="<?=DIR?>/work/sub03/sub03.php">국제세미나</a>
                </li>
            </ul>
        <?}else if($_dep[0]==2&&$_dep[1]==6){?>
            <ul>
                <li class="<?pubGnb('2,6,1');?>">
                    <a href="<?=DIR?>/work/sub06/sub01.php">대학입학전형 기본사항 수립</a>
                </li>
                <li class="<?pubGnb('2,6,2');?>">
                    <a href="<?=DIR?>/work/sub06/sub02.php">대입상담센터운영</a>
                </li>
                <li class="<?pubGnb('2,6,3');?>">
                    <a href="<?=DIR?>/work/sub06/sub03.php">고교교육 기여대학 지원사업 운영</a>
                </li>
                <li class="<?pubGnb('2,6,4');?>">
                    <a href="<?=DIR?>/work/sub06/sub04.php">대학입학정보박람회 운영</a>
                </li>
                <li class="<?pubGnb('2,6,5');?>">
                    <a href="<?=DIR?>/work/sub06/sub05.php">대입정보포털 어디가 운영</a>
                </li>
                <li class="<?pubGnb('2,6,6');?>">
                    <a href="<?=DIR?>/work/sub06/sub06.php">표준 공통원서접수서비스 운영</a>
                </li>
                <li class="<?pubGnb('2,6,7');?>">
                    <a href="<?=DIR?>/work/sub06/sub07.php">대입지원방법 위반 사전예방</a>
                </li>
            </ul>
        <?}else if($_dep[0]==2&&$_dep[1]==7){?>
            <ul>
                <li class="<?pubGnb('2,7,1');?>">
                    <a href="<?=DIR?>/work/sub07/sub01.php">대학기관평가인증</a>
                </li>
            </ul>
        <?}else if($_dep[0]==2&&$_dep[1]==8){?>
            <ul>
                <li class="<?pubGnb('2,8,1');?>">
                    <a href="<?=DIR?>/work/sub08/sub01.php">대학정보공시 운영</a>
                </li>
                <li class="<?pubGnb('2,8,2');?>">
                    <a href="<?=DIR?>/work/sub08/sub02.php">교육편제단위 표준분류 운영</a>
                </li>
            </ul>
        <?}else if($_dep[0]==2&&$_dep[1]==10){?>
            <ul>
                <li class="<?pubGnb('2,10,1');?>">
                    <a href="<?=DIR?>/work/sub10/sub01.php">대학교원 정부포상 지원</a>
                </li>
                <li class="<?pubGnb('2,10,2');?>">
                    <a href="<?=DIR?>/work/sub10/sub02.php">사립대학교원 임용보고</a>
                </li>
            </ul>

        <?}else if($_dep[0]==4&&$_dep[1]==3){?>
            <ul>
                <li class="<?pubGnb('4,3,1');?>">
                    <a href="<?=DIR?>/news/sub03/sub01.php">고등교육 정책 소식</a>
                </li>
                <li class="<?pubGnb('4,3,2');?>">
                    <a href="<?=DIR?>/news/sub03/sub02.php">국회 입법 소식</a>
                </li>
                <li class="<?pubGnb('4,3,3');?>">
                    <a href="<?=DIR?>/news/sub03/sub03.php">대학교육지-해외고등교육 동향</a>
                </li>
                <li class="<?pubGnb('4,3,4');?>">
                    <a href="<?=DIR?>/news/sub03/sub04.php">해외고등교육 동향</a>
                </li>
            </ul>
        <?}else if($_dep[0]==4&&$_dep[1]==4){?>
            <ul>
                <li class="<?pubGnb('4,4,1');?>">
                    <a href="<?=DIR?>/news/sub04/sub01.php">대교협 소식</a>
                </li>
                <li class="<?pubGnb('4,4,2');?>">
                    <a href="<?=DIR?>/news/sub04/sub02.php">이전 게시물</a>
                </li>
                <li class="<?pubGnb('4,4,3');?>">
                    <a href="<?=DIR?>/news/sub04/sub03.php">구독신청</a>
                </li>
            </ul>
            <?}?>
        </li>
        <?}?>
    </ul>
</div>