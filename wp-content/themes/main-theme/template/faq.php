     <?php
        // check if the repeater field has rows of data
        if (have_rows('da_sapere_accordion')) :
            $i = 1; ?>
         <div class="container pt-12" id="#da_sapere">
             <div class="col-md-10" itemscope itemtype="https://schema.org/FAQPage">
                 <h2 class="mb-5"><span class="text-stroke">Domande</span> <span class="color-primary">Frequenti</span></h2>
                 <div class="accordion" id="dasapere">

                     <?php
                        // loop through the rows of data
                        while (have_rows('da_sapere_accordion')) : the_row(); ?>

                         <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                             <div class="card-header" id="heading-<?php echo $i; ?>">
                                 <h3 class="mb-0" itemprop="name">
                                     <button class="card_button py-4" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $i; ?>" style="padding-left:0;">
                                         <?php the_sub_field('titolo'); ?>
                                     </button>
                                 </h3>
                             </div>
                             <div id="collapse-<?php echo $i; ?>" class="collapse" aria-labelledby="heading-<?php echo $i; ?>" data-parent="#dasapere" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                 <div class="card-body p-1" itemprop="text">
                                     <?php the_sub_field('testo'); ?>
                                 </div>
                             </div>
                         </div>

                     <?php $i++;
                        endwhile;
                        ?>

                 </div>
             </div>
         </div>
     <?php endif;
        wp_reset_query();
        ?>