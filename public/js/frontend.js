function aos_init() {
    AOS.init({
    });
}
$(window).on('load', function() {
    aos_init();
 
});

(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();


    $(document).ready(function(){ 
        $('.sticky-quick-links').on('click', function() {
            $('#sticky-quick-links').appendTo("body").modal('show');
        });
    });    

    $('#mac').on('blur', function() {
        // alert(1);
    });