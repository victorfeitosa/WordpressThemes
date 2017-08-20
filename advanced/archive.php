
<?php get_header(); ?>
    <main class="container content main">
      <h2>
      <?php
        if(is_category()) {
          single_cat_title();
        }
        else if(is_author()) {
          the_post();
          echo 'Archives by author: ' . get_the_author();
          rewind_posts();
        }
        else if (is_tag()) {
          single_tag_title();
        }
        else if (is_day()) {
          echo 'Archives by Day: ' . get_the_date();
        }
        else if (is_month()) {
          echo 'Archives by Month: ' . get_the_date('F Y');
        }
        else if (is_year()) {
          echo 'Archives by Year: ' . get_the_date('Y');
        }
      ?>
      </h2>
      <div class="main block">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post() ?>
          <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile; ?>
      <?php else: ?>
        <?php echo apautop('Sorry, no posts were found'); ?>
      <?php endif; ?>
      </div>

      <aside class="side">
        <?php if(is_active_sidebar('sidebar')): ?>
          <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
        </div>
      </aside>
    </main>

    <?php get_footer(); ?>