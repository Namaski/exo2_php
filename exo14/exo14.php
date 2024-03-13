<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 14</title>
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
        Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
        vitesseActue11e ainsi que les méthodes demarrer( ) , accelerer( ) et stopper ( ) en plus
        des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
        instancié est de O.
        véhicule.
        " Peugeot
        ' 'Citroen
        Une méthode personnalisée pourra afficher toutes les informations d'un
    </p>

    <script>
        document.querySelector("h1").innerText = document.querySelector("title").innerText;
    </script>
</body>

</html>

<?php

class Voiture
{
    //Atributs, caractèristiques

    protected string $_marque;
    protected string $_modele;

    //Constructor

    public function __construct($marque, $modele)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    //Getter 


    public function getInfo()
    {
        return "Marque : " . $this->_marque . " Modèle : " . $this->_modele;
    }
    public function getMarque()
    {
        return $this->_marque;
    }
    public function getModele()
    {
        return $this->_modele;
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



}

class VoitureElec extends Voiture
{

    //Atributs, caractèristiques

    private string $_autonomie;


    //Constructor

    public function __construct($marque, $modele, $autonomie)
    {
        parent::__construct($marque,$modele);
        $this->_autonomie = $autonomie;
    }

    //Getter

    public function getInfo()
    {
        return parent::getInfo() . " Autonomie : " . $this->_autonomie;
    }

    // Setter
}



$v1 = new Voiture("Peugeot", "408");
$vel1 = new VoitureElec("Tesla", "Model X", 200);

echo $v1->getInfo();
echo "<br>";
echo $vel1->getInfo();
