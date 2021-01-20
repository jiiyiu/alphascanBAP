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
<section>
        <form action="recup_fichier.php" enctype="multipart/form-data" id="sendfile_form" method="post">
            <div>
                <label for="sendfile">Téléverser un fichier</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="file" name="sendfile" id="sendfile" accept=".pdf">
            </div>
            <button type="submit" name="action" value="sendfile">Envoyer le(s) fichier(s)</button>
        </form>
        <?php 
include "includes/footer.inc.php"
?>
</body>
</html>