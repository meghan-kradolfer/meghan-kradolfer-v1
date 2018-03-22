<?php
/**
 * Displays header section
 *
 * @package WordPress
 * @subpackage Krabo
 * @since 1.0
 * @version 1.0
 */

$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0];
$bgImage = get_post_thumbnail_id() ? $featuredImage : get_stylesheet_directory_uri().'/assets/images/purity_banner1.jpg';

?>
<section class="bg-image" style="background-image: url('<?php  echo $bgImage; ?>');">
    <div class="container">
        <div class="row padding-lg"></div>
        <div class="banner-label" style="z-index: 2;">
            <?php the_title( '<h1 class="text-uppercase">', '</h1>' ); ?>
        </div>
    </div>
</section>
