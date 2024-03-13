<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 13</title>
    <style>
        * {
            width: 90%;
            margin: 0px auto;
            padding: 0px;
            box-sizing: border-box;
            background-color: rgb(21, 32, 43);
            color: rgb(197, 165, 197);
        }

        p {
            margin: 1em auto;
            text-align: justify;
        }

        h1,
        h2 {
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
        Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
        vitesseActue11e ainsi que les méthodes demarrer( ) , accelerer( ) et stopper ( ) en plus
        des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
        instancié est de O.
        véhicule.
        " Peugeot
        ' 'Citroen
    </p>

    <h2>EXO :</h2>
    <script>
        document.querySelector("h1").innerText = document.querySelector("title").innerText;
    </script>
</body>

</html>

<?php

class Voiture
{

    //Atributs, caractèristiques

    private string $_marque;
    private string $_modele;
    private string $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_etat;

    //Constructor

    public function __construct($marque, $modele, $nbPortes, $vitesseActuelle = 0, $etat = false)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = $vitesseActuelle;
        $this->_etat = $etat;
    }

    public function __toString()
    {
        return "$this -> _marque $this -> _modele $this -> _nbPortes $this -> _etat";
    }

    //Getter 

    public function getMarque()
    {
        return $this->_marque;
    }
    public function getModele()
    {
        return $this->_modele;
    }
    public function getNbPortes()
    {
        return $this->_nbPortes;
    }
    public function getVitesseActuelle()
    {
        return $this->_vitesseActuelle;
    }
    public function getEtat()
    {
        return $this->_etat;
    }

    public function getInfo()
    {
        $isCarOn = ($this->_etat) ?  "<p>Le véhicule " . $this->_modele . " est démarré</p>" : "<p>Le véhicule " . $this->_modele . " n'est pas démarré</p>";

        return "<p><strong> Nom et modèle du véhicule :" . $this->_marque . $this->_modele . " </strong></p>" . "<p> Nombres de portes :"  . $this->_nbPortes . "</p>" . $isCarOn . "<p> Sa vitesse actuelle est de : " . $this->_vitesseActuelle . "</p>";
    }

    // Setter

    public function setMarque($marque)
    {
        return $this->_marque = $marque;
    }
    public function setModele($modele)
    {
        return $this->_modele = $modele;
    }
    public function setNbPortes($nbPortes)
    {
        return $this->_nbPortes = $nbPortes;
    }
    public function setVitesseActuelle($vitesseActuelle)
    {
        return $this->_vitesseActuelle = $vitesseActuelle;
    }
    public function setEtat($etat)
    {
        return $this->_etat = $etat;
    }

    // Method

    public function demarrer()
    {

        if ($this->_etat) {


            echo "Le Véhicule " . $this->_marque  . " est déjà démarré";
        } else {

            $this->setEtat(True);
            echo "Le Véhicule " . $this->_marque  . " démarre";
        }

        echo "<br>";
    }

    public function accelerer($vitesse)
    {

        if ($this->_etat) {

            $newVitesse = $this->getVitesseActuelle() + $vitesse;
            $this->setVitesseActuelle($newVitesse);

            echo "Le Véhicule " . $this->_marque  . " accèlère de " . $vitesse . " Km / h";
        } else {


            echo "Le Véhicule " . $this->_marque  . " n'a pas encore démarré, impossible d'accélérer";
        }

        echo "<br>";
    }

    public function stopper()
    {

        if ($this->_etat) {

            $this->setVitesseActuelle(0);
            $this->setEtat(false);

            echo "Le Véhicule " . $this->_marque  . " est à l'arrêt avec le moteur éteint";
        } else {


            echo "Le Véhicule " . $this->_marque  . " n'a pas démarré, elle est déjà à l'arrêt";
        }
        echo "<br>";
    }
}

// Question est-ce qu'il existe un moyen de changer la vitesse via setter puis d'appeller automatiquement une autre function accélérer() ou ralentir(): 
// via une condtition dans la function setVitesse -> non
// via une function magique ->
// si non est-ce possible de changer la vitesse via une autre function différent de SetVitesse() ou d'appeler setVitesse(), exemple accélérer de X, ou ralentir de X.  

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);


echo $v1->demarrer();
echo $v1->accelerer(50);
echo $v2->demarrer();
echo $v2->stopper();
echo $v2->accelerer(20);
echo "La vitesse du véhicule Peugeot 408 est de : " . $v1->getVitesseActuelle() ."<br>";
echo "La vitesse du véhicule Citroên C4 est de : " . $v2->getVitesseActuelle() ."<br>";

echo $v1 -> getInfo();

echo $v2 -> getInfo();


