<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ma liste de chaussettes</h1>
    <ul>
        @foreach ($chaussettes as $chaussette)
        <li>
            <div>
            Chaussettes n°: {{ $chaussette->id }} ,
            Couleur: {{ $chaussette->couleur }}
            </div>
            <div>
                @if ( $chaussette->propre )
                    sont propres
                @else
                    sont sales
                @endif
            </div>
        </li>
        @endforeach
    </ul>
</body>
</html>
