<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
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

        select {

            width: 20%;
            margin: 1em;
        }
    </style>
</head>

<body>
    <h1></h1>



    <p>
        Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
        de valeurs.
        Exemple :
        Selements array ("Monsieur", "Madame", "Mademoiselle") ;
        alimenterListeDerou1ante ($elements) ;
    </p>

    <script>
        document.querySelector("h1").innerText = document.querySelector("title").innerText;
    </script>
</body>

</html>

<?php

$forms = ["Monsieur", "Madame", "Mademoiselle"];

function afficherInput($forms)
{

    $elements = '<select>';

    foreach ($forms as $el) {
        $elements .=
            '<option value="' . $el . '">' . $el . '</option>';
    }



    $elements .= '</select>';

    return $elements;
}


echo afficherInput($forms);
