<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <title>tv-Bootstrap기반 반응형웹 html 템플릿</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link href="../../assets/plugins/snap/1.9.3/snap.css" rel="stylesheet">

    <!-- Swiper : https://github.com/nolimits4web/Swiper -->
    <link href="../../assets/plugins/swiper/3.2.7/css/swiper.css" rel="stylesheet">

    <!-- system-style -->
    <link rel="stylesheet" href="../../assets/css/sys.css">

    <!-- Common-style -->
    <link rel="stylesheet" href="./style.css">

    <!-- kimsq-font -->
    <link rel="stylesheet" href="../../assets/plugins/font-kimsq/1.0.0/css/font-kimsq.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

</head>

<body style="font-size: 100%;">

<div class="snap-drawers">
    <div class="snap-drawer snap-drawer-left" id="drawer-left">
        <?php include "_snap-drawer-left.php";?>
    </div>
    <div class="snap-drawer snap-drawer-right" id="drawer-right">
        <?php include "_snap-drawer-right.php";?>
    </div>
</div> 

<div class="snap-content" id="content-wrap">


    <div id="background" class="no-model background" tabindex="-1" style="background-image: url(./images/default_bg.jpg);"></div>

    <div id="browse-sets" class="focused no-background browse-sets" tabindex="-1">

        <div id="browse-search-bar" class="browse-search-bar  icon-button" tabindex="-1"> 
            <i class="fa fa-search" aria-hidden="true"></i>
            <span class="label hidden">검색</span>
        </div>
        <div class="youtube-logo-top">
            <i class="kf kf-bi-01" aria-hidden="true"></i>
            <div class="youtube-unlimited-logo icon-youtube-red-logo"></div>
        </div>


        <div class="swiper-container swiper-container-h browse-content">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="swiper-container swiper-container-v3">
                        <div class="page-header">
                            <h3>점토인형 만들기<small>추천채널</small></h3>
                        </div> 
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/OfaxNwJztq4/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">몰랑이 클레이 인형 만들기 [고무인간] 캐릭터인형</div>
                                        <div class="card-text">
                                            <div class="by">게시자: 신난다</div>
                                            <div class="views">조회수 59,052회</div>
                                            <div class="age">6개월 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/8w28pB2mHlw/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">[폴리머 클레이+레진] 인형 눈만들기,안구 만들기(Polymer clay) To make the doll eye</div>
                                        <div class="card-text">
                                            <div class="by">게시자: 보롤(boroll)</div>
                                            <div class="views">조회수 52,304회</div>
                                            <div class="age">5개월 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/u4IcLYXzqPo/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">진짜같은 ✔미니어쳐 고양이 만들기 Miniature Animal ✔Cat Polymer clay Tutorial</div>
                                        <div class="card-text">
                                            <div class="by">게시자: 이브미니어쳐 - miniature</div>
                                            <div class="views">조회수 264,161회</div>
                                            <div class="age">7개월 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/W7wGzEI5eQ4/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">다들 인형이 돼버렸어! 마크 점토 생활 인형 [양띵TV눈꽃]Clay living dolls mod</div>
                                        <div class="card-text">
                                            <div class="by">게시자: 양띵TV눈꽃</div>
                                            <div class="views">조회수 104,330회</div>
                                            <div class="age">1년 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/b0Uq9H_HLnQ/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">러버덕 Rubber Duck  오리 인형 만들기 [고무인간] clay art</div>
                                        <div class="card-text">
                                            <div class="by">게시자: 신난다</div>
                                            <div class="views">조회수 9,285회</div>
                                            <div class="age">1년 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-container swiper-container-v4">
                        <div class="page-header">
                            <h3>미스트 만들기<small>추천채널</small></h3>
                        </div> 
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/zsttXnXVa9Q/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">#초간단# 알로에 미스트만들기 [양띵TV서넹]</div>
                                        <div class="card-text">
                                            <div class="by">게시자: 양띵TV서넹</div>
                                            <div class="views">조회수 318,609회</div>
                                            <div class="age">1년 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/qy1WlIgAzpo/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">"수제 미스트 만들기"(정화제없이)뷰티,놀이,화장품</div>
                                        <div class="card-text">
                                            <div class="by">게시자: BJ 미니</div>
                                            <div class="views">조회수 13,981회</div>
                                            <div class="age">11개월 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/w7VLS0qSDx0/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">[ENG cc] 뜨거운 여름철! 퍼퓸 수딩 젤미스트 만들기 Gel Mist DIY Beauty Tips</div>
                                        <div class="card-text">
                                            <div class="by">게시자: himepcy 하이맵시</div>
                                            <div class="views">조회수 22,409회</div>
                                            <div class="age">11개월 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/1H8sD2fdnk0/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">[만두]수제 미스트 만들기!!간단하고 좋아요</div>
                                        <div class="card-text">
                                            <div class="by">게시자: 두 유튜브 만</div>
                                            <div class="views">조회수 3,928회</div>
                                            <div class="age">5개월 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/ewjucLierFc/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">지코 (ZICO) - 너는 나 나는 너 (I Am You, You Are Me) MV</div>
                                        <div class="card-text">
                                            <div class="by">게시자: 1theK (원더케이)</div>
                                            <div class="views">조회수 9,961,157회</div>
                                            <div class="age">5일 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-container swiper-container-v1">
                        <div class="page-header">
                            <h3>천연비누 만들기<small>추천채널</small></h3>
                        </div>  
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/9UI492-nzGk/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">녹차 천연비누 만들기 / green tea Natural soap [만들자]</div>
                                        <div class="card-text">
                                            <div class="by">게시자: 1theK (원더케이)</div>
                                            <div class="views">조회수 9,961,157회</div>
                                            <div class="age">5일 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/7-Tx4OIcPtw/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">[천연비누 도전기]  어성초 비누 만들기</div>
                                        <div class="card-text">
                                            <div class="by">게시자: 낙투어 Der natur</div>
                                            <div class="views">조회수 2,855회</div>
                                            <div class="age">4개월 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/AhWjG5igK58/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">천연비누만들기  디자인비누1강-부천풀잎문화센터</div>
                                        <div class="card-text">
                                            <div class="by">게시자: Ranheech Chun</div>
                                            <div class="views">조회수 105,798회</div>
                                            <div class="age">2년 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/IWRcWSCZqjs/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">더블와이엘의 초간단 수제비누 만들기/How to make Handmade Soap/手作り石鹸を作ります</div>
                                        <div class="card-text">
                                            <div class="by">게시자: Double Y.L - 더블와이엘's Time</div>
                                            <div class="views">조회수 9,329회</div>
                                            <div class="age">4개월 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/9ddAvgmmJ70/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">[만들자]-토마토 감초 천연비누 만들기!!</div>
                                        <div class="card-text">
                                            <div class="by">게시자: 만들자</div>
                                            <div class="views">조회수 4,873회</div>
                                            <div class="age">1년 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-container swiper-container-v2">
                        <div class="page-header">
                            <h3>수제 화장품 만들기<small>추천채널</small></h3>
                        </div>  
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/qy1WlIgAzpo/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">"수제 미스트 만들기"(정화제없이)뷰티,놀이,화장품</div>
                                        <div class="card-text">
                                            <div class="by">게시자: BJ 미니</div>
                                            <div class="views">조회수 13,981회</div>
                                            <div class="age">11개월 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/UCEUYnQr0pg/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">수제화장품 ♪ 에어쿠션만들기</div>
                                        <div class="card-text">
                                            <div class="by">게시자: 리락이</div>
                                            <div class="views">조회수 963회</div>
                                            <div class="age">2개월 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/ZnXZBmr8Wjk/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">{BJ핫띵}수제 화장품!소개!</div>
                                        <div class="card-text">
                                            <div class="by">게시자: BJ 핫띵</div>
                                            <div class="views">조회수 235회</div>
                                            <div class="age">2개월 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/Qqs1GUAaWFE/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">여니의 컨실러 만들긔!♥/수제컨실러/화장품만들기/선크림</div>
                                        <div class="card-text">
                                            <div class="by">게시자: 여니</div>
                                            <div class="views">조회수 25,383회</div>
                                            <div class="age">3개월 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="card" data-toggle="modal" data-target="#view">
                                    <div class="card-img-top">
                                        <div class="video-thumb no-model image" tabindex="-1" style="background-image: url(&quot;https://i.ytimg.com/vi/Docv83Jg_sA/hqdefault.jpg&quot;);"></div>

                                        <div class="decoration">
                                            <div class="live-badge hidden"></div>
                                            <div class="upcoming-badge hidden"></div>
                                            <div class="is-watched hidden">시청함</div>
                                            <div class="duration">5:00</div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-title">💕으나의 수제화장품 만드는 법 및 소개💕</div>
                                        <div class="card-text">
                                            <div class="by">게시자: 으나와영수</div>
                                            <div class="views">조회수 301회</div>
                                            <div class="age">1개월 전</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div id="guide" class=" guide" tabindex="-1" data-drawer-open="left">
        <div id="user-info-background">
            <div class="user-info-container">
                <div id="guide-user-avatar" rebound-style="background-image: url({{model.userAvatar}})" style="background-image: url(&quot;&quot;);"></div>
                <div class="guide-user-text">
                    <div class="guide-user-name"></div>
                    <div class="guide-user-unlimited"></div>
                </div>
            </div>
        </div>
        <div class="collapsed-guide"></div>
        <div class="guide-carousel-background"></div>
        <div class="collapsed-guide-icons">
            <div class="collapsed-guide-icon fa fa-home"></div>
            <div class="collapsed-guide-icon fa fa-star"></div>
            <div class="collapsed-guide-icon fa fa-line-chart"></div>
            <div class="collapsed-guide-icon fa fa-shopping-cart"></div>
            <div class="collapsed-guide-icon fa fa-ellipsis-h"></div>
        </div>
        <div id="error-message">지금은 가이드의 나머지 부분을 사용할 수 없습니다.</div>
        <div class=" sliding-highlighter" tabindex="-1" style="transform: translateY(200%) translateZ(0px); transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform 200ms cubic-bezier(0.4, 0, 0.2, 1);">
            <div class="select">선택</div>
        </div>
        <div class=" carousel" tabindex="-1">
            <div class="first guide-button" tabindex="-1" style="transform: translateY(0%) translateZ(0px); transition: none 0s;">
                <div class="guide-button-icon icon-people">
                    <div class="no-model image" data-image-url="{{model.iconUrl}}" tabindex="-1"></div>
                </div>
                <div class="guide-button-title">로그인</div>
            </div>
            <div class=" guide-button" tabindex="-1" style="transform: translateY(100%) translateZ(0px); transition: none 0s;">
                <div class="guide-button-icon icon-search">
                    <div class="no-model image" data-image-url="{{model.iconUrl}}" tabindex="-1"></div>
                </div>
                <div class="guide-button-title">검색</div>
            </div>
            <div class="selected guide-button" tabindex="-1" style="transform: translateY(200%) translateZ(0px); transition: none 0s;">
                <div class="guide-button-icon icon-guide-what-to-watch">
                    <div class="no-model image" data-image-url="{{model.iconUrl}}" tabindex="-1"></div>
                </div>
                <div class="guide-button-title">홈</div>
            </div>
            <div class=" guide-button" tabindex="-1" style="transform: translateY(300%) translateZ(0px); transition: none 0s;">
                <div class="guide-button-icon icon-player-settings">
                    <div class="no-model image" data-image-url="{{model.iconUrl}}" tabindex="-1"></div>
                </div>
                <div class="guide-button-title">설정</div>
            </div>
            <div class="disabled guide-button" tabindex="-1" style="transform: translateY(400%) translateZ(0px); transition: none 0s;">
                <div class="guide-button-icon ">
                    <div class="no-model image" data-image-url="{{model.iconUrl}}" tabindex="-1"></div>
                </div>
                <div class="guide-button-title">인기 YouTube</div>
            </div>
            <div class="has-image guide-button" tabindex="-1" style="transform: translateY(500%) translateZ(0px); transition: none 0s;">
                <div class="guide-button-icon ">
                    <div class="no-model image" data-image-url="{{model.iconUrl}}" tabindex="-1" style="background-image: url(&quot;//i.ytimg.com/i/sVf5SnHAmJcZ0G7kpMcYzg/1.jpg&quot;);"></div>
                </div>
                <div class="guide-button-title">YouTube 인기</div>
            </div>
            <div class="has-image guide-button" tabindex="-1" style="transform: translateY(600%) translateZ(0px); transition: none 0s;">
                <div class="guide-button-icon ">
                    <div class="no-model image" data-image-url="{{model.iconUrl}}" tabindex="-1" style="background-image: url(&quot;//i.ytimg.com/i/-9-kyTW8ZkZNDHQJ6FgpwQ/1.jpg&quot;);"></div>
                </div>
                <div class="guide-button-title">음악</div>
            </div>
            <div class="has-image guide-button" tabindex="-1" style="transform: translateY(700%) translateZ(0px); transition: none 0s;">
                <div class="guide-button-icon ">
                    <div class="no-model image" data-image-url="{{model.iconUrl}}" tabindex="-1" style="background-image: url(&quot;//i.ytimg.com/i/Egdi0XIXXZ-qJOFPf4JSKw/1.jpg&quot;);"></div>
                </div>
                <div class="guide-button-title">스포츠</div>
            </div>
            <div class="has-image guide-button" tabindex="-1" style="transform: translateY(800%) translateZ(0px); transition: none 0s;">
                <div class="guide-button-icon ">
                    <div class="no-model image" data-image-url="{{model.iconUrl}}" tabindex="-1" style="background-image: url(&quot;//i.ytimg.com/i/OpNcN46UbXVtpKMrmU4Abg/1.jpg&quot;);"></div>
                </div>
                <div class="guide-button-title">게임</div>
            </div>
            <div class="has-image guide-button" tabindex="-1" style="transform: translateY(900%) translateZ(0px); transition: none 0s;">
                <div class="guide-button-icon ">
                    <div class="no-model image" data-image-url="{{model.iconUrl}}" tabindex="-1" style="background-image: url(&quot;//i.ytimg.com/i/YfdidRxbB8Qhf0Nx7ioOYw/1.jpg&quot;);"></div>
                </div>
                <div class="guide-button-title">뉴스</div>
            </div>
            <div class="has-image guide-button" tabindex="-1" style="transform: translateY(1000%) translateZ(0px); transition: none 0s;">
                <div class="guide-button-icon ">
                    <div class="no-model image" data-image-url="{{model.iconUrl}}" tabindex="-1" style="background-image: url(&quot;//i.ytimg.com/i/4R8DWoMoI7CAwX8_LjQHig/1.jpg&quot;);"></div>
                </div>
                <div class="guide-button-title">실시간</div>
            </div>
            <div class="has-image guide-button" tabindex="-1" style="transform: translateY(1100%) translateZ(0px); transition: none 0s;">
                <div class="guide-button-icon ">
                    <div class="no-model image" data-image-url="{{model.iconUrl}}" tabindex="-1" style="background-image: url(&quot;//i.ytimg.com/i/xAgnFbkxldX6YUEvdcNjnA/1.jpg&quot;);"></div>
                </div>
                <div class="guide-button-title">영화/애니메이션</div>
            </div>
            <div class="has-image guide-button" tabindex="-1" style="transform: translateY(1200%) translateZ(0px); transition: none 0s;">
                <div class="guide-button-icon ">
                    <div class="no-model image" data-image-url="{{model.iconUrl}}" tabindex="-1" style="background-image: url(&quot;//i.ytimg.com/i/i-g4cjqGV7jvU8aeSuj0jQ/1.jpg&quot;);"></div>
                </div>
                <div class="guide-button-title">엔터테인먼트</div>
            </div>
            <div class="has-image guide-button" tabindex="-1" style="transform: translateY(1300%) translateZ(0px); transition: none 0s;">
                <div class="guide-button-icon ">
                    <div class="no-model image" data-image-url="{{model.iconUrl}}" tabindex="-1" style="background-image: url(&quot;//i.ytimg.com/i/QZ43c4dAA9eXCQuXWu9aTw/1.jpg&quot;);"></div>
                </div>
                <div class="guide-button-title">코미디</div>
            </div>
        </div>
    </div>

</div>

<?php include "_component.php";?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Bootstrap js -->
<script src="http://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>

<script src="../../assets/plugins/snap/1.9.3/snap.min.js"></script>

<!-- Swiper : https://github.com/nolimits4web/Swiper -->
<script src="../../assets/plugins/swiper/3.2.7/js/swiper.jquery.min.js"></script>

<script src="./script.js"></script>

</body>
</html>