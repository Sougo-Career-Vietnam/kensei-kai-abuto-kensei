@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="page-reason" class="notosanjk">

        {{--html埋め込み部分 start--}}
        <link rel="stylesheet" media="all" href="./css/reason.css"/>
        {{-- <script type="text/javascript" src="./js/page.js"></script> --}}
        <main id="main_wrap">
            <section id="reason">
                <h2 class="title-reason">
                    <span class="ja">3つの働きやすい理由</span>
                </h2>
                <div class="commonInner-slider js-fadein">
                  <div class="box-slider mobi">
                    <div class="slider mySwiper">
                        <ul class="list-slider swiper-wrapper">
                            <li class="item-sdider swiper-slide">
                            <a href="#p1" class="scroll">
                              <p class="number-reason">01</p>
                                <picture class="image-p">
                                  <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_01_sp.png')}}">
                                  <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_01_pc.png')}}">
                                  <img class="sizes" src="{{asset('images/reasonreason_01_pc.png')}}" alt="">
                                </picture>
                                <dl class="dl-slider">
                                  <dt class="dt-slider">介護ロボット<br class="pc-br">ICT導入</dt>
                                  <dd class="dd-slider">最新技術で効率化や負担軽減し、<br>
                                    働きやすさをサポートします。</dd>
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
                                <picture class="image-p">
                                  <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_02_sp.png')}}">
                                  <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_02_pc.png')}}">
                                  <img class="sizes" src="{{asset('images/reason/reason_02_pc.png')}}" alt="">
                                </picture>
                                <dl class="dl-slider">
                                  <dt class="dt-slider">未経験の方への<br class="pc-br">フォロー体制</dt>
                                  <dd class="dd-slider">研修や勉強会で基礎から学び、<br>
                                    安心して働くことができます。</dd>
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
                                <picture class="image-p">
                                  <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_03_sp.png')}}">
                                  <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_03_pc.png')}}">
                                  <img class="sizes" src="{{asset('images/reason/reason_03_pc.png')}}" alt="">
                                </picture>
                                <dl class="dl-slider">
                                  <dt class="dt-slider">給与と手当の<br class="pc-br">手厚い還元</dt>
                                  <dd class="dd-slider">安定した収入と充実の手当で<br class="sp-br">長く働ける<br class="pc-br">
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
                        </div>
                    </div>
                  </div>
                  <div class="box-slider destop">
                    <div class="slider">
                        <ul class="list-slider flex">
                            <li class="item-sdider pc">
                            <a href="#p1" class="scroll">
                              <p class="number-reason">01</p>
                                <picture class="image-p">
                                  <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_01_sp.png')}}">
                                  <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_01_pc.png')}}">
                                  <img class="sizes" src="{{asset('images/reasonreason_01_pc.png')}}" alt="">
                                </picture>
                                <dl class="dl-slider">
                                  <dt class="dt-slider">介護ロボット<br class="pc-br">ICT導入</dt>
                                  <dd class="dd-slider">最新技術で効率化や負担軽減し、<br>
                                    働きやすさをサポートします。</dd>
                                    <dd class="dd-icon">
                                      <picture class="image">
                                        <source  srcset="{{asset('images/top/slider_icon_01.svg')}}">
                                        <img class="sizes" src="{{asset('images/top/slider_icon_01.svg')}}" alt="">
                                      </picture>
                                    </dd>
                                </dl>   
                            </a>
                            </li>
                            <li class="item-sdider two pc">
                                <a href="#p2" class="scroll">
                              <p class="number-reason">02</p>
                                <picture class="image-p">
                                  <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_02_sp.png')}}">
                                  <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_02_pc.png')}}">
                                  <img class="sizes" src="{{asset('images/reason/reason_02_pc.png')}}" alt="">
                                </picture>
                                <dl class="dl-slider">
                                  <dt class="dt-slider">未経験の方への<br class="pc-br">フォロー体制</dt>
                                  <dd class="dd-slider">研修や勉強会で基礎から学び、<br>
                                    安心して働くことができます。</dd>
                                    <dd class="dd-icon">
                                      <picture class="image">
                                        <source  srcset="{{asset('images/top/slider_icon_02.svg')}}">
                                        <img class="sizes" src="{{asset('images/top/slider_icon_02.svg')}}" alt="">
                                      </picture>
                                    </dd>
                                </dl>   
                            </a>
                            </li>
                            <li class="item-sdider three pc">
                                <a href="#p3" class="scroll">
                              <p class="number-reason">03</p>
                                <picture class="image-p">
                                  <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_03_sp.png')}}">
                                  <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_03_pc.png')}}">
                                  <img class="sizes" src="{{asset('images/reason/reason_03_pc.png')}}" alt="">
                                </picture>
                                <dl class="dl-slider">
                                  <dt class="dt-slider">給与と手当の<br class="pc-br">手厚い還元</dt>
                                  <dd class="dd-slider">安定した収入と充実の手当で<br class="sp-br">長く働ける<br class="pc-br">
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
   
                </div>
            </section>

              <div class="content-main">
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
                                  <dt class="dt-list">iPhoneを利用し介護記録が<br class="pc-br">簡単入力！</dt>
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
                            <div class="image-wrapper">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_massge_icon_01_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_massge_icon_01_pc.png')}}">
                                    <img class="sizes image-float" src="{{asset('images/reason/reason_massge_icon_01_pc.png')}}" alt="">
                                  </picture>
                            </div>
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
  
                <section class="block-reason" id="p2">
                  <div class="inner-reason">
                      <div class="title-block flex">
                          <dl class="dl-number">
                              <dt class="dt-number flex">
                                  <p class="number"><span class="en">REASON</span><span class="text-number">02</span></p>
                                  <p class="text-dt">研修や勉強会など<br class="pc-br">未経験の方でも<br class="sp-br">安心のフォロー体制</p>
                              </dt>
                              <dd class="dd-number">
                                未経験から介護に挑戦する方にも安心して働いていただけるよう、当施設では充実した研修制度や定期的な勉強会を用意しています。基礎知識から現場で役立つスキルまで、先輩スタッフが丁寧にサポート。困ったことがあればすぐに相談できる体制を整え、安心して成長していける環境を整えています。介護の仕事に必要な知識と技術を一から学びながら、自信を持って働けるようフォローしていきます。
                              </dd>
                          </dl>
                          <div class="img-box">
                              <picture class="image">
                                  <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_ttl_02_sp.png')}} 2x">
                                  <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_ttl_02_pc.png')}} 2x">
                                  <img class="sizes" src="{{asset('images/reason/reason_ttl_02_pc.png')}} 2x" alt="">
                                </picture>
                          </div>
  
                      </div>
                         
                       <ul class="list-reason flex">
                          <li class="item-reason">
                              <div class="img-box">
                                  <picture class="image">
                                      <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_pic_04_sp.png')}}">
                                      <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_pic_04_pc.png')}}">
                                      <img class="sizes" src="{{asset('images/reason/reason_pic_04_pc.png')}}" alt="">
                                    </picture>
                              </div>
                              <dl class="dl-list">
                                  <dt class="dt-list">先輩の手厚いサポート</dt>
                                  <dd class="dd-list">未経験の方でもベテランの先輩がサポートしますので安心して働いていただけます。（具体的なサポート内容があればご記載ください）</dd>
                              </dl>
                          </li>
  
                          <li class="item-reason">
                              <div class="img-box">
                                  <picture class="image">
                                      <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_pic_05_sp.png')}}">
                                      <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_pic_05_pc.png')}}">
                                      <img class="sizes" src="{{asset('images/reason/reason_pic_05_pc.png')}}" alt="">
                                    </picture>
                              </div>
                              <dl class="dl-list">
                                  <dt class="dt-list">研修会の実施</dt>
                                  <dd class="dd-list">実務者研修や専門知識を磨く研修会を定期的に実施しています。また、外部研修の参加なども。</dd>
                              </dl>
                          </li>
  
                          <li class="item-reason">
                              <div class="img-box">
                                  <picture class="image">
                                      <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_pic_06_sp.png')}}">
                                      <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_pic_06_pc.png')}}">
                                      <img class="sizes" src="{{asset('images/reason/reason_pic_06_pc.png')}}" alt="">
                                    </picture>
                              </div>
                              <dl class="dl-list">
                                  <dt class="dt-list">資格取得支援制度</dt>
                                  <dd class="dd-list">資格がなく未経験でこれから介護のお仕事をお考えの方に資格取得をサポートします。</dd>
                              </dl>
                          </li>
                       </ul>
  
                        <div class="box-meassge">
                            <div class="image-wrapper">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_massge_icon_02_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_massge_icon_02_pc.png')}}">
                                    <img class="sizes image-float" src="{{asset('images/reason/reason_massge_icon_02_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <div class="text-content">
                              <h2><span class="badge">介護職員</span>特別養護老人ホームあぶと健生苑</h2>
                              <p class="text">
                                私は5年前に技能実習生としてベトナムから来ました。施設から多くのサポートを受け日本語能力検定のN3、N2を取得することができました。特定技能1号で継続して働いています。実務者研修の取得を経て今は2025年の1月の介護福祉士の受験に向けて受験対策の研修を受講中です。<br class="sp-br">
                                こうしたサポートは介護の仕事にやり<br class="sp-br">がいを感じ努力を続ける大きな励みと<br class="sp-br">なっています。
                              </p>
                              
                            </div>
                            <p class="text-en">STAFF VOICE</p>
  
                      </div>
                </section>
  
                <section class="block-reason" id="p3">
                  <div class="inner-reason">
                      <div class="title-block flex">
                          <dl class="dl-number">
                              <dt class="dt-number flex">
                                  <p class="number"><span class="en">REASON</span><span class="text-number">03</span></p>
                                  <p class="text-dt">安定した経営基盤で、<br>手厚い給与と手当を還元</p>
                              </dt>
                              <dd class="dd-number">
                                当施設は安定した経営基盤のもと、スタッフに手厚い給与と充実した手当を提供しています。地域に根ざした施設として多くの方々に信頼され、長期的に安心して働ける環境づくりを重視しています。資格手当や夜勤手当など、スタッフの頑張りをしっかり評価し報酬で還元。安定した収入を得ながら、介護の現場で自分らしく働き続けることができる職場です。
                              </dd>
                          </dl>
                          <div class="img-box">
                              <picture class="image">
                                  <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_ttl_03_sp.png')}} 2x">
                                  <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_ttl_03_pc.png')}} 2x">
                                  <img class="sizes" src="{{asset('images/reason/reason_ttl_03_pc.png')}} 2x" alt="">
                                </picture>
                          </div>
  
                      </div>
                      <div class="box-galary">
                        <h3 class="title-galary">給与・手当例</h3>
                        <ul class="list-galary flex">
                      
                             <li class="item-galary">
                              <div class="info-box">
                                <div class="flex top-title">
                                  <p> <span class="age">30歳</span><span class="role">介護福祉士</span></p>
                                  <p> <span class="total">合計</span><span class="total-big">272,600</span><span><span class="total">円</span><span class="total-samll">＋ 通勤手当</span></p>
                                </div>
                                <p class="note">※ 休まず月5回夜勤をした場合</p>
                              </div>

                              <div class="info-galary flex">
                                <ul class="left">
                                  <li class="item-left flex">
                                    <p class="text-galary">基本給</p>
                                    <p class="text-galary">160,100円</p>
                                  </li>
                                  <li class="item-left flex">
                                    <p class="text-galary">処遇改善手当</p>
                                    <p class="text-galary">45,000円</p>
                                  </li>
                                  <li class="item-left flex">
                                    <p class="text-galary">処遇改善支援補助金</p>
                                    <p class="text-galary">7,000円</p>
                                  </li>
                                  <li class="item-left flex">
                                    <p class="text-galary">皆勤手当</p>
                                    <p class="text-galary">5,000円</p>
                                  </li>
                                </ul>
                                <ul class="right">
                                  <li class="item-left flex">
                                    <p class="text-galary">資格手当</p>
                                    <p class="text-galary">5,000円</p>
                                  </li>
                                  <li class="item-left flex">
                                    <p class="text-galary">特定処遇改善手当</p>
                                    <p class="text-galary">23,000円</p>
                                  </li>
                                  <li class="item-left flex">
                                    <p class="text-galary">夜勤手当</p>
                                    <p class="text-galary">27,500円</p>
                                  </li>
                                </ul>
                              </div>
                             </li>
                       
               
                             <li class="item-galary">
                              <div class="info-box">
                                <div class="flex top-title">
                                  <p> <span class="age">40歳</span><span class="role">看護師</span></p>
                                  <p> <span class="total">合計</span><span class="total-big">243,000</span><span><span class="total">円</span><span class="total-samll">＋ 通勤手当</span></p>
                                </div>
                                <p class="note">※休まずオンコール月6回した場合</p>
                              </div>

                              <div class="info-galary flex">
                                <ul class="left">
                                  <li class="item-left flex">
                                    <p class="text-galary">基本給</p>
                                    <p class="text-galary"> 217,650円</p>
                                  </li>
                                  <li class="item-left flex">
                                    <p class="text-galary">オンコール手当</p>
                                    <p class="text-galary">6,000円</p>
                                  </li>

                                </ul>
                                <ul class="right">
                                  <li class="item-left flex">
                                    <p class="text-galary">資格手当</p>
                                    <p class="text-galary">15,000円</p>
                                  </li>
                                  <li class="item-left flex">
                                    <p class="text-galary">皆勤手当</p>
                                    <p class="text-galary"> 5,000円</p>
                                  </li>
                   
                                </ul>

                              </div>
                             </li>
                       
                        </ul>


                      </div>


  
                      <div class="box-meassge">
                            <!-- Hình ảnh cố định bên phải -->
                            <div class="image-wrapper">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/reason/reason_massge_icon_03_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/reason/reason_massge_icon_03_pc.png')}}">
                                    <img class="sizes image-float" src="{{asset('images/reason/reason_massge_icon_03_pc.png')}}" alt="">
                                  </picture>
                            </div>
                            <!-- Đoạn văn bản -->
                            <div class="text-content">
                              <h2><span class="badge">介護福祉士</span>特別養護老人ホームあぶと健生苑</h2>
                              <p class="text">
                                私は他職種からあぶと健生苑に転職しました。以前は介護職員の給料は安いと言われていましたが、各種手当や昇給制度等により安定した収入がありました。未経験からでもきちんと指導してもらえ不安なく安心して仕事に専念でき<br class="sp-br">ています。資格を取得するとそれに見<br class="sp-br">合った給料がいただけるのでやりがい<br class="sp-br">にもなっています。
                              </p>
                              
                            </div>
                            <p class="text-en">STAFF VOICE</p>
  
                      </div>
                </section>
                
              </div>


              
              
                
        </main>

        {{--html埋め込み部分 end--}}


    </div>


<script>

  $(function() {
      var mySwiperTop = new Swiper('#reason .mySwiper', {
          loop: true,
          speed: 15000000000000000000000000000000000000000000000,
          slidesPerView: 3,
          spaceBetween: 100,
          centeredSlides: false,
          simulateTouch: false,
          autoResize: true,
          autoHeight: false,
          loopAdditionalSlides: 2,
          autoplay: {
                    delay: 3000,// スライド間の間隔（3000=3秒）
             
                },
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
  
      console.log(mySwiperTop);
  
  
  });
  </script>

@endsection
