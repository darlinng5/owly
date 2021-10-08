    <?php
        /**
         * owly_hook_content_after hook.
         * 
         */
        do_action( 'owly_hook_content_after' );
    ?>

        <!-- **Footer** -->
        <footer id="footer">
            <div class="container">
            <?php
                /**
                 * owly_footer hook.
                 * 
                 * @hooked owly_vc_footer_template - 10
                 *
                 */
                do_action( 'owly_footer' );
            ?>
            </div>
        </footer><!-- **Footer - End** -->

    </div><!-- **Inner Wrapper - End** -->
        
</div><!-- **Wrapper - End** -->
<?php
    
    do_action( 'owly_hook_bottom' );

    wp_footer();
?>
</body>
</html>