<?php get_header();?>
    <div id="content">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <?php 
                    $archive_year  = get_the_time('Y'); 
                    $archive_month = get_the_time('m'); 
                    $archive_day   = get_the_time('d'); 
                ?>

                <div class="row">
                    <section id="post-<?php the_ID(); ?>" class="col-sm-3 post">
                        <header class="post-header" id="header">
                            <div class="col-xs-6">
                                <time><a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"> <span class="glyphicon glyphicon-calendar"></span> <?php the_date('F, j, Y'); ?> </a></time>
                            </div>
                            <div class="col-xs-6 text-right">
                                <span><?php edit_post_link("<span class='glyphicon glyphicon-edit'></span> Edit"); ?></span>
                            </div>
                        </header>
                        <div class="post-content">
                            <div class="content_header">
                                <h2 class="post_title"><?php the_title(); ?></h2>
                                
                            </div>
                            <div><?php the_content(); ?></div>
                        </div>
                        <footer class="post-footer" id="footer">
                            <a href=" <?php comments_link(); ?> " class="col-xs-6"><span class="glyphicon glyphicon-comment"></span> <?php comments_number("0 Comments", "1 Comment", "% Comments"); ?></a>
                            <a href="#" class="col-xs-6 text-right"><span class="glyphicon glyphicon-new-window"></span> Share</a>
                        </footer>
                    </section>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>