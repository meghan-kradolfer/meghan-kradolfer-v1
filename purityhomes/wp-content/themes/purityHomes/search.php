<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <main class="basic">
      <section class="bg-image" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/purity_banner2.jpg');">
        <div class="container">
          <div class="row padding-lg"></div>
          <div class="banner-label" style="z-index: 2;">
            <h1><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
          </div>
      </section>

        <section class="padding-md gray-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 basic-content">
                        <?php
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/post/content', 'excerpt' );
                            endwhile;

                            the_posts_pagination( array(
                                'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
                                'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
                            ) );

                        else : ?>

                            <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>
                            <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>


    </main>

<?php get_footer();
