<?php get_header();?>
<section class="content">
<?php
    if ( have_posts() ) {
        while ( have_posts() ) : the_post();
            echo "<h1>";
            the_title();
            echo "</h1>";
            the_content();
        endwhile;
    };
?>
</section>
<?php get_footer();?>
