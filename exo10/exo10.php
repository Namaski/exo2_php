<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10</title>
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

        form{
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
        En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire
        complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-
        mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation
        « Développeur Logiciel », « Designer web « Intégrateur » ou « Chef de projet
        Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
        de validation (submit).
    </p>

    <script>
        document.querySelector("h1").innerText = document.querySelector("title").innerText;
    </script>
</body>

</html>

<?php



function afficherInputWithCheckbox($forms, $choice)
{

    $formulaire = '<form>';

    foreach ($forms as $el) {
        $formulaire .=
            '<label for=""> ' . $el . ' </label>  <input type="texte"> <br>';
    }

    $formulaire .= '<select>';

    foreach ($choice as $el) {
        $formulaire .=
            '<option value="' . $el . '">' . $el . '</option>';
    }



    $formulaire .= '</select>';


    $formulaire .= '<input type="submit" value="Submit"> </form>';

    return $formulaire;
}




$choice = ["Développeur logiciel", "Designer web", "Intégrateur", "Chef de projet"];
$forms = ["Nom", "Prénom", "Adresse e-mail", "Ville", "Sexe",];

echo afficherInputWithCheckbox($forms, $choice);
