<?php get_header() ?>
      </header>


<body>
  <div class="container-fluid p-0" id="page-bronze">


    <?php include('component-nav.php'); ?>


    <div class="awards-container col-12 float-left p-0">
    <div class="awards-subnav-container col-12 float-left">
    <div class="awards-subnav col-12 p-0">

  <ul class="col-12 p-0">
    <li class="col-6"><a href="<?php echo get_site_url(); ?>/statue"><img src="<?php echo get_template_directory_uri(); ?>/assets/awards/statues.svg" alt="trophies" class="col-12 col-lg-6 p-0"><p>Statues</p></a></li>
    <li class="col-6" id="active"><a href="<?php echo get_site_url(); ?>/bronze"><img src="<?php echo get_template_directory_uri(); ?>/assets/awards/bronze.svg" alt="plaques" class="col-12 col-lg-6 p-0"><p>Bronze</p></a></li>
    </ul>
  </div>
</div>



  <div class="article-container container-1 col-12 float-left">
  <article class="article-awards float-left col-12">

  <div class="float-left col-12 p-0 mt-4 mb-4">

  <div class="text-wrap-2 float-left col-12 col-lg-10 offset-lg-1">
    <h1 class="col-12 mt-4 float-left"><?php the_field('main_section_header'); ?></h1>
    <div class="col-12 float-left mb-4">
      <?php the_field('main_section_body'); ?>
  </div>
  </div>

  </div>

  </article>
    </div>
</div>


</div> <!-- CLOSES CONTAINER -->

</body>

<?php get_footer(); ?>