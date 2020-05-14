<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Mon CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/color.css">
  <link rel="stylesheet" href="css/animations.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway&display=swap" rel="stylesheet">
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/839df3b8b1.js"></script>

  <title>Guillaume Poucet</title>
</head>

<body id="accueil" data-spy="scroll" data-target="#navbar" data-offset="56">

  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></button>

  <!-- Navbar -->

  <?php include 'nav.php' ?>

  <!-- Fin navbar -->

  <!-- Photo + Titre -->
  <div id="main">
    <div class="main d-flex align-items-center" style="height:95vh">
      <div class="container-fluid d-flex flex-column flex-sm-row justify-content-center">
        <img class="profil img-fluid align-self-start fade-in-left mr-sm-4 rounded-circle align-self-center" src="ressources/profil.png" alt="profil">
        <div class="fade-in-right ml-sm-4">
          <h1 class="display-4 text-center text-sm-left m-4 m-sm-0">Guillaume Poucet</h1>
          <p class="ml-sm-2 text-center text-sm-left">Charleville-Mézières<br>07.83.89.82.71<br>
            <a href="mailto:poucet@simplon-charleville.fr">poucet@simplon-charleville.fr</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin Photo + Titre -->

  <!-- Parcours -->
  <section id="competences">
    <div class="container">
      <div class="row justify-content-lg-center pr-2 pr-sm-0">
        <div class="col-sm-6 col-lg-6 pl-4 pl-sm-0">
          <h2 class="mb-4 mb-sm-5">Compétences Web</h2>
          <p class="text-justify mb-4 mb-sm-0">J'ai commencé à me former sur OpenClassroom, en suivant le cursus de
            dévelopement web. Un domaine que me paraissait
            hors de portée ne l'était finalement pas tant que ça et j'y ai surtout pris goût ! L'idée d'une reconvertion
            professionnelle s'est vite imposée. C'est cette année que ce projet a pris vie, avec mon entrée
            à SIMPLON Charleville.<br>Mes connaissances du HTML et du CSS s'approfondissent de jour en jour. En
            réalisant ce portfolio, j'ai débuté BOOSTRAP.<br>J'ai été introduit au langage PHP par les cours de la
            w3schools et SIMPLON.</p>
        </div>

        <div class="web-progress offset-sm-1 col-sm-4 col-lg-3 mr-lg-4 pl-4 pl-sm-0">

          <!-- /animatedParent: en relation avec la classe animated en-dessous des progress-bar /animated: lance l'animation on scroll/ -->
          <p class="web-progress-title"><i class="fab fa-html5"></i>HTML5</p>
          <div class="progress">
            <div class="progress-bar scale-up-hor-left progress-bar-striped bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="web-progress-title"><i class="fab fa-css3-alt"></i>CSS3</p>
          <div class="progress">
            <div class="progress-bar scale-up-hor-left progress-bar-striped bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="web-progress-title"><i class="fab fa-bootstrap"></i>Bootstrap</p>
          <div class="progress">
            <div class="progress-bar scale-up-hor-left progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="web-progress-title"><i class="fab fa-php"></i>PHP</p>
          <div class="progress">
            <div class="progress-bar scale-up-hor-left progress-bar-striped bg-warning" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>

      </div>
    </div>
  </section>
  <!-- Fin de parcours -->

  <!-- Compétences-->

  <section id="parcours" class="container-fluid">
    <div class="row justify-content-center">
      <div class="formation-box order-2 order-sm-1 col-sm-4 ml-sm-2 pt-5 pb-4 pl-4 pl-lg-5 col-lg-2">
        <h5 class="mb-4">Formations</h5>
        <p><span class="formation">Simplon</span><br>Charleville-Mézières<br>2020</p>
        <p><span class="formation">Visual Merchandiser</span><br>Manchester, UK<br>2017</p>
      </div>
      <div class="formation-hist order-sm-2 col-sm-5 ml-sm-2 pt-sm-1 pl-4 pl-sm-5 pr-4 pr-sm-0 mb-4 mb-sm-0 col-lg-4 align-self-center">
        <h2 class="mb-5 mb-sm-0">Un bout de mon parcours</h2>
        <h5 class="mt-sm-5 mb-4">Prés de 10 ans dans la vente</h5>
        <p class="text-justify">Au cours de ces années, j'ai eu la chance de former un bon nombre de mes nouveaux
          collègues, étant devenu trainer. J'ai participé à l'ouverture d'un autre magasin et à la réouverture du nôtre.
          C'est également là que je découvre le côté visuel du métier (implémentation de la nouvelle marchandise,
          réorganisation du rayon, mise en place déco, etc...)
          Mais au bout de quelques années dans le même magasin et la même ville... et le même pays, j'ai eu besoin de
          changement.</p>
        <h5 class="mt-sm-5 mb-4 text-justify">Direction : Londres !</h5>
        <p class="text-justify">J'ai retrouver un emploi chez H&M. Je n'ai jamais travaillé au sein d'une équipe plus
          internationalle que celle qui m'ait accompagnée durant ces 3 années. J'ai eu l'opportunité d'évoluer Visual
          Merchandiser.</p>
      </div>
    </div>
  </section>

  <!-- Fin de compétences-->

  <!-- Projets -->

  <section id="projets" class="container-fluid">
    <div class="container">
      <div class="row mb-5">
        <div class="h2-box mx-auto text-center">
          <h2 class="">Projets</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="card-columns">
        <a href="https://poucet.simplon-charleville.fr/simplon-voyages/" class="card" target="_blank">
          <div class="card-img">
            <img src="ressources\capture-projets\p_simplon_voyage.png" class="card-img-top" alt="cpture d'écran simplon voyages">
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Simplon Voyages</h5>
            <p class="card-text">Réalisation d'une maquette et dévelopement d'une interface web statique en réponse à
              une demande de site de voyage en ligne.</p>
            <div id="tag">
              <p class="card-text"><small class="tag maquette">Maquettage</small></p>
              <p class="card-text"><small class="tag entreprise">Projet d'entreprise</small></p>
            </div>
            <i class="fas fa-external-link-alt"></i>
          </div>
        </a>
        <a href="https://poucet.simplon-charleville.fr/vitrine-simplon/" target="_blank">
          <div class="card">
            <div class="card-img">
              <img src="ressources\capture-projets\p_simplon.png" class="card-img-top" alt="portfolio website2">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Simplon Charleville-Mézières</h5>
              <p class="card-text">Réalisation d'une maquette et dévelopement d'un site vitrine pour Charleville-Mézières.</p>
              <!-- La page d'accueil fut retenue sur le projet final, disponible à <a href="https://simplon-charleville.fr/"><span>cette adresse</span></a> -->
              <div id="tag">
                <p class="card-text"><small class="tag maquette">Maquettage</small></p>
                <p class="card-text"><small class="tag vitrine">Site vitrine</small></p>
                <p class="card-text"><small class="tag equipe">Projet en équipe</small></p>
              </div>
              <i class="fas fa-external-link-alt"></i>
            </div>
          </div>
        </a>
        <a href="https://poucet.simplon-charleville.fr/historique/" target="_blank">
          <div class="card">
            <div class="card-img">
              <img src="ressources\capture-projets\p_historique.png" class="card-img-top" alt="portfolio website2">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Historique</h5>
              <p class="card-text">Réalisation d'une maquette et dévelopement d'un site en partenariat avec Ardennes Métropole, le CNRS, Le CNIL et la région Grand-Est.<br>Le but étant d'exploiter des données collectées aux XVIII et XIXème siècles concernant la ville et les habitants de Charleville-Mézières.</p>
              <div id="tag">
                <p class="card-text"><small class="tag maquette">Maquettage</small></p>
                <p class="card-text"><small class="tag vitrine">Site vitrine</small></p>
                <p class="card-text"><small class="tag equipe">Projet en équipe</small></p>
              </div>
              <i class="fas fa-external-link-alt"></i>
            </div>
          </div>
        </a>
        <a href="https://poucet.simplon-charleville.fr/reproduire/" target="_blank">
          <div class="card">
            <div class="card-img">
              <img src="ressources\capture-projets\p_reproduction.png" class="card-img-top" alt="portfolio website2">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Reproduction</h5>
              <p class="card-text">Reproduction d'un site existant.</p>
              <div id="tag">
              </div>
              <i class="fas fa-external-link-alt"></i>
            </div>
          </div>
        </a>
      </div>
  </section>

  <!-- Fin projets -->

  <!-- Tips -->
  <div id="parallax">
    <div id="tips" class="container">
      <div class="row justify-content-start pt-md-5 pb-md-5">
        <section class="col-sm-6 pl-sm-5 pl-4 bg-transparent">
          <h2 class="mb-4 mb-sm-3">Tips</h2>
          <a href="tips.php">
            <div class="card w-75 mt-4 mb-4">
              <div class="card-body">
                <h5 class="card-title">Les positions CSS</h5>
                <p class="card-text">Il existe cinq mots-clés que l'on peut utiliser avec la propriété CSS. Attardons-nous sur trois d'entre elles.<br><u>Lire
                    la suite...</u></p>
              </div>
            </div>
          </a>
          <div class="card w-75 mt-4 mb-4">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.<br><u>Lire la
                  suite...</u></p>
            </div>
          </div>
          <div class="card w-75 mt-4 mb-4">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.<br><u>Lire la
                  suite...</u></p>
            </div>
          </div>
          <div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- Tips -->

  <!-- Footer -->
  <?php include 'footer.php' ?>
  <!-- Fin de Footer -->

  <!-- Optional JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script src="js/scroll-to-anchor.js"></script>
  <script src="js/top-btn.js"></script>


</body>

</html>