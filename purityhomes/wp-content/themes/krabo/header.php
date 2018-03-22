<?php
wp_register_script( 'my-script', 'myscript_url' );
wp_enqueue_script( 'my-script' );
$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
wp_localize_script( 'my-script', 'object_name', $translation_array );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo ucfirst(get_the_title()); ?> | Purity Homes</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon-192x192.png" sizes="192x192" />
    <link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon-76x76.png" sizes="76x76" />
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon-76x76.png">

    <meta name="description" content="Purity Homes’ mission is to provide a simple and affordable solution for all New Zealanders to live and work in healthy, environmentally conscious and efficient buildings.">
    <meta property="og:site_name" content="Purity Homes" />
    <meta property="og:title" content="Design & build healthy, sustainable homes - Purity Homes" />
    <meta property="og:description" content="Purity Homes’ mission is to provide a simple and affordable solution for all New Zealanders to live and work in healthy, environmentally conscious and efficient buildings." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://purityhomes.meghankradolfer.com/" />
    <meta property="og:image" content="<?php  bloginfo('url'); ?>/wp-content/themes/krabo/assets/images/purity_banner3.jpg" />
    <meta property="fb:app_id" content="770977603055008" />
    <link rel="image_src" href="<?php  bloginfo('url'); ?>/wp-content/themes/krabo/assets/images/purity_banner3.jpg">


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
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php  bloginfo('url'); ?>/wp-content/themes/krabo/assets/images/purity_logo_sm.png" alt="Purity Homes" />
                    </a>
                </div>

                <div class="col-sm-3 col icons">
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
                <img src="<?php  bloginfo('url'); ?>/wp-content/themes/krabo/assets/images/purity_logo_sm.png" alt="Purity Homes" />
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