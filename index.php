<?php get_header(); ?>

<main style="padding:40px;">
  <h1><?php bloginfo('name'); ?></h1>
  <p>Theme is working ✅</p>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
