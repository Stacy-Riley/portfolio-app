(function($) {
    "use strict";

    // Contact Form Submit
    $("#contactForm").on("submit", function(event) {
        event.preventDefault();  // Prevent form submission until reCAPTCHA validation is done

        // Ensure that grecaptcha is loaded
        if (typeof grecaptcha !== 'undefined') {
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ env('NOCAPTCHA_SITEKEY') }}', { action: 'contactForm' }).then(function(token) {
                    // Add the reCAPTCHA token to the form
                    var recaptchaResponse = document.createElement('input');  // Correct var usage
                    recaptchaResponse.setAttribute('type', 'hidden');
                    recaptchaResponse.setAttribute('name', 'g-recaptcha-response');
                    recaptchaResponse.setAttribute('value', token);
                    document.getElementById('contactForm').appendChild(recaptchaResponse);

                    // Submit the form after reCAPTCHA validation
                    document.getElementById('contactForm').submit();
                });
            });

        } else {
            console.error("Google reCAPTCHA is not loaded properly.");
        }
    });

})(window.jQuery);
