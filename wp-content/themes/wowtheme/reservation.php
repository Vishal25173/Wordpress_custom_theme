<?php
// Template Name: Reservation page

get_header();
?>
   <section class="bg-title-page" style="    background-image: url(<?php echo get_template_directory_uri() ?>/images/bg-img/bg-title-page-02.jpg.webp);">
 <div class="container">
            <div class="blank">
                <h2 class="tit6-t-center">

                    Reservation
                </h2>
            </div>


        </div>
    </section>


    <!-- booking section start here -->
    <section class="section-reservation bg1-pattern p-t-100 p-b-113">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-b-30">
                    <div class="t-center">
                        <span class="tit2">
                            Reservation
                        </span>
                        <h3 class="tit3 ">
                            Book table
                        </h3>

                        <form class="one-1">
                            <div class="form-2">
                                <div class="input-res">
                                    <label form="date" class="date-1">Date</label>
                                    <input type="date" id="input-1">
                                </div>
                                <div class="input-res">
                                    <label form="date" class="date-1">Time</label>
                                    <input type="time" id="input-1">
                                </div>
                                <div class="input-res">
                                    <label form="date" class="date-1">People</label>
                                    <input type="number" id="input-1">
                                </div>

                            </div>
                            <div class="form-2">
                                <div class="input-res">
                                    <label form="Name" class="date-1">Name</label>
                                    <input type="text" id="input-1">
                                </div>
                                <div class="input-res">
                                    <label form="date" class="date-1">Phone</label>
                                    <input type="number" id="input-1">
                                </div>
                                <div class="input-res">
                                    <label form="date" class="date-1">Email</label>
                                    <input type="email" id="input-1">
                                </div>

                            </div>


                        </form>
                    </div>
                    <div class="center">
                        <button type="submit" class="btn3">
                            Book Table
                        </button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="info-reservation ">
                    <div class="size23 w-full-md p-t-40 p-r-30 p-r-0-md">
                        <h4 class="txt5 m-b-18">
                            Reserve by Phone
                        </h4>
                        <p class="size25">
                            Donec quis euismod purus. Donec feugiat ligula rhoncus, varius nisl sed, tincidunt lectus.
                            <span class="txt25">Nulla vulputate</span>
                            , lectus vel volutpat efficitur, orci
                            <span class="txt25">lacus sodales</span>
                            sem, sit amet quam:
                            <span class="txt24">(001) 345 6889</span>
                        </p>
                    </div>
                    <div class="size24 w-full-md p-t-40">
                        <h4 class="txt5 m-b-18">
                            For Event Booking
                        </h4>
                        <p class="size26">
                            Donec feugiat ligula rhoncus:
                            <span class="txt24">(001) 345 6889</span>
                            , varius nisl sed, tinci-dunt lectus sodales sem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php  
get_footer();
?>