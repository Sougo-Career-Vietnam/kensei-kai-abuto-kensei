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
                   {{--p1--}}
                  <section class="gallery" id="p1">                
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
              
                   {{--p2--}}
                <section class="gallery" id="p2">                
                    <div class="swiper-container gallery-slider02">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/02slider_01_pc.png')}}" alt="">
                                  </picture>
                            
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/02slider_02_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_03_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_03_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/02slider_03_pc.png')}}" alt="">
                              </picture></div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_04_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_04_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/02slider_04_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_05_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_05_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/02slider_05_pc.png')}}" alt="">
                                  </picture>
                            </div>
                        </div>
                    </div>
                
                    <div class="swiper-container gallery-thumbs02">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/02slider_01_pc.png')}}" alt="">
                                  </picture>
                            
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/02slider_02_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_03_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_03_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/02slider_03_pc.png')}}" alt="">
                              </picture></div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_04_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_04_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/02slider_04_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_05_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_05_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/02slider_05_pc.png')}}" alt="">
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
                </section>


                   {{--p3--}}
                   <section class="gallery" id="p3">                
                    <div class="swiper-container gallery-slider03">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_01_pc.png')}}" alt="">
                                  </picture>
                            
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_02_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_03_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_03_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/03slide_03_pc.png')}}" alt="">
                              </picture></div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_04_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_04_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_04_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_05_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_05_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_05_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_06_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_06_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_06_pc.png')}}" alt="">
                                  </picture>
                            </div>
                        </div>
                    </div>
                
                    <div class="swiper-container gallery-thumbs03">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_01_pc.png')}}" alt="">
                                  </picture>
                            
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_02_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_03_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_03_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/03slide_03_pc.png')}}" alt="">
                              </picture></div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_04_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_04_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_04_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_05_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_05_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_05_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_06_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_06_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_06_pc.png')}}" alt="">
                                  </picture>
                            </div>
                        </div>
                    </div>
                    
                    <div class="slider__controls flex">
                        <div class="slider__button-prev03">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/arrow-prev_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/arrow-prev_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/arrow-back_pc.png')}}" alt="">
                              </picture>

              
                        </div>
                        <div class="slider__button-next03">
                     

                              <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/arrow-back_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/arrow-back_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/arrow-back_pc.png')}}" alt="">
                              </picture>
                        
                        </div>
                
                    </div> 
                </section>




                   {{--p4--}}
                   <section class="gallery" id="p4">                
                    <div class="swiper-container gallery-slider04">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_01_pc.png')}}" alt="">
                                  </picture>
                            
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_02_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_03_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_03_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/04slide_03_pc.png')}}" alt="">
                              </picture></div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_04_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_04_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_04_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_05_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_05_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_05_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_06_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_06_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_06_pc.png')}}" alt="">
                                  </picture>
                            </div>
                        </div>
                    </div>
                
                    <div class="swiper-container gallery-thumbs04">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_01_pc.png')}}" alt="">
                                  </picture>
                            
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_02_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_03_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_03_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/04slide_03_pc.png')}}" alt="">
                              </picture></div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_04_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_04_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_04_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_05_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_05_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_05_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_06_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_06_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_06_pc.png')}}" alt="">
                                  </picture>
                            </div>
                        </div>
                    </div>
                    
                    <div class="slider__controls flex">
                        <div class="slider__button-prev04">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/arrow-prev_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/arrow-prev_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/arrow-back_pc.png')}}" alt="">
                              </picture>

              
                        </div>
                        <div class="slider__button-next04">
                     

                              <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/workplace/arrow-back_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/workplace/arrow-back_pc.png')}}">
                                <img class="sizes" src="{{asset('images/workplace/arrow-back_pc.png')}}" alt="">
                              </picture>
                        
                        </div>
                
                    </div> 
                </section>


     
              <script>


                $(function() {
                    function initializeSlider(mainSliderClass, thumbsSliderClass, loopedSlides, navigationNext, navigationPrev) {
                        // Main slider
                        var mainSlider = new Swiper(mainSliderClass, {
                            slidesPerView: 1,
                            centeredSlides: true,
                            loop: true,
                            loopedSlides: loopedSlides,
                            navigation: {
                                nextEl: navigationNext,
                                prevEl: navigationPrev,
                            },
                        });

                        // Thumbnails slider
                        var thumbsSlider = new Swiper(thumbsSliderClass, {
                            slidesPerView: 'auto',
                            spaceBetween: 15,
                            loopedSlides: loopedSlides,
                            slideToClickedSlide: true,
                        });

                        // Sync sliders
                        mainSlider.controller.control = thumbsSlider;
                        thumbsSlider.controller.control = mainSlider;

                        // Update active class on thumbnails
                        mainSlider.on('slideChange', function() {
                            var activeIndex = mainSlider.realIndex;
                            $(thumbsSliderClass + ' .swiper-slide').removeClass('swiper-slide-active');
                            $(thumbsSliderClass + ' .swiper-slide').eq(activeIndex).addClass('swiper-slide-active');
                        });

                        // Thumbnail click event
                        $(thumbsSliderClass + ' .swiper-slide').on('click', function() {
                            const index = $(this).index();
                            mainSlider.slideToLoop(index);
                        });
                    }

                    // Initialize sliders
                    initializeSlider('.gallery-slider', '.gallery-thumbs', 8, '.slider__button-next', '.slider__button-prev');
                    initializeSlider('.gallery-slider02', '.gallery-thumbs02', 5, '.slider__button-next02', '.slider__button-prev02');
                    initializeSlider('.gallery-slider03', '.gallery-thumbs03', 6, '.slider__button-next03', '.slider__button-prev03');
                    initializeSlider('.gallery-slider04', '.gallery-thumbs04', 6, '.slider__button-next04', '.slider__button-prev04');
                });



              </script>
              







        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection




