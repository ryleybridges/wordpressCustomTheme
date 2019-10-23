<?php if(has_nav_menu('bottom_navigation')): ?>
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <?php wp_nav_menu(array('theme_location' => 'side_navigation'));?>
            </div>
        </div>
    </footer>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
