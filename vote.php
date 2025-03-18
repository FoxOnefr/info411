<?php
include 'db/connect.php'; // Connexion à la base de données
include 'crud/mem.php'; // Inclusion de la fonction updateMeme

// Vérifier si l'ID du mème est passé en POST
if (isset($_POST['memeId'])) {
    $memeId = (int) $_POST['memeId'];  // Récupérer l'ID du mème envoyé via POST

    // Récupérer le mème actuel pour obtenir le nombre de votes actuel
    $sql = "SELECT * FROM memes WHERE id = $memeId";
    $result = mysqli_query($conn, $sql);
    
    // Si un mème a été trouvé
    if ($row = mysqli_fetch_assoc($result)) {
        $currentVotes = $row['votes'];  // Récupérer le nombre de votes actuel
        $img = $row["image"];
        $txt = $row["texte"];
        // Incrémenter le nombre de votes
        $nvVotes = $currentVotes + 1;

        // Appeler la fonction updateMeme pour mettre à jour le nombre de votes
        if (updateMeme(id: $memeId, image: $img, text: $txt, votes: $nvVotes, conn: $conn)) {
            echo "Vote enregistré avec succès!";
        } else {
            echo "Erreur lors de l'enregistrement du vote.";
        }
    } else {
        echo "Mème non trouvé.";
    }

    
    
}
?>
