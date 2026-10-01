<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mairie de Hamady Hounaré</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            margin:0;
            padding:0;
        }

        /* ================= TOP BAR ================= */
        .top-bar{
            background: linear-gradient(90deg, #004FA4, #003B7A);
            color:white;
            text-align:center;
            padding:10px;
            font-weight:bold;
            font-size:18px;
        }

        /* ================= HEADER ================= */
        .header{
            background:#fff;
            padding:20px 0;
        }

        .logo{
            width:100px;
            height:100px;
            object-fit:contain;
        }

        /* ================= INFOS ================= */
        .info-item{
            display:flex;
            align-items:center;
        }

        .info-item i{
            color:#004FA4;
            font-size:35px;
            margin-right:12px;
        }

        .info-item strong{
            display:block;
            color:#003B7A;
            font-size:17px;
        }

        .info-item span{
            font-size:14px;
            color:#555;
        }

        /* ================= MENU ================= */
        .navbar{
    padding:0;
    background: linear-gradient(90deg, #004FA4, #003B7A) !important;

    position: sticky;
    top:0;
    z-index:1000;
}

        .navbar-nav .nav-link{
            color:white !important;
            font-weight:600;
            padding:10px 18px;
            font-size:15px;
        }

        .navbar-nav .nav-link:hover{
            background:#002f5f;
            border-radius:4px;
        }

        /* dropdown */
        .dropdown-menu{
            border-radius:0;
            border:none;
            box-shadow:0 4px 10px rgba(0,0,0,0.2);
        }

        .dropdown-item:hover{
            background:#002f5f;
            color:white;
        }

        html {
    scroll-behavior: smooth;
}
.tab-section {
    display: none;
}


.card{
    border:2px solid #004FA4;
    border-radius:15px;
    transition:0.3s;
    cursor:pointer;
}

.card i{
    color:#004FA4;
}

.card h4{
    color:#004FA4;
}

.card:hover{
    background:linear-gradient(90deg, #004FA4, #003B7A);
    color:white;
    transform:translateY(-8px);
}

.card:hover h4{
    color:white;
}

.card:hover i{
    color:white;
}

.table thead th{
    background: linear-gradient(90deg,#004FA4,#003B7A);
    color:#fff;
    text-align:center;
    vertical-align:middle;
}

.table td{
    text-align:center;
    vertical-align:middle;
}

.table tbody tr:hover{
    background:#eef6ff;
}

/* ===== FORCE COULEUR ICONES COMMISSIONS ===== */

#commissions i.fas,
#commissions i.fa-solid,
#commissions .commission-icon {
    color: white !important;
}


/* Quand la souris passe sur l'icône */
#commissions i.fas:hover,
#commissions i.fa-solid:hover,
#commissions .commission-icon:hover {
    color: #0d6efd !important;
}

.commission-card{
    border-radius:18px;
    transition:.4s;
}

.commission-card:hover{
    transform:translateY(-8px);
    box-shadow:0 12px 30px rgba(0,0,0,.2)!important;
}

.commission-icon{
    width:90px;
    height:90px;
    margin:auto;
    border-radius:50%;
    background:linear-gradient(90deg,#004FA4,#003B7A);
    display:flex;
    justify-content:center;
    align-items:center;
}

.commission-icon i{
    color:white;
    font-size:40px;
}

.commission-card .btn{
    background:#004FA4;
    border:none;
}

.commission-card .btn:hover{
    background:#003B7A;
}

/* Conteneur de la bannière */
.banner-container {
    position: relative;
    overflow: hidden;
}

/* Texte sur l'image */
.banner-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90%;
    text-align: center;
    color: white;
}


/* Style des textes */
.text-animation {
    position: absolute;
    width: 100%;
    font-size: 35px;
    font-weight: bold;
    text-shadow: 2px 2px 5px #000;
}


/* Premier texte */
.text1 {
    animation: premierTexte 8s infinite;
}


/* Deuxième texte */
.text2 {
    animation: deuxiemeTexte 8s infinite;
}


/* Animation texte 1 */
@keyframes premierTexte {

    0% {
        opacity: 0;
        transform: translateX(-100%);
    }

    15% {
        opacity: 1;
        transform: translateX(0);
    }

    40% {
        opacity: 1;
        transform: translateX(0);
    }

    50% {
        opacity: 0;
        transform: translateX(100%);
    }

    100% {
        opacity: 0;
    }
}


/* Animation texte 2 */
@keyframes deuxiemeTexte {

    0%,45% {
        opacity: 0;
        transform: translateX(-100%);
    }

    60% {
        opacity: 1;
        transform: translateX(0);
    }

    85% {
        opacity: 1;
        transform: translateX(0);
    }

    100% {
        opacity: 0;
        transform: translateX(100%);
    }
}

#presentation img{
    max-width:230px;
    border-radius:50%;
    background:#fff;
    padding:10px;
    box-shadow:0 8px 25px rgba(0,0,0,.15);
    transition:0.3s;
}

#presentation img:hover{
    transform:scale(1.05);
}

#bannerCarousel {
    width: 100%;
    overflow: hidden;
}

#bannerCarousel .carousel-item {
    position: relative;
}

#bannerCarousel .banner-image {
    width: 100%;
    height: 350px;
    object-fit: fill;
    display: block;
}
#bannerCarousel .banner-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90%;
    text-align: center;
    z-index: 10;
}

#bannerCarousel .banner-text h1 {
    color: white;
    font-size: 32px;
    font-weight: bold;
    text-shadow: 2px 2px 5px rgba(0,0,0,0.8);
}
    </style>

</head>

<body>

<!-- ================= TOP BAR ================= -->
<div class="top-bar">
    Bienvenue sur le site officiel de la Mairie de Hamady Hounaré
</div>

<!-- ================= HEADER ================= -->
<div class="header shadow-sm">

    <div class="container">

        <div class="row align-items-center">
<!-- LOGO -->
<div class="col-lg-2 text-center">
    <img src="images/image.png"
         alt="Logo de la mairie"
         style="
            width:120px;
            height:auto;
            border-radius:50%;
            display:block;
            margin:auto;
         ">
</div>

            <!-- INFOS -->
            <div class="col-lg-10">

                <div class="row">

                    <!-- GAUCHE -->
                    <div class="col-md-6">

                        <div class="info-item mb-4">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Adresse</strong>
                                <span>Quartier Fass, en face de la RN2</span>
                            </div>
                        </div>

                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email</strong>
                                <span>mairieounare2@gmail.com</span>
                            </div>
                        </div>

                    </div>

                    <!-- DROITE -->
                    <div class="col-md-6">

                        <div class="info-item mb-4">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Horaires</strong>
                                <span>Lundi - Vendredi : 08h00 - 18h00</span><br>
                                <span>Samedi - Dimanche : Fermé</span>
                            </div>
                        </div>

                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Téléphone</strong>
                                <span>+221 77 515 99 15</span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- ================= MENU ================= -->
<nav class="navbar navbar-expand-lg navbar-dark">

    <div class="container-fluid px-0">

        <button class="navbar-toggler ms-3"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="menu">

            <ul class="navbar-nav w-100 d-flex justify-content-between px-5 text-center">

               <li class="nav-item dropdown flex-fill">

    <a class="nav-link dropdown-toggle text-center"
       href="#"
       role="button"
       data-bs-toggle="dropdown"
       aria-expanded="false">
        Accueil
    </a>

    <ul class="dropdown-menu">
<a class="dropdown-item" href="#" onclick="showSection('presentation')">
    Présentation
</a>

<a class="dropdown-item" href="#" onclick="showSection('mot-du-maire')">
    Mot du Maire
</a>
    <li>
    <a class="dropdown-item"
       href="#"
       onclick="showSection('organigramme')">
        Organisation administrative
    </a>
</li>

     <li>
    <a class="dropdown-item"
       href="#"
       onclick="showSection('services')">
        Nos services
    </a>
</li>

      <li>
    <a class="dropdown-item"
       href="#stagesRecrutements"
       onclick="showSection('stagesRecrutements'); return false;">
        Stages et recrutements
    </a>
</li>

    </ul>

</li>

                <li class="nav-item dropdown flex-fill">

    <a class="nav-link dropdown-toggle text-center"
       href="#"
       role="button"
       data-bs-toggle="dropdown"
       aria-expanded="false">
        Conseil Municipal
    </a>

    <ul class="dropdown-menu">

        <li>
          <a class="dropdown-item"
   href="#"
   onclick="showSection('elus')">
    Bureau Municipal
</a>
        </li>

        <li>
          <li>
    <a class="dropdown-item"
       href="#"
       onclick="showSection('conseillers-municipaux')">
        Conseillers municipaux
    </a>
</li>
        </li>

       <li>
    <a class="dropdown-item" href="#"
       onclick="showSection('commissions')">
        Les commissions techniques
    </a>
</li>

        <li>
            <a class="dropdown-item" href="#">
                Les délibérations
            </a>
        </li>

       <li>
    <a class="dropdown-item"
       href="#"
       onclick="showSection('arretes'); return false;">
        Arrêtés
    </a>
</li>

    </ul>

</li>
<li class="nav-item dropdown flex-fill">

    <a class="nav-link dropdown-toggle text-center"
       href="#"
       role="button"
       data-bs-toggle="dropdown"
       aria-expanded="false">
        Partenariats et Projets
    </a>

    <ul class="dropdown-menu">


       <li>
    <a class="dropdown-item"
       href="#"
       onclick="showSection('projets')">
        Les Projets
    </a>
</li>
       <li>
    <a class="dropdown-item" href="#" onclick="showSection('partenaires')">
        Les partenaires
    </a>
</li>

    </ul>

</li>

                <li class="nav-item dropdown flex-fill">

    <a class="nav-link dropdown-toggle text-center"
       href="#"
       role="button"
       data-bs-toggle="dropdown"
       aria-expanded="false">
        Économie
    </a>

    <ul class="dropdown-menu">
<li>
    <a class="dropdown-item" href="#"
       onclick="showSection('commerce')">
        Commerce
    </a>
</li>

       <li>
    <a class="dropdown-item" href="#"
       onclick="showSection('artisanat')">
        Artisanat
    </a>
</li>
<li>
    <a class="dropdown-item" href="#"
       onclick="showSection('elevage')">
        Élevage
    </a>
</li>

     <li>
    <a class="dropdown-item" href="#"
       onclick="showSection('agriculture-economie')">
        Agriculture
    </a>
</li>

    <li>
    <a class="dropdown-item" href="#"
       onclick="showSection('peche')">
        Pêche
    </a>
</li>   

    </ul>

</li>

                <li class="nav-item dropdown flex-fill">

    <a class="nav-link dropdown-toggle text-center"
       href="#"
       role="button"
       data-bs-toggle="dropdown"
       aria-expanded="false">
        Social et Culture
    </a>

    <ul class="dropdown-menu">

       <li>
    <a class="dropdown-item" href="#"
       onclick="showSection('sante')">
        Santé
    </a>
</li>

      <li>
    <a class="dropdown-item" href="#"
       onclick="showSection('education-social')">
        Éducation
    </a>
</li>
<li>
    <a class="dropdown-item" href="#"
       onclick="showSection('jeunesse-sport')">
        Jeunesse et Sport
    </a>
</li>

        <li>
            <a class="dropdown-item" href="#">
                Promotion de la Femme
            </a>
        </li>

      <li>
    <a class="dropdown-item" href="#"
       onclick="showSection('culture-social')">
        Culture
    </a>
</li>

        
       <li>
    <a class="dropdown-item" href="#"
       onclick="showSection('autres-social')">
        Autres activités sociales
    </a>
</li>

    </ul>

</li>
                <li class="nav-item dropdown flex-fill">

    <a class="nav-link dropdown-toggle text-center"
       href="#"
       role="button"
       data-bs-toggle="dropdown"
       aria-expanded="false">
        Environnement
    </a>

    <ul class="dropdown-menu">

      
      <li>
    <a class="dropdown-item" href="#"
       onclick="showSection('hydraulique')">
        Hydraulique et assainissement
    </a>
</li>

      <li>
    <a class="dropdown-item" href="#"
       onclick="showSection('environnement')">
        Environnement et cadre de vie
    </a>
</li>

        

       
        <li>
    <a class="dropdown-item" href="#"
       onclick="showSection('urbanisme-habitat')">
        Urbanisme et habitat
    </a>
</li>

       

    </ul>

</li>
               <li class="nav-item flex-fill">
    <a class="nav-link"
       href="#actualite"
       onclick="showSection('actualite'); return false;">
        Actualités
    </a>
</li>

            </ul>

        </div>

    </div>

</nav>

<!-- ================= IMAGE SOUS LE MENU ================= -->

<div id="bannerCarousel" class="carousel slide">

    <div class="carousel-inner">

        <!-- IMAGE 1 -->
        <div class="carousel-item active">

            <img src="{{ asset('images/banner.png') }}"
                 class="d-block w-100 banner-image"
                 alt="Bannière mairie">

            <div class="banner-text">
                <h1>
                    Bienvenue sur le site officiel de la Mairie de Hamady Hounaré
                </h1>
            </div>

        </div>

        <!-- IMAGE 2 -->
        <div class="carousel-item">

            <img src="{{ asset('images/banner2.png') }}"
                 class="d-block w-100 banner-image"
                 alt="Bannière mairie">

            <div class="banner-text">
                <h1>
                    Ensemble pour un développement durable et inclusif
                </h1>
            </div>

        </div>

    </div>

</div>
<section id="presentation" class="tab-section py-5">

    <div class="container">

        <div class="row align-items-center">
<!-- Logo -->
<div class="col-lg-3 text-center mb-4 mb-lg-0">
    <img src="{{ asset('images/image.png') }}"
         alt="Logo de la Commune"
         class="img-fluid shadow"
         style="max-width:250px;">
</div>

            <!-- Présentation -->
            <div class="col-lg-9">

                <h2 class="mb-4 text-primary fw-bold text-center">
                    Présentation de la Commune de Hamady Hounaré
                </h2>

                <p style="text-align:justify; line-height:1.9;">
                    La Commune de <strong>Hamady Hounaré</strong> est une collectivité territoriale située dans le département de Kanel, dans la région de Matam, au nord-est du Sénégal. Elle constitue un territoire à fort potentiel économique, culturel et humain, où les valeurs de solidarité, de travail et de cohésion sociale occupent une place essentielle dans la vie quotidienne des populations.

                    Grâce à ses importantes ressources naturelles et à sa position géographique, la commune dispose d'atouts majeurs pour le développement de l'agriculture, de l'élevage, du commerce et des activités génératrices de revenus. La jeunesse, les femmes, les producteurs et les acteurs économiques locaux contribuent activement au dynamisme et au développement du territoire.

                    La municipalité s'engage à offrir des services publics de qualité et à améliorer durablement les conditions de vie des habitants. Son action est orientée vers le renforcement des infrastructures de base, l'amélioration de l'accès à l'eau potable, à l'éducation et à la santé, la promotion de l'emploi, la valorisation des ressources locales ainsi que la protection de l'environnement.

                    Dans une démarche de gouvernance participative, la Commune de Hamady Hounaré place la transparence, la bonne gestion et le dialogue avec les citoyens au cœur de son action. Elle travaille en étroite collaboration avec les services de l'État, les partenaires techniques et financiers, les organisations communautaires, les associations de jeunes et de femmes, ainsi que l'ensemble des acteurs du développement local.

                    Fière de son identité, de son patrimoine et de son potentiel, la Commune de Hamady Hounaré ambitionne de devenir un territoire moderne, attractif et résilient, offrant à chaque citoyen les conditions d'un développement harmonieux et durable.
                </p>

            </div>

        </div>

    </div>

</section>

</section>
<!-- ================= MOT DU MAIRE ================= -->


<section id="mot-du-maire" class="tab-section py-5 bg-light">

    <div class="container">

        <div class="row align-items-center">

            <!-- Photo du Maire -->
            <div class="col-lg-4 text-center mb-4">

                <img src="{{ asset('images/kane.png') }}"
                     class="img-fluid rounded shadow"
                     style="max-width:320px;"
                     alt="Photo du Maire">

                <h4 class="mt-3 text-primary">
                    Monsieur le Maire
                </h4>

                <p class="text-muted">
                  Amadou Samba Kane
                </p>

            </div>

            <!-- Message -->
            <div class="col-lg-8">

                <h2 class="mb-4 text-primary fw-bold">
                    Mot du Maire
                </h2>

                <p style="text-align:justify; line-height:1.9;">

                    Chères habitantes, chers habitants de la Commune de
                    <strong>Hamady Hounaré</strong>,

                    <br><br>

                    Notre commune tire sa force de son histoire, de la richesse de son patrimoine, de ses terres fertiles, de son potentiel agropastoral et de l'engagement de ses populations. Chaque jour, avec l'ensemble de l'équipe municipale, nous œuvrons pour améliorer les conditions de vie de nos concitoyens, renforcer les services de proximité et promouvoir un développement local durable, inclusif et équitable.

                    <br><br>

                    Nos priorités sont claires : améliorer l'accès à l'eau potable, à l'éducation et aux soins de santé, développer les infrastructures de base, soutenir l'agriculture, l'élevage, le commerce et l'entrepreneuriat local, tout en favorisant l'emploi des jeunes, l'autonomisation des femmes et la préservation de notre environnement.

                    <br><br>

                    Ce site internet a été conçu comme un espace d'information, de dialogue et de transparence. Vous y trouverez les actualités de la commune, les projets et programmes de développement, les réalisations de la municipalité, ainsi que les informations et services utiles destinés aux citoyens, aux partenaires et aux investisseurs.

                    <br><br>

                    Ensemble, avec l'implication de toutes les forces vives de notre territoire, poursuivons la construction d'une Commune de Hamady Hounaré moderne, prospère, solidaire et résolument tournée vers l'avenir.

                    <br><br>

                    <strong>Bienvenue sur le site officiel de la Commune de Hamady Hounaré.</strong>

                </p>

                <div class="mt-4">
                    <h5 class="fw-bold text-primary">Le Maire</h5>
                    <h4 class="fw-bold">
                        ......................................
                    </h4>
                </div>

            </div>

        </div>

    </div>

    

</section>


<!-- ================= NOS SERVICES ================= -->

<section id="services" class="tab-section py-5">

    <div class="container">

       <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
    Nos Services
</h2>

        <div class="row justify-content-center">

            <!-- Service Administratif -->
            <div class="col-md-5 mb-4">

               <a href="#"
   class="text-decoration-none"
   onclick="showSection('service-admin')">

                    <div class="card shadow border-0 text-center p-4 h-100">

                        <i class="fas fa-building fa-4x text-primary mb-3"></i>

                        <h4 class="fw-bold">
                            SERVICE ADMINISTRATIF
                            <br>
                            ET FINANCIER
                        </h4>

                    </div>

                </a>

            </div>

            <!-- SERVICE DE RECOUVREMENT -->
            <div class="col-md-5 mb-4">

              <a href="#"
   class="text-decoration-none"
   onclick="showSection('recouvrement')">

                    <div class="card shadow border-0 text-center p-4 h-100">

                        <i class="fas fa-id-card fa-4x text-primary mb-3"></i>

                        <h4 class="fw-bold">
                            SERVICE DE
                            <br>
                           RECOUVREMENT
                        </h4>

                    </div>

                </a>

            </div>

            <!-- Etat Civil -->
            <div class="col-md-5 mb-4">

              <a href="#"
   class="text-decoration-none"
   onclick="showSection('etat-civil')">

                    <div class="card shadow border-0 text-center p-4 h-100">

                        <i class="fas fa-id-card fa-4x text-primary mb-3"></i>

                        <h4 class="fw-bold">
                            SERVICE DE
                            <br>
                            L'ÉTAT CIVIL
                        </h4>

                    </div>

                </a>

            </div>

        <!-- SERVICE TECHNIQUES -->
            <div class="col-md-5 mb-4">

              <a href="#"
   class="text-decoration-none"
   onclick="showSection('techniques')">

                    <div class="card shadow border-0 text-center p-4 h-100">

                        <i class="fas fa-id-card fa-4x text-primary mb-3"></i>

                        <h4 class="fw-bold">
                            SERVICE DE
                            <br>
                         TECHNIQUES
                        </h4>

                    </div>

                </a>

            </div>

        </div>

    </div>

</section>

<section id="service-admin" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center section-title mb-5">
            Service Administratif et Financier
        </h2>

        <div class="row">

            <!-- Mission -->
            <div class="col-md-4 mb-4">

                <div class="card shadow h-100">

                    <div class="card-body">

                        <h3 class="text-center mb-4">
                            <i class="fas fa-bullseye"></i><br>
                            MISSION
                        </h3>

                        <p style="text-align:justify;">
                          Traitement et classement des documents administratifs et financiers 
                        </p>

                    </div>

                </div>

            </div>

            <!-- Activités -->
            <div class="col-md-4 mb-4">

                <div class="card shadow h-100">

                    <div class="card-body">

                        <h3 class="text-center mb-4">
                            <i class="fas fa-list-check"></i><br>
                            ACTIVITÉS
                        </h3>

                        <ul>
                            <li>Participation à l’elaboration du budget</li>
                            <li>Elaboration du compte admoinistratif</li>
                            <li>Elaboration des contrats du personnel</li>
                            <li>Traitement des salaires des agents permanents et temporaires</li>
                            <li>Engagement et liquidation des facteures</li>
                            <li>Classement des documents comptable et administratifs.</li>
                        </ul>

                    </div>

                </div>

            </div>

            <!-- Projets -->
            <div class="col-md-4 mb-4">

                <div class="card shadow h-100">

                    <div class="card-body">

                        <h3 class="text-center mb-4">
                            <i class="fas fa-diagram-project"></i><br>
                            PROJETS EN COURS
                        </h3>

                       

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= SERVICE ETAT CIVIL ================= -->

<section id="etat-civil" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center section-title mb-5">
            Service de l'État Civil
        </h2>

        <div class="row">

            <!-- Mission -->
            <div class="col-md-4 mb-4">

                <div class="card shadow h-100">

                    <div class="card-body">

                        <h3 class="text-center mb-4">
                            <i class="fas fa-bullseye"></i><br>
                            MISSION
                        </h3>

                        <p style="text-align:justify;">
      <li> Assurer les enregistrements exhaustifs des naissances, mariages et des décès </li>
 <li>Conserver et délivrer es copies des informations relatives aux événements liés à l’état civil.</li>
                        </p>

                    </div>

                </div>

            </div>

            <!-- Activités -->
            <div class="col-md-4 mb-4">

                <div class="card shadow h-100">

                    <div class="card-body">

                        <h3 class="text-center mb-4">
                            <i class="fas fa-list-check"></i><br>
                            ACTIVITÉS
                        </h3>

                        <ul>

                            <li>Securiser les documents afin de limiter les faux</li>

                            <li>Ameliorer la conservation des actes</li>

                            <li>Delivrer Extraits de naissance</li>

                            <li>Délivrance Bulletin de naissance</li>

                            <li>Copie littérale de naissance</li>

                            <li>Certificat de mariage</li>

                            <li>Certificat de divorce</li>

                            <li>Certificat de résidence</li>

                            <li>Certificat de vie individuelle</li>

                            <li>Certificat de vie collective</li>

                            <li>Certificat de non remariage</li>

                            <li>Certificat de non divorce</li>

                            <li>Certificat de non séparation de corps</li>

                            <li>Copie littérale de mariage</li>

                            <li>Acte de décès</li>
                              <li>Permis d’inhumé</li>

                        </ul>

                    </div>

                </div>

            </div>

            <!-- Projets -->
            <div class="col-md-4 mb-4">

                <div class="card shadow h-100">

                    <div class="card-body">

                        <h3 class="text-center mb-4">
                            <i class="fas fa-diagram-project"></i><br>
                            PROJETS EN COURS
                        </h3>

                        <ul>

                            <li>Informatisation de l’état civil (modernisation)</li>

                           

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= SERVICE RECOUVREMENT ================= -->

<section id="recouvrement" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center section-title mb-5">
            Service de Recouvrement
        </h2>

        <div class="row">

            <!-- Mission -->
            <div class="col-md-4 mb-4">

                <div class="card shadow h-100">

                    <div class="card-body">

                        <h3 class="text-center mb-4">
                            <i class="fas fa-bullseye"></i><br>
                            MISSION
                        </h3>

                        <p style="text-align:justify;">
                          Collecte des taxes
                        </p>

                    </div>

                </div>

            </div>

            <!-- Activités -->
            <div class="col-md-4 mb-4">

                <div class="card shadow h-100">

                    <div class="card-body">

                        <h3 class="text-center mb-4">
                            <i class="fas fa-list-check"></i><br>
                            ACTIVITÉS
                        </h3>

                        <ul>
                            <li>Délivrer des quittance de paiement</li>
                            <li> Délivrer des déclarations annuelles de publicités</li>
                            <li>Récupérer les patentes</li>
                           
                        </ul>

                    </div>

                </div>

            </div>

            <!-- Programmes -->
            <div class="col-md-4 mb-4">

                <div class="card shadow h-100">

                    <div class="card-body">

                        <h3 class="text-center mb-4">
                            <i class="fas fa-diagram-project"></i><br>
                            PROJET EN COURS
                        </h3>

                        <ul>
                            <li>mise en place d’une application afin d’optimiser les opérations.</li>
                           
                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= SERVICE TECHNIQUES ================= -->

<section id="techniques" class="tab-section py-5 bg-light">

    <div class="container">

        <h2 class="text-center section-title mb-5">
            Service Techniques
        </h2>

        <div class="row">

            <!-- Mission -->
            <div class="col-md-4 mb-4">

                <div class="card shadow h-100">

                    <div class="card-body">

                        <h3 class="text-center mb-4">
                            <i class="fas fa-bullseye"></i><br>
                            MISSION
                        </h3>

                        <p style="text-align:justify;">
                          Promouvoir une gestion rigoureuse de l’espace qui soit bénéfique pour les populations
                        </p>

                    </div>

                </div>

            </div>

            <!-- Activités -->
            <div class="col-md-4 mb-4">

                <div class="card shadow h-100">

                    <div class="card-body">

                        <h3 class="text-center mb-4">
                            <i class="fas fa-list-check"></i><br>
                            ACTIVITÉS
                        </h3>

                        <ul>
                            <li> Nettoiement</li>
                            <li>Désencombrement</li>
                            <li>Eclairage public</li>
                            <li> Habitat</li>
                            <li>Assainissement</li>
                             <li>Voirie</li>
                        </ul>

                    </div>

                </div>

            </div>

            <!-- Programmes -->
            <div class="col-md-4 mb-4">

                <div class="card shadow h-100">

                    <div class="card-body">

                        <h3 class="text-center mb-4">
                            <i class="fas fa-diagram-project"></i><br>
                            PROGRAMMES EN COURS
                        </h3>

                        <ul>
                            <li>Réhabilitation du centre de santé de Hamady Hounare</li>
                            <li>Réhabilitation de l’éclairage public</li>
                            <li>Construction du foyer des jeunes</li>
                             <li>Construction d’une chambre froide</li>
                              <li>Construction de la maison des femmes (à l’étude)</li>
                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- ================= ORGANIGRAMME ADMINISTRATIF ================= -->

<section id="organigramme" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center text-primary fw-bold mb-5">
            Organigramme Administratif
        </h2>

        <div class="text-center">

            <img src="{{ asset('images/Organigramme.png') }}"
                 class="img-fluid shadow rounded"
                 alt="Organigramme Administratif">

        </div>

    </div>

</section>

<!-- ================= LES ELUS ================= -->

<section id="elus" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-4" style="color:#004FA4;">
            Les Élus du Bureau Municipal
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="text-center text-white"
                       style="background:linear-gradient(90deg,#004FA4,#003B7A);">

                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Statut</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td class="text-center">1</td>
                        <td>KANE</td>
                        <td>Amadou Samba</td>
                        <td>Maire</td>
                        <td>Hamady Hounaré</td>
                        <td>77 7 40 15 15</td>
                        <td>amadousambakane@gmail.com</td>
                    </tr>

                    <tr>
                        <td class="text-center">2</td>
                        <td>DIAGANA</td>
                        <td>Hadya</td>
                        <td>Premier Adjoint au Maire</td>
                        <td>Hamady Hounaré</td>
                        <td>77 2 92 25 29 </td>
                        <td>diaganah@yahoo.fr</td>
                    </tr>

                    <tr>
                        <td class="text-center">3</td>
                        <td>CAMARA</td>
                        <td>Djibril</td>
                        <td>Deuxième Adjoint au Maire</td>
                        <td>Hamady Hounaré</td>
                        <td>77 7 06 89 39</td>
                        <td>djibrilcamara016@gmail.com</td>
                    </tr>

                    <tr>
                        <td class="text-center">4</td>
                        <td>SARRE</td>
                        <td>Aminata Mamadou</td>
                        <td>Troisième Adjointe au Maire</td>
                        <td>Hamady Hounaré</td>
                        <td>77 9 09 57 87</td>
                        <td>toutysarre@icloud.com</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ================= CONSEILLERS MUNICIPAUX ================= -->

