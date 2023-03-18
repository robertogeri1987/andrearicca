<?php
get_header();
$as_image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'nx_blog'); ?>
<div class="cover" style="background: linear-gradient(rgba(0,0,0, 0.4), rgba(0,0,0, 0.6)), url(<?php echo $as_image_attributes[0]; ?>); background-size: cover; background-position: center center">
  <div class="cover-content">
    <div class="cover-text" name="about">
      <h1 class="section-title has-gradient">
        <?php the_title() ?>
    </div>
  </div>
</div>
<main class="main-content" role="main" itemscope itemprop="mainContentOfPage">
  <div class="container mt-5 pb-5">
    <div class="row">
      <div class="col-sm-8 mx-auto d-block">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>" itemscope itemtype="http://schema.org/Article">
              <p><time itemprop="datePublished" datetime="<?php the_time('F j, Y'); ?>"><?php the_time('F j, Y'); ?> <?php //the_category(', '); 
                                                                                                                      ?></time> </p>

              <?php the_content() ?>

              <!--  <div class="comments">
              <?php // comments_template(); 
              ?>
            </div> =.comments -->
            </article>
          <?php endwhile;
        else : ?>
          <p><?php esc_html__('Sorry, no post matched your criteria.', 'iw'); ?></p>
        <?php endif; ?>
      </div><!-- =.col-sm-12 -->
    </div><!-- =.row -->
  </div><!-- =.container -->
  <section class="notizie_recenti py-6">
    <div class="container">
      <h6 class="text-center color_green">News</h6>
      <h2 class="text-center color_yellow_dark">Scopri le ultime novità</h2>
      <div class="row news pt-6">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => -1
        );

        $post_query = new WP_Query($args);
        if ($post_query->have_posts()) {
          while ($post_query->have_posts()) {
            $post_query->the_post();
        ?>
            <div class="col-md-4 notizia">

              <div class="bg-transparent shadow-grey radius-5-top">
                <figure class="radius-5"><?php echo get_the_post_thumbnail($post_id, 'notizie', array('class' => "radius-5-top img-fluid card-blog--home")); ?></figure>
                <?php $post_date = get_the_date(' d/m/Y'); ?>
                <p class="data_news">NEWS <span><?php echo $post_date; ?></span></p>
                <div class="pb-3">
                  <h3><?php the_title(); ?></h3>

                  <?php $testo = wp_trim_words(get_the_content(), $num_words = 8, $more = null); ?>
                  <p><?php echo $testo; ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn ">Leggi tutto</a>
                </div>
              </div>
            </div>
        <?php
          }
        }
        wp_reset_query();
        ?>
      </div>
    </div>
  </section>

</main><!-- =.main-content -->
<?php get_footer(); ?>