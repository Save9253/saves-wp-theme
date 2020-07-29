<?php
    get_header();
    echo '<section id="SrchRslts">';
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            echo '<div class="Div SrchRslt">';
            echo '<h2>';
            echo the_title();
            echo '</h2>';
            echo '<p>';
            if(has_excerpt()){
                echo substr(get_post()->post_excerpt,0,150);
                if(strlen(get_post()->post_excerpt)>150){echo '...';}
            } else {
                echo substr(get_post()->post_content,0,150);
                if(strlen(get_post()->post_content)>150){echo '...';}
            };
            echo '</p>';
            echo '</div>';
        endwhile;
    endif;
    echo '</section>';
    get_footer();
?>
