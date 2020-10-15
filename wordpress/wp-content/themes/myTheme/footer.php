            </div>

            <footer class="footer">
                    <div class='footer__container'>
                        <div class="footer__menu">
                            <?php wp_nav_menu(['theme_location' => 'footer-menu', 'fallback_cb' => false]) ?>
                        </div>
                        <div class="footer__social-media">
                            <p class="footer__social-media--fallow">Follow</p>
                            <?php wp_nav_menu(['theme_location' => 'social-media', 'fallback_cb' => false]) ?>
                        </div>
                    </div>
            </footer>
        <?php wp_footer() ?>
    </body>
</html> 