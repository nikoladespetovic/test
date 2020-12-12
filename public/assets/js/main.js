!(function($) {
    "use strict";

    // Add a comment
    $("#comment-form").on('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        $.ajax({
            type       : 'POST',
            url        : 'add-comment',
            data       : formData,
            dataType   : 'json',
            contentType: false,
            cache      : false,
            processData: false,
            success    : function(response) {
                console.log(response);
                const SITE_MODAL = $("#site-modal");
                const modalTitle = $("#site-modal-title");
                const responseBody = $("#response-body");

                modalTitle.text('Comment status');
                responseBody.text(response.message);

                SITE_MODAL.modal('show');
                $('#btn-comment-submit').attr("disabled", 'disabled');
            },
            error      : function(err) {
                console.log(err);
            }
        });
    });

})(jQuery);