<?php
/**
 * Default Page Template
 * Package: Môi Trường Nam Lâm WordPress Theme
 */
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<?php while (have_posts()) : the_post(); ?>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="container">
      <h1 class="page-hero-title"><?php the_title(); ?></h1>
    </div>
  </div>

  <!-- MAIN PAGE CONTENT -->
  <main class="section">
    <div class="container">
      <article id="page-<?php the_ID(); ?>" <?php post_class('article-content'); ?> style="max-width: 900px; margin: 0 auto; background: var(--color-white); padding: var(--space-6); border-radius: var(--radius-md); box-shadow: var(--shadow-sm); border: 1px solid var(--border-color);">
        <?php the_content(); ?>
      </article>
    </div>
  </main>

<?php endwhile; ?>

<?php get_footer(); ?>
