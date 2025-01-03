<?php
$sliderImgList = array(
    'pc' => array(
//        'mv_movie_pc.mp4',
        'top_img_main_01_pc.png',
        'top_img_main_02_pc.png',
        'top_img_main_03_pc.png',
    ),
    'tb' => array(
//        'mv_movie_sp.mp4',
        'top_img_main_01_tb.png',
        'top_img_main_02_tb.png',
        'top_img_main_03_tb.png',
    ),
    'sp' => array(
//        'mv_movie_sp.mp4',
        'top_img_main_01_sp.png',
        'top_img_main_02_sp.png',
        'top_img_main_03_sp.png',
    ),
);
$mvCatchCopy = '';//メインビジュアルのキャッチコピーを「''」内に入力してください
?>

@if(($sliderImgList['pc'] && count($sliderImgList['pc']) > 0) || ($sliderImgList['sp'] && count($sliderImgList['sp']) > 0)|| ($sliderImgList['tb'] && count($sliderImgList['tb']) > 0))
<div class="flex-slider">
        <p class="vertical-text-01"> 地 域 の 安 心 に つ な が る</p>
        <p class="vertical-text-02">あ な た の 笑 顔 が 、</p>
<div id="mvSlider">
    <div class="mvWrapper">
        <div class="mvInner">
            <?php
            $imgListPc = $sliderImgList['pc'];
            $imgListSp = $sliderImgList['sp'];
            $imgListtb = $sliderImgList['tb'];
            ?>
           <?php if (count($imgListPc) == 1): ?>
           <div class="mvOnlyOne">
               <picture>
                   <source media="(max-width: 767px)" srcset="{{asset('images/mvSlider/'. $imgListSp[0])}}">
                   <source media="(min-width: 768px) and (max-width: 1500px)" srcset="{{asset('images/mvSlider/'. $imgListtb[0])}}">
                   <source media="(min-width: 1500px)" srcset="{{asset('images/mvSlider/'. $imgListPc[0])}}">
                   <img class="mvPicture" src="{{asset('images/mvSlider/'. $imgListPc[0])}}" alt="<?php echo $mvCatchCopy; ?>">
               </picture>
           </div>
           <?php elseif (count($imgListPc) > 1): ?>
           <div class="mvMultiple js-mvSlider">
               <div class="swiper-wrapper">
                   <?php foreach ($imgListPc as $key => $imgName): ?>
                   <div class="swiper-slide">
                       <picture>
                           <source media="(max-width: 767px)" srcset="{{asset('images/mvSlider/'. $imgListSp[$key])}} 2x">
                           <source media="(min-width: 768px) and (max-width: 1500px)" srcset="{{asset('images/mvSlider/'. $imgListtb[$key])}} 2x">
                           <source media="(min-width: 1500px)" srcset="{{asset('images/mvSlider/'. $imgName)}} 2x">
                           <img class="mvPicture" src="{{asset('images/mvSlider/'. $imgName)}}" alt="<?php echo $mvCatchCopy; ?>">
                       </picture>
                   </div>
                   <?php endforeach; ?>
               </div>
               <!-- Thanh dots -->
               <div class="swiper-pagination"></div>
           </div>
           <?php endif; ?>
           
        </div>
    </div>

    <script>
        $(function () {
            var mySwiperTop = new Swiper('#mvSlider .js-mvSlider', {
                loop: true,
                effect: 'fade',
                speed: 1500,
                autoplay: {
                    delay: 1500,
                    stopOnLastSlide: false,
                    disableOnInteraction: false,
                    reverseDirection: false
                },
                pagination: {
                    el: '.swiper-pagination', // Định nghĩa selector cho pagination
                    clickable: true,          // Cho phép click vào bullets
                    renderBullet: function (index, className) {
                        return '<span class="' + className + ' custom-bullet"></span>';
                    }
                },

                breakpoints: {
                    767: {
                        speed: 1500,
                        autoplay: {
                            delay: 1500,
                        }
                    }
                },
                slidesPerView: 1,
                spaceBetween: 0,
                centeredSlides: false,
                simulateTouch: false,
                autoResize: false,
                autoHeight: false,
                resizeReInit: true,
                watchOverflow: true
            });
            // Sự kiện click vào slide
        $('#mvSlider .swiper-slide').on('click', function () {
            var index = $(this).index(); // Lấy vị trí của slide được click
            mySwiperTop.slideToLoop(index); // Chuyển đến slide tương ứng (hỗ trợ loop)
        });
        });
    </script>
</div>

</div>
@endif












