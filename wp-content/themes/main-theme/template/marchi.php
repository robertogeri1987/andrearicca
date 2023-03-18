<section id="marchi" class="py-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Principali <span class="color-primary">marchi assistiti</span></h2>
                <p>Il nostro servizio di riparazione di elettrodomestici copre tutte le principali marche del settore</p>
            </div>
            <?php
            $args = array(
                'post_type' => 'marchi',
                'posts_per_page' => -1 //mostra tutti i post
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="col-md-3 marchio">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                            <?php the_title('<h3 class="text-4 text-center"> Assistenza <br>', '</h3>'); ?>
                        </a>
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