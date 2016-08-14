<div id="sidebar" class="hidden-xs col-sm-3">
    <div class="sidebar-container container-fluid">
        <div id="sidebar-header">
            <h2 class="text-center"><a href="<?php bloginfo('url'); ?>"><?php bloginfo("name"); ?></a></h2>  
        </div>
        <div class="sidebar-description">
            <p><?php bloginfo("description"); ?></p>
        </div>
        <div class="sidebar-about">
        
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>