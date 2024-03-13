<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            background-color: rgb(21, 32, 43);
            color: rgb(197, 165, 197);
        }

        p {
            margin: 1em auto;
            width: 70%;
            text-align: justify;
        }

        h1 {
            text-align: center;
            margin: 1em;
        }

        table{
            border-collapse: collapse;
            margin: 0 auto;
        }

        td,
        th {
            border: 2px solid black;
            padding: 0.6em;
        }
    </style>
</head>

<body>
    <h1></h1>

    
    
    <p>
        Soit le tableau suivant :
        $capitales = array
        ("France"=>"Paris", "Allemagne"=> "Berlin","USA"=> "Washington" , "Italie" =>"Rome");
        Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
        s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
        une fonction personnalisée.
        Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
    </p>

    <script>
        document.querySelector("h1").innerText = document.querySelector("title").innerText;
    </script>
</body>

</html>

<?php


function afficherTableHTML($capitales)
{

    ksort($capitales);


    $table = "<table>";

    foreach ($capitales as $key => $value) {
        $key = strtoupper($key);
        $table .=  //.= ajout des éléments via concaténation à la variable table 
            "<tr>
        <th>" . $key . " </th>
        <td>" . $value . '</td>
        <td> <a href="https://fr.wikipedia.org/wiki/' . $value .'" target="_blank">WIKI</a></td>
        </tr>';
    }

    $table .= "</table>";

    return $table;
}

$capitales = [

    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"

];

echo afficherTableHTML($capitales);
