<?php


function getAllMemes($conn) {

    $sql = "SELECT image, text, votes FROM memes";
    $result = mysqli_query( $conn, $sql );
    return $result;
}


function getMemeById($id,$conn) {
    $sql = "SELECT image, text, votes FROM memes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result();
}

function createMeme($image, $text, $votes,$conn) {
    $sql = "INSERT INTO memes (image, text, votes) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $image, $text, $votes);
    return $stmt->execute();
}

function updateMeme($id, $image, $text, $votes,$conn) {
    $sql = "UPDATE memes SET image = ?, text = ?, votes = ? WHERE id = ?";
    
}

function deleteMeme($id,$conn) {
    global $conn;
    $sql = "DELETE FROM memes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
?>