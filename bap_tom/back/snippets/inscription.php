<?php

$message_erreur = "";

include "../../public/includes/head_inc.php" 
?>
    <link rel="stylesheet" href="../../assets/profilstyle.css">
    <title>Forms - Snippet</title>
</head>
<body>
    <h1>Formulaire inscription client</h1>
    <section>
        <form action="inscription.php" method="POST" id="inscr_form">
        <input type="hidden" name="inscr_form">
        <?php
        if (isset($_POST['inscr_form'])) {
            //Vérification des champs
            if(!empty($_POST["inscr_name"]) and !empty($_POST["inscr_firstName"]) and !empty($_POST['inscr_mail']) and !empty($_POST["inscr_pass"]) and !empty($_POST["inscr_tel"])){
                $name = htmlspecialchars($_POST["inscr_name"]);
                $firstName = htmlspecialchars($_POST["inscr_firstName"]);
                $email = htmlspecialchars($_POST["inscr_mail"]);
                $password = htmlspecialchars($_POST["inscr_pass"]);
                $hash = password_hash($password, PASSWORD_BCRYPT);
                $phoneNumber = $_POST["inscr_tel"];
                if (filter_var($_POST['inscr_mail'],FILTER_VALIDATE_EMAIL)) {
                    if($_POST['inscr_pass'] === $_POST['inscr_pass_conf']) {
                        try {
                            $bdd = new PDO('mysql:host=localhost;dbname=alphascan3d;charset=utf8', 'root', '');
                            $statement = $bdd->prepare("INSERT INTO users (name, firstname, mail, password, phonenumber) VALUES (?, ?, ?, ?, ?)");
                            $statement->execute(array($name, $firstName, $email, $hash ,$phoneNumber));
                        } catch (Exception $e) {
                            die("Erreur lors de l'inscription. Désolé pour la gêne occasionnée, réessayez plus tard !");
                        }
                    } else {
                        $message_erreur = "<div class='alert_danger'>Les mots de passe ne correspondent pas</div>";
                    }		
                } else {
                    $message_erreur = "<div class='alert_danger'>Le format de l'email est incorrect</div>";
                }
            } else {
                $message_erreur = "<div class='alert_danger'>Formulaire d'inscription incomplet !</div>";
            }
        } else {
            $message_erreur = "<div class='alert_danger'>Erreur</div>";
        }
        ?>
            <h2>Inscrivez-vous, c'est gratuit !</h2>
            <?php echo $message_erreur?>
            <div>  
                <label for="inscr_name">Entrez votre nom</label>
                <input type="text" id="inscr_name" name="inscr_name" required>            
            </div>
            <div>  
                <label for="inscr_firstName">Entrez votre prénom</label>
                <input type="text" id="inscr_firstName" name="inscr_firstName" required>            
            </div>
            <div>  
                <label for="inscr_pass">Entrez votre mot de passe</label>
                <input type="text" id="inscr_pass" name="inscr_pass" required>            
            </div>
            <div>  
                <label for="inscr_pass_conf">Confirmez votre mot de passe</label>
                <input type="text" id="inscr_pass_conf" name="inscr_pass_conf" required>            
            </div>
            <div>  
                <label for="inscr_mail">Entrez votre e-mail</label>
                <input type="text" id="inscr_mail" name="inscr_mail" required>            
            </div>
            <div>  
                <label for="inscr_tel">Entrez votre numéro de téléphone</label>
                <input type="text" id="inscr_tel" name="inscr_tel" required>            
            </div>
            <button type="submit" name="action" value="inscription">M'inscrire maintenant</button>
        </form>
    </section>
</body>
</html>