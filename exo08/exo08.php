<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
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
        Soit l'URL suivante : http://my.mobirise.com/data/userpic/764.jpg
        Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.
        Exemple :
        repeterlmage (Suri, 4) ;
    </p>

    <script>
        document.querySelector("h1").innerText = document.querySelector("title").innerText;
    </script>
</body>

</html>

<?php



$img = '<figure><img src="http://my.mobirise.com/data/userpic/764.jpg" alt="Un chien"></figure>' ;

function addImg($img, $nb)
{

    $imgContainer = '<div class ="dog">';

    for ($i=0; $i < $nb; $i++) { 
        $imgContainer .= $img;
        
    }

    $imgContainer .= '</div>';

    return $imgContainer;

}

echo addImg($img, 5);
