<?php

$query_params = [
	'parametras1' => 'reiksme_1',
	'parametras2' => 'reiksme_2'
];

// dump($query_params); //patikrinimui ar visi duomenys uzsipildo

$result = new WP_Query($query_params); //suformuoja SQL pagal parametrus ir ivykdo uzklausa (issiuncia i DB ir grazina atsakyma)

if($result->have_posts()):
	while($result->have_posts()):
		$result->the_post();
		?>
		<!-- HTML kuris kartojasi -->
		<?
	endwhile;
endif;
wp_reset_postdata(); //Atstatome pradine uzklausa
?>