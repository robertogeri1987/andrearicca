<section id="tipologie" class="py-12 bg-grey-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Riparazione elettrodomestici di tutte le tipologie:</h2>
                <p>
                    Il nostro <strong>servizio di assistenza elettrodomestici</strong> è la soluzione ideale per risolvere rapidamente e con professionalità qualsiasi guasto o malfunzionamento del tuo grande elettrodomestico, come lavatrici, asciugatrici, lavastoviglie, frigoriferi, piani cottura e forni elettrici.
                </p>
                <p>
                    I <strong>nostri tecnici specializzati</strong> sono in grado di individuare con precisione la causa del problema e di effettuare le riparazioni necessarie in <strong>tempi brevi</strong>.
                </p>
                <p>
                    <strong>Interventi garantiti entro 24 ore dalla richiesta.</strong>
                </p>
            </div>
            <?php
            $args = array(
                'post_type' => 'elettrodomestici',
                'posts_per_page' => -1 //mostra tutti i post
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="col-md-3 py-5 elettrodomestico d-flex align-items-center justify-content-center">
                        <a href="<?php the_permalink(); ?>">
                            <div class="d-flex aling-items-bottom justify-content-center bg-gradient rounded-circle" style="width:160px; height:160px;">
                                <?php
                                if (has_post_thumbnail()) {
                                    $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                    echo '<img src="' . $image_attributes[0] . '" alt="' . get_the_title() . '" width="auto" height="160" />';
                                }
                                ?>
                            </div>
                            <?php the_title('<h3 class="text-4 mt-5 text-center color-dark">', '</h3>'); ?>
                        </a>
                    </div>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>