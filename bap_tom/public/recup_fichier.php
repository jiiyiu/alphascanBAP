<?php

include "includes/head_inc.php" 
?>
    <link rel="stylesheet" href="../assets/css/profilstyle.css">
    <link rel="icon" href="../assets/img/favicon.png">
    <title>AlphaScan3D | Votre profil</title>
</head>
<?php
include "includes/header.inc.php"
?>
        <li class="nav-item">
            <a class="nav-link" href="profil.php"> 
                <img src="../assets/img/profile-user.png" alt="Cliquer ici pour accéder à votre profil !">
                Profil
                <!-- Menu déroulant profil ici -->
            </a>
        </li>
      </ul>
    </div>
</nav>
<?php
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['sendfile']['name']);

if (move_uploaded_file($_FILES['sendfile']['tmp_name'], $uploadfile)) {
    $message_erreur = "<div class='alert_danger'>Envoi de fichier réalisé avec succès</div>";
} else {
    $message_erreur = "<div class='alert_danger'>Erreur lors de la réception du fichier ou faille de sécurité : ANNULATION</div>";
}
?>
<?php 
include "includes/footer.inc.php"
?>
</body>
</html>