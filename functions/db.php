<?php

/**
 * Une petite fonction, sans objet, pour récupérer une instance de PDO
 *
 * @return PDO
 */
function getPdo()
{
  try {
    // A FAIRE : séparer les coordonnées de la base de données dans un fichier non intégré au dépôt git
    $pdo = new PDO(
      "mysql:host=localhost;dbname=partiel-tp-php",
      "partiel-tp-php",
      "root"
    );
    return $pdo;
  } catch(PDOException $ex) {
    // Pour le moment, au niveau des erreurs, on va laisser le "exit" ici
    // Mais plus tard, on changera la gestion d'erreurs
    exit("Erreur lors de la connexion à la base de données");
  }
}