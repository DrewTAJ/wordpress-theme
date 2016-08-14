<?php 
    get_header(); 
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <?php if( have_posts() ) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part( 'templates/content', get_post_format() ); ?>
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
        <?php get_template_part('inc/content','sidebar'); ?>
    </div>
</div>

<?php 
    get_footer(); 
?>