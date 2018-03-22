
<?php
/* Template Name: Basic */

get_header();
?>
<main class="basic" >
    <?php get_template_part( 'templates/parts/page-header', 'none' ); ?>

    <section class="basic-content">
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile; // End of the loop.
        ?>
    </section>
</main>

<?php get_footer(); ?>