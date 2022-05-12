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
        <title>Dosin - Projet SSI</title>
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
                        <a class="dropdown-item" href="#">Paramètre</a>
                        <a class="dropdown-item" href="#">Activités</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Se déconnecter</a>
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
                                            <a class="nav-link" href="statut.php">Par un n° de ticket</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseActionsPlan" aria-expanded="false" aria-controls="pagesActionsPlan">
                                        Plan d'actions
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseActionsPlan" aria-labelledby="headingOne" data-parent="#sidenavAccordionSearch">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="actions.php">Par catégories de règles</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseRules" aria-expanded="false" aria-controls="pagesCollapseRules">
                                        Règles
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseRules" aria-labelledby="headingOne" data-parent="#sidenavAccordionSearch">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="regles.php">Par catégories de règles</a>
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
                                    <a class="nav-link" href="formulaire_categorie.php">Catégories</a>
                                    <a class="nav-link" href="formulaire_communication.php">Communications</a>
                                    <a class="nav-link" href="formulaire_droit.php">Droits</a>
                                    <a class="nav-link" href="formulaire_entite.php">Entites</a>
                                    <a class="nav-link" href="formulaire_journal_securite.php">Journal Sécurité</a>
                                    <a class="nav-link" href="formulaire_niveaux_securite.php">Niveaux de sécurité</a>
                                    <a class="nav-link" href="formulaire_planaction.php">Plans d'actions</a>
                                    <a class="nav-link" href="formulaire_referentiel.php">Référentiels</a>
                                    <a class="nav-link" href="formulaire_regles.php">Règles</a>
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
                                            <a class="nav-link" href="password.php">J'ai oublié mon mot de passe</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Erreur
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="access_denied.php">Accès refusé</a>
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
                        <div class="small bolder">Connecté en tant que :</div>

                         <?php $result = $mysqli->query('SELECT nom_acteur, prenom_acteur, id_acteur FROM acteur WHERE id_acteur = "'.$_SESSION['id_acteur'].'"');
                            while ($row = $result->fetch_array()){
                                echo '<p class="log_php">'.$row['prenom_acteur'].' '.$row['nom_acteur'].'</p>' ;
                            }?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">

                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Modification dans la base de données</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Demande de modification de règle</li>
                        </ol>
                        <div class="row">
                            <form class="custom_display" id="form_crud" action="modifyrule.php" method="post">
                                <div></div>
                                <div>
                                    <?php $id = $_GET['id'];?>
                                  <label for="ruleNumber">Numéro de règle :</label><br>
                                  <input type="number" value="<?php echo $id?>" id="ruleNumber" name="ruleNumber" min="<?php echo $id?>" max="<?php echo $id?>" required><br>

                                  <label for="ruleTitle">Intitulé :</label><br>
                                  <input type="textarea" id="ruleTitle" name="ruleTitle" required><br>

                                  <label for="ruleGoal">Objectif :</label><br>
                                  <input type="textarea" id="ruleGoal" name="ruleGoal" required><br>

                                  <label for="ruleDetail">Détail :</label><br>
                                  <input type="text" id="ruleDetail" name="ruleDetail" required>
                              
                                  <input class="sendButton" type="submit" name="submit" value="Mettre à jour" required>
                             
                    <?php /************************ Si aucune connexion à la base de donnée, redirection vers la page d'erreur du serveur ******************************/
                        if (!$mysqli) {
                            echo "<script>window.location.href = 'server_error.php';</script>"; 
                        }
                            if (isset($_POST['submit'])) { /***************************** Vérification des champs si le formulaire est envoyé **********************************/
                                
                                if (empty($_POST['ruleNumber']) || empty($_POST['ruleTitle']) || empty($_POST['ruleGoal']) || empty($_POST['ruleDetail'])) {
                                    echo '<p class="error">Vous devez remplir tous les champs</p>' ;
                                }

                                if  (!is_numeric(mysql_real_escape_string($_POST['ruleNumber']))) {
                                    echo '<p class="error">Vous devez saisir un nombre</p>' ;  
                                } 
                                else   { // Réecriture des variables
                                    $ruleTitle = mysql_real_escape_string($_POST['ruleTitle']);
                                    $ruleGoal = mysql_real_escape_string($_POST['ruleGoal']);
                                    $ruleDetail = mysql_real_escape_string($_POST['ruleDetail']);
                                    $ruleNumber = mysql_real_escape_string($_POST['ruleNumber']);
                                    $sqlUpdate = "
                                    UPDATE  regle
                                    SET     intitule_regle = '".$ruleTitle."', 
                                        objectif_regle = '".$ruleGoal."', 
                                        detail_regle = '".$ruleDetail."'
                                    WHERE 
                                        id_regle = '".$ruleNumber."'"; 

                                    mysqli_query($mysqli, $sqlUpdate);
                                    echo "<script>window.location.href = 'request_performs.php';</script>";
                                }       
                            } ?>
    
                                </div>
                            </form>                 
                        </div>
                    </div>
                </main>
          <!-- ======= Footer ======= -->

          <?php // Personalisation du footer en fonction de l'entité > acteur
                $result = $mysqli->query('SELECT id_entite_acteur, login_acteur FROM acteur WHERE login_acteur = "'. $_SESSION['login_acteur'].'"');
                $row = $result->fetch_array();

                if ($row['id_entite_acteur'] == 1) { // MDPH
                    require('includes/inc_footer_mdph.php'); 
                }

                if ($row['id_entite_acteur'] == 2) { // Gers Numérique
                    require('includes/inc_footer_gersnumerique.php'); 
                }

                if ($row['id_entite_acteur'] == 3) { // Gers solidaire
                    require('includes/inc_footer_gerssolidaire.php'); 
                }

                if ($row['id_entite_acteur'] == 4) {  // Adda
                    require('includes/inc_footer_adda.php'); 
                }
                if ($row['id_entite_acteur'] == 5) {  // Conseil Départemental du Gers
                    require('includes/inc_footer_conseildepartementaldugers.php'); 
                }