<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
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
    </style>
</head>

<body>
    <h1></h1>

    

    <p>
        Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir
        dans un nouvel onglet (_blank)
    </p>

    <script>
        document.querySelector("h1").innerText = document.querySelector("title").innerText;
    </script>
</body>

</html>

<?php


function lienElanFormation(){

   
    return '<a href="https://elan-formation.fr/accueil" target="_blank"> LIEN ELAN FORMATION </a>';
}

echo lienElanFormation();