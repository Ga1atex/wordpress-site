<?php get_header(); ?>
  <main class="main">
    <section class="main__info">
      <div class="container">
        <h2 class="main__title">
          <?php the_field('main__title') ?>
        </h2>
        <p class="main__text"><?php the_field('main__text') ?></p>
        <!-- <p class="main__text">ИМЕЕМ БОЛЬШОЙ ОПЫТ В СТРОИТЕЛЬСТВЕ
          гарантируем качество и надежность всех построенных нами объектов</p>
        <p class="main__text main__text--bold">ГАРАНТИЯ НА ДОМА И БАНИ ИЗ БРУСА 3 ГОДА</p> -->
        <div class="main__img">
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-img.png" alt="Опилки" width="160" height="115">
        </div>
      </div>
    </section>
    <section class="projects">
      <div class="container">
        <h2 class="projects__title">
          <?php the_field('projects__title') ?>
        </h2>
        <div class="projects__items">
          <div class="projects__item">
             
           <?php
              $featured_posts = get_field('projects__item');
              if( $featured_posts ): ?>
                  <ul>
                  <?php foreach( $featured_posts as $featured_post ): 
                      $title = get_the_title( $featured_post->ID );
                      $size = get_field( 'projects__item-size', $featured_post->ID );
                      $area = get_field( 'projects__item-area', $featured_post->ID );
                      $price = get_field( 'projects__item-price', $featured_post->ID );
                      $photo = get_field( 'projects__item-photo', $featured_post->ID );
                      $scheme = get_field( 'projects__item-scheme', $featured_post->ID );
                      ?>
                      <li class="projects__item">
                          <div class="projects__item-text">
                            <h4 class="projects__item-name">
                              <?php echo esc_html( $title ); ?>
                            </h4>
                            <p class="projects__item-size">
                              <?php echo esc_html( $size ); ?>
                            </p>
                            <p class="projects__item-area">
                              <?php echo esc_html( $area ); ?>
                            </p>
                            <p class="projects__item-price">
                              <?php echo esc_html( $price ); ?>
                            </p>
                          </div>
                          <div class="projects__item-images">
                            
                            <img src="<?php echo esc_html( $photo ); ?>" alt="Фото дома" class="projects__item-img">
                            <img src="<?php echo esc_html( $scheme ); ?>" alt="Схема дома" class="projects__item-img">
                          </div>
                      </li>
                  <?php endforeach; ?>
                  </ul>
              <?php endif; ?> 
              
                 
          </div>
        </div>
      </div>
    </section>
    <section class="download">
      <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/home-download.png" alt="картинка дома" width="300" height="141">
      <a class="download__link" href="<?php the_field('download__link') ?>" download><span><?php the_field('download__link-text') ?></span></a>
    </section>
    <section class="gallery">
      <div class="container">
        <h3 class="gallery__title"><?php the_field('gallery__title') ?></h3>
        <p class="gallery__text"><?php the_field('gallery__text') ?></p>
        <div class="gallery__inner">
          <?php the_field('gallery__inner') ?>
          <!-- <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" title="Home 1"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" alt="Фото дома" width="250"
              height="249"></a>
          <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" title="Home 1"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" alt="Фото дома" width="250"
              height="249"></a>
          <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" title="Home 1"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" alt="Фото дома" width="250"
              height="249"></a>
          <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" title="Home 1"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" alt="Фото дома" width="250"
              height="249"></a>
          <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" title="Home 1"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" alt="Фото дома" width="250"
              height="249"></a>
          <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" title="Home 1"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" alt="Фото дома" width="250"
              height="249"></a>
          <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" title="Home 1"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" alt="Фото дома" width="250"
              height="249"></a>
          <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" title="Home 1"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" alt="Фото дома" width="250"
              height="249"></a>
          <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" title="Home 1"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" alt="Фото дома" width="250"
              height="249"></a>
          <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" title="Home 1"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" alt="Фото дома" width="250"
              height="249"></a>
          <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" title="Home 1"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" alt="Фото дома" width="250"
              height="249"></a>
          <a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" title="Home 1"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery-item-1.jpg" alt="Фото дома" width="250"
              height="249"></a> -->
        </div>
        <div class="main__img">
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-img.png" alt="Опилки" width="160" height="115">
        </div>
      </div>
    </section>
  </main>
  
<?php get_footer(); ?>