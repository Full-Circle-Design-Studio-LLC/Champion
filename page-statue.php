<?php get_header() ?>
      </header>

<body>
  <div class="container-fluid p-0" id="page-statue">


    <header class="col-12 p-0 float-left">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/banner/left.png" alt="left-image" class="left-image">
    <div class="logo-container">
    <a href="<?php echo get_site_url(); ?>/home"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Champion Trophies & Awards Logo"></a>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/banner/right.png" alt="right-image" class="right-image">




    </header>


    <?php include('component-nav.php'); ?>


    <div class="awards-container col-12 float-left p-0">
    <div class="awards-subnav-container col-12 float-left">
    <div class="awards-subnav col-12 p-0">

  <ul class="col-12 p-0">
    <li class="col-6 add-border" id="active"><a href="<?php echo get_site_url(); ?>/statue"><img src="<?php echo get_template_directory_uri(); ?>/assets/awards/statues.svg" alt="trophies" class="col-12 col-lg-6 p-0"><p>Statues</p></a></li>
    <li class="col-6"><a href="<?php echo get_site_url(); ?>/bronze"><img src="<?php echo get_template_directory_uri(); ?>/assets/awards/bronze.svg" alt="plaques" class="col-12 col-lg-6 p-0"><p>Bronze</p></a></li>
    </ul>
  </div>
</div>

<div class="article-container container-1 col-12 col-lg-8 col-xl-8 float-left">

<article class="article-statues float-left col-12 col-lg-12">



<div class="text-wrap col-12 col-lg-10 offset-lg-1 float-left">
  <h1 class="col-lg-10 float-left"><?php the_field('main_section_header'); ?></h1>
  <div class="col-12 float-left mb-4">
    <?php the_field('main_section_body'); ?>
</div>

</div>





</article>
</div>

<div class="gallery-container container-2 col-12 col-lg-4 col-xl-4 float-left">
  <div class="gallery col-12 float-left" id="gallery">

  <?php
  if( have_rows('gallery') ): ?>
    <div class="gallery-photo-container col-12 col-xl-10 offset-xl-1 float-left p-0">
    <h2 class="col-12 mt-4">Gallery</h2>
    <div class="col-12">
    <?php
    $i = 1;
    while( have_rows('gallery') ) : the_row();
    $img = get_sub_field('gallery_image');
?>
    <?php if($i == 1) : ?>
    <a href="<?php echo $img['url']; ?>" data-lightbox="plaques"><img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="col-12 col-xl-6 float-left p-0"></a>
    <?php else :?>
    <a href="<?php echo $img['url']; ?>" data-lightbox="plaques"><img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="col-4 col-xl-6 float-left p-0"></a>
    <?php endif; 
    $i++; ?>
<?php
endwhile;
else :
endif;
?>
</div>
</div>
</div>

</div>

  </div>


</div> <!-- CLOSES CONTAINER -->

</body>

<?php get_footer(); ?>