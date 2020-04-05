<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
	</head>
	<body>
    <section class="filters" id="filter">
        <div class="container">
            <h2><?php single_cat_title(); ?></h2>
            <div class="gallery">
                <?php
                if(have_posts()):
                    while(have_posts()):
                        the_post();
                        ?>
                        <div class="post">
                            <a href="<?php the_permalink(); ?>">
                                <img class="show" src="<?php the_post_thumbnail_url('post-block'); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <?php the_excerpt(); ?>
                            <a href = "<?php the_permalink(); ?>">
                                <p class = "readmore">Read more</p>
                            </a>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
                
            </div>
            <?php 
            $args = [
                'next_text' => 'Next',
                'prev_text' => 'Previous'
            ]
            ?>
            <p><?php echo paginate_links($args); ?></p>
		</div>
	</section>
		<!-- FOOTER BLOCK -->
		<footer class="last-section">
			<div class="container">
				<div class="all-rights-reserved">
					<h3>Piroll Design, Inc.</h3>
					<p> &copy; 2017 Piroll. All rights reserved. Designed by robirurk.</p>
				</div>
				<div class="all-links">
					<ul class="contacts">
						<li><a href="mailto:hello@pirolltheme.com">hello@pirolltheme.com</a></li>
						<li><a id="contacts" href="tel:+44987065908">+44 987 065 908</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</body>
</html>
