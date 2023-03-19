<section id="marchi" class="py-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <span class="color-primary text-uppercase text-thin font-bold mb-4 d-block">
                    Ripariamo elettrodomestici di qualsiasi marca
                </span>
                <h2><span class="text-stroke">Principali</span> <span class="color-primary">marchi assistiti</span></h2>
                <p>Il nostro servizio di riparazione di elettrodomestici copre tutte le principali marche del settore</p>
            </div>
        </div>
        <div class="row py-6">
            <?php
            $args = array(
                'post_type' => 'marchi',
                'posts_per_page' => -1, //mostra tutti i post
                'orderby' => 'title',
                'order' => 'ASC' //imposta l'ordine ascendente (A-Z)
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="col-md-3 p-2 marchio mb-2">
                        <div class="shadow-grey d-flex justify-content-center p-2">
                            <a href="<?php the_permalink(); ?>" class="text-center">
                                <?php
                                if (has_post_thumbnail()) {
                                    $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                    echo '<img src="' . $image_attributes[0] . '" alt="' . get_the_title() . '" width="100px" height="100px" class="my-4" style="object-fit:contain;"/>';
                                }
                                ?>
                                <?php the_title('<h3 class="text-4 text-center text-dark"> Assistenza <br>', '</h3>'); ?>
                            </a>
                        </div>
                    </div>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
        <div class="col-md-12">
            <p class="text-thin font-bold">
                *Desideriamo informare la gentile clientela che la nostra società non è abilitata ad effettuare interventi coperti dalla garanzia dei produttori menzionati sul nostro sito web, citati solo a titolo esemplificativo. Tuttavia, garantiamo un servizio post-garanzia di alta qualità, affidandoci a tecnici altamente specializzati che utilizzano esclusivamente ricambi originali acquistati dalle rispettive aziende, uniche proprietarie dei marchi. Grazie alla nostra esperienza e professionalità, siamo in grado di offrire una soluzione rapida ed efficace a qualsiasi problema tecnico, per garantire il perfetto funzionamento dei vostri elettrodomestici.
            </p>
        </div>
    </div>
</section>