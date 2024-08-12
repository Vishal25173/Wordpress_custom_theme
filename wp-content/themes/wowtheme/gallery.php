<?php
// Template Name: Gallery page

get_header();
?>
  <section class="bg-title-page" style="    background-image: url(<?php echo get_template_directory_uri() ?>/images/bg-img/bg-title-page-02.jpg.webp);">
        <div class="container">
            <div class="blank">
                <h2 class="tit6">

Gallery                </h2>
            </div>


        </div>
    </section>
<div class="container">
<div class="gallary-main">
    <div
        class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
        <button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
            All Photo
        </button>
        <button class="label-gallery txt26 trans-0-4" data-filter=".interior">
            Interior
        </button>
        <button class="label-gallery txt26 trans-0-4" data-filter=".food">
            Food
        </button>
        <button class="label-gallery txt26 trans-0-4" data-filter=".events">
            Events
        </button>
        <button class="label-gallery txt26 trans-0-4" data-filter=".guests">
            Vip guests
        </button>
    </div>
    <div class="all-gallery-img">
        <div class="wrap-gallery">
            <div class="item-gallery">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bg-img/gallery-page/photo-gallery-13.jpg.webp" alt="error" width="100%">
                <span class="plus">+</span>
            </div>
            <div class="item-gallery">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bg-img/gallery-page/photo-gallery-14.jpg.webp" alt="error" width="100%">
                <span class="plus">+</span>
            </div>
            <div class="item-gallery">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bg-img/gallery-page/photo-gallery-15.jpg.webp" alt="error" width="100%">
                <span class="plus">+</span>
            </div>
        </div>
        <div class="wrap-gallery">
            <div class="item-gallery">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bg-img/gallery-page/photo-gallery-16.jpg.webp" alt="error" width="100%">
                <span class="plus">+</span>
            </div>
            <div class="item-gallery">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bg-img/gallery-page/photo-gallery-17.jpg.webp" alt="error" width="100%">
                <span class="plus">+</span>
            </div>
            <div class="item-gallery">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bg-img/gallery-page/photo-gallery-18.jpg.webp" alt="error" width="100%">
                <span class="plus">+</span>
            </div>
        </div>
        <div class="wrap-gallery">
            <div class="item-gallery">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bg-img/gallery-page/photo-gallery-19.jpg.webp" alt="error" width="100%">
                <span class="plus">+</span>
            </div>
            <div class="item-gallery">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bg-img/gallery-page/photo-gallery-20.jpg.webp" alt="error" width="100%">
                <span class="plus">+</span>
            </div>
            <div class="item-gallery">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bg-img/gallery-page/photo-gallery-21.jpg.webp" alt="error" width="100%">
                <span class="plus">+</span>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container">
<div class="sign-in">
    <span class="txt5">SPECIALSSIGN UP</span>
    <input type="text" id="input" placeholder="Email Address">
    <button type="submit" class="btn3 ">
        SIGN-UP
    </button>
</div>
</div>



<!-- gallery se3ction close here -->
<?php  
get_footer();
?>