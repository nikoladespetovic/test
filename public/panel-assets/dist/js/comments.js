$(function() {
    $("#comments").DataTable();

    $(document).on('click', '.edit', function(e) {
        e.preventDefault();
        $('#edit').modal('show');
        const id = $(this).data('id');
        getRow(id);
    });

    function getRow(id) {
        $.ajax({
            type    : 'POST',
            url     : '/comment-row',
            data    : {id: id},
            dataType: 'json',
            success : function(response) {
                $('.commentid').val(response.id);
                response.show_comment === 1 ? $('#edit_show_comment').attr('checked', true) : $('#edit_dont_show_comment').attr('checked', true);
            }
        });
    }
});

