@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}
        <link rel="stylesheet" media="all" href="./css/workplace.css"/>
        <main id="main_wrap">

    
       
                
    
    
    
    
            <div id="workplace">
                <div class="commonInner-slider js-fadein">
                  <h2 class="contentHeading">
                    <span class="ja">3つの働きやすい理由</span>
                  </h2>
                  <p class="note-workplace">
                    最新技術の導入や充実のサポート体制、手厚い待<br class="sp-br">遇で働きやすさを実現しています。<br class="pc-br">
                    スタッフ一人<br class="sp-br">ひとりが安心して成長できる職場です。
                  </p>
              
                  <section class="gallery">                
                    <div class="swiper-container gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_01_pc.png')}}" alt="">
                                  </picture>
                            
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_02_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_03_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_03_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/01slider_03_pc.png')}}" alt="">
                              </picture></div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_04_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_04_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_04_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_05_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_05_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_05_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_06_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_06_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_06_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_07_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_07_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_07_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_08_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_08_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_08_pc.png')}}" alt="">
                                  </picture>
                            </div>
                        </div>



            
                    </div>
                
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_01_pc.png')}}" alt="">
                                  </picture>
                            
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_02_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_03_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_03_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/01slider_03_pc.png')}}" alt="">
                              </picture></div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_04_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_04_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_04_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_05_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_05_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_05_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_06_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_06_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_06_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_07_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_07_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_07_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_08_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_08_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_08_pc.png')}}" alt="">
                                  </picture>
                            </div>
                        </div>
                    </div>
                    <div class="slider__controls flex">
                        <div class="slider__button-prev">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/arrow-prev_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/arrow-prev_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/arrow-back_pc.png')}}" alt="">
                              </picture>

              
                        </div>
                        <div class="slider__button-next">
                     

                              <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/arrow-back_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/arrow-back_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/arrow-back_pc.png')}}" alt="">
                              </picture>
                        
                        </div>
                
                    </div> 
                </section>
              
      
              



                <div class="gallery02">                
                    <div class="swiper-container gallery-slider02">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_01_pc.png')}}" alt="">
                                  </picture>
                            
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_02_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_03_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_03_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/01slider_03_pc.png')}}" alt="">
                              </picture></div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_04_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_04_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_04_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_05_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_05_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_05_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_06_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_06_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_06_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_07_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_07_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_07_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_08_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_08_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_08_pc.png')}}" alt="">
                                  </picture>
                            </div>
                        </div>
                    </div>
                
                    <div class="swiper-container gallery-thumbs02">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_01_pc.png')}}" alt="">
                                  </picture>
                            
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_02_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_03_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_03_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/01slider_03_pc.png')}}" alt="">
                              </picture></div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_04_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_04_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_04_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_05_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_05_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_05_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_06_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_06_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_06_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_07_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_07_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_07_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_08_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_08_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_08_pc.png')}}" alt="">
                                  </picture>
                            </div>
                        </div>
                    </div>
                    <div class="slider__controls flex">
                        <div class="slider__button-prev02">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/arrow-prev_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/arrow-prev_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/arrow-back_pc.png')}}" alt="">
                              </picture>

              
                        </div>
                        <div class="slider__button-next02">
                     

                              <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/arrow-back_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/arrow-back_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/arrow-back_pc.png')}}" alt="">
                              </picture>
                        
                        </div>
                
                    </div> 
                </div>









                
              <script>
                        $(function() {
                            // Main slider
                            var slider = new Swiper('.gallery-slider', {
                                slidesPerView: 1,
                                centeredSlides: true,
                                loop: true,
                                loopedSlides: 8, // Số lượng slide
                                navigation: {
                                    nextEl: '.slider__button-next',
                                    prevEl: '.slider__button-prev',
                                },
                            });

                            // Thumbnails slider
                            var thumbs = new Swiper('.gallery-thumbs', {
                                slidesPerView: 'auto',
                                spaceBetween: 10,
                                // loop: true,
                                loopedSlides: 8, // Số lượng slide
                                slideToClickedSlide: true, // Chuyển khi click vào thumbnail
                            });

                            // Đồng bộ slider với thumbs
                            slider.controller.control = thumbs;
                            thumbs.controller.control = slider;

                            // Cập nhật lớp .swiper-slide-active cho thumbnails
                            slider.on('slideChange', function() {
                                var activeIndex = slider.realIndex;
                                $('.gallery-thumbs .swiper-slide').removeClass('swiper-slide-active');
                                $('.gallery-thumbs .swiper-slide').eq(activeIndex).addClass('swiper-slide-active');
                            });

                            // Gán sự kiện click vào từng thumbnail
                            $('.gallery-thumbs .swiper-slide').on('click', function() {
                                const index = $(this).index();
                                slider.slideToLoop(index); // Chuyển slide trên slider
                            });
                        });





                        $(function() {
                            // Main slider
                            var slider02 = new Swiper('.gallery-slider02', {
                                slidesPerView: 1,
                                centeredSlides: true,
                                loop: true,
                                loopedSlides: 8, // Số lượng slide
                                navigation: {
                                    nextEl: '.slider__button-next02',
                                    prevEl: '.slider__button-prev02',
                                },
                            });

                            // Thumbnails slider
                            var thumbs02 = new Swiper('.gallery-thumbs02', {
                                slidesPerView: 'auto',
                                spaceBetween: 10,
                                // loop: true,
                                loopedSlides: 8, // Số lượng slide
                                slideToClickedSlide: true, // Chuyển khi click vào thumbnail
                            });

                            // Đồng bộ slider với thumbs
                            slider02.controller.control = thumbs02;
                            thumbs02.controller.control = slider02;

                            // Cập nhật lớp .swiper-slide-active cho thumbnails
                            slider02.on('slideChange', function() {
                                var activeIndex = slider02.realIndex;
                                $('.gallery-thumbs02 .swiper-slide').removeClass('swiper-slide-active');
                                $('.gallery-thumbs02 .swiper-slide').eq(activeIndex).addClass('swiper-slide-active');
                            });

                            // Gán sự kiện click vào từng thumbnail
                            $('.gallery-thumbs02 .swiper-slide').on('click', function() {
                                const index = $(this).index();
                                slider02.slideToLoop(index); // Chuyển slide trên slider
                            });
                        });




              </script>
              

        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection




