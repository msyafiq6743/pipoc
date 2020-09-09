    <div class="container customFont space2">
        <div class="row">
            <div class="col d-flex justify-content-end"> 
                <div class="btn-group">
                    <button class="btn btn-success dropdown-toggle" type="button" id="filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Download
                    </button>

                    <div class="dropdown-menu" aria-labelledby="filter">
                        <form method="POST" action="../external/mainExcel.php">
                            <button class="dropdown-item" type="submit" name="all">
                                All Days
                            </button>
                        </form>

                        <form method="POST" action="../external/dayExcel.php">
                            <button class="dropdown-item" type="submit" name="day_1">
                                Days 1
                            </button>
                            <button class="dropdown-item" type="submit" name="day_2">
                                Days 2
                            </button>
                            <button class="dropdown-item" type="submit" name="day_3">
                                Days 3
                            </button>
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </div>