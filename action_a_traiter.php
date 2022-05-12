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
            <!-- ======= Main ======= -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Les outils de gestion</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tableau de bord</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Liste des actions à traiter
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>N° ticket </th>
												<th>Statut</th>
												<th>Nom acteur</th>
												<th>Titre de l'action</th>
												<th>Date d'échéance de l'action</th>
												<th>Descriptif de l'action</th>
												<th>Fréquence d'action</th>
                                                <th>Libelle type d'action</th>
												<th>Type d'action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
											<?php $result = $mysqli->
												<td><?php echo $row['id_ticket_action']?>1</td>
												<td><?php echo $row['libelle_statut']?>1</td>
												<td><?php echo $row['nom_acteur']?></td>
												<td><?php echo $row['titre_action']?>Formation à l'entrée en poste et en continu si besoin, fournitures d'un guide des bonnes pratiques, atelier CTF.</td>
												<td><?php echo $row['date_echeance_action']?></td>
												<td><?php echo $row['description_action']?>Formation sur la législation, les risques et menaces, le maintien en condition de sécurité, l'authentification et le contrôle d'accès, la paramétrage fin et le durcissement des systèmes, le cloisonnement réseau et la journalisation.</td>
												<td><?php echo $row['frequence_action']?></td>
												<td><?php echo $row['libelle_typeaction']?>1</td>
												<td><?php echo $row['nom_planaction']?>Sensibiliser et former</td>
											</tr>	
                                            <tr>
											<?php $result = $mysqli->
												<td><?php echo $row['id_ticket_action']?>3</td>
												<td><?php echo $row['libelle_statut']?>3</td>
												<td><?php echo $row['nom_acteur']?></td>
												<td><?php echo $row['titre_action']?>Demander un plan d'Assurance Sécurité aux prestataires, convenir avec eux des règles et dispositions à respecter. Eviter les clouds publics pour l'hébergement de données sensibles.</td>
												<td><?php echo $row['date_echeance_action']?></td>
												<td><?php echo $row['description_action']?>Convenir d'une liste d'exigences avec le prestataire (possibliter d'auditer, maintien à niveau de la sécurité dans le temps, réversibilité du contrat, sauvegarde et restitution des données dans un format ouvert normalisé.</td>
												<td><?php echo $row['frequence_action']?></td>
												<td><?php echo $row['libelle_typeaction']?>1</td>
												<td><?php echo $row['nom_planaction']?>Sensibiliser et former</td>

                                                <tr>
											<?php $result = $mysqli->
												<td><?php echo $row['id_ticket_action']?>5</td>
												<td><?php echo $row['libelle_statut']?>5</td>
												<td><?php echo $row['nom_acteur']?></td>
												<td><?php echo $row['titre_action']?>Faire un extract de l'AD et mettre en forme un document protégé. Le tenir à jour régulièrement.</td>
												<td><?php echo $row['date_echeance_action']?></td>
												<td><?php echo $row['description_action']?>Inventorier les utilisateurs ayant un compte administrateur ou des droits supérieurs à ceux d'un utilisateur standard, les utilisateurs disposant de droits permettant d'accéder aux répertoires de travail des responsables ou de l'ensemble des utilisateurs, les utilisateurs ayant un poste non administré par le service informatique (et sur lequel la politique de sécurité ne s'applique donc pas).</td>
												<td><?php echo $row['frequence_action']?></td>
												<td><?php echo $row['libelle_typeaction']?>2</td>
												<td><?php echo $row['nom_planaction']?>Connaître le système d'information</td>
											</tr>	

                                            <?php $result = $mysqli->
												<td><?php echo $row['id_ticket_action']?>9</td>
												<td><?php echo $row['libelle_statut']?>9</td>
												<td><?php echo $row['nom_acteur']?></td>
												<td><?php echo $row['titre_action']?>Lister les ressources sensibles, définir qui peut y avoir accès, comment l'accès est contrôlé, mettre en place des règles afin d'éviter la dispersion des informations protégées, revoir régulièrement des droits.</td>
												<td><?php echo $row['date_echeance_action']?></td>
												<td><?php echo $row['description_action']?>Etablir une liste des ressources à protéger, règlementer et contrôler l'accès à celles-ci pour les utilisateurs.</td>
												<td><?php echo $row['frequence_action']?></td>
												<td><?php echo $row['libelle_typeaction']?>3</td>
												<td><?php echo $row['nom_planaction']?>Authentifier et contrôler les accès</td>
											</tr>	

                                            <?php $result = $mysqli->
												<td><?php echo $row['id_ticket_action']?>12</td>
												<td><?php echo $row['libelle_statut']?>12</td>
												<td><?php echo $row['nom_acteur']?></td>
												<td><?php echo $row['titre_action']?>Passer sur tout les équipements et services afin de modifier les accès. Stocker les nouveaux accès dans un coffre-fort. Anticiper sur les effets de bord que peuvent avoir de telles modifications sur la production. Mettre en place une procédure à suivre lors de l'installation lors d'un nouvel équipement/service, comprenant la modification des accès par défaut. Réfléchir à la possibilité de les modifier régulièrement.</td>
												<td><?php echo $row['date_echeance_action']?></td>
												<td><?php echo $row['description_action']?>Il est primordial de modifier les accès par défaut lors de l'installation d'un nouvel équipement/service, afin de ne pas à avoir le faire sur tout les appareils en production, par necéssité.</td>
												<td><?php echo $row['frequence_action']?></td>
												<td><?php echo $row['libelle_typeaction']?>3</td>
												<td><?php echo $row['nom_planaction']?>Authnetifier et contrôler les accès</td>
											</tr>	

                                            <?php $result = $mysqli->
												<td><?php echo $row['id_ticket_action']?>13</td>
												<td><?php echo $row['libelle_statut']?>13</td>
												<td><?php echo $row['nom_acteur']?></td>
												<td><?php echo $row['titre_action']?>Mettre en place l'authentification multi-facteurs, notamment sur les outils et services critiques et ceux utilisant le SSO. Sensibiliser les utilisateurs aux objectifs d'une telle démarche, et au bénéfice qu'ils pourraient en tirer.</td>
												<td><?php echo $row['date_echeance_action']?></td>
												<td><?php echo $row['description_action']?>L'authentification multi-facteurs est un rempart efficace contre l'accès non autorisé par l'intermédiaire d'un mot de passe dérobé, ou plus généralement par la compromission de l'unique facteur d'authentification . Plusieurs facteurs plus ou moins simples d'utilisation peuvent être mis en place : carte à puce, One Time Password, code reçu par SMS, biométrie...</td>
												<td><?php echo $row['frequence_action']?></td>
												<td><?php echo $row['libelle_typeaction']?>3</td>
												<td><?php echo $row['nom_planaction']?>Authentifier et contrôler les accès</td>
											</tr>
                                            
                                            <?php $result = $mysqli->
												<td><?php echo $row['id_ticket_action']?>23</td>
												<td><?php echo $row['libelle_statut']?>23</td>
												<td><?php echo $row['nom_acteur']?></td>
												<td><?php echo $row['titre_action']?>Cloisonner les services visibles depuis Internet du reste du système d'information.</td>
												<td><?php echo $row['date_echeance_action']?></td>
												<td><?php echo $row['description_action']?>Les infrastrucututes d'hébergement Internet doivent être physiquement cloisonnées de toutes les infrastrucutures du système d'information qui n'ont pas vocation a être visibles depuis Internet.</td>
												<td><?php echo $row['frequence_action']?></td>
												<td><?php echo $row['libelle_typeaction']?>5</td>
												<td><?php echo $row['nom_planaction']?>Sécuriser le réseau</td>
											</tr>	

                                            <?php $result = $mysqli->
												<td><?php echo $row['id_ticket_action']?>24</td>
												<td><?php echo $row['libelle_statut']?>24</td>
												<td><?php echo $row['nom_acteur']?></td>
												<td><?php echo $row['titre_action']?>Protéger sa messagerie professionnelle</td>
												<td><?php echo $row['date_echeance_action']?></td>
												<td><?php echo $row['description_action']?>La redirection de messages professionnelles vers une messagerie personnelle est à proscrire car cela consistue une fuite irrémédiable d'informations de l'entité. Si nécessaire des moyens maîtrisés et sécurisés pour l'accès distant à la messagerie professionnelle doivent être proposées.</td>
												<td><?php echo $row['frequence_action']?></td>
												<td><?php echo $row['libelle_typeaction']?>5</td>
												<td><?php echo $row['nom_planaction']?>Sécuriser le réseau</td>
											</tr>	

                                            <?php $result = $mysqli->
												<td><?php echo $row['id_ticket_action']?>25</td>
												<td><?php echo $row['libelle_statut']?>25</td>
												<td><?php echo $row['nom_acteur']?></td>
												<td><?php echo $row['titre_action']?>Sécuriser les interconnexions réseau dédiées avec les partenaires.</td>
												<td><?php echo $row['date_echeance_action']?></td>
												<td><?php echo $row['description_action']?>Cette interconnexion peut se faire au travers d'un lien sur le réseau privé de l'entité ou directement sur Internet. Dans le second cas, il convient d'établir un tunnel à site, de préférence IPsec, en respectant les préconisations de l'ANSSI.</td>
												<td><?php echo $row['frequence_action']?></td>
												<td><?php echo $row['libelle_typeaction']?>5</td>
												<td><?php echo $row['nom_planaction']?>Sécuriser le réseau</td>
											</tr>	

                                            <?php $result = $mysqli->
												<td><?php echo $row['id_ticket_action']?>29</td>
												<td><?php echo $row['libelle_statut']?>29</td>
												<td><?php echo $row['nom_acteur']?></td>
												<td><?php echo $row['titre_action']?>Mise à disposition d'un magasin étoffé d'applications validées par l'entité du point de vue de la sécurité permettra de répondre à la majorité des besoins.</td>
												<td><?php echo $row['date_echeance_action']?></td>
												<td><?php echo $row['description_action']?>Seuls les administrateurs chaegés de l'administration des postes doivent disposer de ces droits lors de leurs interventions.</td>
												<td><?php echo $row['frequence_action']?></td>
												<td><?php echo $row['libelle_typeaction']?>6</td>
												<td><?php echo $row['nom_planaction']?>Sécuriser l'administration</td>
											</tr>	

                                            <?php $result = $mysqli->
												<td><?php echo $row['id_ticket_action']?>30</td>
												<td><?php echo $row['libelle_statut']?>5</td>
												<td><?php echo $row['nom_acteur']?></td>
												<td><?php echo $row['titre_action']?>Faire un extract de l'AD et mettre en forme un document protégé. Le tenir à jour régulièrement.</td>
												<td><?php echo $row['date_echeance_action']?></td>
												<td><?php echo $row['description_action']?>Inventorier les utilisateurs ayant un compte administrateur ou des droits supérieurs à ceux d'un utilisateur standard, les utilisateurs disposant de droits permettant d'accéder aux répertoires de travail des responsables ou de l'ensemble des utilisateurs, les utilisateurs ayant un poste non administré par le service informatique (et sur lequel la politique de sécurité ne s'applique donc pas).</td>
												<td><?php echo $row['frequence_action']?></td>
												<td><?php echo $row['libelle_typeaction']?>2</td>
												<td><?php echo $row['nom_planaction']?>Connaître le système d'information</td>
											</tr>	

											</tr>				
										</tbody>
										<?php endwhile; ?>   
									</table>                         
                                </div>
                            </div>

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