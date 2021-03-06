<?php

// Inclusion des dépendances
require '../vendor/autoload.php';
require '../src/functions.php';

// Vérifie qu'il n'y ai pas de problème avec l'id
if (!isset($_GET['id'])) {
    echo 'Erreur : L\'id du logement n\'est pas valide';
    exit;
}

// Récupère l'id dans l'URL
$logementId = intval($_GET['id']);

// Requête de sélection du logement selon l'id
$logement = getLogementById($logementId);

// Inclusion du template
include '../templates/detail_logement.phtml';
