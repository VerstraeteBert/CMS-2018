<?php get_header(); ?>

    <div class="content-wrapper section" id="content">

        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content-single', get_post_format() );
            endwhile;
        endif;
        ?>

        <?php if ( comments_open() || get_comments_number() ) :
                comments_template();
        endif;
        ?>
    </div>

<?php get_footer(); ?>