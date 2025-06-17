jQuery(document).ready(function($) {
    $('#makoa-notice .notice-dismiss').on('click', function() {
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'makoa_dismiss_notice'
            }
        });
    });
});