<div class="container-fluid sfondobianco" id="news_home">

    <div class="container">
        <h6 class="text-center color_green">News</h6>
        <h2 class="text-center color_yellow_dark">Scopri le ultime novità</h2>
        <div class="row news pt-6">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 8
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
</div>
<!--Fine-->