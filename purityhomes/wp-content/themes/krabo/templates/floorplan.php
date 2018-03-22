
<?php
/* Template Name: Floorplan */
$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0];

$bgImage = get_post_thumbnail_id() ? $featuredImage : get_stylesheet_directory_uri().'/assets/images/purity_banner1.jpg';

get_header();
?>
<main class="basic floorplan" >
    <?php get_template_part( 'templates/parts/page-header', 'none' ); ?>

    <section class="section gray-dark" style="opacity: 0;">
        <div class="container padding-md">
            <?php
            while ( have_posts() ) : the_post();
                the_content();
            endwhile; // End of the loop.
            ?>
        </div>

        <div class="loading">
            <div>
                <div class="c1"></div>
                <div class="c2"></div>
                <div class="c3"></div>
                <div class="c4"></div>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>