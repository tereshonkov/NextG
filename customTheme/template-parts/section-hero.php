    <section class="hero">
      <div class="hero__content">
        <span class="hero__mask"><?php echo esc_html(get_field('hero_model')); ?></span>
        <h1 class="hero__title"><?php echo esc_html(get_field('hero_title')); ?></h1>
        <p class="hero__subtitle">
          <?php echo esc_html(get_field('hero_subtitle')); ?>
        </p>
        <div class="hero__btns-container">
          <button class="hero__btn--active"><?php echo esc_html(get_field('hero_btn1')); ?></button>
          <button class="hero__btn"><?php echo esc_html(get_field('hero_btn2')); ?></button>
        </div>
      </div>

      <img
        class="hero__image"
        src="<?php echo get_template_directory_uri(); ?>/images/hero-image.jpg"
        alt="hero-image" />
    </section>
    <img class="bg-hero" src="<?php echo get_template_directory_uri(); ?>/images/bg-hero.png" alt="background" />
  </header>