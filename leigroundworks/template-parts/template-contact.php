<?php /* Template Name: Contact Page*/

get_header(); ?>

	<div class="site-content contact-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php
                    while ( have_posts() ) :
                        the_post();
                        
                        the_content();
                    endwhile;
                    ?>
                    
                </div>
            </div>
        </div>
	</div>
<?php get_footer(); ?>