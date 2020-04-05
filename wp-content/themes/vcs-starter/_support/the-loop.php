<?php 
if(have_posts()):
	while(have_posts()):
		the_post();
		?>
		<!-- HTML kuris kartojasi -->
		<?php
	endwhile;
endif;

?>