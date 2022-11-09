@extends('frontEnd.master')

@section('mainContent')
    <style>
        .bg {
            transform: scale(1.7);
        }

        @media only screen and (max-width: 600px) {
            .bg {
                transform: scale(1.2);
            }
        }
    </style>

    <div id="wrapper">
        <!-- content -->
        <div class="content">
            <!-- column-image  -->
            <div class="column-image">
                <div class="bg">
                    <video id="myVideo" autoplay muted loop>
                        <source src="images/bg/FGS.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="overlay"></div>
                <div class="column-title">
                    <!--<h2>About Us</h2> -->

                </div>
                <div class="column-notifer">
                    <div class="scroll-down-wrap transparent_sdw">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                        <span>Scroll down to Discover</span>
                    </div>
                </div>
                <div class="fixed-column-dec"></div>
            </div>
            <!-- column-image end  -->
            <!-- column-wrapper -->
            <div class="column-wrapper">
                <div class="scroll-nav-wrap">
                    <nav class="scroll-nav scroll-init">
                        <ul>
                            <li><a class="act-scrlink" href="#sec1">About</a></li>
                            <li><a href="#sec2">Inception</a></li>
                            <li><a href="#sec3">Mission</a></li>
                            <li><a href="#sec4">Gamers</a></li>
                        </ul>
                    </nav>
                </div>
                <!--section  -->
                <section id="sec1">
                    <div class="container small-container">
                        <div class="section-title fl-wrap">
                            <h3>About Frame Game</h3>

                            <div class="section-number">01.</div>
                        </div>
                        <div class="column-wrapper_item fl-wrap">
                            <div class="column-wrapper_text fl-wrap">
                                <p>Frame Game Studio is an interactive concern to provide one stop professional solution by
                                    integrating Art Direction support, Creative team support, Business Development support,
                                    and a large array of photography and videography service through its versatile team of
                                    experienced Art Director, Professional Photographer, Creative Team, Business Development
                                    Team. It started its journey in September of 2022 with an objective to deliver the next
                                    level service to clients through blending creativity and technological advancement.</p>

                                <a href="portfolio.php" class="btn fl-btn">Our Portfolio</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section>

                    <div class="container small-container" id="sec2">
                        <div class="section-title fl-wrap">
                            <h3>The Inception</h3>

                            <div class="section-number">02.</div>
                            <div class="column-wrapper_item fl-wrap">
                                <div class="column-wrapper_text fl-wrap">
                                    <p>This modernized studio began its journey on September 1, 2022. Since then, this
                                        studio has been working hard to deliver only the best.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>








                    <div class="container small-container" id="sec3">
                        <div class="section-title fl-wrap">
                            <h3>The Mission</h3>

                            <div class="section-number">03.</div>

                            <div class="column-wrapper_item fl-wrap">
                                <div class="column-wrapper_text fl-wrap">
                                    <p>With a vow of excelling excellence relentlessly to provide only the best quality
                                        service to clients this dynamic team is working relentlessly. Our eagle focus is on
                                        taking product photography to the next level in order to keep pace with the global
                                        standard.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>









                    <div class="container small-container">
                        <div class="section-title fl-wrap">
                            <h3>The Vision</h3>

                            <div class="section-number">04.</div>
                            <div class="column-wrapper_item fl-wrap">
                                <div class="column-wrapper_text fl-wrap">
                                    <p>Our vision is to be the pioneer of introducing a unique blend of creativity and
                                        latest technological innovations through implementation in photography and
                                        videography.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>


                </section>




                <section id="sec4">
                    <div class="container small-container">
                        <div class="section-title fl-wrap">
                            <h3>Gamers</h3>

                            <div class="section-number">05.</div>
                        </div>
                        <div class="column-wrapper_item fl-wrap">
                            <div class="column-wrapper_text fl-wrap">
                                <div class="testilider fl-wrap" data-effects="slide">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!-- swiper-slide -->

                                            <div class="swiper-slide">
                                                <a href="asif.php" target="_blank">
                                                    <div class="testi-item fl-wrap">
                                                        <div class="testi-avatar"><img class="lazy"
                                                                data-src="images/avatar/Asif.webp" alt=""></div>
                                                        <h3>Asif Chowdhury </h3>
                                                        <p style="font-style: normal;">Founder & Art Director</p>


                                                    </div>
                                                </a>
                                            </div>


                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <div class="testi-avatar"><img class="lazy"
                                                            data-src="images/avatar/Moin.webp" alt=""></div>
                                                    <h3>Moin Khan</h3>
                                                    <p style="font-style: normal;">Founder & CEO</p>

                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <a href="robin.php" target="_blank">
                                                    <div class="testi-item fl-wrap">
                                                        <div class="testi-avatar"><img class="lazy"
                                                                data-src="images/avatar/alamin.webp" alt=""></div>
                                                        <h3>Al Amin Robin </h3>
                                                        <p style="font-style: normal;">Cheif Photographer</p>


                                                    </div>
                                                </a>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <div class="testi-avatar"><img class="lazy"
                                                            data-src="images/avatar/Sadman.webp" alt=""></div>
                                                    <h3>Sadman Hasan </h3>
                                                    <p style="font-style: normal;">Project Coordinator</p>

                                                </div>
                                            </div>




                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <div class="testi-avatar"><img class="lazy"
                                                            data-src="images/avatar/Adiba.webp" alt=""></div>
                                                    <h3>Adeeba Afroj</h3>
                                                    <p style="font-style: normal;">Executive, Business Development</p>

                                                </div>
                                            </div>




                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <div class="testi-avatar"><img class="lazy"
                                                            data-src="images/avatar/Saikat.webp" alt=""></div>
                                                    <h3>Saikat Adhikary </h3>
                                                    <p style="font-style: normal;">Visualizer</p>

                                                </div>
                                            </div>



                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <div class="testi-avatar"><img class="lazy"
                                                            data-src="images/avatar/Zami.webp" alt=""></div>
                                                    <h3>Zami Khan</h3>
                                                    <p style="font-style: normal;">Visualizer</p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testilider-controls">
                                <div class="ss-slider-btn ss-slider-prev color-bg"><i class="fal fa-angle-left"></i></div>
                                <div class="ss-slider-btn ss-slider-next color-bg"><i class="fal fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--section end  -->
                <!--footer -->
                <footer class="min-footer fl-wrap content-animvisible">
                    <div class="container small-container">
                        <div class="footer-inner fl-wrap">
                            <!-- policy-box-->
                            <div class="policy-box">
                                <span>&#169; Frame Game 2022 / All rights reserved. </span> <br>
                                <span>&#169; Powered by - Kotlis </span>
                            </div>
                            <!-- policy-box end-->
                            <a href="#" class="to-top-btn to-top">Back to top <i
                                    class="fal fa-long-arrow-up"></i></a>
                        </div>
                    </div>
                </footer>

            </div>

        </div>

    </div>



    </div>
@endsection
