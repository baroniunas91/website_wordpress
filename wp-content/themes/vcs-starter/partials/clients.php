<section class="ninth-section">
    <div class="container">
        <?php
            if(have_rows('cb_image_repeater')):
                while(have_rows('cb_image_repeater')):
                    the_row(); //gauname vienos eilutes duomenis
                    $image = get_sub_field('image');
                    // dump($image);
                    // the_sub_field('sub_field_pavadinimas'); //reiksme atspausdina 
                    // get_sub_field('sub_field_pavadinimas'); //reiksme grazina
                    ?>
                    <!-- Html kuris kartojasi -->
                    <img src="<?php echo $image['sizes']['medium']?>" alt="<?php bloginfo('name'); ?>">
                    <?php
                endwhile;
            endif;
        ?>
        
    </div>
</section>