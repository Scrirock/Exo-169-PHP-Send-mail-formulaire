<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>envoie mail truc</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-teal.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>
    <div id="container">
        <form action="index.php" method="POST">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="mail">
                <label class="mdl-textfield__label" for="mail">E-Mail</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield">
                <textarea class="mdl-textfield__input" rows="4" id="message" maxlength="500"></textarea>
                <label class="mdl-textfield__label" for="message">Message</label>
            </div>

            <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" type="submit">
                <i class="material-icons">add</i>
            </button>
        </form>
    </div>

    <?php

        if (isset($_POST["message"], $_POST["mail"])) {
            $message = $_POST["message"];
            $mail = $_POST["mail"];

            if (strlen($message) > 500) {
                echo "Le message est trop long.";
            }
            else {
                $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);

                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    mail($mail, "subject test", $message);
                }
                else {
                    echo($mail . " n'est pas une adresse mail valide");
                }
            }
        }

    ?>

</body>
</html>