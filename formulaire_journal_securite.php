<?php require('includes/inc_connexion.php'); ?>
<?php require('includes/inc_identification_user.php'); ?>


<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dosin - SSI Project</title>
        <link href="css/styles.css" rel="stylesheet" />

        <!-- Vendor CSS Files -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand"><img src="assets/img/logo_ossi.png" alt="logo OSSI" width="93px" class="opacity"/>Projet SSI</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Rechercher..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Param??tre</a>
                        <a class="dropdown-item" href="#">Activit??s</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Se d??connecter</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Pilotage</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tableau de bord
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSearch" aria-expanded="false" aria-controls="collapseSearch">
                                <div class="sb-nav-link-icon"><i class="fas fa-search"></i></div>
                                Rechercher
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseSearch" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionSearch">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseActions" aria-expanded="false" aria-controls="pagesCollapseActions">
                                        Actions
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseActions" aria-labelledby="headingOne" data-parent="#sidenavAccordionSearch">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="acteurs.php">Par un acteur</a>
                                            <a class="nav-link" href="statut.php">Par un n?? de ticket</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseActionsPlan" aria-expanded="false" aria-controls="pagesActionsPlan">
                                        Plan d'actions
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseActionsPlan" aria-labelledby="headingOne" data-parent="#sidenavAccordionSearch">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="actions.php">Par cat??gories de r??gles</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseRules" aria-expanded="false" aria-controls="pagesCollapseRules">
                                        R??gles
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseRules" aria-labelledby="headingOne" data-parent="#sidenavAccordionSearch">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="regles.php">Par cat??gories de r??gles</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFormularies" aria-expanded="false" aria-controls="collapseFormularies">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                                Formulaires
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseFormularies" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="formulaire_acteur.php">Acteurs</a>
                                    <a class="nav-link" href="formulaire_actions.php">Actions</a>
                                    <a class="nav-link" href="formulaire_audits.php">Audits</a>
                                    <a class="nav-link" href="formulaire_categorie.php">Cat??gories</a>
                                    <a class="nav-link" href="formulaire_communication.php">Communications</a>
                                    <a class="nav-link" href="formulaire_droit.php">Droits</a>
                                    <a class="nav-link" href="formulaire_entite.php">Entites</a>
                                    <a class="nav-link" href="formulaire_journal_securite.php">Journal S??curit??</a>
                                    <a class="nav-link" href="formulaire_niveaux_securite.php">Niveaux de s??curit??</a>
                                    <a class="nav-link" href="formulaire_planaction.php">Plans d'actions</a>
                                    <a class="nav-link" href="formulaire_referentiel.php">R??f??rentiels</a>
                                    <a class="nav-link" href="formulaire_regles.php">R??gles</a>
                                    <a class="nav-link" href="formulaire_role.php">Roles</a>                
                                    <a class="nav-link" href="formulaire_sites.php">Sites</a>
                                    <a class="nav-link" href="formulaire_sous_sites.php">Sous sites</a>
                                    <a class="nav-link" href="formulaire_statut.php">Statuts</a>
                                    <a class="nav-link" href="formulaire_typeaction.php">Types d'actions</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Administration</div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Se connecter</a>
                                            <a class="nav-link" href="register.php">S'enregistrer</a>
                                            <a class="nav-link" href="password.php">J'ai oubli?? mon mot de passe</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Erreur
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="access_denied.php">Acc??s refus??</a>
                                            <a class="nav-link" href="server_error.php">Erreur de serveur</a>
                                            <a class="nav-link" href="error.php">Erreur</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Graphiques
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Journal incident
                            </a>
                            <div class="sb-sidenav-menu-heading">Documentation</div>
                            <a class="nav-link" href="https://www.ssi.gouv.fr/">
                                <div class="sb-nav-link-icon"><i class="fas fa-shield-alt"></i></div>
                                Site web de l'ANSSI
                            </a>
                            <a class="nav-link" href="https://www.iso.org/fr/isoiec-27001-information-security.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div>
                                ISO 27001
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer footer-color">
                        <div class="small bolder">Connect?? en tant que :</div>

                         <?php $result = $mysqli->query('SELECT nom_acteur, prenom_acteur, id_acteur FROM acteur WHERE id_acteur = "'.$_SESSION['id_acteur'].'"');
                            while ($row = $result->fetch_array()){
                                echo '<p class="log_php">'.$row['prenom_acteur'].' '.$row['nom_acteur'].'</p>' ;
                            }?>
                    </div>
                </nav>
            </div>
            <!-- ======= Main ======= -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Les formulaires</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Formulaire journal de s??curit??</li>
                        </ol>
                        <div class="row">
                            <form class="custom_display" id="form_crud" action="formulaire_journal_securite.php" method="post">
                                <div>
                                </div><div>
                                        <label for="year">Ann??e :</label>
                                        <input type="number" id="year" name="year" required>

                                        <label for="reportingDate">Date de signalement???:</label>
                                        <input type="date" id="reportingDate" name="reportingDate" required>

                                        <label for="reportingTime">Heure de signalement???:</label>
                                        <input type="time" id="reportingTime" name="reportingTime" required>

                                        <label for="endDateOfIncident">Date de fin d'incident???:</label>
                                        <input type="date" id="endDateOfIncident" name="endDateOfIncident" required>

                                        <label for="endTimeOfIncident">Heure de fin d'incident???:</label>
                                        <input type="time" id="endTimeOfIncident" name="endTimeOfIncident" required>

                                        <label for="site">Site :</label>
                                        <select name="site" id="site" required>
                                            <option value="">--Selectionner un site--</option>
                                            <?php $result = $mysqli->query('SELECT id_sites, nom_sites FROM sites');
                                                while ($row = $result->fetch_array()): ?>
                                            <option value="<?php echo $row['id_sites']?>"><?php echo $row['nom_sites']?></option>   
                                                <?php endwhile; ?>
                                        </select>

                                        <label for="place">Lieu???:</label>
                                        <select name="place" id="place" >
                                            <option value="">--Selectionner un lieu--</option>
                                            <?php $result = $mysqli->query('SELECT id_sous_sites, nom_sous_sites FROM sous_sites');
                                            // L'id??e est de r??cup??rer l'id parent du sous site pour filtrer les sous sites li??s au parent [N??cessite Javascript select/option]
                                                while ($row = $result->fetch_array()): ?>
                                            <option value="<?php echo $row['id_sous_sites']?>"><?php echo $row['nom_sous_sites']?></option>   
                                                <?php endwhile; ?>
                                        </select>

                                        <label for="durationOfTheCut">Dur??e de la coupure???:</label>
                                        <input type="text" id="durationOfTheCut" name="durationOfTheCut" required>

                                        <label for="description">Descriptif sommaire :</label>
                                        <textarea id="description" name="description" required></textarea>

                                        <label for="numberAffectByTheCut">Nombre de personnes impact??s:</label>
                                        <input type="number" id="numberAffectByTheCut" name="numberAffectByTheCut" min="1" required>

                                        <label for="field">Domaine :</label>
                                        <select name="field" id="field" required>
                                            <option value="">--Selectionner un domaine--</option>
                                            <option value="logistique">Logistique</option>
                                            <option value="informatique">Informatique</option>
                                            <option value="grh">GRH</option>
                                            <option value="autre">Autre</option>
                                        </select>

                                        <label for="type">Type d'incident :</label>
                                        <select name="type" id="type" required>
                                            <option value="">--Selectionner un type--</option>
                                            <option value="electrique">Electrique</option>
                                            <option value="eau">Eau</option>
                                            <option value="incident_operateur">Incident Op??rateur</option>
                                            <option value="gaz">Gaz</option>
                                            <option value="autre">Autre</option>
                                            <option value="non_respect_des_textes">Non respect des textes</option>
                                            <option value="reseau">R??seau</option>
                                        </select>
                                
                                        <label for="action">Action :</label>
                                        <select name="action" id="action" required>
                                            <option value="">--Selectionner un type d'action--</option>
                                            <?php $result = $mysqli->query('SELECT id_typeaction, libelle_typeaction FROM typeaction');
                                                while ($row = $result->fetch_array()): ?>
                                            <option value="<?php echo $row['id_typeaction']?>"><?php echo $row['libelle_typeaction']?></option>
                                                <?php endwhile; ?>
                                        </select>
                                  
                                        <label for="etpEstimatedCost">Co??t ETP estim?????en ???:</label>
                                        <input type="number" id="etpEstimatedCost" name="etpEstimatedCost" min='1' required>
                                  
                                        <label for="financialCost">Co??t Financier???en ???:</label>
                                        <input type="number" id="financialCost" name="financialCost" min='1' required>

                                        <label for="ticketGlpi">Ticket GLPI???:</label>
                                        <input type="number" id="ticketGlpi" name="ticketGlpi" min='0' required>
                                    
                                        <input class="sendButton" type="submit" name="submit" value="Envoyer le formulaire" required>
    <?php
    /* test sur le format de la date en d??composant les jour/mois/ann??e 

    $reportingDate = $_POST['reportingDate'];
    echo date('Y-m-d').' '.' = today date';?><br><?php 
    echo $_POST['reportingDate'] .' '.' = valeur du $_POST';?><br><?php

    $dateScind = explode("-", $reportingDate);
    $day = $dateScind[2];
    echo $day .' '.'= jour';?><br><?php

    $month = $dateScind[1];
    echo $month .' '.'= mois';?><br><?php

    $year = $dateScind[0];
    echo $year .' '.'= annee';?><br><?php

    var_dump(checkdate($month,$day,$year)); // boolean TRUE si -> MOIS - JOUR - ANNEE *
    
                        /************************ Si aucune connexion ?? la base de donn??e, redirection vers la page d'erreur du serveur ******************************/
                                if (!$mysqli) {?>
                                    <script>
                                        setTimeout(function () {
                                        window.location.href= 'server_error.php';
                                        }, 0);
                                        </script><?php
                                }
                                $error_message = "";$success_message = "";

                                // Si le formulaire d'inscription est envoy?? -> affectation des variables
                                if(isset($_POST['submit'])){
                                    $year = trim($_POST['year']);
                                    $reportingdate = trim($_POST['reportingDate']);
                                    $reportingtime = trim($_POST['reportingTime']);
                                    $enddateofincident = trim($_POST['endDateOfIncident']);
                                    $endtimeofincident = trim($_POST['endTimeOfIncident']);
                                    $place = trim($_POST['place']);
                                    $site = trim($_POST['site']);
                                    $durationofthecut = trim($_POST['durationOfTheCut']);
                                    $description = trim($_POST['description']);
                                    $numberaffectbythecut = trim($_POST['numberAffectByTheCut']);
                                    $ticketglpi = trim($_POST['ticketGlpi']);
                                    $field = trim($_POST['field']);
                                    $type = trim($_POST['type']);
                                    $action = trim($_POST['action']);
                                    $etpestimatedcost = trim($_POST['etpEstimatedCost']);
                                    $financialcost = trim($_POST['financialCost']);

                                    $isValid = true;
                                
                                    // V??rification si les champs sont remplis
                                    if($year == '' || $reportingdate == '' || $reportingtime == '' || $enddateofincident == ''|| $endtimeofincident == '' || $place == '' || $site == '' || $durationofthecut == '' || $description == '' || $numberaffectbythecut == '' || $ticketglpi == '' || $field == '' || $type == '' || $action == '' || $etpestimatedcost == '' || $financialcost == ''){
                                    $isValid = false;
                                    $error_message = "Veuillez remplir tout les champs.";
                                    echo '<p class="error">'.$error_message.'</p>';
                                    }
                                
                                    // V??rification si l'ann??e du formulaire n'est pas inf??rieure ?? l'ann??e N
                                    if($isValid && $year < date('Y')) {
                                    $isValid = false;
                                    $error_message = "L'ann??e doit ??tre sup??rieure ou ??gale ?? '".date('Y')."' ";
                                    echo '<p class="error">'.$error_message.'</p>';
                                    }
                                
                                    // V??rification de la date de fin d'incident
                                    if ($isValid && $enddateofincident <= $reportingdate) {
                                        $isValid = false;
                                        $error_message = "La date de fin d'incident ne co??ncide pas avec la date de signalement de l'incident.";
                                        echo '<p class="error">'.$error_message.'</p>';
                                    }

                                    // V??rification des input num??riques
                                    if ($isValid && !is_numeric($numberaffectbythecut) || !is_numeric($ticketglpi) || !is_numeric($etpestimatedcost) || !is_numeric($financialcost)) {
                                        $isValid = false;
                                        $error_message = "Vous devez saisir un chiffre ou un nombre.";
                                        echo '<p class="error">'.$error_message.'</p>';
                                    }                                 
                                                                                                            
                                        // Enregistrement dans la base de donn??es
                                        if($isValid){
                                            $insertSQL = "INSERT INTO journal_securite (annee,date_signalement,heure_signalement,date_fin_incident,heure_fin_incident,lieu_incident,duree_coupure,sites,description_incident,nombre_personne_affecte_par_coupure,domaine,type,action,cout_etp,cout_financier,ticket_glpi) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                                            $stmt = $mysqli->prepare($insertSQL);
                                            $stmt->bind_param("ssssssssssssssss",$year,$reportingdate,$reportingtime,$enddateofincident,$endtimeofincident,$place,$durationofthecut,$site,$description,$numberaffectbythecut,$field,$type,$action,$etpestimatedcost,$financialcost,$ticketglpi);
                                            $stmt->execute();
                                            $stmt->close();
                                    
                                        $success_message = "Le rapport d'incident a ??t?? cr???? avec succ??s. Vous allez ??tre redirig?? vers la page d'accueil dans quelques secondes.";
                                        echo '<p class="success">'.$success_message.'</p>';?> 
                                        
                                        <script>
                                        setTimeout(function () {
                                        window.location.href= 'index.php';
                                        }, 5000);
                                        </script>

                                <?php   }
                                    }
                                ?>
  
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
           
                       <!-- ======= Footer ======= -->

                       <?php // Personalisation du footer en fonction de l'entit?? > acteur
                $result = $mysqli->query('SELECT id_entite_acteur, login_acteur FROM acteur WHERE login_acteur = "'. $_SESSION['login_acteur'].'"');
                $row = $result->fetch_array();

                if ($row['id_entite_acteur'] == 1) { // MDPH
                    require('includes/inc_footer_mdph.php'); 
                }

                if ($row['id_entite_acteur'] == 2) { // Gers Num??rique
                    require('includes/inc_footer_gersnumerique.php'); 
                }

                if ($row['id_entite_acteur'] == 3) { // Gers solidaire
                    require('includes/inc_footer_gerssolidaire.php'); 
                }

                if ($row['id_entite_acteur'] == 4) {  // Adda
                    require('includes/inc_footer_adda.php'); 
                }
                if ($row['id_entite_acteur'] == 5) {  // Conseil D??partemental du Gers
                    require('includes/inc_footer_conseildepartementaldugers.php'); 
                }