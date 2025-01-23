<?php
declare(strict_types=1);

/*
 - Fonction tab_html
 - @params tab_noms_col, num_ligne
 - tab_noms_col est un tableau qui contient les noms des colonnes
 - num_ligne est un entier. C'est le nombre de ligne du tableau à générer.
 - @return La fonction retourne une chaine de caractères de balises html pour produire le tableau
*/

/* Procédure de rédaction de fonction
1. Spécification fonctinnelle en langue naturelle 
2. Ecriture de la signature de la fonction
3. Ecriture du corps de la fonction
    - Déclaration et initialisation de la variable $ret
    (ici chaine vide). $ret est toujours du type de retour
    de la fonction (ici string).
    - A la fin on retourne $ret
*/
// variables de connexion à la base SQL

/*
$servername = "wamp";
$username = "root";
$password = "";
$dbname = "mapremierebdd";

// fonction de connexion à la bdd
$conn = mysqli_connect($servername,$username,$password,$dbname);

// si la connexion n'arrive pas à aboutir, afficher l'erreur
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully.";
*/

// fonction de génération automatique de code en HTML
function tab_html (array $tab_noms_col, int $num_ligne) : string
{
    $ret = "<table style='width:100%'>\n";

    // en tête du tableau
    $header = "\t<tr>\n";

    for($i = 0; $i < count($tab_noms_col); $i++)
    {
        $header = $header . "\t\t<th>" . $tab_noms_col[$i] . "</th>\n";
    }
    $header = $header . "\t</tr>\n";


    //corps du tableau
    $compteur = 0;
    $body = "";
    while ($compteur < $num_ligne) {
         for ($i=0; $i < count($tab_noms_col); $i++) { 
            $body = $body . "\t\t<td>" . "</td>\n";
        }
        $body = $body . "\t</tr>\n";
        $compteur++;
    }

    $ret = $ret . $header . $body;
    return $ret . "</table>";
}

// test
echo tab_html(["Toto", "Titi"], 3);

/*
$rows = [];
while($row = mysqli_fetch_array($result))
{
    $rows[] = $row;
}
*/
?>