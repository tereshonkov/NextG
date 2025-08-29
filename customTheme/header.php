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
       <?php wp_head() ?>
</head>

<body>
  <header>
    <section class="header">
      <div class="header__logo"><?php the_custom_logo(); ?></div>
      <nav class="header__nav">
        <ul class="header__nav-container">
          <li class="header__nav-item">
            <a class="header__item" href="#">Home</a>
          </li>
          <li class="header__nav-item">
            <a class="header__item" href="#">About</a>
          </li>
          <li class="header__nav-item">
            <a class="header__item" href="#">Product</a>
          </li>
          <li class="header__nav-item">
            <a class="header__item" href="#">Contact</a>
          </li>
          <li class="header__nav-item">
            <a class="header__item" href="#">History</a>
          </li>
          <button class="header__nav-btn">Contact us</button>
        </ul>
      </nav>
    </section>
    <section class="hero">
      <div class="hero__content">
        <span class="hero__mask">3M N95 masks</span>
        <h1 class="hero__title">Protective Face Masks</h1>
        <p class="hero__subtitle">
          We offer the fast delivery wholesale selection of N95 masks and
          surgical masks, featuring FDA-approved quality and 2 – 5 days
          delivery, our wholesale face masks are ideal for influenza or novel
          coronavirus prevention.
        </p>
        <div class="hero__btns-container">
          <button class="hero__btn--active">Shop now</button>
          <button class="hero__btn">Learn more</button>
        </div>
      </div>
      <img
        class="hero__image"
        src="<?php echo get_template_directory_uri(); ?>/images/hero-image.jpg"
        alt="hero-image" />
    </section>
    <img class="bg-hero" src="<?php echo get_template_directory_uri(); ?>/images/bg-hero.png" alt="background" />
  </header>