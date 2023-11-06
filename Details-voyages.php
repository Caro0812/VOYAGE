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

        <section id="page-titre" class="overlay hidden">
            <h1>Nom de la destination</h1>
            <div class="vague"></div>
        </section>

        <main class="container">
            <div class="row">
                <section class="col-lg-7 offset-lg-1" id="page-details">
                <h2>Lorem ipsum dolor</h2>
                <img src="images/img27.jpg" alt="nom de la destination" class="img-fluid">
                <div class="details">
                    <ul class="d-flex justify-content-center">
                        <li></li><i class="bi bi-clock"></i>5J/4N |</li>
                        <li></li><i class="bi bi-people-fill"></i>Nombre de personne :4 |</li>
                        <li></li><i class="bi bi-geo-alt-fill"></i>Norvege |</li>
                    </ul>
                </div><!-- fin de la div details -->

                <div id="tabs" class="my-5">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                                role="tab" aria-controls="home" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                                role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button"
                                role="tab" aria-controls="messages" aria-selected="false">Messages</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button"
                                role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                        </li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique laudantium illo quam. Cumque eius facere explicabo minima vel placeat doloremque, distinctio modi deserunt accusamus officia consequatur. Blanditiis quisquam eveniet nostrum!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique laudantium illo quam. Cumque eius facere explicabo minima vel placeat doloremque, distinctio modi deserunt accusamus officia consequatur. Blanditiis quisquam eveniet nostrum!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique laudantium illo quam. Cumque eius facere explicabo minima vel placeat doloremque, distinctio modi deserunt accusamus officia consequatur. Blanditiis quisquam eveniet nostrum!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique laudantium illo quam. Cumque eius facere explicabo minima vel placeat doloremque, distinctio modi deserunt accusamus officia consequatur. Blanditiis quisquam eveniet nostrum!</p>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis sapiente voluptate error quae earum aperiam, quis quaerat iusto itaque, alias sit commodi officia sint eaque id fugiat non delectus nobis!</p>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">
                            <img src="images/gallery-5.jpg" alt="">
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11555.870793339232!2d1.3648584312225092!3d43.60721416764662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebaa26015cb43%3A0xacdcee70b0cc51c3!2s15%20Chem.%20de%20la%20Crabe%2C%2031300%20Toulouse!5e0!3m2!1sfr!2sfr!4v1698064305118!5m2!1sfr!2sfr"
                                height="400" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>


                </div><!-- fin de la div tabs-->

        <div id="galerie-details" class="row">
            <h3>Galerie / Photos</h3>
            <figure>
                <img src="images/img30.jpg" alt=""class="img-fluid rounded">
            </figure>
            <figure class="col">
                <img src="images/img31.jpg" alt=""class="img-fluid rounded">
            </figure>  
        </div> <!-- fin de galerie-details-->
                    
    
                </section>
                <aside class="col-lg-3">
                    <div class="details-cout">
                            <span><b>649€</span></b> / personne</span>
                            <div>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                    </div>
                        
                        <form action="" method="POST">
                            <div class="btn-secondary">
                                <h3>Réservations</h3>
                            </div>
                            <input type="text" placeholder="votre nom" name="nom" class="form-control mb-3"> 
                            <input type="email" placeholder="votre email" name="email"class="form-control mb-3">
                            <input type="number" placeholder="votre téléphone" name="telephone"class="form-control mb-3">
                            <input type="date" placeholder="date"class="form-control mb-3">
                            
                        <fieldset>
                            <legend>Ajouter des options</legend>
                            <div class="form-check">
                                <input type="checkbox" id="guide" value="guide" name="guide" class="form-check-input">
                                <label for="guide" class="form-check-label">Guide touristique</label>
                            </div>

                            <div class="form-check">  
                                <input type="checkbox" id="assurance" value="assurance" name="assurance" checked class="form-check-input">
                                <label for="assurance" class="form-check-label">Assurance</label>
                            </div>
                        </fieldset>
                            <input type="submit" class="btn btn-primary form-control my-3">
                        </form>

                        <div id="infos-commerciales">
                            <h4>Titre</h4>
                            <h5>Lorem ipsum dolor</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis a commodi architecto, hic laborum sapiente</p>
          
                        </div>

                        <div id="autres" class="overlay">
                            <h4>Titre</h4>
                            <h5>Lorem ipsum dolor</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis a commodi architecto, hic laborum sapiente libero totam quaerat doloribus corporis quasi quibusdam rerum qui illum nemo aut dolorem doloremque excepturi.</p>  
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-arrow-right-circle-fill"></i>Vacances</li>
                                <li class="list-group-item"><i class="bi bi-arrow-right-circle-fill"></i>Lune de miel</li>
                                <li class="list-group-item"><i class="bi bi-arrow-right-circle-fill"></i>A third item</li>
                                <li class="list-group-item"><i class="bi bi-arrow-right-circle-fill"></i>A fourth item</li>
                                <li class="list-group-item"><i class="bi bi-arrow-right-circle-fill"></i>And a fifth one</li>
                              </ul>
                        </div><!-- fin des autres-->
                </aside>
            </div>
        </main>
      
        <section id="Newsletter">
            <div class="class d-flex flex-column justify-content-center text-white mx-auto news py-5">
            <h4>Offres spéciales</h4>
            <h5 class="display-3 text-white">Remises exceptionnelles</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro quia tenetur eligendi quis corrupti impedit esse ab facilis dolore libero officiis similique, quos accusamus molestias expedita culpa sit vel a.</p>
            <form action="" method="POST">
                <input type="email" name="email" placeholder="Entrez un email">
                <input type="submit" class="btn btn-primary">
            </form>
            <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur a, voluptates veniam similique accusantium ipsa, quo cumque consequatur, quis quae reiciendis quas doloremque deserunt necessitatibus ab natus vitae beatae ullam.</p>
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
