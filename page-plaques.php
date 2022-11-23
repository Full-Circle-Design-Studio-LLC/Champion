<?php get_header() ?>
      </header>


<body>
  <div class="container-fluid p-0" id="page-plaques">



    <?php include('component-nav.php'); ?>

<div class="awards-container col-12 float-left p-0">
<div class="awards-subnav-container col-12 float-left">
<div class="awards-subnav col-12 p-0">
  <ul class="col-12 p-0">
    <li class="col-3"><a href="<?php echo get_site_url(); ?>/awards"><img src="<?php echo get_template_directory_uri(); ?>/assets/awards/1.svg" alt="trophies" class="col-12 col-lg-6 p-0"><p>Trophies</p></a></li>
    <li class="col-3" id="active"><a href="<?php echo get_site_url(); ?>/plaques"><img src="<?php echo get_template_directory_uri(); ?>/assets/awards/2.svg" alt="plaques" class="col-12 col-lg-6 p-0"><p>Plaques</p></a></li>
    <li class="col-3"><a href="<?php echo get_site_url(); ?>/medals"><img src="<?php echo get_template_directory_uri(); ?>/assets/awards/3.svg" alt="medals" class="col-12 col-lg-6 p-0"><p>Medals</p></a></li>
    <li class="col-3"><a href="<?php echo get_site_url(); ?>/corporate"><img src="<?php echo get_template_directory_uri(); ?>/assets/awards/4.svg" alt="corporate" class="col-12 col-lg-6 p-0"><p>Corporate</p></a></li>

    </ul>
  </div>
</div>

<div class="article-container container-1 col-12 col-lg-8 col-xl-8 float-left">

<article class="article-awards float-left col-12 col-lg-12">



<div class="text-wrap col-12 col-lg-10 offset-lg-1 float-left">
  <h1 class="col-lg-10 float-left"><?php the_field('main_section_header'); ?></h1>
  <div class="col-12 float-left mb-4">
    <?php the_field('main_section_body'); ?>
</div>

</div>




</article>

<?php include('component-airflyte.php'); ?>




  </div>

  <div class="gallery-container container-2 col-12 col-lg-4 col-xl-4 float-left">
  <div class="gallery col-12 float-left">

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
    <a href="<?php echo $img['url']; ?>" data-lightbox="plaques"><img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="col-12 col-xl-12 float-left p-0"></a>
    <?php else :?>
    <a href="<?php echo $img['url']; ?>" data-lightbox="plaques"><img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="col-4 col-xl-4 float-left p-0"></a>
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