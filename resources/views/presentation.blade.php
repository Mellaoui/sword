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
                <h2 style="color: #fff;">Présentation</h2>
                <ol class="breadcrumb" style="background: unset;">
                    <li class=""><a class="text-white" href="/">Accueil</a></li>
                    <span class="mx-2 text-white">/</span>
                    <li class="" style="color: #fff;" aria-current="page">Présentation</li>
                </ol>
            </div>
        </nav>
    </section>
    <div>
        <section class="pt-5 pb-pres px-3 px-sm-5 d-flex justify-content-between" id="presentation">
            <div class=" px-3 px-sm-5 position-relative d-flex flex-lg-row flex-column col-12">
                <div id="trigger-left"></div>

                <div class="col-lg-6 me-lg-5 mb-5 mb-lg-0 position-relative d-flex justify-content-center " id="translate-left">
                    <img class="img-pres h-100 me-auto mt-lg-0 mt-3 b-15" src="{{ asset('images/slide1.jpg') }}" alt="" loading="lazy" style="object-fit: cover;border-top: 5px solid #21759B;border-left: 5px solid #21759B;">
                </div>

                <div style="margin: 0 auto;">
                    <div class="d-flex flex-column mt-3 mt-lg-0">
                        <h5 class="text-primary d-flex align-items-center text-capitalize pb-2 mb-0 fw-600">
                            <div class="rounded-circle bg-primary" style="width: 10px;height: 10px;"></div>
                            <div class="bg-primary me-2" style="width: 50px;height: 2px;"></div>
                            Présentation
                        </h5>
                        <h2 class="mt-3 fs-1 fw-bold">{{$presentation->title}}</h2>
                        <p class="mt-4 mb-0 clr-555">
                            {{$presentation->title}}<br>
                            {{ $presentation->description }}
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-5 container-lg">
            <div class="w-100 mb-md-5 mb-3 d-flex flex-column align-items-center">
                <h2 class="text-center fs-1 fw-600">Pourquoi nous choisir</h2>
                <div class="bg-primary" style="height: 5px;width: 60px;"></div>
            </div>
            <div class="d-flex flex-lg-row flex-column">
                <div class="col-lg-6 d-flex flex-lg-row flex-column pe-lg-5">
                    <img src="{{ asset('images/slide1.jpg') }}" class="b-15 col-12 obj-cover img-pres3" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-0 ps-0 fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="d-flex justify-content-center bg-tertiary rounded align-items-center me-3" style="width: 40px;height: 40px;">
                                        <i class="bi bi-play text-white" style="font-size: 1.5em;"></i>
                                    </div>
                                    Point #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="border-left: 1px dashed #ccc;border-bottom: 1px dashed #ccc;">
                                <div class="accordion-body pt-0">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat nostrum assumenda esse ducimus obcaecati eos eum, architecto, laudantium voluptate, accusantium natus. Quasi, consectetur minima nulla deserunt culpa ipsam suscipit quia.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button border-0 ps-0 fw-600 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="d-flex justify-content-center bg-tertiary rounded align-items-center me-3" style="width: 40px;height: 40px;">
                                        <i class="bi bi-play text-white" style="font-size: 1.5em;"></i>
                                    </div>
                                    Point #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="border-left: 1px dashed #ccc;border-bottom: 1px dashed #ccc;">
                                <div class="accordion-body pt-0">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button border-0 ps-0 fw-600 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="d-flex justify-content-center bg-tertiary rounded align-items-center me-3" style="width: 40px;height: 40px;">
                                        <i class="bi bi-play text-white" style="font-size: 1.5em;"></i>
                                    </div>
                                    Point #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="border-left: 1px dashed #ccc;border-bottom: 1px dashed #ccc;">
                                <div class="accordion-body pt-0">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

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