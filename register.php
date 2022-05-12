<?php require('includes/inc_connexion.php'); ?>

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
                        <a class="dropdown-item" href="login.php">Se connecter</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    </div>
                    <div class="sb-sidenav-footer footer-color">
                        <div class="log_php">Non connecté</div>
                    </div>
                </nav>
            </div>
        </div>

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Créer un compte</h3></div>
                                    <div class="card-body">
                                        <form action="register.php" method="post">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Nom</label>
                                                        <input class="form-control py-4" name="inputLastName" id="inputLastName" type="text" placeholder="Entrez votre nom" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Prénom</label>
                                                        <input class="form-control py-4" name="inputFirstName" id="inputFirstName" type="text" placeholder="Entrez votre prénom" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPhone">Téléphone</label>
                                                        <input class="form-control py-4" name="inputPhone" id="inputPhone" type="tel" pattern="^[0-9]{10}$" placeholder="Entrez votre n° de téléphone" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputEmail">Email</label>
                                                        <input class="form-control py-4" name="inputEmail" id="inputEmail" type="email" pattern=".+@gers.fr" size="30" aria-describedby="emailHelp" placeholder="Entrez votre email" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputAddress">Adresse</label>
                                                        <input class="form-control py-4" name="inputAddress"  id="inputAddress" type="text" placeholder="Entrez votre adresse" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputEntite">Entité mère</label>
                                                        <input class="form-control py-4" name="inputEntite"  id="entite" type="text" placeholder="Exemple : Gers Numérique" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputSite">Site de travail</label>
                                                        <input class="form-control py-4" name="inputSite"  id="site" type="text" placeholder="Exemple : Dosin" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLogin">Identifiant</label>
                                                        <input class="form-control py-4" name="inputLogin" id="inputLogin" type="text" placeholder="Entrez votre identifiant" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Mot de passe</label>
                                                        <input class="form-control py-4" name="inputPassword" id="inputPassword" type="password" placeholder="Entrez votre mot de passe" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirmez le mot de passe</label>
                                                        <input class="form-control py-4" name="inputConfirmPassword" id="inputConfirmPassword" type="password" placeholder="Confirmez votre mot de passe" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><input type="submit" name="submit" value="Créer un compte" class="btn btn-primary btn-block"></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Vous avez déjà un compte? Cliquez ici</a></div>

                                        <?php /* Vérification de la connexion à la BDD */
										
										if (!$mysqli) {
										    die("Erreur de connexion: " . mysqli_connect_error());
                                        }
                                        $error_message = "";$success_message = "";
                                        // Si le formulaire d'inscription est envoyé -> affectation des variables
                                        if(isset($_POST['submit'])){
                                            $lname = trim($_POST['inputLastName']);
                                            $fname = trim($_POST['inputFirstName']);
                                            $phone = trim($_POST['inputPhone']);
                                            $email = trim($_POST['inputEmail']);
                                            $adress = trim($_POST['inputAddress']);
                                            $site = trim($_POST['inputSite']);
                                            $entite = trim($_POST['inputEntite']);
                                            $login = trim($_POST['inputLogin']);
                                            $password = trim($_POST['inputPassword']);
                                            $confirmpassword = trim($_POST['inputConfirmPassword']);
                                            $hash = password_hash($password, PASSWORD_DEFAULT);
                                            /*var_dump($password);
                                            var_dump($confirmpassword);
                                            var_dump($hash);*/

                                            $isValid = true;
                                        
                                            // Vérification si les champs sont remplis
                                            if($lname == '' || $fname == '' || $phone == '' || $email == '' || $adress == '' || $login == '' || $site == '' || $entite == ''|| $password == '' || $confirmpassword == ''){
                                            $isValid = false;
                                            $error_message = "Veuillez remplir tous les champs.";
                                            echo '<p class="error">'.$error_message.'</p>';
                                            }
                                        
                                            // Vérification si le mot de passe correspond à la confirmation de mot de passe
                                            if($isValid && ($password != $confirmpassword) ){
                                            $isValid = false;
                                            $error_message = "Les mots de passe ne correspondent pas.";
                                            echo '<p class="error">'.$error_message.'</p>';
                                            }
                                        
                                            // Vérification si l'email est valide
                                            if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                                $isValid = false;
                                                $error_message = "Email invalide.";
                                                echo '<p class="error">'.$error_message.'</p>';
                                                }
                                            
                                                if($isValid){
                                            
                                                // Vérification si l'email existe déjà dans la BDD
                                                $stmt = $mysqli->prepare("SELECT * FROM acteur WHERE mail_acteur = ?");
                                                $stmt->bind_param("s", $email);
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                $stmt->close();
                                                if($result->num_rows > 0){
                                                    $isValid = false;
                                                    $error_message = "Cet email existe déjà.";
                                                    echo '<p class="error">'.$error_message.'</p>';
                                                }
                                                }
    
                                                if($isValid){
                                            
                                                    // Vérification si le login existe déjà dans la BDD
                                                    $stmt = $mysqli->prepare("SELECT * FROM acteur WHERE login_acteur = ?");
                                                    $stmt->bind_param("s", $login);
                                                    $stmt->execute();
                                                    $result = $stmt->get_result();
                                                    $stmt->close();
                                                    if($result->num_rows > 0){
                                                        $isValid = false;
                                                        $error_message = "Cet utilisateur existe déjà.";
                                                        echo '<p class="error">'.$error_message.'</p>';
                                                    }
                                                    }
                                            
                                                // Enregistrement dans la base de données
                                                if($isValid){
                                                    $insertSQL = "INSERT INTO acteur(nom_acteur,prenom_acteur,telephone_acteur,adresse_acteur,mail_acteur,login_acteur,motdepasse_acteur,id_entite_acteur, id_sites_acteur) values(?,?,?,?,?,?,?,?,?)";
                                                    $stmt = $mysqli->prepare($insertSQL);
                                                    $stmt->bind_param("sssssssss",$lname,$fname,$phone,$adress,$email,$login,$hash,$entite,$site);
                                                    $stmt->execute();
                                                    $stmt->close();
                                            
                                                $success_message = "Votre compte a été créé avec succès. Vous allez être redirigé vers la page de connection dans quelques secondes.";
                                                echo '<p class="success">'.$success_message.'</p>';?> 
                                                
                                                <script>
                                                setTimeout(function () {
                                                window.location.href= 'login.php';
                                                }, 5000);
                                                </script>

                                        <?php   }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>