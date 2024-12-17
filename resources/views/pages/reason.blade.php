@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="page-reason" class="notosanjk">

        {{--html埋め込み部分 start--}}
        <link rel="stylesheet" media="all" href="./css/reason.css"/>
        <script type="text/javascript" src="./js/page.js"></script>
        <main id="main_wrap">
            <section id="reason">
                <h2 class="title-reason">
                    <span class="ja">3つの働きやすい理由</span>
                </h2>
                <div class="commonInner-slider js-fadein">
              

                  <div class="box-slider">
                    <div class="slider mySwiper">
                        <ul class="list-slider swiper-wrapper">
                            <li class="item-sdider swiper-slide">
                            <a href="#p1" class="scroll">
                              <p class="number-reason">01</p>
                                <picture class="image">
                                  <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_01_sp.png')}}">
                                  <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_01_pc.png')}}">
                                  <img class="sizes" src="{{asset('images/reasonreason_01_pc.png')}}" alt="">
                                </picture>
                                <dl class="dl-slider">
                                  <dt class="dt-slider">介護ロボット<br class="pc-br">ICT導入</dt>
                                  {{-- <dd class="dd-slider">最新技術で効率化や負担軽減し、<br>
                                    働きやすさをサポートします。</dd> --}}
              
                                    <dd class="dd-icon">
                                      <picture class="image">
                                        <source  srcset="{{asset('images/top/slider_icon_01.svg')}}">
                                        <img class="sizes" src="{{asset('images/top/slider_icon_01.svg')}}" alt="">
                                      </picture>
                                    </dd>
                                </dl>   
                            </a>
                            </li>
                            <li class="item-sdider swiper-slide two">
                                <a href="#p2" class="scroll">
                              <p class="number-reason">02</p>
                                <picture class="image">
                                  <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_02_sp.png')}}">
                                  <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_02_pc.png')}}">
                                  <img class="sizes" src="{{asset('images/reason/reason_02_pc.png')}}" alt="">
                                </picture>
                                <dl class="dl-slider">
                                  <dt class="dt-slider">未経験の方への<br class="pc-br">フォロー体制</dt>
                                  {{-- <dd class="dd-slider">研修や勉強会で基礎から学び、<br>
                                    安心して働くことができます。</dd> --}}
              
                                    <dd class="dd-icon">
                                      <picture class="image">
                                        <source  srcset="{{asset('images/top/slider_icon_02.svg')}}">
                                        <img class="sizes" src="{{asset('images/top/slider_icon_02.svg')}}" alt="">
                                      </picture>
                                    </dd>
                                </dl>   
                            </a>
                            </li>
                            <li class="item-sdider swiper-slide three">
                                <a href="#p3" class="scroll">
                              <p class="number-reason">03</p>
                                <picture class="image">
                                  <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_03_sp.png')}}">
                                  <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_03_pc.png')}}">
                                  <img class="sizes" src="{{asset('images/reason/reason_03_pc.png')}}" alt="">
                                </picture>
                                <dl class="dl-slider">
                                  <dt class="dt-slider">給与と手当の<br class="pc-br">手厚い還元</dt>
                                  {{-- <dd class="dd-slider">安定した収入と充実の手当で<br class="sp-br">長く働ける<br class="pc-br">
                                    環境づくりに<br class="sp-br">努めています。</dd> --}}
                                    <dd class="dd-icon">
                                      <picture class="image">
                                        <source  srcset="{{asset('images/top/slider_icon_03.svg')}}">
                                        <img class="sizes" src="{{asset('images/top/slider_icon_03.svg')}}" alt="">
                                      </picture>
                                    </dd>
                                </dl> 
                            </a>  
                            </li>
                        </ul>
              
              
                    </div>
                    <div class="slider__controls">
                        <div class="slider__button-prev">
                            <img class="arrow-prev" src="{{asset('images/top/arrow-prev.png')}}">
                        </div>
                        <div class="slider__button-next">
                          <img class="arrow-prev two" src="{{asset('images/top/arrow-prev.png')}}">
                            {{-- <img class="arrow-next" src="{{asset('images/reason/arrow-next.png')}}"> --}}
                        </div>
                
                    </div>
              
                  </div>

                </div>
              </section>


              <section class="block-reason" id="p1">
                <div class="inner-reason">
                    <div class="title-block flex">
                        <dl class="dl-number">
                            <dt class="dt-number flex">
                                <p class="number"><span class="en">REASON</span><span class="text-number">01</span></p>
                                <p class="text-dt">介護ロボット・ICTの導入で<br>働く人の負担を軽減</p>
                            </dt>
                            <dd class="dd-number">
                                介護の現場では、働く人の負担が大きな課題です。<br class="pc-br">
