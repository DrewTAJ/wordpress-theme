<?php 
    get_header(); 
?>

<div class="container-fluid">
    <?php if( have_posts() ) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part( 'templates/content', get_post_format() ); ?>
        <?php endwhile; ?>

    <?php endif; ?>
</div>

<?php 
    get_footer(); 
?>