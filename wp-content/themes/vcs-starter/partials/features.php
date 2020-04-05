<section class = "fourth-section">
    <div class="container flex-container">
        <?php
        if(have_rows('fb_features')):
            while(have_rows('fb_features')):
                the_row(); //gauname vienos eilutes duomenis
                // the_sub_field('sub_field_pavadinimas'); //reiksme atspausdina 
                // get_sub_field('sub_field_pavadinimas'); //reiksme grazina
                ?>
                <!-- Html kuris kartojasi -->
                <div class="column">
                    <?php the_sub_field('icon'); ?>
                    <div class="column-content">
                        <h3><?php the_sub_field('heading'); ?></h3>
                        <p><?php the_sub_field('description'); ?></p>
                    </div>
                </div>
                <?php 
            endwhile;
        endif;
        ?>
    </div>
</section>