<?php
    if (isset($_POST['User'])) {
        require "../userRec/userRecord.php";
     }
     else if (isset($_POST['Admin'])) {
        require "../userRec/adminRecord.php";
    }
     else {
        require "../userRec/userRecord.php";
   }
?>