<section id="conseillers-municipaux" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold text-primary mb-4">
            Les Conseillers Municipaux
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="text-center text-white"
                       style="background:linear-gradient(90deg,#004FA4,#003B7A);">

                    <tr>
                        <th style="width:60px;">N°</th>
                        <th style="width:100px;">Civilité</th>
                        <th style="width:170px;">Nom</th>
                        <th style="width:170px;">Prénom</th>
                        <th style="width:140px;">Statut</th>
                        <th style="width:180px;">Adresse</th>
                        <th style="width:160px;">Téléphone</th>
                        <th style="width:220px;">Email</th>
                    </tr>

                </thead>

                <tbody>

                    <!-- 1 à 46 -->

                    <tr><td>1</td><td>MM</td><td>BA</td><td>Houleye</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 9 60 82 99</td><td></td></tr>
                    <tr><td>2</td><td>MM</td><td>BA</td><td>Khady</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 5 88 00 06</td><td></td></tr>
                    <tr><td>3</td><td>M</td><td>BADIAGA</td><td>Mamadou</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 5 62 41 69</td><td></td></tr>
                    <tr><td>4</td><td>M</td><td>BARRY</td><td>Mamadou</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 2 70 56 24</td><td></td></tr>
                    <tr><td>5</td><td>M</td><td>CAMARA</td><td>Djibril</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 7 06 89 39</td><td>djibrilcamara016@gmail.com</td></tr>
                    <tr><td>6</td><td>MM</td><td>COULIBALY</td><td>Dieynaba Samba</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 4 05 74 53</td><td></td></tr>
                    <tr><td>7</td><td>MM</td><td>DEME</td><td>Dieynaba</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 9 69 48 93</td><td></td></tr>
                    <tr><td>8</td><td>M</td><td>DIA</td><td>Abdoulaye Moussa</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 2 87 65 29</td><td></td></tr>
                    <tr><td>9</td><td>M</td><td>DIAGANA</td><td>HADYA</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 2 92 25 24</td><td>diaganah@yahoo.fr</td></tr>
                    <tr><td>10</td><td>M</td><td>DIALLO</td><td>Mousphata</td><td>Conseiller</td><td>Hamady Hounaré</td></td><td>77 4 38 68 44</td><td></td></tr>

                    <tr><td>11</td><td>MM</td><td>DIARRA</td><td>Aminata</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 5 23 10 17</td><td></td></tr>
                    <tr><td>12</td><td>M</td><td>DIAW</td><td>Abdoulaye</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 6 15 64 27</td><td></td></tr>
                    <tr><td>13</td><td>MM</td><td>DIAWARA</td><td>Coumba</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 4 58 46 27</td><td></td></tr>
                    <tr><td>14</td><td>M</td><td>DIAWARA</td><td>Djibril</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 1 06 66 13</td><td></td></tr>
                    <tr><td>15</td><td>MM</td><td>DIONG</td><td>Dieynaba</td><td>Conseillere</td><td>Hamady Hounaré</td><td></td><td></td></tr>
                    <tr><td>16</td><td>M</td><td>DIONGUE</td><td>Amadou</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 0 59 79 44</td><td></td></tr>
                    <tr><td>17</td><td>MM</td><td>DIONGUE</td><td>Dieynaba</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 4 32 80 68</td><td></td></tr>
                    <tr><td>18</td><td>M</td><td>DIOP</td><td>Aboubacry</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 7 74 86 22</td><td></td></tr>
                    <tr><td>19</td><td>M</td><td>DIOUM</td><td>Adama</td><td>Conseiller</td><td>Hamady Hounaré</td><td>78 4 68 77 22</td><td></td></tr>
                    <tr><td>20</td><td>MM</td><td>GUISSE</td><td>Lao Mamadou</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 3 52 40 65</td><td></td></tr>

                    <tr><td>21</td><td>M</td><td>KANE</td><td>Amadou Samba</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 7 40 15 15</td><td>amadousambakane@gmail.com</td></tr>
                    <tr><td>22</td><td>M</td><td>KANTE</td><td>Ibrahima Oumar</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 0 50 48 56</td><td>kanteb9@gmail.com</td></tr>
                    <tr><td>23</td><td>MM</td><td>KASSE</td><td>Maimouna</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 5 51 41 95</td><td></td></tr>
                    <tr><td>24</td><td>M</td><td>KENEME</td><td>Adama Bouda</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 2 54 10 66</td><td>baabakeneme@gmail.com</td></tr>
                    <tr><td>25</td><td>MM</td><td>KENEME</td><td>Fatimata</td><td>Conseillere</td><td>Hamady Hounaré</td><td></td><td></td></tr>
                    <tr><td>26</td><td>MM</td><td>KONATE</td><td>Kadiel</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 7 10 94 78</td><td></td></tr>
                    <tr><td>27</td><td>M</td><td>KOUME</td><td>Abdoulaye Alassane</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 079 35 20</td><td></td></tr>
                    <tr><td>28</td><td>MM</td><td>LY</td><td>Fatimata</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 7 52 08 35</td><td></td></tr>
                    <tr><td>29</td><td>M</td><td>NDIAYE</td><td>Hamidou Abdoul</td><td>Conseiller</td><td>Hamady Hounaré</td><td>78 4 55 41 24</td><td></td></tr>
                    <tr><td>30</td><td>M</td><td>NDIAYE</td><td>Mouhamadou</td><td>Conseiller</td><td>Hamady Hounaré</td><td>78 1 31 12 93</td><td></td></tr>

                    <tr><td>31</td><td>M</td><td>SAKHO</td><td>Youssouf</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 9 12 27 88</td><td>youssouf699@gmail.com</td></tr>
                    <tr><td>32</td><td>MM</td><td>SALL</td><td>Lalla</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 5 32 28 53</td><td></td></tr>
                    <tr><td>33</td><td>MM</td><td>SALL</td><td>Oumou</td><td>Conseillere</td><td>Hamady Hounaré</td><td>78 4 69 27  15</td><td></td></tr>
                    <tr><td>34</td><td>M</td><td>SANGHOTT</td><td>Demba</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 9 87 71 80</td><td></td></tr>
                    <tr><td>35</td><td>MM</td><td>SANKHANOU</td><td>Demba</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 0 46 93 20</td><td></td></tr>
                    <tr><td>36</td><td>MM</td><td>SARR</td><td>Coumba</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 4 07 77 80</td><td></td></tr>
                    <tr><td>37</td><td>MM</td><td>SARRE</td><td>Aminata Mamadou</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 9 09 57 87</td><td></td></tr>
                    <tr><td>38</td><td>M</td><td>SOW</td><td>Ibrahima</td><td>Conseiller</td><td>Hamady Hounaré</td><td>78 2 29 91 04</td><td></td></tr>
                    <tr><td>39</td><td>M</td><td>SY</td><td>Amadou</td><td>Conseiller</td><td>Hamady Hounaré</td><td>78 5 65 17 87</td><td></td></tr>
                    <tr><td>40</td><td>MM</td><td>SY</td><td>Houleye</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 1 92 57 80</td><td></td></tr>

                    <tr><td>41</td><td>M</td><td>SY</td><td>Kalidou</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 6 67 48 20</td><td></td></tr>
                    <tr><td>42</td><td>M</td><td>TALL</td><td>Abdoulaye Malal</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 3 18 71 69</td><td></td></tr>
                    <tr><td>43</td><td>MM</td><td>TALLA</td><td>Faty Oumar</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 4 13 19 83</td><td></td></tr>
                    <tr><td>44</td><td>MM</td><td>TALLA</td><td>Hawa</td><td>Conseillere</td><td>Hamady Hounaré</td><td>77 2 12 38 08</td><td></td></tr>
                    <tr><td>45</td><td>M</td><td>TALLA</td><td>Ibrahima</td><td>Conseiller</td><td>Hamady Hounaré</td><td>77 8 82 85 16</td><td></td></tr>
                    <tr><td>46</td><td>MM</td><td>TRAORE</td><td>Halimatou</td><td>Conseillere</td><td>Hamady Hounaré</td><td></td><td></td></tr>

                </tbody>

            </table>

        </div>

    </div>
    </section>

<section id="commissions" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Les Commissions Techniques
        </h2>

        <div class="row g-4">

            <!-- 1. Halls et Marchés -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 text-center h-100 commission-card">
                    <div class="card-body">
                        <div class="commission-icon mb-3">
                            <i class="fas fa-store"></i>
                        </div>
                        <h5 class="fw-bold">Halls et Marchés</h5>
                       <button class="btn btn-primary mt-3"
        onclick="showSection('membres-halls-marche')">
    Voir les membres
</button>
                    </div>
                </div>
            </div>

            <!-- 2. Finances -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 text-center h-100 commission-card">
                    <div class="card-body">
                        <div class="commission-icon mb-3">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <h5 class="fw-bold">Finances et Économie</h5>
                       <button class="btn btn-primary mt-3"
        onclick="showSection('finance')">
    Voir les membres
</button>
                    </div>
                </div>
            </div>

            <!-- 3. Hygiène et Santé -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 text-center h-100 commission-card">
                    <div class="card-body">
                        <div class="commission-icon mb-3">
                            <i class="fas fa-heart-pulse"></i>
                        </div>
                        <h5 class="fw-bold">Hygiène et Santé publique</h5>
                      <button class="btn btn-primary mt-3"
        onclick="showSection('hygiene-sante')">
    Voir les membres
</button>
                    </div>
                </div>
            </div>

            <!-- 4. Action Sociale -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 text-center h-100 commission-card">
                    <div class="card-body">
                        <div class="commission-icon mb-3">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h5 class="fw-bold">Action Sociale et Solidarité</h5>
                       <button class="btn btn-primary mt-3"
        onclick="showSection('action-sociale')">
    Voir les membres
</button>
                    </div>
                </div>
            </div>

            <!-- 5. Domaniale -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 text-center h-100 commission-card">
                    <div class="card-body">
                        <div class="commission-icon mb-3">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h5 class="fw-bold">Commission Domaniale</h5>
                      <button class="btn btn-primary mt-3"
        onclick="showSection('domaniale')">
    Voir les membres
</button>
                    </div>
                </div>
            </div>

            <!-- 6. Jeunesse -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 text-center h-100 commission-card">
                    <div class="card-body">
                        <div class="commission-icon mb-3">
                            <i class="fas fa-futbol"></i>
                        </div>
                        <h5 class="fw-bold">Jeunesse, Sport, Civisme et Emploi</h5>
                      <button class="btn btn-primary mt-3"
      onclick="showSection('commission-jeunesse')">
    Voir les membres
</button>
                    </div>
                </div>
            </div>

            <!-- 7. Assainissement -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 text-center h-100 commission-card">
                    <div class="card-body">
                        <div class="commission-icon mb-3">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <h5 class="fw-bold">Assainissement, Gestion des Ordures et Environnement</h5>
                        <button class="btn btn-primary mt-3" onclick="showSection('assainissement')">
                            Voir les membres
                        </button>
                    </div>
                </div>
            </div>

            <!-- 8. Éducation -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 text-center h-100 commission-card">
                    <div class="card-body">
                        <div class="commission-icon mb-3">
                            <i class="fas fa-school"></i>
                        </div>
                        <h5 class="fw-bold">Éducation, Formation Professionnelle et Technique</h5>
                        <button class="btn btn-primary mt-3" onclick="showSection('commission-education')">
                            Voir les membres
                        </button>
                    </div>
                </div>
            </div>

            <!-- 9. Coopération -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 text-center h-100 commission-card">
                    <div class="card-body">
                        <div class="commission-icon mb-3">
                            <i class="fas fa-globe-africa"></i>
                        </div>
                        <h5 class="fw-bold">Coopération Internationale, ONG et Associations</h5>
                        <button class="btn btn-primary mt-3" onclick="showSection('cooperation')">
                            Voir les membres
                        </button>
                    </div>
                </div>
            </div>

            <!-- 10. Culture -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 text-center h-100 commission-card">
                    <div class="card-body">
                        <div class="commission-icon mb-3">
                            <i class="fas fa-masks-theater"></i>
                        </div>
                        <h5 class="fw-bold">Commission Culturelle</h5>
                        <button class="btn btn-primary mt-3" onclick="showSection('culture')">
                            Voir les membres
                        </button>
                    </div>
                </div>
            </div>

            <!-- 11. Agriculture -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 text-center h-100 commission-card">
                    <div class="card-body">
                        <div class="commission-icon mb-3">
                            <i class="fas fa-tractor"></i>
                        </div>
                        <h5 class="fw-bold">Élevage, Agriculture et Pêche</h5>
                        <button class="btn btn-primary mt-3" onclick="showSection('agriculture')">
                            Voir les membres
                        </button>
                    </div>
                </div>
            </div>

            <!-- 12. Femme -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 text-center h-100 commission-card">
                    <div class="card-body">
                        <div class="commission-icon mb-3">
                            <i class="fas fa-people-group"></i>
                        </div>
                        <h5 class="fw-bold">Commission Femme</h5>
                        <button class="btn btn-primary mt-3" onclick="showSection('femme')">
                            Voir les membres
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- ================= MEMBRES COMMISSION HALLS ET MARCHÉS ================= -->

<section id="membres-halls-marche" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-4" style="color:#004FA4;">
            Commission Halls et Marchés
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="text-center text-white"
                       style="background:linear-gradient(90deg,#004FA4,#003B7A);">

                    <tr>
                        <th style="width:70px;">N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>DIAGANA</td>
                        <td>Hadya</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>DIAW</td>
                        <td>Mamadou</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>TALLA</td>
                        <td>Ibrahima</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>SARRE</td>
                        <td>Aminata Mamadou</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>DIOP</td>
                        <td>Aboubacry</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>SAKHO</td>
                        <td>Youssouf</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>KENEME</td>
                        <td>Adama Bouda</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ================= COMMISSION FINANCES ET ÉCONOMIE ================= -->

<section id="finance" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-4" style="color:#004FA4;">
            Commission Finances et Économie
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="text-center text-white"
                       style="background:linear-gradient(90deg,#004FA4,#003B7A);">

                    <tr>
                        <th style="width:80px;">N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>

                </thead>

                <tbody class="text-center">

                    <tr>
                        <td>1</td>
                        <td>CAMARA</td>
                        <td>Djibril</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>KANTE</td>
                        <td>Ibrahima</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>TALL</td>
                        <td>Abdoulaye Malal</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>SY</td>
                        <td>Houleye</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>DIAWARA</td>
                        <td>Djibril</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ================= COMMISSION HYGIENE ET SANTE PUBLIQUE ================= -->

<section id="hygiene-sante" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-4" style="color:#004FA4;">
            Commission Hygiène et Santé Publique
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="text-center text-white"
                       style="background:linear-gradient(90deg,#004FA4,#003B7A);">

                    <tr>
                        <th style="width:80px;">N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>

                </thead>

                <tbody class="text-center">

                    <tr>
                        <td>1</td>
                        <td>SALL</td>
                        <td>Oumou</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>SARR</td>
                        <td>Coumba</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>BARRY</td>
                        <td>Mamadou</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>DIAWARA</td>
                        <td>Djibril</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>DIAWARA</td>
                        <td>Coumba</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>TALL</td>
                        <td>Faty Oumar</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>SANKHANOU</td>
                        <td>Coumba</td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>KANTE</td>
                        <td>Ibrahima Oumar</td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td>SALL</td>
                        <td>Lalla</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ================= COMMISSION ACTION SOCIALE ET SOLIDARITE ================= -->

<section id="action-sociale" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-4" style="color:#004FA4;">
            Commission Action Sociale et Solidarité
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="text-center text-white"
                       style="background:linear-gradient(90deg,#004FA4,#003B7A);">

                    <tr>
                        <th style="width:80px;">N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>

                </thead>

                <tbody class="text-center">

                    <tr>
                        <td>1</td>
                        <td>SOW</td>
                        <td>Ibrahima</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>DIALLO</td>
                        <td>Moustapha</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>DEME</td>
                        <td>Dieynaba</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>KONATE</td>
                        <td>Kadiel</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>TALL</td>
                        <td>Hawa</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>KENEME</td>
                        <td>Fatimata</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>TRAORE</td>
                        <td>Halimatou</td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>DIARRA</td>
                        <td>Aminata</td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td>LY</td>
                        <td>Fatimata</td>
                    </tr>

                    <tr>
                        <td>10</td>
                        <td>SY</td>
                        <td>Amadou</td>
                    </tr>

                    <tr>
                        <td>11</td>
                        <td>BA</td>
                        <td>Houleye</td>
                    </tr>

                    <tr>
                        <td>12</td>
                        <td>BA</td>
                        <td>Khady</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ================= COMMISSION DOMANIALE ================= -->

<section id="domaniale" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-4" style="color:#004FA4;">
            Commission Domaniale
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="text-center text-white"
                       style="background:linear-gradient(90deg,#004FA4,#003B7A);">

                    <tr>
                        <th style="width:80px;">N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>

                </thead>

                <tbody class="text-center">

                    <tr>
                        <td>1</td>
                        <td>KANE</td>
                        <td>Amadou Samba</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>DIAGANA</td>
                        <td>Hadya</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>DIOUM</td>
                        <td>Adama</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>BADIAGA</td>
                        <td>Mamadou</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>DIALLO</td>
                        <td>Moustapha</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>DIOP</td>
                        <td>Aboubacry</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>NDIAYE</td>
                        <td>Hamidou Abdoul</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ================= COMMISSION JEUNESSE, SPORT, CIVISME ET EMPLOI ================= -->

<section id="commission-jeunesse" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-4" style="color:#004FA4;">
            Commission Jeunesse, Sport, Civisme et Emploi
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="text-center text-white"
                       style="background:linear-gradient(90deg,#004FA4,#003B7A);">

                    <tr>
                        <th style="width:80px;">N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>

                </thead>

                <tbody class="text-center">

                    <tr>
                        <td>1</td>
                        <td>KANTE</td>
                        <td>Ibrahima</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>SY</td>
                        <td>Kalidou</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>SANGHOTT</td>
                        <td>Demba</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>KASSE</td>
                        <td>Maimouna</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>KOUME</td>
                        <td>Abdoulaye Alassane</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>CAMARA</td>
                        <td>Djibril</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>SAKHO</td>
                        <td>Youssouf</td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>SALL</td>
                        <td>Oumou</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ================= COMMISSION ASSAINISSEMENT, GESTION DES ORDURES ET ENVIRONNEMENT ================= -->

<section id="assainissement" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-4" style="color:#004FA4;">
            Commission Assainissement, Gestion des Ordures et Environnement
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="text-center text-white"
                       style="background:linear-gradient(90deg,#004FA4,#003B7A);">

                    <tr>
                        <th style="width:80px;">N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>

                </thead>

                <tbody class="text-center">

                    <tr>
                        <td>1</td>
                        <td>CAMARA</td>
                        <td>Djibril</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>DIAGANA</td>
                        <td>Hadya</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>BARRY</td>
                        <td>Mamadou</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>GUISSE</td>
                        <td>Lao Mamadou</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>KENEME</td>
                        <td>Adama Bouda</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>DIOUM</td>
                        <td>Adama</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>TRAORE</td>
                        <td>Halimatou</td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>SARRE</td>
                        <td>Aminata Mamadou</td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td>DIAWARA</td>
                        <td>Djibril</td>
                    </tr>

                    <tr>
                        <td>10</td>
                        <td>SALL</td>
                        <td>Lalla</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ================= COMMISSION ÉDUCATION, FORMATION PROFESSIONNELLE ET TECHNIQUE ================= -->

<section id="commission-education" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-4" style="color:#004FA4;">
            Commission Éducation, Formation Professionnelle et Technique
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="text-center text-white"
                       style="background:linear-gradient(90deg,#004FA4,#003B7A);">

                    <tr>
                        <th style="width:80px;">N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>

                </thead>

                <tbody class="text-center">

                    <tr>
                        <td>1</td>
                        <td>LY</td>
                        <td>Fatimata</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>SARR</td>
                        <td>Coumba</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>KENEME</td>
                        <td>Adama Bouda</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>DIONGUE</td>
                        <td>Dieynaba</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>SAKHO</td>
                        <td>Youssouf</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>DIONGUE</td>
                        <td>Amadou</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>KOUME</td>
                        <td>Abdoulaye Alassane</td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>SALL</td>
                        <td>Oumou</td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td>SY</td>
                        <td>Houleye</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ================= COMMISSION COOPÉRATION INTERNATIONALE ET RELATIONS ENTRE LES ONG ET ASSOCIATIONS ================= -->

<section id="cooperation" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-4" style="color:#004FA4;">
            Commission Coopération Internationale et Relations entre les ONG et Associations
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="text-center text-white"
                       style="background:linear-gradient(90deg,#004FA4,#003B7A);">

                    <tr>
                        <th style="width:80px;">N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>

                </thead>

                <tbody class="text-center">

                    <tr>
                        <td>1</td>
                        <td>KANE</td>
                        <td>Amadou Samba</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>CAMARA</td>
                        <td>Djibril</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>DIAGANA</td>
                        <td>Hadya</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>SARRE</td>
                        <td>Aminata Mamadou</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>SY</td>
                        <td>Amadou</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>SANGHOTT</td>
                        <td>Demba</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>SAKHO</td>
                        <td>Youssouf</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ================= COMMISSION CULTURELLE ================= -->

<section id="culture" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-4" style="color:#004FA4;">
            Commission Culturelle
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="text-center text-white"
                       style="background:linear-gradient(90deg,#004FA4,#003B7A);">

                    <tr>
                        <th style="width:80px;">N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>

                </thead>

                <tbody class="text-center">

                    <tr>
                        <td>1</td>
                        <td>NDIAYE</td>
                        <td>Mouhamadou</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>TRAORE</td>
                        <td>Halimatou</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>BA</td>
                        <td>Khady</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>SY</td>
                        <td>Houleye</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>SY</td>
                        <td>Amadou</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>TALLA</td>
                        <td>Faty Oumar</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>KENEME</td>
                        <td>Fatimata</td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>BA</td>
                        <td>Houleye</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ================= COMMISSION ÉLEVAGE, AGRICULTURE ET PÊCHE ================= -->

<section id="agriculture" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-4" style="color:#004FA4;">
            Commission Élevage, Agriculture et Pêche
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="text-center text-white"
                       style="background:linear-gradient(90deg,#004FA4,#003B7A);">

                    <tr>
                        <th style="width:80px;">N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>

                </thead>

                <tbody class="text-center">

                    <tr>
                        <td>1</td>
                        <td>DIONG</td>
                        <td>Dieynaba</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>DIAW</td>
                        <td>Abdoulaye</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>CAMARA</td>
                        <td>Djibril</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>SAKHO</td>
                        <td>Youssouf</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>TALLA</td>
                        <td>Faty Oumar</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>NDIAYE</td>
                        <td>Mouhamadou</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>TALLA</td>
                        <td>Hawa</td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>SOW</td>
                        <td>Ibrahima</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ================= COMMISSION FÉMININE ================= -->

<section id="femme" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-4" style="color:#004FA4;">
            Commission Féminine
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="text-center text-white"
                       style="background:linear-gradient(90deg,#004FA4,#003B7A);">

                    <tr>
                        <th style="width:80px;">N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>

                </thead>

                <tbody class="text-center">

                    <tr>
                        <td>1</td>
                        <td>KENEME</td>
                        <td>Fatimata</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>SARRE</td>
                        <td>Aminata Mamadou</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>GUISSE</td>
                        <td>Lao Mamadou</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>TRAORE</td>
                        <td>Halimatou</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>BA</td>
                        <td>Houleye</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>COULIBALY</td>
                        <td>Dieynaba Samba</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>DIARRA</td>
                        <td>Aminata</td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>BA</td>
                        <td>Khady</td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td>KONATE</td>
                        <td>Kadiel</td>
                    </tr>

                    <tr>
                        <td>10</td>
                        <td>DIONGUE</td>
                        <td>Dieynaba</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ================= PROJETS ================= -->

<section id="projets" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Les Projets de la Commune
        </h2>

        <div class="row justify-content-center g-4">

            <!-- Projets en cours -->
            <div class="col-lg-5 col-md-6">

                <div class="card shadow-sm border-0 text-center h-100 commission-card">

                    <div class="card-body">

                        <div class="commission-icon mb-3">
                            <i class="fas fa-person-digging"></i>
                        </div>

                        <h5 class="fw-bold">
                            Projets en cours
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('projets-encours')">

                            Voir les projets

                        </button>

                    </div>

                </div>

            </div>

            <!-- Projets réalisés -->
            <div class="col-lg-5 col-md-6">

                <div class="card shadow-sm border-0 text-center h-100 commission-card">

                    <div class="card-body">

                        <div class="commission-icon mb-3">
                            <i class="fas fa-circle-check"></i>
                        </div>

                        <h5 class="fw-bold">
                            Projets réalisés
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('projets-realises')">

                            Voir les projets

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= PROJETS EN COURS ================= -->

<section id="projets-encours" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Les Projets en Cours
        </h2>

        <div class="row g-4">

            <!-- Projet 1 -->
            <div class="col-lg-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-bolt me-2"></i>
                            Extension électrique
                        </h5>
                        <p class="mb-0">
                            Extension du réseau électrique dans les quatiers de
                            <strong>Fass, Hairé et Djingué</strong>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Projet 2 -->
            <div class="col-lg-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-book-open me-2"></i>
                            Construction d'une CLAC
                        </h5>
                        <p class="mb-0">
                            Construction d'un
                            <strong>Centre de Lecture et d'Animation Culturelle (CLAC)</strong>
                            : la Maison des Jeunes.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Projet 3 -->
            <div class="col-lg-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-recycle me-2"></i>
                            Tri et recyclage des ordures
                        </h5>
                        <p class="mb-0">
                            Mise en place d'un système moderne de tri et de recyclage
                            des déchets ménagers.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Projet 4 -->
            <div class="col-lg-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-futbol me-2"></i>
                            Construction d'un stade municipal
                        </h5>
                        <p class="mb-0">
                            Construction d'un stade municipal moderne destiné aux
                            activités sportives et culturelles.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Projet 5 -->
            <div class="col-lg-6 mx-auto">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-faucet-drip me-2"></i>
                            Deuxième forage
                        </h5>
                        <p class="mb-0">
                            Mise en place d'un deuxième forage afin d'améliorer
                            l'accès à l'eau potable dans la commune.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Projet 6 -->
<div class="col-lg-6 mx-auto">
    <div class="card shadow border-0 h-100">
        <div class="card-body">
            <h5 class="fw-bold text-primary">
                <i class="fas fa-store me-2"></i>
                Aménagement du marché
            </h5>
            <p class="mb-0">
                Aménagement et construction du marché (démarrage des travaux bientôt)
            </p>
        </div>
    </div>
</div>


<!-- Projet 7 -->
<div class="col-lg-6 mx-auto">
    <div class="card shadow border-0 h-100">
        <div class="card-body">
            <h5 class="fw-bold text-primary">
                <i class="fas fa-industry me-2"></i>
                Construction d'un centre
            </h5>
            <p class="mb-0">
                Construction d'un centre Agro business (démarrage des travaux bientôt)
            </p>
        </div>
    </div>
</div>


<!-- Projet 8 -->
<div class="col-lg-6 mx-auto">
    <div class="card shadow border-0 h-100">
        <div class="card-body">
            <h5 class="fw-bold text-primary">
                <i class="fas fa-shopping-basket me-2"></i>
                Construction d'un marché
            </h5>
            <p class="mb-0">
                Construction d'un marché moderne
            </p>
        </div>
    </div>
</div>


<!-- Projet 9 -->
<div class="col-lg-6 mx-auto">
    <div class="card shadow border-0 h-100">
        <div class="card-body">
            <h5 class="fw-bold text-primary">
                <i class="fas fa-users me-2"></i>
                Investissement des émigrés
            </h5>
            <p class="mb-0">
                Faciliter l'investissement des émigrés dans la commune par des mesures d'accompagnement
            </p>
        </div>
    </div>
</div>
        </div>

    </div>

</section>

<!-- ================= PROJETS RÉALISÉS ================= -->

