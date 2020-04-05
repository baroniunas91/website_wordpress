<section class="eight-section" id="testimonials">
    <div class="container">
        <div class="eight-section-content">
            <div class="slider-container">
            <?php
                if(have_rows('tb_testimonial_repeater')):
                    while(have_rows('tb_testimonial_repeater')):
                        the_row();
                    ?>
                    <!-- Html kuris kartojasi -->
                    <div class="first-slide">
                        <h5><?php the_sub_field('testimonial'); ?></h5>
                        <p><?php the_sub_field('testimonial_author'); ?></p>
                    </div>
                    <?php 
                    endwhile;
                endif;
            ?>
            </div>
        </div>
    </div>
</section>