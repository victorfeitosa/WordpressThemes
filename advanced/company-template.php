<?php
/*
  Template Name: Company Layout
*/
?>

<?php get_header(); ?>

      <main class="container content main">
      <div class="main block">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post() ?>
            <article class="page">
              <h2><?php the_title(); ?></h2>
              <p class="phone">Company Phone: 555-555-5555 </p>
              <?php the_content(); ?>
            </article>
          <?php endwhile; ?>
        <?php else: ?>
          <?php echo apautop('Sorry, no posts were found'); ?>
        <?php endif; ?>
    </main>

    <?php get_footer(); ?>