<?php
    require "../external/header.php"
?>

<main>

    <?php
        require "../external/mainText.php";
        require "../external/navbar.php";
    ?>

        <div class="container customFont space2">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <form method="POST">
                        <div class="btn-group">
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
        if (isset($_POST['main'])) {
    
            require "../filter/mainRecord.php";
        }

        else if (isset($_POST['regDate'])) {
    
            require "../filter/regDateRecord.php";
        }
   
        else if (isset($_POST['inSector'])) {
   
            require "../filter/industryRecord.php";
        }

        else if (isset($_POST['country'])) {
   
            require "../filter/countryRecord.php";
        }
        
        else {
    
            require "../filter/mainRecord.php";
        }
    ?>

</main>

    <?php
        require "../external/footer.php";
    ?>