<?php wp_footer(); ?>
<footer>
<div class="col-5 offset-2 offset-md-1 offset-lg-0 float-left connect">
  <ul class="social-media">
    <li><h3>Connect With Us</h3></li>
    <li><a href="https://www.facebook.com/championtrophiesandawards/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets//facebook.svg" alt="link to Facebook"></a></li>
    <li><a href="https://www.instagram.com/champion_trophies_wv/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets//instagram.svg" alt="link to Instagram"></a></li>
  </ul>
</div>

  <div class="col-10 offset-2 col-md-3 offset-md-3 offset-lg-0 float-left hours">
  <ul>
    <li><h3>Hours of Operation</h3></li>
    <li>Monday - Friday</li>
    <?php
        $args = array(
            'pagename' => 'home'
        );
        $the_query = new WP_Query( $args ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <li><?php the_field('hours'); ?></li>

            <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>

  </ul>
  </div>

    <div class="col-10 offset-2 col-md-3 offset-md-1 offset-lg-0 float-left location">
    <ul class="float-left">
      <li>304.225.2630</li>
  <li>550 Beechurst Ave.</li>
  <li>Morgantown, WV 26505</li>
    </ul>
  </div>

  <div class="col-10 offset-2 col-md-3 offset-md-3 offset-lg-0 float-left float-lg-right designed-by-fcd-container">
    <div class="designed-by">Designed By:</div>
    <a class="fcd-logo" href="https://full-circle.design/" target="_blank"><img class="fcd-logo-img" src="<?php echo get_template_directory_uri(); ?>/assets//fcd-logo.svg"></a>
  </div>
  <div class="col-12 float-left text-center pb-4">
          <a href="/code-of-conduct/">Code of Conduct</a>
  </div>
</footer>

</div><!-- CLOSES PAGE-HOME -->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
