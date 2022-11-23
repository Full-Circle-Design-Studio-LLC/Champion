<?php
    $args = array(
        'pagename' => 'home'
    );
    $the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


        <div class="airflyte-container-2 container-3 col-12 col-lg-12 float-left">
  <a href="<?php the_field('airflyte_link'); ?>" target="_blank" class="airflyte-2 col-12 float-left" >
  <?php $img = get_field('airflyte_image'); ?>
  <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="col-12 col-md-6 float-left p-0">
  <div class="col-12 col-md-6 col-lg-6 offset-lg-0 float-left">
    <h3 class="col-12 airflyte-text"><?php the_field('airflyte_box_title'); ?></h3>
    <div class="col-12 airflyte-text"><?php the_field('airflyte_box_text'); ?></div>
  </div>
  </a>
</div>


        <?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php endif; ?>


