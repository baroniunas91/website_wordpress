<footer class="last-section">
			<div class="container">
				<div class="all-rights-reserved">
					<h3><?php the_field('fb_footer_heading'); ?></h3>
					<p><?php the_field('fb_copyright'); ?></p>
				</div>
				<div class="all-links">
					<ul class="contacts">
						<li><a href="mailto:<?php the_field('fb_email'); ?>"><?php the_field('fb_email'); ?></a></li>
						<li><a id="contacts" href="tel:<?php the_field('fb_phone_number'); ?>">+<?php the_field('fb_phone_number'); ?></a></li>
					</ul>
					
					<ul class="our-info-first">
						<li><a href="<?php echo get_field('fb_first_link')['url']?>"><?php echo get_field('fb_first_link')['title']; ?></a></li>
						<li><a href="<?php echo get_field('fb_second_link')['url']?>"><?php echo get_field('fb_second_link')['title']; ?></a></li>
						<li><a href="<?php echo get_field('fb_third_link')['url']?>"><?php echo get_field('fb_third_link')['title']; ?></a></li>
						<li><a href="<?php echo get_field('fb_forth_link')['url']?>"><?php echo get_field('fb_forth_link')['title']; ?></a></li>
					</ul>
					
					<ul class="our-info-second">
						<li><a href="<?php echo get_field('fb_fifth_link')['url']?>"><?php echo get_field('fb_fifth_link')['title']; ?></a></li>
						<li><a href="<?php echo get_field('fb_sixth_link')['url']?>"><?php echo get_field('fb_sixth_link')['title']; ?></a></li>
						<li><a href="<?php echo get_field('fb_seventh_link')['url']?>"><?php echo get_field('fb_seventh_link')['title']; ?></a></li>
						<li><a href="<?php echo get_field('fb_eight_link')['url']?>"><?php echo get_field('fb_eight_link')['title']; ?></a></li>
					</ul>

					<ul class="social-media">
						<?php
						$link = get_field('fb_social_media_link');
						$target = $link['target'] ? ' target="_blank" ' : '';
						$link2 = get_field('fb_social_media_link2');
						$target2 = $link2['target'] ? ' target="_blank" ' : '';
						$link3 = get_field('fb_social_media_link3');
						$target3 = $link3['target'] ? ' target="_blank" ' : '';
						$link4 = get_field('fb_social_media_link4');
						$target4 = $link4['target'] ? ' target="_blank" ' : '';
						?>
						<?php $target = $link['target'] ? ' target="_blank" ' : ''; ?>
						<li><a href="<?php echo $link['url']?>" <?php echo $target; ?>><?php echo $link['title']; ?></a></li>
						<li><a href="<?php echo $link2['url']?>" <?php echo $target2; ?>><?php echo $link2['title']; ?></a></li>
						<li><a href="<?php echo $link3['url']?>" <?php echo $target3; ?>><?php echo $link3['title']; ?></a></li>
						<li><a href="<?php echo $link4['url']?>" <?php echo $target4; ?>><?php echo $link4['title']; ?></a></li>
					</ul>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>