
<div class="modal fade" id="delete<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>

            <form method="POST" action="../include/deleteUserSub.php">
                <div class="modal-body">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <p class="removeText">Are Sure Want To Remove <strong><?php echo $row['Username']; ?></strong> ?</p>
                            <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>" >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" name="delete">
                        Delete
                    </button>
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>