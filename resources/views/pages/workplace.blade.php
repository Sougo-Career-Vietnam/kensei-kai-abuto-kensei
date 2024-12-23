@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}
        <link rel="stylesheet" media="all" href="./css/workplace.css"/>
        <script type="text/javascript" src="./js/page.js"></script>
        <main id="main_wrap">

            <div id="workplace">
                <div class="commonInner-slider js-fadein">
                    <h2 class="contentHeading">
                        <span class="ja">職場紹介</span>
                        <span class="en">WORKPLACE</span>
                    </h2>


                  <div class="menu__list">
                    <a href="#p1" class="scroll menu__link">
                      <span>あぶと健生苑</span>
                      <svg xmlns="http://www.w3.org/2000/svg" id="box_down_btn_pc" width="13.992" height="8" viewBox="0 0 13.992 8">
                        <path id="Icon_ionic-ios-arrow-forward" data-name="Icon ionic-ios-arrow-forward" d="M16.835,13.19,11.54,7.9a1,1,0,0,1,0-1.412,1.008,1.008,0,0,1,1.416,0l6,5.995a1,1,0,0,1,.029,1.379L12.961,19.9a1,1,0,1,1-1.416-1.412Z" transform="translate(20.188 -11.246) rotate(90)" fill="#fff"/>
                      </svg>
                    </a>
                    <a href="#p2" class="scroll menu__link">
                      <span>あぶとの家</span>
                      <svg xmlns="http://www.w3.org/2000/svg" id="box_down_btn_pc" width="13.992" height="8" viewBox="0 0 13.992 8">
                        <path id="Icon_ionic-ios-arrow-forward" data-name="Icon ionic-ios-arrow-forward" d="M16.835,13.19,11.54,7.9a1,1,0,0,1,0-1.412,1.008,1.008,0,0,1,1.416,0l6,5.995a1,1,0,0,1,.029,1.379L12.961,19.9a1,1,0,1,1-1.416-1.412Z" transform="translate(20.188 -11.246) rotate(90)" fill="#fff"/>
                      </svg>
                    </a>
                    <a href="#p3" class="scroll menu__link">
                        <span>ざおう健生苑 東館</span>
                        <svg xmlns="http://www.w3.org/2000/svg" id="box_down_btn_pc" width="13.992" height="8" viewBox="0 0 13.992 8">
                            <path id="Icon_ionic-ios-arrow-forward" data-name="Icon ionic-ios-arrow-forward" d="M16.835,13.19,11.54,7.9a1,1,0,0,1,0-1.412,1.008,1.008,0,0,1,1.416,0l6,5.995a1,1,0,0,1,.029,1.379L12.961,19.9a1,1,0,1,1-1.416-1.412Z" transform="translate(20.188 -11.246) rotate(90)" fill="#fff"/>
                          </svg>
                      </a>
                      <a href="#p4" class="scroll menu__link">
                        <span>ざおう健生苑 本館</span>
                        <svg xmlns="http://www.w3.org/2000/svg" id="box_down_btn_pc" width="13.992" height="8" viewBox="0 0 13.992 8">
                            <path id="Icon_ionic-ios-arrow-forward" data-name="Icon ionic-ios-arrow-forward" d="M16.835,13.19,11.54,7.9a1,1,0,0,1,0-1.412,1.008,1.008,0,0,1,1.416,0l6,5.995a1,1,0,0,1,.029,1.379L12.961,19.9a1,1,0,1,1-1.416-1.412Z" transform="translate(20.188 -11.246) rotate(90)" fill="#fff"/>
                          </svg>
                      </a>
    
                  </div>








 
                   {{--p1--}}
                  <section class="gallery" id="p1">   
                    
                        <h3 class="title-samll">特別養護老人ホーム あぶと健生苑</h3>
                        <div class="title-sub">
                            <span class="text-sub">募集職種</span>
                            <span class="text-sub-02">介護士、看護師</span>
                       
                        </div>
                        <p class="contet-text">
                            あぶと健生苑は、阿伏兎岬、内海大橋、矢の島を臨む瀬戸内の潮の香りが心地よい景勝地に特別養護老人ホーム、短期入所生活介護事業所、通所介護事業所、居宅介護支援事業所を開設しています。「健やかに生きる悦びの館」「創造」を基本理念としたあぶと健生苑は、豊かな自然環境と心通う介護環境が相まって、楽しく、穏やかな暮らしのお手伝いをご提供しております。
                        </p>

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
                        <dl class="dl-slider">
                            <dt class="dt-slider">正面入り口</dt>
                            <dd class="dd-slider">施設の入口です。入居時やデイサービスのお迎えなどのおクルマもポーチ下までお入りいただけます。</dd>
                        </dl>
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
                            // autoplay: {
                            // delay: 1500,
                            // }
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




