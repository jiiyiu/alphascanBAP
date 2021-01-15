<?php

include "includes/head_inc.php" 
?>
    <link rel="stylesheet" href="../assets/css/profilstyle.css">
    <link rel="icon" href="../assets/img/favicon.png">
    <title>Page profil</title>
</head>
<?php
include "includes/header.inc.php"
?>
        <li class="nav-item">
            <a class="nav-link" href="profil.php"> 
                <img src="../assets/img/profile_icon.png" alt="Cliquer ici pour accéder à votre profil !">
                Profil
                <!-- Menu déroulant profil ici -->
            </a>
        </li>
      </ul>
    </div>
</nav>

<section FormConnection>
<!-- Php connection -->
    <div>
        <form action="profil.php">
            <h2>Je me connecte</h2>
            <div>
                <input type="text" placeholder="E-mail" required>
            </div>
            <div>
                <input type="text" placeholder="Mot de passe" required>
            </div>
            <a href="profil.php">Mot de passe oublié</a>
            <button type="submit" name="action" value="connection" class="form_buttons">Se connecter</button>
            <a href="profil.php" class="form_buttons">S'inscrire</a>
        </form>
    </div>
</section>

<section FormInscription>
<?php

$message_erreur = "";
// A corriger
// if (isset($_POST['inscr_form'])) {
//     //Vérification des champs
//     if(!empty($_POST["inscr_name"]) and !empty($_POST["inscr_firstName"]) and !empty($_POST['inscr_mail']) and !empty($_POST["inscr_pass"]) and !empty($_POST["inscr_tel"])){
//         $name = htmlspecialchars($_POST["inscr_name"]);
//         $firstName = htmlspecialchars($_POST["inscr_firstName"]);
//         $email = htmlspecialchars($_POST["inscr_mail"]);
//         $password = htmlspecialchars($_POST["inscr_pass"]);
//         $hash = password_hash($password, PASSWORD_BCRYPT);
//         $phoneNumber = $_POST["inscr_tel"];
//         if (filter_var($_POST['inscr_mail'],FILTER_VALIDATE_EMAIL)) {
//             if($_POST['inscr_pass'] === $_POST['inscr_pass_conf']) {
//                 try {
//                     $bdd = new PDO('mysql:host=localhost;dbname=alphascan3d;charset=utf8', 'root', '');
//                     $statement = $bdd->prepare("INSERT INTO users (name, firstname, mail, password, phonenumber) VALUES (?, ?, ?, ?, ?)");
//                     $statement->execute(array($name, $firstName, $email, $hash ,$phoneNumber));
//                 } catch (Exception $e) {
//                     die("Erreur lors de l'inscription. Désolé pour la gêne occasionnée, réessayez plus tard !");
//                 }
//             } else {
//                 $message_erreur = "<div class='alert_danger'>Les mots de passe ne correspondent pas</div>";
//             }		
//         } else {
//             $message_erreur = "<div class='alert_danger'>Le format de l'email est incorrect</div>";
//         }
//     } else {
//         $message_erreur = "<div class='alert_danger'>Formulaire d'inscription incomplet !</div>";
//     }
// } else {
//     $message_erreur = "<div class='alert_danger'>Erreur</div>";
// }
?>
    <div>
        <form action="profil.php" id="inscr_form">
            <input type="hidden" name="inscr_form">
            <h2>J'insère mes informations personnelles</h2>
            <div>
                <input type="text" placeholder="E-mail" name="inscr_mail" id="inscr_mail" required>
            </div>
            <div>
                <input type="text" placeholder="Mot de passe" name="inscr_pass" id="inscr_pass" required>
                <input type="text" placeholder="Répéter le mot de passe" name="inscr_pass_conf" id="inscr_pass_conf" required>
            </div>
            <div>
                <input type="text" placeholder="Prénom" name="inscr_firstName" id="inscr_firstName" required>
                <input type="text" placeholder="Nom" name="inscr_name" id="inscr_name" required>
            </div>
            <div>
                <label for="loc_country"></label>
                <select name="loc_country" id="loc_country">
                    <optgroup label="Afrique">
                        <option value="afriqueDuSud">Afrique Du Sud</option>
                        <option value="algerie">Algérie</option>
                        <option value="angola">Angola</option>
                        <option value="benin">Bénin</option>
                        <option value="botswana">Botswana</option>
                        <option value="burkina">Burkina</option>
                        <option value="burundi">Burundi</option>
                        <option value="cameroun">Cameroun</option>
                        <option value="capVert">Cap-Vert</option>
                        <option value="republiqueCentre-Africaine">République Centre-Africaine</option>
                        <option value="comores">Comores</option>
                        <option value="republiqueDemocratiqueDuCongo">République Démocratique Du Congo</option>
                        <option value="congo">Congo</option>
                        <option value="coteIvoire">Côte d'Ivoire</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="egypte">Égypte</option>
                        <option value="ethiopie">Éthiopie</option>
                        <option value="erythrée">Érythrée</option>
                        <option value="gabon">Gabon</option>
                        <option value="gambie">Gambie</option>
                        <option value="ghana">Ghana</option>
                        <option value="guinee">Guinée</option>
                        <option value="guinee-Bisseau">Guinée-Bisseau</option>
                        <option value="guineeEquatoriale">Guinée Équatoriale</option>
                        <option value="kenya">Kenya</option>
                        <option value="lesotho">Lesotho</option>
                        <option value="liberia">Liberia</option>
                        <option value="libye">Libye</option>
                        <option value="madagascar">Madagascar</option>
                        <option value="malawi">Malawi</option>
                        <option value="mali">Mali</option>
                        <option value="maroc">Maroc</option>
                        <option value="maurice">Maurice</option>
                        <option value="mauritanie">Mauritanie</option>
                        <option value="mozambique">Mozambique</option>
                        <option value="namibie">Namibie</option>
                        <option value="niger">Niger</option>
                        <option value="nigeria">Nigeria</option>
                        <option value="ouganda">Ouganda</option>
                        <option value="rwanda">Rwanda</option>
                        <option value="saoTomeEtPrincipe">Sao Tomé-et-Principe</option>
                        <option value="senegal">Séngal</option>
                        <option value="seychelles">Seychelles</option>
                        <option value="sierra">Sierra</option>
                        <option value="somalie">Somalie</option>
                        <option value="soudan">Soudan</option>
                        <option value="swaziland">Swaziland</option>
                        <option value="tanzanie">Tanzanie</option>
                        <option value="tchad">Tchad</option>
                        <option value="togo">Togo</option>
                        <option value="tunisie">Tunisie</option>
                        <option value="zambie">Zambie</option>
                        <option value="zimbabwe">Zimbabwe</option>
                    </optgroup>
                    <optgroup label="Amérique">
                        <option value="antiguaEtBarbuda">Antigua-et-Barbuda</option>
                        <option value="argentine">Argentine</option>
                        <option value="bahamas">Bahamas</option>
                        <option value="barbade">Barbade</option>
                        <option value="belize">Belize</option>
                        <option value="bolivie">Bolivie</option>
                        <option value="bresil">Brésil</option>
                        <option value="canada">Canada</option>
                        <option value="chili">Chili</option>
                        <option value="colombie">Colombie</option>
                        <option value="costaRica">Costa Rica</option>
                        <option value="cuba">Cuba</option>
                        <option value="republiqueDominicaine">République Dominicaine</option>
                        <option value="dominique">Dominique</option>
                        <option value="equateur">Équateur</option>
                        <option value="etatsUnis">États Unis</option>
                        <option value="grenade">Grenade</option>
                        <option value="guatemala">Guatemala</option>
                        <option value="guyana">Guyana</option>
                        <option value="haiti">Haïti</option>
                        <option value="honduras">Honduras</option>
                        <option value="jamaique">Jamaïque</option>
                        <option value="mexique">Mexique</option>
                        <option value="nicaragua">Nicaragua</option>
                        <option value="panama">Panama</option>
                        <option value="paraguay">Paraguay</option>
                        <option value="perou">Pérou</option>
                        <option value="saintCristopheEtNieves">Saint-Cristophe-et-Niévès</option>
                        <option value="sainteLucie">Sainte-Lucie</option>
                        <option value="saintVincentEtLesGrenadines">Saint-Vincent-et-les-Grenadines</option>
                        <option value="salvador">Salvador</option>
                        <option value="suriname">Suriname</option>
                        <option value="triniteEtTobago">Trinité-et-Tobago</option>
                        <option value="uruguay">Uruguay</option>
                        <option value="venezuela">Venezuela</option>
                    </optgroup>
                    <optgroup label="Asie">
                        <option value="afghanistan">Afghanistan</option>
                        <option value="arabieSaoudite">Arabie Saoudite</option>
                        <option value="armenie">Arménie</option>
                        <option value="azerbaidjan">Azerbaïdjan</option>
                        <option value="bahrein">Bahreïn</option>
                        <option value="bangladesh">Bangladesh</option>
                        <option value="bhoutan">Bhoutan</option>
                        <option value="birmanie">Birmanie</option>
                        <option value="brunei">Brunéi</option>
                        <option value="cambodge">Cambodge</option>
                        <option value="chine">Chine</option>
                        <option value="coreeDuSud">Corée Du Sud</option>
                        <option value="coreeDuNord">Corée Du Nord</option>
                        <option value="emiratsArabeUnis">Émirats Arabe Unis</option>
                        <option value="georgie">Géorgie</option>
                        <option value="inde">Inde</option>
                        <option value="indonesie">Indonésie</option>
                        <option value="iraq">Iraq</option>
                        <option value="iran">Iran</option>
                        <option value="israel">Israël</option>
                        <option value="japon">Japon</option>
                        <option value="jordanie">Jordanie</option>
                        <option value="kazakhstan">Kazakhstan</option>
                        <option value="kirghistan">Kirghistan</option>
                        <option value="koweit">Koweït</option>
                        <option value="laos">Laos</option>
                        <option value="liban">Liban</option>
                        <option value="malaisie">Malaisie</option>
                        <option value="maldives">Maldives</option>
                        <option value="mongolie">Mongolie</option>
                        <option value="nepal">Népal</option>
                        <option value="oman">Oman</option>
                        <option value="ouzbekistan">Ouzbékistan</option>
                        <option value="pakistan">Pakistan</option>
                        <option value="philippines">Philippines</option>
                        <option value="qatar">Qatar</option>
                        <option value="singapour">Singapour</option>
                        <option value="sriLanka">Sri Lanka</option>
                        <option value="syrie">Syrie</option>
                        <option value="tadjikistan">Tadjikistan</option>
                        <option value="taiwan">Taïwan</option>
                        <option value="thailande">Thaïlande</option>
                        <option value="timorOriental">Timor oriental</option>
                        <option value="turkmenistan">Turkménistan</option>
                        <option value="turquie">Turquie</option>
                        <option value="vietNam">Viêt Nam</option>
                        <option value="yemen">Yemen</option>
                    </optgroup>
                    <optgroup label="Europe">
                        <option value="allemagne">Allemagne</option>
                        <option value="albanie">Albanie</option>
                        <option value="andorre">Andorre</option>
                        <option value="autriche">Autriche</option>
                        <option value="bielorussie">Biélorussie</option>
                        <option value="belgique">Belgique</option>
                        <option value="bosnieHerzegovine">Bosnie-Herzégovine</option>
                        <option value="bulgarie">Bulgarie</option>
                        <option value="croatie">Croatie</option>
                        <option value="danemark">Danemark</option>
                        <option value="espagne">Espagne</option>
                        <option value="estonie">Estonie</option>
                        <option value="finlande">Finlande</option>
                        <option value="france" selected>France</option>
                        <option value="grece">Grèce</option>
                        <option value="hongrie">Hongrie</option>
                        <option value="irlande">Irlande</option>
                        <option value="islande">Islande</option>
                        <option value="italie">Italie</option>
                        <option value="lettonie">Lettonie</option>
                        <option value="liechtenstein">Liechtenstein</option>
                        <option value="lituanie">Lituanie</option>
                        <option value="luxembourg">Luxembourg</option>
                        <option value="macedoine">Macédoine</option>
                        <option value="malte">Malte</option>
                        <option value="moldavie">Moldavie</option>
                        <option value="monaco">Monaco</option>
                        <option value="norvege">Norvège</option>
                        <option value="paysBas">Pays-Bas</option>
                        <option value="pologne">Pologne</option>
                        <option value="portugal">Portugal</option>
                        <option value="roumanie">Roumanie</option>
                        <option value="royaumeUni">Royaume-Uni</option>
                        <option value="russie">Russie</option>
                        <option value="saintMarin">Saint-Marin</option>
                        <option value="serbieEtMontenegro">Serbie-et-Monténégro</option>
                        <option value="slovaquie">Slovaquie</option>
                        <option value="slovenie">Slovénie</option>
                        <option value="suede">Suède</option>
                        <option value="suisse">Suisse</option>
                        <option value="republiqueTcheque">République Tchèque</option>
                        <option value="ukraine">Ukraine</option>
                        <option value="vatican">Vatican</option>
                    </optgroup>
                    <optgroup label="Océanie">
                        <option value="australie">Australie</option>
                        <option value="fidji">Fidji</option>
                        <option value="kiribati">Kiribati</option>
                        <option value="marshall">Marshall</option>
                        <option value="micronesie">Micronésie</option>
                        <option value="nauru">Nauru</option>
                        <option value="nouvelleZelande">Nouvelle-Zélande</option>
                        <option value="palaos">Palaos</option>
                        <option value="papouasieNouvelleGuinee">Papouasie-Nouvelle-Guinée</option>
                        <option value="salomon">Salomon</option>
                        <option value="samoa">Samoa</option>
                        <option value="tonga">Tonga</option>
                        <option value="tuvalu">Tuvalu</option>
                        <option value="vanuatu">Vanuatu</option>
                    </optgroup>
                </select>
            </div>
            <div>
                <input type="text" placeholder="Adresse" name="loc_adresse1" id="loc_adresse1" required>
                <input type="text" placeholder="Complément d'adresse (facultatif)" name="loc_adresse2" id="loc_adresse2" required>
            </div>
            <div>
                <input type="tel" placeholder="Code Postal" minlength="5" maxlength="6" name="loc_codepostal" id="loc_codepostal" required>
                <select name="loc_departement" id="loc_departement">
                    <optgroup label="France Métropolitaine">
                        <option value="ain">Ain (01)</option>
                        <option value="aisne">Aisne (02)</option>
                        <option value="allier">Allier (03)</option>
                        <option value="alpes-de-haute-provence">Alpes-de-Haute-Provence (04)</option>
                        <option value="hautes-alpes">Hautes-Alpes (05)</option>
                        <option value="alpes-maritimes">Alpes-Maritimes (06)</option>
                        <option value="ardeche">Ardèche (07)</option>
                        <option value="ardennes">Ardennes (08)</option>
                        <option value="ariege">Ariège (09)</option>
                        <option value="aube">Aube (10)</option>
                        <option value="aude">Aude (11)</option>
                        <option value="aveyron">Aveyron (12)</option>
                        <option value="bouches-du-rhone">Bouches-du-Rhône (13)</option>
                        <option value="calvados">Calvados (14)</option>
                        <option value="cantal">Cantal (15)</option>
                        <option value="charente">Charente (16)</option>
                        <option value="charente-maritime">Charente-Maritime (17)</option>
                        <option value="cher">Cher (18)</option>
                        <option value="correze">Corrèze (19)</option>
                        <option value="corse-du-sud">Corse-du-Sud (2A)</option>
                        <option value="haute-corse">Haute-Corse (2B)</option>
                        <option value="cote-dor">Côte-d'Or (21)</option>
                        <option value="cotes-darmor">Côtes-d'Armor (22)</option>
                        <option value="creuse">Creuse (23)</option>
                        <option value="dordogne">Dordogne (24)</option>
                        <option value="doubs">Doubs (25)</option>
                        <option value="drome">Drôme (26)</option>
                        <option value="eure">Eure (27)</option>
                        <option value="eure-et-loir">Eure-et-Loir (28)</option>
                        <option value="finistere">Finistère (29)</option>
                        <option value="gard">Gard (30)</option>
                        <option value="haute-garonne">Haute-Garonne (31)</option>
                        <option value="gers">Gers (32)</option>
                        <option value="gironde">Gironde (33)</option>
                        <option value="herault">Hérault (34)</option>
                        <option value="ille-et-vilaine">Ille-et-Vilaine (35)</option>
                        <option value="indre">Indre (36)</option>
                        <option value="indre-et-loire">Indre-et-Loire (37)</option>
                        <option value="isere">Isère (38)</option>
                        <option value="jura">Jura (39)</option>
                        <option value="landes">Landes (40)</option>
                        <option value="loire-et-cher">Loir-et-Cher (41)</option>
                        <option value="loire">Loire (42)</option>
                        <option value="haute-loire">Haute-Loire (43)</option>
                        <option value="loire-atlantique">Loire-Antlantique (44)</option>
                        <option value="loiret">Loiret (45)</option>
                        <option value="lot">Lot (46)</option>
                        <option value="lot-et-garonne">Lot-et-Garonne (47)</option>
                        <option value="lozere">Lozère (48)</option>
                        <option value="maine-et-loire">Maine-et-Loire (49)</option>
                        <option value="manche">Manche (50)</option>
                        <option value="marne">Marne (51)</option>
                        <option value="haute-marne">Haute-Marne (52)</option>
                        <option value="mayenne">Mayenne (53)</option>
                        <option value="meurthe-et-moselle">Meurthe-et-Moselle (54)</option>
                        <option value="meuse">Meuse (55)</option>
                        <option value="morbihan">Morbihan (56)</option>
                        <option value="moselle">Moselle (57)</option>
                        <option value="nievre">Nièvre (58)</option>
                        <option value="nord">Nord (59)</option>
                        <option value="oise">Oise (60)</option>
                        <option value="orne">Orne (61)</option>
                        <option value="pas-de-calais">Pas-de-Calais (62)</option>
                        <option value="puy-de-dome">Puy-de-Dôme (63)</option>
                        <option value="pyrenees-atlantiques">Pyrénées-Atlantiques (64)</option>
                        <option value="hautes-pyrenees">Hautes-Pyrénées (65)</option>
                        <option value="pyrenees-oritentales">Pyrénées-Orientales (66)</option>
                        <option value="bas-rhin">Bas-Rhin (67)</option>
                        <option value="haut-rhin">Haut-Rhin (68)</option>
                        <option value="rhone">Rhône (69)</option>
                        <option value="haute-saone">Haute-Saône (70)</option>
                        <option value="saone-et-loire">Saône-et-Loire (71)</option>
                        <option value="sarthe">Sarthe (72)</option>
                        <option value="savoie">Savoie (73)</option>
                        <option value="haute-savoie">Haute-Savoie (74)</option>
                        <option value="paris">Paris (75)</option>
                        <option value="seine-maritime">Seine-Maritime (76)</option>
                        <option value="seine-et-marne">Seine-et-Marne (77)</option>
                        <option value="yvelines">Yvelines (78)</option>
                        <option value="deux_sevres">Deux-Sèvres (79)</option>
                        <option value="somme">Somme (80)</option>
                        <option value="tarn">Tarn (81)</option>
                        <option value="tarn-et-garonne">Tarn-et-Garonne (82)</option>
                        <option value="var">Var (83)</option>
                        <option value="vaucluse">Vaucluse (84)</option>
                        <option value="vendee">Vendée (85)</option>
                        <option value="vienne">Vienne (86)</option>
                        <option value="haute-vienne">Haute-Vienne (87)</option>
                        <option value="vosges">Vosges (88)</option>
                        <option value="Yonne">Yonne (89)</option>
                        <option value="territoire de belfort">Territoire de Belfort (90)</option>
                        <option value="essonne">Essonne (91)</option>
                        <option value="hauts-de-seine">Hauts-de-Seine (92)</option>
                        <option value="seine-saint-denis">Seine-Saint-Denis (93)</option>
                        <option value="val-de-marne">Val-de-Marne (94)</option>
                        <option value="val-doise">Val-d'Oise (95)</option>
                    </optgroup>
                    <optgroup label="Outre-mer">
                        <option value="guadeloupe">Guadeloupe (971)</option>
                        <option value="martinique">Martinique (972)</option>
                        <option value="guyane">Guyane (973)</option>
                        <option value="la-reunion">La Réunion (974)</option>
                        <option value="mayotte">Mayotte (976)</option>
                        <option value="saint-pierre-et-miquelon">Saint-Pierre-et-Miquelon (975)</option>
                        <option value="saint-barthelemy">Saint-Barthélemy (977)</option>
                        <option value="saint-martin">Saint-Martin (978)</option>
                        <option value="polynesie-française">Polynésie française (987)</option>
                        <option value="clipperton">île de Clipperton (989)</option>
                        <option value="wallis-et-futuna">Wallis-et-Futuna (986)</option>
                        <option value="nouvelle-caledonie">Nouvelle-Calédonie (988)</option>
                        <option value="terres-australes-et-antarctiques-françaises">Terres australes et antarctiques françaises (984)</option>
                    </optgroup>
                </select>
            </div>
            <div>
                <input type="text" placeholder="Ville" name="loc_ville" id="loc_ville" required>
                <input type="tel" placeholder="Téléphone" minlength="10" maxlength="13" name="inscr_tel" id="inscr_tel" required>
            </div>
            <div>
                <div>
                    <label class="switch">
                        <input type="checkbox" name="newsletter" id="newsletter">
                        <span class="slider round"></span>
                    </label>
                    <p>J'accepte de recevoir des newsletters par courrier électronique pour me tenir informer.</p>
                </div>
                <div>
                    <label class="switch">
                        <input type="checkbox" name="cookies" id="cookies">
                        <span class="slider round"></span>
                    </label>
                    <p>J'accepte la politique de confidentialité et la présence de cookies.</p>
                </div>
            </div>
            <button type="submit" name="action" value="inscription" class="form_buttons">S'inscrire'</button>
        </form>
    </div>
