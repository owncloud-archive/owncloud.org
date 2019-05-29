$(document).ready(function() {
    $("#table-of-contents").stick_in_parent({
        offset_top: 100
    });

    $('body').scrollspy({ target: '#table-of-contents', offset: 100 })
});