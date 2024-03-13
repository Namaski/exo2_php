<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 12</title>
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

        form {
            width: 70%;
            margin: 5px auto;
        }

        input,
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px auto;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px auto;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1></h1>



    <p>
        La fonction var_dump (Svariable)
        permet d'afficher les informations d'une variable.
        Soit le tableau suivant :
        StableauVa1eurszarray (t rue, "texte" , IO, 25 . 369, array ( 'tva leurl , ) ) ;
        A l'aide d'une boucle, afficher les informations des variables contenues dans le tableau.
    </p>

    <script>
        document.querySelector("h1").innerText = document.querySelector("title").innerText;
    </script>
</body>

</html>

<?php

$tableauValeurs = [true,"texte",10,25.369,array("valeur1","valeur2")];

foreach ($tableauValeurs as $el) {
    var_dump($el);
    echo "<br>";
}
