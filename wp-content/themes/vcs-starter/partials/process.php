<section class="sixth-section" id="process">
    <div class="container">
        <div class="sixth-section-content">
            <h3><?php the_field('pb_section_heading'); ?></h3>
            <?php the_field('pb_section_description'); ?>
            <div class="video">
            <?php $video = get_field('pb_section_video');
            $image = get_field('pb_video_play_button');
            // dump($image);
            ?>
                <video>
                    <source src="<?php echo $video['url']?>" type="<?php echo $video['mime_type']?>">
                    Your browser does not support the video tag.
                </video>
                <div class="overlay"><a data-fancybox="gallery2" href="<?php echo $video['url']?>"><img src="<?php echo $image['sizes']['medium']?>" alt="<?php bloginfo('name'); ?>"></a></div>
            </div>
        </div>

    </div>
</section>