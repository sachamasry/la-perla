<?php 
$fitmas_copyright = fitmas_option( 'fitmas_copyright_text' );
?>
<div class="container footer-default">
	<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) : ?>
	<div class="widget-area pb-4 pb-lg-3">
        <div class="row justify-content-between align-items-start">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="col-md-6 col-xl-3 mb-4 mb-xl-0">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div><!-- .widget-area -->
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <div class="col-md-6 col-xl-3 mb-4 mb-xl-0">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div><!-- .widget-area -->
            <?php endif; ?>	

            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="col-md-6 col-xl-3 mb-4 mb-xl-0">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div><!-- .widget-area -->
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="col-md-6 col-xl-3 mb-0 mb-xl-0">
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                </div><!-- .widget-area -->
            <?php endif; ?>
        </div>
    </div>
	<?php endif?>
</div>
<div class="copyright-wrap">
    <div class="copyright-container container pt-4">
        <div class="row justify-content-between">
            <div class="col-auto order-2 order-lg-1"><p class="copyright-text"><?php echo wp_kses( $fitmas_copyright, 'fitmas_allow_html' ); ?></p></div>
            <div class="col-auto order-1 order-lg-2"><p class="attribution-text">Designed by <a href="https://sachamasry.com/">SachaMasry.com</a>. Icons by <a href="https://icons8.com/">Icons8</a></p></div>
        </div>                
    </div>
</div>