<section id="projets-realises" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Les Projets Réalisés
        </h2>

        <div class="row g-4">

            <!-- Projet 1 -->
            <div class="col-lg-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">

                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-bolt me-2"></i>
                            Mise en place d'un groupe électrogène pour le forage
                        </h5>

                        <p>
                            Installation d'un groupe électrogène afin d'assurer le fonctionnement régulier du forage et améliorer l'accès à l'eau pour les populations.
                        </p>

                    </div>
                </div>
            </div>


            <!-- Projet 2 -->
            <div class="col-lg-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">

                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-water me-2"></i>
                            Dotation d'une machine à pompe pour le jardin des femmes
                        </h5>

                        <p>
                            Appui au jardin des femmes d'El Hadji Moussa (quartier Soninké) à travers la mise à disposition d'une machine à pompe pour faciliter les activités maraîchères.
                        </p>

                    </div>
                </div>
            </div>


            <!-- Projet 3 -->
            <div class="col-lg-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">

                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-seedling me-2"></i>
                            Appui en matériels et semences pour la campagne 2012
                        </h5>

                        <p>
                            Soutien aux femmes de la commune à travers la fourniture de matériels agricoles et de semences pour leurs activités de maraîchage.
                        </p>

                    </div>
                </div>
            </div>


            <!-- Projet 4 -->
            <div class="col-lg-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">

                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-cogs me-2"></i>
                            Dotation de trois machines à moulin pour les groupements féminins
                        </h5>

                        <p>
                            Mise à disposition de trois machines à moulin au profit des groupements féminins des quartiers Hairai, Jingué et Fass.
                        </p>

                    </div>
                </div>
            </div>


            <!-- Projet 5 -->
            <div class="col-lg-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">

                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-faucet me-2"></i>
                            Adduction d'eau du quartier Fass
                        </h5>

                        <p>
                            Réalisation d'un projet d'adduction d'eau pour améliorer l'accès à l'eau potable dans le quartier Fass.
                        </p>

                    </div>
                </div>
            </div>


            <!-- Projet 6 -->
            <div class="col-lg-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">

                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-store me-2"></i>
                            Construction du marché central
                        </h5>

                        <p>
                            Construction d'un marché central destiné à renforcer les activités commerciales et économiques de la commune.
                        </p>

                    </div>
                </div>
            </div>


          <div id="plus-projets" class="row g-4" style="display:none;">

    <!-- Projet 7 -->
    <div class="col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">
                <h5 class="fw-bold text-primary">
                    Projet agricole (PRODAM)
                </h5>
                <p>
                    Réalisation d'un projet agricole au profit de 150 jeunes.
                </p>
            </div>
        </div>
    </div>


    <!-- Projet 8 -->
    <div class="col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">
                <h5 class="fw-bold text-primary">
                    Lotissement du quartier Fass
                </h5>
                <p>
                    Plus de 800 parcelles réalisées.
                </p>
            </div>
        </div>
    </div>


    <!-- Projet 9 -->
    <div class="col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">
                <h5 class="fw-bold text-primary">
                    Construction de salles de classe
                </h5>
                <p>
                    Construction de nouvelles salles de classe.
                </p>
            </div>
        </div>
    </div>


    <!-- Projet 10 -->
    <div class="col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">
                <h5 class="fw-bold text-primary">
                    Réalisation du PIC
                </h5>
                <p>
                    Réalisation du Plan d'Investissement Communal.
                </p>
            </div>
        </div>
    </div>


    <!-- Projet 11 -->
    <div class="col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">
                <h5 class="fw-bold text-primary">
                    Salle informatique
                </h5>
                <p>
                    04 ordinateurs, 01 imprimante, 01 tente démontable,
                    groupe électrogène, 100 chaises et mini sonorisation.
                </p>
            </div>
        </div>
    </div>


    <!-- Projet 12 -->
    <div class="col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">
                <h5 class="fw-bold text-primary">
                    Construction de l'Hôtel de Ville
                </h5>
                <p>
                    Construction d'un Hôtel de Ville moderne.
                </p>
            </div>
        </div>
    </div>

<!-- Projet 13 -->
    <div class="col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <h5 class="fw-bold text-primary">
                    <i class="fas fa-briefcase me-2"></i>
                    Acquisition de matériel de bureau pour la mairie
                </h5>

                <p>
                    Acquisition d'un matériel de bureau complet afin d'améliorer les conditions de travail des services municipaux.
                </p>

            </div>
        </div>
    </div>


    <!-- Projet 14 -->
    <div class="col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <h5 class="fw-bold text-primary">
                    <i class="fas fa-lightbulb me-2"></i>
                    Révision de l'éclairage public
                </h5>

                <p>
                    Travaux de révision et d'amélioration du réseau d'éclairage public pour renforcer la sécurité et le confort des habitants.
                </p>

            </div>
        </div>
    </div>


    <!-- Projet 15 -->
    <div class="col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <h5 class="fw-bold text-primary">
                    <i class="fas fa-drumstick-bite me-2"></i>
                    Construction d'un abattoir
                </h5>

                <p>
                    Construction d'un abattoir destiné à améliorer les conditions d'abattage et d'hygiène dans la commune.
                </p>

            </div>
        </div>
    </div>


    <!-- Projet 16 -->
    <div class="col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <h5 class="fw-bold text-primary">
                    <i class="fas fa-cow me-2"></i>
                    Construction d'un parc de vaccination de bétail
                </h5>

                <p>
                    Réalisation d'un parc de vaccination pour accompagner les éleveurs et améliorer la santé du cheptel.
                </p>

            </div>
        </div>
    </div>


    <!-- Projet 17 -->
    <div class="col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <h5 class="fw-bold text-primary">
                    <i class="fas fa-border-all me-2"></i>
                    Construction du mur de clôture du terrain municipal
                </h5>

                <p>
                    Construction d'un mur de clôture autour du terrain municipal pour sécuriser l'espace sportif.
                </p>

            </div>
        </div>
    </div>


    <!-- Projet 18 -->
    <div class="col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <h5 class="fw-bold text-primary">
                    <i class="fas fa-female me-2"></i>
                    Construction d'un centre d'atelier pour les femmes
                </h5>

                <p>
                    Construction d'un centre destiné à renforcer les activités économiques et artisanales des femmes.
                </p>

            </div>
        </div>
    </div>


    <!-- Projet 19 -->
    <div class="col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <h5 class="fw-bold text-primary">
                    <i class="fas fa-mosque me-2"></i>
                    Construction d'un hangar au cimetière Ya Allah
                </h5>

                <p>
                    Réalisation d'un hangar au niveau du cimetière Ya Allah afin d'améliorer les conditions d'accueil et d'organisation.
                </p>

            </div>
        </div>
    </div>


    <!-- Projet 20 -->
    <div class="col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">

                <h5 class="fw-bold text-primary">
                    <i class="fas fa-book me-2"></i>
                    Équipement en livres de la bibliothèque du lycée
                </h5>

                <p>
                    Dotation de la bibliothèque du lycée en ouvrages afin de renforcer les ressources pédagogiques des élèves.
                </p>

            </div>
        </div>
    </div>

<!-- Projet 21 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-bolt me-2"></i>
                Achat d'un transformateur de 160 KVA pour le forage
            </h5>

            <p>
                Acquisition d'un transformateur de 160 KVA destiné à renforcer l'alimentation électrique du forage et assurer une meilleure disponibilité de l'eau pour les populations.
            </p>

        </div>
    </div>
</div>

<!-- Projet 22 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-desktop me-2"></i>
                Équipement des écoles élémentaires en ordinateurs et imprimantes
            </h5>

            <p>
                Dotation des écoles élémentaires de la commune en équipements informatiques afin d'améliorer les conditions d'apprentissage.
            </p>

        </div>
    </div>
</div>


<!-- Projet 23 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-map me-2"></i>
                Projet de lotissement du quartier Fass
            </h5>

            <p>
                Réalisation d'un projet de lotissement visant à accompagner l'aménagement et le développement urbain du quartier Fass.
            </p>

        </div>
    </div>
</div>


<!-- Projet 24 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-ambulance me-2"></i>
                Acquisition de deux ambulances médicalisées
            </h5>

            <p>
                Acquisition de deux ambulances médicalisées pour renforcer la prise en charge sanitaire des populations.
            </p>

        </div>
    </div>
</div>


<!-- Projet 25 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-hand-holding-usd me-2"></i>
                Financement des femmes
            </h5>

            <p>
                Mise en place d'un financement de 5 000 000 FCFA destiné à soutenir les activités économiques des femmes.
            </p>

        </div>
    </div>
</div>


<!-- Projet 26 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-school me-2"></i>
                Mur de clôture de la case des tout-petits
            </h5>

            <p>
                Construction d'un mur de clôture pour sécuriser la case des tout-petits.
            </p>

        </div>
    </div>
</div>


<!-- Projet 27 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-water me-2"></i>
                Deuxième extension du réseau d'eau
            </h5>

            <p>
                Extension du réseau d'eau vers les quartiers Fass, Hairé, Djingué et Soninké afin d'améliorer l'accès à l'eau.
            </p>

        </div>
    </div>
</div>


<!-- Projet 28 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-tools me-2"></i>
                Réfection d'infrastructures en 2017
            </h5>

            <p>
                Réfection de 4 salles de classe de l'école 1, du poste de santé et de la case des tout-petits en 2017.
            </p>

        </div>
    </div>
</div>


<!-- Projet 29 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-bolt me-2"></i>
                Troisième extension du réseau électrique
            </h5>

            <p>
                Extension du réseau électrique dans la commune réalisée en 2018 pour améliorer l'accès à l'électricité.
            </p>

        </div>
    </div>
</div>


<!-- Projet 30 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-seedling me-2"></i>
                Appui aux agriculteurs
            </h5>

            <p>
                Appui financier de 8 000 000 FCFA aux agriculteurs des rizières pour soutenir la production agricole.
            </p>

        </div>
    </div>
</div>

<!-- Projet 31 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-hospital me-2"></i>
                Construction d'un centre de santé équipé
            </h5>

            <p>
                Construction d'un centre de santé moderne équipé d'une valeur de plus de 600 000 000 FCFA grâce à l'appui de la Fondation LONASE.
            </p>

        </div>
    </div>
</div>


<!-- Projet 32 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-bolt me-2"></i>
                Extension électrique vers le centre de santé
            </h5>

            <p>
                Réalisation d'une extension du réseau électrique pour assurer l'alimentation du centre de santé.
            </p>

        </div>
    </div>
</div>


<!-- Projet 33 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-motorcycle me-2"></i>
                Acquisition de 10 motos Jakarta pour les jeunes
            </h5>

            <p>
                Acquisition et mise à disposition de 10 motos Jakarta afin de soutenir l'insertion économique des jeunes de la commune.
            </p>

        </div>
    </div>
</div>


<!-- Projet 34 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-id-card me-2"></i>
                Formation de 50 jeunes pour l'obtention du permis de conduire
            </h5>

            <p>
                Organisation d'une formation payante au profit de 50 jeunes pour faciliter l'obtention du permis de conduire.
            </p>

        </div>
    </div>
</div>


<!-- Projet 35 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-school me-2"></i>
                Réfection de 8 salles de classe en 2019
            </h5>

            <p>
                Travaux de réfection de 8 salles de classe dans les trois écoles élémentaires de la commune en 2019.
            </p>

        </div>
    </div>
</div>


<!-- Projet 36 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-bus me-2"></i>
                Construction d'une gare routière
            </h5>

            <p>
                Construction d'une gare routière afin d'améliorer l'organisation du transport et la mobilité dans la commune.
            </p>

        </div>
    </div>
</div>


<!-- Projet 37 -->
<div class="col-lg-4">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                <i class="fas fa-store-alt me-2"></i>
                Construction d'échoppes
            </h5>

            <p>
                Construction d'échoppes pour accompagner les activités commerciales et renforcer les opportunités économiques locales.
            </p>

        </div>
    </div>
</div>
</div>


        </div>


        <!-- Bouton Voir plus -->
        <div class="text-center mt-5">

            <button id="btnVoirPlus" class="btn btn-primary px-4">
                Voir plus
            </button>

        </div>


    </div>

</section>


<!-- ================= AUTRES ACTIVITÉS SOCIALES ================= -->

<section id="autres-social" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Autres Activités Sociales
        </h2>

        <div class="row g-4">

            <!-- Subvention aux mosquées -->
            <div class="col-lg-6">

                <div class="card shadow border-0 h-100">

                    <div class="card-body">

                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-mosque me-2"></i>
                            Subvention aux mosquées
                        </h5>

                        <p class="mb-0">
                            Octroi d'une subvention d'un montant de
                            <strong>800 000 FCFA</strong> destinée aux deux
                            mosquées de la commune.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Pèlerinage -->
            <div class="col-lg-6">

                <div class="card shadow border-0 h-100">

                    <div class="card-body">

                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-kaaba me-2"></i>
                            Appui au pèlerinage
                        </h5>

                        <p class="mb-0">
                            Octroi de plusieurs billets pour le pèlerinage
                            à La Mecque au profit des populations.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Sinistrés -->
            <div class="col-lg-6">

                <div class="card shadow border-0 h-100">

                    <div class="card-body">

                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-hands-helping me-2"></i>
                            Appui aux sinistrés
                        </h5>

                        <p class="mb-0">
                            Distribution de vivres aux populations sinistrées
                            de l'ensemble des localités concernées en
                            <strong>2019</strong>.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Covid -->
            <div class="col-lg-6">

                <div class="card shadow border-0 h-100">

                    <div class="card-body">

                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-hand-sparkles me-2"></i>
                            Lutte contre la COVID-19
                        </h5>

                        <p class="mb-0">
                            Distribution de vivres et de produits détergents
                            aux populations durant la pandémie de
                            <strong>COVID-19</strong>.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Diaspora -->
            <div class="col-lg-6 mx-auto">

                <div class="card shadow border-0 h-100">

                    <div class="card-body">

                        <h5 class="fw-bold text-primary">
                            <i class="fas fa-house me-2"></i>
                            Appui à la diaspora (Kawral)
                        </h5>

                        <p class="mb-0">
                            Octroi d'une maison à la diaspora
                            <strong>Kawral</strong> afin de soutenir ses
                            activités au sein de la commune.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ================= COMMERCE ================= -->

<section id="commerce" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
           PRESENTATION DU SECTEUR COMMERCIAL
        </h2>

        <div class="row g-4">

            <!-- Présentation du secteur commercial -->
            <div class="col-lg-4 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <div class="mb-3">
                            <i class="fas fa-store fa-3x text-primary"></i>
                        </div>

                        <h5 class="fw-bold">
                            Présentation du secteur commercial
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('presentation-commerce')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Contraintes du marché -->
            <div class="col-lg-4 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <div class="mb-3">
                            <i class="fas fa-triangle-exclamation fa-3x text-warning"></i>
                        </div>

                        <h5 class="fw-bold">
                            Les principales contraintes du marché central
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('contraintes-commerce')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Perspectives -->
            <div class="col-lg-4 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <div class="mb-3">
                            <i class="fas fa-chart-line fa-3x text-success"></i>
                        </div>

                        <h5 class="fw-bold">
                            Perspectives et axes de développement du commerce
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('perspectives-commerce')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= PRESENTATION DU SECTEUR COMMERCIAL ================= -->

<section id="presentation-commerce" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Présentation du Secteur Commercial
        </h2>

        <div class="card shadow border-0">

            <div class="card-body p-5">

                <p class="lead text-justify">
                    Au niveau de la commune de <strong>Hamady Hounaré</strong>, le commerce constitue l'un des piliers de l'économie locale. Il s'exerce principalement sous forme de demi-gros et de détail, impulsé par la position stratégique de la commune en tant que carrefour d'échanges dans le Daande Maayo et zone de transit proche de la frontière mauritanienne.
                </p>

                <hr>

                <h4 class="fw-bold text-primary">
                    <i class="fas fa-store me-2"></i>
                    Le marché de Hamady Hounaré
                </h4>

                <p>
                    La commune dispose d'un marché central qui s'anime quotidiennement, avec une intensité particulière lors des jours de marché hebdomadaire (Loumo). On y trouve des cantines, des magasins de stockage ainsi que de nombreux étals informels.
                </p>

                <ul>

                    <li>
                        <strong>À l'intérieur du marché et des quartiers :</strong>
                        L'activité est dominée par les boutiquiers, les marchands ambulants (bana-bana) et les vendeuses étalagistes (tabliers).
                    </li>

                    <li>
                        <strong>Les acteurs locaux :</strong>
                        Les femmes pratiquent essentiellement le petit commerce au-devant de leurs concessions ou le long des axes principaux. Les bana-bana, souvent de jeunes ruraux ou des commerçants itinérants, sillonnent la commune et les villages environnants.
                    </li>

                    <li>
                        <strong>Les produits phares :</strong>
                        Le commerce porte principalement sur les denrées de première nécessité (riz, huile, sucre, savon), les produits maraîchers, l'élevage, le poisson frais ou séché ainsi que les céréales locales (mil, sorgho).
                    </li>

                </ul>

                <hr>

                <h4 class="fw-bold text-primary">
                    <i class="fas fa-shop me-2"></i>
                    Les boutiques de quartier et de demi-gros
                </h4>

                <p>
                    La commune de Hamady Hounaré compte une diversité de boutiques réparties dans ses différents quartiers.
                </p>

                <ul>

                    <li>
                        <strong>Alimentation générale et détail :</strong>
                        La grande majorité des boutiques est dédiée à l'alimentation générale, permettant le ravitaillement quotidien des ménages.
                    </li>

                    <li>
                        <strong>Profil des commerçants :</strong>
                        Ces boutiques sont majoritairement tenues par des hommes, incluant des ressortissants locaux ainsi que des commerçants venus d'autres régions du Sénégal ou des pays voisins (Guinée, Mali et Mauritanie).
                    </li>

                </ul>

                <hr>

                <h4 class="fw-bold text-primary">
                    <i class="fas fa-hammer me-2"></i>
                    Les quincailleries et matériaux de construction
                </h4>

                <p>
                    Avec le développement de l'habitat (notamment soutenu par les transferts de fonds de la diaspora), Hamady Hounaré voit émerger plusieurs quincailleries qui approvisionnent la population et les villages voisins.
                </p>

                <ul>

                    <li>Ciment, fer à béton et tôles</li>

                    <li>Bois de charpente</li>

                    <li>Matériel de plomberie et d'électricité</li>

                </ul>

                <hr>

                <h4 class="fw-bold text-primary">
                    <i class="fas fa-shirt me-2"></i>
                    Le commerce de textiles, cosmétiques et divers
                </h4>

                <ul>

                    <li>
                        <strong>Boutiques de tissus et cosmétiques :</strong>
                        Très fréquentées par les femmes, elles proposent des tissus traditionnels (voiles, bazins), des produits de beauté et du prêt-à-porter.
                    </li>

                    <li>
                        <strong>Électroménager et solaire :</strong>
                        Ce secteur commercialise les équipements ménagers, les accessoires de téléphonie mobile ainsi que les matériels solaires (panneaux, batteries), indispensables dans certaines zones.
                    </li>

                </ul>

                <hr>

                <h4 class="fw-bold text-primary">
                    <i class="fas fa-basket-shopping me-2"></i>
                    Les étals de rue (Tabliers) et le micro-commerce
                </h4>

                <p>
                    Ces tables de fortune, gérées en grande majorité par des femmes, assurent le commerce du micro-détail.
                </p>

                <ul>

                    <li>
                        <strong>Produits vendus :</strong>
                        Légumes de saison, poisson séché ou fumé, condiments, café, arachides grillées, jus locaux (bissap, bouye) et restauration rapide de rue.
                    </li>

                    <li>
                        <strong>Rôle socio-économique :</strong>
                        Ce micro-commerce représente une source essentielle de revenus pour les femmes chefs de ménage. Il leur permet de couvrir les dépenses quotidiennes de la famille, notamment l'alimentation, la santé et la scolarité des enfants.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= LES PRINCIPALES CONTRAINTES DU MARCHÉ CENTRAL ================= -->

<section id="contraintes-commerce" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Les Principales Contraintes du Marché Central
        </h2>

        <div class="card shadow border-0">

            <div class="card-body p-5">

                <h4 class="fw-bold text-primary">
                    <i class="fas fa-triangle-exclamation me-2"></i>
                    Contraintes du marché central
                </h4>

                <ul class="mt-4">

                    <li class="mb-3">
                        <strong>Insuffisance d'infrastructures de stockage et de conservation :</strong>
                        Absence de chambres froides ou de structures adaptées pour la conservation des denrées périssables (viande, poisson, légumes), entraînant des pertes importantes pour les commerçants.
                    </li>

                    <li class="mb-3">
                        <strong>Problèmes d'assainissement et de gestion des déchets :</strong>
                        Insuffisance chronique du système de drainage et d'évacuation des eaux usées, combinée à une capacité de collecte des ordures inadaptée (bacs débordants et ramassage irrégulier).
                    </li>

                    <li class="mb-3">
                        <strong>Insalubrité et manque d'entretien :</strong>
                        Accumulation de déchets aux abords et à l'intérieur du marché, aggravée par un déficit d'agents de nettoiement.
                    </li>

                    <li class="mb-3">
                        <strong>Déficit d'équipements de base :</strong>
                        Absence ou non-fonctionnement de sanitaires publics décents ainsi que des systèmes d'aération et d'ombrage dans les espaces couverts.
                    </li>

                    <li class="mb-3">
                        <strong>Insécurité et manque d'éclairage :</strong>
                        Insuffisance d'éclairage public à l'intérieur et aux abords du marché, favorisant les risques de vols et d'insécurité, notamment lors des jours de Loumo.
                    </li>

                    <li class="mb-3">
                        <strong>Exiguïté et occupation anarchique :</strong>
                        Saturation des espaces marchands, précarité des cantines et occupation des voies de circulation par les étals, rendant difficile le déplacement des personnes et des biens.
                    </li>

                    <li class="mb-3">
                        <strong>Concurrence informelle :</strong>
                        Prolifération de la vente ambulante et sauvage à l'extérieur du marché, créant une concurrence déloyale avec les commerçants régulièrement installés.
                    </li>

                </ul>

                <hr class="my-5">

                <h4 class="fw-bold text-primary">
                    <i class="fas fa-city me-2"></i>
                    Les contraintes globales du secteur commercial communal
                </h4>

                <p class="mt-3">
                    Le développement du commerce dans l'ensemble de la commune de
                    <strong>Hamady Hounaré</strong> fait face à plusieurs contraintes structurelles.
                </p>

                <ul class="mt-4">

                    <li class="mb-3">
                        <strong>Insécurité nocturne :</strong>
                        Insuffisance de l'éclairage public dans certaines rues commerçantes et aux abords des marchés.
                    </li>

                    <li class="mb-3">
                        <strong>Inexistence d'un réseau d'assainissement global :</strong>
                        Absence d'un système moderne d'évacuation des eaux pluviales et usées, provoquant des stagnations d'eau en période hivernale.
                    </li>

                    <li class="mb-3">
                        <strong>Faible structuration des acteurs :</strong>
                        Insuffisance d'organisation et de concertation entre les syndicats et associations de commerçants, limitant leur capacité de dialogue avec la municipalité.
                    </li>

                    <li class="mb-3">
                        <strong>Déficit de sensibilisation à l'hygiène :</strong>
                        Non-respect des règles d'hygiène publique par certains commerçants, entraînant des interventions et verbalisations du service d'hygiène.
                    </li>

                    <li class="mb-3">
                        <strong>Contraintes réglementaires locales :</strong>
                        Difficultés rencontrées par certains commerçants et quincailleries pour aménager leurs devantures (installations de sécurité ou de protection) en raison des règles d'occupation du domaine public.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= PERSPECTIVES ET AXES DE DÉVELOPPEMENT DU COMMERCE ================= -->

<section id="perspectives-commerce" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Perspectives et Axes de Développement du Commerce
        </h2>

        <div class="card shadow border-0">

            <div class="card-body p-5">

                <p class="lead text-justify">
                    Le commerce constitue l'un des piliers fondamentaux de l'économie locale et représente la principale source de revenus pour de nombreux ménages ainsi qu'une importante source de recettes pour la Commune de Hamady Hounaré. Afin de lever les contraintes existantes et de renforcer son potentiel économique, plusieurs axes stratégiques de développement ont été identifiés.
                </p>

                <hr class="my-5">

                <h4 class="fw-bold text-primary">
                    <i class="fas fa-lightbulb me-2"></i>
                    Actions prioritaires
                </h4>

                <ul class="mt-4">

                    <li class="mb-4">
                        <strong>Modernisation et extension du marché central</strong><br>
                        Projet d'aménagement visant l'augmentation des capacités d'accueil (nouvelles cantines, espaces dédiés au Loumo), l'installation d'un éclairage public moderne, l'amélioration de l'aération et de l'ombrage ainsi que la mise en place d'un réseau d'évacuation des eaux pluviales et usées.
                        <br><span class="badge bg-warning text-dark mt-2">Projet en cours d'étude</span>
                    </li>

                    <li class="mb-4">
                        <strong>Création et gestion d'une chaîne du froid communale</strong><br>
                        Implantation d'une chambre froide alimentée ou renforcée par l'énergie solaire afin d'assurer la conservation de la viande, du poisson et des produits maraîchers locaux.
                        <br><span class="badge bg-success mt-2">Projet réalisé / En phase d'exploitation</span>
                    </li>

                    <li class="mb-4">
                        <strong>Renforcement des capacités et structuration des acteurs</strong><br>
                        Organisation de formations et d'actions de sensibilisation au profit des associations de commerçants et des femmes étalagistes sur :
                        <ul class="mt-2">
                            <li>la gestion d'entreprise ;</li>
                            <li>les règles d'hygiène et de salubrité ;</li>
                            <li>la gestion des déchets ;</li>
                            <li>le civisme fiscal.</li>
                        </ul>
                    </li>

                    <li class="mb-4">
                        <strong>Sécurisation des espaces marchands</strong><br>
                        Installation de points d'eau d'incendie, mise à disposition d'extincteurs, aménagement de voies de circulation pour les secours et renforcement de l'éclairage nocturne afin d'améliorer la sécurité des commerçants et des usagers.
                    </li>

                    <li class="mb-4">
                        <strong>Institution d'une Foire Économique et Artisanale Annuelle</strong><br>
                        Organisation d'un événement économique régional destiné à promouvoir les produits locaux, l'élevage, l'artisanat du Fouta et à favoriser les échanges commerciaux transfrontaliers.
                    </li>

                </ul>

                <hr class="my-4">

                <div class="alert alert-primary shadow-sm">

                    <h5 class="fw-bold">
                        <i class="fas fa-chart-line me-2"></i>
                        Vision de la Commune
                    </h5>

                    <p class="mb-0">
                        À travers ces différentes actions, la Commune de Hamady Hounaré ambitionne de disposer d'un secteur commercial moderne, sécurisé, attractif et créateur d'emplois, capable de répondre aux besoins des populations tout en renforçant durablement les recettes économiques locales.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= ARTISANAT ================= -->

<section id="artisanat" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
         PRESENTATION DU SECTEUR DE L'ARTISANAT
        </h2>

        <!-- Introduction -->
        <div class="row mb-5">

            <div class="col-12">

                <div class="card shadow-sm border-0">

                    <div class="card-body">

                        <p class="lead mb-0" style="text-align: justify;">

                            À <strong>Hamady Hounaré</strong>, l’artisanat constitue un levier essentiel
                            d’auto-emploi, de valorisation du patrimoine culturel et de soutien aux
                            activités de production locale (agriculture, élevage et habitat). Il
                            s’articule principalement autour de deux grandes composantes :
                            <strong>l’artisanat utilitaire et de service</strong> ainsi que
                            <strong>l’artisanat d’art et de transformation</strong>.

                        </p>

                    </div>

                </div>

            </div>

        </div>

        <div class="row g-4">

            <!-- Typologie et activités majeures -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-tools fa-3x text-primary mb-3"></i>

                        <h5 class="fw-bold">
                            Typologie et activités majeures
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('typologie-artisanat')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Réalités -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-users fa-3x text-success mb-3"></i>

                        <h5 class="fw-bold">
                            Réalités du secteur
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('realites-artisanat')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Contraintes -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-triangle-exclamation fa-3x text-warning mb-3"></i>

                        <h5 class="fw-bold">
                            Contraintes du secteur
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('contraintes-artisanat')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Perspectives -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-chart-line fa-3x text-info mb-3"></i>

                        <h5 class="fw-bold">
                            Perspectives d'action
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('perspectives-artisanat')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= TYPOLOGIE ET ACTIVITÉS MAJEURES ================= -->

<section id="typologie-artisanat" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Typologie et activités majeures
        </h2>

        <div class="card shadow border-0">

            <div class="card-body p-4">

                <p class="mb-4" style="text-align:justify;">
                    Le tissu artisanal local repose sur plusieurs corps de métiers
                    ancrés dans la vie quotidienne des populations.
                </p>

                <div class="mb-4">
                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-hard-hat me-2"></i>
                        Bâtiment et construction
                    </h5>

                    <p style="text-align:justify;">
                        Maçons, ferrailleurs, menuisiers bois/aluminium,
                        peintres et électriciens. Ce segment connaît une forte
                        demande, portée par les investissements immobiliers de
                        la diaspora (ressortissants basés en Afrique de l'Ouest,
                        en Europe ou dans les pays du Golfe).
                    </p>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-wrench me-2"></i>
                        Mécanique et réparation
                    </h5>

                    <p style="text-align:justify;">
                        Électriciens-auto, mécaniciens, vulcanisateurs et
                        soudeurs métalliques. Située sur un axe routier
                        stratégique (RN2), la commune accueille de nombreux
                        ateliers pour la maintenance des véhicules de transport,
                        des engins agricoles, des motopompes et des groupes
                        électrogènes.
                    </p>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-shirt me-2"></i>
                        Textile et habillement
                    </h5>

                    <p style="text-align:justify;">
                        Tailleurs, couturières, brodeuses et teinturières.
                        Très dynamiques, ces acteurs répondent à la demande
                        locale quotidienne et lors des événements familiaux
                        et religieux (Tabaski, Korité, mariages).
                    </p>
                </div>

                <div>
                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-hammer me-2"></i>
                        Artisanat traditionnel et d'art
                    </h5>

                    <ul class="mt-3">

                        <li class="mb-3">
                            <strong>Forge et métallurgie traditionnelle :</strong>
                            Fabrication et réparation d'outillages agricoles
                            (houes, dabas, haches) et d'équipements pour l'élevage.
                        </li>

                        <li class="mb-3">
                            <strong>Maroquinerie et cordonnerie :</strong>
                            Travail du cuir pour la confection de chaussures,
                            selles, étuis et parures.
                        </li>

                        <li>
                            <strong>Poterie et vannerie :</strong>
                            Pratiquées essentiellement par des femmes pour la
                            fabrication d'ustensiles ménagers, de pots de
                            conservation et d'objets d'ornement.
                        </li>

                    </ul>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= RÉALITÉS ET CARACTÉRISTIQUES DU SECTEUR ================= -->

