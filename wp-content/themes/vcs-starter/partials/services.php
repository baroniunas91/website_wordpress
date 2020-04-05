<section class="seventh-section" id="services">
    <div class="container flex-container">
        <?php
            if(have_rows('sb_section_repeater')):
                while(have_rows('sb_section_repeater')):
                    the_row(); //gauname vienos eilutes duomenis
                    // the_sub_field('sub_field_pavadinimas'); //reiksme atspausdina 
                    // get_sub_field('sub_field_pavadinimas'); //reiksme grazina
                    ?>
                    <!-- Html kuris kartojasi -->
                    <div class="seventh-section-column">
                        <?php the_sub_field('icon'); ?>
                        <h4><?php the_sub_field('heading'); ?></h4>
                        <p><?php the_sub_field('description'); ?></p>
                    </div>
                    <?php
                endwhile;
            endif;
        ?>
    </div>
</section>