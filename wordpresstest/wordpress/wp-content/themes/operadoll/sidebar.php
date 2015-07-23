            <div class="col span_1_of_3" id="main_side_content" style="background-color:blue;">
                <em>Current Litters</em>
                <?php if ( is_active_sidebar( 'sidebar-widget-area' ) ) : ?>
                  <div>   
                    <?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
                  </div>
                <?php endif; ?>
            </div>