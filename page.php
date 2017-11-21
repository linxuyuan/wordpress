<?php /* Template Name: 通用页面模板 */ ?>
<?php get_header(); ?>
<!-- Column 1 /Content -->
<div class="about-main">
    <div class="page-content">
        <?php while (have_posts()) : the_post(); ?>
            　　　<?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</div>


<?php get_footer(); ?>

