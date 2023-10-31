<?php
/**
 * 子猫詳細 Page
 */
?>

<?php get_header(); ?>

<!-- Navigation-->
<?php get_template_part("includes/navbar"); ?>

<!-- Page Header-->
<?php get_template_part("includes/header", "main"); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
    <!-- Post Content-->
    <article class="">
        <p>Title: <?php the_title(); ?></p>
        <?php the_content(); ?>
    </article>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
