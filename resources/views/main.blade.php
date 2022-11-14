@extends('layouts.app')

@section('contents')
 
<div class="content">
	<!-- 스와이퍼 테스트 -->
	<!-- Slider main container -->
	<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="/imgs/visual1.jpg"><div class="sw_text__box"><h1>슬라이드1</h1></div></div>
        <div class="swiper-slide"><img src="/imgs/visual2.png"><div class="sw_text__box"><h1>슬라이드2</h1></div></div>
        <div class="swiper-slide"><img src="/imgs/visual1.jpg"><div class="sw_text__box"><h1>슬라이드3</h1></div></div>
      </div>
      <div class="swiper-button-next swiper-button-color"></div>
      <div class="swiper-button-prev swiper-button-color"></div>
      <div class="swiper-pagination swiper-button-color"></div>
    </div>
</div>
	
	

	<!-- <div class="container"> -->
		<div class="container">
		<div class="icon_box_wrap mt-100">
			<h1>Main service</h1>
			<h2 class="mt-20">subtitle</h2>

			<div class="f__box mt-50">
				<div class="icon_box"><img src="/imgs/web_icon.png"><span>WEB</span></div>
				<div class="icon_box"><img src="/imgs/web_icon.png"><span>Graphic</span></div>
				<div class="icon_box"><img src="/imgs/web_icon.png"><span>Editorial</span></div>
				<div class="icon_box"><img src="/imgs/web_icon.png"><span>Brochure</span></div>
				<div class="icon_box"><img src="/imgs/web_icon.png"><span>Consulting</span></div>
			</div>
		</div>
		</div>		
		<div class="container">
		<div class="icon_box_wrap mt-100">
			<h1>Portfolio</h1>
			<h2 class="mt-20">subtitle</h2>
			<div class="select__portfolio_wrap mt-30">
				<div class="select__portfolio"><a href="#portfolio1">All</a></div>
				<div class="select__portfolio"><a href="#portfolio2">Web</a></div>
				<div class="select__portfolio"><a href="#portfolio3">Brochure</a></div>
				<div class="select__portfolio"><a href="#portfolio4">port3</a></div>
				<div class="select__portfolio"><a href="#portfolio5">port4</a></div>
			</div>

			<div class="f__box mt-50">
				<!-- 다중 슬라이드 테스트 -->
				<div class="discover__container container portfolio-container portfolio__area" id="portfolio1">
					<div class="swiper-wrapper">
					  <!--==================== DISCOVER 1 ====================-->
					  <div class="portfolio__card swiper-slide">
						<img src="/imgs/portfolio/port1.png" alt="" class="discover__img mt-0">
						<div class="portfolio__data">
						  <h2 class="portfolio__title">테스트-All</h2>
						  <span class="portfolio__description">#Web #반응형</span>
						</div>
					  </div>
				   <!-- ...-->
				   <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port2.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">웨딩뷰</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port3.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">엠토</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port4.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">대길부산의전</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port5.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">테스트</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
					</div>
					<div class="swiper-button-next"></div>
      				<div class="swiper-button-prev"></div>
				  </div>
				  <div class="discover__container container portfolio-container portfolio__area" id="portfolio2">
					<div class="swiper-wrapper">
					  <!--==================== DISCOVER 1 ====================-->
					  <div class="portfolio__card swiper-slide">
						<img src="/imgs/portfolio/port1.png" alt="" class="discover__img mt-0">
						<div class="portfolio__data">
						  <h2 class="portfolio__title">테스트-포트1</h2>
						  <span class="portfolio__description">#Web #반응형</span>
						</div>
					  </div>
				   <!-- ...-->
				   <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port2.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">웨딩뷰</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port3.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">엠토</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port4.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">대길부산의전</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port5.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">테스트</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
					</div>
					<div class="swiper-button-next"></div>
      				<div class="swiper-button-prev"></div>
				  </div>
				  <div class="discover__container container portfolio-container portfolio__area" id="portfolio3">
					<div class="swiper-wrapper">
					  <!--==================== DISCOVER 1 ====================-->
					  <div class="portfolio__card swiper-slide">
						<img src="/imgs/portfolio/bro_test.jpg" alt="" class="discover__img mt-0">
						<div class="portfolio__data">
						  <h2 class="portfolio__title">테스트</h2>
						  <span class="portfolio__description">#Brochure #Test_img</span>
						</div>
					  </div>
				   <!-- ...-->
				   <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/bro_test.jpg" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">테스트</h2>
					  <span class="portfolio__description">#Brochure #Test_img</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/bro_test.jpg" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">테스트</h2>
					  <span class="portfolio__description">#Brochure #Test_img</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/bro_test.jpg" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">테스트</h2>
					  <span class="portfolio__description">#Brochure #Test_img</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/bro_test.jpg" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">테스트</h2>
					  <span class="portfolio__description">#Brochure #Test_img</span>
					</div>
				  </div>
					</div>
					<div class="swiper-button-next"></div>
      				<div class="swiper-button-prev"></div>
				  </div>
				  <div class="discover__container container portfolio-container portfolio__area" id="portfolio4">
					<div class="swiper-wrapper">
					  <!--==================== DISCOVER 1 ====================-->
					  <div class="portfolio__card swiper-slide">
						<img src="/imgs/portfolio/port1.png" alt="" class="discover__img mt-0">
						<div class="portfolio__data">
						  <h2 class="portfolio__title">테스트-포트3</h2>
						  <span class="portfolio__description">#Web #반응형</span>
						</div>
					  </div>
				   <!-- ...-->
				   <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port2.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">웨딩뷰</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port3.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">엠토</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port4.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">대길부산의전</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port5.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">테스트</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
					</div>
					<div class="swiper-button-next"></div>
      				<div class="swiper-button-prev"></div>
				  </div>
				  <div class="discover__container container portfolio-container portfolio__area" id="portfolio5">
					<div class="swiper-wrapper">
					  <!--==================== DISCOVER 1 ====================-->
					  <div class="portfolio__card swiper-slide">
						<img src="/imgs/portfolio/port1.png" alt="" class="discover__img mt-0">
						<div class="portfolio__data">
						  <h2 class="portfolio__title">테스트-포트4</h2>
						  <span class="portfolio__description">#Web #반응형</span>
						</div>
					  </div>
				   <!-- ...-->
				   <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port2.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">웨딩뷰</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port3.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">엠토</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port4.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">대길부산의전</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
				  <div class="portfolio__card swiper-slide">
					<img src="/imgs/portfolio/port5.png" alt="" class="discover__img mt-0">
					<div class="portfolio__data">
					  <h2 class="portfolio__title">테스트</h2>
					  <span class="portfolio__description">#Web #반응형</span>
					</div>
				  </div>
					</div>
					<div class="swiper-button-next"></div>
      				<div class="swiper-button-prev"></div>
				  </div>
				  <!-- 다중 슬라이드 테스트 -->
			</div>
			
		</div>
		</div>
		<!-- 포폴 박스 완 -->
		<!-- Process box Start -->
		<!-- 문의, 기획, 시안제작, 프로젝트 -->
		<div class="process__wrap">
		<div class="icon_box_wrap mt-50 pt-50 pb-50 container">
			<h1 class="bg-color-1">Process</h1>
			<h2 class="bg-color-2 mt-20">subtitle</h2>
			<div class="portfolio_container process_box_wrap myswiper2 mt-50">
			<div class="swiper-pagination-port"></div>
			<div class="swiper-wrapper  mt-30">
				<div class="swiper-slide process_slide"><img src="/imgs/process/process_1.jpg"><div class="process__data"><h2>견적문의</h2><div class="process__data_cont"><p>1.상세설명</p><p>2.상세설명</p><p>3.상세설명</p><p>4.상세설명</p></div></div></div>
				<div class="swiper-slide process_slide"><img src="/imgs/process/process_2.jpg"><div class="process__data"><h2>기획 및 시안제작</h2><div class="process__data_cont"><p>1.상세설명</p><p>2.상세설명</p><p>3.상세설명</p><p>4.상세설명</p></div></div></div>
				<div class="swiper-slide process_slide"><img src="/imgs/process/process_3.jpg"><div class="process__data"><h2>디자인 수정</h2><div class="process__data_cont"><p>1.상세설명</p><p>2.상세설명</p><p>3.상세설명</p><p>4.상세설명</p></div></div></div>
				<div class="swiper-slide process_slide"><img src="/imgs/process/process_4.jpg"><div class="process__data"><h2>프로젝트 배포</h2><div class="process__data_cont"><p>1.상세설명</p><p>2.상세설명</p><p>3.상세설명</p><p>4.상세설명</p></div></div></div>
			</div>
			</div>
			
		</div>
		</div>
		<!-- Process box End -->

		<div class="icon_box_wrap mt-100">
			<h1>Review</h1>

			<div class="f__box mt-50">
				<!-- <div class="icon_box"><img src="/imgs/web_icon.png"><span>WEB</span></div>
				<div class="icon_box"><img src="/imgs/web_icon.png"><span>Graphic</span></div>
				<div class="icon_box"><img src="/imgs/web_icon.png"><span>Editorial</span></div>
				<div class="icon_box"><img src="/imgs/web_icon.png"><span>Brochure</span></div>
				<div class="icon_box"><img src="/imgs/web_icon.png"><span>Consulting</span></div> -->
			</div>
		</div>
	<div class="container">
		<div class="icon_box_f_wrap">
		<div class="icon_box_wrap_1 mt-100">
			<h1>Contact</h1>

			<div class="f__box mt-50 contact__wrap">
				
				<div>
					<div class ="text__cont mt-10 tq">간편상담</div>
					<table class="contact__table">
						<tr>
							<td>
      							<input type="email" id="bct-input-text" placeholder="프로젝트">
							</td>
							<td>
      							<input type="email" id="bct-input-text" placeholder="성함">
							</td>
						</tr>
						<tr>
							<td>
      							<input type="email" id="bct-input-text" placeholder="이메일">
							</td>
							<td>
      							<input type="email" id="bct-input-text" placeholder="연락처">
							</td>
						</tr>
						<tr>
							<td>
      							<input type="email" id="" class="contact__text" placeholder="" >
							</td>
						</tr>
						<tr>
							<td>
      							<input type="file" id="bct-input-text" placeholder="">
							</td>
							<td>
      							<input type="submit" id="bct-input-text" placeholder="">
							</td>
						</tr>
					</table>
				</div>
				
				<!-- <div class="icon_box"><img src="/imgs/web_icon.png"><span>WEB</span></div>
				<div class="icon_box"><img src="/imgs/web_icon.png"><span>Graphic</span></div>
				<div class="icon_box"><img src="/imgs/web_icon.png"><span>Editorial</span></div>
				<div class="icon_box"><img src="/imgs/web_icon.png"><span>Brochure</span></div>
				<div class="icon_box"><img src="/imgs/web_icon.png"><span>Consulting</span></div> -->
			</div>
		</div>

		<div class="icon_box_wrap_2 mt-100">
			<h1 class="welcome pb-50">way to come</h1>
			<div class="text__area_box">
				<!-- <h2 class="text__area"><span class="text__area__cont">1</span><span class="text__area__cont">2</span></h2> -->
			
			<div class="text__area mt-10">	
			<div class="text__cont">주소 : 부산광역시 동구 조방로 26번길 9 401호</div>
			</div>
			<div class="text__area_2 mt-10">
			<div class="text__cont half">전화번호 : 051-710-6207</div><div class="text__cont half">이메일 : weddingview20@gmail.com</div>
			</div>				
			</div>

			<div class="f__box mt-10">
				
				<div class="map_wrap">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.6739770546965!2d129.0627931!3d35.139808599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3568eb837c50accb%3A0x12ef6ec95a5e8b66!2z67aA7IKw6rSR7Jet7IucIOuPmeq1rCDsobDrsKnroZwyNuuyiOq4uCA5!5e0!3m2!1sko!2skr!4v1667958347677!5m2!1sko!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- </div> -->
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript" src="/js/swiper.js"></script>



@endsection