<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _mbbasetheme
 */
?>
<footer class="footer gray-dark" >


    <div class="section primary">
        <div class="container padding-sm">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Subscribe</h2>
                    <p>Subscribe to our mailing list to keep up to date with all pur latest news, research and resources</p>
                </div>
                <div class="col-sm-8">
                    <?php echo smlsubform(); ?>
                </div>
            </div>
        </div>
    </div>
    <div id="map_footer"></div>
    <div class="section dark-gray">
        <div class="container padding-sm">
            <div class="row">
              <div class="col-md-7 col-md-offset-1 padding-md col">
                <h4>About us</h4>
                <p>Purity Homes was formed in 2011 with the purpose of providing you with an easy way to design and build a healthy home, without a big price tag. Most homes in New Zealand, old and new, are mouldy and toxic death boxes. We are here to change that. You now have the opportunity to live in a home that truly puts your health first. And we make the process simple and quick! <strong><a href="<?php  bloginfo('url'); ?>/about-us">read more...</a></strong></p>

              </div>
                <div class="col-md-3 padding-md col">
                    <h2>Contact Us</h2>
                    <ul class="container-fluid custom">
                        <li>
                            <span class="fa fa-phone" ></span>
                            <a href="tel:034217220">
                                03-421-7220
                            </a>
                        </li>
                        <li>
                            <span class="fa fa-facebook-official" ></span>
                            <a href="https://www.facebook.com/purityhomesnz/" target="_blank">
                                Facebook
                            </a>
                        </li>
                    </ul>
                    <button class="btn btn-white btn-block" data-toggle="modal" data-target="#enquireModal">
                        Enquire Now
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="padding-sm black text-center">
      <div class="container-fluid">
          <div class="row">
             <div class="col-md-12">
                <small> &copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?>.</small>
             </div>
          </div>
      </div>
    </div>

</footer>

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/functions.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9bQgZInLCZrbFUdDk31hgawrJmzdMaY8&callback=initMap" async defer></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
</body>
</html>
