<?php
include "./include/db_connect.php";
include "./crud/mem.php";


$memes = getAllMemes($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiteTropFun</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1>Liste de memes</h1>
    <?php
    if ($memes->num_rows > 0) {
        // Afficher les données de chaque mème
        echo '<div class="allMemes">';
        while($row = $memes->fetch_assoc()) {
            echo '<div class="memeContainer" onclick="showOnlyThisMeme(this)">';
            echo '<img src="' . $row["image"] . '" alt="' . $row["text"] . '">';
            echo '<p>' . $row["text"] . '</p>';
            echo '<p>Votes : ' . $row["votes"] . '</p>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo "Aucun mème trouvé.";
    }
    ?>
    
</body>
<script src="js/memeContainer.js"></script>
</html>