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

    <div class="footer-socials">
        <a class="social-btn social-instagram" href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
            <i class="fa-brands fa-instagram" aria-hidden="true"></i>
        </a>
        <a class="social-btn social-facebook" href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
            <i class="fa-brands fa-facebook" aria-hidden="true"></i>
        </a>
    </div>
</footer>

<?php wp_footer();  ?>
</body>
</html>