
<?php
/* Template Name: Side Bar */

$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0];

$bgImage = get_post_thumbnail_id() ? $featuredImage : get_stylesheet_directory_uri().'/assets/images/purity_banner1.jpg';

get_header();
?>
<main class="side-bar" style="background-image: url('<?php  bloginfo('url'); ?>/wp-content/themes/krabo/assets/images/purity_sketch.jpg');">
    <section class="bg-image" style="background-image: url('<?php  echo $bgImage; ?>');">
        <div class="container">
            <div class="row">
                <div class="header">
                    <div class="outer-circle">
                        <div class="image">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/purity_logo_colour.png" alt="Purity Homes" />
                        </div>
                    </div>

                </div>
            </div>
            <div class="banner-label" style="z-index: 2;">
                <?php the_title( '<h1 class="text-uppercase">', '</h1>' ); ?>
            </div>
        </div>
    </section>

    <section class="gray-light">
        <div class="container gray-light">
            <div class="row padding-md">
                <div class="col-md-7">
                    <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; else: ?>
                        <h1>Purity Homes</h1>
                        <h4>Empowering your commitment to health and sustainable development</h4>
                    <?php endif; ?>
                </div>
                <div class="col-md-5">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>