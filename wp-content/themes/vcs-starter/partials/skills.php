<section class="third-section">
    <div class="container">
        <div class="skills-content">
            <div class="proffesional-skills">
                <h2><?php the_field('sb_skills_heading')?></h2>
                <?php
                    if(have_rows('sb_skills_repeater')):
                        while(have_rows('sb_skills_repeater')):
                            the_row();
                            ?>
                            <?php the_sub_field('skill')?>
                            <div class="proffesional-skills-level" style = "background:linear-gradient(90deg, rgba(16,201,195,1) <?php the_sub_field('level');?>%, rgba(216,216,216,1) <?php the_sub_field('level');?>%);">
                            </div>
                            <?php
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
        <?php $skillsImage = get_field('sb_section_image'); ?>
        <img src="<?php echo $skillsImage['sizes']['skills-block']?>" alt="<?php bloginfo('name'); ?>">
    </div>
</section>