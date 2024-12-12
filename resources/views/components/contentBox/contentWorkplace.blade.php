<div id="workplace">
  <div class="commonInner js-fadein">
    <h2 class="contentHeading">
      <span class="ja">職場紹介</span>
      <span class="en">WORKPLACE</span>
    </h2>



    <div class="box-slider">
      <div class="slider mySwipertour">
          <ul class="list-slider swiper-wrapper">
              <li class="item-sdider swiper-slide">
                  <picture class="image">
                    <source media="(max-width: 767px)" srcset="{{asset('images/top/tour_slider_01_sp.png')}}">
                    <source media="(min-width: 768px)" srcset="{{asset('images/top/tour_slider_01_pc.png')}}">
                    <img class="sizes" src="{{asset('images/top/tour_slider_01_pc.png')}}" alt="">
                  </picture>
                  <dl class="dl-slider">
                    <dt class="dt-slider">ダイハツの想い編</dt>
                  </dl>   
              </li>

              <li class="item-sdider swiper-slide">
                <picture class="image">
                  <source media="(max-width: 767px)" srcset="{{asset('images/top/tour_slider_02_sp.png')}}">
                    <source media="(min-width: 768px)" srcset="{{asset('images/top/tour_slider_02_pc.png')}}">
                    <img class="sizes" src="{{asset('images/top/tour_slider_02_pc.png')}}" alt="">
                </picture>
                <dl class="dl-slider">
                  <dt class="dt-slider">ダイハツの想い編</dt>
                </dl> 
              </li>

              <li class="item-sdider swiper-slide">
                <picture class="image">
                  <source media="(max-width: 767px)" srcset="{{asset('images/top/tour_slider_03_sp.png')}}">
                    <source media="(min-width: 768px)" srcset="{{asset('images/top/tour_slider_03_pc.png')}}">
                    <img class="sizes" src="{{asset('images/top/tour_slider_03_pc.png')}}" alt="">
                </picture>
                <dl class="dl-slider">
                  <dt class="dt-slider">ダイハツの想い編</dt>
                </dl> 
              </li>


          </ul>


      </div>
      <div class="slider__controls flex">
     
          <div class="slider__pagination"></div>
  
  
      </div>


  </div>


























  </div>
</div>



<script>

  $(function() {
      var mySwiperTop = new Swiper('#workplace .mySwipertour', {
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

  
          breakpoints: {
              767: {
                  speed: 1500,
                  slidesPerView: 1,
                  spaceBetween: 0,
                  centeredSlides: true,
                  simulateTouch: true,
     
                     pagination: {
                      el: '.slider__pagination',
                      clickable: true,
                  },
              }
          },
      });
  
      console.log(mySwiperTop);
  
  
  });
  </script>