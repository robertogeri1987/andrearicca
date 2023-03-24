<!--Area widget-->
<footer>
    <section class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php
                    if (is_active_sidebar('footer1')) {
                        dynamic_sidebar('footer1');
                    }
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                    if (is_active_sidebar('footer2')) {
                        dynamic_sidebar('footer2');
                    }
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                    if (is_active_sidebar('footer3')) {
                        dynamic_sidebar('footer3');
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="credits" style="background-color:#202020;">
        <div style="border-top: solid 1px #fff">
            <div class="d-flex py-5 container mx-auto justify-content-between">
                <div class="text-thin">© <?php the_date('Y') ?>. Nome brand Rights Reserved.</div>
                <p class="text-thin">Credits: <a href="www.infloweb.it" style="display:inline;" class="color-primary">Infloweb</a></p>
            </div>
        </div>
    </section>
    <div class="chiama-ora">
        <a href="#">
            <svg height="60px" width="60px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 58 58" xml:space="preserve">
                <g>
                    <path style="fill:#2CB742;" d="M0,58l4.988-14.963C2.457,38.78,1,33.812,1,28.5C1,12.76,13.76,0,29.5,0S58,12.76,58,28.5
		S45.24,57,29.5,57c-4.789,0-9.299-1.187-13.26-3.273L0,58z" />
                    <path style="fill:#FFFFFF;" d="M47.683,37.985c-1.316-2.487-6.169-5.331-6.169-5.331c-1.098-0.626-2.423-0.696-3.049,0.42
		c0,0-1.577,1.891-1.978,2.163c-1.832,1.241-3.529,1.193-5.242-0.52l-3.981-3.981l-3.981-3.981c-1.713-1.713-1.761-3.41-0.52-5.242
		c0.272-0.401,2.163-1.978,2.163-1.978c1.116-0.627,1.046-1.951,0.42-3.049c0,0-2.844-4.853-5.331-6.169
		c-1.058-0.56-2.357-0.364-3.203,0.482l-1.758,1.758c-5.577,5.577-2.831,11.873,2.746,17.45l5.097,5.097l5.097,5.097
		c5.577,5.577,11.873,8.323,17.45,2.746l1.758-1.758C48.048,40.341,48.243,39.042,47.683,37.985z" />
                </g>
            </svg>
        </a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>