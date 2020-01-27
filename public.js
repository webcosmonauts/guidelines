
$(document).ready(function(){
    $('form').parsley({
        errorClass: 'is-invalid text-danger',
        successClass: 'is-valid',
        errorsWrapper: '<div class="invalid-feedback"></div>',
        errorTemplate: '<span></span>',
        trigger: 'change',
    });
});

alert('123')
