<?php
/* Template Name: Contatti*/
get_header();
?>
<main>
    <section id="cover" class="pt-5">
        <div class="bg-grey-light py-12">
            <div class="container">
                <div class="row pb-5">
                    <div class="col-md-8 mx-auto text-center cover__text">
                        <h1>Prenota l’intervento di assistenza!</h1>
                        <?php the_content() ?>
                        <div class="d-flex align-items-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon mr-2" viewBox="0 0 512 512" width="25" height="25">
                                <path d="M451 374c-15.88-16-54.34-39.35-73-48.76-24.3-12.24-26.3-13.24-45.4.95-12.74 9.47-21.21 17.93-36.12 14.75s-47.31-21.11-75.68-49.39-47.34-61.62-50.53-76.48 5.41-23.23 14.79-36c13.22-18 12.22-21 .92-45.3-8.81-18.9-32.84-57-48.9-72.8C119.9 44 119.9 47 108.83 51.6A160.15 160.15 0 0083 65.37C67 76 58.12 84.83 51.91 98.1s-9 44.38 23.07 102.64 54.57 88.05 101.14 134.49S258.5 406.64 310.85 436c64.76 36.27 89.6 29.2 102.91 23s22.18-15 32.83-31a159.09 159.09 0 0013.8-25.8C465 391.17 468 391.17 451 374z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            </svg>
                            <a href="tel:05500000" class="color-primary">
                                inserire numero
                            </a>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <svg version="1.1" id="mail" class="mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="fill:#000;" xml:space="preserve" height="25" width="25">
                                <g>
                                    <g>
                                        <path d="M485.743,85.333H26.257C11.815,85.333,0,97.148,0,111.589V400.41c0,14.44,11.815,26.257,26.257,26.257h459.487
c14.44,0,26.257-11.815,26.257-26.257V111.589C512,97.148,500.185,85.333,485.743,85.333z M475.89,105.024L271.104,258.626
c-3.682,2.802-9.334,4.555-15.105,4.529c-5.77,0.026-11.421-1.727-15.104-4.529L36.109,105.024H475.89z M366.5,268.761
l111.59,137.847c0.112,0.138,0.249,0.243,0.368,0.368H33.542c0.118-0.131,0.256-0.23,0.368-0.368L145.5,268.761
c3.419-4.227,2.771-10.424-1.464-13.851c-4.227-3.419-10.424-2.771-13.844,1.457l-110.5,136.501V117.332l209.394,157.046
c7.871,5.862,17.447,8.442,26.912,8.468c9.452-0.02,19.036-2.6,26.912-8.468l209.394-157.046v275.534L381.807,256.367
c-3.42-4.227-9.623-4.877-13.844-1.457C363.729,258.329,363.079,264.534,366.5,268.761z"></path>
                                    </g>
                                </g>
                            </svg>
                            <a href="mailto:" class="color-primary">inseriremail</a>
                        </div>
                    </div>
                    <div class="col-md-8 mx-auto text-center">
                        <span class="color-primary text-uppercase text-thin font-bold mb-4 d-block">
                            Contattaci senza impegno
                        </span>
                        <h2 class="text-stroke">Richiedi un intervento</h2>
                        <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>