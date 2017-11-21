<?php /* Template Name: 文章页面模板 */ ?>
<?php get_header(); ?>
<!-- Column 1 / Content -->
<div class="about-main">
    <p class="news-title "><?php the_title(); ?></>
    <!-- Post Content -->

    <?php while (have_posts()) : the_post(); ?>
        　　　<?php the_content(); ?>
    <?php endwhile; ?>
</div>



