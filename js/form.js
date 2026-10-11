/**
 * Môi Trường Nam Lâm - B2B Form Validation & Submission
 */
document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  const contactForms = document.querySelectorAll('.js-contact-form');

  contactForms.forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const nameInput = form.querySelector('[name="fullname"]');
      const phoneInput = form.querySelector('[name="phone"]');
      const emailInput = form.querySelector('[name="email"]');
      const messageInput = form.querySelector('[name="message"]');
      const feedbackBox = form.querySelector('.js-form-feedback');

      let isValid = true;
      let errorMsg = '';

      // Check name
      if (nameInput && !nameInput.value.trim()) {
        isValid = false;
        errorMsg = 'Vui lòng nhập họ và tên của bạn.';
        nameInput.focus();
      }

      // Check phone (Vietnamese phone regex: 10 digits starting with 0)
      const phoneRegex = /^(0[3|5|7|8|9])[0-9]{8}$/;
      if (isValid && phoneInput) {
        const cleanPhone = phoneInput.value.replace(/\s+/g, '');
        if (!cleanPhone) {
          isValid = false;
          errorMsg = 'Vui lòng cung cấp số điện thoại để chúng tôi liên hệ tư vấn.';
          phoneInput.focus();
        } else if (!phoneRegex.test(cleanPhone)) {
          isValid = false;
          errorMsg = 'Số điện thoại không hợp lệ (vui lòng nhập 10 chữ số, ví dụ 0968479979).';
          phoneInput.focus();
        }
      }

      // Check email (if filled)
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (isValid && emailInput && emailInput.value.trim()) {
        if (!emailRegex.test(emailInput.value.trim())) {
          isValid = false;
          errorMsg = 'Địa chỉ email không đúng định dạng.';
          emailInput.focus();
        }
      }

      // Display feedback
      if (!isValid) {
        if (feedbackBox) {
          feedbackBox.className = 'form-feedback error';
          feedbackBox.textContent = errorMsg;
          feedbackBox.style.display = 'block';
        } else {
          alert(errorMsg);
        }
        return;
      }

      // If valid - show success state
      const submitBtn = form.querySelector('button[type="submit"]');
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.textContent = 'Đang gửi thông tin...';
      }

      // Simulate API submit or Webhook dispatch
      setTimeout(function () {
        if (feedbackBox) {
          feedbackBox.className = 'form-feedback success';
          feedbackBox.innerHTML = '<strong>Cảm ơn Quý khách!</strong> Yêu cầu tư vấn của Quý khách đã được gửi thành công. Đội ngũ kỹ sư Môi Trường Nam Lâm sẽ liên hệ lại trong thời gian sớm nhất.';
          feedbackBox.style.display = 'block';
        }
        form.reset();
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.textContent = 'Gửi yêu cầu thành công';
        }
      }, 700);
    });
  });
});
