<?php
// Template Name:Contact page

get_header();
?>
 <div class="main-box">
        <div class="container">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3549.400402283354!2d78.03956727498212!3d27.175149548764058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39747121d702ff6d%3A0xdd2ae4803f767dde!2sTaj%20Mahal!5e0!3m2!1sen!2sin!4v1695270691971!5m2!1sen!2sin"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                <div class="google">
                    <h3 class="txt32">Google</h3>
                    <h2 class="txt18"> This page can't load Google Maps correctly.</h2>
                    <div class="website">
                        <p> Do you own this website?</p>
                        <div class="ok">
                            <h5>OK</h5>
                        </div>

                    </div>
                </div>

            </div>

            <div class="send-message">
                <h3 class="tit7 t-center p-b-62 p-t-105">
                    Send us a Message
                </h3>

                <form class="one-1">
                    <div class="form-2">
                        <div class="input-res">
                            <label form="date" class="date-1">Date</label>
                            <input type="date" id="input-1">
                        </div>
                        <div class="input-res">
                            <label form="date" class="date-1">Time</label>
                            <input type="datetime" id="input-1">
                        </div>
                        <div class="input-res">
                            <label form="date" class="date-1">People</label>
                            <input type="text" id="input-1">
                        </div>
    
                    </div>


                </div>
                <div class="input-res">
                    <label form="date" class="date-1">Message</label>
                    <textarea name="comment" form="usrform" class="message-input">
                    Message </textarea>
                </div>
                <div class="flex">
                    <button type="submit" class="btn4 ">
                        SUBMIT
                    </button>
                </div>
            </div>

<div class="container">
            <div class="our-contact">
                <div class="col-1">
                    <div class="dis-flex">
                        <div class="p-r-40 p-t-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/bg-img/blog-img/clock-icon.png.webp" alt="IMG-ICON">
                        </div>
                        <div class="flex-col-l">
                            <span class="txt5 p-b-10">
                                Location
                            </span>
                            <span class="txt23 size38">
                                8th floor, 379 Hudson St, New York, NY 10018
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="dis-flex">
                        <div class="p-r-40 p-t-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/bg-img/blog-img/map-icon.png.webp" alt="IMG-ICON">
                        </div>
                        <div class="flex-col-l">
                            <span class="txt5 p-b-10">
 CALL US
                            </span>
                            <span class="txt23 size38">
                                (+1) 96 716 6879
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="dis-flex">
                        <div class="p-r-40 p-t-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/bg-img/blog-img/phone-icon.png.webp" alt="IMG-ICON">
                        </div>
                        <div class="flex-col-l">
                            <span class="txt5 p-b-10">
                                OPENING HOURS
                            </span>
                            <span class="txt23 size38">
                                09:30 AM - 11:00 PM
                                Every Day
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>

    <?php  
get_footer();
?>