<?php
/**
 * Header Template
 * Package: Môi Trường Nam Lâm WordPress Theme
 */
if (!defined('ABSPATH')) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/images/favicon.png'); ?>" sizes="32x32">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- TOPBAR -->
  <div class="topbar">
    <div class="container">
      <ul class="topbar-info">
        <li><span>Trụ sở: 229/64/50 Tây Thạnh, P. Tây Thạnh, Q. Tân Phú, TP.HCM</span></li>
        <li><a href="mailto:moitruongnamlam@gmail.com">moitruongnamlam@gmail.com</a></li>
      </ul>
      <ul class="topbar-actions">
        <li><span>Hotline:</span> <a href="tel:0968479979" class="topbar-highlight">0968 479 979</a></li>
      </ul>
    </div>
  </div>

  <!-- SITE HEADER -->
  <header class="site-header">
    <div class="container">
      <nav class="navbar">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="brand">
          <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
          <?php else : ?>
            <img src="https://moitruongnamlam.com/wp-content/uploads/2025/09/cropped-Logo-NAM-LAM-tach-nen-192x192.png" alt="<?php bloginfo('name'); ?>" class="brand-logo-img">
            <div class="brand-text">
              <span class="brand-name">MÔI TRƯỜNG NAM LÂM</span>
              <span class="brand-slogan">Xanh bền vững – Vững niềm tin</span>
            </div>
          <?php endif; ?>
        </a>

        <?php
        if (has_nav_menu('primary-menu')) {
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => false,
            ));
        } else {
            // Menu mặc định nếu chưa cài đặt trong Giao diện -> Menu
            ?>
            <ul class="nav-menu">
              <li class="nav-item <?php echo is_front_page() ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link">Trang chủ</a></li>
              <li class="nav-item <?php echo is_page('gioi-thieu') ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/gioi-thieu/')); ?>" class="nav-link">Giới thiệu</a></li>
              <li class="nav-item <?php echo is_page('dich-vu') ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/dich-vu/')); ?>" class="nav-link">Dịch vụ</a></li>
              <li class="nav-item <?php echo is_page('san-pham') ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/san-pham/')); ?>" class="nav-link">Sản phẩm</a></li>
              <li class="nav-item <?php echo is_page('du-an') ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/du-an/')); ?>" class="nav-link">Dự án</a></li>
              <li class="nav-item <?php echo (is_home() || is_category() || is_single()) ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>" class="nav-link">Tin tức</a></li>
              <li class="nav-item <?php echo is_page('lien-he') ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="nav-link">Liên hệ</a></li>
            </ul>
            <?php
        }
        ?>

        <div class="header-actions">
          <a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="btn btn-primary btn-sm">Yêu Cầu Báo Giá</a>
          <button type="button" class="mobile-toggle" id="mobileMenuToggle" aria-label="Mở menu di động">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
          </button>
        </div>
      </nav>
    </div>
  </header>

  <!-- MOBILE NAVIGATION DRAWER -->
  <div class="mobile-overlay" id="mobileOverlay"></div>
  <aside class="mobile-drawer" id="mobileDrawer">
    <div class="mobile-drawer-head">
      <div class="brand"><span class="brand-name">MÔI TRƯỜNG NAM LÂM</span></div>
      <button type="button" class="mobile-close-btn" id="mobileCloseBtn">&times;</button>
    </div>

    <?php
    if (has_nav_menu('mobile-menu')) {
        wp_nav_menu(array(
            'theme_location' => 'mobile-menu',
            'container'      => false,
            'menu_class'     => 'mobile-nav-list',
            'fallback_cb'    => false,
        ));
    } else {
        ?>
        <ul class="mobile-nav-list">
          <li class="mobile-nav-item <?php echo is_front_page() ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/')); ?>" class="mobile-nav-link">Trang chủ</a></li>
          <li class="mobile-nav-item <?php echo is_page('gioi-thieu') ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/gioi-thieu/')); ?>" class="mobile-nav-link">Giới thiệu</a></li>
          <li class="mobile-nav-item <?php echo is_page('dich-vu') ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/dich-vu/')); ?>" class="mobile-nav-link">Dịch vụ</a></li>
          <li class="mobile-nav-item <?php echo is_page('san-pham') ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/san-pham/')); ?>" class="mobile-nav-link">Sản phẩm</a></li>
          <li class="mobile-nav-item <?php echo is_page('du-an') ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/du-an/')); ?>" class="mobile-nav-link">Dự án</a></li>
          <li class="mobile-nav-item <?php echo (is_home() || is_category() || is_single()) ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>" class="mobile-nav-link">Tin tức</a></li>
          <li class="mobile-nav-item <?php echo is_page('lien-he') ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="mobile-nav-link">Liên hệ</a></li>
        </ul>
        <?php
    }
    ?>
  </aside>

  <!-- BREADCRUMBS -->
  <?php namlam_render_breadcrumbs(); ?>
