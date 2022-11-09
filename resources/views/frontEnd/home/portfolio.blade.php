@extends('frontEnd.master')

@section('mainContent')
    <div id="wrapper">
        <!-- content -->
        <div class="content">
            <!--bottom-filter-wrap-->
            <div class="bottom-filter-wrap hor-filter-wrap">
                <div class="scroll-down-wrap">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                    <span>Scroll down to discover</span>
                </div>
                <div class="filter-title">Filters <i class="fal fa-long-arrow-right"></i></div>
                <div class="gallery-filters">
                    <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All</a>

                    <a href="#" class="gallery-filter" data-filter=".brand">Brand</a>
                    <a href="#" class="gallery-filter" data-filter=".food">Food</a>
                    <a href="#" class="gallery-filter" data-filter=".show">Show</a>

                </div>
                <div class="count-jpg round-counter">
                    <div class="num-album"></div>
                    <div class="all-album"></div>
                </div>
            </div>
            <!--bottom-filter-wrap end-->
            <div class="ff_panel-conainer fl-wrap">
                <!-- portjpg start -->
                <div class="gallery-items min-pad   four-column fl-wrap lightgallery">


                    <div class="gallery-item show">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P1.webp" class="lazy" alt="FrameGame 1">
                            <a href="images/services/P1.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Show</a></h3>

                            </div>
                        </div>
                    </div>
                    <!-- gallery-item-->
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P2.webp" class="lazy" alt="FrameGame 2">
                            <a href="images/services/P2.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>
                    <!-- gallery-item-->
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P3.webp" class="lazy" alt="FrameGame 3">
                            <a href="images/services/P3.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>


                    <div class="gallery-item band">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P4.webp" class="lazy" alt="FrameGame 4">
                            <a href="images/services/P4.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P5.webp" class="lazy" alt="FrameGame 5">
                            <a href="images/services/P5.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>



                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P6.webp" class="lazy" alt="FrameGame 6">
                            <a href="images/services/P6.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>


                    <!-- gallery-item-->
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P7.webp" class="lazy" alt="FrameGame 7">
                            <a href="images/services/P7.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>


                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P8.webp" class="lazy" alt="FrameGame 8">
                            <a href="images/services/P8.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P9.webp" class="lazy" alt="FrameGame 9">
                            <a href="images/services/P9.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P10.webp" class="lazy" alt="FrameGame 10">
                            <a href="images/services/P10.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P11.webp" class="lazy" alt="FrameGame 11">
                            <a href="images/services/P11.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item  Brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P12.webp" class="lazy" alt="FrameGame 12">
                            <a href="images/services/P12.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Food</a></h3>

                            </div>
                        </div>
                    </div>




















                    <div class="gallery-item show">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P13.webp" class="lazy" alt="FrameGame 13">
                            <a href="images/services/P13.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Show</a></h3>

                            </div>
                        </div>
                    </div>
                    <!-- gallery-item-->
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P14.webp" class="lazy" alt="FrameGame 14">
                            <a href="images/services/P14.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>
                    <!-- gallery-item-->
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P15.webp" class="lazy" alt="FrameGame 15">
                            <a href="images/services/P15.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>


                    <div class="gallery-item band">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P16.webp" class="lazy" alt="FrameGame 16">
                            <a href="images/services/P16.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P17.webp" class="lazy" alt="FrameGame 17">
                            <a href="images/services/P17.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>


                    <!-- gallery-item-->
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P18.webp" class="lazy" alt="FrameGame 18">
                            <a href="images/services/P18.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P19.webp" class="lazy" alt="FrameGame 19">
                            <a href="images/services/P19.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P20.webp" class="lazy" alt="FrameGame 20">
                            <a href="images/services/20.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/P20.webp" class="lazy" alt="FrameGame 20">
                            <a href="images/services/20.webp" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/21.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/21.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/22.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/22.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/23.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/23.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/24.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/24.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/25.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/25.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/26.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/26.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/27.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/27.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/28.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/28.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/29.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/29.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/30.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/30.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/31.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/32.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/33.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/33.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/34.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/34.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/35.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/35.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/36.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/36.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>

                    <div class="gallery-item brand">
                        <div class="grid-item-holder hov_zoom">
                            <img data-src="images/services/37.png" class="lazy" alt="FrameGame 20">
                            <a href="images/services/37.png" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <div class="thumb-info">
                                <h3><a href="#">Brand</a></h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="element">
        <div class="element-item"></div>
    </div>
@endsection
