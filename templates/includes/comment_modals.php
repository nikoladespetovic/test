<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit comment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" method="POST" action="edit-comment">
                <input type="hidden" class="commentid" name="id">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Show comment</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="show_comment" id="edit_show_comment" value="1" checked>
                            <label class="form-check-label" for="edit_show_comment">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="show_comment" id="edit_dont_show_comment" value="0">
                            <label class="form-check-label" for="edit_dont_show_comment">No</label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="edit">Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->