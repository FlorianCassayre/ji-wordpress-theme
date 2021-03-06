<?php get_header(); ?>

<div class="container page-container">
  <div class="page-side">
    <?php get_template_part( 'inc/sidebar' ); ?>
  </div>
  <div class="page-main">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="post">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <p class="post-info">
          Published on <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
        </p>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
