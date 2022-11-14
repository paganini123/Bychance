<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bct</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('/css/variables.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/responsive.css')}}">
    <link rel="shortcut icon" href="{{ asset('/img/web_icon.png')}}" type="image/x-icon">
    <!-- 스와이퍼 css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('/css/swiper.css')}}">
    <script src="https://kit.fontawesome.com/d9116c2cc1.js" crossorigin="anonymous"></script>
    {{-- 슬릭 --}}
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="{{ asset('/css/slick.css')}}"> -->
    
    <!-- 스와이퍼 -->
    

    <!-- js -->
    {{-- 제이쿼리 --}}
    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> -->

    <!-- 스와이퍼 js-->
    
    

    

    

</head>
<body>
    <!-- Header desktop start-->
    <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">By chance tem</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link" id="nav__1">About us</a>
                            <ul class="nav__drop">
                                <li class="nav__drop_item drop_select_1"><a href="{!! route('about') !!}">회사소개</a></li>
                                <li class="nav__drop_item drop_select_1 drop__end"><a href="{!! route('location') !!}">오시는길</a></li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a href="{!! route('service') !!}" class="nav__link" id="nav__2">Service</a>
                        </li>
                        <li class="nav__item">
                            <a href="{!! route('portfolio') !!}" class="nav__link" id="nav__3">Portfolio</a>
                            <ul class="nav__drop">
                                <li class="nav__drop_item drop_select_3"><a href="{!! route('portfolio') !!}">테스트</a></li>
                                <li class="nav__drop_item drop_select_3"><a href="{!! route('portfolio') !!}">테스트2</a></li>
                                <li class="nav__drop_item drop_select_3 drop__end"><a href="{!! route('portfolio') !!}">테스트3</a></li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link" id="nav__4">Contact</a>
                            <ul class="nav__drop">
                                <li class="nav__drop_item drop_select_1"><a href="{!! route('qna') !!}">자주묻는질문</a></li>
                                <li class="nav__drop_item drop_select_1 drop__end"><a href="{!! route('contact') !!}">견적문의</a></li>
                            </ul>
                        </li>
                    </ul>

                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>
    <!-- Header desktop end-->
    <!-- Header mobile start-->
    <!-- Header mobile end-->
    @yield('contents')
    <!-- Footer start-->
    <footer class="busandg_footer">
      <div class="dg__footer_wrap container">
        <div class="dg__footer_left">
          <!-- logo -->
        </div>
        <div class="dg__footer_right">
        <ul class="dg__footer__top">
          <li class="dg__footer__top_1"><a>회사소개</a></li>
          <li class="dg__footer__top_1"><a>개인정보취급방침</a></li>
          <li class="dg__footer__top_1"><a>이메일무단수집거부</a></li>
          <li class="dg__footer__top_1"><a>고객센터</a></li>
        </ul>
        <div class="dg__footer__info">
          <p><span>대표 : 박수영</span><span>소재지 : 부산광역시 동구 조방로 26번길 9 401호</span></p>
          <p><span>전화번호 : 051-710-6207</span><span>전자우편 : weddingview20@gmail.com</span></p>
          <p><span>사업자등록번호 : 423-81-01399</span><span>통신판매업신고 : </span></p>
          <p><span class="dg__copy">Copyright © By chance tem. All rights reserved.</span></p>
        </div>
      </div>
      </div>
    </footer>
    <!-- <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">By chance tem</h3>
                    </div>
                    <div class="footer__data">
                        <h3 class="footer__subtitle">About</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="#" class="footer__link">About Us</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Features</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">New & Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Company</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Team</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Plan & Pricing</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Become a member</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Support</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="#" class="footer__link">FAQs</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Support Center</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2021 devjade. All rigths reserved.</p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terms & Agreements</a>
                        <a href="#" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>

        </footer> -->

    <!-- Footer end -->
</body>
<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="{{ asset('/js/main.js')}}"></script>
</html>