</section>

<section FormMdpOublie>
    <div>
        <form action="profil.php">
            <h2>Mot de passe oublié</h2>
            <div>
                <p>Si vous avez oublié votre mot de passe, renseignez votre adresse électronique et nous vous enverrons un email contenant les instructions à suivre.</p>
            </div>
            <div>
                <input type="text" placeholder="Entrez votre e-mail" required>
            </div>
            <a href="profil.php">Mot de passe oublié</a>
            <button type="submit" name="action" value="mdpoubli" class="form_buttons">Réinitialiser mon mot de passe</button>
            <a href="profil.php" class="form_buttons">Revenir à la page de connection</a>
        </form>
    </div>
</section>

<section DashboardClient>
    <!-- php affichage dashboard ici -->
    <div>
        <input type="text" name="search_filter" class="search_filter" placeholder="Recherche">
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Date
                        <input type="button" name="sort_by_date" id="sort_by_date">
                        <!-- Mettre l'icone des deux flèches en background du bouton -->
                    </th>
                    <th>Numéro de commande</th>
                    <th>Avancement</th>
                    <th colspan="3">Etat de votre commande</th> 
                    <!-- Pas sûr du wording sur ça, je t'avoue... -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12/03/2020</td>
                    <td>00000000000000000</td>
                    <td>
                        <!-- Ici j'insère les 3 images mais dans cette version elles sont une à la fois, 
                            je commente les autres c'est pour montrer le comportement de chaque statut, 
                            elles doivent s'afficher selon le "statut" de la commande.
                            Je vais modifier le commentaire en 0 = en attente, 1 = livrée, 2= annulée-->
                        <img src="../assets/img/status_checked.png" alt="commande livrée">
                        <!-- <img src="../assets/img/status_waiting.png" alt="commande en cours"> -->
                        <!-- <img src="../assets/img/status_closed.png" alt="commande annulée"> -->
                    </td>
                    <td>
                        <button type="button" class="dowload_button">Télécharger</button>
                    </td>
                    <td>
                        <button type="button" class="facturation_button">Facture</button>
                    </td>
                    <td>
                        <button type="button" class="annulation_button" disabled>Annuler</button>
                    </td>
                </tr>
                <tr>
                    <td>04/01/2021</td>
                    <td>00000000000000001</td>
                    <td>
                        <!-- Ici j'insère les 3 images, elles doivent s'afficher selon le "statut" de la commande.
                         Je vais modifier le commentaire en 0 = en attente, 1 = livrée, 2= annulée-->
                        <!-- <img src="../assets/img/status_checked.png" alt="commande livrée"> -->
                        <img src="../assets/img/status_waiting.png" alt="commande en cours">
                        <!-- <img src="../assets/img/status_closed.png" alt="commande annulée"> -->
                    </td>
                    <td>
                        <button type="button" class="dowload_button" disabled>Télécharger</button>
                    </td>
                    <td>
                        <button type="button" class="facturation_button">Facture</button>
                    </td>
                    <td>
                        <button type="button" class="annulation_button">Annuler</button>
                    </td>
                </tr>
                <tr>
                    <td>27/11/2019</td>
                    <td>00000000000000002</td>
                    <td>
                        <!-- Ici j'insère les 3 images, elles doivent s'afficher selon le "statut" de la commande.
                         Je vais modifier le commentaire en 0 = en attente, 1 = livrée, 2= annulée-->
                        <!-- <img src="../assets/img/status_checked.png" alt="commande livrée"> -->
                        <!-- <img src="../assets/img/status_waiting.png" alt="commande en cours"> -->
                        <img src="../assets/img/status_closed.png" alt="commande annulée">
                    </td>
                    <td>
                        <button type="button" class="dowload_button" disabled>Télécharger</button>
                    </td>
                    <td>
                        <button type="button" class="facturation_button" disabled>Facture</button>
                    </td>
                    <td>
                        <button type="button" class="annulation_button" disabled>Annuler</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<section DashboardAdmin>
    <!-- php affichage dashboard admin ici -->
    <!-- Je mets auss le php de l'envoi de fichier dès que je l'ai arrangé ! -->
    <div>
        <input type="text" name="search_filter" class="search_filter" placeholder="Recherche">
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Nom
                        <input type="button" name="sort_by_name" id="sort_by_name">
                        <!-- Mettre l'icone de la flèche en background du bouton -->
                        <!-- Moyen de modifier la version -->
                    </th>
                    <th>Téléphone</th>
                    <th>Mail</th>
                    <th>Adresse de facturation</th> 
                    <th>Zone de dépôt des réalisations</th>
                    <th>Factures / Devis</th>
                    <th>Annuler la commande</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mr Benoit</td>
                    <td>0606060606</td>
                    <td>benoit.jean@gmail.com</td>
                    <td>15 rue des roquettes, <br> 75011 Paris</td>
                    <td>
                        <button type="button" class="upload_button">Upload</button>
                    </td>
                    <td>
                        <button type="button" class="upload_button">Upload</button>
                    </td>
                    <td>
                        <button type="button" class="annulation_button" disabled>Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>Mme Marie</td>
                    <td>0606060607</td>
                    <td>aude.marie@gmail.com</td>
                    <td>5 rue Marinioni, <br> 75005 Paris</td>
                    <td>
                        <button type="button" class="upload_button">Upload</button>
                    </td>
                    <td>
                        <button type="button" class="upload_button">Upload</button>
                    </td>
                    <td>
                        <button type="button" class="annulation_button" disabled>Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>Mr Auburtin</td>
                    <td>0606060707</td>
                    <td>agence.leonardo@gmail.com</td>
                    <td>1 rue Ordener, <br> 75001 Paris</td>
                    <td>
                        <button type="button" class="upload_button">Upload</button>
                    </td>
                    <td>
                        <button type="button" class="upload_button">Upload</button>
                    </td>
                    <td>
                        <button type="button" class="annulation_button" disabled>Supprimer</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php 
include "includes/footer.inc.php"
?>
</body>