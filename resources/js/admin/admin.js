window.$ = window.jQuery = require('jquery');

require('parsleyjs');

$(document).ready(function () {
    $('form[novalidate]').parsley({
        errorClass: 'is-danger',
        successClass: 'is-success',
        errorsWrapper: '<p class="help is-danger"></p>',
        errorTemplate: '<span></span>',
    });
});
