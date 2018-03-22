<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
?>
    <main class="basic" >
        <section class="bg-image" style="background-image: url('<?php bloginfo('url'); ?>/wp-content/themes/krabo/assets/images/purity_banner2.jpg');">
            <div class="container">
                <div class="row">
                    <div class="header">
                        <div class="outer-circle">
                            <div class="image">
                                <img src="<?php  bloginfo('url'); ?>/wp-content/themes/krabo/assets/images/purity_logo_colour.png" alt="Purity Homes" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="banner-label" style="z-index: 2;">
                    <h1>404 ERROR</h1>
                </div>
        </section>


        <section class="padding-md gray-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 basic-content text-center">
                        <h4>It appears you have taken a wrong turn, as this page does not exist.</h4>
                        <p>Use the navigation menu to find your way back to our site content.</p>
                    </div>
                </div>
            </div>
        </section>


    </main>

<?php get_footer(); ?>