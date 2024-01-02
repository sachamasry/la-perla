<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fitmas
 */

get_header();

?>
<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <<?php echo esc_attr($fitmas_breadcrumb_select_html); ?> class="breadcrumb-title">
                        <?php the_title(); ?>
                    </<?php echo esc_attr($fitmas_breadcrumb_select_html); ?>>

                    <?php if( function_exists('bcn_display') ) : ?>
                        <div class="breadcrumb-menu">
                            <div class="bre-sub">
                                <?php bcn_display(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fitmas-template-for-elementor">
      <?php
      while ( have_posts() ) : the_post();
            the_content();
      endwhile;
      ?>
</div>
<?php
get_footer();
