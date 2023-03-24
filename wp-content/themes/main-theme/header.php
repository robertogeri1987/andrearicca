<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="theme-color" content="#F5EDD3">
	<meta name="keywords" content="">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="msvalidate.01" content="29326884E5ECFF1DA40DA3A0026A7D07" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
	<noscript>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet" type="text/css" />
	</noscript>

	<!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<!--Menu di navigazione-->
	<header class="header">
		<div class="top_header">
			<div class="container d-flex flex-row justify-content-between" style="height:100%">
				<!-- cd-header-buttons -->
				<ul class="cd-header-buttons">
					<li><a class="cd-nav-trigger" href="mailto:"><i class="fas fa-envelope"></i><span>TODO email</span></a></li>
					<li>
						<div class="vertical-saparator"></div>
					</li>
					<li><a class="cd-nav-trigger" href="tel:+393473552180"><i class="fas fa-phone fa-rotate-90"></i><span>+39 347 355 2180</span></a></li>
					<li>
						<div class="vertical-saparator"></div>
					</li>
					<li><i class="fas fa-clock"></i><span>Lun - Dom 08:00 - 18:00</span></li>
				</ul>

				<!-- cd-header-buttons -->
				<ul class="cd-header-buttons">
					<li><a class="cd-nav-trigger" href="TODO" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a></li>
					<li><a class="cd-nav-trigger" href="TODO" target="_blank"><i class="fab fa-instagram fa-2x"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="for-mobile-menu">
			<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
				<div class="container" itemscope itemtype="https://schema.org/LocalBusiness">
					<a itemprop="url" class="navbar-brand" href="<?php echo get_home_url(); ?>">
						<?php
						$percorso = get_template_directory_uri();
						echo '<img itemprop="logo" itemprop="photo" src="' .  $percorso . '/assets/img/assistenza-riparazione-elettrodomestici.jpg"' . ' alt="assistenza e riparazione elettodomestici" width="160" height="40">';
						?>
					</a>

					<button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="hamburger hamburger--elastic">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>

					<?php
					// if(has_nav_menu( 'menu-1' )) {
					$menu_id = getIdMenuFromLocation('header');
					$primaryNav = wp_get_nav_menu_items($menu_id);
					// }

					//dd($primaryNav);
					?>
					<div id="navbarContent" class="collapse navbar-collapse">

						<ul id="cd-primary-nav" class="navbar-nav m-auto">
							<?php foreach ($primaryNav as $itemPrimaryNav) {

								if ($itemPrimaryNav->menu_item_parent == 0) {

									$children = get_nav_menu_item_children($itemPrimaryNav->ID, $primaryNav, true);

									$classParente = (!empty($children)) ? ' class="nav-item dropdown"' : '';
									$hafigli = (!empty($children)) ? ' dropdown-toggle' : '';
									$hadatatoggle = (!empty($children)) ? ' data-toggle="dropdown" ' : '';

									echo '<li ' . $classParente . '>';
									//echo '<a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>';
									echo '<a id="dropdownMenu1" ' . $hadatatoggle . ' class="nav-link ' . $hafigli . ' " aria-haspopup="true" aria-expanded="false" href="' . $itemPrimaryNav->url . '">' . $itemPrimaryNav->title . '</a>';

									if (!empty($children)) {

										echo '<ul aria-labelledby="dropdownMenu1" class="dropdown-menu shadow-grey">';
										foreach ($children as $itemSecondaryNav) {

											if ($itemSecondaryNav->menu_item_parent == $itemPrimaryNav->ID) {

												$childrenItem_2_liv = get_nav_menu_item_children($itemSecondaryNav->ID, $children, true);

												$classParente2 = (!empty($childrenItem_2_liv)) ? ' class="dropdown-submenu lev-2"' : ' class="stile-menu2"';
												$hafigli2 = (!empty($childrenItem_2_liv)) ? ' dropdown-toggle' : ' class="dropdown-item ciao';
												$addDropdowLevel2 = (!empty($childrenItem_2_liv)) ? ' id="dropdownMenu2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item' : '';


												echo '<li ' . $classParente2 . '>';
												// echo '<a href="'. $itemSecondaryNav->url .'">'.$itemSecondaryNav->title .'</a>';
												echo '<a  href="' . $itemSecondaryNav->url . '"' . $addDropdowLevel2 . '  ' . $hafigli2 . '" > ' . $itemSecondaryNav->title . '</a>';

												if (!empty($childrenItem_2_liv)) {

													echo '<ul aria-labelledby="dropdownMenu2" class="dropdown-menu shadow lev-3">';
													foreach ($childrenItem_2_liv as $itemThirdNav) {

														if ($itemThirdNav->menu_item_parent == $itemSecondaryNav->ID) {

															$childrenItem_3_liv = get_nav_menu_item_children($itemThirdNav->ID, $children, false);

															$classParente3 = (!empty($childrenItem_3_liv)) ? ' class="dropdown-submenu lev-3"' : ' class="lev-3"';

															echo '<li ' . $classParente3 . '>';
															// echo '<a href="'. $itemThirdNav->url .'">'.$itemThirdNav->title .'</a>';
															echo '<a href="' . $itemThirdNav->url . '" class="dropdown-item">' . $itemThirdNav->title . '</a>';

															if (!empty($childrenItem_3_liv)) {
																echo '<ul class="is-hidden"><!-- inizio lev4 -->';
																foreach ($childrenItem_3_liv as $itemForthNav) {
																	echo '<li>';
																	echo '<a href="' . $itemForthNav->url . '">' . $itemForthNav->title . '</a>';
																	echo '</li>';
																}
																echo '</ul><!--fine lev4-->';
															}

															echo '</li>';
														}
													}
													echo '</ul><!--fine lev3-->';
												} //Chiusura secondo if

												echo '</li>';
											}
										}

										echo '</ul>';
									}
									echo '</li>'; //li di primo livello
								}
							} ?>
						</ul><!-- ul di apertura menu-->
						<div class="informazioni_mobile">
							<div class="row">
								<div class="col-md-12 py-5">
									<ul class="cd-header-buttons">
										<li><a class="cd-nav-trigger" href="TODO" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a></li>
										<li><a class="cd-nav-trigger" href="TODO" target="_blank"><i class="fab fa-instagram fa-2x"></i></a></li>
									</ul>
								</div>
								<div class="col-md-12 pb-5">
									<ul class="elenco_menu_contatti">
										<li><a class="cd-nav-trigger" href="mailto:TODO" target="_blank"><i class="fas fa-envelope fa-2x"></i>TODO email</a></li>
										<li><a class="cd-nav-trigger" href="tel:TODO" target="_blank"><i class="fas fa-phone fa-2x"></i>(+39)TODO</a></li>
										<li><a class="cd-nav-trigger" href="#" target="_blank"><i class="fas fa-clock fa-2x"></i>Lun-Ven08:00-18:00</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php
					// $primaryNav = wp_get_nav_menu_items($menu_id); //tutto il menu non ad albero
					// $albero = buildTree($primaryNav); //crea albero dalle parent

					//echo '<pre>'; var_export($albero);echo '</pre>';

					// echo makeTree($albero);

					?>
				</div>
			</nav>
		</div>
		</div>
	</header>