当施設では、介護ロボットやICT技術を積極的に導入することで、作業の効率化や夜間見守りをサポートし、スタッフがより安心して働ける環境づくりを進めています。
                            </dd>
                        </dl>
                        <div class="img-box">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_ttl_01_sp.png')}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_ttl_01_pc.png')}} 2x">
                                <img class="sizes" src="{{asset('images/reason/reason_ttl_01_pc.png')}} 2x" alt="">
                              </picture>
                        </div>

                    </div>
                       
                     <ul class="list-reason flex">
                        <li class="item-reason">
                            <div class="img-box">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_pic_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_pic_01_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/reason/reason_pic_01_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <dl class="dl-list">
                                <dt class="dt-list">ICT導入で個々に合わせたケアが可能</dt>
                                <dd class="dd-list">眠りSCANという体動や呼吸、心拍を検出するものをマット下に敷き、入居者様の覚醒状況に合わせたケアの提供が可能になりました。</dd>
                            </dl>
                        </li>

                        <li class="item-reason">
                            <div class="img-box">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_pic_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_pic_02_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/reason/reason_pic_02_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <dl class="dl-list">
                                <dt class="dt-list">iPhoneを利用し介護記録が<br>簡単入力！</dt>
                                <dd class="dd-list">ケアごとに介護記録へ入力します。傷などが写真で保存することができるので、オンコール時や受診の際には役立っています。</dd>
                            </dl>
                        </li>

                        <li class="item-reason">
                            <div class="img-box">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_pic_03_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_pic_03_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/reason/reason_pic_03_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <dl class="dl-list">
                                <dt class="dt-list">寝たまま入れるドーム型ミスト浴</dt>
                                <dd class="dd-list">利用者様は温まりながら、すべすべのお肌で清潔を保つことができ、スタッフの入浴介助の負担も軽減します。</dd>
                            </dl>
                        </li>
                     </ul>

                  



                        <div class="box-meassge">
                            <!-- Hình ảnh cố định bên phải -->
                            <div class="image-wrapper">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_massge_icon_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_massge_icon_01_pc.png')}}">
                                    <img class="sizes image-float" src="{{asset('images/reason/reason_massge_icon_01_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <!-- Đoạn văn bản -->
                            <div class="text-content">
                              <h2><span class="badge">看護師</span> 特別養護老人ホーム あぶと健生苑</h2>
                              <p class="text">
                                利用者様の情報がどこでも入力・確認が行えま<br class ="sp-br">す。受診先でも入力が行えることで看護師同士はもちろん、他職種での情報交換がとても迅速になりました。写真の確認ができることで夜間のオン<br class="sp-br">
                                コールの出動も減少できています。ま<br class="sp-br">た夜間の睡眠状態も把握することがで<br class="sp-br">
                                き、日々のケアに役立てることができ<br class="sp-br">ています。
                              </p>
                              
                            </div>
                            <p class="text-en">STAFF VOICE</p>

                

                       </div>





                
                      



              </section>
              <section id="p2" class="" >






              </section>
              
              
              
                
        </main>

        {{--html埋め込み部分 end--}}














    </div>





    <script>
              
        $(function() {
            var mySwiperreason = new Swiper('#reason .mySwiper', {
                loop: true,
                speed: 1500000000000000000000000000000000000000000,
                aureasonlay: true,
                slidesPerView: 3,
                spaceBetween: 100,
                centeredSlides: false,
                simulateTouch: false,
                autoResize: false,
                autoHeight: false,
                loopAdditionalSlides: 2,
      
                breakpoints: {
                    767: {
                        speed: 1500,
                        slidesPerView: 1.5,
                        spaceBetween: 40,
                        centeredSlides: true,
                        simulateTouch: true,
                        navigation: {
                          nextEl: '.slider__button-next',
                          prevEl: '.slider__button-prev',
                      },
                    }
                },
            });
        
            console.log(mySwiperreason);
        
        
        });
        </script>



@endsection
