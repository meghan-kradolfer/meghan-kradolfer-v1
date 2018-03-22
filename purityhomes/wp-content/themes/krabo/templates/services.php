<?php
/* Template Name: Our Services */
$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0];

$bgImage = get_post_thumbnail_id() ? $featuredImage : get_stylesheet_directory_uri().'/assets/images/purity_banner1.jpg';

get_header();
?>
    <main class="basic" >
        <?php get_template_part( 'templates/parts/page-header', 'none' ); ?>

        <section class="padding-md gray-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 basic-content ">
                        <?php
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
                    $wp_query = new WP_Query($args);
                    query_posts('cat=5');
                    ?>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php
                        $postCount = 0;
                        while ( have_posts() ) : the_post();
                        $postCount++;
                        $id = get_the_ID();
                        $thumbnail = get_the_post_thumbnail($id); ?>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading<?php echo $id ?>">
                                    <h4 class="panel-title">
                                        <a class="<?php echo ($postCount == 1 ? '' : 'collapsed'); ?>" role="button" data-toggle="collapse"  href="#collapse<?php echo $id ?>" aria-expanded="<?php echo ($postCount == 1 ? 'true' : 'false'); ?>" aria-controls="collapse<?php echo $id ?>">
                                            <?php echo the_title(); ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $id ?>" class="panel-collapse collapse <?php echo ($postCount == 1 ? 'in' : ''); ?>" role="tabpanel" aria-labelledby="heading<?php echo $id ?>">
                                    <div class="panel-body ">
                                        <div class="col-md-12 white">
                                            <?php echo $thumbnail; ?>
                                        </div>
                                        <div class="col-md-12">
                                            <p><?php the_content(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- #main -->

<?php get_footer(); ?>