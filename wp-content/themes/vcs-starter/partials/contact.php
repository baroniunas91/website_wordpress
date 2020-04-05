<section class="tenth-section" id="contacts2">
    <div class="container">
        <div class="tenth-section-content">
            <h2><?php the_field('cb_section_heading'); ?></h2>
            <?php the_field('cb_section_description'); ?>
            
                <?php
                echo do_shortcode(get_field('cb_form_shortcode'));
                ?>
            

        </div>
    </div>
</section>