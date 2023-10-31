<?php
/**
 * TOP Page
 */
?>

<?php get_header(); ?>

<!-- Navigation-->
<?php get_template_part("includes/navbar"); ?>

<!-- Page Header-->
<?php get_template_part("includes/header", "main"); ?>

<div>
<!-- Post List-->
<?php if( have_posts() ): ?>
    <?php while (have_posts()): ?>
        <?php the_post(); ?>
        <!-- Post preview-->
        <div class="post-card">
            <a href="<?php the_permalink(); ?>">
                <p>Title: <?php the_title(); ?></p>
            </a>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <p>子猫が見つかりません...</p>
<?php endif; ?>

</div>


<?php get_footer(); ?>