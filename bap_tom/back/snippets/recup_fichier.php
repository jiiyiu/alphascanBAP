<?php
include "../../public/includes/head_inc.php" 
?>
    <link rel="stylesheet" href="../../assets/profilstyle.css">
    <title>Envoi fichier - Snippet</title>
</head>
<body>
<?php
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['sendfile']['name']);

if (move_uploaded_file($_FILES['sendfile']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé avec succès.";
} else {
    echo "Attaque potentielle par téléchargement de fichiers.";
}
?>
</body>
</html>