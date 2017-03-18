<?php
// Bien sûr tout ceci est du pseudo-code, je te laisse le plaisir de faire quelques tutoriaux pour voir comment ça se fait en vrai :D

// Là on est en mode on va utiliser le PHP pour générer tout le HTML final avec la liste des films
echo "<html>";
echo "<body>";
echo "<p>Voici la liste de mes films : </p>";

// Ici j'ouvre la liste qui va contenir mes films
echo "<ul>";

// d'abord on récupère la liste des films dans la base de données
$mes_films = mysql_query("SELECT * FROM films");

// ensuite pour chaque film
foreach($mes_films as $un_film) {
  // j'ouvre son li
  echo "<li>";
  // l'objet $un_film contient toutes les infos sur le film
  // on l'adresse comme un tableau, par exemple ici pour récupérer l'ID du film
  // pour construire le nom de l'image
  echo "<img src='images/" . $un_film["id"] . ".jpg'>";
  echo "<div>" . $un_film["titre"] . "</div>"; // pareil pour le titre
  echo "<div>" . $un_film["resume"] . "</div>";
  // je ferme son li
  echo "</li>
}

// Je ferme ma liste et tous les éléments html encore ouverts
echo "</ul>";
echo "</body>";
echo "</html>";

?>
