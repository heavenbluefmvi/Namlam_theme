/**
 * Môi Trường Nam Lâm - Main UI Script
 * Pure Vanilla JavaScript - No dependencies
 */

document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  // 1. Mobile Menu Drawer Toggle
  const mobileToggle = document.getElementById('mobileMenuToggle');
  const mobileDrawer = document.getElementById('mobileDrawer');
  const mobileOverlay = document.getElementById('mobileOverlay');
  const mobileClose = document.getElementById('mobileCloseBtn');

  function openMobileMenu() {
    if (mobileDrawer && mobileOverlay) {
      mobileDrawer.classList.add('is-active');
      mobileOverlay.classList.add('is-active');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeMobileMenu() {
    if (mobileDrawer && mobileOverlay) {
      mobileDrawer.classList.remove('is-active');
      mobileOverlay.classList.remove('is-active');
      document.body.style.overflow = '';
    }
  }

  if (mobileToggle) {
    mobileToggle.addEventListener('click', openMobileMenu);
  }

  if (mobileClose) {
    mobileClose.addEventListener('click', closeMobileMenu);
  }

  if (mobileOverlay) {
    mobileOverlay.addEventListener('click', closeMobileMenu);
  }

  // 2. Mobile Accordion for Submenus
  const mobileSubmenuToggles = document.querySelectorAll('.mobile-submenu-trigger');
  mobileSubmenuToggles.forEach(function (trigger) {
    trigger.addEventListener('click', function (e) {
      e.preventDefault();
      const parent = trigger.closest('.mobile-nav-item');
      if (parent) {
        const submenu = parent.querySelector('.mobile-submenu');
        if (submenu) {
          submenu.classList.toggle('is-open');
          trigger.classList.toggle('is-expanded');
        }
      }
    });
  });

  // 3. Sticky Header
  const siteHeader = document.querySelector('.site-header');
  const backToTop = document.getElementById('backToTop');

  window.addEventListener('scroll', function () {
    const scrollY = window.scrollY || document.documentElement.scrollTop;

    // Header sticky effect
    if (siteHeader) {
      if (scrollY > 50) {
        siteHeader.classList.add('is-sticky');
      } else {
        siteHeader.classList.remove('is-sticky');
      }
    }

    // Back to top button visibility
    if (backToTop) {
      if (scrollY > 400) {
        backToTop.classList.add('is-visible');
      } else {
        backToTop.classList.remove('is-visible');
      }
    }
  }, { passive: true });

  // 4. Back to Top Click
  if (backToTop) {
    backToTop.addEventListener('click', function (e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }
});
