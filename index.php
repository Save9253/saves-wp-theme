<?php
$AllPosts = get_posts();
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
echo "<h1>Here should be the posts</h1>";
if(have_posts()){
    for($i = 0, $size = count($AllPosts); $i < $size; $i++){
        echo "<h1>";
        echo $AllPosts[$i]->post_title;
        echo "</h1>";
        echo $AllPosts[$i]->post_content;
        echo "<br/>";
    }
}

#Categories and tugs;
echo "Categories: ";
print_r(wc_get_products($args)[7]->category_ids);
echo "<br/> Tags: ";
print_r(wc_get_products($args)[7]->tag_ids);
echo "<br/> get_the_category_by_ID: ";
print_r(get_the_category_by_ID(17));
echo "<br/> get_term: ";
print_r(get_term(17));

get_footer();
?>
