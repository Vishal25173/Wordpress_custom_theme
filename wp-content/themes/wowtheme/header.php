<?php  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="icon" type="icon/x-image" href="<?php echo get_template_directory_uri() ?>/images/icons-logo.png" class="icon" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/about.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/contact.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/blog.css" />
    <!-- font family link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- icon library -->
    <script src="https://kit.fontawesome.com/527de25737.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <?php wp_head(); ?>
</head>

<body>
    <!-- js link section Start here -->
    <script src="/js/js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <!-- js link section close here -->
    <!-- container -->
    <header style="background-image: url(<?php bloginfo('template_directory')?>/images/bg-img/slide1-01.jpg.jpg);">
        <!-- navbar start here -->
        <div class="container">

            <div class="navbar">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons-logo.png" />
                </div>

                <div class="menu">
                <?php wp_nav_menu(array('theme_location'=>'primary-menu'
                  ,'menu_class'=>'ul1')) ?>
                </div>
                <div class="icons1">
                    <i class="fa-solid fa-eye" style="color: #e1e6ef"></i>
                    <i class="fa-brands fa-facebook-f" style="color: #e8eaee"></i>
                    <i class="fa-brands fa-twitter" style="color: #ece9e9"></i>

                </div>
                <div class="toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div>
        <center class="welcome">
            <h2>Welcome To</h2>
        </center>
        <center class="welcome3">
            <h1>PATO PLACE</h1>
          
          <button>Look menu</button>
        </center>
        </div>
      
    </header>
    
    