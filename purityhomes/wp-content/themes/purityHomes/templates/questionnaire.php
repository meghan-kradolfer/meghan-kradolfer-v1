
<?php
/* Template Name: Questionnaire */

$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0];

$bgImage = get_post_thumbnail_id() ? $featuredImage : get_stylesheet_directory_uri().'/assets/images/purity_banner1.jpg';

get_header();
?>
<main class="side-bar" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/purity_sketch.jpg');">
    <?php get_template_part( 'templates/parts/page-header', 'none' ); ?>

    <section class="gray-light">
        <div class="container gray-light">
            <div class="row padding-md">
                <div class="col-md-10 col-md-offset-1">
                    <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; else: ?>
                        <h1>Purity Homes</h1>
                        <h4>Empowering your commitment to health and sustainable development</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>