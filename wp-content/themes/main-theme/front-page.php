<?php get_header(); ?>
<main>
	<section class="cover">
		<div class="container-xxl">
			<div class="row">
				<div class="col-md-7">
					<h1>Assistenza elettrodomestici<br><span class="color-primary">fuori garanzia</span></h1>
					<p class="text-uppercase text-4 font-bold">Riparazioni elettrodomestici a domicilio,<br> in tutta la Toscana.</p>
					<p>Preventivi prima della riparazione, senza sorprese!</p>
					<a href="#" class="btn bg-secodary">Chatta ora</a>
				</div>
				<div class="col-md-5">
					<p class="text-uppercase text-4 font-bold">Compila il form per prenotare una riparazione.</p>

				</div>
				<div class="col-md-12 pt-10 d-flex align-items-center">
					<div>
						<img class="img-res" src="<?php echo get_template_directory_uri(); ?>/assets/4star.svg" alt="chirurgia plastica firenze" width="80" loading="lazy">
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
					<h2 class="text-center mb-10">Perché affidarsi a noi</h2>
				</div>
			</div>
			<div class="row d-flex align-items-stretch">
				<div class="col-md-3 p-4">
					<div class="box-shadow py-6 px-5 h-100">
						<h3 class="color-primary">Pezzi<br> originali</h3>
						<p class="font-bold text-uppercase text-4">
							La qualità dei ricambi è essenziale per garantirti prestazioni sempre al top
						</p>
						<p>Per questo utilizziamo solo i migliori: originali o compatibili.
							Per noi il funzionamento e la durata dei nostri interventi sono fondamentali.</p>
					</div>
				</div>
				<div class="col-md-3 p-4">
					<div class="box-shadow py-6 px-5 h-100">
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
					<div class="box-shadow py-6 px-5 h-100">
						<h3 class="color-primary">Tecnici<br> Specializzati</h3>
						<p class="font-bold text-uppercase text-4"> I nostri interventi sono garantiti dalla competenza dei nostri tecnici </p>
						<p>
							Grazie alla loro formazione costante e all'esperienza nel settore, ti offriamo sempre un servizio preciso, sicuro e professionale. Affidati a noi per la qualità dei nostri interventi.
						</p>
					</div>
				</div>
				<div class="col-md-3 p-4">
					<div class="box-shadow py-6 px-5 h-100">
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
	<?php get_template_part('template/marchi', 'page'); ?>
	<?php get_template_part('template/recensioni', 'page'); ?>
</main>
<?php get_footer(); ?>