<h1>Here should be the posts</h1>
<hr/>
<?php

$PageContent = get_post();

echo "<h1>";
echo apply_filters( 'the_title', $PageContent->post_title );
echo "</h1>";
echo apply_filters( 'the_content', $PageContent->post_content );
echo "<hr/>";

?>
