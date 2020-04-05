<div class="hero-content">
            <div class="container">
                <div class="generalInfo">
                    <h1><?php the_field('hb_heading'); ?></h1>
                    <p>
                        <?php $heading = get_field('hb_description');
                        echo nl2br($heading);
                        ?>
                    </p>
                    <div class="btn">
                        <?php 
                        $link = get_field('hb_link');
                        $target = $link['target'] ? ' target="_blank" ' : '';
                        
                        ?>
                        <a href="<?php echo $link['url']?>" <?php echo $target; ?>><?php echo $link['title']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>