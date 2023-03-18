<?php get_header(); ?>
<div class="loading-screen"></div>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php $as_image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'nx_blog'); ?>

    <div class="page-hero" style="background: linear-gradient(rgba(0,0,0, 0.2), rgba(0,0,0, 0.4)), url(<?php echo $as_image_attributes[0]; ?>); background-size: cover; background-position: center center">

      <div class="v-centered">
        <div class="copy" name="about">
          <h1 class="section-title has-gradient"><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  <?php endwhile;
else : ?>
  <p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
<?php endif; ?>
<main class="main-content" style="background:black; color:white;" role="main" itemscope itemprop="mainContentOfPage">
  <div class="row">
    <div class="col-sm-8 ml-sm-auto mr-sm-auto">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">

            <h1 class="display-4 m-5 text-center"><?php the_title(); ?></h1>
            <?php the_content() ?>

          </article>

        <?php endwhile;
      else : ?>
        <p><?php esc_html__('Sorry, no post matched your criteria.', 'iw'); ?></p>
      <?php endif; ?>

    </div><!-- =.col-sm-8-->
  </div><!-- =.row -->

</main><!-- =.main-content -->
<?php get_footer(); ?>