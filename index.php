<?php
    require "../pipoc/external/header.php"
?>

<main>
    <div class="container customFont">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <img class="customLogo" src="./assets/pic/logoPipoc2019.png" alt="logoPipoc">
            </div>
        </div>

        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1 class="headerText">
                    MPOB - International Palm Oil Congress And Exhibition
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card bg-transparent border-white">
                    <div class="card-body">
                        <form method="POST" action="./include/login.php">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-unlock-alt"></i>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                           
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-success btn-block" name="login">
                                        User Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require "../pipoc/external/footer.php"
?>