<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<header>
    <h1>This is header</h1>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
          echo "<br/>";
          print_r(get_search_form( $echo ));
    ?>
</header>
