<?php
     if (isset($_POST['visitor'])) {
        require "../stat/visitorTable.php";
     }
     else if (isset($_POST['days'])) {
        require "../stat/dayTable.php";
     }
     else if (isset($_POST['industry'])) {
        require "../stat/industryTable.php";
    }
    else if (isset($_POST['country'])) {
        require "../stat/countryTable.php";
    }
     else {
        require "../stat/visitorTable.php";
   }
?>