<section id="recommendJob" class="recommendJob">
    <div class="recommendJobInner">
        <h2 class="recommendJobTitle">
            <span class="ja">新着の求人情報</span>
            <span class="en">NEW JOBS</span>
        </h2>
        <div class="recommendJobBox">

            <div id="recommendJobSlide" class="recommendJobSlide swiper-recommendJobSlide">

            </div>

            <button type="button" class="recommendJobButtonPrev">
                {{-- <i class="fas fa-angle-left"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="27.986" viewBox="0 0 16 27.986">
                    <path id="Icon_ionic-ios-arrow-back_l" data-name="Icon ionic-ios-arrow-back_l" d="M16.074,20.183,26.663,9.6A2,2,0,0,0,23.83,6.778l-12,11.989a2,2,0,0,0-.058,2.758L23.822,33.6a2,2,0,0,0,2.833-2.824Z" transform="translate(-11.251 -6.194)" fill="#fff"/>
                  </svg>
            </button>
            <button type="button" class="recommendJobButtonNext">
                {{-- <i class="fas fa-angle-right"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="27.986" viewBox="0 0 16 27.986">
                    <path id="Icon_ionic-ios-arrow-back_r" data-name="Icon ionic-ios-arrow-back_r" d="M16.074,20.183,26.663,9.6A2,2,0,0,0,23.83,6.778l-12,11.989a2,2,0,0,0-.058,2.758L23.822,33.6a2,2,0,0,0,2.833-2.824Z" transform="translate(27.251 34.18) rotate(180)" fill="#fff"/>
                  </svg>
            </button>
        </div>
    </div>
</section>

<script>
    $(function() {

        searchRecommendJob();

        function searchRecommendJob() {

            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('ajax.recommendJobs') }}",
                data: {},
            })
                .then((...args) => { // done
                    const [data, textStatus, jqXHR] = args;

                    let dataStr = data;

                    if(dataStr) {
                        let parent = document.getElementById('recommendJobSlide');
                        let div = document.createElement('div');
                        div.className = 'recommendJobList swiper-wrapper';
                        div.innerHTML = dataStr;

                        parent.append(div);
                        $('.recommendJob').show();

                        loadSwiperRecommend();
                    }

                })
                .catch((...args) => { // fail
                    const [jqXHR, textStatus, errorThrown] = args;
                });
        }

        function loadSwiperRecommend() {
            let mySwiperRecommend = new Swiper('.swiper-recommendJobSlide', {
                loop: true,
                effect: 'slide',
                speed: 900,
                slidesPerView: 3,
                spaceBetween: 30,
                centeredSlides: false,
                autoplay: {
                    delay: 3000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false,
                    reverseDirection: false
                },
                navigation: {
                    nextEl: '.recommendJobButtonNext',
                    prevEl: '.recommendJobButtonPrev'
                },
                breakpoints: {
                    767: {
                        slidesPerView: 1,
                        centeredSlides: true
                    }
                },
                simulateTouch: false,
                autoResize: true,
                autoHeight: false,
                resizeReInit: true,
                watchOverflow: true
            });
        }
    });
</script>
