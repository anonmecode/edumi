<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <h2>Hello, world!</h2>

    <?php
    echo bloginfo('admin_email');
    echo '<br>';
    echo bloginfo('version');
    echo '<br>';
    echo bloginfo('url');
    echo '<br>';
    echo bloginfo('stylesheet_url');
    echo '<br>';
    wp_footer();
    ?>
</body>

</html>