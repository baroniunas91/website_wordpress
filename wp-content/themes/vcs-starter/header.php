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
		$image = get_field('hb_background_image');
		// dump($image);
		?>

		<section class="hero" id="home" style ="background-image: url(<?php echo $image['sizes']['1536x1536']; ?>);">
			<div class="container flex-container">
				<div class="header">
					<div class="logo">
						<?php
						$image = get_field('ho_logo_image', 'option');
						// dump($image);
						?>
						<img src="<?php echo $image['sizes']['logo']?>" alt="<?php bloginfo('name'); ?>">
					</div>
					<?php get_template_part('partials/navbar'); ?>
				</div>