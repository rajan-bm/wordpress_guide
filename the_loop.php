<?php
/* Environment: We're inside a theme template file in the WordPress template hierarchy */

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post(); 

        // (Loop contents will go here)

    endwhile;
endif;
?>
