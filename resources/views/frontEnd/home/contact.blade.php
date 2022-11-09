@extends('frontEnd.master')

@section('mainContent')
    <div id="wrapper">
        <!-- content -->
        <div class="content">
            <!-- column-image  -->
            <div class="column-image">
                <div class="bg" data-bg="images/bg/C2.webp"></div>
                <div class="overlay"></div>
                <div class="column-title">

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
            <div class="column-wrapper ">
                <!--scroll-nav-wrap -->
                <div class="scroll-nav-wrap">
                    <nav class="scroll-nav scroll-init">
                        <ul>
                            <li><a class="act-scrlink" href="#sec1">Details</a></li>
                            <li><a href="#sec2">Location</a></li>
                            <li><a href="#sec3">Say Hello</a></li>
                        </ul>
                    </nav>
                </div>
                <!--scroll-nav-wrap end-->
                <!--section  -->
                <section id="sec1">
                    <div class="container small-container">
                        <div class="section-title fl-wrap">
                            <h3>Contact Information</h3>

                            <div class="section-number">01.</div>
                        </div>
                        <div class="column-wrapper_item fl-wrap">
                            <div class="column-wrapper_text fl-wrap">
                                <p>If you would like to talk about a project, our work or anything else then get in touch.
                                </p>
                                <div class="contact-details fl-wrap">
                                    <ul>
                                        <li><span>Mail :</span><a style=" text-transform: lowercase;"
                                                href="mailto:info@framegame.studio" target="_blank">
                                                info@framegame.studio</a></li>
                                        <li><span>Adress :</span><a style=" text-transform: capitalize;" href="#"
                                                target="_blank">Block C, Road 8, House 60 (1st Floor), <br> Niketon Housing
                                                Society, Gulshan 1, Dhaka 1212, Bangladesh</a></li>
                                        <li><span>Phone :</span><a href="tel:+880 1409-963319">+880 1409-963319</a></li>
                                        <li><a href="https://www.facebook.com/framegamestudio/" class="fa fa-facebook"></a>
                                            <a href="https://wa.me/+8801409963319" class="fa fa-whatsapp"></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#sec3" class="custom-scroll-link btn fl-btn">Say Hello</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!--section end  -->
                <div class="sec-dec"></div>
                <!--section   -->
                <section id="sec2">
                    <div class="container small-container">
                        <div class="section-title fl-wrap">
                            <h3>Studio Location</h3>
                            <div class="section-number">02.</div>
                        </div>
                        <div class="column-wrapper_item fl-wrap">
                            <div class="column-wrapper_text fl-wrap">
                                <div class="map-container">

                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233522.91509430684!2d90.24334261728788!3d23.861392745286555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c75f8a5e52eb%3A0x9ead659fb706e98!2sFRAME%20GAME%20STUDIO!5e0!3m2!1sen!2sbd!4v1666114808181!5m2!1sen!2sbd"
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!--section end  -->
                <div class="sec-dec"></div>
                <!--section -->
                <section id="sec3">
                    <div class="container small-container">
                        <div class="section-title fl-wrap">
                            <h3>Get In Touch</h3>

                            <div class="section-number">03.</div>
                        </div>
                        <div class="column-wrapper_item fl-wrap">
                            <div class="column-wrapper_text fl-wrap">
                                <div id="contact-form" class="fl-wrap">
                                    <div id="message"></div>
                                    <form class="custom-form" action="https://formsubmit.co/info@framegame.studio"
                                        name="contactform" id="contactform" method="POST" autocomplete="on">
                                        <fieldset>
                                            <input type="hidden" name="_next"
                                                value="https://www.framegame.studio/thanks.php">
                                            <input type="text" name="name" id="name" placeholder="Your Name *"
                                                value="" required />
                                            <input type="text" name="email" id="email"
                                                placeholder="Email Address *" value="" required />
                                            <textarea name="comments" id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>




                                            <button style="width:100%;" class="btn float-btn flat-btn color-bg"
                                                id="submit" type="submit">Send Message </button>
                                        </fieldset>
                                    </form>
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
                            <a href="#" class="to-top-btn to-top">Back to top <i class="fal fa-long-arrow-up"></i></a>
                        </div>
                    </div>
                </footer>
                <!--footer end  -->
            </div>
            <!-- column-wrapper -->
        </div>
        <!--content end-->
        <!--share-wrapper-->
        <div class="share-wrapper">
            <div class="share-container fl-wrap  isShare"></div>
        </div>
        <!--share-wrapper end-->
    </div>
@endsection
