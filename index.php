<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>envoie mail truc</title>
</head>
<body>

    <form action="coucou.php" method="POST">
        <label for="mail">E-mail: </label>
        <input type="email" id="mail">
        <label for="message">Message: </label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>

        <input type="submit">
    </form>

</body>
</html>