<?php get_header();?>

<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-service" id="page-banner">
  <div class="overlay dark-overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
        <div class="banner-content content-padding">
          <h1 class="text-white"><?php the_title(); ?></h1>
          <p>Мы оказываем весь спект диджитал услуг</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--MAIN HEADER AREA END -->
<?php the_content(); ?>

<?php echo get_template_part('template-parts/content', 'service'); ?>


<!--  PARTNER START  -->
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 text-center text-lg-left">
        <div class="mb-5">
          <h3 class="mb-2">Эти компании доверяют нам</h3>
          <p>Компании, с которыми мы работаем давно</p>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
        global $post;

        $query = new WP_Query( [
          'posts_per_page' => 4,
          'post_type'        => 'partners',
        ] );

        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            ?>
      <div class="col-lg-3 col-sm-6 col-md-3 text-center">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="partner" class="img-fluid" />
      </div>
      <?php
          }
        } else {
          echo('Постов нет');
        }

        wp_reset_postdata(); // Сбрасываем $post
        ?>
    </div>
  </div>
</section>
<!--  PARTNER END  -->

<!--  FOOTER AREA START  -->
<section id="footer" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-8 col-md-8">
        <div class="footer-widget footer-link">
          <h4>Мы заботимся о том, чтобы вы <br />быстро развивали свой бизнес</h4>
          <p>
            Маркетинговое и диджитал агентство полного цикла: мы решаем задачи по продвижению и рекламе, делаем
            сайты и презентации, чтобы это не пришлось делать вам.
          </p>
        </div>
      </div>
      <div class="col-lg-2 col-sm-4 col-md-4">
        <div class="footer-widget footer-link">
          <h4>Информация</h4>
          <ul>
            <li><a href="#">о нас</a></li>
            <li><a href="#">услуги</a></li>
            <li><a href="#">цены</a></li>
            <li><a href="#">команда</a></li>
            <li><a href="#">отзывы</a></li>
            <li><a href="#">журнал</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-sm-6 col-md-6">
        <div class="footer-widget footer-link">
          <h4>Сылки</h4>
          <ul>
            <li><a href="#">Как это работает</a></li>
            <li><a href="#">Поддержка</a></li>
            <li><a href="#">Политика данных</a></li>
            <li><a href="#">Сообщить об ошибке</a></li>
            <li><a href="#">Лицензия</a></li>
            <li><a href="#">Оферта</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-6">
        <div class="footer-widget footer-text">
          <h4>Наши контакты</h4>
          <p class="mail"><span>Email:</span> promdise@gmail.com</p>
          <p><span>Телефон :</span>+7 495 27-73-894</p>
          <p><span>Адрес:</span> г. Москва, ул. 40 лет СССР, строение 3, офис 37</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="footer-copy">© 2018 Promodise inc. Все права защищены.</div>
      </div>
    </div>
  </div>
</section>
<!--  FOOTER AREA END  -->

<?php get_footer();?>