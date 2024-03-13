<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9</title>
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

        .dog {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>

<body>
    <h1></h1>



    <p>
        Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de
        valeurs en paramètre
        Exemple :
        afficherRadio (SnomsRadio) ;
    </p>

    <script>
        document.querySelector("h1").innerText = document.querySelector("title").innerText;
    </script>
</body>

</html>

<?php



$forms = ["Masculin", "Féminin", "Autre"];

function afficherInput($forms)
{

    $formulaire = '<form>';
    
    foreach ($forms as $el) {
       $formulaire .= 
       '<input type="checkbox">  <label for=""> ' . $el .' </label>  <br>';
    }
    

    
    $formulaire .= '<input type="submit" value="Submit"> </form>';

    return $formulaire;
}


echo afficherInput($forms);
