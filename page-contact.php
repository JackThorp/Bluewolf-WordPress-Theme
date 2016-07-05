<!--
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

<?php endwhile; ?>
-->

<?php get_template_part('templates/page', 'header'); ?>
<div class="row">
  <div class="col-xs-8 col-xs-offset-2">
  <?php if ( function_exists( 'ninja_forms_display_form' ) ) {
      ninja_forms_display_form( 1 );
    }
  ?>
  </div>
</div>
