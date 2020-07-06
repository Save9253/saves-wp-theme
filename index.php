<?php

get_header();

echo "<h2>Test</h2>";
#print_r();#shows what it does
echo "<hr/>";

#Page Conetent
if ( have_posts() ) {
    while ( have_posts() ) : the_post();
        echo "<h1>";
        the_title();
        echo "</h1>";
        the_content();
    endwhile;
};

#Blog
$AllPosts = get_posts();
echo "<h1>Here should be the posts</h1>";
if(have_posts()){
    for($i = 0, $size = count($AllPosts); $i < $size; $i++){
        echo "<h1>";
        echo apply_filters( 'the_title', $AllPosts[$i]->post_title);
        echo "</h1>";
        echo apply_filters( 'the_content', $AllPosts[$i]->post_content );
        echo "<br/>";
    }
}

get_footer();

?>
