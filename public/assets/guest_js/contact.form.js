(function($) {
    "use strict";

    // Contact Form Submit
    $("#contactForm").on("submit", function(event) {
        event.preventDefault();  // Prevent form submission to handle it with JavaScript

        // Submit the form directly without reCAPTCHA validation
        document.getElementById('contactForm').submit();
    });

})(window.jQuery);
