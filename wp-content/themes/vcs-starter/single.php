<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
	</head>
	<body>
    <?php 
    if(have_posts()):
        while(have_posts()):
            the_post();
            ?>
        <div class="single">
            <div class="container">
                <div class="single-content">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <div class="btn">
                        <a href="http://localhost/piroll/wp/#filter">Back to main page</a>
                    </div>
                </div>
                <img src="<?php the_post_thumbnail_url('post-block');?>" alt="category">
            </div>
        </div>
        <?php
	    endwhile;
    endif;
    ?>
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
