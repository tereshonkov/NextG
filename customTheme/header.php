<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NextG</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />
       <?php wp_head(); ?>
</head>

<body>
  <header>
    <section class="header">
      <div class="header__logo"><?php the_custom_logo(); ?></div>
      <nav class="header__nav">
<?php wp_nav_menu([
    'theme_location' => 'header-menu',
    'container'      => false,
    'menu_class'     => 'header__nav-container',
]); ?>

<button class="header__nav-btn">Contact us</button>
      </nav>
    </section>