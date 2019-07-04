<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter des chaussettes</title>
</head>
<body>
    <h1>Ajouter des chaussettes</h1>
    <form action="/chaussettes" method="post">
        @csrf
        <div>
            <input type="text" name="couleur" />
        </div>
        <div>
            <input type="checkbox" name="propre" label="propre?" />Propre?
        </div>
        <button type="submit">Ajouter ces chaussettes</button>
    </form>
</body>
</html>
