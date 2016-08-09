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

    <div id="sidebar" class="col-md-3">
        <div class="sidebar-container container-fluid">
            <div id="sidebar-header">
                <h2 class="text-center"><?php bloginfo("name"); ?></h2>  
            </div>
            <div class="sidebar-description">
                <p><?php bloginfo("description"); ?></p>
            </div>
            <div class="sidebar-about">
            
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
</div>

<?php 
    get_footer(); 
?>