<?php
    //  if (isset($_POST['RegUser'])) {
    //     require "../stat/visitorTable.php";
    //  }
    if (isset($_POST['User'])) {
        // require "../userRec/regUser.php";
        require "../userRec/userRecord.php";
     }
     else if (isset($_POST['Admin'])) {
        require "../userRec/adminRecord.php";
    }
     else {
        require "../userRec/userRecord.php";
   }
?>