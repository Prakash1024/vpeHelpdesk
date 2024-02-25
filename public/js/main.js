document.addEventListener('DOMContentLoaded', function() {
    const headerToggle = document.getElementById('header-toggle');
    const navBar = document.getElementById('nav-bar');
    const footer = document.getElementById('footer');
    
    headerToggle.addEventListener('click', function() {
        navBar.classList.toggle('show');
    });

    adjustFooterMargin();

    window.addEventListener('resize', function () {
        adjustFooterMargin();
    });

    function adjustFooterMargin() {
        var windowHeight = window.innerHeight;
        var contentHeight = document.querySelector('.content').offsetHeight;

        if (contentHeight < windowHeight) {
            var remainingHeight = windowHeight - contentHeight;
            footer.style.marginTop = remainingHeight + 'px';
        } else {
            footer.style.marginTop = 'auto';
        }
    }
});