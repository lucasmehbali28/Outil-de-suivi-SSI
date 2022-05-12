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
                            <div class="col-lg-6">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light mt-5 my-4">Authentification</h3></div>
                                    <div class="card-body">

                                        <form action="login.php" method="post">
                                            <div class="form-group">
                                                <label class="small mb-1 mt-3" for="inputId">Idendifiant</label>
                                                <input class="form-control py-4" name="inputId" id="inputId" type="text" placeholder="Entrez votre identifiant" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1 mt-3" for="inputPassword">Mot de passe</label>
                                                <input class="form-control py-4" name="inputPassword" id="inputPassword" type="password" placeholder="Entrez le mot de de passe" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox ">
                                                    <input class="custom-control-input" name="rememberPasswordCheck" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label mt-3" for="rememberPasswordCheck">Se rappeler du mot de passe</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Vous avez oublié votre mot de passe?</a>
                                               <input type="submit" name="submit" value="Se connecter" class="btn btn-primary"></div>
                                            </div>
                                        </form>
                                    <div class="card-footer text-center">
                                        <div class="small mt-2"><a href="register.php">Besoin d'un compte? S'inscrire!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

<?php

if(isset($_POST['submit'])) { 
 
if (empty($_POST['inputId']) AND empty($_POST['inputPassword'])) {
 
   echo '<p class="error">Nous n\'avons pas pu vous identifier car tous les champs n\'ont pas été remplis.</p><a href="login.php">Retour à l\'identification</a>'; 
        }

    else   // vérification des identifiants à la BDD
    {

        $inputId = ($_POST['inputId']);
        $inputPassword = ($_POST['inputPassword']);

        
        $result=$mysqli->query('SELECT login_acteur, motdepasse_acteur, id_acteur FROM acteur WHERE login_acteur = "'. $inputId.'"');
        $row = $result->fetch_array();

        if (!isset($row['login_acteur']))
        {
        echo '<p class="error">Echec de l\'identification. Veuillez vérifiez votre identifiant.</p>'; 
        }

    else // vérification mot de de passe 
        {
        $user_login = $row['login_acteur'];
        $user_password = $row['motdepasse_acteur'];
        $user_id = $row['id_acteur'];

        if (crypt($inputPassword, $user_password) != $user_password)
            {
            echo '<p class="error">Echec de l\'identification. Veuillez vérifiez votre votre mot de passe.</p>';
            }
        else
            {
            session_start();
            $_SESSION['login_acteur'] = $user_login;
            $_SESSION['id_acteur'] = $user_id;
            ?>

            <script>
            setTimeout(function () {
            window.location.href='index.php';
            }, 0);
            </script>

            <?php
            } 
        }
    } 
}
?>
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