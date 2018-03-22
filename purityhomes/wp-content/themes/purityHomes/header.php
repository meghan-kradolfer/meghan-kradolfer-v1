<?php
wp_register_script( 'my-script', 'myscript_url' );
wp_enqueue_script( 'my-script' );
$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
wp_localize_script( 'my-script', 'object_name', $translation_array );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <title><?php echo ucfirst(get_the_title()); ?> | Purity Homes</title>

    <!-- Meta Data -->
    <meta name="description" content="Purity Homes is a local Christchurch building company with a mission to provide healthy, environmentally conscious and efficient building solutions for all New Zealanders."/>
    <!-- Social -->
    <meta property="og:title" content="Design & Build Healthy, Sustainable Homes | Purity Homes" />
    <meta property="og:description" content="Purity Homes is a local Christchurch building company with a mission to provide healthy, environmentally conscious and efficient building solutions for all New Zealanders."/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/purityhomes.png" />
    <script type="application/ld+json">
      {
       "@context": "http://schema.org",
        "@type": "HomeAndConstructionBusiness",
        "image": "http://www.purityhomes.co.nz/wp-content/themes/purityHomes/purityhomes.png",
        "@id": "http://www.purityhomes.co.nz",
        "name": "Purity Homes",
        "url": "http://www.purityhomes.co.nz",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "41062 Colombo Street",
            "addressLocality": "Christchurch",
            "addressRegion": "Canterbury",
            "postalCode": "8014",
            "addressCountry": "NZ"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 35.446474,
            "longitude": -119.087998
          },
          "telephone": "+6434217220"
      }
    </script>
    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--Icons -->
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon-16x16.png" sizes="16x16" />
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    <!--Stylesheets -->
    <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W89PP8G');
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<noscript>
    <div class="alert alert-warning no-js-alert">
        <span class="fa fa-exclamation-circle"></span>
        We’re sorry, some parts of our website don’t work properly without JavaScript enabled.
    </div>
</noscript>


<header>
    <div class="nav-top">
      <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/purity_logo_colour.png" alt="Purity Homes" />
      </a>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-3 col icons">
                    <a href="tel:034217220">
                        <span class="fa fa-phone"></span> 03-421-7220
                    </a>
                </div>
                <div class="col-sm-3 col">
                    <button class="btn btn-white btn-block" data-toggle="modal" data-target="#enquireModal">
                        Enquire Now
                    </button>
                </div>
                <div class="col-sm-3 col">
                    <?php get_search_form(); ?>
                </div>


            </div>
        </div>
    </div>
    <div class="navbar navbar-custom" role="navigation">
        <div class="navbar-header">
            <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/purity_logo_colour.png" alt="Purity Homes" />
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Direct naar de inhoud</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">

            <?php
            wp_nav_menu( array( 'theme_location' => 'header_menu', 'menu_class' => 'nav navbar-nav' ) );
            ?>

        </div>
    </div>
</header>

<div class="modal fade" id="enquireModal" tabindex="-1" role="dialog" aria-labelledby="enquireModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <h2>Contact Us</h2>
                <?php echo do_shortcode( '[contact-form-7 id="90" title="Enquiry Form"]' ); ?>
            </div>
        </div>
    </div>
</div>