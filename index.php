<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header class="navbar navbar-dark bg-dark" style="position: fixed; width: 100%; z-index: 1;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Introduction au langage PHP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#first-series">Série 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#second-series">Série 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#third-series">Série 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#fourth-series">Série 4</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section id="first-series" class="d-flex justify-content-center align-items-center flex-column" style="height:100vh; background-color:#f8f8f8">
        <div>
            <h2>Série 1</h2>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="margin-top: 32px;">
            <div class="card" style="width: 18rem; margin: 0 8px">
                <img class="card-img-top" src="images/exercice1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Exercice 1</h5>
                    <p class="card-text">Script qui affiche, pour chacun des naturels de 1 à 100, s'il est un nombre parfait.</p>
                    <a href="serie_1/serie_1_exo_1.php" class="btn btn-primary">Voir exercice</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; margin: 0 8px">
                <img class="card-img-top" src="images/exercice2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Exercice 2</h5>
                    <p class="card-text">Script qui recueille les données nécessaires et annonce le prix à payer pour une place de cinema.</p>
                    <a href="serie_1/serie_1_exo_2.php" class="btn btn-primary">Voir exercice</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; margin: 0 8px">
                <img class="card-img-top" src="images/exercice3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Exercice 3</h5>
                    <p class="card-text">Script qui calcule la valeur du capital après n années avec différentes méthodes.</p>
                    <a href="serie_1/serie_1_exo_3.php" class="btn btn-primary">Voir exercice</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; margin: 0 8px">
                <img class="card-img-top" src="images/exercice4.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Exercice 4</h5>
                    <p class="card-text">Script permettant de générer un tableau HTML en utilisant des boucles.</p>
                    <a href="serie_1/serie_1_exo_4.php" class="btn btn-primary">Voir exercice</a>
                </div>
            </div>
        </div>
    </section>
    <section id="second-series" class="d-flex justify-content-center align-items-center flex-column" style="height:100vh; background-color:#f2f2f2">
        <div>
            <h2>Série 2</h2>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="margin-top: 32px;">
            <div class="card" style="width: 18rem; margin: 0 8px">
                <img class="card-img-top" src="images/exercice5.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Exercice 1</h5>
                    <p class="card-text">Fonctions pour crypter et décrypter un message, suivant le cryptage appelé le "chiffre de César".</p>
                    <a href="serie_2/exo_1/serie_2_exo_1.php" class="btn btn-primary">Voir exercice</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; margin: 0 8px">
                <img class="card-img-top" src="images/exercice6.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Exercice 2</h5>
                    <p class="card-text"> Un énigme mathématique qui a beaucoup intrigué les arithméticiens.</p>
                    <a href="serie_2/exo_2/serie_2_exo_2.php" class="btn btn-primary">Voir exercice</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; margin: 0 8px">
                <img class="card-img-top" src="images/exercice7.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Exercice 3</h5>
                    <p class="card-text">Classes et méthodes permettant la création des instances d'un véhicule.</p>
                    <a href="serie_2/exo_3/serie_2_exo_3.php" class="btn btn-primary">Voir exercice</a>
                </div>
            </div>
        </div>
    </section>
    <section id="third-series" class="d-flex justify-content-center align-items-center flex-column" style="height:100vh; background-color:#f8f8f8">
        <div>
            <h2>Série 3</h2>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="margin-top: 32px;">
            <div class="card" style="width: 18rem; margin: 0 8px">
                <img class="card-img-top" src="images/exercice8.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Exercice 1</h5>
                    <p class="card-text">Script qui assure une gestion simplifiée des réservations et libérations de places.</p>
                    <a href="serie_3/exo_1/serie_3_exo_1.php" class="btn btn-primary">Voir exercice</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; margin: 0 8px">
                <img class="card-img-top" src="images/exercice9.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Exercice 2</h5>
                    <p class="card-text">Script qui affiche la liste d'étudiants inscrits dans une formation (par exemple la L3 
                        Miage).</p>
                    <a href="serie_3/exo_2/serie_3_exo_2.php" class="btn btn-primary">Voir exercice</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; margin: 0 8px">
                <img class="card-img-top" src="images/exercice10.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Exercice 3</h5>
                    <p class="card-text">Script permettant joueur à un jeu avec des jetons, en utilisant les séssions.</p>
                    <a href="serie_3/exo_3/serie_3_exo_3.php" class="btn btn-primary">Voir exercice</a>
                </div>
            </div>
        </div>
    </section>
    <section id="fourth-series" class="d-flex justify-content-center align-items-center flex-column" style="height:100vh; background-color:#f2f2f2">
        <div>
            <h2>Série 4</h2>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="margin-top: 32px;">
            <div class="card" style="width: 18rem; margin: 0 8px">
                <img class="card-img-top" src="images/exercice11.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Exercice 1</h5>
                    <p class="card-text">Script permettant de se connecter à une base de données et effectuer les opérations CRUD. </p>
                    <a href="serie_4/index.php" class="btn btn-primary">Voir exercice</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>