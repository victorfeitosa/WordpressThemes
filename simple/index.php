  <!-- Gets the header file -->
  <?php get_header(); ?>

  <div class="container">
    <div class="main">
      <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <article class="post">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="meta">
                Created by <a href="<?php get_author_posts_url( get_the_author_meta('ID'))?>">
                  <?php the_author(); ?></a> on <?php the_date('d-m-Y'); ?>
              </div>
              <div class="wrap">
              <?php if(has_post_thumbnail()): ?>
                  <div class="aligncenter post-thumb"><?php the_post_thumbnail('full') ?> </div>
              <?php endif; ?>
              </div>
              <?php the_excerpt(); ?>
              <br />
              <a class="button" href="<?php the_permalink(); ?>">Read More</a>
            </article>
            <?php endwhile; ?>
      <?php else: ?>
        <?php echo wpautop('<h2> Sorry no posts here </h2>'); ?>
      <?php endif; ?>
    </div>


  <!-- Gets the footer file -->
  <?php get_footer(); ?>
