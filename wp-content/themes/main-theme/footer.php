<!--Area widget-->
<footer class="py-12">
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
</footer>
<?php wp_footer(); ?>
</body>

</html>