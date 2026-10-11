<?php
/**
 * Main Index / Blog Archive Template
 * Package: Môi Trường Nam Lâm WordPress Theme
 */
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="container">
      <h1 class="page-hero-title">
        <?php 
        if (is_home() && !is_front_page()) {
            single_post_title();
        } elseif (is_archive()) {
            the_archive_title();
        } elseif (is_search()) {
            echo 'Kết quả tìm kiếm cho: "' . esc_html(get_search_query()) . '"';
        } else {
            echo 'Tin Tức & Kiến Thức Môi Trường';
        }
        ?>
      </h1>
      <p class="page-hero-desc">Cung cấp kiến thức pháp luật môi trường mới nhất, hướng dẫn thủ tục hành chính và các giải pháp kỹ thuật công nghệ xử lý chất thải.</p>
    </div>
  </div>

  <!-- MAIN LIST SECTION -->
  <main class="section">
    <div class="container">
      <div class="grid grid-sidebar">
        
        <!-- ARTICLE LIST (8 COLS) -->
        <div>
          
          <?php if (have_posts()) : ?>
            
            <div class="grid grid-2">
              <?php while (have_posts()) : the_post(); ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class('card news-card'); ?>>
                  <div class="card-img-wrap">
                    <a href="<?php the_permalink(); ?>">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('namlam-thumb-card', array('loading' => 'lazy')); ?>
                      <?php else : ?>
                        <img src="https://moitruongnamlam.com/wp-content/uploads/2025/09/dang-ky-moi-truong.jpg" alt="<?php the_title_attribute(); ?>" loading="lazy">
                      <?php endif; ?>
                    </a>
                    <span class="card-tag">
                      <?php 
                      $cats = get_the_category();
                      echo !empty($cats) ? esc_html($cats[0]->name) : 'Tin tức';
                      ?>
                    </span>
                  </div>

                  <div class="card-body">
                    <div class="card-meta">
                      <span><?php echo get_the_date('d/m/Y'); ?></span>
                      <span><?php the_author(); ?></span>
                    </div>
                    <h3 class="card-title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <div class="text-sm text-muted">
                      <?php the_excerpt(); ?>
                    </div>
                  </div>

                  <div class="card-footer">
                    <a href="<?php the_permalink(); ?>" class="text-sm text-primary font-bold">Xem chi tiết &rarr;</a>
                  </div>
                </article>

              <?php endwhile; ?>
            </div>

            <!-- PHÂN TRANG CHUẨN WORDPRESS -->
            <div class="d-flex justify-center mt-5">
              <?php
              the_posts_pagination(array(
                  'mid_size'           => 2,
                  'prev_text'          => '&larr; Trước',
                  'next_text'          => 'Sau &rarr;',
                  'screen_reader_text' => 'Điều hướng bài viết',
              ));
              ?>
            </div>

          <?php else : ?>
            <div class="alert alert-info">
              <p>Hiện chưa có bài viết nào được đăng trong mục này. Vui lòng quay lại sau!</p>
            </div>
          <?php endif; ?>

        </div>

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

          <!-- CHUYÊN MỤC BÀI VIẾT -->
          <div class="widget">
            <h4 class="widget-title">Chuyên Mục Bài Viết</h4>
            <ul class="widget-list">
              <?php
              $categories = get_categories(array('orderby' => 'name', 'order' => 'ASC'));
              foreach ($categories as $cat) {
                  echo '<li><a href="' . esc_url(get_category_link($cat->term_id)) . '">&rarr; ' . esc_html($cat->name) . ' (' . $cat->count . ')</a></li>';
              }
              ?>
            </ul>
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

          <!-- TƯ VẤN PHÁP LÝ -->
          <div class="widget">
            <h4 class="widget-title">Hỗ Trợ Pháp Lý 24/7</h4>
            <p class="text-sm text-muted">Quý doanh nghiệp đang gặp khó khăn về thủ tục hồ sơ môi trường hoặc bị cơ quan chức năng kiểm tra?</p>
            <div class="mb-3">
              <strong>Hotline chuyên gia:</strong><br>
              <a href="tel:0968479979" style="font-size: 1.25rem; font-weight: 700; color: var(--color-primary);">0968 479 979</a>
            </div>
            <a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="btn btn-accent btn-block">Gửi Câu Hỏi Tư Vấn</a>
          </div>

        </aside>

      </div>
    </div>
  </main>

  <!-- CTA BANNER -->
  <div class="container mb-5">
    <div class="cta-banner">
      <div class="cta-banner-content">
        <h2>Doanh Nghiệp Cần Hướng Dẫn Hồ Sơ Môi Trường Theo Luật Mới?</h2>
        <p>Liên hệ ngay chuyên viên pháp lý của Môi Trường Nam Lâm để được rà soát hồ sơ miễn phí, tránh rủi ro xử phạt vi phạm hành chính.</p>
        <div class="cta-actions">
          <a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="btn btn-accent btn-lg">Nhận Tư Vấn Miễn Phí</a>
          <a href="tel:0968479979" class="btn btn-outline-white btn-lg">Hotline: 0968 479 979</a>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
