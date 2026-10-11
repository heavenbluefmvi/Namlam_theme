<?php
/**
 * Single Post Template
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
      <p class="page-hero-desc">
        <?php 
        if (has_excerpt()) {
            echo esc_html(get_the_excerpt());
        } else {
            echo 'Chuyên mục kỹ thuật & pháp lý môi trường từ Công ty Môi Trường Nam Lâm';
        }
        ?>
      </p>
    </div>
  </div>

  <!-- MAIN ARTICLE SECTION -->
  <main class="section">
    <div class="container">
      <div class="grid grid-sidebar">
        
        <!-- ARTICLE MAIN CONTENT (8 COLS) -->
        <article id="post-<?php the_ID(); ?>" <?php post_class('article-content'); ?>>
          
          <div class="card-meta mb-3">
            <span>📅 Ngày đăng: <?php echo get_the_date('d/m/Y'); ?></span>
            <span>📂 Chuyên mục: <?php the_category(', '); ?></span>
            <span>✍️ Tác giả: <?php the_author(); ?></span>
          </div>

          <?php if (has_post_thumbnail()) : ?>
            <figure class="my-4">
              <?php the_post_thumbnail('large', array('style' => 'border-radius: var(--radius-md); box-shadow: var(--shadow-sm); width: 100%; height: auto;')); ?>
            </figure>
          <?php endif; ?>

          <!-- NỘI DUNG BÀI VIẾT TỪ WORDPRESS ĐƯỢC GIỮ NGUYÊN 100% -->
          <div class="entry-content">
            <?php the_content(); ?>
          </div>

          <!-- CTA TƯ VẤN CUỐI BÀI -->
          <div class="alert alert-success my-4">
            <h4 style="color: var(--color-success); margin-bottom: var(--space-2);">Bạn Cần Tư Vấn Kỹ Thuật Hoặc Hồ Sơ Pháp Lý?</h4>
            <p class="mb-2">Đội ngũ kỹ sư của Môi Trường Nam Lâm sẵn sàng hỗ trợ khảo sát, giải đáp quy chuẩn pháp luật và lên phương án xử lý tối ưu chi phí cho nhà máy.</p>
            <a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="btn btn-primary btn-sm">Liên Hệ Nhận Tư Vấn Miễn Phí</a>
          </div>

          <!-- ĐIỀU HƯỚNG BÀI VIẾT -->
          <div class="d-flex justify-between align-center mt-5 pt-3" style="border-top: 1px solid var(--border-color);">
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ? get_permalink(get_option('page_for_posts')) : home_url('/tin-tuc/')); ?>" class="btn btn-outline-primary btn-sm">&larr; Danh sách tin tức</a>
            <a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="btn btn-primary btn-sm">Gửi câu hỏi cho kỹ sư</a>
          </div>

        </article>

        <!-- SIDEBAR (4 COLS) -->
        <aside class="sidebar">
          
          <!-- TÌM KIẾM BÀI VIẾT -->
          <div class="widget">
            <h4 class="widget-title">Tìm Kiếm Bài Viết</h4>
            <form action="<?php echo esc_url(home_url('/')); ?>" method="GET" class="d-flex" style="gap: var(--space-2);">
              <input type="text" class="form-control" name="s" placeholder="Nhập từ khóa..." value="<?php echo get_search_query(); ?>" required>
              <button type="submit" class="btn btn-primary btn-sm">Tìm</button>
            </form>
          </div>

          <!-- BÀI VIẾT MỚI NHẤT -->
          <div class="widget">
            <h4 class="widget-title">Bài Viết Mới Nhất</h4>
            <ul class="widget-list">
              <?php
              $recent_posts = wp_get_recent_posts(array(
                  'numberposts' => 5,
                  'post_status' => 'publish'
              ));
              foreach ($recent_posts as $post_item) :
              ?>
                <li>
                  <a href="<?php echo esc_url(get_permalink($post_item['ID'])); ?>">
                    &rarr; <?php echo esc_html($post_item['post_title']); ?>
                  </a>
                </li>
              <?php endforeach; wp_reset_query(); ?>
            </ul>
          </div>

          <!-- CHUYÊN MỤC BÀI VIẾT -->
          <div class="widget">
            <h4 class="widget-title">Chuyên Mục Tin Tức</h4>
            <ul class="widget-list">
              <?php
              $categories = get_categories(array('orderby' => 'name', 'order' => 'ASC'));
              foreach ($categories as $cat) {
                  echo '<li><a href="' . esc_url(get_category_link($cat->term_id)) . '">&rarr; ' . esc_html($cat->name) . ' (' . $cat->count . ')</a></li>';
              }
              ?>
            </ul>
          </div>

          <!-- TƯ VẤN TRỰC TIẾP -->
          <div class="widget">
            <h4 class="widget-title">Tư Vấn Trực Tiếp 24/7</h4>
            <p class="text-sm text-muted">Doanh nghiệp đang gặp sự cố về hệ thống xử lý hoặc cần thẩm định hồ sơ môi trường?</p>
            <div class="mb-3">
              <strong>Hotline kỹ thuật:</strong><br>
              <a href="tel:0968479979" style="font-size: 1.25rem; font-weight: 700; color: var(--color-primary);">0968 479 979</a>
            </div>
            <a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="btn btn-accent btn-block">Yêu Cầu Báo Giá</a>
          </div>

        </aside>

      </div>
    </div>
  </main>

<?php endwhile; ?>

<?php get_footer(); ?>
