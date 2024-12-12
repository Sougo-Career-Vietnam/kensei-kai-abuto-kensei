<section id="reason">
  <div class="commonInner js-fadein">
    <h2 class="contentHeading">
      <span class="ja">3つの働きやすい理由</span>
    </h2>
    <p class="note-reason">
      最新技術の導入や充実のサポート体制、手厚い待遇で働きやすさを実現しています。<br class="pc-br">
スタッフ一人ひとりが安心して成長できる職場です。
    </p>





    <div class="box-slider">
      <div class="slider mySwiper">
          <ul class="list-slider swiper-wrapper">
              <li class="item-sdider swiper-slide">
                  <picture class="image">
                    <source media="(max-width: 767px)" srcset="{{asset('images/top/reason_top_01_sp.png')}}">
                    <source media="(min-width: 768px)" srcset="{{asset('images/top/reason_top_01_pc.png')}}">
                    <img class="sizes" src="{{asset('images/top/reason_top_01_pc.png')}}" alt="">
                  </picture>
                  <dl class="dl-slider">
                    <dt class="dt-slider">ダイハツの想い編</dt>
                  </dl>   
              </li>

              <li class="item-sdider swiper-slide">
                <picture class="image">
                  <source media="(max-width: 767px)" srcset="{{asset('images/top/reason_top_02_sp.png')}}">
                  <source media="(min-width: 768px)" srcset="{{asset('images/top/reason_top_02_pc.png')}}">
                  <img class="sizes" src="{{asset('images/top/reason_top_02_pc.png')}}" alt="">
                </picture>
                <dl class="dl-slider">
                  <dt class="dt-slider">ダイハツの想い編</dt>
                </dl> 
              </li>

              <li class="item-sdider swiper-slide">
                <picture class="image">
                  <source media="(max-width: 767px)" srcset="{{asset('images/top/reason_top_03_sp.png')}}">
                  <source media="(min-width: 768px)" srcset="{{asset('images/top/reason_top_03_pc.png')}}">
                  <img class="sizes" src="{{asset('images/top/reason_top_03_pc.png')}}" alt="">
                </picture>
                <dl class="dl-slider">
                  <dt class="dt-slider">ダイハツの想い編</dt>
                </dl> 
              </li>


          </ul>


      </div>
      <div class="slider__controls flex">
          <div class="slider__button-prev">
              <img class="arrow-prev" src="{{asset('images/top/arrow-prev.png')}}">
          </div>
          <div class="slider__pagination"></div>
          <div class="slider__button-next">
              <img class="arrow-next" src="{{asset('images/top/arrow-next.png')}}">
          </div>
  
      </div>


  </div>






  </div>
</section>



<script>

  $(function() {
      var mySwiperTop = new Swiper('#reason .mySwiper', {
          loop: true,
          speed: 1500000000000000000000000000000000000000000,
          autoplay: true,
          slidesPerView: 3,
          spaceBetween: 100,
          centeredSlides: false,
          simulateTouch: false,
          autoResize: false,
          autoHeight: false,
          loopAdditionalSlides: 2,
          // pagination: {
          //     el: '.slider__pagination',
          //     clickable: true,
          // },
          // navigation: {
          //     nextEl: '.slider__button-next',
          //     prevEl: '.slider__button-prev',
          // },
  
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
  