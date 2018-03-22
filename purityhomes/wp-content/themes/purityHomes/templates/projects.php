<?php
/* Template Name: Current Projects */
$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0];

$bgImage = get_post_thumbnail_id() ? $featuredImage : get_stylesheet_directory_uri().'/assets/images/purity_banner1.jpg';

get_header();
?>
    <main class="basic" >
        <section class="bg-image" style="background-image: url('<?php  echo $bgImage; ?>');">
            <div class="container">
                <div class="row">
                    <div class="header">
                        <div class="outer-circle">
                            <div class="image">
                                <img src="<?php  bloginfo('url'); ?>/wp-content/themes/purityHomes/assets/images/purity_logo_colour.png" alt="Purity Homes" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="banner-label" style="z-index: 2;">
                    <?php the_title( '<h1 class="text-uppercase">', '</h1>' ); ?>
                </div>
            </div>

        </section>

        <section class="padding-md gray-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 basic-content ">
                        <?php
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
                <div class="row gallery-container">
                    <?php

                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
                    $wp_query = new WP_Query($args);
                    query_posts('cat=3');
                    while ( have_posts() ) : the_post();
                        if ( get_post_gallery() ) :
                            $gallery = get_post_gallery( get_the_ID(), false );
                            $ids = explode( ",", $gallery['ids'] );

                            foreach( $ids as $index => $id) {
                                $link   = wp_get_attachment_url( $id );
                                $thumbnail = wp_get_attachment_image_src( $id, 'medium')[0];
                                if($index == 0) {
                                    ?>
                                    <div class="col-md-3">
                                       <div class="gallery-image">
                                           <div onclick="initslider(<?php echo get_the_ID() ?>)" class="bg-thumb-image hover" style="background-image: url(<?php echo $thumbnail; ?>)" data-toggle="modal" data-target="#galleryModal-<?php echo get_the_ID() ?>">
                                               <div class="overlay">
                                                   <span class="fa fa-search" aria-hidden="true"></span>
                                               </div>
                                           </div>
                                       </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                            <div class="modal fade gallery" id="galleryModal-<?php echo get_the_ID() ?>" tabindex="-1" role="dialog" aria-labelledby="enquireModalLabel" aria-hidden="true">

                                <div class="modal-dialog" role="document">
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="gallery-slider" id="slider-<?php echo get_the_ID() ?>">
                                                <?php
                                                foreach( $ids as $index => $id) {
                                                    $link   = wp_get_attachment_url( $id );
                                                    ?>
                                                    <img src="<?php echo $link; ?>"/>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="gallery-footer">
                                            <h2><?php echo the_title(); ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?
                        endif;
                        ?>

                    <?php endwhile; ?>
                </div>
            </div>
        </section>

    </main><!-- #main -->

<?php get_footer(); ?>