<section id="realites-artisanat" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Réalités et caractéristiques du secteur
        </h2>

        <div class="card shadow border-0">

            <div class="card-body p-4">

                <p class="mb-4" style="text-align: justify;">
                    Le secteur artisanal à <strong>Hamady Hounaré</strong> présente des
                    dynamiques singulières liées à son ancrage territorial.
                </p>

                <div class="mb-4">

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-user-check me-2"></i>
                        Poids important de l'informel
                    </h5>

                    <p style="text-align: justify;">
                        La majorité des artisans exercent sans immatriculation officielle
                        (registre du commerce ou carte d'artisan de la Chambre des
                        Métiers de Matam).
                    </p>

                </div>

                <div class="mb-4">

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-graduation-cap me-2"></i>
                        Mode d'apprentissage traditionnel
                    </h5>

                    <p style="text-align: justify;">
                        Le savoir-faire se transmet principalement sur le tas, de maître
                        à apprenti, ou de génération en génération au sein des familles
                        de métiers (castes d'artisans/môɓe et baylo).
                    </p>

                </div>

                <div class="mb-4">

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-calendar-alt me-2"></i>
                        Saisonnalité des activités
                    </h5>

                    <p style="text-align: justify;">
                        L'activité artisanale fluctue fortement selon l'agenda agricole
                        et pastoral. La demande en outillage agricole culmine avant
                        l'hivernage, tandis que la confection textile connaît un pic
                        durant les fêtes.
                    </p>

                </div>

                <div>

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-link me-2"></i>
                        Synergie avec l'élevage et l'agriculture
                    </h5>

                    <p style="text-align: justify;">
                        L'artisanat fournit les outils indispensables aux producteurs
                        (charrettes, pièces pour motopompes, matériel d'attelage) et
                        transforme certaines matières premières locales (cuir, laine,
                        paille).
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= PRINCIPALES CONTRAINTES DU SECTEUR ================= -->

<section id="contraintes-artisanat" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Principales contraintes du secteur
        </h2>

        <div class="card shadow border-0">

            <div class="card-body p-4">

                <p class="mb-4" style="text-align: justify;">
                    Malgré son potentiel, l'artisanat à <strong>Hamady Hounaré</strong>
                    se heurte à plusieurs freins structurels qui limitent son
                    développement et sa contribution à l'économie locale.
                </p>

                <div class="mb-4">

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-tools me-2"></i>
                        Déficit d'équipements et de modernisation
                    </h5>

                    <p style="text-align: justify;">
                        Utilisation d'outils vétustes, manque d'équipements modernes
                        et accès restreint aux nouvelles technologies de production.
                    </p>

                </div>

                <div class="mb-4">

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-truck-loading me-2"></i>
                        Difficultés d'accès aux matières premières
                    </h5>

                    <p style="text-align: justify;">
                        L'éloignement des grands centres d'approvisionnement
                        (Dakar ou Saint-Louis) entraîne des surcoûts de transport
                        ainsi que des ruptures fréquentes de stock
                        (fer, bois de qualité, tissus spécifiques, pièces détachées).
                    </p>

                </div>

                <div class="mb-4">

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-map-marked-alt me-2"></i>
                        Problème d'aménagement et d'espaces dédiés
                    </h5>

                    <p style="text-align: justify;">
                        Absence de zone d'activité artisanale ou de village
                        artisanal communal. Les ateliers occupent souvent
                        la voie publique, le devant des concessions ou
                        des abris précaires.
                    </p>

                </div>

                <div class="mb-4">

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-hand-holding-usd me-2"></i>
                        Accès limité au financement
                    </h5>

                    <p style="text-align: justify;">
                        L'offre bancaire et de microfinance demeure inadaptée
                        aux besoins d'investissement des artisans, limitant
                        ainsi la modernisation de leurs ateliers.
                    </p>

                </div>

                <div class="mb-4">

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-users-cog me-2"></i>
                        Faible structuration organisationnelle
                    </h5>

                    <p style="text-align: justify;">
                        Le manque d'organisation des artisans en coopératives
                        ou en Groupements d'Intérêt Économique (GIE) réduit
                        leur capacité d'accès aux marchés publics locaux
                        ainsi qu'aux formations professionnelles continues.
                    </p>

                </div>

                <div>

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-bolt me-2"></i>
                        Déficit d'énergie stable
                    </h5>

                    <p style="text-align: justify;">
                        Les coupures ou la faible qualité du réseau électrique
                        pénalisent les métiers dépendants de l'énergie,
                        notamment la soudure, la menuiserie métallique
                        et les activités nécessitant le froid.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= PERSPECTIVES D'ACTION POUR LA COMMUNE ================= -->

<section id="perspectives-artisanat" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Perspectives d'action pour la commune
        </h2>

        <div class="card shadow border-0">

            <div class="card-body p-4">

                <p class="mb-4" style="text-align: justify;">
                    Afin de valoriser le secteur de l'artisanat et d'en faire un
                    véritable levier de création de richesses et d'emplois,
                    plusieurs axes d'intervention ont été identifiés pour la
                    commune de <strong>Hamady Hounaré</strong>.
                </p>

                <div class="mb-4">

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-industry me-2"></i>
                        Aménagement d'un espace artisanal dédié
                    </h5>

                    <p style="text-align: justify;">
                        Réserver une zone d'activités regroupant les ateliers
                        les plus bruyants ou encombrants (soudure, mécanique,
                        menuiserie), avec un accès sécurisé à l'électricité
                        et à l'eau.
                    </p>

                </div>

                <div class="mb-4">

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-chalkboard-teacher me-2"></i>
                        Renforcement des capacités
                    </h5>

                    <p style="text-align: justify;">
                        Organiser des sessions de formation technique ainsi que
                        des formations en gestion administrative et financière,
                        en partenariat avec la Chambre des Métiers de Matam et
                        les structures de formation professionnelle.
                    </p>

                </div>

                <div class="mb-4">

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-handshake me-2"></i>
                        Structuration et accès aux marchés
                    </h5>

                    <p style="text-align: justify;">
                        Accompagner la création de Groupements d'Intérêt
                        Économique (GIE) d'artisans afin de faciliter leur
                        accès aux marchés publics communaux, notamment pour la
                        confection des tables-bancs scolaires et l'entretien
                        des bâtiments municipaux.
                    </p>

                </div>

                <div class="mb-4">

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-seedling me-2"></i>
                        Valorisation des filières locales
                    </h5>

                    <p style="text-align: justify;">
                        Encourager la transformation locale des sous-produits
                        de l'élevage (cuir, peaux) et de l'agriculture à travers
                        le développement de l'artisanat d'art et utilitaire.
                    </p>

                </div>

                <div>

                    <h5 class="fw-bold text-primary">
                        <i class="fas fa-calendar-star me-2"></i>
                        Promotion événementielle
                    </h5>

                    <p style="text-align: justify;">
                        Intégrer la vitrine artisanale dans le projet de
                        <strong>Foire Annuelle de la Commune</strong> afin de
                        promouvoir les produits locaux, favoriser le commerce
                        transfrontalier et développer les partenariats
                        régionaux.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= ELEVAGE ================= -->

<section id="elevage" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
           PRESENTATION DU SECTEUR DE L'ELEVAGE A HAMADY HOUNARE
        </h2>

        <!-- Introduction -->
        <div class="row mb-5">

            <div class="col-12">

                <div class="card shadow-sm border-0">

                    <div class="card-body">

                        <p class="lead mb-0" style="text-align:justify;">

                            Ancré au cœur du <strong>Fouta</strong>, l'élevage constitue
                            une activité centrale et identitaire de la commune de
                            <strong>Hamady Hounaré</strong>. Il représente la principale
                            source de subsistance, de capitalisation et de revenus pour
                            une grande partie de la population locale.

                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- Cartes -->

        <div class="row g-4 justify-content-center">

            <!-- Caractéristiques -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-cow fa-3x text-success mb-3"></i>

                        <h5 class="fw-bold">
                            Caractéristiques et cheptel
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('caracteristiques-elevage')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Réalités -->

            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-seedling fa-3x text-success mb-3"></i>

                        <h5 class="fw-bold">
                            Réalités et opportunités
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('realites-elevage')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Contraintes -->

            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-triangle-exclamation fa-3x text-warning mb-3"></i>

                        <h5 class="fw-bold">
                            Contraintes majeures
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('contraintes-elevage')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Perspectives -->

            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-chart-line fa-3x text-info mb-3"></i>

                        <h5 class="fw-bold">
                            Axes de développement prioritaires
                        </h5>

                        <button class="btn btn-primary mt-3"
        onclick="showSection('developpement-elevage')">
    Voir les détails
</button>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= CARACTÉRISTIQUES ET CHEPTEL ================= -->

<section id="caracteristiques-elevage" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Caractéristiques et cheptel
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul class="mb-0">

                    <li class="mb-3">
                        <strong>Systèmes d'élevage :</strong>
                        Dominé par l'élevage extensif traditionnel
                        <strong>(transhumant et pastoral)</strong>,
                        avec une émergence progressive de l'élevage
                        <strong>semi-intensif</strong> autour des zones
                        d'habitations.
                    </li>

                    <li>
                        <strong>Composition du cheptel :</strong>

                        <ul class="mt-3">

                            <li class="mb-2">
                                <strong>Bovins :</strong>
                                Principale richesse des ménages pastoraux.
                            </li>

                            <li class="mb-2">
                                <strong>Petits ruminants (Ovins/Caprins) :</strong>
                                Très développés pour la consommation locale,
                                les cérémonies et la vente rapide.
                            </li>

                            <li class="mb-2">
                                <strong>Équins / Asins :</strong>
                                Essentiels pour le transport et la traction agricole.
                            </li>

                            <li>
                                <strong>Volaille :</strong>
                                Aviculture familiale et traditionnelle en essor.
                            </li>

                        </ul>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= RÉALITÉS ET OPPORTUNITÉS ================= -->

<section id="realites-elevage" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Réalités et opportunités
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul class="mb-0">

                    <li class="mb-3">
                        <strong>Position stratégique :</strong>
                        Proximité du <strong>fleuve Sénégal (Daande Maayo)</strong>
                        et de la frontière mauritanienne, facilitant le commerce
                        du bétail et les échanges transfrontaliers.
                    </li>

                    <li class="mb-3">
                        <strong>Point focal lors du Loumo :</strong>
                        Le marché hebdomadaire attire vendeurs et acheteurs
                        de toute la région ainsi que des pays voisins,
                        faisant de Hamady Hounaré un important centre
                        d'échanges commerciaux.
                    </li>

                    <li>
                        <strong>Fort impact socio-économique :</strong>
                        L'élevage constitue une véritable
                        <strong>épargne sur pied</strong> pour les ménages
                        et bénéficie des investissements de la diaspora,
                        notamment à travers l'achat de bétail et le financement
                        de l'alimentation animale.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= CONTRAINTES MAJEURES ================= -->

<section id="contraintes-elevage" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Contraintes majeures
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul class="mb-0">

                    <li class="mb-3">
                        <strong>Alimentation et abreuvement :</strong>
                        Rareté des pâturages pendant la saison sèche et forte
                        pression sur les points d'eau (forages, mares et autres
                        sources d'abreuvement).
                    </li>

                    <li class="mb-3">
                        <strong>Santé animale :</strong>
                        Risques d'épizooties et couverture vétérinaire ainsi que
                        médicamenteuse encore insuffisante pour répondre aux besoins
                        des éleveurs.
                    </li>

                    <li class="mb-3">
                        <strong>Conflits d'usage :</strong>
                        Tensions récurrentes entre agriculteurs et éleveurs en raison
                        du chevauchement des zones de culture et des couloirs de
                        passage du bétail.
                    </li>

                    <li>
                        <strong>Faible valorisation :</strong>
                        Absence d'unités locales de transformation du lait et manque
                        d'abattoirs modernes répondant aux normes d'hygiène et de
                        qualité.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= AXES DE DÉVELOPPEMENT PRIORITAIRES ================= -->

<section id="developpement-elevage" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Axes de développement prioritaires
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul class="mb-0">

                    <li class="mb-3">
                        <strong>Aménagement pastoral :</strong>
                        Balisage des parcours du bétail et création de points
                        d'eau pastoraux dédiés afin de sécuriser les déplacements
                        des troupeaux et de réduire les conflits d'usage.
                    </li>

                    <li class="mb-3">
                        <strong>Modernisation de la filière lait/viande :</strong>
                        Implantation de mini-laiteries et d'aires d'abattage
                        modernes équipées d'une chaîne du froid pour améliorer
                        la conservation et la valorisation des produits animaux.
                    </li>

                    <li class="mb-3">
                        <strong>Renforcement de la santé animale :</strong>
                        Organisation de campagnes régulières de vaccination et
                        implantation d'une pharmacie vétérinaire de proximité
                        afin d'améliorer la couverture sanitaire du cheptel.
                    </li>

                    <li>
                        <strong>Valorisation des sous-produits :</strong>
                        Structuration de la filière des peaux, des cuirs et du
                        fumier afin de soutenir les activités artisanales et
                        l'agriculture locale.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= AGRICULTURE ================= -->

<section id="agriculture-economie" class="tab-section py-5">
    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
          PRESENTATION DU SECTEUR DE L'AGRICULTURE A HAMADY HOUNARE
        </h2>

        <!-- Introduction -->
        <div class="row mb-5">

            <div class="col-12">

                <div class="card shadow-sm border-0">

                    <div class="card-body">

                        <p class="lead mb-0" style="text-align: justify;">

                            L'agriculture constitue, avec l'élevage, le second
                            pôle majeur de l'économie rurale de la commune de
                            <strong>Hamady Hounaré</strong>. Favorisée par sa
                            position géographique le long du
                            <strong>Daande Maayo (vallée du fleuve Sénégal)</strong>,
                            elle assure la sécurité alimentaire des ménages
                            et alimente les marchés locaux.

                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- Cartes -->
        <div class="row g-4 justify-content-center">

            <!-- Typologie -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-seedling fa-3x text-success mb-3"></i>

                        <h5 class="fw-bold">
                            Typologie des systèmes de culture
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('typologie-agriculture')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Réalités -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-leaf fa-3x text-success mb-3"></i>

                        <h5 class="fw-bold">
                            Réalités et atouts
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('realites-agriculture')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Contraintes -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-triangle-exclamation fa-3x text-warning mb-3"></i>

                        <h5 class="fw-bold">
                            Contraintes majeures
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('contraintes-agriculture')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Perspectives -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>

                        <h5 class="fw-bold">
                            Perspectives de développement
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('perspectives-agriculture')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= TYPOLOGIE DES SYSTÈMES DE CULTURE ================= -->

<section id="typologie-agriculture" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Typologie des systèmes de culture
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">

                    L'activité agricole s'articule autour de deux grands types de production :

                </p>

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>L'agriculture sous pluie (Dieri) :</strong>
                        Pratiquée durant l'hivernage sur les terres exondées.

                        <ul class="mt-2">

                            <li>
                                <strong>Cultures principales :</strong>
                                Mil, sorgho, maïs, niébé (haricot local) et arachide.
                            </li>

                            <li>
                                <strong>Destination :</strong>
                                Principalement dédiée à l'autoconsommation familiale.
                            </li>

                        </ul>
                    </li>

                    <li>
                        <strong>L'agriculture irriguée et de décrue (Walo) :</strong>
                        Pratiquée le long du fleuve et des mares temporaires.

                        <ul class="mt-2">

                            <li>
                                <strong>Cultures principales :</strong>
                                Riz (en casiers irrigués), sorgho de décrue (baassé).
                            </li>

                            <li>
                                <strong>Maraîchage :</strong>
                                En pleine expansion (oignon, tomate, gombo, piment, aubergine),
                                souvent porté par les Groupements d'Intérêt Économique (GIE) de femmes.
                            </li>

                        </ul>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= RÉALITÉS ET ATOUTS ================= -->

<section id="realites-agriculture" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Réalités et atouts
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Potentialités hydro-agricoles :</strong>
                        Proximité des ressources en eau du fleuve Sénégal permettant
                        le développement de périmètres irrigués villageois (PIV).
                    </li>

                    <li class="mb-3">
                        <strong>Dynamisme des femmes et des jeunes :</strong>
                        Forte implication dans la production maraîchère,
                        génératrice de revenus rapides et d'une plus grande
                        autonomie financière.
                    </li>

                    <li class="mb-3">
                        <strong>Débouchés commerciaux :</strong>
                        Présence d'un marché local actif et d'une demande soutenue
                        dans la zone transfrontalière avec la Mauritanie.
                    </li>

                    <li>
                        <strong>Appui de la diaspora :</strong>
                        Financement d'équipements agricoles (motopompes,
                        clôtures, semences) par les ressortissants établis
                        à l'étranger.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= CONTRAINTES MAJEURES ================= -->

<section id="contraintes-agriculture" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Contraintes majeures
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Dépendance aux aléas climatiques :</strong>
                        Sécheresses récurrentes ou irrégularité des pluies
                        affectant lourdement les rendements des cultures sous pluie.
                    </li>

                    <li class="mb-3">
                        <strong>Accès et maîtrise de l'eau :</strong>
                        Vétusté ou insuffisance des groupes motopompes, coût élevé
                        du carburant pour l'irrigation et dégradation des
                        aménagements hydro-agricoles.
                    </li>

                    <li class="mb-3">
                        <strong>Manque d'infrastructures de stockage et de conservation :</strong>
                        Pertes post-récolte importantes pour les produits
                        maraîchers (oignons, tomates), faute de magasins de
                        stockage ou de chaîne du froid.
                    </li>

                    <li class="mb-3">
                        <strong>Accès aux intrants et matériels :</strong>
                        Cherté et accès limité aux semences certifiées, aux
                        engrais de qualité et au matériel de labour moderne
                        (motoculteurs et tracteurs).
                    </li>

                    <li>
                        <strong>Divagation du bétail :</strong>
                        Conflits fréquents entre agriculteurs et éleveurs dus
                        aux dégâts causés par les animaux dans les champs non
                        clôturés.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= PERSPECTIVES DE DÉVELOPPEMENT ================= -->

<section id="perspectives-agriculture" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Perspectives de développement
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Aménagement et réhabilitation des casiers irrigués :</strong>
                        Extension des surfaces cultivables et modernisation
                        du matériel d'exhaure grâce au passage progressif
                        au pompage solaire.
                    </li>

                    <li class="mb-3">
                        <strong>Valorisation et conservation des productions :</strong>
                        Construction de magasins de stockage spécialisés
                        (notamment pour l'oignon) et création de mini-unités
                        de transformation locale afin de réduire les pertes
                        post-récolte.
                    </li>

                    <li class="mb-3">
                        <strong>Sécurisation des périmètres agricoles :</strong>
                        Grillage des périmètres maraîchers collectifs pour
                        prévenir les conflits agropastoraux et protéger les
                        cultures contre la divagation du bétail.
                    </li>

                    <li>
                        <strong>Renforcement des capacités :</strong>
                        Structuration des producteurs en coopératives et
                        organisation de formations sur les pratiques
                        agroécologiques durables, la gestion des exploitations
                        agricoles et la valorisation des productions locales.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= PÊCHE ================= -->

<section id="peche" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Pêche
        </h2>

        <!-- Introduction -->
        <div class="row mb-5">

            <div class="col-12">

                <div class="card shadow-sm border-0">

                    <div class="card-body">

                        <p class="lead mb-0" style="text-align:justify;">

                            La pêche continentale constitue une activité économique
                            traditionnelle et un important moyen de subsistance
                            dans la commune de <strong>Hamady Hounaré</strong>.
                            Elle est historiquement pratiquée par la communauté
                            des <strong>Subalbé</strong>, mais elle mobilise
                            aujourd'hui l'ensemble des catégories sociales vivant
                            autour du défluent du fleuve <strong>Dioulol</strong>
                            et des mares.

                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- Cartes -->
        <div class="row g-4 justify-content-center">

            <!-- Présentation -->
            <div class="col-lg-4 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-fish fa-3x text-primary mb-3"></i>

                        <h5 class="fw-bold">
                            Présentation de la pêche
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('presentation-peche')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Contraintes -->
            <div class="col-lg-4 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-triangle-exclamation fa-3x text-warning mb-3"></i>

                        <h5 class="fw-bold">
                            Contraintes du secteur
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('contraintes-peche')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Perspectives -->
            <div class="col-lg-4 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-chart-line fa-3x text-success mb-3"></i>

                        <h5 class="fw-bold">
                            Perspectives de développement
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('perspectives-peche')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= PRÉSENTATION DE LA PÊCHE ================= -->

<section id="presentation-peche" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Présentation de la pêche
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">

                    La commune compte environ <strong>40 ménages de pêcheurs</strong>,
                    regroupés au sein d'un <strong>Groupement d'Intérêt Économique (GIE)</strong>
                    dénommé <strong>Mbargu</strong>. Le parc piroguier est composé de
                    <strong>40 embarcations</strong>, tandis que les principaux engins
                    utilisés sont les <strong>filets</strong>, les
                    <strong>palangres</strong> et les <strong>pièges</strong>.
                    Toutefois, ces équipements sont peu sélectifs et contribuent à la
                    surexploitation ainsi qu'à la dégradation des ressources halieutiques.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Le secteur bénéficie également de l'encadrement de
                    <strong>l'ANA</strong>, qui accompagne les initiatives de
                    développement de la pisciculture. Des expériences prometteuses
                    sont en cours, notamment la
                    <strong>ferme piscicole de Ganguel Souley</strong>,
                    d'une capacité de production de
                    <strong>trois tonnes</strong>, illustrant le potentiel de
                    développement de cette activité dans la commune.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Par ailleurs, le <strong>micro-mareyage</strong> constitue
                    une source importante de revenus, particulièrement pour les
                    femmes qui commercialisent le poisson le long de l'axe routier.
                    Cependant, cette activité reste confrontée à des difficultés
                    liées à la conservation des produits et au respect des normes
                    d'hygiène.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= CONTRAINTES DU SECTEUR ================= -->

<section id="contraintes-peche" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Contraintes du secteur
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">

                    Malgré son potentiel, la pêche dans la commune de
                    <strong>Hamady Hounaré</strong> fait face à plusieurs
                    contraintes qui limitent son développement :

                </p>

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Ensablement progressif du Dioulol :</strong>
                        Réduction des habitats aquatiques et diminution des zones
                        favorables au développement des ressources halieutiques.
                    </li>

                    <li class="mb-3">
                        <strong>Effets du barrage situé à Balel (Waoundé) :</strong>
                        Le barrage empêche la remontée naturelle des eaux et des
                        poissons, perturbant le renouvellement des espèces.
                    </li>

                    <li class="mb-3">
                        <strong>Changements climatiques :</strong>
                        L'absence d'inondation des frayères entraîne une baisse
                        importante de la reproduction des espèces aquatiques.
                    </li>

                    <li class="mb-3">
                        <strong>Dégradation des écosystèmes aquatiques :</strong>
                        Diminution progressive des ressources halieutiques et
                        fragilisation de la biodiversité.
                    </li>

                    <li class="mb-3">
                        <strong>Utilisation d'engins de pêche non sélectifs :</strong>
                        Certains équipements contribuent à la surexploitation et à
                        la destruction des ressources halieutiques.
                    </li>

                    <li class="mb-3">
                        <strong>Insuffisance des équipements modernes :</strong>
                        Les pêcheurs disposent de moyens techniques limités pour
                        améliorer leur productivité.
                    </li>

                    <li class="mb-3">
                        <strong>Accès limité au financement :</strong>
                        Les acteurs de la pêche et de la pisciculture rencontrent
                        des difficultés pour accéder au crédit et financer leurs
                        activités.
                    </li>

                    <li class="mb-3">
                        <strong>Insuffisance de formations techniques :</strong>
                        Les opportunités de formation en pisciculture et en gestion
                        des ressources halieutiques restent insuffisantes.
                    </li>

                    <li class="mb-3">
                        <strong>Manque d'infrastructures de conservation :</strong>
                        L'absence d'un camion frigorifique et d'équipements de
                        conservation entraîne d'importantes pertes après la capture.
                    </li>

                    <li>
                        <strong>Difficultés des mareyeuses :</strong>
                        Les femmes actives dans le micro-mareyage sont confrontées
                        à des problèmes de conservation du poisson et au respect
                        des normes d'hygiène.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= PERSPECTIVES DE DÉVELOPPEMENT ================= -->

<section id="perspectives-peche" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Perspectives de développement
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">

                    Afin d'assurer une exploitation durable des ressources
                    halieutiques et de renforcer la contribution du secteur à
                    l'économie locale, plusieurs actions sont envisagées :

                </p>

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Curage du Dioulol :</strong>
                        Réaliser le curage du Dioulol afin de restaurer son
                        fonctionnement écologique et d'améliorer les habitats
                        aquatiques.
                    </li>

                    <li class="mb-3">
                        <strong>Aménagement et empoissonnement des plans d'eau :</strong>
                        Favoriser le renouvellement des ressources halieutiques
                        grâce à des opérations d'aménagement et d'empoissonnement.
                    </li>

                    <li class="mb-3">
                        <strong>Modernisation des équipements de pêche :</strong>
                        Doter les pêcheurs de matériels adaptés, performants et
                        plus sélectifs afin de préserver les ressources.
                    </li>

                    <li class="mb-3">
                        <strong>Accès au financement :</strong>
                        Faciliter l'accès aux crédits et aux mécanismes de
                        financement pour les pêcheurs et les pisciculteurs.
                    </li>

                    <li class="mb-3">
                        <strong>Renforcement des capacités :</strong>
                        Organiser des formations en pisciculture et en gestion
                        durable des ressources halieutiques.
                    </li>

                    <li class="mb-3">
                        <strong>Développement de fermes piscicoles :</strong>
                        Encourager la création et l'extension de fermes
                        piscicoles afin d'accroître la production locale de
                        poisson.
                    </li>

                    <li class="mb-3">
                        <strong>Construction d'une écloserie :</strong>
                        Mettre en place une écloserie pour assurer la
                        disponibilité d'alevins de qualité destinés aux
                        exploitations piscicoles.
                    </li>

                    <li class="mb-3">
                        <strong>Acquisition d'un camion frigorifique :</strong>
                        Renforcer les capacités de conservation, de transport
                        et de commercialisation des produits halieutiques afin
                        de réduire les pertes post-capture.
                    </li>

                    <li>
                        <strong>Promotion de l'assurance agricole :</strong>
                        Encourager la mise en place de mécanismes d'assurance
                        pour mieux protéger les investissements des pêcheurs
                        et des pisciculteurs face aux risques liés à leur
                        activité.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= SANTÉ ================= -->

<section id="sante" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Santé
        </h2>

        <!-- Cartes -->
        <div class="row g-4 justify-content-center">

            <!-- Présentation -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-hospital fa-3x text-primary mb-3"></i>

                        <h5 class="fw-bold">
                            Présentation
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('presentation-sante')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Réalisations -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-hand-holding-medical fa-3x text-success mb-3"></i>

                        <h5 class="fw-bold">
                            Réalisations
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('realisations-sante')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Contraintes -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-triangle-exclamation fa-3x text-warning mb-3"></i>

                        <h5 class="fw-bold">
                            Contraintes
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('contraintes-sante')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Perspectives -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-chart-line fa-3x text-info mb-3"></i>

                        <h5 class="fw-bold">
                            Perspectives
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('perspectives-sante')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- ================= PRESENTATION SANTÉ ================= -->

<section id="presentation-sante" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
          Presentation sante
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">

                   Le secteur de la santé de la commune de Hamady Hounaré est organisé autour d'un poste de SANTE ET D'UN CENTRE DE SANTE RECEMMENT MIS EN SERVICE, PERMETTANT D'AMELIORER progressivement l'accès des populations à des soins de qualité
                </p>

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>centre de santé  :</strong>
                       Le centre de santé dispose d'un personnel qualifié composé d'un médecin, d'une infirmière, d'une aide-infirmière et d'une sage-femme. Le poste de santé, construit grâce à l'appui de la diaspora, offre des services de médecine générale, de santé de la reproduction à travers une maternité, ainsi que des soins courants. La commune bénéficie également de la présence d'une pharmacie privée et d'une mutuelle de santé, qui contribuent à améliorer l'accès aux soins.
                    </li>

                    <li class="mb-3">
                        <strong>Resultat de la commune :</strong>
                       Sur le plan nutritionnel, la commune enregistre des résultats encourageants avec un taux de malnutrition aiguë de 1,22 %, inférieur au seuil de référence, et une couverture de 100 % des villages et quartiers par les services de promotion de la nutrition. Elle dispose également d'une UREN et d'une URENC pour la prise en charge de la malnutrition, soutenues par un réseau dynamique de relais communautaires.
                    </li>
                   

                </ul>

            </div>

        </div>

    </div>

</section>
<!-- ================= REALISATIONS ================= -->

<section id="realisations-sante" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
         REALISATIONS
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

            <p style="text-align:justify; line-height:1.9;">
            Les differentes réalisations mises en place au niveau de la commune:
               </p>

                <p style="text-align:justify; line-height:1.9;">
•	Mise en service d'un centre de santé renforçant l'offre de soins. </br>
•	Disponibilité d'un personnel médical qualifié (médecin, infirmière, aide-infirmière et sage-femme). </br>
•	Construction du poste de santé et de certaines infrastructures par la diaspora. </br>
•	Existence d'une maternité fonctionnelle au poste de santé. </br>
•	Présence d'une pharmacie privée et d'une mutuelle de santé. </br>
•	Couverture intégrale des villages par les services de promotion de la nutrition. </br>
•	Mise en place d'une UREN et d'une URENC pour la prise en charge de la malnutrition. </br>
•	Élaboration d'un plan communal de résilience contre l'insécurité alimentaire et nutritionnelle. </br>
•	Bon niveau de couverture en consultation prénatale (83,1 %) et postnatale (96,6 %). </br>
•	Mise en place d'un Comité de Développement Sanitaire (CDS) pour renforcer la gouvernance locale du secteur. 

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= CONTRAINTES ================= -->

<section id="contraintes-sante" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
       CONTRAINTES
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">
•	Insuffisance de personnel qualifié, notamment l'absence d'un technicien supérieur de laboratoire. </br>
•	Manque d'une seconde ambulance pour assurer les évacuations sanitaires. </br>
•	Ratios de personnel de santé inférieurs aux normes du PNDS (1 infirmier pour 12 771 habitants et 1 sage-femme pour 2 937 femmes en âge de reproduction). </br>
•	Deux salles du poste de santé sont détériorées et nécessitent une réhabilitation. </br>
•	Insuffisance des tables d'accouchement. </br>
•	Vétusté de la maternité et du logement de l'Infirmier Chef de Poste (ICP). </br>
•	Faible taux d'allaitement maternel exclusif et faible consommation de sel iodé par les ménages. </br>
•	Disponibilité insuffisante des intrants pour la prise en charge de la malnutrition aiguë sévère. </br>
•	Forte prévalence des infections respiratoires aiguës, des maladies dermatologiques, de l'hypertension artérielle, des diarrhées et des helminthiases. </br>
•	Difficultés de fonctionnement du Comité de Développement Sanitaire liées à l'insuffisance du suivi communal et à la nouvelle clé de répartition des recettes, qui fragilise la prise en charge du personnel communautaire. 

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= PERSPECTIVES ================= -->

<section id="perspectives-sante" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
       PERSPECTIVES
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">
•	Recruter un technicien supérieur en laboratoire et renforcer les effectifs en personnel qualifié. </br>
•	Acquérir une deuxième ambulance afin d'améliorer les évacuations sanitaires. </br>
•	Réhabiliter les salles détériorées du poste de santé, la maternité et le logement de l'ICP. </br>
•	Renforcer les équipements médicaux, notamment les tables d'accouchement et le matériel technique. </br>
•	Intensifier les campagnes de sensibilisation sur l'allaitement maternel exclusif, la nutrition et la santé de la reproduction. </br>
•	Améliorer la disponibilité des intrants pour la prise en charge de la malnutrition. </br>
•	Renforcer la gouvernance sanitaire locale à travers un meilleur suivi du plan annuel du CDS. </br>
•	Définir un mécanisme durable de financement et de prise en charge du personnel communautaire. </br>
•	Poursuivre les investissements afin d'aligner les infrastructures et les ressources humaines sur les normes du Plan National de Développement Sanitaire (PNDS). </br>
•	Renforcer les actions de prévention contre les infections respiratoires, les maladies dermatologiques et les maladies non transmissibles.


                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= EDUCATION ================= -->

<section id="education-social" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Éducation
        </h2>

        <div class="row g-4 justify-content-center">

            <!-- Présentation -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-school fa-3x text-primary mb-3"></i>

                        <h5 class="fw-bold">
                            Présentation
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('presentation-education-social')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Réalisations -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-award fa-3x text-success mb-3"></i>

                        <h5 class="fw-bold">
                            Réalisations
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('realisations-education-social')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Contraintes -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-triangle-exclamation fa-3x text-warning mb-3"></i>

                        <h5 class="fw-bold">
                            Contraintes
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('contraintes-education-social')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Perspectives -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-chart-line fa-3x text-info mb-3"></i>

                        <h5 class="fw-bold">
                            Perspectives
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('perspectives-education-social')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= PRÉSENTATION DE L'ÉDUCATION ================= -->

<section id="presentation-education-social" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Présentation
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">

                    Le secteur de l’éducation et de la formation de la commune de
                    <strong>Hamady Hounaré</strong> est relativement bien développé
                    et couvre l’ensemble des cycles de l’enseignement formel,
                    allant du préscolaire au secondaire.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    La commune dispose de
                    <strong>deux établissements préscolaires</strong>
                    (une école privée et une Case des Tout-Petits),
                    de <strong>trois écoles élémentaires</strong>,
                    d'un <strong>Collège d’Enseignement Moyen (CEM)</strong>,
                    d'un <strong>lycée</strong>,
                    de <strong>deux écoles franco-arabes</strong>
                    ainsi que de plusieurs <strong>daaras</strong>.
                    Cette diversité de l’offre éducative favorise une bonne
                    couverture géographique, permettant à la majorité des élèves
                    d’accéder à un établissement scolaire à proximité de leur
                    lieu de résidence.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Le secteur est également marqué par une forte implication
                    des communautés, de la diaspora et de l’État, notamment à
                    travers les <strong>Comités de Gestion des Écoles (CGE)</strong>,
                    les fonds de fonctionnement et les innovations pédagogiques
                    comme la plateforme numérique <strong>PLANETE</strong>, qui
                    facilite le suivi scolaire des élèves par les parents,
                    y compris ceux vivant à l’étranger.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Malgré ces acquis, le secteur fait face à des défis liés
                    aux infrastructures, aux équipements, au personnel enseignant
                    et au maintien des garçons dans le système éducatif.
                    L’amélioration de la qualité des apprentissages, de
                    l’environnement scolaire et de l’accès à la formation
                    professionnelle demeure une priorité.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= RÉALISATIONS DE L'ÉDUCATION ================= -->

<section id="realisations-education-social" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Réalisations
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Présence de tous les niveaux de l’enseignement formel :</strong>
                        Préscolaire, élémentaire, moyen, secondaire et
                        enseignement franco-arabe.
                    </li>

                    <li class="mb-3">
                        <strong>Renforcement des infrastructures scolaires :</strong>
                        La commune dispose de
                        <strong>2 établissements préscolaires</strong>,
                        <strong>3 écoles élémentaires</strong>,
                        <strong>1 CEM</strong>,
                        <strong>1 lycée</strong>,
                        <strong>2 écoles franco-arabes</strong>
                        ainsi que de plusieurs <strong>daaras</strong>.
                    </li>

                    <li class="mb-3">
                        <strong>Bonne couverture géographique :</strong>
                        Tous les quartiers bénéficient d’un accès à une école
                        élémentaire située à moins de deux kilomètres.
                    </li>

                    <li class="mb-3">
                        <strong>Amélioration du cadre scolaire :</strong>
                        Toutes les écoles élémentaires disposent de
                        points d’eau, de latrines séparées et de murs de clôture,
                        garantissant un environnement d’apprentissage plus sûr.
                    </li>

                    <li class="mb-3">
                        <strong>Gestion participative :</strong>
                        Mise en place des
                        <strong>Comités de Gestion des Écoles (CGE)</strong>
                        favorisant l’implication des communautés dans la gestion
                        des établissements.
                    </li>

                    <li class="mb-3">
                        <strong>Appui institutionnel :</strong>
                        Soutien financier de l’État et de la commune au
                        fonctionnement des établissements scolaires.
                    </li>

                    <li class="mb-3">
                        <strong>Excellents résultats scolaires :</strong>
                        Les résultats obtenus aux examens nationaux
                        (CFEE, BFEM et Baccalauréat) sont régulièrement
                        supérieurs aux moyennes régionales pour plusieurs sessions.
                    </li>

                    <li class="mb-3">
                        <strong>Promotion de l’éducation des filles :</strong>
                        Bonne représentativité des filles dans les différents
                        cycles d’enseignement.
                    </li>

                    <li class="mb-3">
                        <strong>Innovation numérique :</strong>
                        Mise en œuvre de la plateforme
                        <strong>PLANETE</strong> au lycée et au CEM,
                        facilitant le suivi pédagogique et administratif
                        des élèves.
                    </li>

                    <li>
                        <strong>Contribution de la diaspora :</strong>
                        Participation active des ressortissants de la commune
                        au financement et au développement des infrastructures
                        éducatives.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= CONTRAINTES DE L'ÉDUCATION ================= -->

<section id="contraintes-education-social" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Contraintes
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Insuffisance du personnel enseignant :</strong>
                        Les écoles élémentaires connaissent un déficit d’enseignants,
                        ce qui impacte la qualité des apprentissages.
                    </li>

                    <li class="mb-3">
                        <strong>Déficit en infrastructures scolaires :</strong>
                        Plusieurs établissements manquent de salles de classe et
                        de tables-bancs pour accueillir les élèves dans de bonnes
                        conditions.
                    </li>

                    <li class="mb-3">
                        <strong>Préscolaire insuffisamment équipé :</strong>
                        Les structures préscolaires disposent de peu d’équipements
                        pédagogiques et la Case des Tout-Petits est dans un état
                        précaire.
                    </li>

                    <li class="mb-3">
                        <strong>Absence d’électricité et d’Internet :</strong>
                        Les écoles élémentaires ne disposent ni d’un accès à
                        l’électricité ni d’une connexion Internet.
                    </li>

                    <li class="mb-3">
                        <strong>Manque de ressources pédagogiques :</strong>
                        Insuffisance de manuels scolaires, de bibliothèques et
                        de matériels informatiques, particulièrement au CEM
                        et au lycée.
                    </li>

                    <li class="mb-3">
                        <strong>Absence de salle informatique au CEM :</strong>
                        Le collège ne dispose pas d’une salle informatique
                        adaptée aux besoins des élèves.
                    </li>

                    <li class="mb-3">
                        <strong>Insuffisance de cantines scolaires :</strong>
                        Certaines écoles primaires ne bénéficient pas de
                        cantines pour les élèves.
                    </li>

                    <li class="mb-3">
                        <strong>Difficulté de maintien des garçons à l’école :</strong>
                        Des facteurs socioculturels, l’orientation vers les
                        daaras et les phénomènes de migration contribuent
                        à l’abandon scolaire.
                    </li>

                    <li class="mb-3">
                        <strong>Faible implication des acteurs locaux :</strong>
                        Les associations de parents d’élèves et les collectivités
                        territoriales participent encore insuffisamment à la
                        gestion des établissements.
                    </li>

                    <li class="mb-3">
                        <strong>Conditions précaires dans les écoles franco-arabes et les daaras :</strong>
                        Ces structures souffrent d’un manque d’équipements,
                        d’une absence de protection sociale et du recours
                        à la mendicité pour certains apprenants.
                    </li>

                    <li class="mb-3">
                        <strong>Absence de structures d’alphabétisation :</strong>
                        La commune ne dispose pas de structures
                        d’alphabétisation pleinement fonctionnelles.
                    </li>

                    <li>
                        <strong>Manque de formation professionnelle :</strong>
                        L’inexistence d’un centre de formation professionnelle
                        limite les possibilités d’insertion des jeunes.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= PERSPECTIVES DE L'ÉDUCATION ================= -->

<section id="perspectives-education-social" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Perspectives
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">

                    Afin d'améliorer durablement la qualité de l'enseignement et de
                    garantir un accès équitable à une éducation de qualité pour tous,
                    plusieurs actions prioritaires sont envisagées :

                </p>

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Renforcement du personnel enseignant :</strong>
                        Augmenter les effectifs des enseignants à tous les niveaux
                        afin d'améliorer les conditions d'encadrement des élèves.
                    </li>

                    <li class="mb-3">
                        <strong>Extension des infrastructures scolaires :</strong>
                        Construire de nouvelles salles de classe et créer une
                        nouvelle école primaire pour répondre à la croissance
                        des effectifs.
                    </li>

                    <li class="mb-3">
                        <strong>Réhabilitation du préscolaire :</strong>
                        Réhabiliter et équiper la Case des Tout-Petits afin
                        d'offrir un meilleur cadre d'apprentissage aux jeunes enfants.
                    </li>

                    <li class="mb-3">
                        <strong>Renforcement des équipements scolaires :</strong>
                        Doter les établissements d'au moins
                        <strong>600 tables-bancs</strong> et renforcer les
                        équipements pédagogiques.
                    </li>

                    <li class="mb-3">
                        <strong>Amélioration des ressources pédagogiques :</strong>
                        Fournir suffisamment de manuels scolaires, d'ouvrages
                        de bibliothèque et de matériels informatiques.
                    </li>

                    <li class="mb-3">
                        <strong>Accès à l'électricité et à Internet :</strong>
                        Raccorder les écoles primaires aux réseaux d'électricité
                        et d'Internet afin de favoriser l'enseignement numérique.
                    </li>

                    <li class="mb-3">
                        <strong>Création de salles informatiques :</strong>
                        Mettre en place des salles informatiques,
                        notamment au Collège d'Enseignement Moyen (CEM).
                    </li>

                    <li class="mb-3">
                        <strong>Développement des cantines scolaires :</strong>
                        Étendre les cantines aux écoles qui n'en disposent pas
                        afin d'améliorer les conditions d'apprentissage.
                    </li>

                    <li class="mb-3">
                        <strong>Renforcement de la sécurité :</strong>
                        Recruter des gardiens pour assurer la sécurité
                        du lycée et du CEM.
                    </li>

                    <li class="mb-3">
                        <strong>Promotion de la scolarisation :</strong>
                        Intensifier les campagnes de sensibilisation pour
                        favoriser la scolarisation et le maintien des garçons
                        dans le système éducatif.
                    </li>

                    <li class="mb-3">
                        <strong>Développement de l'alphabétisation :</strong>
                        Créer des classes d'alphabétisation afin de réduire
                        l'analphabétisme dans la commune.
                    </li>

                    <li class="mb-3">
                        <strong>Modernisation des daaras :</strong>
                        Améliorer les conditions de fonctionnement des
                        écoles coraniques par un meilleur équipement
                        et un accompagnement adapté.
                    </li>

                    <li>
                        <strong>Création d'un centre de formation professionnelle :</strong>
                        Mettre en place une structure de formation
                        professionnelle adaptée aux besoins de la commune,
                        notamment dans les métiers liés au secteur minier,
                        afin de renforcer l'employabilité des jeunes
                        et de favoriser l'utilisation de la main-d'œuvre locale.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= JEUNESSE ET SPORT ================= -->

<section id="jeunesse-sport" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Jeunesse et Sport
        </h2>

        <div class="row g-4 justify-content-center">

            <!-- Présentation -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-users fa-3x text-primary mb-3"></i>

                        <h5 class="fw-bold">
                            Présentation
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('presentation-jeunesse')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Réalisations -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-medal fa-3x text-success mb-3"></i>

                        <h5 class="fw-bold">
                            Réalisations
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('realisations-jeunesse')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Contraintes -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-triangle-exclamation fa-3x text-warning mb-3"></i>

                        <h5 class="fw-bold">
                            Contraintes
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('contraintes-jeunesse')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Perspectives -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-chart-line fa-3x text-info mb-3"></i>

                        <h5 class="fw-bold">
                            Perspectives
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('perspectives-jeunesse')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= PRÉSENTATION JEUNESSE ET SPORT ================= -->

<section id="presentation-jeunesse" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Présentation
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">

                    La commune de <strong>Hamady Hounaré</strong> dispose d'une population majoritairement jeune, les personnes de moins de 35 ans représentant <strong>64 %</strong> de la population communale. Cette forte proportion de jeunes constitue un important potentiel de développement économique et social. Toutefois, leur insertion socioprofessionnelle demeure un défi majeur en raison du chômage, du faible accès aux ressources productives et de l'insuffisance des espaces de loisirs et d'encadrement.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Le sport occupe une place importante dans la vie communautaire, notamment à travers la pratique du football populaire. La commune compte <strong>neuf (09) Associations Sportives et Culturelles (ASC)</strong> qui participent chaque année aux compétitions de <strong>Navétanes</strong>, organisées sous l'égide de l'ODCAV. Malgré cet engouement, les infrastructures sportives restent très insuffisantes et le développement des différentes disciplines sportives est limité.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= RÉALISATIONS JEUNESSE ET SPORT ================= -->

<section id="realisations-jeunesse" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Réalisations
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Associations Sportives et Culturelles (ASC) :</strong>
                        La commune compte <strong>neuf (09) ASC</strong> actives qui participent à l'animation de la vie sportive et culturelle locale.
                    </li>

                    <li class="mb-3">
                        <strong>Organisation des compétitions de Navétanes :</strong>
                        Les compétitions de Navétanes sont organisées chaque année, favorisant la cohésion sociale, le brassage entre les jeunes et la promotion de la pratique sportive.
                    </li>

                    <li class="mb-3">
                        <strong>Soutien financier aux ASC :</strong>
                        La commune accorde une <strong>subvention annuelle de 1 000 000 FCFA</strong> aux Associations Sportives et Culturelles afin de soutenir leurs activités et leur fonctionnement.
                    </li>

                    <li>
                        <strong>Formation et insertion des jeunes :</strong>
                        Des sessions de formation ont été réalisées au profit des jeunes avec l'appui de la commune et de la <strong>SOMIVA</strong>, contribuant au renforcement de leurs compétences et à leur employabilité.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= CONTRAINTES JEUNESSE ET SPORT ================= -->

<section id="contraintes-jeunesse" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Contraintes
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Chômage des jeunes :</strong>
                        Taux élevé de chômage et difficultés d'insertion socioprofessionnelle des jeunes.
                    </li>

                    <li class="mb-3">
                        <strong>Faible employabilité :</strong>
                        Accès limité des jeunes aux ressources productives et aux opportunités d'emploi.
                    </li>

                    <li class="mb-3">
                        <strong>Insuffisance des formations qualifiantes :</strong>
                        Les formations professionnelles demeurent insuffisantes et peu adaptées aux besoins du marché de l'emploi.
                    </li>

                    <li class="mb-3">
                        <strong>Manque d'espaces de loisirs :</strong>
                        Insuffisance d'espaces de loisirs, de rencontre et d'encadrement destinés aux jeunes.
                    </li>

                    <li class="mb-3">
                        <strong>Exode des jeunes :</strong>
                        Risque important d'exode rural et d'émigration des jeunes à la recherche de meilleures opportunités.
                    </li>

                    <li class="mb-3">
                        <strong>Infrastructures sportives insuffisantes :</strong>
                        La commune ne dispose que d'un seul terrain de football, insuffisant pour répondre aux besoins de la population.
                    </li>

                    <li class="mb-3">
                        <strong>Faible professionnalisation du sport :</strong>
                        Absence de clubs sportifs professionnels et faible développement des différentes disciplines sportives.
                    </li>

                    <li class="mb-3">
                        <strong>Formation des acteurs sportifs :</strong>
                        Manque de formation des encadreurs, arbitres et entraîneurs, limitant le développement du sport local.
                    </li>

                    <li>
                        <strong>Accès limité aux opportunités minières :</strong>
                        Faible implication des jeunes dans les opportunités offertes par les sociétés minières, faute de qualifications adaptées.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= PERSPECTIVES JEUNESSE ET SPORT ================= -->

<section id="perspectives-jeunesse" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Perspectives
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Promotion de l'emploi des jeunes :</strong>
                        Élaborer une politique locale de jeunesse axée sur l'insertion socioprofessionnelle, l'entrepreneuriat et la création d'emplois.
                    </li>

                    <li class="mb-3">
                        <strong>Renforcement des compétences :</strong>
                        Développer les programmes de formation professionnelle et entrepreneuriale afin d'améliorer l'employabilité des jeunes.
                    </li>

                    <li class="mb-3">
                        <strong>Accès au financement :</strong>
                        Faciliter l'accès des jeunes aux mécanismes de financement pour la création et le développement d'activités génératrices de revenus.
                    </li>

                    <li class="mb-3">
                        <strong>Création d'un espace jeunesse :</strong>
                        Construire un espace jeunesse destiné aux activités éducatives, sportives, culturelles et de loisirs.
                    </li>

                    <li class="mb-3">
                        <strong>Emploi dans les sociétés minières :</strong>
                        Plaider auprès des sociétés minières afin de favoriser le recrutement de la main-d'œuvre locale.
                    </li>

                    <li class="mb-3">
                        <strong>Modernisation des infrastructures sportives :</strong>
                        Aménager le stade municipal par la construction de tribunes, l'installation de projecteurs et la réalisation d'une clôture sécurisée.
                    </li>

                    <li class="mb-3">
                        <strong>Formation sportive :</strong>
                        Créer un centre de formation sportive multidisciplinaire intégrant le football, l'arbitrage et d'autres disciplines sportives.
                    </li>

                    <li class="mb-3">
                        <strong>Sensibilisation de la jeunesse :</strong>
                        Intensifier les campagnes de sensibilisation sur les dangers de l'immigration clandestine et promouvoir les opportunités d'insertion locale.
                    </li>

                    <li>
                        <strong>Développement du sport :</strong>
                        Réaliser de nouvelles infrastructures sportives modernes afin de promouvoir la pratique du sport, détecter les talents locaux et favoriser l'émergence d'une relève sportive de qualité.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= CULTURE ================= -->

<section id="culture-social" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Culture
        </h2>

        <div class="row g-4 justify-content-center">

            <!-- Présentation -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-landmark fa-3x text-primary mb-3"></i>

                        <h5 class="fw-bold">
                            Présentation
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('presentation-culture')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Réalisations -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-award fa-3x text-success mb-3"></i>

                        <h5 class="fw-bold">
                            Réalisations
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('realisations-culture')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Contraintes -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-triangle-exclamation fa-3x text-warning mb-3"></i>

                        <h5 class="fw-bold">
                            Contraintes
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('contraintes-culture')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Perspectives -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-chart-line fa-3x text-info mb-3"></i>

                        <h5 class="fw-bold">
                            Perspectives
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('perspectives-culture')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= PRÉSENTATION CULTURE ================= -->

<section id="presentation-culture" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Présentation
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">

                    La commune de <strong>Hamady Hounaré</strong> bénéficie d'une riche diversité culturelle, fruit de la coexistence harmonieuse de plusieurs communautés partageant des traditions, des coutumes et un patrimoine culturel variés. Cette diversité constitue un véritable facteur de cohésion sociale et participe au renforcement de l'identité de la commune.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Les manifestations culturelles s'expriment principalement à travers les cérémonies familiales, les événements traditionnels ainsi que les journées culturelles organisées dans certains quartiers. Elles contribuent à la préservation des valeurs culturelles locales et favorisent les échanges entre les différentes communautés.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Malgré ces atouts, la promotion de la culture demeure encore insuffisante. Le développement d'infrastructures culturelles, l'organisation régulière d'activités culturelles et la valorisation du patrimoine local constituent des enjeux majeurs pour renforcer le rayonnement culturel de la commune.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= RÉALISATIONS CULTURE ================= -->

<section id="realisations-culture" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Réalisations
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Organisation de journées culturelles :</strong>
                        Des journées culturelles sont organisées, notamment dans le quartier de <strong>Maboubé</strong>, contribuant à la promotion des traditions, des valeurs culturelles et du patrimoine local.
                    </li>

                    <li class="mb-3">
                        <strong>Infrastructure sportive communale :</strong>
                        La commune dispose d'un <strong>terrain de football</strong> servant d'espace de pratique sportive et d'organisation des compétitions locales.
                    </li>

                    <li>
                        <strong>Vie associative :</strong>
                        La commune compte plusieurs <strong>Associations Sportives et Culturelles (ASC)</strong> qui participent activement à l'animation de la vie communautaire à travers l'organisation d'activités sportives, culturelles et de sensibilisation.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= CONTRAINTES CULTURE ================= -->

<section id="contraintes-culture" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Contraintes
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li>
                        <strong>Faible promotion de la culture :</strong>
                        La valorisation du patrimoine culturel local demeure insuffisante, en raison du faible niveau de promotion des activités culturelles et du manque d'appui aux acteurs culturels de la commune.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= PERSPECTIVES CULTURE ================= -->

<section id="perspectives-culture" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Perspectives
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Création d'infrastructures socioculturelles :</strong>
                        Construire un <strong>centre socioculturel</strong> ainsi qu'un <strong>espace jeunesse</strong> destinés à accueillir des activités éducatives, sportives et culturelles au profit de la population.
                    </li>

                    <li>
                        <strong>Promotion de la culture :</strong>
                        Renforcer la valorisation du patrimoine culturel par l'organisation régulière de journées culturelles et le soutien aux troupes artistiques, afin de préserver les traditions locales et de favoriser le rayonnement culturel de la commune.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= HYDRAULIQUE ET ASSAINISSEMENT ================= -->

<section id="hydraulique" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Hydraulique et Assainissement
        </h2>

        <div class="row g-4 justify-content-center">

            <!-- Situation de l’hydraulique -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-faucet-drip fa-3x text-primary mb-3"></i>

                        <h5 class="fw-bold">
                            Situation de l’hydraulique
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('situation-hydraulique')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Situation de l’assainissement -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-water fa-3x text-success mb-3"></i>

                        <h5 class="fw-bold">
                            Situation de l’assainissement
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('situation-assainissement')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Contraintes -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-triangle-exclamation fa-3x text-warning mb-3"></i>

                        <h5 class="fw-bold">
                            Contraintes du secteur
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('contraintes-hydraulique')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Perspectives -->
            <div class="col-lg-3 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-chart-line fa-3x text-info mb-3"></i>

                        <h5 class="fw-bold">
                            Perspectives de développement
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('perspectives-hydraulique')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= SITUATION DE L'HYDRAULIQUE ================= -->

<section id="situation-hydraulique" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Situation de l'hydraulique
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">

                    L’accès à l’eau potable dans la commune de <strong>Hamady Hounaré</strong> est assuré par un forage d’un débit de <strong>30 m³/heure</strong>, géré par l’<strong>Association des Usagers du Forage (ASUFOR)</strong>. Fonctionnant à l’électricité, ce forage permet de réduire les coûts d’exploitation et alimente les populations à travers un réseau d’adduction d’eau desservant les différents quartiers de la commune. Le réseau comprend principalement des branchements privés ainsi que quelques bornes-fontaines publiques.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Dans l’ensemble, la qualité du service est jugée satisfaisante par les populations, les interruptions d’approvisionnement étant relativement rares. La commune dispose également d’autres ressources hydriques, notamment des puits, du défluent du <strong>Dioulol</strong> et de la nappe phréatique, qui constituent des atouts importants pour le développement local.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Toutefois, la gestion du service de l’eau demeure perfectible. L’ASUFOR fait face à un manque de capacités techniques et organisationnelles, notamment en raison de l’absence d’un système informatisé de facturation. Certains quartiers connaissent également une faible pression d’eau liée au faible diamètre des conduites, tandis qu’une grande partie du quartier de <strong>Fass</strong> reste insuffisamment desservie. Le quartier de <strong>Maboubé</strong> ne dispose pas de bornes-fontaines publiques, limitant ainsi l’accès à l’eau pour une partie de la population.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    L’accessibilité économique constitue également un défi. Le prix du mètre cube d’eau, fixé à <strong>300 F CFA</strong>, est jugé élevé par les habitants, en particulier par les exploitants de périmètres maraîchers qui ne bénéficient d’aucune tarification spécifique adaptée à leurs activités. Cette situation freine le développement du maraîchage et limite la disponibilité de produits alimentaires diversifiés.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Face aux difficultés d’approvisionnement, certains ménages continuent d’utiliser l’eau des puits, dont la qualité n’est pas toujours conforme aux normes sanitaires. Cette pratique accroît les risques de maladies hydriques, notamment les maladies diarrhéiques, qui touchent particulièrement les enfants et les femmes enceintes. En outre, les difficultés d’accès à l’eau augmentent la charge de travail des femmes, qui consacrent davantage de temps à la collecte de l’eau au détriment des activités génératrices de revenus.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= SITUATION DE L'ASSAINISSEMENT ================= -->

<section id="situation-assainissement" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Situation de l'assainissement
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">

                    Le secteur de l’assainissement reste peu développé dans la commune de <strong>Hamady Hounaré</strong>. Il se caractérise par l’absence de réseau de collecte et d’évacuation des eaux usées ainsi que par l’inexistence d’un système de drainage des eaux pluviales. Les ménages recourent principalement à des systèmes d’assainissement autonomes, notamment les fosses perdues et les latrines traditionnelles.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    La commune ne dispose pas non plus d’un site de traitement des boues de vidange. Celles-ci sont souvent déversées dans la nature, exposant ainsi les populations à d’importants risques sanitaires et environnementaux.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    L’absence de système de drainage provoque régulièrement des inondations pendant la saison des pluies. Ces inondations perturbent la circulation, compromettent la sécurité des populations et favorisent la prolifération de maladies liées à l’insalubrité.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Enfin, la commune ne dispose pas encore d’un <strong>Plan Directeur d’Assainissement (PDA)</strong>, indispensable pour assurer une planification cohérente, durable et efficace des investissements dans le secteur de l’assainissement et améliorer durablement le cadre de vie des populations.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= CONTRAINTES HYDRAULIQUE ET ASSAINISSEMENT ================= -->

<section id="contraintes-hydraulique" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Contraintes du secteur
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Couverture insuffisante du réseau d'eau potable :</strong>
                        Le réseau d'adduction d'eau ne couvre pas encore l'ensemble des quartiers de la commune.
                    </li>

                    <li class="mb-3">
                        <strong>Accessibilité économique limitée :</strong>
                        Le prix élevé du mètre cube d'eau constitue un frein pour de nombreux ménages et pour les exploitants agricoles.
                    </li>

                    <li class="mb-3">
                        <strong>Faible pression d'eau :</strong>
                        Certains secteurs connaissent une faible pression en raison du mauvais dimensionnement des conduites du réseau.
                    </li>

                    <li class="mb-3">
                        <strong>Risques sanitaires :</strong>
                        L'utilisation d'eau de puits non traitée expose une partie de la population à des maladies d'origine hydrique.
                    </li>

                    <li class="mb-3">
                        <strong>Capacités limitées de l'ASUFOR :</strong>
                        L'Association des Usagers du Forage dispose de moyens techniques et organisationnels encore insuffisants pour assurer une gestion optimale du service.
                    </li>

                    <li class="mb-3">
                        <strong>Infrastructures insuffisantes :</strong>
                        Les équipements d'approvisionnement en eau ne répondent plus pleinement aux besoins liés à la croissance démographique.
                    </li>

                    <li class="mb-3">
                        <strong>Absence de réseau d'assainissement :</strong>
                        La commune ne dispose ni de réseau de collecte ni de système de traitement des eaux usées.
                    </li>

                    <li class="mb-3">
                        <strong>Déficit de drainage :</strong>
                        L'inexistence d'un système de drainage des eaux pluviales favorise les stagnations d'eau et les inondations.
                    </li>

                    <li class="mb-3">
                        <strong>Gestion des boues de vidange :</strong>
                        L'absence d'un site de traitement des boues de vidange constitue un risque pour l'environnement et la santé publique.
                    </li>

                    <li class="mb-3">
                        <strong>Inondations récurrentes :</strong>
                        Les fortes pluies provoquent régulièrement des inondations qui perturbent les déplacements et les activités économiques.
                    </li>

                    <li>
                        <strong>Absence de planification :</strong>
                        La commune ne dispose pas encore d'un <strong>Plan Directeur d'Assainissement (PDA)</strong>, indispensable pour orienter les investissements et assurer un développement durable du secteur.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= PERSPECTIVES HYDRAULIQUE ET ASSAINISSEMENT ================= -->

<section id="perspectives-hydraulique" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Perspectives de développement
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Extension du réseau d'eau potable :</strong>
                        Étendre le réseau d’adduction d’eau vers les quartiers qui ne sont pas encore desservis afin d'améliorer l'accès universel à l'eau potable.
                    </li>

                    <li class="mb-3">
                        <strong>Renforcement des infrastructures hydrauliques :</strong>
                        Construire un deuxième forage pour répondre aux besoins croissants de la population et sécuriser l'approvisionnement en eau.
                    </li>

                    <li class="mb-3">
                        <strong>Révision de la tarification de l'eau :</strong>
                        Adapter le système de tarification en fonction des usages et des catégories d'usagers, notamment pour soutenir les activités maraîchères.
                    </li>

                    <li class="mb-3">
                        <strong>Modernisation de la gestion de l'ASUFOR :</strong>
                        Informatiser le système de facturation et renforcer les capacités techniques et organisationnelles de l'ASUFOR afin d'améliorer la qualité du service.
                    </li>

                    <li class="mb-3">
                        <strong>Amélioration du réseau de distribution :</strong>
                        Renouveler les conduites de distribution pour améliorer la pression de l'eau dans les quartiers insuffisamment desservis.
                    </li>

                    <li class="mb-3">
                        <strong>Amélioration de la qualité de l'eau :</strong>
                        Installer une unité de potabilisation afin de garantir une eau conforme aux normes sanitaires.
                    </li>

                    <li class="mb-3">
                        <strong>Sensibilisation des populations :</strong>
                        Développer des campagnes de sensibilisation sur les bonnes pratiques en matière d'eau, d'hygiène et d'assainissement (WASH).
                    </li>

                    <li class="mb-3">
                        <strong>Planification du secteur :</strong>
                        Élaborer un Plan Directeur d'Assainissement pour assurer une planification cohérente et durable des investissements.
                    </li>

                    <li class="mb-3">
                        <strong>Gestion des boues de vidange :</strong>
                        Acquérir un camion de vidange afin d'améliorer la collecte, le transport et la gestion des boues de vidange.
                    </li>

                    <li class="mb-3">
                        <strong>Lutte contre les inondations :</strong>
                        Mettre à disposition des motopompes et réaliser des canaux de drainage et d'évacuation des eaux pluviales afin de réduire les risques d'inondation.
                    </li>

                    <li>
                        <strong>Restructuration des quartiers vulnérables :</strong>
                        Accompagner ces investissements par la restructuration des quartiers les plus exposés afin d'améliorer durablement le cadre de vie des populations.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= ENVIRONNEMENT ET CADRE DE VIE ================= -->

<section id="environnement" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Environnement et cadre de vie
        </h2>

        <div class="row g-4 justify-content-center">

            <!-- Situation de l'environnement -->
            <div class="col-lg-4 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-leaf fa-3x text-success mb-3"></i>

                        <h5 class="fw-bold">
                            Situation de l’environnement et du cadre de vie
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('situation-environnement')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Contraintes -->
            <div class="col-lg-4 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-triangle-exclamation fa-3x text-warning mb-3"></i>

                        <h5 class="fw-bold">
                            Contraintes du secteur
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('contraintes-environnement')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Perspectives -->
            <div class="col-lg-4 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-seedling fa-3x text-info mb-3"></i>

                        <h5 class="fw-bold">
                            Perspectives de développement
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('perspectives-environnement')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= SITUATION DE L'ENVIRONNEMENT ET DU CADRE DE VIE ================= -->

<section id="situation-environnement" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Situation de l’environnement et du cadre de vie
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">

                    La commune de <strong>Hamady Hounaré</strong> dispose d’importantes ressources naturelles, notamment le défluent du <strong>Dioulol</strong>, qui joue un rôle essentiel dans les activités agricoles, pastorales et halieutiques. La commune bénéficie également de zones loties et d’un réseau d’éclairage public le long de la <strong>Route Nationale n°2</strong>, constituant des atouts pour son développement urbain.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Toutefois, l’environnement communal est soumis à de fortes pressions liées aux activités humaines et aux effets des changements climatiques. Au sud de la commune, l’exploitation des mines de phosphate a profondément modifié le paysage en détruisant une grande partie des ressources naturelles et des terres cultivables. Cette activité a laissé d’importantes excavations qui limitent désormais les possibilités d’exploitation agricole et d’autres usages économiques des terres. En outre, les émissions de poussières générées par les activités minières sont à l’origine d’une pollution atmosphérique susceptible d’affecter la santé des populations, notamment par l’augmentation des affections respiratoires.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Au nord de la commune, les aménagements hydro-agricoles ont entraîné un déboisement important, exposant davantage les sols à l’érosion hydrique. Les effets des changements climatiques accentuent cette dégradation avec des déficits pluviométriques récurrents qui provoquent une baisse significative du niveau des eaux du Dioulol. Cette situation est aggravée par l’ensablement progressif du cours d’eau, entraînant une dégradation des écosystèmes aquatiques ainsi qu’une perte progressive de la biodiversité.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Le cadre de vie demeure également marqué par plusieurs insuffisances. Le système de collecte des déchets ménagers reste rudimentaire, favorisant la prolifération de dépôts sauvages d’ordures et la dégradation de l’environnement urbain. Le réseau de voirie est limité à la traversée de la commune par la <strong>Route Nationale n°2</strong>, tandis que plusieurs quartiers ne bénéficient pas encore de l’éclairage public. En outre, l’absence d’espaces verts et de lieux de détente réduit la qualité du cadre de vie des populations.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    L’amélioration du cadre de vie constitue un enjeu majeur pour la commune. Elle permettra non seulement de préserver les ressources naturelles et l’environnement, mais également de mieux tirer profit des opportunités économiques offertes par le développement de l’exploitation minière et de renforcer l’attractivité de Hamady Hounaré pour les populations, les investisseurs et les partenaires au développement.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= CONTRAINTES DE L'ENVIRONNEMENT ET DU CADRE DE VIE ================= -->

<section id="contraintes-environnement" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Contraintes du secteur
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Dégradation des ressources naturelles :</strong>
                        L’exploitation minière entraîne une dégradation importante des ressources naturelles de la commune.
                    </li>

                    <li class="mb-3">
                        <strong>Destruction des terres cultivables :</strong>
                        Les activités minières provoquent la disparition de nombreuses terres agricoles et la création d’importantes excavations.
                    </li>

                    <li class="mb-3">
                        <strong>Déboisement massif :</strong>
                        Les aménagements hydro-agricoles et les activités humaines ont entraîné un important déboisement, notamment dans la zone du Dioulol.
                    </li>

                    <li class="mb-3">
                        <strong>Pollution atmosphérique :</strong>
                        Les émissions de poussières provenant des exploitations minières dégradent la qualité de l’air et présentent des risques pour la santé des populations.
                    </li>

                    <li class="mb-3">
                        <strong>Érosion des sols et ensablement :</strong>
                        L’érosion hydrique et l’ensablement progressif du Dioulol fragilisent les écosystèmes et réduisent les capacités de production.
                    </li>

                    <li class="mb-3">
                        <strong>Baisse des ressources en eau :</strong>
                        Les changements climatiques entraînent une diminution des ressources hydriques disponibles dans la commune.
                    </li>

                    <li class="mb-3">
                        <strong>Perte de biodiversité :</strong>
                        Les écosystèmes aquatiques connaissent une dégradation progressive qui menace la faune et la flore locales.
                    </li>

                    <li class="mb-3">
                        <strong>Urbanisation insuffisamment aménagée :</strong>
                        Plusieurs quartiers traditionnels demeurent insuffisamment lotis et aménagés.
                    </li>

                    <li class="mb-3">
                        <strong>Éclairage public insuffisant :</strong>
                        La couverture en éclairage public reste limitée dans plusieurs quartiers de la commune.
                    </li>

                    <li class="mb-3">
                        <strong>Manque d'espaces verts :</strong>
                        L'absence d'espaces verts et de lieux de loisirs réduit la qualité du cadre de vie des populations.
                    </li>

                    <li class="mb-3">
                        <strong>Gestion insuffisante des déchets :</strong>
                        Le système de collecte des ordures ménagères demeure peu performant et ne couvre pas efficacement l'ensemble de la commune.
                    </li>

                    <li class="mb-3">
                        <strong>Dépôts sauvages de déchets :</strong>
                        La multiplication des dépôts sauvages contribue à la dégradation de l'environnement et favorise les risques sanitaires.
                    </li>

                    <li>
                        <strong>Insuffisance des infrastructures de voirie :</strong>
                        Le réseau de voirie demeure insuffisant pour accompagner le développement urbain et améliorer les conditions de mobilité.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= PERSPECTIVES DE L'ENVIRONNEMENT ET DU CADRE DE VIE ================= -->

<section id="perspectives-environnement" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Perspectives de développement
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Mise en œuvre du PGES de la SOMIVA :</strong>
                        Assurer l'application effective du Plan de Gestion Environnementale et Sociale (PGES) afin de limiter les impacts environnementaux de l'exploitation minière.
                    </li>

                    <li class="mb-3">
                        <strong>Élaboration du PGES de la SERPM :</strong>
                        Élaborer et mettre en œuvre le Plan de Gestion Environnementale et Sociale (PGES) de la SERPM pour garantir une exploitation respectueuse de l'environnement.
                    </li>

                    <li class="mb-3">
                        <strong>Programme de reboisement :</strong>
                        Mettre en œuvre un vaste programme de reboisement afin de restaurer le couvert végétal et lutter contre la désertification.
                    </li>

                    <li class="mb-3">
                        <strong>Lutte contre l'érosion :</strong>
                        Réaliser des ouvrages de protection et de lutte antiérosive pour limiter les inondations et l'ensablement progressif du Dioulol.
                    </li>

                    <li class="mb-3">
                        <strong>Aménagement des quartiers :</strong>
                        Restructurer et aménager les quartiers traditionnels afin d'améliorer durablement le cadre de vie des populations.
                    </li>

                    <li class="mb-3">
                        <strong>Extension de l'éclairage public :</strong>
                        Étendre le réseau d'éclairage public à l'ensemble des quartiers pour améliorer la sécurité et les conditions de vie.
                    </li>

                    <li class="mb-3">
                        <strong>Création d'espaces verts :</strong>
                        Aménager des espaces verts et des sites de détente dans les différents quartiers afin d'embellir le cadre de vie et de favoriser les loisirs.
                    </li>

                    <li class="mb-3">
                        <strong>Renforcement de la gestion des déchets :</strong>
                        Moderniser le système de collecte des ordures ménagères par l'acquisition de bennes tasseuses et d'équipements adaptés.
                    </li>

                    <li class="mb-3">
                        <strong>Mise en place de décharges contrôlées :</strong>
                        Créer des décharges contrôlées pour assurer une gestion durable et sécurisée des déchets solides.
                    </li>

                    <li>
                        <strong>Protection des ressources naturelles :</strong>
                        Renforcer les actions de préservation des ressources naturelles et de la biodiversité afin d'améliorer la résilience de la commune face aux effets des changements climatiques.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= URBANISME ET HABITAT ================= -->

<section id="urbanisme-habitat" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Urbanisme et Habitat
        </h2>

        <div class="row g-4 justify-content-center">

            <!-- Situation -->
            <div class="col-lg-4 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-city fa-3x text-primary mb-3"></i>

                        <h5 class="fw-bold">
                            Situation de l’urbanisme et de l’habitat
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('situation-urbanisme')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Contraintes -->
            <div class="col-lg-4 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-triangle-exclamation fa-3x text-warning mb-3"></i>

                        <h5 class="fw-bold">
                            Contraintes du secteur
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('contraintes-urbanisme')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

            <!-- Perspectives -->
            <div class="col-lg-4 col-md-6">

                <div class="card shadow border-0 h-100 text-center">

                    <div class="card-body">

                        <i class="fas fa-building-circle-arrow-right fa-3x text-success mb-3"></i>

                        <h5 class="fw-bold">
                            Perspectives de développement
                        </h5>

                        <button class="btn btn-primary mt-3"
                                onclick="showSection('perspectives-urbanisme')">
                            Voir les détails
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= SITUATION DE L'URBANISME ET DE L'HABITAT ================= -->

<section id="situation-urbanisme" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Situation de l’urbanisme et de l’habitat
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">

                    Au cours des dernières années, la commune de <strong>Hamady Hounaré</strong> a connu une évolution remarquable de son tissu urbain et de son habitat. Cette dynamique est principalement portée par les investissements des migrants ainsi que par le développement de l’exploitation minière, qui a entraîné une forte demande en logements, notamment en bâtiments locatifs.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    L’habitat est marqué par une modernisation progressive. Les constructions en matériaux durables, notamment en ciment, se multiplient, en particulier le long de l’axe principal de la commune, où l’on observe l’émergence de bâtiments de grand standing. Toutefois, des habitations en banco subsistent encore dans certains quartiers traditionnels.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    La commune dispose également d’importantes opportunités de développement urbain. Elle bénéficie de zones déjà dotées de plans de lotissement et accueille deux projets structurants : la création d’une <strong>Zone d’Aménagement Concerté (ZAC)</strong> de 50 hectares et un projet de 20 hectares inscrit dans le cadre du programme national des <strong>100&nbsp;000 logements</strong>. Ces initiatives constituent des leviers importants pour accompagner la croissance démographique et améliorer l’offre de logements.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Malgré cette dynamique, le développement urbain reste insuffisamment planifié. La commune ne dispose pas encore d’un <strong>Plan Directeur d’Urbanisme (PDU)</strong> permettant d’organiser de manière cohérente l’occupation de l’espace. Cette absence de planification favorise un développement parfois anarchique de l’habitat, particulièrement dans les quartiers anciens.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Ces quartiers présentent plusieurs difficultés : absence d’alignement des concessions, empiètement sur les voies publiques, rues étroites et insuffisance des espaces réservés aux infrastructures. Cette situation complique l’aménagement des réseaux d’eau, d’électricité, d’assainissement et de voirie, tout en limitant les possibilités d’intervention des services de secours en cas de sinistre.

                </p>

                <p style="text-align:justify; line-height:1.9;">

                    Par ailleurs, les perspectives d’extension de la commune sont limitées par l’étroitesse de son assiette foncière et par l’existence d’un titre minier qui ceinture une grande partie de son territoire. Dans ce contexte, le développement de la coopération intercommunale apparaît comme une solution pertinente pour accueillir certaines infrastructures dans les communes voisines et mieux répondre aux besoins futurs de la population.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= CONTRAINTES DE L'URBANISME ET DE L'HABITAT ================= -->

<section id="contraintes-urbanisme" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Contraintes du secteur
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Absence d'un Plan Directeur d'Urbanisme (PDU) :</strong>
                        La commune ne dispose pas d'un document de planification permettant d'organiser durablement son développement urbain.
                    </li>

                    <li class="mb-3">
                        <strong>Développement anarchique de l'habitat :</strong>
                        L'urbanisation progresse de manière désordonnée dans certains quartiers, sans planification adéquate.
                    </li>

                    <li class="mb-3">
                        <strong>Quartiers traditionnels insuffisamment aménagés :</strong>
                        Plusieurs quartiers anciens ne sont pas lotis et disposent d'infrastructures urbaines limitées.
                    </li>

                    <li class="mb-3">
                        <strong>Absence d'alignement des concessions :</strong>
                        De nombreuses concessions ne respectent pas les alignements, compliquant les opérations d'aménagement.
                    </li>

                    <li class="mb-3">
                        <strong>Empiètement sur les voies publiques :</strong>
                        Certaines habitations occupent une partie de l'espace public, réduisant la largeur des voies de circulation.
                    </li>

                    <li class="mb-3">
                        <strong>Rues étroites :</strong>
                        La faible largeur de plusieurs rues limite l'installation des réseaux d'eau, d'électricité, d'assainissement et de voirie.
                    </li>

                    <li class="mb-3">
                        <strong>Difficultés d'intervention des secours :</strong>
                        L'accessibilité réduite de certains quartiers complique les interventions des services de secours en cas d'urgence.
                    </li>

                    <li class="mb-3">
                        <strong>Étroitesse de l'assiette foncière :</strong>
                        Les réserves foncières de la commune sont limitées, réduisant les possibilités d'aménagement futur.
                    </li>

                    <li>
                        <strong>Limitation de l'extension urbaine :</strong>
                        Le titre minier entourant une grande partie de la commune restreint les possibilités d'extension du tissu urbain.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= PERSPECTIVES DE L'URBANISME ET DE L'HABITAT ================= -->

<section id="perspectives-urbanisme" class="tab-section py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5" style="color:#004FA4;">
            Perspectives de développement
        </h2>

        <div class="card shadow border-0">

            <div class="card-body">

                <ul style="line-height:1.9;">

                    <li class="mb-3">
                        <strong>Élaboration d'un Plan Directeur d'Urbanisme (PDU) :</strong>
                        Élaborer et mettre en œuvre un Plan Directeur d’Urbanisme afin d’organiser durablement l’occupation de l’espace communal et d’assurer un développement harmonieux de la commune.
                    </li>

                    <li class="mb-3">
                        <strong>Alignement des quartiers :</strong>
                        Procéder à l’alignement des quartiers existants afin d’améliorer la circulation et de faciliter l’installation des réseaux d’eau, d’électricité, d’assainissement et de voirie.
                    </li>

                    <li class="mb-3">
                        <strong>Restructuration des quartiers traditionnels :</strong>
                        Restructurer progressivement les quartiers non lotis afin d’améliorer les conditions de vie des populations et de favoriser un développement urbain mieux organisé.
                    </li>

                    <li class="mb-3">
                        <strong>Mise en œuvre des projets de lotissement :</strong>
                        Réaliser les opérations de lotissement prévues, notamment la Zone d’Aménagement Concerté (ZAC) de 50 hectares, pour accompagner la croissance urbaine.
                    </li>

                    <li class="mb-3">
                        <strong>Programme des 100 000 logements :</strong>
                        Mettre en œuvre le projet de 20 hectares inscrit dans le cadre du programme national des 100&nbsp;000 logements afin d’accroître l’offre de logements modernes.
                    </li>

                    <li class="mb-3">
                        <strong>Extension du périmètre communal :</strong>
                        Étendre le périmètre communal afin de disposer de nouvelles réserves foncières pour les futurs projets d’aménagement et d’habitat.
                    </li>

                    <li>
                        <strong>Renforcement de la coopération intercommunale :</strong>
                        Promouvoir la coopération avec les communes limitrophes afin de faciliter l’implantation de certaines infrastructures et de répondre durablement aux besoins futurs en équipements publics et en logements.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<section id="partenaires" class="tab-section py-5" style="display:none;">

    <div class="container">

        <h2 class="text-center text-primary fw-bold mb-3">
            Les partenaires
        </h2>

        <p class="text-center mb-5" style="max-width:900px; margin:auto;">
            La Commune de Hamady Hounaré entretient des partenariats avec plusieurs
            acteurs nationaux, internationaux et locaux afin d'accompagner son
            développement économique, social, éducatif et environnemental.
        </p>

        <div class="row g-4">

            <!-- Partenaires nationaux -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-landmark fa-3x text-primary mb-3"></i>
                        <h5 class="fw-bold">Partenaires nationaux</h5>
                        <p>
                            Découvrez les institutions publiques, programmes de l'État
                            et structures nationales qui accompagnent le développement
                            de la commune.
                        </p>

                        <button class="btn btn-primary"
                                onclick="showSection('partenairesNationaux')">
                            Voir
                        </button>

                    </div>
                </div>
            </div>

            <!-- Partenaires internationaux -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-globe-africa fa-3x text-success mb-3"></i>
                        <h5 class="fw-bold">Partenaires internationaux</h5>
                        <p>
                            Organisations internationales, ONG et partenaires techniques
                            et financiers intervenant dans la commune.
                        </p>

                        <button class="btn btn-success"
                                onclick="showSection('partenairesInternationaux')">
                            Voir
                        </button>

                    </div>
                </div>
            </div>

            <!-- Partenaires locaux -->
            <div class="col-md-4">
                <div class="card shadow border-0 h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-handshake fa-3x text-warning mb-3"></i>
                        <h5 class="fw-bold">Partenaires locaux</h5>
                        <p>
                            Associations, organisations communautaires, GIE et acteurs
                            locaux qui participent au développement communal.
                        </p>

                      <button class="btn btn-warning text-white"
        onclick="showSection('partenairesLocaux')">
    Voir
</button>

                    </div>
                </div>
            </div>

        </div>

    </div>

</section>
<section id="partenairesInternationaux"
         class="tab-section py-5"
         style="display:none;">

    <div class="container">

        <h2 class="text-center text-primary fw-bold mb-5">
            Partenaires internationaux
        </h2>

        <div class="row g-4">

           <!-- Partenaire international 1 : IBCINVEST -->
<div class="col-lg-6 col-md-6">
    <div class="card shadow border-0 h-100">

        <a href="#presentationIBC"
           onclick="showSection('presentationIBC'); return false;">

            <img src="{{ asset('images/IBCINVEST.png') }}"
                 class="card-img-top"
                 style="height:220px; object-fit:contain; padding:15px; cursor:pointer;"
                 alt="IBCINVEST">

        </a>

    </div>
</div>


           <!-- Photo 2 : ONG 3D -->
<div class="col-lg-6 col-md-6">
    <div class="card shadow border-0">

        <a href="#presentationONG3D"
           onclick="showSection('presentationONG3D'); return false;">

            <img src="{{ asset('images/ONG3D.png') }}"
                 class="card-img-top"
                 style="height:200px; object-fit:contain; padding:15px; cursor:pointer;"
                 alt="ONG 3D">

        </a>

    </div>
</div>

        </div>

    </div>

</section>

<!-- SECTION PARTENAIRES NATIONAUX -->
<section id="partenairesNationaux"
         class="tab-section py-5"
         style="display:none;">

    <div class="container">

        <!-- Titre -->
        <h2 class="text-center text-primary fw-bold mb-5">
            Partenaires nationaux
        </h2>


        <!-- PARTENAIRES NATIONAUX -->
        <div class="row g-4 justify-content-center">

            <!-- Photo 1 : ARD -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow border-0 h-100">

                   <a href="#presentationARD"
   onclick="showSection('presentationARD'); return false;">

                        <img src="{{ asset('images/ARD.png') }}"
                             class="card-img-top"
                             style="height:200px; object-fit:contain; padding:15px; cursor:pointer;"
                             alt="ARD Matam">

                    </a>

                </div>
            </div>


            <!-- Photo 2 : DER -->
<div class="col-lg-4 col-md-6">
    <div class="card shadow border-0 h-100">
        <a href="#presentationDER"
           onclick="showSection('presentationDER'); return false;">

            <img src="{{ asset('images/DER.png') }}"
                 class="card-img-top"
                 style="height:200px; object-fit:contain; padding:15px; cursor:pointer;"
                 alt="DER/FJ">
        </a>
    </div>
</div>


          <!-- Photo 3 : FERA -->
<div class="col-lg-4 col-md-6">
    <div class="card shadow border-0 h-100">
        <a href="#presentationFERA"
           onclick="showSection('presentationFERA'); return false;">

            <img src="{{ asset('images/FERA.png') }}"
                 class="card-img-top"
                 style="height:200px; object-fit:contain; padding:15px; cursor:pointer;"
                 alt="FERA">
        </a>
    </div>
</div>


           <!-- Photo 4 : PNDL -->
<div class="col-lg-4 col-md-6">
    <div class="card shadow border-0 h-100">
        <a href="#presentationPNDL"
           onclick="showSection('presentationPNDL'); return false;">

            <img src="{{ asset('images/PNDL.png') }}"
                 class="card-img-top"
                 style="height:200px; object-fit:contain; padding:15px; cursor:pointer;"
                 alt="PNDL">
        </a>
    </div>
</div>

          <!-- Photo 5 : PRODAM -->
<div class="col-lg-4 col-md-6">
    <div class="card shadow border-0 h-100">
        <a href="#presentationPRODAM"
           onclick="showSection('presentationPRODAM'); return false;">

            <img src="{{ asset('images/PRODAM.png') }}"
                 class="card-img-top"
                 style="height:200px; object-fit:contain; padding:15px; cursor:pointer;"
                 alt="PRODAM">
        </a>
    </div>
</div>


            <!-- Photo 6 : SAED -->
<div class="col-lg-4 col-md-6">
    <div class="card shadow border-0 h-100">
        <a href="#presentationSAED"
           onclick="showSection('presentationSAED'); return false;">

            <img src="{{ asset('images/SAED.png') }}"
                 class="card-img-top"
                 style="height:200px; object-fit:contain; padding:15px; cursor:pointer;"
                 alt="SAED">
        </a>
    </div>
</div>


           <!-- Photo 7 : SONAGED -->
<div class="col-lg-4 col-md-6">
    <div class="card shadow border-0 h-100">
        <a href="#presentationSONAGED"
           onclick="showSection('presentationSONAGED'); return false;">

            <img src="{{ asset('images/SONAGED.png') }}"
                 class="card-img-top"
                 style="height:200px; object-fit:contain; padding:15px; cursor:pointer;"
                 alt="SONAGED">
        </a>
    </div>
</div>

        </div>

    </div>

</section>

<!-- PRÉSENTATION DE L'ARD MATAM -->
<section id="presentationARD"
         class="tab-section py-5"
         style="display:none;">

    <div class="container">

        <!-- Titre -->
        <h2 class="text-center text-primary fw-bold mb-5">
            PRÉSENTATION DE L’ARD MATAM
        </h2>


        <!-- Présentation générale -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <p style="text-align:justify; line-height:1.9;">
                    L’<strong>Agence Régionale de Développement (ARD) de
                    Matam</strong> est un établissement public local chargé
                    d’apporter un appui technique aux collectivités territoriales
                    dans la conception, la planification et la mise en œuvre de
                    leurs actions de développement.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Elle intervient notamment dans la planification locale,
                    le renforcement des capacités, le suivi-évaluation des
                    projets, la maîtrise d’ouvrage et la recherche de
                    financements.
                </p>

            </div>
        </div>


        <!-- Objectifs du partenariat -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-4">
                    Objectifs du partenariat entre l’ARD de Matam et la
                    Commune de Hamady Hounaré
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre l’ARD de Matam et la Commune de
                    Hamady Hounaré vise principalement à :
                </p>

                <ul style="text-align:justify; line-height:2;">

                    <li>
                        <strong>
                            Renforcer les capacités techniques de la Commune
                            en matière de gestion, de planification et de
                            gouvernance locale ;
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Accompagner la Commune dans l’élaboration et la
                            mise en œuvre de ses documents de planification
                            et de ses projets de développement ;
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Améliorer la mobilisation des ressources et la
                            recherche de financements auprès des partenaires
                            techniques et financiers ;
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Assurer le suivi et l’évaluation des projets et
                            programmes réalisés dans la commune ;
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Favoriser une meilleure coordination des
                            interventions des différents partenaires afin
                            d’assurer une cohérence entre les actions locales
                            et les politiques nationales de développement ;
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Améliorer la maîtrise d’ouvrage communale et la
                            qualité des investissements réalisés au profit
                            des populations.
                        </strong>
                    </li>

                </ul>

            </div>
        </div>


        <!-- Résumé -->
        <div class="card shadow border-0">
            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-3">
                    En résumé
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    L’<strong>ARD de Matam</strong> constitue pour la
                    <strong>Commune de Hamady Hounaré</strong> un
                    <strong>partenaire technique stratégique</strong>, qui
                    l’accompagne dans la planification, la recherche de
                    financements, la réalisation et le suivi de ses projets
                    afin de contribuer à un développement local durable et
                    harmonieux.
                </p>

            </div>
        </div>

    </div>

</section>

<!-- ============================= -->
<!-- PRÉSENTATION DE LA DER/FJ -->
<!-- ============================= -->

<section id="presentationDER"
         class="tab-section py-5"
         style="display:none;">

    <div class="container">

        <!-- Titre -->
        <h2 class="text-center text-primary fw-bold mb-5">
            PRÉSENTATION DE LA DER/FJ
        </h2>

        <!-- Présentation générale -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <p style="text-align:justify; line-height:1.9;">
                    La <strong>Délégation générale à l’Entrepreneuriat Rapide
                    des Femmes et des Jeunes (DER/FJ)</strong> est une structure
                    de l’État du Sénégal créée en 2017.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Elle a pour mission de promouvoir l’<strong>entrepreneuriat
                    des jeunes et des femmes</strong> à travers le financement
                    des projets, l’accompagnement technique, la formation,
                    le renforcement des capacités et le suivi des activités
                    financées.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    La DER/FJ intervient sur l’ensemble du territoire national
                    et travaille en collaboration avec les collectivités
                    territoriales afin de rapprocher ses services des
                    populations et de faciliter l’accès aux opportunités
                    d’accompagnement et de financement.
                </p>

            </div>
        </div>

        <!-- Objectifs du partenariat -->
        <div class="card shadow border-0 mb-4">

            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-4">
                    Objectifs du partenariat avec la Commune de Hamady Hounaré
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre la
                    <strong>DER/FJ et la Commune de Hamady Hounaré</strong>
                    vise notamment à :
                </p>

                <ul style="text-align:justify; line-height:2;">

                    <li>
                        <strong>
                            Faciliter l’accès des jeunes et des femmes au
                            financement
                        </strong>
                        pour la création ou le développement de leurs activités.
                    </li>

                    <li>
                        <strong>
                            Encourager l’entrepreneuriat local et l’auto-emploi.
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Valoriser les potentialités économiques de la
                            Commune
                        </strong>
                        et soutenir les secteurs porteurs.
                    </li>

                    <li>
                        <strong>
                            Renforcer les capacités techniques et managériales
                        </strong>
                        des entrepreneurs et porteurs de projets.
                    </li>

                    <li>
                        <strong>
                            Accompagner la formalisation et le développement
                            des petites entreprises locales.
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Favoriser la création d’emplois et de revenus
                        </strong>
                        au profit des populations.
                    </li>

                    <li>
                        <strong>
                            Assurer une meilleure proximité des services de la
                            DER/FJ
                        </strong>
                        avec les populations de Hamady Hounaré.
                    </li>

                </ul>

            </div>
        </div>

        <!-- Résumé -->
        <div class="card shadow border-0">

            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-3">
                    En résumé
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre la
                    <strong>DER/FJ</strong> et la
                    <strong>Commune de Hamady Hounaré</strong> vise à
                    <strong>stimuler l’activité économique locale</strong>,
                    favoriser l’<strong>autonomisation des femmes et des
                    jeunes</strong> et contribuer à la
                    <strong>création d’emplois et de revenus</strong> dans
                    la Commune de Hamady Hounaré.
                </p>

            </div>
        </div>

    </div>

</section>

<!-- ============================= -->
<!-- PRÉSENTATION DU FERA -->
<!-- ============================= -->

<section id="presentationFERA"
         class="tab-section py-5"
         style="display:none;">

    <div class="container">

        <!-- Titre -->
        <h2 class="text-center text-primary fw-bold mb-5">
            PRÉSENTATION DU FERA
        </h2>

        <!-- Présentation générale -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <p style="text-align:justify; line-height:1.9;">
                    Le <strong>Fonds d’Entretien Routier Autonome
                    (FERA)</strong> est un organisme public sénégalais
                    chargé de mobiliser et de financer de manière durable
                    l’entretien et la réhabilitation du réseau routier.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Il intervient notamment dans l’entretien courant et
                    périodique des <strong>routes et pistes</strong>, afin
                    d’améliorer la mobilité, la sécurité et le
                    désenclavement des territoires.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Les <strong>collectivités territoriales</strong> figurent
                    parmi les bénéficiaires des financements du FERA, ce qui
                    permet de soutenir la réalisation de travaux routiers
                    répondant aux besoins des populations locales.
                </p>

            </div>
        </div>

        <!-- Objectifs du partenariat -->
        <div class="card shadow border-0 mb-4">

            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-4">
                    Objectifs du partenariat entre le FERA et la Commune de
                    Hamady Hounaré
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre le
                    <strong>FERA et la Commune de Hamady Hounaré</strong>
                    vise principalement à :
                </p>

                <ul style="text-align:justify; line-height:2;">

                    <li>
                        <strong>
                            Améliorer l’état des routes et pistes
                        </strong>
                        relevant des compétences de la Commune.
                    </li>

                    <li>
                        <strong>
                            Faciliter le financement des travaux d’entretien
                            routier
                        </strong>
                        et des infrastructures connexes.
                    </li>

                    <li>
                        <strong>
                            Désenclaver les villages et zones de production
                        </strong>
                        de la Commune.
                    </li>

                    <li>
                        <strong>
                            Améliorer la mobilité des populations
                        </strong>
                        et l’accès aux services sociaux de base.
                    </li>

                    <li>
                        <strong>
                            Faciliter l’évacuation et la commercialisation
                            des productions agricoles et pastorales.
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Renforcer la sécurité et la qualité des
                            déplacements
                        </strong>
                        sur le territoire communal.
                    </li>

                    <li>
                        <strong>
                            Appuyer la Commune dans la programmation et la
                            réalisation des travaux prioritaires
                        </strong>,
                        en fonction des besoins exprimés par les populations.
                    </li>

                </ul>

            </div>
        </div>

        <!-- Résumé -->
        <div class="card shadow border-0">

            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-3">
                    En résumé
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre le
                    <strong>FERA et la Commune de Hamady Hounaré</strong>
                    a pour objectif de contribuer au
                    <strong>désenclavement de la Commune</strong>, à
                    l’<strong>amélioration de la mobilité des populations</strong>
                    et à la <strong>préservation des infrastructures
                    routières</strong>, afin de soutenir le développement
                    économique et social local.
                </p>

            </div>
        </div>

    </div>

</section>

<!-- ============================= -->
<!-- PRÉSENTATION DU PNDL -->
<!-- ============================= -->

<section id="presentationPNDL"
         class="tab-section py-5"
         style="display:none;">

    <div class="container">

        <!-- Titre -->
        <h2 class="text-center text-primary fw-bold mb-5">
            PRÉSENTATION DU PNDL
        </h2>

        <!-- Présentation générale -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <p style="text-align:justify; line-height:1.9;">
                    Le <strong>Programme National de Développement Local
                    (PNDL)</strong> est un programme de l’État du Sénégal
                    qui accompagne les <strong>collectivités territoriales</strong>
                    dans la mise en œuvre du développement local.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Il intervient notamment dans le
                    <strong>financement d’infrastructures et d’équipements</strong>,
                    le renforcement des capacités des collectivités et
                    l’amélioration de l’accès des populations aux
                    <strong>services sociaux de base</strong>.
                </p>

            </div>
        </div>

        <!-- Objectifs du partenariat -->
        <div class="card shadow border-0 mb-4">

            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-4">
                    Objectifs du partenariat entre le PNDL et la Commune de
                    Hamady Hounaré
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre le
                    <strong>PNDL et la Commune de Hamady Hounaré</strong>
                    vise principalement à :
                </p>

                <ul style="text-align:justify; line-height:2;">

                    <li>
                        <strong>
                            Améliorer l’accès des populations aux services
                            sociaux de base
                        </strong>,
                        notamment l’eau, la santé, l’éducation,
                        l’assainissement et l’électricité.
                    </li>

                    <li>
                        <strong>
                            Financer des infrastructures et équipements
                            prioritaires
                        </strong>
                        répondant aux besoins des populations.
                    </li>

                    <li>
                        <strong>
                            Renforcer les capacités de la Commune
                        </strong>
                        en matière de planification et de gestion du
                        développement local.
                    </li>

                    <li>
                        <strong>
                            Appuyer la Commune dans la réalisation de ses
                            projets de développement.
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Favoriser le développement des activités
                            économiques locales
                        </strong>,
                        notamment l’agriculture, l’élevage et l’artisanat.
                    </li>

                    <li>
                        <strong>
                            Contribuer au désenclavement des zones rurales
                        </strong>
                        et à l’amélioration de la mobilité.
                    </li>

                    <li>
                        <strong>
                            Renforcer la gouvernance locale et la participation
                            des populations
                        </strong>
                        dans l’identification et la réalisation des projets.
                    </li>

                </ul>

            </div>
        </div>

        <!-- Résumé -->
        <div class="card shadow border-0">

            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-3">
                    En résumé
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre le
                    <strong>PNDL et la Commune de Hamady Hounaré</strong>
                    vise à <strong>améliorer les conditions de vie des
                    populations</strong> à travers le financement
                    d’<strong>infrastructures prioritaires</strong>, le
                    <strong>renforcement des capacités de la Commune</strong>
                    et la promotion d’un
                    <strong>développement local participatif et durable</strong>.
                </p>

            </div>
        </div>

    </div>

</section>

<!-- ============================= -->
<!-- PRÉSENTATION DU PRODAM -->
<!-- ============================= -->

<section id="presentationPRODAM"
         class="tab-section py-5"
         style="display:none;">

    <div class="container">

        <!-- Titre -->
        <h2 class="text-center text-primary fw-bold mb-5">
            PRÉSENTATION DU PRODAM
        </h2>

        <!-- Présentation générale -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <p style="text-align:justify; line-height:1.9;">
                    Le <strong>Projet de Développement Agricole de Matam
                    (PRODAM)</strong> est une initiative de développement
                    rural mise en place pour soutenir les populations de la
                    région de Matam.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Il intervient principalement dans les domaines de
                    <strong>l’agriculture, de l’élevage, de l’irrigation,
                    de la sécurité alimentaire et du renforcement des
                    organisations paysannes</strong>.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Son objectif est d’améliorer durablement les
                    <strong>revenus et les conditions de vie des populations
                    rurales</strong> en développant le potentiel
                    agropastoral de la région.
                </p>

            </div>
        </div>

        <!-- Objectifs du partenariat -->
        <div class="card shadow border-0 mb-4">

            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-4">
                    Objectifs du partenariat avec la Commune de Hamady Hounaré
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre le
                    <strong>PRODAM et la Commune de Hamady Hounaré</strong>
                    vise notamment à :
                </p>

                <ul style="text-align:justify; line-height:2;">

                    <li>
                        <strong>
                            Développer l’agriculture et l’élevage
                        </strong>
                        afin d’accroître la production locale.
                    </li>

                    <li>
                        <strong>
                            Améliorer les revenus des populations rurales
                        </strong>,
                        particulièrement ceux des agriculteurs, éleveurs,
                        femmes et jeunes.
                    </li>

                    <li>
                        <strong>
                            Améliorer les infrastructures et équipements
                            agricoles
                        </strong>,
                        notamment les périmètres irrigués.
                    </li>

                    <li>
                        <strong>
                            Renforcer les capacités des organisations
                            paysannes
                        </strong>
                        et des acteurs locaux.
                    </li>

                    <li>
                        <strong>
                            Favoriser la sécurité alimentaire
                        </strong>
                        et la diversification des activités économiques.
                    </li>

                    <li>
                        <strong>
                            Promouvoir l’emploi des jeunes et
                            l’autonomisation des femmes
                        </strong>
                        dans les activités agropastorales.
                    </li>

                    <li>
                        <strong>
                            Encourager une meilleure gestion des ressources
                            naturelles
                        </strong>
                        et l’adaptation aux changements climatiques.
                    </li>

                </ul>

            </div>
        </div>

        <!-- Résumé -->
        <div class="card shadow border-0">

            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-3">
                    En résumé
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre le
                    <strong>PRODAM et la Commune de Hamady Hounaré</strong>
                    vise à <strong>valoriser le potentiel agricole et pastoral
                    de la Commune</strong>, améliorer les
                    <strong>revenus des populations</strong> et contribuer à
                    un <strong>développement rural durable et inclusif</strong>.
                </p>

            </div>
        </div>

    </div>

</section>

<!-- ============================= -->
<!-- PRÉSENTATION DE LA SAED -->
<!-- ============================= -->

<section id="presentationSAED"
         class="tab-section py-5"
         style="display:none;">

    <div class="container">

        <!-- Titre -->
        <h2 class="text-center text-primary fw-bold mb-5">
            PRÉSENTATION DE LA SAED
        </h2>

        <!-- Présentation générale -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <p style="text-align:justify; line-height:1.9;">
                    La <strong>Société Nationale d’Aménagement et
                    d’Exploitation des Terres du Delta du Fleuve Sénégal
                    et des Vallées du Fleuve Sénégal et de la Falémé
                    (SAED)</strong> est une société nationale chargée de
                    promouvoir le développement de
                    <strong>l’agriculture irriguée</strong> dans sa zone
                    d’intervention, qui couvre notamment la région de Matam.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Elle accompagne l’État, les
                    <strong>collectivités territoriales</strong> et les
                    <strong>organisations de producteurs</strong> dans
                    l’aménagement hydro-agricole, la gestion de l’eau,
                    le développement agricole et le renforcement des
                    capacités.
                </p>

            </div>
        </div>

        <!-- Objectifs du partenariat -->
        <div class="card shadow border-0 mb-4">

            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-4">
                    Objectifs du partenariat entre la SAED et la Commune de
                    Hamady Hounaré
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre la
                    <strong>SAED et la Commune de Hamady Hounaré</strong>
                    vise principalement à :
                </p>

                <ul style="text-align:justify; line-height:2;">

                    <li>
                        <strong>
                            Développer et valoriser le potentiel agricole
                        </strong>
                        de la Commune.
                    </li>

                    <li>
                        <strong>
                            Aménager et réhabiliter les infrastructures
                            hydro-agricoles
                        </strong>
                        nécessaires à l’irrigation.
                    </li>

                    <li>
                        <strong>
                            Améliorer la productivité et les revenus des
                            producteurs.
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Accompagner les agriculteurs, les femmes et les
                            jeunes
                        </strong>
                        à travers le conseil agricole et le renforcement
                        des capacités.
                    </li>

                    <li>
                        <strong>
                            Appuyer la Commune dans la maîtrise d’ouvrage
                            et la planification du développement agricole
                            local.
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Améliorer la gestion de l’eau et des ressources
                            naturelles.
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Contribuer à la sécurisation foncière et au
                            développement économique local.
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Favoriser la création d’emplois et renforcer
                            la sécurité alimentaire
                        </strong>
                        à travers le développement de l’agriculture irriguée.
                    </li>

                </ul>

            </div>
        </div>

        <!-- Résumé -->
        <div class="card shadow border-0">

            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-3">
                    En résumé
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre la
                    <strong>SAED et la Commune de Hamady Hounaré</strong>
                    vise à <strong>valoriser les terres et le potentiel
                    agricole de la Commune</strong>, améliorer les
                    <strong>conditions de production</strong> et renforcer
                    le <strong>développement économique local</strong>
                    grâce à l’agriculture irriguée.
                </p>

            </div>
        </div>

    </div>

</section>

<!-- ============================= -->
<!-- PRÉSENTATION DE LA SONAGED -->
<!-- ============================= -->

<section id="presentationSONAGED"
         class="tab-section py-5"
         style="display:none;">

    <div class="container">

        <!-- Titre -->
        <h2 class="text-center text-primary fw-bold mb-5">
            PRÉSENTATION DE LA SONAGED
        </h2>

        <!-- Présentation générale -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <p style="text-align:justify; line-height:1.9;">
                    La <strong>Société Nationale de Gestion Intégrée des
                    Déchets (SONAGED S.A.)</strong> est une société nationale
                    créée en 2022 pour assurer la coordination de la gestion
                    intégrée des déchets au Sénégal.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Elle a notamment pour missions d’<strong>améliorer la
                    salubrité publique</strong>, de renforcer les services de
                    collecte et de gestion des déchets et de promouvoir leur
                    <strong>valorisation dans une logique d’économie
                    circulaire</strong>.
                </p>

            </div>
        </div>

        <!-- Objectifs du partenariat -->
        <div class="card shadow border-0 mb-4">

            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-4">
                    Objectifs du partenariat entre la SONAGED et la Commune
                    de Hamady Hounaré
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre la
                    <strong>SONAGED et la Commune de Hamady Hounaré</strong>
                    vise principalement à :
                </p>

                <ul style="text-align:justify; line-height:2;">

                    <li>
                        <strong>
                            Améliorer la collecte et l’évacuation des déchets
                        </strong>
                        dans les différents quartiers et villages de la
                        Commune.
                    </li>

                    <li>
                        <strong>
                            Renforcer la salubrité et l’hygiène du cadre de vie
                        </strong>
                        des populations.
                    </li>

                    <li>
                        <strong>
                            Mettre en place des dispositifs adaptés de gestion
                            des déchets
                        </strong>
                        en fonction des réalités locales.
                    </li>

                    <li>
                        <strong>
                            Sensibiliser les populations
                        </strong>
                        sur la propreté, le tri et les bonnes pratiques de
                        gestion des déchets.
                    </li>

                    <li>
                        <strong>
                            Renforcer la collaboration entre la Commune et
                            la SONAGED
                        </strong>
                        pour une gestion plus efficace et durable de la
                        salubrité publique.
                    </li>

                    <li>
                        <strong>
                            Promouvoir la valorisation et le recyclage des
                            déchets
                        </strong>,
                        notamment à travers le développement de l’économie
                        circulaire.
                    </li>

                    <li>
                        <strong>
                            Favoriser la création d’activités et d’emplois
                            locaux
                        </strong>
                        liés à la collecte, au traitement et à la valorisation
                        des déchets.
                    </li>

                </ul>

            </div>
        </div>

        <!-- Résumé -->
        <div class="card shadow border-0">

            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-3">
                    En résumé
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre la
                    <strong>SONAGED et la Commune de Hamady Hounaré</strong>
                    vise à <strong>améliorer durablement la gestion des
                    déchets</strong>, renforcer la <strong>salubrité
                    publique</strong> et préserver l’<strong>environnement</strong>,
                    tout en faisant de la <strong>valorisation des
                    déchets</strong> une opportunité de développement
                    économique local.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    La SONAGED souligne également l’importance d’une
                    <strong>collaboration étroite avec les collectivités
                    territoriales</strong> afin d’améliorer la gestion de la
                    salubrité et de contribuer à un cadre de vie plus propre
                    et plus sain.
                </p>

            </div>
        </div>

    </div>

</section>

<!-- PRÉSENTATION IBC / INVEST -->
<section id="presentationIBC"
         class="tab-section py-5"
         style="display:none;">

    <div class="container">

        <h2 class="text-center text-primary fw-bold mb-5">
            LA PRÉSENTATION DE IBC/INVEST
        </h2>

        <!-- Présentation du cabinet -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-3">
                    IBC/CABINET
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    <strong>IBC/CABINET</strong> est un cabinet spécialisé dans le
                    <strong>conseil, l’accompagnement des projets d’investissement,
                    l’entrepreneuriat et le développement des compétences</strong>.
                    Il mobilise des expertises notamment dans les domaines juridique,
                    financier, commercial et du management de projets.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Le cabinet collabore avec les collectivités territoriales et
                    accompagne les jeunes, les femmes, les porteurs de projets et
                    les entrepreneurs à travers la formation, le coaching et la
                    recherche de partenaires financiers ou commerciaux.
                </p>

            </div>
        </div>


        <!-- Objectifs du partenariat -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-4">
                    Objectifs du partenariat avec la Commune de Hamady Hounaré
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre <strong>IBC & Invest</strong> et la
                    <strong>Commune de Hamady Hounaré</strong> vise notamment à :
                </p>

                <ul style="line-height:2; text-align:justify;">

                    <li>
                        <strong>Accompagner la Commune dans la promotion de
                        l’entrepreneuriat local ;</strong>
                    </li>

                    <li>
                        <strong>Renforcer les capacités des jeunes, des femmes et
                        des porteurs de projets ;</strong>
                    </li>

                    <li>
                        <strong>Faciliter l’accès aux opportunités d’investissement
                        et aux financements ;</strong>
                    </li>

                    <li>
                        <strong>Identifier et valoriser les potentialités
                        économiques de la Commune ;</strong>
                    </li>

                    <li>
                        <strong>Favoriser la création d’emplois et d’activités
                        génératrices de revenus ;</strong>
                    </li>

                    <li>
                        <strong>Accompagner le montage et la structuration de
                        projets économiques ;</strong>
                    </li>

                    <li>
                        <strong>Faciliter la mise en relation de la Commune avec
                        des partenaires techniques, financiers et économiques ;</strong>
                    </li>

                    <li>
                        <strong>Contribuer à l’attractivité économique et au
                        développement territorial de Hamady Hounaré.</strong>
                    </li>

                </ul>

            </div>
        </div>


        <!-- Résumé -->
        <div class="card shadow border-0">
            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-3">
                    En résumé
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre <strong>IBC & Invest</strong> et la
                    <strong>Commune de Hamady Hounaré</strong> vise à stimuler
                    l’entrepreneuriat et l’investissement local, renforcer les
                    compétences des acteurs économiques et favoriser la création
                    d’emplois et de revenus au profit des populations.
                </p>

            </div>
        </div>

    </div>

</section>

<!-- PRÉSENTATION ONG 3D -->
<section id="presentationONG3D"
         class="tab-section py-5"
         style="display:none;">

    <div class="container">

        <!-- Titre -->
        <h2 class="text-center text-primary fw-bold mb-5">
            LA PRÉSENTATION DE L’ONG-3D
        </h2>

        <!-- Présentation générale -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <p style="text-align:justify; line-height:1.9;">
                    L’<strong>ONG 3D (Démocratie, Droits Humains et
                    Développement)</strong> est une organisation de la société
                    civile sénégalaise qui œuvre pour une société
                    <strong>plus juste, inclusive et participative</strong>.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Elle intervient notamment dans la promotion de la démocratie,
                    des droits humains, de la gouvernance locale et du
                    développement durable. Elle accompagne les citoyens, les
                    collectivités et les communautés dans la mise en œuvre
                    d’initiatives locales et le renforcement des capacités.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    L’ONG 3D a également développé des interventions dans la
                    <strong>région de Matam</strong>, notamment à
                    <strong>Hamady Hounaré</strong>, autour de l’adaptation aux
                    changements climatiques, de la sécurité alimentaire et de
                    l’accompagnement des organisations de producteurs.
                </p>

            </div>
        </div>


        <!-- Objectifs du partenariat -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-4">
                    Objectifs du partenariat entre l’ONG 3D et la Commune de
                    Hamady Hounaré
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat vise principalement à :
                </p>

                <ul style="line-height:2; text-align:justify;">

                    <li>
                        <strong>
                            Renforcer la gouvernance locale et la participation
                            citoyenne dans la gestion des affaires communales ;
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Accompagner la Commune dans ses initiatives de
                            développement local ;
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Renforcer les capacités des acteurs locaux,
                            notamment les organisations communautaires et les
                            associations ;
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Promouvoir l’autonomisation des femmes et des jeunes
                            et leur participation au développement économique
                            local ;
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Améliorer la sécurité alimentaire et soutenir les
                            initiatives agricoles et communautaires ;
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Sensibiliser les populations sur leurs droits et
                            leurs responsabilités citoyennes ;
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Promouvoir l’adaptation aux changements climatiques
                            et la gestion durable des ressources naturelles ;
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Favoriser la transparence, la redevabilité et le
                            dialogue entre la Commune et les populations.
                        </strong>
                    </li>

                </ul>

            </div>
        </div>


        <!-- Résumé -->
        <div class="card shadow border-0">

            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-3">
                    En résumé
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Le partenariat entre l’<strong>ONG 3D</strong> et la
                    <strong>Commune de Hamady Hounaré</strong> vise à renforcer
                    la gouvernance locale, la participation citoyenne et
                    l’inclusion sociale, tout en soutenant les initiatives
                    économiques et communautaires contribuant au développement
                    durable de la Commune.
                </p>

            </div>

        </div>

    </div>

</section>

<section id="partenairesLocaux" class="tab-section py-5" style="display:none;">

    <div class="container">

        <h2 class="text-center fw-bold text-primary mb-5">
            Partenaires locaux
        </h2>

       <div class="row g-4 justify-content-center">

    <!-- Photo 1 : GIE -->
    <div class="col-lg-3 col-md-6">
        <div class="card shadow border-0">

            <a href="#" onclick="showSection('gie'); return false;" class="text-decoration-none">

                <img src="{{ asset('images/partenaire1.png') }}"
                     class="card-img-top"
                     style="height:170px; object-fit:contain; padding:15px;"
                     alt="GIE">

            </a>

        </div>
    </div>

    <!-- Photo 2 : ASC -->
    <div class="col-lg-3 col-md-6">
        <div class="card shadow border-0">

            <a href="#" onclick="showSection('asc'); return false;">

                <img src="{{ asset('images/partenaire2.png') }}"
                     class="card-img-top"
                     style="height:170px; object-fit:contain; padding:15px;"
                     alt="ASC">

            </a>

        </div>
    </div>

    <!-- Photo 3 : SOMIVA -->
    <div class="col-lg-3 col-md-6">
        <div class="card shadow border-0">

            <a href="#" onclick="showSection('somiva'); return false;">

                <img src="{{ asset('images/partenaire3.png') }}"
                     class="card-img-top"
                     style="height:170px; object-fit:contain; padding:15px; cursor:pointer;"
                     alt="SOMIVA">

            </a>

        </div>
    </div>

    <!-- Photo 4 : SERPM -->
    <div class="col-lg-3 col-md-6">
        <div class="card shadow border-0">

            <a href="#" onclick="showSection('serpm'); return false;">

                <img src="{{ asset('images/partenaire4.png') }}"
                     class="card-img-top"
                     style="height:170px; object-fit:contain; padding:15px; cursor:pointer;"
                     alt="SERPM">

            </a>

        </div>
    </div>

    <!-- Photo 5 : GPF -->
    <div class="col-lg-3 col-md-6">
        <div class="card shadow border-0">

            <a href="#" onclick="showSection('gpf'); return false;">

                <div class="position-relative">

                    <img src="{{ asset('images/partenaire5.png') }}"
                         class="card-img-top"
                         style="height:170px; object-fit:contain; padding:15px; cursor:pointer;"
                         alt="GPF">

                    <span class="position-absolute top-50 start-50 translate-middle fw-bold"
                          style="color:#0d6efd; font-size:28px;">
                        GPF
                    </span>

                </div>

            </a>

        </div>
    </div>

   
   <!-- Photo 6 -->
<div class="col-lg-3 col-md-6">
    <div class="card shadow border-0">

        <a href="#" onclick="showSection('partenaire6'); return false;">

            <img src="{{ asset('images/partenaire6.png') }}"
                 class="card-img-top"
                 style="height:170px; object-fit:contain; padding:15px; cursor:pointer;"
                 alt="Partenaire 6">

                <span class="position-absolute top-50 start-50 translate-middle fw-bold"
      style="color:#146c43; font-size:28px;">
    CDQ
</span>

        </a>

    </div>
</div>

    <!-- Photo 7 -->
    <div class="col-lg-3 col-md-6">
    <div class="card shadow border-0">

        <a href="#" onclick="showSection('partenaire7'); return false;">

            <img src="{{ asset('images/partenaire7.png') }}"
                 class="card-img-top"
                 style="height:170px; object-fit:contain; padding:15px; cursor:pointer;"
                 alt="Partenaire 7">

                <span class="position-absolute top-50 start-50 translate-middle fw-bold"
      style="color:#000000; font-size:28px;">
    CDL
</span>
        </a>

    </div>
</div>

    <!-- Photo 8 -->
    <div class="col-lg-3 col-md-6">
    <div class="card shadow border-0">

        <a href="#" onclick="showSection('partenaire8'); return false;">

            <img src="{{ asset('images/partenaire8.png') }}"
                 class="card-img-top"
                 style="height:170px; object-fit:contain; padding:15px; cursor:pointer;"
                 alt="Partenaire 8">
                
                        <span class="position-absolute top-50 start-50 translate-middle fw-bold"
      style="color:#146c43; font-size:28px;">
    CDM
</span>
        </a>

    </div>
</div>

<!-- Partenaire local : SOMA -->
<div class="col-lg-3 col-md-6">
    <div class="card shadow border-0 h-100">

        <a href="#presentationSOMA"
           onclick="showSection('presentationSOMA'); return false;">

            <img src="{{ asset('images/SOMA.png') }}"
                 class="card-img-top"
                 style="height:170px; object-fit:contain; padding:15px; cursor:pointer;"
                 alt="SOMA">

        </a>

    </div>
</div>
</div>

    </div>

</section>

<section id="gie" class="tab-section py-5" style="display:none;">

    <div class="container">

        <h2 class="text-center text-primary fw-bold mb-4">
            Les Groupements d'Intérêt Économique (GIE)
        </h2>

        <div class="card shadow border-0">
            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">

                    Les Groupements d'Intérêt Économique (GIE) de la commune de Hamady Hounaré constituent des organisations communautaires qui jouent un rôle essentiel dans le développement économique local, la création de revenus et l'amélioration des conditions de vie des populations. Ils interviennent principalement dans les secteurs de la pêche, de l'élevage, de l'agriculture, du commerce et de la transformation des produits locaux.

                    <br><br>

                    Les GIE permettent aux producteurs, aux femmes, aux jeunes et aux autres acteurs économiques de mutualiser leurs ressources, d'accéder plus facilement aux financements, aux équipements, aux formations et aux marchés. Ils favorisent également la solidarité, la gestion collective des activités économiques et la participation des populations au développement de la commune.

                    <br><br>

                    Dans le secteur de la pêche, le Plan de Développement Communal souligne l'existence d'un Groupement d'Intérêt Économique dénommé <strong>« Mbargu »</strong>, qui regroupe une quarantaine de ménages de pêcheurs. Cette organisation contribue à la valorisation de la pêche continentale, activité traditionnelle importante de la commune, en facilitant l'organisation des pêcheurs et la gestion de leurs activités.

                    <br><br>

                    Par ailleurs, plusieurs organisations de producteurs et d'éleveurs participent au développement des filières agricoles et pastorales. Elles bénéficient de l'appui de partenaires techniques et financiers, notamment à travers des programmes comme <strong>PRAPS</strong> et <strong>Yellitaare</strong>, qui renforcent les capacités des producteurs, améliorent la sécurité alimentaire et soutiennent les activités génératrices de revenus.

                </p>

                <h5 class="text-danger fw-bold mt-4">
                    Contraintes principales
                </h5>

                <ul>
                    <li>Accès limité aux financements.</li>
                    <li>Manque d'infrastructures de conservation et de transformation.</li>
                    <li>Insuffisance d'équipements de production.</li>
                    <li>Effets du changement climatique.</li>
                    <li>Difficultés d'accès aux marchés et aux services techniques.</li>
                </ul>

                <p style="text-align:justify; line-height:1.9;">

                    Le renforcement des GIE apparaît ainsi comme un levier majeur pour atteindre la vision de développement de la commune, qui ambitionne de faire de Hamady Hounaré une commune attractive, porteuse d'un développement socio-économique durable fondé sur une gouvernance locale performante et participative.

                </p>

            </div>
        </div>

    </div>

</section>

<section id="asc" class="tab-section py-5" style="display:none;">

    <div class="container">

        <h2 class="text-center text-primary fw-bold mb-4">
            Les Associations Sportives et Culturelles (ASC)
        </h2>

        <div class="card shadow border-0">
            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">
                    Les <strong>Associations Sportives et Culturelles (ASC)</strong> de la commune de Hamady Hounaré constituent des structures de proximité qui contribuent activement à l'encadrement des jeunes, à la promotion du sport, de la culture et au renforcement de la cohésion sociale. Elles occupent une place importante dans la vie communautaire en offrant aux jeunes des espaces d'expression, de loisirs et de développement personnel.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Selon le <strong>Plan de Développement Communal (PDC)</strong>, la commune compte <strong>neuf (09) Associations Sportives et Culturelles (ASC)</strong>, qui évoluent principalement dans la pratique du football amateur. Ces associations mobilisent chaque année les jeunes autour d'activités sportives et participent activement à l'animation de la vie communautaire.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Les ASC sont particulièrement actives lors des compétitions de <strong>Navétanes</strong>, organisées chaque année pendant l'hivernage sous l'égide de l'ODCAV. Ces compétitions réunissent les différentes ASC aux niveaux zonal, communal et départemental. Elles constituent un cadre privilégié de rencontre entre les jeunes, favorisent le fair-play, renforcent la cohésion sociale et s'accompagnent de diverses manifestations culturelles.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Les Associations Sportives et Culturelles représentent ainsi un levier essentiel pour la promotion du sport, de la culture et de l'engagement citoyen à Hamady Hounaré. Leur renforcement contribuera à favoriser l'épanouissement de la jeunesse, à consolider la cohésion sociale et à soutenir durablement le développement socio-économique de la commune.
                </p>

            </div>
        </div>

    </div>

</section>

<section id="somiva" class="tab-section py-5" style="display:none;">

    <div class="container">

        <h2 class="text-center text-primary fw-bold mb-4">
            Société Minière de la Vallée (SOMIVA)
        </h2>

        <div class="card shadow border-0">
            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">
                    La <strong>Société Minière de la Vallée (SOMIVA)</strong> est la principale entreprise minière opérant dans la commune de Hamady Hounaré. Son activité est centrée sur l'exploitation des gisements de phosphate, qui constituent l'une des principales ressources économiques de la commune.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    L'implantation de la SOMIVA a fortement contribué à la transformation économique de la commune en favorisant le développement des activités de transport, de commerce et de services. L'entreprise participe également à certaines initiatives de développement local à travers l'appui à la formation des jeunes et à diverses actions sociales au profit des communautés.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Toutefois, le Plan de Développement Communal (PDC) met également en évidence plusieurs défis liés à l'exploitation minière. L'occupation d'une partie importante des terres a entraîné une forte réduction de l'agriculture pluviale, tandis que les activités minières exercent une pression sur les ressources naturelles et l'environnement. Le PDC souligne également que certaines maladies, notamment les affections respiratoires et dermatologiques, pourraient être liées à la pollution induite par l'exploitation minière, ce qui appelle à un renforcement des mesures de protection de l'environnement et de la santé publique.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Par ailleurs, malgré la présence de l'industrie minière, le chômage des jeunes demeure élevé. Le PDC recommande de renforcer la formation professionnelle, de faciliter l'accès des jeunes aux emplois offerts par les sociétés minières et de promouvoir davantage l'entrepreneuriat local afin que les retombées économiques de l'exploitation minière profitent davantage aux populations de Hamady Hounaré.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Ainsi, selon le Plan de Développement Communal, la <strong>SOMIVA</strong> représente un acteur stratégique du développement de Hamady Hounaré. Son activité constitue un important moteur de croissance économique, mais elle nécessite un renforcement de la responsabilité sociale et environnementale ainsi qu'une meilleure intégration des populations locales afin de garantir un développement inclusif et durable.
                </p>

            </div>
        </div>

    </div>

</section>

<section id="serpm" class="tab-section py-5" style="display:none;">

    <div class="container">

        <h2 class="text-center text-primary fw-bold mb-4">
            Société d'Exploitation des Ressources Phosphatières de Matam (SERPM)
        </h2>

        <div class="card shadow border-0">
            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">
                    La <strong>Société d'Exploitation des Ressources Phosphatières de Matam (SERPM)</strong> est l'une des principales entreprises minières intervenant dans la commune de Hamady Hounaré. Selon le <strong>Plan de Développement Communal (PDC)</strong>, elle participe à la valorisation des importantes ressources phosphatières de la commune et contribue au dynamisme de l'économie locale.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Par ses activités d'exploitation minière, la SERPM constitue un acteur économique majeur en favorisant la création d'emplois directs et indirects, le développement des activités de transport, de commerce et de prestations de services. La présence de cette société renforce également l'attractivité économique de la commune et contribue aux recettes locales générées par le secteur minier. Le PDC identifie d'ailleurs les mines comme l'un des principaux secteurs porteurs de croissance économique de la commune.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Le document souligne toutefois que les retombées économiques de l'exploitation minière restent insuffisantes au regard des besoins de la population. Malgré la présence des sociétés minières, les jeunes demeurent fortement touchés par le chômage en raison d'un manque d'employabilité et d'accès aux ressources productives. Le PDC recommande ainsi de renforcer la formation professionnelle des jeunes et de faciliter leur recrutement par les sociétés minières afin d'améliorer leur insertion socio-économique.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Le PDC met également en évidence les défis environnementaux liés à l'exploitation minière. L'occupation des terres a contribué au recul de l'agriculture pluviale, tandis que certaines maladies respiratoires et dermatologiques pourraient être favorisées par la pollution issue des activités minières. Ces constats soulignent la nécessité de promouvoir une exploitation minière plus respectueuse de l'environnement et de renforcer les mesures de protection sanitaire des populations.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Ainsi, selon le Plan de Développement Communal, la <strong>SERPM</strong> occupe une place importante dans le développement économique de Hamady Hounaré. Le renforcement de sa responsabilité sociétale, l'amélioration de l'emploi local, la protection de l'environnement et une meilleure implication des communautés locales constituent des conditions essentielles pour que l'exploitation des ressources minières contribue pleinement au développement durable de la commune.
                </p>

            </div>
        </div>

    </div>

</section>

<section id="gpf" class="tab-section py-5" style="display:none;">

    <div class="container">

        <h2 class="text-center text-primary fw-bold mb-4">
            Les Groupements de Promotion Féminine (GPF)
        </h2>

        <div class="card shadow border-0">
            <div class="card-body">

                <p style="text-align:justify; line-height:1.9;">
                    Les <strong>Groupements de Promotion Féminine (GPF)</strong> constituent des organisations communautaires qui jouent un rôle essentiel dans le développement économique et social de la commune de Hamady Hounaré. Ils regroupent des femmes autour d'activités génératrices de revenus et favorisent leur autonomisation économique, leur participation au développement local ainsi que le renforcement de la solidarité communautaire.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Selon le <strong>Plan de Développement Communal (PDC)</strong>, les femmes occupent une place importante dans les activités économiques de la commune, notamment dans l'agriculture, le petit commerce, la transformation des produits locaux, l'élevage des petits ruminants et de la volaille, ainsi que dans la commercialisation des produits laitiers. Elles contribuent ainsi de manière significative aux revenus des ménages et à la sécurité alimentaire.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Les GPF constituent un cadre d'organisation permettant aux femmes de mutualiser leurs efforts, d'accéder aux formations, aux financements et aux différents programmes d'appui mis en œuvre par les partenaires au développement. À travers ces groupements, les femmes renforcent leurs capacités entrepreneuriales et participent davantage aux initiatives de développement de la commune.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Le PDC met cependant en évidence plusieurs contraintes qui limitent l'épanouissement économique des femmes. Parmi celles-ci figurent le faible accès aux financements, l'insuffisance d'équipements de production et de transformation, ainsi que le manque d'infrastructures de conservation des produits, notamment dans la filière laitière où l'absence d'unités de conservation et de transformation constitue un frein important à la valorisation des productions féminines.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Par ailleurs, le document souligne que l'alphabétisation des femmes demeure insuffisamment développée. Il rappelle que les centres d'alphabétisation pourraient favoriser l'équité entre les femmes et les hommes et renforcer la participation des femmes dans les instances de décision communautaires.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Dans cette perspective, le Plan de Développement Communal préconise le renforcement des capacités des femmes, l'amélioration de leur accès aux financements, la promotion des activités génératrices de revenus et le développement d'infrastructures de transformation et de conservation afin d'accroître leur contribution au développement économique local. Le renforcement des <strong>Groupements de Promotion Féminine (GPF)</strong> apparaît ainsi comme un levier important pour promouvoir l'autonomisation des femmes, réduire la pauvreté et soutenir un développement inclusif et durable de la commune de Hamady Hounaré.
                </p>

            </div>
        </div>

    </div>

</section>

<!-- Section Conseil de Quartier -->
<section id="partenaire6" class="tab-section py-5" style="display:none;">

    <div class="container">

        <div class="card shadow border-0">
            <div class="card-body p-5">

                <h2 class="text-success fw-bold text-center mb-4">
                    Le Conseil de Quartier (CDQ)
                </h2>

                <p style="text-align:justify; line-height:1.9;">
                    Le Conseil de Quartier est une structure fédérative apolitique,
                    non confessionnelle et non corporative reconnue par la Municipalité.
                    Espace de concertation et de mise en cohérence des actions et des
                    acteurs autour des problèmes de développement du quartier, il constitue
                    un cadre de promotion de la citoyenneté et d’expression de la démocratie
                    participative en complément de la démocratie représentative.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Le Conseil de Quartier permet :
                </p>

                <ul style="line-height:1.9;">
                    <li>
                        d’identifier les contraintes de développement du quartier ;
                    </li>

                    <li>
                        de proposer des solutions et des projets de développement au Maire.
                    </li>
                </ul>


                <h5 class="fw-bold text-success mt-4">
                    Le conseil de quartier a principalement pour objectif de :
                </h5>

                <ul style="line-height:1.9; text-align:justify;">

                    <li>
                        Susciter et/ou soutenir les initiatives d’auto promotion
                        développées dans le quartier ;
                    </li>

                    <li>
                        Contribuer à la réalisation des projets ayant pour cadre le quartier
                        (Plan de développement du quartier) ;
                    </li>

                    <li>
                        Constituer un interlocuteur privilégié pour toute intervention liée
                        à des actions de développement dans le quartier, en rapport avec
                        les autorités municipales ;
                    </li>

                    <li>
                        Jouer le rôle d’interface entre les populations et les partenaires
                        au développement.
                    </li>

                </ul>

            </div>
        </div>

    </div>

</section>

<!-- ====================================== -->
<!-- PRÉSENTATION DE LA SOMA -->
<!-- ====================================== -->

<section id="presentationSOMA"
         class="tab-section py-5"
         style="display:none;">

    <div class="container">

        <!-- Titre -->
        <h2 class="text-center text-primary fw-bold mb-5">
            PRÉSENTATION DE LA SOMA
        </h2>

        <!-- Présentation générale -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <p style="text-align:justify; line-height:1.9;">
                    La <strong>SOMA (Société Minière Africaine)</strong> est
                    une entreprise évoluant dans le secteur minier au Sénégal,
                    notamment dans l’exploitation des ressources phosphatées
                    de la région de Matam.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Elle s’inscrit dans le développement de la filière
                    <strong>phosphates-fertilisants</strong>, qui constitue
                    l’une des principales activités minières de la région.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Dans le département de Kanel, l’activité minière concerne
                    notamment les communes de
                    <strong>Ndendory, Hamady Hounaré et Orkadiéré</strong>.
                    La SOMA Afrique figure parmi les entreprises minières
                    présentes dans cette zone et participe ainsi à la dynamique
                    du secteur extractif régional.
                </p>

            </div>
        </div>

        <!-- SOMA et développement local -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-4">
                    SOMA et développement local
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    À l’échelle de la commune de
                    <strong>Hamady Hounaré</strong>, la présence des entreprises
                    minières représente un enjeu important pour le développement
                    économique local.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Elle peut contribuer à la
                    <strong>création d’emplois</strong>, au développement des
                    activités économiques et à la mobilisation de ressources
                    au profit des collectivités territoriales.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    Toutefois, l’exploitation minière soulève également des
                    préoccupations liées aux impacts environnementaux, aux
                    nuisances et à la nécessité de renforcer les actions de
                    <strong>Responsabilité Sociétale des Entreprises
                    (RSE)</strong> en faveur des populations locales.
                </p>

            </div>
        </div>

        <!-- Situation de SOMA -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-4">
                    Situation de la SOMA dans la zone
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Il convient de préciser que, selon les informations
                    disponibles en 2026, la
                    <strong>SOMA</strong> a repris l’exploitation de la mine
                    de <strong>Waly Diala</strong> située dans la commune
                    d’<strong>Orkadiéré</strong>.
                </p>

                <p style="text-align:justify; line-height:1.9;">
                    La <strong>SOMIVA</strong>, quant à elle, est directement
                    présente dans la commune de
                    <strong>Hamady Hounaré</strong>.
                </p>

            </div>
        </div>

        <!-- Enjeux pour Hamady Hounaré -->
        <div class="card shadow border-0 mb-4">
            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-4">
                    Enjeux pour le développement de la Commune
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    Dans une perspective de
                    <strong>développement local durable</strong>, la présence
                    des sociétés minières dans la zone doit être accompagnée
                    d’une meilleure implication des communautés et
                    d’investissements dans les secteurs sociaux prioritaires.
                </p>

                <ul style="text-align:justify; line-height:2;">

                    <li>
                        <strong>
                            Favoriser la création d’emplois locaux
                        </strong>
                        au profit des populations.
                    </li>

                    <li>
                        <strong>
                            Soutenir les activités économiques locales
                        </strong>
                        et les initiatives des jeunes et des femmes.
                    </li>

                    <li>
                        <strong>
                            Renforcer les actions de Responsabilité Sociétale
                            des Entreprises (RSE).
                        </strong>
                    </li>

                    <li>
                        <strong>
                            Améliorer l’implication des communautés locales
                        </strong>
                        dans les actions liées aux activités minières.
                    </li>

                    <li>
                        <strong>
                            Préserver l’environnement
                        </strong>
                        et prendre davantage en compte les enjeux
                        environnementaux.
                    </li>

                    <li>
                        <strong>
                            Soutenir les secteurs sociaux prioritaires
                        </strong>
                        de la Commune.
                    </li>

                </ul>

            </div>
        </div>

        <!-- En résumé -->
        <div class="card shadow border-0">

            <div class="card-body p-4">

                <h4 class="fw-bold text-primary mb-3">
                    En résumé
                </h4>

                <p style="text-align:justify; line-height:1.9;">
                    La présence de la
                    <strong>SOMA</strong> dans le secteur minier régional
                    constitue un élément important de la dynamique économique
                    du département de Kanel. Pour la
                    <strong>Commune de Hamady Hounaré</strong>, les activités
                    minières doivent être accompagnées d’une implication
                    renforcée des communautés, d’investissements sociaux et
                    d’actions en faveur de l’<strong>emploi local</strong>,
                    tout en assurant une meilleure prise en compte des
                    <strong>enjeux environnementaux</strong>.
                </p>

            </div>
        </div>

    </div>

</section>

<section id="arretes" class="tab-section py-5" style="display:none;">

    <div class="container">

        <h2 class="text-center text-primary fw-bold mb-5">
            Les Arrêtés Municipaux
        </h2>

        <div class="row g-4">

           <!-- Arrêté 1 -->
<div class="col-lg-6">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                Arrêté n°01 - Portant nomination des membres du CGE
            </h5>

            <a href="#photosArrete1"
               class="btn btn-primary mt-3"
               onclick="afficherPhotosArrete1(event);">

                <i class="fas fa-eye me-2"></i>
                Consulter l'arrêté

            </a>

            <!-- Photos de l'arrêté n°01 -->
            <div id="photosArrete1" class="mt-4" style="display:none;">

                <!-- Première photo -->
                <div class="text-center mb-4">
                    <img src="{{ asset('images/arrete1-1.png') }}"
                         class="img-fluid shadow"
                         style="width:100%; height:auto;"
                         alt="Arrêté n°01 - page 1">
                </div>

                <!-- Deuxième photo -->
                <div class="text-center">
                    <img src="{{ asset('images/arrete1-2.png') }}"
                         class="img-fluid shadow"
                         style="width:100%; height:auto;"
                         alt="Arrêté n°01 - page 2">
                </div>

            </div>

        </div>
    </div>
</div>
            <!-- Arrêté 2 -->
<div class="col-lg-6">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                Arrêté n°02 - Portant création de commissions communales
                de réception et de répartition des lampadaires solaires
            </h5>

            <a href="#photosArrete2"
               class="btn btn-primary mt-3"
               onclick="afficherPhotosArrete2(event);">

                <i class="fas fa-eye me-2"></i>
                Consulter l'arrêté

            </a>

            <!-- Photo de l'arrêté n°02 -->
            <div id="photosArrete2" class="mt-4" style="display:none;">

                <div class="text-center">
                    <img src="{{ asset('images/arrete2.png') }}"
                         class="img-fluid shadow"
                         style="width:100%; height:auto;"
                         alt="Arrêté n°02">
                </div>

            </div>

        </div>
    </div>
</div>

            <!-- Arrêté 3 -->
<div class="col-lg-6">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                Arrêté n°03 - Portant création de la Commission des Marchés
                dans la Commune de Hamady Hounaré pour la gestion 2025
            </h5>

            <a href="#photosArrete3"
               class="btn btn-primary mt-3"
               onclick="afficherPhotosArrete3(event);">

                <i class="fas fa-eye me-2"></i>
                Consulter l'arrêté

            </a>

            <!-- Photo de l'arrêté n°03 -->
            <div id="photosArrete3" class="mt-4" style="display:none;">

                <div class="text-center">
                    <img src="{{ asset('images/arrete3.png') }}"
                         class="img-fluid shadow"
                         style="width:100%; height:auto;"
                         alt="Arrêté n°03">
                </div>

            </div>

        </div>
    </div>
</div>

            <!-- Arrêté 4 -->
<div class="col-lg-6">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                Arrêté n°04 - Portant mise en place de la Cellule de Passation des Marchés
                dans la Commune de Hamady Hounaré pour la gestion 2025
            </h5>

            <a href="#photosArrete4"
               class="btn btn-primary mt-3"
               onclick="afficherPhotosArrete4(event);">

                <i class="fas fa-eye me-2"></i>
                Consulter l'arrêté

            </a>

            <!-- Photo de l'arrêté n°04 -->
            <div id="photosArrete4" class="mt-4" style="display:none;">

                <div class="text-center">
                    <img src="{{ asset('images/arrete4.png') }}"
                         class="img-fluid shadow"
                         style="width:100%; height:auto;"
                         alt="Arrêté n°04">
                </div>

            </div>

        </div>
    </div>
</div>

          <!-- Arrêté 5 -->
<div class="col-lg-6">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                Arrêté n°05 - Rapport du Maire
            </h5>

            <a href="#photosArrete5"
               class="btn btn-primary mt-3"
               onclick="afficherPhotosArrete5(event);">

                <i class="fas fa-eye me-2"></i>
                Consulter l'arrêté

            </a>

            <!-- Photos de l'arrêté n°05 -->
            <div id="photosArrete5" class="mt-4" style="display:none;">

                <!-- Photo 1 -->
                <div class="text-center mb-4">
                    <img src="{{ asset('images/arrete5-1.png') }}"
                         class="img-fluid shadow"
                         style="width:100%; height:auto;"
                         alt="Arrêté n°05 - Page 1">
                </div>

                <!-- Photo 2 -->
                <div class="text-center mb-4">
                    <img src="{{ asset('images/arrete5-2.png') }}"
                         class="img-fluid shadow"
                         style="width:100%; height:auto;"
                         alt="Arrêté n°05 - Page 2">
                </div>

                <!-- Photo 3 -->
                <div class="text-center">
                    <img src="{{ asset('images/arrete5-3.png') }}"
                         class="img-fluid shadow"
                         style="width:100%; height:auto;"
                         alt="Arrêté n°05 - Page 3">
                </div>

            </div>

        </div>
    </div>
</div>
           <!-- Arrêté 6 -->
<div class="col-lg-6">
    <div class="card shadow border-0 h-100">
        <div class="card-body">

            <h5 class="fw-bold text-primary">
                Arrêté n°06 - Procès verbal de réunion
            </h5>

            <a href="#photosArrete6"
               class="btn btn-primary mt-3"
               onclick="afficherPhotosArrete6(event);">

                <i class="fas fa-eye me-2"></i>
                Consulter l'arrêté

            </a>

            <!-- Photos de l'arrêté n°06 -->
            <div id="photosArrete6" class="mt-4" style="display:none;">

                <!-- Photo 1 -->
                <div class="text-center mb-4">
                    <img src="{{ asset('images/arrete6-1.png') }}"
                         class="img-fluid shadow"
                         style="width:100%; height:auto;"
                         alt="Arrêté n°06 - Page 1">
                </div>

                <!-- Photo 2 -->
                <div class="text-center mb-4">
                    <img src="{{ asset('images/arrete6-2.png') }}"
                         class="img-fluid shadow"
                         style="width:100%; height:auto;"
                         alt="Arrêté n°06 - Page 2">
                </div>

              

            </div>

        </div>
    </div>
</div>
     

        </div>

      
    </div>

</section>

<!-- ============================= -->
<!-- MENU ACTUALITÉ -->
<!-- ============================= -->

<section id="actualite" 
         class="tab-section py-5" 
         style="display:none;"> 
 
    <div class="container"> 
 
        <h2 class="text-center text-primary fw-bold mb-5"> 
            ACTUALITÉS 
        </h2> 
 
        <!-- PREMIÈRE ACTUALITÉ -->
        <div class="row align-items-center mb-4"> 
 
            <!-- PHOTO 1 À GAUCHE -->
            <div class="col-lg-5"> 
                <div class="card shadow border-0"> 
                    <img src="{{ asset('images/diong.png') }}" 
                         class="img-fluid" 
                         style="width:100%; height:auto; object-fit:contain;"
                         alt="Actualité 1"> 
                </div> 
            </div> 
 
            <!-- TEXTE À DROITE, CENTRÉ VERTICALEMENT -->
            <div class="col-lg-7"> 
                <h3 class="text-dark fw-bold text-center">
                    Signature d’accord de partenariat entre la Commune de Hamady Hounare et SONAGED : 2026
                </h3>
            </div> 
 
        </div>

       <!-- DEUXIÈME ACTUALITÉ -->
<div class="row align-items-center mb-4">

    <!-- PHOTO 2 À GAUCHE -->
    <div class="col-lg-5">
        <div class="card shadow border-0">
            <img src="{{ asset('images/car.png') }}"
                 class="img-fluid"
                 style="width:100%; height:auto; object-fit:contain;"
                 alt="Actualité 2">
        </div>
    </div>

    <!-- TEXTE À DROITE -->
    <div class="col-lg-7">
        <h3 class="text-dark fw-bold text-center">
            Réception d’un camion de poubelle pour la collecte des déchets de la Commune de Hamady Hounare : 2026
        </h3>
    </div>

</div>
 
    </div> 
 
</section>

<section id="stagesRecrutements"
         class="tab-section py-5"
         style="display:none;">

    <div class="container">

        <h2 class="text-center text-primary fw-bold mb-5">
            STAGES ET RECRUTEMENTS
        </h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover text-center align-middle shadow">

                <thead class="table-primary">
                    <tr>
                        <th>Stages / Recrutements</th>
                        <th>Année</th>
                        <th>Profil</th>
                        <th>Nombre</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- STAGES -->
                    <tr>
                        <th rowspan="5" class="table-primary">
                            STAGES
                        </th>
                        <td>2024</td>
                        <td>Informatique</td>
                        <td>5</td>
                    </tr>

                    <tr>
                        <td>2024</td>
                        <td>Administration</td>
                        <td>3</td>
                    </tr>

                    <tr>
                        <td>2025</td>
                        <td>Informatique</td>
                        <td>8</td>
                    </tr>

                    <tr>
                        <td>2025</td>
                        <td>Comptabilité</td>
                        <td>4</td>
                    </tr>

                    <tr>
                        <td>2026</td>
                        <td>Informatique</td>
                        <td>10</td>
                    </tr>


                    <!-- RECRUTEMENTS -->
                    <tr>
    <th rowspan="3"
        class="table-primary"
        style="border-top: 4px solid #000;">
        RECRUTEMENTS
    </th>
                        <td>2024</td>
                        <td>Agent administratif</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>2025</td>
                        <td>Informaticien</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>2026</td>
                        <td>Secrétaire</td>
                        <td>2</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script>
function showSection(id) {

    // cacher toutes les sections
    document.querySelectorAll('.tab-section').forEach(sec => {
        sec.style.display = 'none';
    });

    // afficher la section choisie
    const target = document.getElementById(id);

    if (target) {
        target.style.display = 'block';

        // attendre que le navigateur affiche la section
        setTimeout(() => {
            window.scrollTo({
                top: target.offsetTop - 80, // ajuste si menu fixe
                behavior: "smooth"
            });
        }, 50);
    }
}

// affichage par défaut : rester en haut du site
document.addEventListener("DOMContentLoaded", function () {
    window.scrollTo(0, 0);
});
</script>

<script>

document.getElementById("btnVoirPlus").onclick = function(){

    let projets = document.getElementById("plus-projets");

    if(projets.style.display === "none"){
        projets.style.display = "flex";
        this.innerHTML = "Voir moins";
    }
    else{
        projets.style.display = "none";
        this.innerHTML = "Voir plus";
    }

}

</script>

<script>
function afficherPhotosArrete1(event) {

    event.preventDefault();

    const photos = document.getElementById('photosArrete1');

    if (photos) {

        photos.style.display = 'block';

        setTimeout(function () {
            photos.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }, 100);
    }
}
</script>

<script>
function afficherPhotosArrete2(event) {

    event.preventDefault();

    const photos = document.getElementById('photosArrete2');

    if (photos.style.display === 'none') {
        photos.style.display = 'block';
    } else {
        photos.style.display = 'none';
    }
}
</script>

<script>
function afficherPhotosArrete3(event) {

    event.preventDefault();

    const photos = document.getElementById('photosArrete3');

    if (photos.style.display === 'none') {
        photos.style.display = 'block';
    } else {
        photos.style.display = 'none';
    }
}
</script>

<script>
function afficherPhotosArrete4(event) {

    event.preventDefault();

    const photos = document.getElementById('photosArrete4');

    if (photos.style.display === 'none') {
        photos.style.display = 'block';
    } else {
        photos.style.display = 'none';
    }
}
</script>

<script>
function afficherPhotosArrete5(event) {

    event.preventDefault();

    const photos = document.getElementById('photosArrete5');

    if (photos.style.display === 'none') {
        photos.style.display = 'block';
    } else {
        photos.style.display = 'none';
    }
}
</script>

<script>
function afficherPhotosArrete6(event) {

    event.preventDefault();

    const photos = document.getElementById('photosArrete6');

    if (photos.style.display === 'none') {
        photos.style.display = 'block';
    } else {
        photos.style.display = 'none';
    }
}
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const carouselElement = document.getElementById('bannerCarousel');

    const carousel = new bootstrap.Carousel(carouselElement, {
        interval: 5000,
        ride: 'carousel',
        wrap: true
    });

    carouselElement.addEventListener('slid.bs.carousel', function () {
        // Le diaporama continue automatiquement
    });

});
</script>
</body>
</html>