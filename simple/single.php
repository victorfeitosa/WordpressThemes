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
              <?php if(has_post_thumbnail()): ?>
                  <div class="aligncenter post-thumb"><?php the_post_thumbnail() ?> </div>
              <?php endif; ?>
              <?php the_content(); ?>
            </article>
           <?php endwhile; ?>
      <?php else: ?>
        <?php echo wpautop('<h2> Sorry no posts found </h2>'); ?>
      <?php endif; ?>

      <?php comments_template(); ?>
    </div>

  <!-- Gets the footer file -->
  <?php get_footer(); ?>
