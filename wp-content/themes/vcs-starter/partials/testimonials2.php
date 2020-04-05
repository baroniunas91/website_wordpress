<section class="eight-section" id="testimonials">
    <div class="container">
        <div class="eight-section-content">
            <div class="slider-container">
                <?php
                $query_params = [
                    'post_type' => get_field('tb_post_type'),
                    'posts_per_page' => get_field('post_limit')
                ];

                $result = new WP_Query($query_params); //suformuoja SQL pagal parametrus ir ivykdo uzklausa (issiuncia i DB ir grazina atsakyma)

                if($result->have_posts()):
                    while($result->have_posts()):
                        $result->the_post();
                ?>
                <div class="first-slide">
                    <?php the_content(); ?>
                    <h5><?php the_title(); ?></h5>
                </div>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata(); //Atstatome pradine uzklausa
                ?>
            </div>
        </div>
    </div>
</section>