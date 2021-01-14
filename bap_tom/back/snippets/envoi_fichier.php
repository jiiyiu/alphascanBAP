<?php
include "../../public/includes/head_inc.php" 
?>
    <link rel="stylesheet" href="../../assets/profilstyle.css">
    <title>Envoi fichier - Snippet</title>
</head>
<body>
    <h1>Formulaire insertion client</h1>
    <section>
        <form action="recup_fichier.php" enctype="multipart/form-data" id="sendfile_form" method="post">
            <div>
                <label for="sendfile">Téléverser un fichier</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="file" name="sendfile" id="sendfile" accept=".pdf">
            </div>
            <button type="submit" name="action" value="sendfile">Envoyer le(s) fichier(s)</button>
        </form>
    </section>
</body>
</html>