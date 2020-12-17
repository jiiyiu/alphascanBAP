<?php
include "../../public/includes/head_inc.php" 
?>
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Envoi fichier - Snippet</title>
</head>
<body>
    <h1>Formulaire inscription client</h1>
    <section>
        <form action="envoi_fichier.php" enctype="multipart/form-data" id="sendfile_form">
            <div>
                <label for="sendfile">Téléverser un fichier</label>
                <input type="file" name="sendfile" id="sendfile">
                <!-- attribut accept? -->
            </div>
            <button type="submit" name="action" value="sendfiles">Envoyer le(s) fichier(s)</button>
        </form>
    </section>
</body>
</html>