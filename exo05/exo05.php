<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
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
            margin: 1em;
        }

        label, input {
            margin: 0.5em;
        }
    </style>
</head>

<body>
    <h1></h1>



    <p>
        Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
        précisant le nom des champs associés.
        Exemple :
        Snomslnput array ( "Nom" , "Prénom", "Ville") ;
        afficher Input ($nomslnput) ;
    </p>

    <script>
        document.querySelector("h1").innerText = document.querySelector("title").innerText;
    </script>
</body>

</html>

<?php



$forms = ["Nom","Prénom","Ville"];

function afficherInput($forms)
{

    $formulaire = '<form>';
    
    foreach ($forms as $el) {
       $formulaire .= 
       '<label for=""> ' . $el .' </label>  <input type="texte"> <br>';
    }
    

    
    $formulaire .= '<input type="submit" value="Submit"> </form>';

    return $formulaire;
}


echo afficherInput($forms);