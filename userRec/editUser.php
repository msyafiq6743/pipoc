
    
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="card bg-transparent border-white custCard">
                            <div class="card-body">
                                <form method="POST" action="../include/editUserSub.php">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                            <label>
                                                Username :
                                            </label>
                                                <input type="text" class="form-control" name="username" value="<?php echo $row['Username']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                            <label>
                                                Password :
                                            </label>
                                                <input type="password" class="form-control" name="password" value="<?php echo $row['Password']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                            <label>
                                               Conform Password :
                                            </label>
                                                <input type="password" class="form-control" name="password2" value="<?php echo $row['Password']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label>
                                                    Role :
                                                </label>

                                                <select class="form-control" name="role">
                                                    <option class="option-true" value="<?php echo $row['Role']; ?>" selected ><?php echo $row['Role']; ?>
                                                    <option value="user">User</option>
                                                    <option value="admin">Admin</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>" >

                                    <div>
                                        <button type="submit" class="btn btn-success btn-block" name="editUser">Edit Record</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
   