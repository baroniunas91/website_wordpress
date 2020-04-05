<section class="fifth-section" id="work">
    <div class="img-section">
        <?php $gallery = get_field('wgb_image_gallery');
            foreach ($gallery as $image) {
                $imageView = get_field('wgb_image_gallery_view');
                ?>
                <a data-fancybox="gallery1" href="<?php echo $image['sizes']['post-block']?>"><img src="<?php echo $image['sizes']['post-block']?>" alt="<?php bloginfo('name'); ?>"><div class="overlay"><img src="<?php echo $imageView['sizes']['view-eye']?>" alt="<?php bloginfo('name'); ?>"></div></a>
                <?php
            }
            // dump($gallery);
        ?>
    </div>
    <div class="img-section-more">
        <?php $moreGallery = get_field('wbg_load_more_image_gallery');
            foreach ($moreGallery as $moreImage) {
                // echo $image['sizes']['medium'];
                $imageView = get_field('wgb_image_gallery_view');
                ?>
                <a data-fancybox="gallery3" href="<?php echo $moreImage['sizes']['post-block']?>"><img src="<?php echo $moreImage['sizes']['post-block']?>" alt="<?php bloginfo('name'); ?>"><div class="overlay"><img src="<?php echo $imageView['sizes']['view-eye']?>" alt="<?php bloginfo('name'); ?>"></div></a>
                <?php
            }
            // dump($gallery);
        ?>
    </div>
    <div class="link">
        <?php
        $link = get_field('wbg_open_more_gallery_link');
        $target = $link['target'] ? ' target="_blank" ' : '';
        ?>
        	<a href="<?php echo $link['url']?>" <?php echo $target; ?>><span class = "main-gallery" ><?php the_field('wgb_closed_gallery_link_text'); ?></span><span class="all-gallery"><?php the_field('wgb_opened_all_gallery_link_text'); ?></span><div class="overlay"></div></a>
    </div>
</section>
