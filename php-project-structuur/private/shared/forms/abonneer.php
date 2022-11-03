<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/private/shared/style.css">
    <title>Basis formulier</title>
</head>
<body>
<form method="post" action="/public/voorbeeld.php">
        <div>
            <label for="user">Naam</label>
             <input id="user" name="user" type="text">
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" name="email" type="email">
             </div>
             <div>
                <label for="vraag">Vraag / opmerking</label>
                <textarea id="vraag" type="vraag"></textarea>
             </div>
             <input class="submit" type="submit" value="Verzenden"></input>
        </form>
</body>


</html>

