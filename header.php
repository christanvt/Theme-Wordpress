<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php wp_title(); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon.png" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- <div class="container"></div> -->

    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
        <div class="container">
            <a class="navbar-brand menu" href="<?php echo site_url(); ?>"><img src="<?= get_stylesheet_directory_uri(); ?>/images/wtf.png" alt="logo"></a>

            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="" alt="">
            <a class="navbar-brand" href="<?= get_site_url() ?>"> Mon blog</a>
            <?php
            // configuration du menu WP_Bootstrap_Navwalker
            wp_nav_menu([
                'theme_location'    => 'primary', // le nom de l'emplacement du menu doit être défini dans le fichier `functions.php`
                'depth'             => 2, // 1 = sans menu déroulant, 2 = avec menu déroulant
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'my-theme-navbar-collapse', // si vous changez ce `container_id`, changez-le aussi change les attributs `data-target` et `aria-controls` de la balise `button` ci-dessus
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ]);
            ?>
        </div>
    </nav>