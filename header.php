<html <?php language_attributes(); ?>> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <meta name="author" content="Sam Edwards">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="shortcut icon" href="<?= esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' )));?>" type="image/x-icon">
    <?php wp_head();?>
</head>
<body>
    <header class="container">
        <nav>
            <?php if (has_custom_logo()):
                // Get Custom Logo URL
                $custom_logo_id = get_theme_mod('custom_logo');
                $custom_logo_data = wp_get_attachment_image_src($custom_logo_id , 'full');
                $custom_logo_url = $custom_logo_data[0];
            ?>
            <a class="logo" href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr(get_bloginfo('name') ); ?>" rel="home">
                <img src="<?php echo esc_url($custom_logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
            </a>
            <?php else: ?>
                <a class="logo" href=""><?php bloginfo('name'); ?></a>
            <?php endif; ?>
            <button class="menu-button">Menu<span></span></button>
            <div class="main-nav">
                <?php
                    wp_nav_menu(array (
                        'theme_location' => 'header',
                    ));
                ?>
            </div>
        </nav>
    </header>