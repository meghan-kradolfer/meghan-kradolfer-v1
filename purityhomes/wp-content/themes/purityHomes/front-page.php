
<?php

/* Template Name: Basic */

get_header();
?>

<main  style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/purity_sketch.jpg');" class="front-page">
    <section class="bg-image" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/purity_banner1.jpg');">
        <div class="container">
            <div class="row">
               <div class="header">
                   <div class="outer-circle">
                       <div class="image">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/purity_logo_colour.png" alt="Purity Homes" />
                       </div>
                   </div>
                 <h1>Design | Connect | Audit</h1>
                 <h4>Empowering your commitment to health and sustainable development.</h4>

               </div>
            </div>
        </div>
        <a class="banner-tag text-uppercase" href="<?php  bloginfo('url'); ?>/get-started">
           <h4> Get Started Questionnaire <i class="fa fa-angle-double-right" aria-hidden="true"></i></h4>
          <hr style="border-color: white; color: white; background-color: white; width: 100px; margin:0 auto;"/>
        </a>
    </section>

    <section class="padding-lg">
        <div class="container">
            <div class="row about-us-icons ">
                <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="col-md-4 text-center col">
                    <span class="fa fa-pencil" aria-hidden="true"></span>
                    <h4>Design</h4>
                    <em>We provide ready-to-go and custom consented plans</em>
                    <hr />
                </a>
                <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="col-md-4 text-center col">
                    <span class="fa fa-plug" aria-hidden="true"></span>
                    <h4>Connect</h4>
                  <em>We connect you with our specialist builders</em>
                    <hr />
                </a>
                <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="col-md-4 text-center col">
                    <span class="fa fa-check-square-o" aria-hidden="true"></span>
                    <h4>Audit</h4>
                    <em>We provide an involved construction audit to ensure your Purity Home stays pure</em>
                    <hr />
                </a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>