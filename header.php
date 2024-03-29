<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

  <?php wp_head(); ?>
</head>


<body <?php body_class( 'site' ); ?>>

<header class="site__header">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">
        <img height="100" width="100" src="<?php echo get_template_directory_uri(); ?>/img/lepays-logo.png" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <?php wp_nav_menu(
          array(
            'theme_location' => 'main',
            'container' => 'ul', // afin d'éviter d'avoir une div autour
            'menu_class' => 'nav-item navbar-nav ms-auto', // ma classe personnalisée
          )
        ); ?>
        <div class="mx-5">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </nav>
</header>

<?php wp_body_open(); ?>