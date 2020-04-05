<?php
/* Template Name: Singlepage Template */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>
	<body>
        <div class="single">
            <div class="container">
                <div class="single-content">
                    <h1><?php the_field('sb_page_heading') ;?></h1>
                    <?php the_field('sb_page_description');?>
                    <div class="btn">
                        <?php 
                        $link = get_field('sb_page_link');
                        $image = get_field('sb_page_image');
                        ?>
                        <a href="<?php echo $link['url']?>"><?php echo $link['title']; ?></a>
                    </div>
                </div>
                <img src="<?php echo $image['sizes']['post-block']?>" alt="<?php bloginfo('name'); ?>">
            </div>
        </div>
		<!-- FOOTER BLOCK -->
		<footer class="last-section">
			<div class="container">
				<div class="all-rights-reserved">
					<h3><?php the_field('sb_footer_heading'); ?></h3>
					<p><?php the_field('sb_copyright'); ?></p>
				</div>
				<div class="all-links">
					<ul class="contacts">
						<li><a href="mailto:<?php the_field('sb_email'); ?>"><?php the_field('sb_email'); ?></a></li>
						<li><a id="contacts" href="tel:<?php the_field('sb_phone_number'); ?>">+<?php the_field('sb_phone_number'); ?></a></li>
					</ul>
				</div>
			</div>
		</footer>
	</body>
</html>