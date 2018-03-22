<?php
/**
 * @package Posts_in_Page
 * @author Eric Amundson <eric@ivycat.com>
 * @copyright Copyright (c) 2017, IvyCat, Inc.
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */
?>

<!-- NOTE: If you need to make changes to this file, copy it to your current theme's main
	directory so your changes won't be overwritten when the plugin is upgraded. -->

<!-- Post Wrap Start-->
<div class="post hentry ivycat-post">
    <div class="container padding-md">

        <?php if(get_the_post_thumbnail() ) {
            ?>
            <div class="col-md-6">
                <?php echo get_the_post_thumbnail() ?>
            </div>
            <div class="col-md-6 padding-sm">
                <p><?php the_content() ?></p>
            </div>
        <?
        } else { ?>

            <div class="col-md-10 col-md-offset-1">
                    <?php
                    if ( get_post_gallery() ) {
                        ?>
                        <h2 class="text-center"><?php echo the_title(); ?></h2>
                <div class="gallery" style="padding: 10px 0 40px 0">
                        <?php
                        $gallery = get_post_gallery( get_the_ID(), false );
                        $ids = explode( ",", $gallery['ids'] );
                ?>
                <div class="static-gallery" id="galleryModal-<?php echo get_the_ID() ?>">
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

                </div>
                        <?php echo strip_shortcodes(get_the_content()); ?>
                    <?php } else { ?>
                        <?php the_content(); ?>
                <?php } ?>

            </div>
        <?php } ?>

    </div>
</div>
<!-- // Post Wrap End -->
