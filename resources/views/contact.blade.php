<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Starter Kit | Home</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    {{-- <link rel="stylesheet" href="assets/css/app.css"> --}}
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light bg-primary d-flex justify-content-center col-12" style="padding-bottom: 0;height: 50px;">
        <div class="mx-xl-4 w-100 d-flex py-1">
            <div class="d-lg-flex d-none gap-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-geo-alt text-white me-2"></i>
                    <a target="_blank" href="https://www.google.com/maps/place/ORCLOUD/@36.7087827,3.0826035,17z/data=!3m1!4b1!4m5!3m4!1s0x128fadae211261fd:0x75db15dec911d09d!8m2!3d36.7087827!4d3.0847922" class="text-top">
                        Ain Naadja,16065 Le Gué de Constantine
                    </a>
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-telephone text-white me-2"></i>
                    <a href="tel:0793 739 573" class="text-top">
                        0793 739 573
                    </a>
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-envelope text-white me-2"></i>
                    <a href="mailto:contact@orcloud.dz" class="text-top">
                        contact@orcloud.dz
                    </a>
                </div>
            </div>
            <div class="social-wrapper d-flex mt-n2 ms-auto">
                <div class="social-icons col-3 d-flex mt-2">
                    <a href="#"><i class="fab fa-facebook-f text-white" style="border-radius: 30px;padding: 8px 10px;"></i></a>
                    <a href="#"><i class="fab fa-twitter text-white" style="border-radius: 30px;padding: 8px;"></i></a>
                    <a href="#"><i class="fab fa-instagram text-white" style="border-radius: 30px;padding: 8px 10px;"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in text-white" style="border-radius: 30px;padding: 8px 10px;"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <header class="header-anim w-100 col-11 d-flex flex-column align-items-center position-sticky sticky-top" style="z-index: 1007;">
        <nav class="navbar navbar-expand-xl col-11 position-relative navbar-light " style="padding-bottom: .25rem !important;">
            <a class="d-flex navbar-brand me-auto me-lg-2 mt-n1 me-xl-5 pe-4 logo-c-top position-relative" href="/" style="margin-bottom: -20px;">
                <img src="../assets/images/logo.png" alt="Logo" class="img-fluid logo-top pb-3" style="object-fit: contain;max-width: 240px;">
            </a>
            <button class="navbar-toggler ms-2 me-3 d-block d-xl-none order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation" style="z-index: 99;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="cart-container order-2 order-xl-3 d-flex align-items-center ms-auto mt-lg-n1">
                <div class="d-flex me-3">
                    <a href="inscription.html" class="d-flex align-items-center me-3">
                        <i class="bi bi-box-arrow-down d-lg-none" style="font-size: 1.5rem;"></i>
                        <p class="my-0 fs-6 d-lg-block d-none">Inscription</p>
                    </a>
                    <a href="login.html" class="d-flex align-items-center">
                        <i class="bi bi-box-arrow-right d-lg-none" style="font-size: 1.5rem;"></i>
                        <p class="my-0 fs-6 d-lg-block d-none">Connection</p>
                    </a>
                </div>
                <div class="account dropdown me-3 order-1 order-xl-0">
                    <a href="#" role="button" id="dropdownAccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person" style="font-size: 1.5rem;"></i>
                    </a>
                    <div class="dropdown-menu trans-40" aria-labelledby="dropdownAccount">
                        <a class="dropdown-item" href="account.html">Mon Compte</a>
                        <a class="dropdown-item" href="connection.html">Se Déconnecter</a>
                    </div>
                </div>
                <div class="search dropdown dropdown-search-wrap me-3 order-0 order-xl-3" style="position: initial;">
                    <a class="rounded-circle dropdown-search" href="#" role="button" id="dropdownSearch" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-search" style="font-size: 1.3rem;"></i>
                    </a>
                    <div class="dropdown-menu mt-3 border-0 rounded shadow trans5" aria-labelledby="dropdownSearch" style="width: 80vw;">
                        <form class="form-inline menu-search mx-auto">
                            <div class="input-group position-relative p-3">
                                <input class="form-control search-form d-block" type="search" placeholder="Chercher" aria-label="Chercher" style="max-width: unset; ">
                                <button onclick="location.href = '/recherche.html';" class="d-block border-0 btn  position-absolute r18" style="top: 27%;border-radius: 50%;z-index: 9;" type="button">
                                    <i class="bi bi-search search-drop"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cart rounded-circle order-last" style="margin-top: -5px;height: 36px;">
                    <select name="lang" id="" class="form-select order-last form-control w-max h-auto ms-auto border-0" style="cursor: pointer;">
                        <option value="001">Fr</option>
                        <option value="002">Ar</option>
                        <option value="003">An</option>
                    </select>
                </div>
            </div>
            <div class="collapse navbar-collapse order-last order-xl-1 mt-lg-n1" id="mainNav">
                <div class="mx-lg-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item me-lg-4">
                            <a class="nav-link fs-6 text-header" href="/">
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item me-lg-4">
                            <a class="nav-link fs-6 text-header" href="presentation.html">
                                Présentation
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-service me-lg-4">
                            <a class="nav-link fs-6 ps-0 text-header dropdown-toggle" href="services.html" id="navbarDropdownMenuLink">
                                Nos Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center fs-15" href="details-services.html">
                                        <div class="d-flex justify-content-center bg-tertiary rounded align-items-center me-2" style="width: 25px;height: 25px;">
                                            <i class="bi bi-play text-white" style="font-size: 1.2em;color: white !important;"></i>
                                        </div>
                                        Assistance et Conseil
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center fs-15" href="details-services.html">
                                        <div class="d-flex justify-content-center bg-tertiary rounded align-items-center me-2" style="width: 25px;height: 25px;">
                                            <i class="bi bi-play text-white" style="font-size: 1.2em;color: white !important;"></i>
                                        </div>
                                        Conciergerie & Assistance aux Personnes
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center fs-15" href="details-services.html">
                                        <div class="d-flex justify-content-center bg-tertiary rounded align-items-center me-2" style="width: 25px;height: 25px;">
                                            <i class="bi bi-play text-white" style="font-size: 1.2em;color: white !important;"></i>
                                        </div>
                                        Aménagement et Construction
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center fs-15" href="details-services.html">
                                        <div class="d-flex justify-content-center bg-tertiary rounded align-items-center me-2" style="width: 25px;height: 25px;">
                                            <i class="bi bi-play text-white" style="font-size: 1.2em;color: white !important;"></i>
                                        </div>
                                        Entretien et Maintenance
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center fs-15" href="details-services.html">
                                        <div class="d-flex justify-content-center bg-tertiary rounded align-items-center me-2" style="width: 25px;height: 25px;">
                                            <i class="bi bi-play text-white" style="font-size: 1.2em;color: white !important;"></i>
                                        </div>
                                        Facility Management
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center fs-15" href="location.html">
                                        <div class="d-flex justify-content-center bg-tertiary rounded align-items-center me-2" style="width: 25px;height: 25px;">
                                            <i class="bi bi-play text-white" style="font-size: 1.2em;color: white !important;"></i>
                                        </div>
                                        Location de Véhicule
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center fs-15" href="transport.html">
                                        <div class="d-flex justify-content-center bg-tertiary rounded align-items-center me-2" style="width: 25px;height: 25px;">
                                            <i class="bi bi-play text-white" style="font-size: 1.2em;color: white !important;"></i>
                                        </div>
                                        Transport
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item me-lg-4">
                            <a class="nav-link fs-6 ps-0 text-header" href="blog.html">
                                Blog
                            </a>
                        </li>
                        <li class="nav-item me-lg-4">
                            <a class="nav-link fs-6 ps-0 text-header" href="contact.html">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="py-5 breadcrumb-container d-flex flex-column justify-content-center position-relative" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.4)), url('../assets/images/hand.jpg') center ;
