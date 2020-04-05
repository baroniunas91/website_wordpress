<section class="filters" id="filter">
    <div class="container">
        <h2><?php the_field('f2b_section_heading'); ?></h2>
            <?php
                $query_params = [
                    'post_type' => get_field('f2b_post_type'),
                    'posts_per_page' => get_field('f2b_post_limit'),
                    'tax_query' => get_field('f2b_filter_taxonomy')
                ];
            ?>
            <div class="buttons">
            <?php
            //dump($query_params); //patikrinimui ar visi duomenys uzsipildo

                $result = new WP_Query($query_params); //suformuoja SQL pagal parametrus ir ivykdo uzklausa (issiuncia i DB ir grazina atsakyma)
                if($result->have_posts()):
                    while($result->have_posts()):
                        $result->the_post();
                        $terms = wp_get_post_terms( get_post()->ID , 'project-category' );
                        $masyvas = [];
                            for($i=0; $i < sizeof($terms); $i++){
                                array_push($masyvas, array($terms[$i]->slug));
                                $data = $data . " " . $masyvas[$i][0];
                            }
                    endwhile;
                endif;
                wp_reset_postdata(); //Atstatome pradine uzklausa
            ?>
            <?php 
            $categoryArray = explode(" ", $data);
            $uniqueNames = array_unique($categoryArray);
            
            for ($p=0; $p <= sizeof($uniqueNames); $p++){
                $category = $uniqueNames[$p];
                if ($category != "" ) {
                    ?>
                    <button class="btn" data-type="<?php echo $category; ?>"><?php echo $category; ?></button>
                    <?php 
                }
            }
            ?>
                <button class="btn" data-type="all">All</button>
            </div>
    
            <div class="gallery">  
            <?php          
                // dump($query_params); //patikrinimui ar visi duomenys uzsipildo
                if($result->have_posts()):
                    while($result->have_posts()):
                        $result->the_post();
                        $terms = wp_get_post_terms( get_post()->ID , 'project-category' );
                        foreach ( $terms as $term ) {
                        }
                        ?>
                        <div class="post" data-type = "<?php echo $term->slug; ?>">
                            <a href="<?php the_permalink(); ?>">
                                <img class="show" src="<?php the_post_thumbnail_url('post-block');?>" alt="<?php the_title(); ?>">
                            </a>
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <a href="<?php echo get_term_link($term); ?>">
                                <p><?php echo $term->name; ?></p>
                            </a>
                        </div>
                        <?php
                    endwhile;
                endif;
                wp_reset_postdata(); //Atstatome pradine uzklausa
            ?>
        </div>
    </div>
</section>