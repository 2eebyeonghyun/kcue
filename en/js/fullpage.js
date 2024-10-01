$(document).ready(function () {
    $('#fullpage').fullpage({
        'verticalCentered': true,
        'navigation': true,
        'menu': '#menu',
        'afterLoad': function () {
            $('.fp-table.active .aos-init').addClass('aos-animate');
        }
    });
});