background-size: cover;padding: 55px 0;;overflow: hidden;height: 300px;">
        <nav aria-label="breadcrumb">
            <div class="d-flex flex-column align-items-center">
                <h2 style="color: #fff;">Contact</h2>
                <ol class="breadcrumb" style="background: unset;">
                    <li class=""><a class="text-white" href="/">Accueil</a></li>
                    <span class="mx-2 text-white">/</span>
                    <li class="" style="color: #fff;" aria-current="page">Contact</li>
                </ol>
            </div>
        </nav>
    </section>
    <section class="section">
        <div class="px-2 px-lg-5 d-flex flex-column align-items-center">
            <div class="col-12 d-flex flex-wrap py-4">
                <div class="col-md-6 col-lg-4 col-12 d-flex justify-content-center px-2 mt-3">
                    <div class="card contact-shadow d-flex flex-md-row align-items-lg-center card-body py-4">
                        <div class="d-flex justify-content-center align-items-center rounded-circle bg-tertiary" style="width: 50px; height: 50px;">
                            <i alt="" class="bi bi-envelope text-white" style="font-size: 1.1rem;"></i>
                        </div>
                        <div class="d-flex flex-column ms-md-2 mt-2 mt-md-0">
                            <h2 class="fs-6 fw-600 mb-2">Direction Technique</h2>
                            <p class="mb-1">+213 770 57 45 48</p>
                            <p class="mb-1">dt@swordcorp.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-12 d-flex justify-content-center px-2 mt-3">
                    <div class="card contact-shadow d-flex flex-md-row align-items-lg-center card-body py-4">
                        <div class="d-flex justify-content-center align-items-center rounded-circle bg-tertiary" style="width: 50px; height: 50px;">
                            <i alt="" class="bi bi-envelope text-white" style="font-size: 1.1rem;"></i>
                        </div>
                        <div class="d-flex flex-column ms-md-2 mt-2 mt-md-0">
                            <h2 class="fs-6 fw-600 mb-2">Direction Finances et Comptabilité</h2>
                            <p class="mb-1">dfc@swordcorp.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-12 d-flex justify-content-center px-2 mt-3">
                    <div class="card contact-shadow d-flex flex-md-row align-items-lg-center card-body py-4">
                        <div class="d-flex justify-content-center align-items-center rounded-circle bg-tertiary" style="width: 50px; height: 50px;">
                            <i alt="" class="bi bi-envelope text-white" style="font-size: 1.1rem;"></i>
                        </div>
                        <div class="d-flex flex-column ms-2">
                            <h2 class="fs-6 fw-600 mb-2">Direction des Ressources Humaines</h2>
                            <p class="mb-1">hr@swordcorp.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-12 d-flex justify-content-center px-2 mt-3">
                    <div class="card contact-shadow d-flex flex-md-row align-items-lg-center card-body py-4">
                        <div class="d-flex justify-content-center align-items-center rounded-circle bg-tertiary" style="width: 50px; height: 50px;">
                            <i alt="" class="bi bi-envelope text-white" style="font-size: 1.1rem;"></i>
                        </div>
                        <div class="d-flex flex-column ms-2">
                            <h2 class="fs-6 fw-600 mb-2">Département Recrutement</h2>
                            <p class="mb-1">cv@swordcorp.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-12 d-flex justify-content-center px-2 mt-3">
                    <div class="card contact-shadow d-flex flex-md-row align-items-lg-center card-body py-4">
                        <div class="d-flex justify-content-center align-items-center rounded-circle bg-tertiary" style="width: 50px; height: 50px;">
                            <i alt="" class="bi bi-envelope text-white" style="font-size: 1.1rem;"></i>
                        </div>
                        <div class="d-flex flex-column ms-2">
                            <h2 class="fs-6 fw-600 mb-2">Assistance 24h/7j</h2>
                            <p class="mb-1">+213 770 57 45 95</p>
                            <p class="mb-1">+213 770 57 45 11</p>
                            <p class="mb-1">24h@swordcorp.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-12 d-flex justify-content-center px-2 mt-3">
                    <div class="card contact-shadow d-flex flex-md-row align-items-lg-center card-body py-4">
                        <div class="d-flex justify-content-center align-items-center rounded-circle bg-tertiary" style="width: 50px; height: 50px;">
                            <i alt="" class="bi bi-envelope text-white" style="font-size: 1.1rem;"></i>
                        </div>
                        <div class="d-flex flex-column ms-2">
                            <h2 class="fs-6 fw-600 mb-2">Direction Commerciale</h2>
                            <p class="mb-1">+213 770 57 45 04</p>
                            <p class="mb-1">dc@swordcorp.com</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-12 d-flex justify-content-center px-2 mt-3">

            </div>
        </div>
    </section>
    <!-- contact form -->
    <section class="py-5">
        <div class="w-100 px-lg-5 px-3" id="contact">
            <div class="row mb-3">
                <div class="col-lg-6 col-12 d-flex flex-column ps-0">
                    <div class="w-100 mb-md-5 mb-3  ps-3 d-flex flex-column">
                        <h1 class="text-capitalize fs-2 text-primary my-3">Contactez nous</h1>
                        <div class="bg-primary" style="height: 5px;width: 60px;"></div>
                    </div>
                    <div>
                        <form class="contact__form" method="post">
                            <div class="row card border-0">
                                <div class="col-12 position-relative form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Nom" required>
                                    <i class="bi bi-person-fill text-tertiary position-absolute" style="top: 12px;right: 25px;font-size: 1.3rem;"></i>
                                </div>
                                <div class="col-12 position-relative form-group">
                                    <input name="prenom" type="text" class="form-control" placeholder="Prénom" required>
                                    <i class="bi bi-person-fill text-tertiary position-absolute" style="top: 12px;right: 25px;font-size: 1.3rem;"></i>
                                </div>
                                <div class="col-12 position-relative form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Email" required>
                                    <i class="bi bi-envelope-fill text-tertiary position-absolute" style="top: 12px;right: 25px;font-size: 1.3rem;"></i>
                                </div>
                                <div class="col-12 position-relative form-group">
                                    <input name="tel" type="tel" class="form-control" placeholder="Téléphone" required>
                                    <i class="bi bi-telephone-fill text-tertiary position-absolute" style="top: 12px;right: 25px;font-size: 1.3rem;"></i>
                                </div>
                                <div class="col-12 position-relative form-group">
                                    <input name="adresse" type="text" class="form-control" placeholder="Adresse" required>
                                    <i class="bi bi-geo-alt-fill text-tertiary position-absolute" style="top: 12px;right: 25px;font-size: 1.3rem;"></i>
                                </div>
                                <div class="col-12 position-relative form-group">
                                    <textarea name="message" class="form-control" rows="4" placeholder="Message" required style="height: unset;"></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <input name="submit" type="submit" class=" btn btn-ms b-15 col-12 py-2 text-white" value="Envoyer">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="card d-flex flex-md-row align-items-lg-center card-body py-4">
                        <div class="d-flex justify-content-center align-items-center rounded-circle bg-tertiary" style="width: 50px; height: 50px;padding: 0 16px;">
                            <i alt="" class="bi bi-geo-alt text-white" style="font-size: 1.1rem;"></i>
                        </div>
                        <div class="d-flex flex-column ms-md-2 mt-2 mt-md-0">
                            <h2 class="fs-6 fw-600 mb-2">Adresse</h2>
                            <p class="mb-1">Villa 30 lotissement les Castors, Extension 07, Saïd Hamdine Alger – Algérie</p>
                        </div>
                    </div>
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.5736174459007!2d3.0826035152873223!3d36.70878267996754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fadae211261fd%3A0x75db15dec911d09d!2sORCLOUD!5e0!3m2!1sen!2sdz!4v1623496288086!5m2!1sen!2sdz" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-primary px-3 py-5">
        <div class="d-flex flex-md-row flex-column align-items-center justify-content-center container-md">
            <h4 class="fw-600 text-white my-0 ps-3 text-center border-lt">Pour plus de Renseignement</h4>
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalContact" role="button" class="ms-md-auto mt-md-0 mt-3 py-2 px-4 b-15 text-primary bg-white">Contactez-nous</a>
        </div>

    </div>

    <div class="modal fade" id="exampleModalContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="d-flex justify-content-center w-100">
                        <h5 class="modal-title" style="margin-left: 1.75rem;">
                            <div id="modalTitle" class="text-white">Contactez-nous</div>
                        </h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="contact__form">
                        <div class="row">
                            <div class="col-12 form-group px-0">
                                <input name="nom" type="text" class="form-control" placeholder="Nom" required>
                            </div>
                            <div class="col-12 form-group px-0">
                                <input name="prénom" type="text" class="form-control" placeholder="Prénom" required>
                            </div>
                            <div class="col-12 form-group px-0">
                                <input name="telephone" type="tel" class="form-control" placeholder="Telephone" required>
                            </div>
                            <div class="col-12 form-group px-0">
                                <input name="email" type="text" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="col-12 mt-4 d-flex justify-content-center">
                                <button type="submit" class=" btn btn-ms mt-n4 b-15 px-3 py-2 font-weight-bold">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" class="section-padding position-relative" style="background: #1F2530;">
        <div class="pt-5 pb-4 container position-relative">
            <div class="row footer-center pt-2">
                <div class="footer-map-container d-sm-block col-lg-4 col-md-6">
                    <a class="d-flex navbar-brand position-relative" href="/">
                        <img src="../assets/images/logo.png" alt="Logo" class="img-fluid pb-3" style="object-fit: contain;max-width: 150px;filter: brightness(0) invert(1);">
                    </a>
                    <ul class="list-unstyled d-flex ps-2">
                        <li class="fs-14">
                            <a href="#" class="d-flex align-items-center text-white" target="_blank">
                                <i class="bi bi-facebook me-3 text-white" style="font-size: 1.3rem;"></i>
                            </a>
                        </li>
                        <li class="fs-14">
                            <a href="#" class="d-flex align-items-center text-white" target="_blank">
                                <i class="bi bi-twitter me-3 text-white" style="font-size: 1.3rem;"></i>
                            </a>
                        </li>
                        <li class="fs-14">
                            <a href="#" class="d-flex align-items-center text-white" target="_blank">
                                <i class="bi bi-instagram me-3 text-white" style="font-size: 1.3rem;"></i>
                            </a>
                        </li>
                        <li class="fs-14">
                            <a href="#" class="d-flex align-items-center text-white" target="_blank">
                                <i class="bi bi-linkedin me-3 text-white" style="font-size: 1.3rem;"></i>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class=" ms-lg-0 col-lg-4 col-md-6">
                    <div class="footer-widget footer-link">
                        <h5 class="text-white one pb-2" style="width: max-content;">Navigation</h5>
                        <ul class="list-unstyled">
                            <li class="mt-3 "><a class="text-white" href="#">Accueil</a></li>
                            <li class="mt-2"><a class="text-white" href="presentation.html">Présentation</a></li>
                            <li class="mt-2"><a class="text-white" href="services.html">Nos Services</a></li>
                            <li class="mt-2"><a class="text-white" href="blog.html">Blog</a></li>
                            <li class="mt-2"><a class="text-white" href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="ms-lg-0 col-lg-4 col-md-6">
                    <div class="footer-widget footer-text">
                        <h5 class="text-white one pb-2" style="width: max-content;">Contactez nous</h5>
                        <div class="mt-4 mb-4">
                            <div class="d-flex">
                                <i class="bi bi-envelope me-2 text-tertiary"></i>
                                <p class="my-0 text-white">contact@orcloud.dz</p>
                            </div>
                            <div class="d-flex mt-2">
                                <i class="bi bi-telephone me-2 text-tertiary"></i>
                                <p class="my-0 text-white">0793 739 573</p>
                            </div>
                            <div class="d-flex mt-2">
                                <i class="bi bi-telephone me-2 text-tertiary"></i>
                                <p class="my-0 text-white">0670 011 716</p>
                            </div>
                            <div class="d-flex mt-2">
                                <i class="bi bi-geo-alt me-2 text-tertiary"></i>
                                <p class="my-0 text-white">Ain Naadja,16065 Le Gué de Constantine</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="py-2">
            <p class="text-center text-white">&copy; 2022 Orcloud</p>
        </div>
    </footer>
    <a href="#" class="cd-top cd-top-def" id="backTop"></a>

    <script src="assets/js/app.bundle.js"></script>


    <script>
        $(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= 5) {
                    $(".header-anim").addClass('stick-100');
                } else {
                    $(".header-anim").removeClass("stick-100");
                }
            });
        });
    </script>
</body>

</html>