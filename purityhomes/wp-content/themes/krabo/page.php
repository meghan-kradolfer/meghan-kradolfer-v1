<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <main class="basic" style="background-image: url('<?php  bloginfo('url'); ?>/wp-content/themes/krabo/assets/images/purity_sketch.jpg');">
        <section class="padding-lg white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php get_footer();
