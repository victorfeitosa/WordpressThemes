<?php get_header(); ?>
    <main class="container content main">
      <div class="main block">
      <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post() ?>
            <?php get_template_part('content', get_post_format()); ?>
          <?php endwhile; ?>
        <?php else: ?>
          <?php echo apautop('Sorry, no posts were found'); ?>
        <?php endif; ?>

        <?php comments_template(); ?>
      </div>

      <aside class="side">
        <?php if(is_active_sidebar('sidebar')): ?>
          <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
        </div>
      </aside>
    </main>


<?php get_footer(); ?>