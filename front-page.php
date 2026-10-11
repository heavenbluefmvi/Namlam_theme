<?php
/**
 * Front Page Template (Trang Chủ)
 * Package: Môi Trường Nam Lâm WordPress Theme
 */
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

  <main>

    <!-- SECTION 1: HERO HOME -->
    <section class="hero-home">
      <div class="container">
        <div class="hero-home-content">
          <div class="hero-badge">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L1 21h22L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 16h2v2h-2zm0-6h2v4h-2z"/></svg>
            <span>Giải Pháp Môi Trường Toàn Diện Cho Doanh Nghiệp</span>
          </div>
          <h1 class="hero-title">
            Chuyên Gia Xử Lý Nước Thải & <span>Hồ Sơ Môi Trường</span> Đạt Chuẩn
          </h1>
          <p class="hero-desc">
            Công ty TNHH TM-DV Công Nghệ Môi Trường Nam Lâm đồng hành cùng doanh nghiệp xây dựng môi trường sản xuất xanh – sạch – bền vững. Tư vấn giải pháp kỹ thuật tối ưu, tiết kiệm chi phí đầu tư và tuân thủ 100% quy chuẩn pháp lý.
          </p>
          <div class="hero-actions">
            <a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="btn btn-primary btn-lg">Nhận Tư Vấn Kỹ Thuật</a>
            <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>" class="btn btn-outline-white btn-lg">Khám Phá Dịch Vụ</a>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 2: STATS COUNTER STRIP -->
    <div class="stats-strip">
      <div class="container">
        <div class="stats-grid">
          <div class="stat-item">
            <div class="stat-number">10+</div>
            <div class="stat-label">Năm kinh nghiệm trong ngành</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">100+</div>
            <div class="stat-label">Dự án hoàn thành đúng hạn</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">100%</div>
            <div class="stat-label">Nước đầu ra đạt quy chuẩn QCVN</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">24/7</div>
            <div class="stat-label">Hỗ trợ kỹ thuật & xử lý sự cố</div>
          </div>
        </div>
      </div>
    </div>

    <!-- SECTION 3: VALUE PROPOSITIONS -->
    <section class="section section-subtle">
      <div class="container">
        <div class="section-head text-center">
          <span class="section-subtitle">Tại sao chọn Nam Lâm</span>
          <h2 class="section-title">Đối Tác Đồng Hành Bền Vững Của Doanh Nghiệp</h2>
          <p class="section-desc">Chúng tôi thấu hiểu những khó khăn của doanh nghiệp khi vừa phải duy trì sản xuất, vừa phải đáp ứng các tiêu chuẩn thanh tra môi trường ngày càng khắt khe.</p>
        </div>

        <div class="grid-3">
          <div class="card">
            <div class="card-icon">
              <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
            </div>
            <h3 class="card-title">Pháp Lý Minh Bạch &amp; Đầy Đủ</h3>
            <p class="card-text">
              Tư vấn chính xác theo Luật Bảo vệ Môi trường 2020 và các Nghị định mới nhất. Cam kết hồ sơ hoàn thiện đúng hạn, được cơ quan quản lý nhà nước phê duyệt.
            </p>
          </div>

          <div class="card">
            <div class="card-icon">
              <svg viewBox="0 0 24 24"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
            </div>
            <h3 class="card-title">Công Nghệ Tối Ưu Chi Phí</h3>
            <p class="card-text">
              Lựa chọn công nghệ xử lý sinh học kết hợp hóa lý phù hợp với đặc tính từng ngành nghề, tối ưu hóa chi phí điện năng, hóa chất và nhân công vận hành.
            </p>
          </div>

          <div class="card">
            <div class="card-icon">
              <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
            </div>
            <h3 class="card-title">Cam Kết Chất Lượng Nước</h3>
            <p class="card-text">
              Chất lượng nước thải sau xử lý đạt Quy chuẩn Quốc gia (QCVN Cột A/B). Chịu hoàn toàn trách nhiệm kỹ thuật và bồi hoàn nếu thông số vượt ngưỡng cam kết.
            </p>
          </div>

          <div class="card">
            <div class="card-icon">
              <svg viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
            </div>
            <h3 class="card-title">Thi Công Đúng Tiến Độ</h3>
            <p class="card-text">
              Đội ngũ kỹ sư cơ điện & môi trường giàu kinh nghiệm giám sát trực tiếp, đảm bảo hoàn thành lắp đặt và nuôi cấy vi sinh đúng kế hoạch bàn giao nhà máy.
            </p>
          </div>

          <div class="card">
            <div class="card-icon">
              <svg viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
            </div>
            <h3 class="card-title">Cung Ứng Hóa Chất Chuẩn</h3>
            <p class="card-text">
              Nhập khẩu và phân phối trực tiếp hóa chất PAC, Chlorine, Polymer, Xút NaOH chính hãng, có CO-CQ rõ ràng, giá sỉ ưu đãi cho các nhà máy vận hành dài hạn.
            </p>
          </div>

          <div class="card">
            <div class="card-icon">
              <svg viewBox="0 0 24 24"><path d="M21 16.5c0 .38-.21.71-.53.88l-7.9 4.44c-.16.12-.36.18-.57.18s-.41-.06-.57-.18l-7.9-4.44A.991.991 0 0 1 3 16.5v-9c0-.38.21-.71.53-.88l7.9-4.44c.16-.12.36-.18.57-.18s.41.06.57.18l7.9 4.44c.32.17.53.5.53.88v9z"/></svg>
            </div>
            <h3 class="card-title">Bảo Hành &amp; Hỗ Trợ 24/7</h3>
            <p class="card-text">
              Bảo hành công trình từ 12 đến 24 tháng. Đội ngũ kỹ thuật trực chiến hỗ trợ giải quyết sự cố vi sinh, bơm sục khí và đường ống trong vòng 2-4 tiếng.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 4: CORE SERVICES -->
    <section class="section">
      <div class="container">
        <div class="section-head text-center">
          <span class="section-subtitle">Năng lực thực hiện</span>
          <h2 class="section-title">Các Dịch Vụ Môi Trường Trọng Tâm</h2>
          <p class="section-desc">Cung cấp trọn gói từ tư vấn thủ tục pháp lý đến thiết kế thi công công nghệ xử lý môi trường chuyên sâu.</p>
        </div>

        <div class="grid-3">
          <article class="service-card">
            <div class="service-card-media">
              <img src="https://moitruongnamlam.com/wp-content/uploads/2026/04/phuoc-dong-1564026880-c6z5u.jpg" alt="Xử lý nước thải">
            </div>
            <div class="service-card-body">
              <h3 class="service-card-title">
                <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>">Xử Lý Nước Thải Công Nghiệp &amp; Sinh Hoạt</a>
              </h3>
              <p class="service-card-text">
                Thiết kế, thi công trạm XLNT ngành dệt nhuộm, xi mạ, chế biến thực phẩm, thủy sản, y tế, khu công nghiệp đạt chuẩn xả thải QCVN.
              </p>
              <div class="service-card-link">
                <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>">Xem giải pháp công nghệ &rarr;</a>
              </div>
            </div>
          </article>

          <article class="service-card">
            <div class="service-card-media">
              <img src="https://moitruongnamlam.com/wp-content/uploads/2025/09/z6984218671804_aa3c93e43ee31e7be1ec25aa833446df.jpg" alt="Xử lý nước cấp">
            </div>
            <div class="service-card-body">
              <h3 class="service-card-title">
                <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>">Xử Lý Nước Cấp &amp; Lọc Nước Tinh Khiết RO</a>
              </h3>
              <p class="service-card-text">
                Hệ thống lọc nước giếng khoan, làm mềm nước cho lò hơi, tháp giải nhiệt và hệ lọc thẩm thấu ngược RO cho chế biến thực phẩm, dược phẩm.
              </p>
              <div class="service-card-link">
                <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>">Xem giải pháp công nghệ &rarr;</a>
              </div>
            </div>
          </article>

          <article class="service-card">
            <div class="service-card-media">
              <img src="https://moitruongnamlam.com/wp-content/uploads/2025/09/z6984218671806_b80e461fbf6d7c7161b94ea9cfb0587a.jpg" alt="Xử lý khí thải">
            </div>
            <div class="service-card-body">
              <h3 class="service-card-title">
                <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>">Xử Lý Khí Thải &amp; Lọc Bụi Công Nghiệp</a>
              </h3>
              <p class="service-card-text">
                Chế tạo tháp hấp thụ dạng đệm, tháp than hoạt tính khử mùi sơn, dung môi hữu cơ và hệ thống lọc bụi túi vải tay áo, Cyclone cho xưởng gỗ, cơ khí.
              </p>
              <div class="service-card-link">
                <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>">Xem giải pháp công nghệ &rarr;</a>
              </div>
            </div>
          </article>

          <article class="service-card">
            <div class="service-card-media">
              <img src="https://moitruongnamlam.com/wp-content/uploads/2026/08/Thiet-ke-chua-co-ten-3-1-600x337.png" alt="Tư vấn hồ sơ môi trường">
            </div>
            <div class="service-card-body">
              <h3 class="service-card-title">
                <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>">Tư Vấn Hồ Sơ &amp; Giấy Phép Môi Trường</a>
              </h3>
              <p class="service-card-text">
                Thực hiện Giấy phép môi trường theo Luật 2020, Báo cáo ĐTM, Đăng ký môi trường, Báo cáo công tác BVMT định kỳ hàng năm và vận hành thử nghiệm.
              </p>
              <div class="service-card-link">
                <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>">Xem chi tiết thủ tục &rarr;</a>
              </div>
            </div>
          </article>

          <article class="service-card">
            <div class="service-card-media">
              <img src="https://moitruongnamlam.com/wp-content/uploads/2025/09/z6984218671803_bcfa642a8b3e81313fb40502280d0d82.jpg" alt="Vận hành bảo trì O&M">
            </div>
            <div class="service-card-body">
              <h3 class="service-card-title">
                <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>">Dịch Vụ Vận Hành, Bảo Trì &amp; Cải Tạo (O&amp;M)</a>
              </h3>
              <p class="service-card-text">
                Cung cấp nhân sự vận hành trọn gói trạm XLNT, nuôi cấy lại vi sinh chết, nâng công suất trạm cũ mà không cần mở rộng diện tích xây dựng.
              </p>
              <div class="service-card-link">
                <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>">Xem quy trình dịch vụ &rarr;</a>
              </div>
            </div>
          </article>

          <article class="service-card">
            <div class="service-card-media">
              <img src="https://moitruongnamlam.com/wp-content/uploads/2025/09/z6984218671805_41a6b0c61ddbb25da6c1d7637cf21ecb.jpg" alt="Hệ thống tưới tự động">
            </div>
            <div class="service-card-body">
              <h3 class="service-card-title">
                <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>">Hệ Thống Tưới Cảnh Quan Tự Động</a>
              </h3>
              <p class="service-card-text">
                Thiết kế hệ thống tưới phun mưa, tưới nhỏ giọt thông minh tự động cho khuôn viên nhà xưởng, khu sinh thái, tái sử dụng nước sau xử lý.
              </p>
              <div class="service-card-link">
                <a href="<?php echo esc_url(home_url('/dich-vu/')); ?>">Xem mô hình ứng dụng &rarr;</a>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- SECTION 5: 5-STEP WORKING PROCESS -->
    <section class="section section-alt">
      <div class="container">
        <div class="section-head text-center">
          <span class="section-subtitle">Quy trình chuyên nghiệp</span>
          <h2 class="section-title">5 Bước Triển Khai Dự Án Chuẩn Mực</h2>
          <p class="section-desc">Mọi dự án đều được triển khai theo quy trình kỹ thuật nghiêm ngặt, minh bạch tiến độ và kiểm soát chất lượng chặt chẽ.</p>
        </div>

        <div class="process-steps">
          <div class="process-step-item">
            <div class="step-num">01</div>
            <div class="step-content">
              <h3 class="step-title">Khảo Sát &amp; Lấy Mẫu Phân Tích</h3>
              <p class="step-desc">Kỹ sư Nam Lâm trực tiếp đến hiện trường nhà máy khảo sát mặt bằng, đo đạc lưu lượng và phân tích chỉ tiêu nước thải ô nhiễm đầu vào.</p>
            </div>
          </div>

          <div class="process-step-item">
            <div class="step-num">02</div>
            <div class="step-content">
              <h3 class="step-title">Tính Toán Công Nghệ &amp; Báo Giá</h3>
              <p class="step-desc">Lựa chọn công nghệ xử lý tối ưu, lập bảng dự toán chi tiết và thuyết minh giải pháp kỹ thuật gửi Ban Giám Đốc doanh nghiệp xem xét.</p>
            </div>
          </div>

          <div class="process-step-item">
            <div class="step-num">03</div>
            <div class="step-content">
              <h3 class="step-title">Thiết Kế Bản Vẽ &amp; Gia Công Thiết Bị</h3>
              <p class="step-desc">Hoàn thiện bản vẽ thi công 2D/3D chi tiết; gia công cơ khí bồn bể, đường ống và tủ điện điều khiển PLC tự động tại xưởng.</p>
            </div>
          </div>

          <div class="process-step-item">
            <div class="step-num">04</div>
            <div class="step-content">
              <h3 class="step-title">Thi Công Lắp Đặt &amp; Nuôi Cấy Vi Sinh</h3>
              <p class="step-desc">Vận chuyển thiết bị, đấu nối đường ống, châm vi sinh hoạt tính, khởi động hệ thống và theo dõi quá trình thích nghi của bùn vi sinh.</p>
            </div>
          </div>

          <div class="process-step-item">
            <div class="step-num">05</div>
            <div class="step-content">
              <h3 class="step-title">Nghiệm Thu Nước Đạt Chuẩn &amp; Chuyển Giao</h3>
              <p class="step-desc">Lấy mẫu độc lập kiểm định QCVN, lập hồ sơ hoàn công, đào tạo nhân viên vận hành của nhà máy và kích hoạt chế độ bảo hành định kỳ.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 6: FEATURED PROJECTS -->
    <section class="section">
      <div class="container">
        <div class="section-head text-center">
          <span class="section-subtitle">Dự án tiêu biểu</span>
          <h2 class="section-title">Công Trình Nam Lâm Đã Thực Hiện</h2>
          <p class="section-desc">Minh chứng năng lực qua các hệ thống xử lý môi trường đã đi vào vận hành ổn định cho các đối tác uy tín.</p>
        </div>

        <div class="grid-3">
          <article class="project-card">
            <div class="project-card-media">
              <img src="https://moitruongnamlam.com/wp-content/uploads/2025/09/z6984218671804_aa3c93e43ee31e7be1ec25aa833446df.jpg" alt="Dự án Hồng Kim Long An">
              <span class="project-tag">Nước thải sản xuất</span>
            </div>
            <div class="project-card-body">
              <h3 class="project-card-title">
                <a href="<?php echo esc_url(home_url('/du-an/')); ?>">Công Ty TNHH Hồng Kim Long An</a>
              </h3>
              <div class="project-meta-item">
                <span class="meta-label">Địa điểm:</span>
                <span class="meta-val">KCN Thuận Đạo, Bến Lức, Long An</span>
              </div>
              <div class="project-meta-item">
                <span class="meta-label">Công suất:</span>
                <span class="meta-val">40 m³/ngày.đêm</span>
              </div>
              <div class="project-meta-item">
                <span class="meta-label">Công nghệ:</span>
                <span class="meta-val">Keo tụ tạo bông + Sinh học thiếu khí &amp; hiếu khí Aerotank</span>
              </div>
              <div class="project-meta-item">
                <span class="meta-label">Quy chuẩn:</span>
                <span class="meta-val" style="color: var(--color-primary); font-weight: 600;">Cột A - QCVN 40:2011/BTNMT</span>
              </div>
              <div style="margin-top: var(--space-4);">
                <a href="<?php echo esc_url(home_url('/du-an/')); ?>" class="btn btn-outline btn-sm">Xem chi tiết dự án</a>
              </div>
            </div>
          </article>

          <article class="project-card">
            <div class="project-card-media">
              <img src="https://moitruongnamlam.com/wp-content/uploads/2025/09/z6984218671803_bcfa642a8b3e81313fb40502280d0d82.jpg" alt="Dự án Jianliyuan Healthcare">
              <span class="project-tag">Nước thải y tế</span>
            </div>
            <div class="project-card-body">
              <h3 class="project-card-title">
                <a href="<?php echo esc_url(home_url('/du-an/')); ?>">Cty TNHH Jianliyuan Healthcare VN</a>
              </h3>
              <div class="project-meta-item">
                <span class="meta-label">Địa điểm:</span>
                <span class="meta-val">KCN Tân Phú Trung, Củ Chi, TP.HCM</span>
              </div>
              <div class="project-meta-item">
                <span class="meta-label">Hạng mục:</span>
                <span class="meta-val">Trạm xử lý nước thải sinh hoạt &amp; sản xuất</span>
              </div>
              <div class="project-meta-item">
                <span class="meta-label">Công nghệ:</span>
                <span class="meta-val">Lọc màng sinh học MBR + Khử trùng Ozone</span>
              </div>
              <div class="project-meta-item">
                <span class="meta-label">Trạng thái:</span>
                <span class="meta-val" style="color: var(--color-success); font-weight: 600;">Đã bàn giao vận hành ổn định</span>
              </div>
              <div style="margin-top: var(--space-4);">
                <a href="<?php echo esc_url(home_url('/du-an/')); ?>" class="btn btn-outline btn-sm">Xem chi tiết dự án</a>
              </div>
            </div>
          </article>

          <article class="project-card">
            <div class="project-card-media">
              <img src="https://moitruongnamlam.com/wp-content/uploads/2025/09/z6984218671805_41a6b0c61ddbb25da6c1d7637cf21ecb.jpg" alt="Dự án Aloefield">
              <span class="project-tag">Chế biến thực phẩm</span>
            </div>
            <div class="project-card-body">
              <h3 class="project-card-title">
                <a href="<?php echo esc_url(home_url('/du-an/')); ?>">Công Ty Nước Giải Khát Aloefield</a>
              </h3>
              <div class="project-meta-item">
                <span class="meta-label">Địa điểm:</span>
                <span class="meta-val">KCN Xuyên Á, Đức Hòa, Long An</span>
              </div>
              <div class="project-meta-item">
                <span class="meta-label">Công suất:</span>
                <span class="meta-val">60 m³/ngày.đêm</span>
              </div>
              <div class="project-meta-item">
                <span class="meta-label">Đặc trưng:</span>
                <span class="meta-val">Nước thải COD/BOD rất cao từ bã nha đam</span>
              </div>
              <div class="project-meta-item">
                <span class="meta-label">Công nghệ:</span>
                <span class="meta-val">Bể kỵ khí UASB kết hợp Sinh học hiếu khí</span>
              </div>
              <div style="margin-top: var(--space-4);">
                <a href="<?php echo esc_url(home_url('/du-an/')); ?>" class="btn btn-outline btn-sm">Xem chi tiết dự án</a>
              </div>
            </div>
          </article>
        </div>

        <div class="text-center" style="margin-top: var(--space-8);">
          <a href="<?php echo esc_url(home_url('/du-an/')); ?>" class="btn btn-primary">Xem Toàn Bộ Danh Sách Dự Án &rarr;</a>
        </div>
      </div>
    </section>

    <!-- SECTION 7: PRODUCTS & CHEMICALS -->
    <section class="section section-subtle">
      <div class="container">
        <div class="section-head text-center">
          <span class="section-subtitle">Vật tư công nghiệp</span>
          <h2 class="section-title">Hóa Chất &amp; Thiết Bị Môi Trường Chính Hãng</h2>
          <p class="section-desc">Cung cấp giá sỉ cho nhà máy, đầy đủ giấy tờ CO-CQ, giao hàng tận nơi các KCN miền Nam.</p>
        </div>

        <div class="grid-4">
          <article class="product-card">
            <div class="product-card-media">
              <span class="product-card-badge">Hóa chất</span>
              <img src="https://moitruongnamlam.com/wp-content/uploads/2025/09/chlorine-trung-quoc-70-ca-heo-300x300.webp" alt="Chlorine cá heo">
            </div>
            <div class="product-card-body">
              <h3 class="product-card-title">
                <a href="<?php echo esc_url(home_url('/san-pham/')); ?>">Chlorine 70% Cá Heo Super-Chlor Trung Quốc</a>
              </h3>
              <ul class="product-specs-list">
                <li><strong>Hàm lượng:</strong> ClO2 ≥ 70%</li>
                <li><strong>Quy cách:</strong> Thùng 45 kg</li>
                <li><strong>Công dụng:</strong> Khử trùng nước cấp, nước thải</li>
              </ul>
              <div class="product-card-price">Giá: Liên hệ báo giá</div>
              <a href="<?php echo esc_url(home_url('/san-pham/')); ?>" class="btn btn-outline btn-sm">Xem chi tiết</a>
            </div>
          </article>

          <article class="product-card">
            <div class="product-card-media">
              <span class="product-card-badge">Hóa chất</span>
              <img src="https://moitruongnamlam.com/wp-content/uploads/2025/09/hoa-chat-pac-31-vang-nghe-300x300.jpg" alt="PAC 31% vàng nghệ">
            </div>
            <div class="product-card-body">
              <h3 class="product-card-title">
                <a href="<?php echo esc_url(home_url('/san-pham/')); ?>">Hóa Chất Trợ Lắng PAC 31% Vàng Nghệ</a>
              </h3>
              <ul class="product-specs-list">
                <li><strong>Hàm lượng:</strong> Al2O3 ≥ 30 - 31%</li>
                <li><strong>Quy cách:</strong> Bao 25 kg</li>
                <li><strong>Công dụng:</strong> Keo tụ, làm trong nước</li>
              </ul>
              <div class="product-card-price">Giá: Liên hệ báo giá</div>
              <a href="<?php echo esc_url(home_url('/san-pham/')); ?>" class="btn btn-outline btn-sm">Xem chi tiết</a>
            </div>
          </article>

          <article class="product-card">
            <div class="product-card-media">
              <span class="product-card-badge">Hóa chất</span>
              <img src="https://moitruongnamlam.com/wp-content/uploads/2025/09/IMG_2279-510x680.jpg-300x300.webp" alt="NaOH 99% Xút vảy">
            </div>
            <div class="product-card-body">
              <h3 class="product-card-title">
                <a href="<?php echo esc_url(home_url('/san-pham/')); ?>">NaOH 99% Xút Vảy / Xút Hạt Đài Loan</a>
              </h3>
              <ul class="product-specs-list">
                <li><strong>Hàm lượng:</strong> 99% Natri hiđroxit</li>
                <li><strong>Quy cách:</strong> Bao 25 kg</li>
                <li><strong>Công dụng:</strong> Nâng pH, trung hòa axit</li>
              </ul>
              <div class="product-card-price">Giá: Liên hệ báo giá</div>
              <a href="<?php echo esc_url(home_url('/san-pham/')); ?>" class="btn btn-outline btn-sm">Xem chi tiết</a>
            </div>
          </article>

          <article class="product-card">
            <div class="product-card-media">
              <span class="product-card-badge">Thiết bị</span>
              <img src="https://moitruongnamlam.com/wp-content/uploads/2025/09/truc-vit-300x300.jpg" alt="Máy ép bùn trục vít">
            </div>
            <div class="product-card-body">
              <h3 class="product-card-title">
                <a href="<?php echo esc_url(home_url('/san-pham/')); ?>">Máy Ép Bùn Trục Vít Đa Đĩa Tự Động</a>
              </h3>
              <ul class="product-specs-list">
                <li><strong>Vật liệu:</strong> Inox SUS304 chống ăn mòn</li>
                <li><strong>Ứng dụng:</strong> Ép bùn thải sinh hoạt, bùn dầu</li>
                <li><strong>Ưu điểm:</strong> Vận hành tự động, tiết kiệm điện</li>
              </ul>
              <div class="product-card-price">Giá: Liên hệ khảo sát</div>
              <a href="<?php echo esc_url(home_url('/san-pham/')); ?>" class="btn btn-outline btn-sm">Xem chi tiết</a>
            </div>
          </article>
        </div>

        <div class="text-center" style="margin-top: var(--space-8);">
          <a href="<?php echo esc_url(home_url('/san-pham/')); ?>" class="btn btn-outline">Xem Toàn Bộ Danh Mục Sản Phẩm &rarr;</a>
        </div>
      </div>
    </section>

    <!-- SECTION 8: NEWS & LEGAL UPDATES (DYNAMIC FROM WORDPRESS POSTS) -->
    <section class="section section-alt">
      <div class="container">
        <div class="section-head text-center">
          <span class="section-subtitle">Kiến thức chuyên môn</span>
          <h2 class="section-title">Tin Tức &amp; Văn Bản Pháp Luật Môi Trường</h2>
          <p class="section-desc">Cập nhật kịp thời những quy định, nghị định và hướng dẫn thủ tục hành chính mới nhất cho doanh nghiệp.</p>
        </div>

        <?php
        $latest_posts = new WP_Query(array(
            'posts_per_page'      => 3,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true,
        ));

        if ($latest_posts->have_posts()) :
        ?>
          <div class="grid-3">
            <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
              <article class="news-card">
                <div class="news-card-media">
                  <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('namlam-thumb-card'); ?>
                    <?php else : ?>
                      <img src="https://moitruongnamlam.com/wp-content/uploads/2026/08/Thiet-ke-chua-co-ten-3-1-600x337.png" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                  </a>
                  <span class="news-date-badge"><?php echo get_the_date('d/m'); ?></span>
                </div>
                <div class="news-card-body">
                  <h3 class="news-card-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                  <p class="news-card-excerpt">
                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                  </p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-outline btn-sm">Đọc bài viết</a>
                </div>
              </article>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
        <?php else : ?>
          <!-- Dữ liệu mẫu nếu website chưa có bài viết nào -->
          <div class="grid-3">
            <article class="news-card">
              <div class="news-card-media">
                <img src="https://moitruongnamlam.com/wp-content/uploads/2026/08/Thiet-ke-chua-co-ten-3-1-600x337.png" alt="Dịch vụ lập hồ sơ đăng ký môi trường">
                <span class="news-date-badge">19/08</span>
              </div>
              <div class="news-card-body">
                <h3 class="news-card-title">
                  <a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>">Dịch Vụ Lập Hồ Sơ Đăng Ký Môi Trường Trọn Gói – An Tâm – Tiết Kiệm</a>
                </h3>
                <p class="news-card-excerpt">
                  Đơn vị tư vấn chuyên nghiệp am hiểu luật, cập nhật liên tục các văn bản pháp luật mới giúp doanh nghiệp hoàn thiện thủ tục đăng ký môi trường cấp xã chính xác nhất.
                </p>
                <a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>" class="btn btn-outline btn-sm">Đọc bài viết</a>
              </div>
            </article>

            <article class="news-card">
              <div class="news-card-media">
                <img src="https://moitruongnamlam.com/wp-content/uploads/2026/05/Logo-NAM-LAM-600x610.jpg" alt="Giải đáp giấy phép môi trường">
                <span class="news-date-badge">07/05</span>
              </div>
              <div class="news-card-body">
                <h3 class="news-card-title">
                  <a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>">Giải Đáp: Có Được Cấp Giấy Phép Môi Trường Cho Địa Điểm Không Liền Kề?</a>
                </h3>
                <p class="news-card-excerpt">
                  Phân tích tình huống pháp lý khi doanh nghiệp thuê thêm nhà xưởng mới trong cùng một Khu công nghiệp nhưng vị trí không liền kề nhau theo quy định hiện hành.
                </p>
                <a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>" class="btn btn-outline btn-sm">Đọc bài viết</a>
              </div>
            </article>

            <article class="news-card">
              <div class="news-card-media">
                <img src="https://moitruongnamlam.com/wp-content/uploads/2025/09/cropped-Logo-NAM-LAM-tach-nen.png" alt="Doanh nghiệp chuẩn bị gì tháng 12">
                <span class="news-date-badge">01/12</span>
              </div>
              <div class="news-card-body">
                <h3 class="news-card-title">
                  <a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>">Doanh Nghiệp Cần Chuẩn Bị Gì Cho Công Tác Môi Trường Trong Tháng 12?</a>
                </h3>
                <p class="news-card-excerpt">
                  Thời điểm vàng để tổng hợp số liệu quan trắc, lập báo cáo công tác bảo vệ môi trường định kỳ hàng năm nộp cơ quan quản lý trước hạn chót 05/01.
                </p>
                <a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>" class="btn btn-outline btn-sm">Đọc bài viết</a>
              </div>
            </article>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <!-- SECTION 9: PARTNER LOGOS -->
    <section class="section">
      <div class="container">
        <div class="section-head text-center">
          <span class="section-subtitle">Đối tác đồng hành</span>
          <h2 class="section-title">Khách Hàng &amp; Đối Tác Tiêu Biểu</h2>
          <p class="section-desc">Chúng tôi vinh hạnh được phục vụ và tạo dựng niềm tin vững chắc cùng các tập đoàn, doanh nghiệp trên toàn quốc.</p>
        </div>

        <div class="partner-grid">
          <div class="partner-logo"><img src="https://moitruongnamlam.com/wp-content/uploads/2026/04/phuoc-dong-1564026880-c6z5u.jpg" alt="KCN Phước Đông"></div>
          <div class="partner-logo"><img src="https://moitruongnamlam.com/wp-content/uploads/2026/04/logo-petro.png" alt="Petro"></div>
          <div class="partner-logo"><img src="https://moitruongnamlam.com/wp-content/uploads/2026/04/home-farm.png" alt="Home Farm"></div>
          <div class="partner-logo"><img src="https://moitruongnamlam.com/wp-content/uploads/2026/04/tnl.jpg" alt="TNL"></div>
          <div class="partner-logo"><img src="https://moitruongnamlam.com/wp-content/uploads/2026/04/Logo_Chunshin-Precision-Vina-Co.-LTD_1702613194-c8598bb7.webp" alt="Chunshin Precision"></div>
          <div class="partner-logo"><img src="https://moitruongnamlam.com/wp-content/uploads/2026/04/Golf.jpg" alt="Đối tác Golf"></div>
        </div>
      </div>
    </section>

    <!-- SECTION 10: QUICK INQUIRY FORM -->
    <section class="section section-subtle">
      <div class="container">
        <div class="contact-layout">
          <div>
            <span class="section-subtitle">Tư vấn trực tiếp</span>
            <h2 class="section-title">Cần Khảo Sát Hệ Thống Hoặc Lập Hồ Sơ Môi Trường?</h2>
            <p style="font-size: 1.05rem; line-height: 1.7; color: var(--color-text-body); margin-bottom: var(--space-5);">
              Hãy để lại thông tin hoặc liên hệ trực tiếp với chúng tôi. Đội ngũ kỹ sư Môi Trường Nam Lâm sẽ khảo sát hiện trạng thực tế và tư vấn phương án kinh tế, an toàn nhất cho doanh nghiệp của bạn.
            </p>

            <div class="contact-info-block">
              <div class="contact-info-title">
                <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                <span>Hotline Kỹ Thuật (Zalo 24/7):</span>
              </div>
              <p style="font-size: 1.25rem; font-weight: bold; color: var(--color-primary); margin-left: 28px;">
                <a href="tel:0968479979">0968 479 979</a>
              </p>
            </div>

            <div class="contact-info-block">
              <div class="contact-info-title">
                <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                <span>Hộp Thư Tiếp Nhận Hồ Sơ:</span>
              </div>
              <p style="font-size: 1rem; color: var(--color-text-body); margin-left: 28px;">
                <a href="mailto:moitruongnamlam@gmail.com">moitruongnamlam@gmail.com</a>
              </p>
            </div>

            <div class="contact-info-block">
              <div class="contact-info-title">
                <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                <span>Địa Chỉ Trụ Sở Chính:</span>
              </div>
              <p style="font-size: 1rem; color: var(--color-text-body); margin-left: 28px;">
                Số 229/64/50 đường Tây Thạnh, Phường Tây Thạnh, TP. Hồ Chí Minh
              </p>
            </div>
          </div>

          <!-- B2B Inquiry Form -->
          <div class="form-card">
            <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: var(--space-4); color: var(--color-secondary);">
              Gửi Yêu Cầu Báo Giá &amp; Tư Vấn
            </h3>
            
            <form class="js-contact-form" novalidate>
              <div class="js-form-feedback" style="display: none;"></div>

              <div class="form-group">
                <label class="form-label">Họ và tên <span class="required">*</span></label>
                <input type="text" name="fullname" class="form-control" placeholder="Ví dụ: Nguyễn Văn A" required>
              </div>

              <div class="grid-2">
                <div class="form-group">
                  <label class="form-label">Số điện thoại <span class="required">*</span></label>
                  <input type="tel" name="phone" class="form-control" placeholder="Ví dụ: 0968479979" required>
                </div>
                <div class="form-group">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="tencongty@gmail.com">
                </div>
              </div>

              <div class="form-group">
                <label class="form-label">Doanh nghiệp / Nhà máy / Lĩnh vực</label>
                <input type="text" name="company" class="form-control" placeholder="Tên công ty hoặc ngành nghề cần xử lý">
              </div>

              <div class="form-group">
                <label class="form-label">Nội dung yêu cầu</label>
                <textarea name="message" class="form-control" rows="3" placeholder="Mô tả nhu cầu xử lý nước thải, khí thải hoặc loại hồ sơ môi trường cần tư vấn..."></textarea>
              </div>

              <button type="submit" class="btn btn-primary btn-block">
                Gửi Thông Tin Khảo Sát &rarr;
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
