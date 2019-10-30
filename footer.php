<?php if(has_nav_menu('bottom_navigation')): ?>
    <footer class="navColour text-white">
        <div class="container">
            <div class="row">
                <?php wp_nav_menu(array('theme_location' => 'side_navigation'));?>
            </div>
            <div class="row">
                <div id="footerText">
                    <?php echo get_theme_mod('1902_footerText') ?>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
