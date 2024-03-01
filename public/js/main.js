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

function toggleDropdown() {
    var dropdown = document.getElementById("profileDropdown");
    dropdown.style.display = (dropdown.style.display === "none" || dropdown.style.display === "") ? "block" : "none";
  }
  
  window.onclick = function(event) {
    if (!event.target.closest('.profile_img')) {
      var dropdown = document.getElementById("profileDropdown");
      dropdown.style.display = "none";
    }
  };

  setTimeout(function() {
    $('#infoAlert').alert('close');
    }, 5000);

// show loading on page load
$(window).on('load', function () {
    $('#loading').fadeOut();
         });
 
   // Show loading image
   function showLoading() {
       $('#loading').fadeIn();
   }

   // Hide loading image
   function hideLoading() {
       $('#loading').fadeOut();
   }