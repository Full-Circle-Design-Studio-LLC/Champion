<?php get_header() ?>
      </header>
<div class="col-12 float-left" id="page-home">

<body>
<div class="container-fluid p-0">


<header class="col-12 p-0 float-left">
<img src="<?php echo get_template_directory_uri(); ?>/assets//banner/left.png" alt="left-image" class="left-image">
<div class="logo-container">
<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Champion Trophies & Awards Logo"></a>
</div>
<img src="<?php echo get_template_directory_uri(); ?>/assets//banner/right.png" alt="right-image" class="right-image">




</header>


<?php include('component-nav.php'); ?>





<div class="article-container container-1 col-12 col-lg-9 float-left">
<article class="article-home col-12 float-left" id="article-home">

  <h2 class="col-12 col-lg-10 offset-lg-1 float-left"><?php the_field('main_section_header'); ?></h2>
  <div class="col-12 col-lg-10 offset-lg-1 float-left">
    <?php the_field('main_section_body'); ?>
  </div>

</article>
</div>

<div class="airflyte-container container-2 col-12 col-lg-3 float-left">
  <a href="<?php the_field('airflyte_link'); ?>" target="_blank" class="airflyte col-12 float-left">
  <?php $img = get_field('airflyte_image'); ?>
  <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="col-12 col-md-5 col-lg-12 float-left p-0">
  <div class="col-12 col-md-6 offset-md-1 col-lg-12 offset-lg-0 float-left p-0">
    <h3 class="col-12 airflyte-text"><?php the_field('airflyte_box_title'); ?></h3>
    <div class="col-12 airflyte-text"><?php the_field('airflyte_box_text'); ?></div>
  </div>
  </a>
</div>

<div class="map-container container-3 col-12 float-left p-0">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12289.520130485562!2d-79.96111600000002!3d39.641161!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88357b770039a0fb%3A0x374b7613861ad772!2s550%20Beechurst%20Ave%2C%20Morgantown%2C%20WV%2026505!5e0!3m2!1sen!2sus!4v1571437504896!5m2!1sen!2sus" allowfullscreen="" class="col-12 float-left"></iframe>
</div>



</div> <!-- CLOSES CONTAINER -->

</body>

<?php get_footer(); ?>
