  <!-- Gets the header file -->
  <?php get_header(); ?>

    <div class="container">
    <div class="main">
      <?php if(have_posts()) : ?>
           <?php while(have_posts()) : the_post(); ?>
           <article class="post">
              <?php if(has_post_thumbnail()): ?>
                  <div class="aligncenter post-thumb"><?php the_post_thumbnail() ?> </div>
              <?php endif; ?>
              <?php the_content(); ?>
              <br />
            </article>
           <?php endwhile; ?>
      <?php else: ?>
        <?php echo wpautop('<h2> Sorry no posts here </h2>'); ?>
      <?php endif; ?>
    </div>

  <!-- Gets the footer file -->
  <?php get_footer(); ?>
