
<?php

/* Template Name: Basic */

get_header();
?>

<main  style="background-image: url('<?php  bloginfo('url'); ?>/wp-content/themes/krabo/assets/images/purity_sketch.jpg');" class="front-page">
    <section class="bg-image" style="background-image: url('<?php  bloginfo('url'); ?>/wp-content/themes/krabo/assets/images/purity_banner1.jpg');">
        <div class="container">
            <div class="row">
               <div class="header">
                   <div class="outer-circle">
                       <div class="image">
                           <img src="<?php  bloginfo('url'); ?>/wp-content/themes/krabo/assets/images/purity_logo_colour.png" alt="Purity Homes" />
                       </div>
                   </div>
                   <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

                       <?php the_content(); ?>

                   <?php endwhile; else: ?>
                       <h2>Welcome to Purity Homes</h2>
                       <p>Purity Homes’ mission is to provide a simple and affordable solution for all New Zealanders to live and work in healthy,<br /> environmentally conscious and efficient buildings.</p>
                   <?php endif; ?>

               </div>
            </div>
        </div>
        <a class="banner-tag text-uppercase" href="<?php  bloginfo('url'); ?>/get-started">
           <h4> Get Started Questionnaire</h4>
        </a>
    </section>

    <section class="padding-lg">
        <div class="container">
            <div class="row about-us-icons ">
                <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="col-md-4 text-center col">
                    <span class="fa fa-bullseye" aria-hidden="true"></span>
                    <h4>Purpose</h4>
                    <em>Purity Homes was formed in 2011 with the purpose of providing you with an easy way to design and build a healthy home, without a big price tag.</em>
                    <hr />
                </a>
                <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="col-md-4 text-center col">
                    <span class="fa fa-eye" aria-hidden="true"></span>
                    <h4>Vision</h4>
                    <em>Our vision is not only for New Zealand, but for a world where everyone lives in a healthy home made from non-toxic and natural materials. </em>
                    <hr />
                </a>
                <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="col-md-4 text-center col">
                    <span class="fa fa-cogs" aria-hidden="true"></span>
                    <h4>Development</h4>
                    <em>Our team was formed out of mutual interest in creating something good, something meaningful and something which adds social value.</em>
                    <hr />
                </a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>