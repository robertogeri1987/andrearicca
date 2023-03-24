<?php
/* Template Name: Marchi e Luoghi */
get_header(); ?>
<main>
    <section class="cover cover-home">
        <div class="bubble bubble-above" style="position: absolute;right:0;top:0; transform:translate(50%,-50%)"></div>
        <div class="container-xxl">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h1>Assistenza Elettrodomestici <br> <span class="color-primary"><?php the_title() ?></span></h1>
                        <p class="text-uppercase text-4 font-bold">Riparazioni elettrodomestici <br> <span class="color-primary">fuori garanzia</span> a domicilio</p>
                        <p>Preventivi prima della riparazione, senza sorprese!</p>
                        <p class="text-thin"><strong>Da lunedì al venerdì dalle ore 8 e 30 alle 19 e 30. Il Sabato dalle ore 9 alle ore 13.</strong></p>
                        <a href="#" class="btn bg-secodary">Chatta ora</a>
                    </div>
                </div>
                <div class="col-md-6 align-items-center">
                    <div class="d-flex">
                        <div class="position-relative">
                            <?php
                            if (has_post_thumbnail()) {
                                $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                echo '<img src="' . $image_attributes[0] . '" alt="' . get_the_title() . '" width="100%" height="auto" class="my-4 img-fluid" style="object-fit:contain;border-radius:20px;"/>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pt-10 d-flex align-items-center">
                    <div>
                        <img class="img-res" src="<?php echo get_template_directory_uri(); ?>/assets/4star.svg" alt="recensioni" width="80" loading="lazy">
                    </div>
                    <div class="pl-4">
                        <p class="text-thin m-0 ">
                            Scegliere la nostra azienda per la riparazione degli elettrodomestici significa scegliere la <strong>sicurezza e la qualità</strong>, come dimostrano i <strong>più di 1.000 clienti soddisfatti.</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('template/perchesceglierci', 'page'); ?>
    <?php get_template_part('template/calltoaction', 'page'); ?>
    <?php get_template_part('template/marchi', 'page'); ?>
    <?php get_template_part('template/tipologie', 'page'); ?>
    <?php get_template_part('template/recensioni', 'page'); ?>
    <?php get_template_part('template/contactform', 'page'); ?>
</main>
<?php get_footer(); ?>