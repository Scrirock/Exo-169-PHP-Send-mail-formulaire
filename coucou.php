<?php

    if (isset($_POST["message"], $_POST["mail"])){
        mail($_POST["mail"], "subject test", $_POST["message"]);
    }

?>