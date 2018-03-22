
<?php

/* Template Name: Heath Based Living */
$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0];

$bgImage = get_post_thumbnail_id() ? $featuredImage : get_stylesheet_directory_uri().'/assets/images/purity_banner1.jpg';

get_header();
?>

<main  style="background-image: url('<?php  bloginfo('url'); ?>/wp-content/themes/krabo/assets/images/purity_sketch.jpg');" class="basic about-us-icons front-page">
    <?php get_template_part( 'templates/parts/page-header', 'none' ); ?>

    <section class="padding-md gray-light">
        <div class="container text-center">
          <div class="row">

              <a href="<?php echo esc_url( home_url( '/foreverbreathe' ) ); ?>" class="col-md-8 col-md-offset-2 col">
                  <h4>Foreverbreathe</h4>
                  <em>Foreverbreathe™ high performance breathable wall systems now provide architects, designers, manufacturers and the home owner with an alternative to traditional airtight construction methods.</em>
                  <hr />
              </a>
          </div>
        </div>
    </section>

    <section>
        <div class="container padding-lg">
            <div class="row">
                <a href="<?php echo esc_url( home_url( '/magnum-board' ) ); ?>" class="col-md-4 text-center col">

                    <h4>Magnum Board</h4>
                    <em>Magnum Board is a mineral based product that will ensure your next build meets the criteria now demanded by Health Based Building project.</em>
                    <hr />
                </a>
                <a href="<?php echo esc_url( home_url( '/foreverbreathe-oil-coatings' ) ); ?>" class="col-md-4 text-center col">

                    <h4>Foreverbreathe Oil Coatings</h4>
                    <em>Enhance and maintain the natural beauty of your timber surfaces with Foreverbreathe Oil Coatings.</em>
                    <hr />
                </a>
                <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="col-md-4 text-center col">

                    <h4>Tera Lana Wool Insulation</h4>
                    <em>Wool ‘breathes’, which means a drier home, as wool absorbs and releases moisture from your living environment within a breathable construction system.</em>
                    <hr />
                </a>
            </div>
            <div class="row ">

                <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="col-md-4 text-center col">

                    <h4>Foreverbreathe Paints</h4>
                    <em>Foreverbreathe Paint is a solvent-free, breathable paint for interior and exterior applications.</em>
                    <hr />
                </a>
                <a href="<?php echo esc_url( home_url( '/foreverbeech' ) ); ?>" class="col-md-4 text-center col">

                    <h4>Foreverbeech</h4>
                    <em>Using timber in construction can be very unsustainable, or in the case of Foreverbeech™, very <sustainably class=""></sustainably></em>
                    <hr />
                </a>
                <a href="<?php echo esc_url( home_url( '/lvl' ) ); ?>" class="col-md-4 text-center col">

                    <h4>LVL</h4>
                    <em>Laminated Veneer Lumber is an engineered wood product that provides a consistent, high-performance alternative to solid lumber and steel in structural uses.</em>
                    <hr />
                </a>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>