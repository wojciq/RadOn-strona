<footer class="site-footer">
    <nav class="footer-nav">
        <!-- Zmiana # na dynamiczne linki -->
        <a href="<?php echo home_url(); ?>">Strona Główna</a>
        <a href="<?php echo site_url('/o-nas'); ?>">O nas</a>
        <a href="<?php echo site_url('/projekty'); ?>">Projekty</a>
        <a href="<?php echo site_url('/aktualnosci'); ?>">Aktualności</a>
    </nav>
    
    <hr class="footer-divider">
    
    <div class="footer-main">
        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo Koła Naukowego RadON" class="footer-logo-img">
        </div>
        <div class="footer-contact">
            <p>Napisz do nas maila!</p>
            <a href="mailto:kn.radon@pwr.edu.pl">kn.radon@pwr.edu.pl</a>
        </div>
    </div>
</footer>

<?php wp_footer();  ?>
</body>
</html>