<?php

$target_dir = "uploads/";

if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($fileType != "zip") {
        echo "Seuls les fichiers ZIP sont autorisés.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Désolé, votre fichier n'a pas été téléchargé.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Le fichier " . $target_file . " a été téléchargé.";
        } else {
            echo "Désolé, il y a eu une erreur lors du téléchargement de votre fichier.";
        }
    }
} else {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload ZIP</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Sélectionnez un fichier ZIP:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload ZIP" name="submit">
    </form>
</body>
</html>

<?php
}
?>

