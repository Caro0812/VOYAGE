<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de voyages</title>
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
                        <li><i class="bi bi-geo-alt-fill"></i> 30 rue de la république<br class="d-none display-mobile"><span class="ville"></span> 75000 Paris</li>
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
    <!-- slider -->
    <div class="d-none display-mobile image-slider">
        <h1>Voyages sur mesure</h1>
    </div>
    <section id="slider" class="hidden">

        <div id="carouselExampleCaptions" class="carousel slide">            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slider-banner-1.jpg" class="d-block w-100" alt="mots clés">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="display-1 text-white">First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                        <a href="#" class="btn btn-primary mt-5">Détails du voyage</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider-banner-2.jpg" class="d-block w-100" alt="mots cles">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="display-1 text-white">Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                        <a href="#" class="btn btn-primary mt-5">Détails du voyage</a>
                    </div>
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>


    </section>
  
    <!-- top destinations-->
    <section id="populaires">
        <div class="container">
            <!-- Formulaire recherche : destination, nombre de personnes, date debut, date fin + bouton valider-->

            <form action="" method="GET">
                <div class="row">
                    <div class="col-md-2 offset-md-1">
                        <label for="destination" class="form-label">Rechercher Destination*</label>
                        <input type="search" class="form-control" id="destination" name="destination" placeholder="Mots clés" required>
                    </div>
                    <div class="col-md-2">
                        <label for="nombre-personne" class="form-label">Nombre de personne(s)*</label>
                        <input type="number" class="form-control" id="nombre-personne" name="nombre-personne" placeholder="Indiquer un nombre" required>
                    </div>

                    <div class="col-md-2">
                        <label for="date-arrivee" class="form-label">Date d'arrivée*</label>
                        <input type="date" id="date-arrivee" name="date-arrivee" placeholder="JJ/MM/AA" class="form-control" required>
                    </div>
                    <div class="col-md-2">
                        <label for="date-depart" class="form-label">Date de départ*</label>
                        <input type="date" id="date-depart" name="date-depart" placeholder="JJ/MM/AA" class="form-control" required>
                    </div>

                    <div class="col-md-2 d-flex align-items-center">
                        <input type="submit" class="btn btn-primary form-control" value="Rechercher">
                    </div>
                </div>
            </form>
            <!--destinations populaires -->
            <div class="row my-5 pt-3">
                <div class="col-md-5 offset-md-1">
                    <h4>Destinations populaires</h4>
                    <h3>Top 10 Destinations</h3>
                </div>
                <div class="col-md-5 pt-3">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione voluptate ipsam placeat inventore earum minima at beatae libero adipisci sint vitae quia saepe dolorem, autem praesentium quis, eveniet ipsum. Suscipit.</p>
                </div>
            </div>
            <div class="row">
                <!-- 3 colonnes 1 + 3 + 3 + 3 + 1-->
                <div class="col-md-3 offset-md-1 destinations">
                    <figure class="overlay">
                        <img src="images/img1.jpg" alt="mots cles">
                    </figure>
                    <div class="cat">
                        <a href="#" class="btn btn-secondary">THAILANDE</a>
                    </div>
                    <div class="city">
                        <h5>Disney Land</h5>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <i class="bi bi-star"></i>
                        
                    </div>
                </div>
                <div class="col-md-3 destinations">
                    <figure class="overlay">
                        <img src="images/img2.jpg" alt="mots cles">
                    </figure>
                    <div class="cat">
                        <a href="#" class="btn btn-secondary">NORVEGE</a>
                    </div>
                    <div class="city">
                        <h5>Lorem ipsum</h5>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <i class="bi bi-star"></i>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="destinations">
                        <figure class="overlay">
                            <img src="images/img3.jpg" alt="mots cles">
                        </figure>
                        <div class="cat1">
                            <a href="#"  class="btn btn-secondary">Australie</a>
                        </div>
                        <div class="city1">
                            <h5>Lorem ipsum</h5>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                        </div>
                    </div>
                    <div class="destinations mt-5">
                        <figure class="overlay">
                            <img src="images/img4.jpg" alt="mots cles">
                        </figure>
                        <div class="cat1">
                            <a href="#"  class="btn btn-secondary">France</a>
                        </div>
                        <div class="city1">
                            <h5>Lorem ipsum</h5>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 mb-5">
                <a href="#" class="btn btn-primary btn-lg">PLUS DE DESTINATIONS</a>
            </div>
        </div>
    </section>
    <section id="top">
        <div class="container">

        <div class="text-center">
            <h4>Explorez des lieux inoubliables</h4>
            <h3>Lieux les plus visités</h3>
            <p class="top-p">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit perferendis enim delectus quam? Adipisci minus culpa aliquam repellendus illum, ipsa itaque nesciunt ullam, at perferendis, eaque laboriosam officiis quae sequi.</p>
        </div>
        <div class="row">
            <article class="col offset-md-1">
                <div class="card">
                    <img src="images/img6.jpg" alt="" class="card-img-top">
                    <div class="prix">
                        <button class="btn btn-primary">
                            <strong>1900 €</strong> / personne
                        </button>
                    </div>
                    
                    <div class="details">
                        <ul>
                            <li><i class="bi bi-clock"></i> 5J/4N</li>
                            <li><i class="bi bi-people-fill"></i> Nombre de personnes : 4</li>
                            <li><i class="bi bi-geo-alt-fill"></i> Portugal</li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsuml dolor</h5>
                        <div class="note">
                            <span>(25 notes)</span>
                            <div class="stars">
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill gris"></i>
                                <i class="bi bi-star-fill gris"></i>
                            </div>
                        </div>
                        <p class="card-texte">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione velit deserunt repudiandae consectetur accusamus est corporis.</p>
                    </div>
                    <div class="card-body d-flex justify-content-around links">
                        <a href="#">Réservation <i class="bi bi-arrow-right-short"></i></a>
                        <a href="#">Wishlist <i class="bi bi-heart"></i></a>
                    </div>
                </div>
            </article>
            <article class="col">
                <div class="card">
                    <img src="images/img7.jpg" alt="" class="card-img-top">
                    <div class="prix">
                        <button class="btn btn-primary">
                            <strong>1900 €</strong> / personne
                        </button>
                    </div>

                    <div class="details">
                        <ul>
                            <li><i class="bi bi-clock"></i> 5J/4N</li>
                            <li><i class="bi bi-people-fill"></i> Nombre de personnes : 4</li>
                            <li><i class="bi bi-geo-alt-fill"></i> Portugal</li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsuml dolor</h5>
                        <div class="note">
                            <span>(25 notes)</span>
                            <div class="stars">
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill gris"></i>
                                <i class="bi bi-star-fill gris"></i>
                            </div>
                        </div>
                        <p class="card-texte">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione velit deserunt
                            repudiandae consectetur accusamus est corporis.</p>
                    </div>
                    <div class="card-body d-flex justify-content-around links">
                        <a href="#">Réservation <i class="bi bi-arrow-right-short"></i></a>
                        <a href="#">Wishlist <i class="bi bi-heart"></i></a>
                    </div>
                </div>
            </article>
            <article class="col">
                <div class="card">
                    <img src="images/img5.jpg" alt="" class="card-img-top">
                    <div class="prix">
                        <button class="btn btn-primary">
                            <strong>1900 €</strong> / personne
                        </button>
                    </div>
                    
                    <div class="details">
                        <ul>
                            <li><i class="bi bi-clock"></i> 5J/4N</li>
                            <li><i class="bi bi-people-fill"></i> Nombre de personnes : 4</li>
                            <li><i class="bi bi-geo-alt-fill"></i> Portugal</li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsuml dolor</h5>
                        <div class="note">
                            <span>(25 notes)</span>
                            <div class="stars">
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill orange"></i>
                                <i class="bi bi-star-fill gris"></i>
                                <i class="bi bi-star-fill gris"></i>
                            </div>
                        </div>
                        <p class="card-texte">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione velit deserunt
                            repudiandae consectetur accusamus est corporis.</p>
                    </div>
                    <div class="card-body d-flex justify-content-around links">
                        <a href="#">Réservation <i class="bi bi-arrow-right-short"></i></a>
                        <a href="#">Wishlist <i class="bi bi-heart"></i></a>
                    </div>
                </div>

            </article>
            <article class="col-md-1"></article>
            
        </div>

        <div class="text-center mt-5 mb-5">
            <a href="#" class="btn btn-primary btn-lg">PLUS DE VOYAGES</a>
        </div>

        </div>
       
    </section>

    <section id="chiffres">
        <div class="container-fluid">    
            
            <div class="row">
                
                <div class="col-md-8 offset-md-4 bleu">
                    <div class="presentation text-center">
                        <h4>Lorem ipsum dolor</h4>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, aut impedit commodi.</p>

                    <!-- 2 colonnes et 2 lignes -->
                    <table>
                        <tr class="first">
                            <td class="icones"><i class="bi bi-people"></i></td>
                            <td class="nombres"><span>500K+</span> <br>Clients satisfaits</td>
                            <td class="icones"><i class="bi bi-diamond"></i></td>
                            <td class="nombres"><span>250K+ </span><br>Clients satisfaits</td>
                        </tr>
                        <tr>
                            <td class="icones"><i class="bi bi-person-plus"></i></td>
                            <td class="nombres"><span>500K+</span><br> Clients satisfaits</td>
                            <td class="icones"><i class="bi bi-map"></i></td>
                            <td class="nombres"><span>10K+</span> <br>Clients satisfaits</td>
                        </tr>
                    </table>

                    </div>

                    <!-- image -->
                    <img src="images/img8.jpg" alt="mots cles">

                    <!-- n° de téléphone-->
                    <div class="telephone d-flex justify-content-center">
                        <div class="icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div>
                        <p>Lorem ipsum dolor</p>
                        <h6>Tel : 123 456 789</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="activites">
        <div class="container">
            <div class="text-center marge">
                <h4>Voyage par activite</h4>
                <h3>AVENTURE & ACTIVITE</h3>
                <p class="top-p">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit perferendis enim delectus quam? Adipisci minus culpa aliquam repellendus illum, ipsa itaque nesciunt ullam, at perferendis, eaque laboriosam officiis quae sequi.</p>
            </div>

            <div class="row">

                <div class="col offset-md-1">
                    <a href="#">
                        <img src="images/icon6.png" alt="categorie aventure">
                    </a>
                    <h5>Aventures</h5>
                    <span>15 destinations</span>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="images/icon10.png" alt="">
                    </a>
                    <h5>Trekking</h5>
                    <span>12 destinations</span>
                </div>
                <div class="col">
                    <a href="#">
                    <img src="images/icon9.png" alt="">
                    </a>
                    <h5>Feu de camp</h5>
                    <span>7 destinations</span>
                </div>
                <div class="col">
                    <a href="#">
                    <img src="images/icon8.png" alt="">
                    </a>
                    <h5>Sur les routes</h5>
                    <span>15 destinations</span>
                </div>
                <div class="col">
                    <a href="#">
                    <img src="images/icon7.png" alt="">
                    </a>
                    <h5>Camping</h5>
                    <span>13 destinations</span>
                </div>
                <div class="col">
                    <a href="#">
                    <img src="images/icon11.png" alt="">
                    </a>
                    <h5>Explorer</h5>
                    <span>25 destinations</span>
                </div>
    </section>
    <section id="galerie">

        <div class="container">
            <div class=row>
                <div class="col-md-4 offset-md-1 d-flex flex-column justify-content-around">
                    <h4>Galerie de Voyages</h4>
                    <h3>Lorem ipsum Dolor</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam id dolor, distinctio veritatis illo quis!</p>
                    <img src="images/gallery-4.jpg" alt="randonnee en foret" class="img-fluid">
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <figure class="col-6">
                            <img src="images/img14.jpg" alt="" class="img-fluid">
                        </figure>
                        <figure class="col-6">
                            <img src="images/img13.jpg" alt=""class="img-fluid">
                        </figure>
                        <figure class="col-12">
                            <img src="images/img15.jpg" alt=""class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="action" class="overlay">
        <div class="container">
            <div class="row hidden">
                <div class="col-md-10 offset-md-1 marques d-flex justify-content-around py-5">
                    <img src="images/logo1.png" alt="marque 1">
                    <img src="images/logo2.png" alt="marque 1">
                    <img src="images/logo3.png" alt="marque 1">
                    <img src="images/logo4.png" alt="marque 1">
                    <img src="images/logo5.png" alt="marque 1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-1 p-3">
                <h4>galerie de voyages</h4>
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati libero ex consequatur consequuntur ad officia nisi ut vero voluptas quidem aperiam aspernatur similique expedita molestias magni commodi facilis, ea vitae.</p>

                <form action="" method="POST" class="d-flex justify-content-between my-3">
                    <input type="email" name="email" placeholder="Entre votre email" class="form-control">
                    <input type="submit" value="Je m'abonne !" class="btn btn-primary">
                </form>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati libero ex consequatur consequuntur ad officia nisi ut vero voluptas quidem aperiam aspernatur similique expedita molestias magni commodi facilis, ea vitae.</p>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-md-1">
                    <img src="images/img24.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-7 py-5">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="images/icon12.png" alt="" class="icon-contact">
                            <ul class="mt-3">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>   
                            </ul>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="images/icon13.png" alt="" class="icon-contact">
                            <ul class="mt-3">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li> 
                            </ul>  
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="images/icon14.png" alt="" class="icon-contact">
                            <ul class="mt-3">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul> 
                        </div>
                    </div>
                    <div class="d-flex justify-content-around my-3 contact-action">
                        <h3>REJOIGNEZ NOUS POUR RESTER INFORME!!!</h3>
                        <div>
                            <a href="#" class="btn btn-primary">Valider</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <? php include ('footer.php');?

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>