<?php get_header(); ?>
<main>
	<section class="cover cover-home">
		<div class="bubble bubble-above" style="position: absolute;right:0;top:0; transform:translate(50%,-50%)"></div>
		<div class="container-xxl">
			<div class="row">
				<div class="col-md-6 d-flex align-items-center">
					<div>
						<h1>Assistenza elettrodomestici<br><span class="color-primary">fuori garanzia</span></h1>
						<p class="text-uppercase text-4 font-bold">Riparazioni elettrodomestici a domicilio,<br> in tutta la Toscana.</p>
						<p>Preventivi prima della riparazione, senza sorprese!</p>
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
							<img style="position:absolute; bottom:-20px; left:50%; transform:translate(-50%)" src="<?php echo get_template_directory_uri(); ?>/assets/img/assistenza-elettrodomestici.png" alt="Tipi di elettrodomestici" width="280" loading="lazy">
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
	<?php get_template_part('template/tipologie', 'page'); ?>
	<section id="valori" class="py-12">
		<div class="container-fluid px-5 text-center">
			<div class="row">
				<div class="col-md-12">
					<span class="color-primary text-uppercase text-thin font-bold mb-4 d-block">
						I nostri punti di forza
					</span>
					<h2 class="text-center mb-10">Perché affidarsi a noi</h2>
				</div>
			</div>
			<div class="row d-flex align-items-stretch">
				<div class="col-md-3 p-4">
					<div class="shadow-grey py-6 px-5 h-100 position-relative">
						<img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/pezzi-originali.svg" alt="pezzi originali per qualsisi elettrodomestico" width="100" loading="lazy">
						<h3 class="color-primary">Pezzi<br> originali</h3>
						<p class="font-bold text-uppercase text-4">
							La qualità dei ricambi è essenziale per garantirti prestazioni sempre al top
						</p>
						<p>Per questo utilizziamo solo i migliori: originali o compatibili.
							Per noi il funzionamento e la durata dei nostri interventi sono fondamentali.</p>
					</div>
				</div>
				<div class="col-md-3 p-4">
					<div class="shadow-grey py-6 px-5 h-100">
						<img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/interventi-rapidi.svg" alt="interventi rapidi ed efficaci" width="100" loading="lazy">
						<h3 class="color-primary">Interventi<br> Rapidi</h3>
						<p class="font-bold text-uppercase text-4">
							I nostri interventi sono rapidi ed efficaci dal momento della chiamata al tecnico.
						</p>
						<p>
							Grazie alla competenza dei nostri tecnici specializzati e alla qualità dei nostri ricambi. Affidati a noi per riparazioni tempestive e soluzioni efficaci e durature.
						</p>
					</div>
				</div>
				<div class="col-md-3 p-4">
					<div class="shadow-grey py-6 px-5 h-100">
						<img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/tecnici-specializzati.svg" alt="tecnici specializzati" width="100" loading="lazy">
						<h3 class="color-primary">Tecnici<br> Specializzati</h3>
						<p class="font-bold text-uppercase text-4"> I nostri interventi sono garantiti dalla competenza dei nostri tecnici </p>
						<p>
							Grazie alla loro formazione costante e all'esperienza nel settore, ti offriamo sempre un servizio preciso, sicuro e professionale. Affidati a noi per la qualità dei nostri interventi.
						</p>
					</div>
				</div>
				<div class="col-md-3 p-4">
					<div class="shadow-grey py-6 px-5 h-100">
						<img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/preventivi-trasparenti.svg" alt="preventivi trasparenti" width="100" loading="lazy">
						<h3 class="color-primary">Preventivi<br> Trasparenti</h3>
						<p class="font-bold text-uppercase text-4">La qualità dei ricambi è essenziale per garantirti prestazioni sempre al top</p>
						<p>Per questo utilizziamo solo i migliori: originali o compatibili.
							Per noi il funzionamento e la durata dei nostri interventi sono fondamentali.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('template/calltoaction', 'page'); ?>
	<?php get_template_part('template/marchi', 'page'); ?>
	<?php get_template_part('template/recensioni', 'page'); ?>
	<?php get_template_part('template/contactform', 'page'); ?>
</main>
<?php get_footer(); ?>