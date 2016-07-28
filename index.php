<?php 
    get_header(); 
?>

<section>
    <?php
        echo get_stylesheet_uri()."<br>";

        echo get_stylesheet_directory_uri()."<br>";

        echo get_template_directory_uri()."/styles/bootstrap.min.css<br>";

        if(wp_style_is("bootstrap")) {
            echo "YES";
        } else {
            echo "NO";
        } 
    ?>
    <?php if( have_posts() ) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <h2 class="post_title"><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        <?php endwhile; ?>

    <?php endif; ?>
</section>

<?php 
    get_footer(); 
?>