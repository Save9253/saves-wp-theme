<?php

get_header();

echo "<h2>Test</h2>";
#print_r();#shows what it does
echo "<hr/>";

#Page Conetent
$PageContent = get_post();
echo "<h1>";
echo apply_filters( 'the_title', $PageContent->post_title );
echo "</h1>";
echo apply_filters( 'the_content', $PageContent->post_content );
echo "<hr/>";
echo "<h1>Here should be the posts</h1>";

#Blog
$AllPosts = get_posts();
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
