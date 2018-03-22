
<?php
/* Template Name: Basic */
$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0];

$bgImage = get_post_thumbnail_id() ? $featuredImage : get_stylesheet_directory_uri().'/assets/images/purity_banner1.jpg';

get_header();
?>
<main class="basic" >
    <?php get_template_part( 'templates/parts/page-header', 'none' ); ?>

    <section class="padding-md gray-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 basic-content ">
                    <?php
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>