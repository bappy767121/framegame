@extends('frontEnd.master')

@section('mainContent')
    <div id="wrapper">
        <!--content -->
        <div class="content full-height  hidden-item no-mob-hidden">
            <!-- fw-carousel-wrap -->
            <div class="fw-carousel-wrap fsc-holder">
                <!-- fw-carousel  -->
                <div class="fw-carousel  fs-gallery-wrap fl-wrap full-height lightgallery" data-mousecontrol="true">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom">
                                <img data-src="{{asset('public/frontEnd/')}}/images/bg/H1.webp" class="lazy" alt="">
                                <a href="{{asset('public/frontEnd/')}}/images/bg/H1.webp" class="box-media-zoom   popup-image"><i
                                        class="fal fa-search"></i></a>

                            </div>
                            <!-- swiper-slide end-->
                            <div class="swiper-slide hov_zoom">
                                <img data-src="{{asset('public/frontEnd/')}}/images/bg/H4.webp" class="lazy" alt="">
                                <a href="{{asset('public/frontEnd/')}}/images/bg/H4.webp" class="box-media-zoom   popup-image"><i
                                        class="fal fa-search"></i></a>

                            </div>



                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom">
                                <img data-src="{{asset('public/frontEnd/')}}/images/bg/H2.webp" class="lazy" alt="">
                                <a href="{{asset('public/frontEnd/')}}/images/bg/H2.webp" class="box-media-zoom   popup-image"><i
                                        class="fal fa-search"></i></a>

                            </div>
                            <div class="swiper-slide hov_zoom">
                                <img data-src="{{asset('public/frontEnd/')}}/images/bg/H9.png" class="lazy" alt="">
                                <a href="{{asset('public/frontEnd/')}}/images/bg/H9.png" class="box-media-zoom   popup-image"><i
                                        class="fal fa-search"></i></a>

                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom">
                                <img data-src="{{asset('public/frontEnd/')}}/images/bg/H3.webp" class="lazy" alt="">
                                <a href="{{asset('public/frontEnd/')}}/images/bg/H3.webp" class="box-media-zoom   popup-image"><i
                                        class="fal fa-search"></i></a>

                            </div>
                            <div class="swiper-slide hov_zoom">
                                <img data-src="{{asset('public/frontEnd/')}}/images/bg/H8.png" class="lazy" alt="">
                                <a href="{{asset('public/frontEnd/')}}/images/bg/H8.png" class="box-media-zoom   popup-image"><i
                                        class="fal fa-search"></i></a>

                            </div>


                        </div>
                    </div>
                </div>
                <!-- fw-carousel end -->
            </div>
            <!--slider-counter-->
            <div class="slider-counter_wrap">
                <div class="fw-carousel-counter"></div>
            </div>
            <!--slider-counter end-->
            <!--bottom-panel-->
            <div class="bottom-panel">
                <div class="bottom-panel-column bottom-panel-column_left">
                    <div class="scroll-down-wrap">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                        <span>Scroll down or Swipe</span>
                    </div>
                    <div class="fs-controls_wrap">
                        <div class="fw_cb fw-carousel-button-prev"><i class="fal fa-angle-left"></i></div>
                        <div class="fw_cb fw-carousel-button-next"><i class="fal fa-angle-right"></i></div>
                    </div>
                </div>
                <div class="bottom-panel-column bottom-panel-column_right">
                    <div class="half-scrollbar">
                        <div class="hs_init"></div>
                    </div>
                </div>
            </div>
            <!--bottom-panel end-->
        </div>
        <!--content end-->
        <!--share-wrapper-->

        <!--share-wrapper end-->
    </div>



    <!-- cursor end-->
    </div>
@endsection
