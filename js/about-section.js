
(function () {
  'use strict';

  var sections = document.querySelectorAll('.nl-about');
  if (!sections.length || !('IntersectionObserver' in window)) {
    return;
  }

  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduceMotion) {
    return;
  }

  var observer = new IntersectionObserver(function (entries, currentObserver) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) {
        return;
      }

      entry.target.classList.add('nl-about--is-visible');
      currentObserver.unobserve(entry.target);
    });
  }, {
    threshold: 0.12
  });

  sections.forEach(function (section) {
    section.classList.add('nl-about--motion-ready');
    observer.observe(section);
  });
})();
