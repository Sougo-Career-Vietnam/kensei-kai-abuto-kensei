@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}
        <link rel="stylesheet" media="all" href="./css/workplace.css"/>
        {{-- <script type="text/javascript" src="./js/page.js"></script> --}}
        <main id="main_wrap">

            <div id="workplace">
                <div class="commonInner-slider">
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
                     <div class="box-title">
                        <h3 class="title-samll">特別養護老人ホーム あぶと健生苑</h3>
                        <div class="title-sub">
                            <span class="text-sub">募集職種</span>
                            <span class="text-sub-02">介護士、看護師</span>
                       
                        </div>
                        <p class="contet-text">
                            あぶと健生苑は、阿伏兎岬、内海大橋、矢の島を臨む瀬戸内の潮の香りが心地よい景勝地に特別養護老人ホーム、短期入所生活介護事業所、通所介護事業所、居宅介護支援事業所を開設しています。「健やかに生きる悦びの館」「創造」を基本理念としたあぶと健生苑は、豊かな自然環境と心通う介護環境が相まって、楽しく、穏やかな暮らしのお手伝いをご提供しております。
                        </p>
                     </div>
   

                    <div class="swiper-container gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_01_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">正面入り口</dt>
                                    <dd class="dd-slider">施設の入口です。入居時やデイサービスのお迎えなどのおクルマもポーチ下までお入りいただけます。</dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_02_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">共有スペース</dt>
                                    <dd class="dd-slider">ユニットの入居者様が食事をしたり、皆さんで談笑したりできるスペースです。</dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_03_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_03_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_03_pc.png')}}" alt="">
                               </picture>
                               <dl class="dl-slider">
                                <dt class="dt-slider">廊下</dt>
                                <dd class="dd-slider">廊下幅が広く、時には歩行訓練を行っています。 </dd>
                            </dl>
                            
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_04_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_04_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_04_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">居室</dt>
                                    <dd class="dd-slider">全室個室で他の人に遠慮することなく、ご自身のペースで生活できます。 </dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_05_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_05_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_05_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">個浴</dt>
                                    <dd class="dd-slider">ご自宅のお風呂のようにゆったりとした時間を過ごしていただけます。 </dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_06_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_06_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_06_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">特浴</dt>
                                    <dd class="dd-slider">個浴や車浴で入浴するのが難しくなった方は、特浴で対応させていただいています。 </dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_07_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_07_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_07_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">個別イベント</dt>
                                    <dd class="dd-slider">ご本人の誕生日のお祝いなど、ご本人様の希望に沿って外食等も計画しています。 </dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/01slider_08_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/01slider_08_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/01slider_08_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">窓辺から見える景色</dt>
                                    <dd class="dd-slider">初秋から冬にかけて、内海大橋に沈む夕陽は絶景です。 </dd>
                                </dl>
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
                    <div class="box-title">
                        <h3 class="title-samll">認知症対応型共同生活介護事業所 あぶとの家</h3>
                        <div class="title-sub">
                            <span class="text-sub">募集職種</span>
                            <span class="text-sub-02">介護職員</span>
                    
                        </div>
                        <p class="contet-text">
                            「潮の香り」「白波の輝き」瀬戸内海を眺めながら、心癒される最高のロケーションの中で、ご自宅で今までしてきた暮らしをできる限り大切にし、その人らしさを尊重しながらスタッフと入居者様と楽しく生活しています。あぶとの家では、少人数を単位とした共同生活住居で食事の支度や、掃除洗濯などをスタッフとともに行っています。家庭的で落ち着いた雰囲気の中で生活を送ることにより認知症の進行を穏やかにし、家庭介護の負担軽減に資するものです。
                        </p>     
                    </div>
                    <div class="swiper-container gallery-slider02">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/02slider_01_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">建物 外観</dt>
                                    <dd class="dd-slider">ドローンで見る施設の外観です。</dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/02slider_02_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">共有スペース</dt>
                                    <dd class="dd-slider">スタッフと一緒に料理をしたり、掃除をしたり‥‥<br>カラオケを楽しむことも楽しんでいます。</dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_03_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_03_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/02slider_03_pc.png')}}" alt="">
                              </picture>
                              <dl class="dl-slider">
                                <dt class="dt-slider">居室</dt>
                                <dd class="dd-slider">個室なのでテレビを見たり、読書をしたりとゆったりと過ごすことができます。</dd>
                            </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_04_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_04_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/02slider_04_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">浴室</dt>
                                    <dd class="dd-slider">一般浴で入浴するのが難しくなった場合も、イスに乗ったまま入ることが可能です。</dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/02slider_05_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/02slider_05_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/02slider_05_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">ポーチから見える景色</dt>
                                    <dd class="dd-slider">目の前に瀬戸内海を見ることができ、時には外に出てバーべキューをしたり、桜のシーズンには花見をして季節を楽しんでいます。</dd>
                                </dl>
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
                    
                    <div class="slider__controls flex two">
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
                    <div class="box-title">  
                        <h3 class="title-samll">ざおう健生苑短期入所生活介護事業所東館</h3>
                        <div class="title-sub">
                            <span class="text-sub">募集職種</span>
                            <span class="text-sub-02">介護士</span>
                    
                        </div>
                
                    <p class="contet-text">
                        ざおう健生苑東館は定員50名、要支援及び要介護1から5の認定を受けた方がご利用できる施設となっております。施設内の居室は4人部屋10室、2人部屋4室、1人部屋2室の多床室からなっております。各プライベートスペースがパーテーションで仕切られておりプライバシーに配慮されたつくりとなっております。職員一同「思いやり」と「あたたかさ」を基本方針に介護サービスの提供を行います。
                    </p> 
                </div>            
                    <div class="swiper-container gallery-slider03">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_01_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">外観</dt>
                                    <dd class="dd-slider">施設の外観です。ショートステイの入退所や面会の方もこちらの玄関からお入りいただきます。</dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_02_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">共有スペース</dt>
                                    <dd class="dd-slider">広いホールで他の利用者様と談笑したり、広い廊下で歩行訓練などのリハビリを行っています。</dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_03_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_03_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_03_pc.png')}}" alt="">
                                </picture>
                                <dl class="dl-slider">
                                    <dt class="dt-slider">2人部屋</dt>
                                    <dd class="dd-slider">個々のスペースごとにプライバシー保護のため、パーテーションで仕切られております。</dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_04_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_04_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_04_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">4人部屋</dt>
                                    <dd class="dd-slider">個々のスペースごとにプライバシー保護のため、パーテーションで仕切られております。</dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_05_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_05_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_05_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">個浴</dt>
                                    <dd class="dd-slider">ご自宅のお風呂のようにゆったりとした時間を過ごしていただけます。</dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/03slide_06_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/03slide_06_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/03slide_06_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">車浴</dt>
                                    <dd class="dd-slider">個浴での入浴が難しい方は、イスに乗ったまま入浴することができます。</dd>
                                </dl>
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
                    
                    <div class="slider__controls flex three">
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
                    <div class="box-title">    
                        <h3 class="title-samll pc-br">地域密着型特別養護老人ホーム ざおう健生苑本館</h3>
                        <h3 class="title-samll sp-br">地域密着型特別養護老人ホーム</h3>
                        <div class="title-sub">
                            <span class="text-sub">募集職種</span>
                            <span class="text-sub-02">介護士</span>
                    
                        </div>
                
                    <p class="contet-text">
                        ざおう健生苑本館は入居者様お一人お一人にしっかりと向き合い、ユニットに配置された決まったスタッフが日々お世話させていただく事により、入居者様が安心してケアを受けていただけるようにサービス提供に努めております。住み慣れた地域で家庭的な温かさのある雰囲気を大切に、家族や地域の方々との結びつきを重視しています。入居者様、家族の方々に「ざおう健生苑本館で良かった」と思っていただけるよう「素顔が笑顔でいられる」施設づくりを目指しています。
                    </p>   
                   </div>       
                    <div class="swiper-container gallery-slider04">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_01_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">外観</dt>
                                    <dd class="dd-slider">施設の外観です。ショートステイの入退所、面会もこちらの玄関からお入りいただけます。</dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_02_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">共有スペース</dt>
                                    <dd class="dd-slider">日中は皆さんホールで楽しく談笑されています。食事もホールで皆さんで召し上がられます。</dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_03_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_03_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_03_pc.png')}}" alt="">
                                </picture>
                                <dl class="dl-slider">
                                    <dt class="dt-slider">キッチン</dt>
                                    <dd class="dd-slider">家庭的な雰囲気を感じていただきたく、食事の盛り付けをこのキッチンで行います。</dd>
                                </dl>
                            
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_04_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_04_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_04_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">看護ステーション</dt>
                                    <dd class="dd-slider">看護師がくすりの仕分けや看護業務を行っています。
                                    </dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_05_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_05_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_05_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">特浴</dt>
                                    <dd class="dd-slider">個浴で入浴が難しい方は、横になって入ることができる特浴を利用します。
                                    </dd>
                                </dl>
                            </div>
                            <div class="swiper-slide">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/workplace/04slide_06_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/workplace/04slide_06_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/workplace/04slide_06_pc.png')}}" alt="">
                                  </picture>
                                  <dl class="dl-slider">
                                    <dt class="dt-slider">フロア行事</dt>
                                    <dd class="dd-slider">季節ごとの行事をスタッフが立案し、入居者の皆様に楽しんでいただけるイベントを目指しています。</dd>
                                </dl>
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
                    
                    <div class="slider__controls flex four">
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




