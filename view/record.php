<?php
    require "../external/header.php"
?>

<main>

    <?php
        require "../external/mainText.php";
        require "../external/navbar.php";
    ?>

    

    <?php 
        if (isset($_POST['main'])) {
    ?>

        <div class="container customFont space2">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <form method="POST">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                filter
                            </button>

                            <div class="dropdown-menu" aria-labelledby="filter">
                                <button class="dropdown-item" type="submit" name="main">
                                    All
                                </button>
                                <button class="dropdown-item" type="submit" name="regDate">
                                    Reg Date
                                </button>
                                <button class="dropdown-item" type="submit" name="inSector">
                                    Industry
                                </button>
                                <button class="dropdown-item" type="submit" name="country">
                                    Country
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php
            require "../external/filter/mainRecord.php";
        }

        else if (isset($_POST['regDate'])) {
    ?>

        <div class="container customFont space2">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <form method="POST">
                        <div class="btn-group" role="group">
                            <button class="btn btn-success dropdown-toggle" type="button" id="filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                filter
                            </button>

                            <div class="dropdown-menu" aria-labelledby="filter">
                                <button class="dropdown-item" type="submit" name="main">
                                    All
                                </button>
                                <button class="dropdown-item" type="submit" name="regDate">
                                    Reg Date
                                </button>
                                <button class="dropdown-item" type="submit" name="inSector">
                                    Industry
                                </button>
                                <button class="dropdown-item" type="submit" name="country">
                                    Country
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- <form method="POST">
                        <div class="btn-group" role="group">
                            <button class="btn btn-success dropdown-toggle" type="button" id="filter2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Day
                            </button>

                            <div class="dropdown-menu" aria-labelledby="filter2">
                                <button class="dropdown-item" type="submit" name="day_1">
                                    Day 1
                                </button>
                                <button class="dropdown-item" type="submit" name="day_2">
                                    Day 2
                                </button>
                                <button class="dropdown-item" type="submit" name="day_3">
                                    Day 3
                                </button>
                            </div>
                        </div> 
                    </form> -->
                </div>
            </div>
        </div>

    <?php
            // if (isset($_POST['day_1'])) {
            //     require "../external/filter/date/day1Record.php";
            // }

            require "../external/filter/date/regDateRecord.php";
        }
   
        else if (isset($_POST['inSector'])) {
    ?>

        <div class="container customFont space2">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <form method="POST">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                filter
                            </button>

                            <div class="dropdown-menu" aria-labelledby="filter">
                                <button class="dropdown-item" type="submit" name="main">
                                    All
                                </button>
                                <button class="dropdown-item" type="submit" name="regDate">
                                    Reg Date
                                </button>
                                <button class="dropdown-item" type="submit" name="inSector">
                                    Industry
                                </button>
                                <button class="dropdown-item" type="submit" name="country">
                                    Country
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php
            require "../external/filter/industryRecord.php";
        }

        else if (isset($_POST['country'])) {
    ?>

        <div class="container customFont space2">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <form method="POST">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                filter
                            </button>

                            <div class="dropdown-menu" aria-labelledby="filter">
                                <button class="dropdown-item" type="submit" name="main">
                                    All
                                </button>
                                <button class="dropdown-item" type="submit" name="regDate">
                                    Reg Date
                                </button>
                                <button class="dropdown-item" type="submit" name="inSector">
                                    Industry
                                </button>
                                <button class="dropdown-item" type="submit" name="country">
                                    Country
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php
            require "../external/filter/countryRecord.php";
        }
        
        else {
    ?>

        <div class="container customFont space2">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <form method="POST">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                filter
                            </button>

                            <div class="dropdown-menu" aria-labelledby="filter">
                                <button class="dropdown-item" type="submit" name="main">
                                    All
                                </button>
                                <button class="dropdown-item" type="submit" name="regDate">
                                    Reg Date
                                </button>
                                <button class="dropdown-item" type="submit" name="inSector">
                                    Industry
                                </button>
                                <button class="dropdown-item" type="submit" name="country">
                                    Country
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php
            require "../external/filter/mainRecord.php";
        }
    ?>

</main>

    <?php
        require "../external/footer.php";
    ?>