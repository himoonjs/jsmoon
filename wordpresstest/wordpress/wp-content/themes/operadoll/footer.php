        <div class="section group" id="footer">
            <footer class="col span_3_of_3" style="background-color:purple;">
                <div>
                    <em>Social media</em>
                    <?php if ( is_active_sidebar( 'footer-left-widget-area' ) ) : ?>
                      <?php dynamic_sidebar( 'footer-left-widget-area' ); ?>
                    <?php endif; ?>
                </div>
                <div>
                    <em>additional info</em>
                    <?php if ( is_active_sidebar( 'footer-right-widget-area' ) ) : ?>
                      <?php dynamic_sidebar( 'footer-right-widget-area' ); ?>
                    <?php endif; ?> 
                </div>
            </footer>
        </div>

    </div>
    <?php wp_footer(); ?>
</body>
</html>