document.addEventListener("DOMContentLoaded", function() {
    var benefitsItems = document.querySelectorAll('.benefits-item');
    var nav = document.querySelector('nav');

    benefitsItems.forEach(function(item) {
        item.style.opacity = 1;
        item.style.transform = 'translateY(0)';
    });

    // Change navbar background on scroll
    window.addEventListener("scroll", function() {
        var scrollPos = window.scrollY;

        if (scrollPos > 50) {
            nav.style.background = '#17516D';
            nav.classList.remove('light');
        } else {
            nav.style.background = 'transparent';
            nav.classList.add('light');
        }
    });
});