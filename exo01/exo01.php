<h1>Exercice 1</h1>

<p>
    Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
    caractère passée en argument en majuscules et en rouge.
    Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
</p>

<?php

function convertirMajRouge($text)
{

    
    return "<span style = 'color : red;'>" . strtoupper($text) . "</span>"; // the text is in a span with the style style = 'color : red;'


}

$text = convertirMajRouge("MON TEXTE TEST");



echo $text;