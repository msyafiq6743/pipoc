<?php
    require "../external/header.php";
?>

<main>

    <?php
        require "../external/mainText.php";
        require "../external/navbar.php";
        // require "../search/search.php";

        if (isset($_POST['searchBtn'])) {
            require "../search/searchRecord.php";  
         }
    ?>

</main>

    <?php
        require "../external/footer.php";
    ?>