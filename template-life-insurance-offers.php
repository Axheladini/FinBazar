<?php
/**
 *
 * Template Name: Auto Liability Offers
 *
 */
acf_form_head();
get_header(); ?>
	


<?php get_template_part('pageheader'); ?>
<img src="/wp-content/themes/albar/images/demo/life.jpg" style="width: 100%; height: auto;" />
<div class="site-body site-pad">
	<div class="site-container loans form_box">
		<div class="acf_form_container">
               


   
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?> 
<?php endwhile; // end of the loop. ?> 
<?php 
			
             
			?>
          
		</div>
	</div>
</div>
<?php get_footer(); ?>
