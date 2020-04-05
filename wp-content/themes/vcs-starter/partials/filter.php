<section class="filters" id="filter">
    <div class="container">
        <h2><?php the_field('fb_filters_heading'); ?></h2>
        <div class="buttons">
        <?php
            if(have_rows('filters_button_repeater')):
                while(have_rows('filters_button_repeater')):
                    the_row();
                    ?>
                    <button class="btn" data-type="<?php the_sub_field('button_text'); ?>"><?php the_sub_field('button_text'); ?></button>
                    <?php
                endwhile;
            endif;
        ?>
        </div>

        <div class="gallery">
        <?php
        if(have_rows('fb_filters_repeater')):
            while(have_rows('fb_filters_repeater')):
                the_row(); //gauname vienos eilutes duomenis
                // the_sub_field('sub_field_pavadinimas'); //reiksme atspausdina 
                // get_sub_field('sub_field_pavadinimas'); //reiksme grazina
                $image = get_sub_field('image');
                $link = get_sub_field('link');
                $target = $link['target'] ? ' target="_blank" ' : '';
        ?>
                <div class="post" data-type = "<?php the_sub_field('filter'); ?>">
                    <a href="<?php echo $link['url']?>" <?php echo $target; ?>>
                        <img class="show" src="<?php echo $image['sizes']['post-block']?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                    <a href="<?php echo $link['url']?>" <?php echo $target; ?>>
                        <h3><?php the_sub_field('filter_heading'); ?></h3>
                    </a>
                    <p><?php the_sub_field('filter'); ?></p>
                </div>
                <?php
                endwhile;
            endif;
        ?>
            
        </div>
    </div>
</section>