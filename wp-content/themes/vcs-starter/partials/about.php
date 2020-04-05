<section class="second-section" id="about">
    <div class="container">
        <div class="about-content">
            <h2><?php the_field('ab_about_heading'); ?></h2>
            <p>
                <?php $description = get_field('sub_heading');
                    echo nl2br($description);
                ?>
            </p>

            <?php
                $image = get_field('ab_about_image');
                // dump($image);
            ?>
            <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php bloginfo('signature'); ?>">
        </div>
    </div>
</section>