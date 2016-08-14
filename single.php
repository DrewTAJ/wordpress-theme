<?php 
// If comments are open or we have at least one comment, load up the comment template.
    get_header();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9">
            <?php if( have_posts() ) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part( 'templates/content', 'single' ); ?>
                    <?php if ( comments_open() || get_comments_number() ) : ?>
                        <?php comments_template(); ?>
                    <?php endif; ?>
                    <div class="col-sm-9">
                        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#commentForm" aria-expanded="false" aria-controls="commentForm">
                            <span class="glyphicon glyphicon-plus"></span> Add Comment
                        </button>
                    </div>
                    <div class="collapse col-sm-9 post" id="commentForm">
                        <?php comment_form(); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php get_template_part('inc/content','sidebar'); ?>
    </div>
</div>

 <?php 
    get_footer();
 ?>