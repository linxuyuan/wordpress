<?php /* Template Name: 产品详细页模板 */ ?>
<?php get_header(); ?>
<!-- Column 1 /Content -->
<div class="about-main">
    <div class="page-content">
        <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 10 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        the_title();
        echo '<div class="entry-content">';
            the_content();
            echo '</div>';
        endwhile;
        ?>
    </div>
</div>


<?php get_footer(); ?>

