<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de voyage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">

</head>
<body>    
        <!-- début  topbar -->
        <section id="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 coordonnees pt-3 col-6">
                        <ul class="d-flex justify-content-around col">
                            <li><i class="bi bi-telephone-fill"></i> 01 23 45  67 89</li>
                            <li><i class="bi bi-envelope-fill"></i> contact@voyage.com</li>
                            <li><i class="bi bi-geo-alt-fill"></i> 30, rue de la république<br class="d-none display-mobile"><span class="ville"></span> 75000 Paris</li>
                        </ul>
                    </div>
                    <div class="col-md-4 d-flex pt-3 col-6">
                        <!-- reseaux sociaux-->
                        <div class="social">
                            <ul class="d-flex">
                                <li><i class="bi bi-facebook"></i></li>
                                <li><i class="bi bi-twitter"></i></li>
                                <li><i class="bi bi-instagram"></i></li>
                                <li><i class="bi bi-linkedin"></i></li>
                            </ul>
    
                        </div>
                        <!-- bouton recherche-->
                        <div class="search-icon">
                            <button><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    
        <!-- fin topbar -->
        <!-- header -->
    
        <?php include('header.php');?>

        <section id="page-titre-404" class="overlay">
            <div class="container">


                <div class="text-404">
                    <span>404</span>
                    <h3>Oups cette page n'existe plus !</h3>
                    <h4>Cette page n'est plus disponible. Essayer le moteur de rechercher pour trouver votre destination</h4>

                </div> <!-- fin du texte 404 -->

                <!-- formulaire -->
                <form action="" method="GET">
                    <input type="search" placeholder="Recherche ..." class="form-control">
                    <button type="submit"><i class="bi bi-search"></i></button>
                </form>

            </div> <!-- Fin container -->
        </section>


        </section>

        <section id="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 offset-md-1">
                        <h4>A propos</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut ullam eaque ipsam quod voluptate laudantium doloremque ipsum enim, commodi deleniti debitis magnam vel porro ab, esse hic sint saepe exercitationem.</p>
                        <img src="images/logo6.png" alt="">
                        <img src="images/logo2.png" alt="">
                    </div>
                    <div class="col-md-3">
                        <h4>Informations de contact</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut ullam eaque ipsam quod voluptate laudantium doloremque ipsum enim, commodi deleniti debitis magnam vel porro ab, esse hic sint saepe exercitationem.</p>
                        <ul>
                            <li><i class="bi bi-telephone-fill"></i> 01 23 45  67 89</li>
                            <li><i class="bi bi-envelope-fill"></i> contact@voyage.com</li>
                            <li><i class="bi bi-geo-alt-fill"></i> 30 rue de la république 75000 Paris</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Dernier articles</h4>
                        <article>
                            <a href="#">
                                <h6>Titre de l'article</h6>
                            </a>
                            <span>Date|aucun commentaires</span>
                        </article>
                        <hr>
                        <article>
                            <a href="#">
                                <h6>Titre de l'article</h6>
                            </a>
                            <span>Date|aucun commentaires</span>
                        </article>
                        <hr>
                    </div>
                    <div class="col-md-2">
                        <h4>Abonnez-vous</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <form action="" method="POST">
                            <input type="email" placeholder="votre email" class="form-control mb-3" required>
                            <input type="submit" value="rejoignez-nous !" class="btn btn-primary form-control">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="up">
            <a href="#topbar"><i class="bi bi-arrow-up-circle-fill"></i></a>
        </div>
   <!--footer-->
   <? php include ('footer.php');?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
    </body>
    </html>