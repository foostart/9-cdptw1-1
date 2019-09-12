<?php get_header(); ?>

  <div class="row">

    <div class="col-sm-12 blog-main">
  <?php
   $custom_query = new WP_Query($args);
while ($custom_query->have_posts()):$custom_query->the_post();


 endwhile;
   ?>
    </div> <!-- /.blog-main -->



  </div> <!-- /.row -->

<?php get_footer(); ?>