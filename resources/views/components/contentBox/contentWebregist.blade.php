<section id="webregist">
  <div class="inner-webregist js-fadein">

   <div class="bg-home">
    <picture class="image">
      <source media="(max-width: 767px)" srcset="{{asset('images/top/tour_bg_sp.png')}}">
      <source media="(min-width: 768px)" srcset="{{asset('images/top/tour_bg_pc.png')}}">
      <img class="sizes" src="{{asset('images/top/tour_bg_pc.png')}}" alt="">
     </picture>
   </div>




    <h2 class="title-webregist">
      <span class="text-image">
        <picture class="image">
          <source media="(max-width: 767px)" srcset="{{asset('images/top/text_tour_sp.png')}}">
          <source media="(min-width: 768px)" srcset="{{asset('images/top/text_tour_pc.png')}}">
          <img class="sizes" src="{{asset('images/top/text_tour_pc.png')}}" alt="">
         </picture>
      </span><br>
      <span class="ja-webregist">職場見学会</span>
    </h2>
    <h3 class="line-text">
      <span>まずは職場を実際に見てみませんか？</span>
    </h3>

    <div class="box-slider">
      <div class="slider mySwipertour">
          <ul class="list-slider swiper-wrapper">
              <li class="item-sdider swiper-slide">
                  <picture class="image">
                    <source media="(max-width: 767px)" srcset="{{asset('images/top/tour_slider_01_sp.png')}}">
                    <source media="(min-width: 768px)" srcset="{{asset('images/top/tour_slider_01_pc.png')}}">
                    <img class="sizes" src="{{asset('images/top/tour_slider_01_pc.png')}}" alt="">
                  </picture>
         
              </li>

              <li class="item-sdider swiper-slide">
                <picture class="image">
                  <source media="(max-width: 767px)" srcset="{{asset('images/top/tour_slider_02_sp.png')}}">
                    <source media="(min-width: 768px)" srcset="{{asset('images/top/tour_slider_02_pc.png')}}">
                    <img class="sizes" src="{{asset('images/top/tour_slider_02_pc.png')}}" alt="">
                </picture>
        
              </li>

              <li class="item-sdider swiper-slide">
                <picture class="image">
                  <source media="(max-width: 767px)" srcset="{{asset('images/top/tour_slider_03_sp.png')}}">
                    <source media="(min-width: 768px)" srcset="{{asset('images/top/tour_slider_03_pc.png')}}">
                    <img class="sizes" src="{{asset('images/top/tour_slider_03_pc.png')}}" alt="">
                </picture>
  
              </li>


          </ul>

      </div>
      <div class="slider__controls flex">
          <div class="slider-pagination"></div>
      </div>


    </div>


    <div class="box-link-top">
      <a  class="a-link webregist" href="{{Route('top')}}/webregist">詳しくはこちら</a>
     </div>

     <div class="icon-left">
      <picture class="image">
        <source media="(max-width: 767px)" srcset="{{asset('images/top/tour_icon_01_sp.png')}} 2x">
        <source media="(min-width: 768px)" srcset="{{asset('images/top/tour_icon_01_pc.png')}} 2x">
        <img class="sizes" src="{{asset('images/top/tour_icon_01_pc.png')}}" alt="">
       </picture>
     </div>
     <div class="icon-right">
      <picture class="image">
        <source media="(max-width: 767px)" srcset="{{asset('images/top/tour_icon_02_sp.png')}} 2x">
        <source media="(min-width: 768px)" srcset="{{asset('images/top/tour_icon_02_pc.png')}} 2x">
        <img class="sizes" src="{{asset('images/top/tour_icon_02_pc.png')}}" alt="">
       </picture>
     </div>

</div>
</section>



<script>

$(function() {
  var mySwiperTop = new Swiper('#webregist .mySwipertour', {
      loop: true,
      speed: 150000000000000000000000000000000000000000000000,
      autoplay: true,
      slidesPerView: 3,
      spaceBetween: 10,
      centeredSlides: false,
      simulateTouch: false,
      autoResize: false,
      autoHeight: false,
      loopAdditionalSlides: 2,
      pagination: {
                  el: '.slider-pagination',
                  clickable: true,
              },

      breakpoints: {
          767: {
              speed: 1500,
              slidesPerView: 1,
              spaceBetween: 0,
              centeredSlides: true,
              simulateTouch: true,
 
              //    pagination: {
              //     el: '.slider-pagination',
              //     clickable: true,
              // },
          }
      },
  });

  console.log(mySwiperTop);


});
</script>