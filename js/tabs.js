/**
 * Môi Trường Nam Lâm - Tabs Handler
 */
document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  const tabContainers = document.querySelectorAll('[data-tabs]');

  tabContainers.forEach(function (container) {
    const tabButtons = container.querySelectorAll('.tab-btn');
    const tabPanes = container.querySelectorAll('.tab-pane');

    tabButtons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        const targetId = btn.getAttribute('data-tab-target');

        // Remove active class from all buttons and panes in this container
        tabButtons.forEach(b => b.classList.remove('is-active'));
        tabPanes.forEach(p => p.classList.remove('is-active'));

        // Activate clicked button and target pane
        btn.classList.add('is-active');
        const targetPane = container.querySelector(targetId);
        if (targetPane) {
          targetPane.classList.add('is-active');
        }
      });
    });
  });
});
