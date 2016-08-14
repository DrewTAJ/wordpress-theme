<div id="comments" class="comments-container">
    <?php if(have_comments()): ?>
    <div class="col-sm-12">
        <?php the_comments_navigation(); ?>
        <ol id="comments-list">
            <?php wp_list_comments(array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
				) ); ?>
        </ol>
        <?php the_comments_navigation(); ?>
    </div>
    <?php endif; ?>
</div>