<?php
get_header(); ?>
<div class="loading-screen"></div>
<div class="main-content">
  <div class="container my-5">

    <?php if (is_search()) { ?>
      <h1><?php esc_html_e('Results for:', 'iw'); ?> <?php echo $s; ?></h1>
    <?php } else if (is_category() || is_tag()) { ?>
      <h1><?php echo single_cat_title(); ?></h1>
    <?php } else { ?>
      <h1><?php bloginfo('description'); ?></h1>
    <?php } ?>
    <hr>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-8">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
              <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <p><?php the_time('F j, Y'); ?> - <?php the_category(', '); ?> </p>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('iw_single', array('class' => 'img-fluid mb-4', 'alt' => get_the_title())); ?>
              </a>
              <?php the_excerpt() ?>
            </article>

            <hr class="my-5">

          <?php endwhile;
        else : ?>
          <p><?php esc_html__('Sorry, no post matched your criteria.', 'iw'); ?></p>
        <?php endif; ?>
      </div><!-- =.col-sm-8 -->
      <?php get_sidebar(); ?>
    </div><!-- =.row -->
  </div><!-- =.container -->
</div><!-- =.main-content -->
<?php get_footer(); ?>