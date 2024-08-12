<?php include 'header.php'; 
the_post();
       ?>


<section class="bg-title-page">
        <div class="container">
            <div class="blank">
                <h2 class="tit6">
                    <?php the_title()
                    ?>
                </h2>
            </div>


        </div>
    </section>




    <!-- italian restorent our story -->

    <!-- booking section start here -->
   <div class="content">
    <?php the_content();
    ?>
   </div>

<?php include 'footer.php'; 
       ?>