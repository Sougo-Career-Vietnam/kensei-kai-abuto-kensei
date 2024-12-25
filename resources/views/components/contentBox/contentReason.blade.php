<section id="reason">
  <div class="commonInner-slider js-fadein">
    <h2 class="contentHeading">
      <span class="ja">3つの働きやすい理由</span>
    </h2>
    <p class="note-reason">
      最新技術の導入や充実のサポート体制、手厚い待<br class="sp-br">遇で働きやすさを実現しています。<br class="pc-br">
スタッフ一人<br class="sp-br">ひとりが安心して成長できる職場です。
    </p>

    <div class="box-slider">
      <div class="slider mySwiper">
          <ul class="list-slider swiper-wrapper">
              <li class="item-sdider swiper-slide">
                <p class="number-reason">01</p>
                  <picture class="image">
                    <source media="(max-width: 767px)" srcset="{{asset('images/top/reason_top_01_sp.png')}}">
                    <source media="(min-width: 768px)" srcset="{{asset('images/top/reason_top_01_pc.png')}}">
                    <img class="sizes" src="{{asset('images/top/reason_top_01_pc.png')}}" alt="">
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
              </li>
              <li class="item-sdider swiper-slide two">
                <p class="number-reason">02</p>
                  <picture class="image">
                    <source media="(max-width: 767px)" srcset="{{asset('images/top/reason_top_02_sp.png')}}">
                    <source media="(min-width: 768px)" srcset="{{asset('images/top/reason_top_02_pc.png')}}">
                    <img class="sizes" src="{{asset('images/top/reason_top_02_pc.png')}}" alt="">
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
              </li>
              <li class="item-sdider swiper-slide three">
                <p class="number-reason">03</p>
                  <picture class="image">
                    <source media="(max-width: 767px)" srcset="{{asset('images/top/reason_top_03_sp.png')}}">
                    <source media="(min-width: 768px)" srcset="{{asset('images/top/reason_top_03_pc.png')}}">
                    <img class="sizes" src="{{asset('images/top/reason_top_03_pc.png')}}" alt="">
                  </picture>
                  <dl class="dl-slider">
                    <dt class="dt-slider">給与と手当の<br class="pc-br">手厚い還元</dt>
                    <dd class="dd-slider">安定した収入と充実の手当で<br class="sp-br">長く働ける<br class="pc-br">
                      環境づくりに<br class="sp-br">努めています。</dd>
                      <dd class="dd-icon">
                        <picture class="image">
                          <source  srcset="{{asset('images/top/slider_icon_03.svg')}}">
                          <img class="sizes" src="{{asset('images/top/slider_icon_03.svg')}}" alt="">
                        </picture>
                      </dd>
                  </dl>   
              </li>
          </ul>


      </div>
      <div class="slider__controls flex">
          <div class="slider__button-prev">
              <img class="arrow-prev" src="{{asset('images/top/arrow-prev.png')}}">
          </div>
          <div class="slider__button-next">
            <img class="arrow-prev two" src="{{asset('images/top/arrow-prev.png')}}">
          </div>
  
      </div>

    </div>
     <div class="box-link-top">
      <a  class="a-link" href="{{Route('top')}}/reason">もっと見る</a>
     </div>

  </div>
</section>



<script>

  $(function() {
      var mySwiperTop = new Swiper('#reason .mySwiper', {
          loop: true,
          speed: 15000000000000000000000000000000000000000000000,
          autoplay: true,
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
  
      console.log(mySwiperTop);
  
  
  });
  </script>
  