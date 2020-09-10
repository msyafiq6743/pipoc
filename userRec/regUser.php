
    
<div class="modal fade" id="regUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Register New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="card bg-transparent border-white custCard">
                            <div class="card-body">
                                <form method="POST" action="../include/regUserSub.php">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Username" name="username" autofocus >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <input type="password" class="form-control" placeholder="Password" name="password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <input type="password" class="form-control" placeholder="Conform Password" name="password2">
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" class="form-control" name="role" value="user" >

                                    <div>
                                        <button type="submit" class="btn btn-success btn-block" name="regUser">Register User</button>
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
   