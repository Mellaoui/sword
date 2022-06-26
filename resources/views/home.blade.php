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
        <div class="py-1 mx-xl-4 w-100 d-flex">
            <div class="gap-4 d-lg-flex d-none">
                <div class="d-flex align-items-center">
                    <i class="text-white bi bi-geo-alt me-2"></i>
                    <a target="_blank" href="https://www.google.com/maps/place/ORCLOUD/@36.7087827,3.0826035,17z/data=!3m1!4b1!4m5!3m4!1s0x128fadae211261fd:0x75db15dec911d09d!8m2!3d36.7087827!4d3.0847922" class="text-top">
                        Ain Naadja,16065 Le Gué de Constantine
                    </a>
                </div>
                <div class="d-flex align-items-center">
                    <i class="text-white bi bi-telephone me-2"></i>
                    <a href="tel:0793 739 573" class="text-top">
                        0793 739 573
                    </a>
                </div>
                <div class="d-flex align-items-center">
                    <i class="text-white bi bi-envelope me-2"></i>
                    <a href="mailto:contact@orcloud.dz" class="text-top">
                        contact@orcloud.dz
                    </a>
                </div>
            </div>
            <div class="social-wrapper d-flex mt-n2 ms-auto">
                <div class="mt-2 social-icons col-3 d-flex">
                    <a href="#"><i class="text-white fab fa-facebook-f" style="border-radius: 30px;padding: 8px 10px;"></i></a>
                    <a href="#"><i class="text-white fab fa-twitter" style="border-radius: 30px;padding: 8px;"></i></a>
                    <a href="#"><i class="text-white fab fa-instagram" style="border-radius: 30px;padding: 8px 10px;"></i></a>
                    <a href="#"><i class="text-white fab fa-linkedin-in" style="border-radius: 30px;padding: 8px 10px;"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <header class="header-anim w-100 col-11 d-flex flex-column align-items-center position-sticky sticky-top" style="z-index: 1007;">
        <nav class="navbar navbar-expand-xl col-11 position-relative navbar-light " style="padding-bottom: .25rem !important;">
            <a class="d-flex navbar-brand me-auto me-lg-2 mt-n1 me-xl-5 pe-4 logo-c-top position-relative" href="/" style="margin-bottom: -20px;">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="pb-3 img-fluid logo-top" style="object-fit: contain;max-width: 240px;">
            </a>
            <button class="order-3 navbar-toggler ms-2 me-3 d-block d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation" style="z-index: 99;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="order-2 cart-container order-xl-3 d-flex align-items-center ms-auto mt-lg-n1">
                <div class="d-flex me-3">
                    <a href="inscription.html" class="d-flex align-items-center me-3">
                        <i class="bi bi-box-arrow-down d-lg-none" style="font-size: 1.5rem;"></i>
                        <p class="my-0 fs-6 d-lg-block d-none">Inscription</p>
                    </a>
                    <a href="/login" class="d-flex align-items-center">
                        <i class="bi bi-box-arrow-right d-lg-none" style="font-size: 1.5rem;"></i>
                        <p class="my-0 fs-6 d-lg-block d-none">Connection</p>
                    </a>
                </div>
                <div class="order-1 account dropdown me-3 order-xl-0">
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
                    <div class="mt-3 border-0 rounded shadow dropdown-menu trans5" aria-labelledby="dropdownSearch" style="width: 80vw;">
                        <form class="mx-auto form-inline menu-search">
                            <div class="p-3 input-group position-relative">
                                <input class="form-control search-form d-block" type="search" placeholder="Chercher" aria-label="Chercher" style="max-width: unset; ">
                                <button onclick="location.href = '/recherche.html';" class="border-0 d-block btn position-absolute r18" style="top: 27%;border-radius: 50%;z-index: 9;" type="button">
                                    <i class="bi bi-search search-drop"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="order-last cart rounded-circle" style="margin-top: -5px;height: 36px;">
                    <select name="lang" id="" class="order-last h-auto border-0 form-select form-control w-max ms-auto" style="cursor: pointer;">
                        <option value="001">Fr</option>
                        <option value="002"><a href="/ar">Ar</a></option>
                        <option value="003">An</option>
                    </select>
                </div>
            </div>
            <div class="order-last collapse navbar-collapse order-xl-1 mt-lg-n1" id="mainNav">
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
                                        <div class="rounded d-flex justify-content-center bg-tertiary align-items-center me-2" style="width: 25px;height: 25px;">
                                            <i class="text-white bi bi-play" style="font-size: 1.2em;color: white !important;"></i>
                                        </div>
                                        Assistance et Conseil
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center fs-15" href="details-services.html">
                                        <div class="rounded d-flex justify-content-center bg-tertiary align-items-center me-2" style="width: 25px;height: 25px;">
                                            <i class="text-white bi bi-play" style="font-size: 1.2em;color: white !important;"></i>
                                        </div>
                                        Conciergerie & Assistance aux Personnes
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center fs-15" href="details-services.html">
                                        <div class="rounded d-flex justify-content-center bg-tertiary align-items-center me-2" style="width: 25px;height: 25px;">
                                            <i class="text-white bi bi-play" style="font-size: 1.2em;color: white !important;"></i>
                                        </div>
                                        Aménagement et Construction
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center fs-15" href="details-services.html">
                                        <div class="rounded d-flex justify-content-center bg-tertiary align-items-center me-2" style="width: 25px;height: 25px;">
                                            <i class="text-white bi bi-play" style="font-size: 1.2em;color: white !important;"></i>
                                        </div>
                                        Entretien et Maintenance
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center fs-15" href="details-services.html">
                                        <div class="rounded d-flex justify-content-center bg-tertiary align-items-center me-2" style="width: 25px;height: 25px;">
                                            <i class="text-white bi bi-play" style="font-size: 1.2em;color: white !important;"></i>
                                        </div>
                                        Facility Management
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center fs-15" href="location.html">
                                        <div class="rounded d-flex justify-content-center bg-tertiary align-items-center me-2" style="width: 25px;height: 25px;">
                                            <i class="text-white bi bi-play" style="font-size: 1.2em;color: white !important;"></i>
                                        </div>
                                        Location de Véhicule
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center fs-15" href="transport.html">
                                        <div class="rounded d-flex justify-content-center bg-tertiary align-items-center me-2" style="width: 25px;height: 25px;">
                                            <i class="text-white bi bi-play" style="font-size: 1.2em;color: white !important;"></i>
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

    <div>
        <section class="mb-5 d-flex flex-column justify-content-end carousel-new" style="background: url('images/polina.jpg') no-repeat;background-size: cover;">
            <div class="px-3 d-flex flex-column position-relative justify-content-end" style="height: 150px;">
                <div class="swiper-container mySwiper h-max" style="margin-bottom: -87px;">
                    <div class="swiper-wrapper h-max">

                        <div class="swiper-slide h-max">
                            <a href="details-services.html" class="flex-row p-0 border-0 card card-body" style="height: 150px;">
                                <div class="nav-link services-card-hover position-relative h-100 w-100" style="background: url('images/conciergie\ de\ luxe.jpg') no-repeat center;background-size: cover;">
                                    <div class="w-100 h-100 services-overlay position-absolute"></div>
                                    <p class="mt-2 mb-0 text-center fw-bold" style="z-index: 4;">Conciergerie de luxe</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide h-max">
                            <a href="details-services.html" class="flex-row p-0 border-0 card card-body" style="height: 150px;">
                                <div class="nav-link services-card-hover position-relative h-100 w-100" style="background: url('images/Ressource\ Humaine.jpeg') no-repeat center;background-size: cover;">
                                    <div class="w-100 h-100 services-overlay position-absolute"></div>
                                    <p class="mt-2 mb-0 text-center fw-bold" style="z-index: 4;">Ressource Humaine</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide h-max">
                            <a href="details-services.html" class="flex-row p-0 border-0 card card-body" style="height: 150px;">
                                <div class="nav-link services-card-hover position-relative h-100 w-100" style="background: url('images/assistance\ securité.jpg') no-repeat center;background-size: cover;">
                                    <div class="w-100 h-100 services-overlay position-absolute"></div>
                                    <p class="mt-2 mb-0 text-center fw-bold" style="z-index: 4;">Sécurité</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide h-max">
                            <a href="details-services.html" class="flex-row p-0 border-0 card card-body" style="height: 150px;">
                                <div class="nav-link services-card-hover position-relative h-100 w-100" style="background: url('images/Entretien-Maintenance.png') no-repeat center;background-size: cover;">
                                    <div class="w-100 h-100 services-overlay position-absolute"></div>
                                    <p class="mt-2 mb-0 text-center fw-bold" style="z-index: 4;">Entretien Maintenance</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide h-max">
                            <a href="details-services.html" class="flex-row p-0 border-0 card card-body" style="height: 150px;">
                                <div class="nav-link services-card-hover position-relative h-100 w-100" style="background: url('images/Facility\ Management.jpg') no-repeat center;background-size: cover;">
                                    <div class="w-100 h-100 services-overlay position-absolute"></div>
                                    <p class="mt-2 mb-0 text-center fw-bold" style="z-index: 4;">Facility Management</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide h-max">
                            <a href="details-services.html" class="flex-row p-0 border-0 card card-body" style="height: 150px;">
                                <div class="nav-link services-card-hover position-relative h-100 w-100" style="background: url('images/Aménagement\ &\ Construction.jpeg') no-repeat center;background-size: cover;">
                                    <div class="w-100 h-100 services-overlay position-absolute"></div>
                                    <p class="mt-2 mb-0 text-center fw-bold" style="z-index: 4;">Aménagement et Construction</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide h-max">
                            <a href="details-services.html" class="flex-row p-0 border-0 card card-body" style="height: 150px;">
                                <div class="nav-link services-card-hover position-relative h-100 w-100" style="background: url('images/Transport\ VIP-Personnel.jpg') no-repeat center;background-size: cover;">
                                    <div class="w-100 h-100 services-overlay position-absolute"></div>
                                    <p class="mt-2 mb-0 text-center fw-bold" style="z-index: 4;">Transport VIP Personnel</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <div class="swiper-button-prev swiper-button-prev-home" style="left: 0;top: 100%;transform: scale(.75);"></div>
                </div>
                <div class="swiper-button-next swiper-button-next-home" style="right: 0;top: 100%;transform: scale(.75);"></div>
            </div>
        </section>
        <section class="px-3 pt-pres pb-pres px-sm-5 d-flex justify-content-between" id="presentation">
            @if (count($presentations) > 0)
                        
                        @foreach ( $presentations as $presentation)
            <div class="px-3 px-sm-5 position-relative d-flex flex-lg-row flex-column col-12">
                <div id="trigger-left"></div>

                <div class="mb-5 col-lg-6 me-lg-5 mb-lg-0 position-relative d-flex justify-content-center " id="translate-left">
                    <img class="mt-3 img-pres h-100 me-auto mt-lg-0 b-15" src="{{ $presentation->getFirstMedia('presentation-images')->getUrl() }}" alt="" loading="lazy" style="object-fit: cover;border-top: 5px solid #21759B;border-left: 5px solid #21759B;">
                </div>

                <div style="margin: 0 auto;">
                    <div class="mt-3 d-flex flex-column mt-lg-0">
                        <h5 class="pb-2 mb-0 text-primary d-flex align-items-center text-capitalize fw-600">
                            <div class="rounded-circle bg-primary" style="width: 10px;height: 10px;"></div>
                            <div class="bg-primary me-2" style="width: 50px;height: 2px;"></div>
                            Présentation
                        </h5>
                        <h2 class="mt-3 fs-1 fw-bold">{{ $presentation->title }}</h2>
                        <p class="mt-4 mb-0 clr-555">
                            {{ $presentation->title }}
                            <br> <br>
                        {{ $presentation->description }}
                        </p>
                        <a href="{{ route('presentation.show', $presentation->id) }}" class="px-4 py-2 mt-4 text-white btn btn-ms b-15 w-max position-relative">
                            Avoir plus de détails
                        </a>
                        
                        
                    </div>
                </div>
            </div>
            @endforeach
            @else    
            <div class="mb-5 col-lg-6 me-lg-5 mb-lg-0 position-relative d-flex justify-content-center " id="translate-left">
                <img class="mt-3 img-pres h-100 me-auto mt-lg-0 b-15" src="#" alt="" loading="lazy" style="object-fit: cover;border-top: 5px solid #21759B;border-left: 5px solid #21759B;">
            </div>
            <div style="margin: 0 auto;">
                <div class="mt-3 d-flex flex-column mt-lg-0">
                    <h5 class="pb-2 mb-0 text-primary d-flex align-items-center text-capitalize fw-600">
                        <div class="rounded-circle bg-primary" style="width: 10px;height: 10px;"></div>
                        <div class="bg-primary me-2" style="width: 50px;height: 2px;"></div>
                        Présentation
                    </h5>
                    
                    <h2 class="mt-3 fs-1 fw-bold">No Posts Yet</h2>
                   
                    <p class="mt-4 mb-0 clr-555">
                        no content yet
                    </p>
                    <a href="#" class="px-4 py-2 mt-4 text-white btn btn-ms b-15 w-max position-relative">
                        Avoir plus de détails
                    </a>
                    
                </div>
            @endif     
        </section>
        <section class="py-4 px-sm-2 px-lg-4" style="background: #f5f6f9;">
            <div class="d-flex flex-column align-items-center position-relative">
                <div class="mb-3 w-100 mb-sm-4 d-flex flex-column align-items-center">
                    <h2 class="text-center fs-1 fw-600">Nos Services</h2>
                    <div class="bg-primary" style="height: 5px;width: 60px;"></div>
                </div>
            </div>
            @if ( count($services) > 0 )
            <div class="position-relative">
                <div class="swiper-container mySwiper4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="py-4">
                                @foreach ($services as $service)
                                <div class="overflow-visible rounded card card-services position-relative" style="height: 380px;border-top: 3px solid #21759B;">
                                    <div class="w-100 h-max img-services">
                                        <img class="card-img-top obj-cover" src="{{ $service->getFirstMedia('service-images')->getUrl() }}" alt="" style="height: 200px;">
                                    </div>
                                    
                                    <div class="pt-0 border-0 card-body">
                                        <div class="p-1 mb-3 d-flex justify-content-center mt-n5 position-relative" style="z-index: 3;">
                                            <div class="p-2 w-max h-max rounded-circle bg-primary">
                                                <img class="" src="{{ asset('images/check.png ') }}" alt="" style="filter: brightness(0) invert(1);height: 50px;width: 50px;">
                                            </div>
                                        </div>
                                        
                                        <a href="details-services.html">
                                            <h4 class="text-center fw-600">{{ $service->title }}</h4>
                                        </a>
                                        <p class="text-center line-clamp2">{{ $service->content }}</p>
                                        <a href="details-services.html" class="px-4 py-2 b-15 btn-ms position-absolute" style="bottom: -20px;left: 50%;transform: translateX(-50%);">Voir service</a>
                    
                                    </div>
                                    
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev swiper-button-prev4" style="left: 5px;top: 51%;transform: scale(.85);"></div>
                <div class="swiper-button-next swiper-button-next4" style="right: 5px;top: 51%;transform: scale(.85);"></div>
            </div>
            @else
            <div class="swiper-slide">
                <div class="py-4">
                    <div class="overflow-visible rounded card card-services position-relative" style="height: 380px;border-top: 3px solid #21759B;">
                        <div class="w-100 h-max img-services">
                            <img class="card-img-top obj-cover" src="{{ asset('images/taxi.jpg') }}" alt="" style="height: 200px;">
                        </div>
                        <div class="pt-0 border-0 card-body">
                            <div class="p-1 mb-3 d-flex justify-content-center mt-n5 position-relative" style="z-index: 3;">
                                <div class="p-2 w-max h-max rounded-circle bg-primary">
                                    <img class="" src="{{ asset('images/check.png ') }}" style="filter: brightness(0) invert(1);height: 50px;width: 50px;">
                                </div>
                            </div>
                            <a href="transport.html">
                                <h4 class="text-center fw-600">No Service found</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            
        </section>
        <section class="px-3 pt-5 pb-pres px-sm-5 d-flex justify-content-between" id="presentation">
            <div class="px-3 px-sm-5 position-relative d-flex flex-lg-row flex-column col-12">
                <div id="trigger-left"></div>

                <div style="margin: 0 auto;">
                    <div class="mt-3 d-flex flex-column mt-lg-0">
                        <h2 class="mt-3 fs-1 fw-bold">Pourquoi nous Choisir</h2>
                        <p class="mt-4 mb-0 clr-555">
                            Nous rassemblons toutes les activités de soutien qui contribuent au bon fonctionnement de l’entreprise,
                            à savoir, la gestion des :
                        </p>
                        @if (count($reasons) > 0)
                            @foreach ($reasons as $reason )
                            <div class="mt-2 d-flex align-items-center">
                                <img class="me-2" src="{{ asset('images/check.png ') }}" alt="" style="width: 30px;height: 30px;object-fit: contain;filter: invert(57%) sepia(62%) saturate(2430%) hue-rotate(2deg) brightness(99%) contrast(103%);">
                                <p class="my-0 clr-555">{{ $reason->reasons }}</p>
                            </div>
                            @endforeach 
                        @else
                        <div class="mt-2 d-flex align-items-center">
                            <img class="me-2" src="{{ asset('images/check.png ') }}" alt="" style="width: 30px;height: 30px;object-fit: contain;filter: invert(57%) sepia(62%) saturate(2430%) hue-rotate(2deg) brightness(99%) contrast(103%);">
                            <p class="my-0 clr-555">No reasons yet</p>
                        </div>
                        @endif
                        @if (count($presentations) > 0)
                            <a href="{{ route('presentation.show', $presentation->id) }}" class="px-4 py-2 mt-4 text-white btn btn-ms b-15 w-max position-relative">
                                Avoir plus de détails
                            </a>
                        @endif
                    </div>
                </div>

                <div class="mb-5 col-lg-6 ms-lg-5 mb-lg-0 position-relative d-flex justify-content-center " id="translate-left">
                    <img class="mt-3 img-pres h-100 ms-auto mt-lg-0 b-15" src="{{ asset('images/slide1.jpg ') }}" alt="" loading="lazy" style="object-fit: cover;border-bottom: 5px solid #0c4c8a;border-right: 5px solid #0c4c8a;">
                </div>
            </div>
        </section>
        <section class="px-5 py-4 position-relative" style="background: #f5f6f9;">
            <div class="mb-3 w-100 d-flex flex-column align-items-center">
                <h2 class="text-center fs-1 fw-600">Nos Partenaires</h2>
                <div class="bg-primary" style="height: 5px;width: 60px;"></div>
            </div>
            <div class="swiper-container mySwiper2">
                
                <div class="swiper-wrapper">
                    @foreach ($partenaires as $partenaire )
                    <a href="#" class="swiper-slide">
                        <div class="p-3">
                            <div class="px-5 py-3 overflow-hidden client-anim position-relative">
                                <img class="client-img1" src="{{  $partenaire->getFirstMedia('partenaire-images')->getUrl() }}" alt="" style="object-fit:contain;width: 100px;height: 100px;">
                                <img class="client-img2" src="{{  $partenaire->getFirstMedia('partenaire-images')->getUrl() }}" alt="" style="object-fit:contain;width: 100px;height: 100px;">
                            </div>
                        </div>
                    </a>
                    @endforeach
                   
                </div>
                
                
            </div>
            <div class="swiper-button-prev swiper-button-prev2" style="left: 35px;top: 65%;transform: scale(.85);"></div>
            <div class="swiper-button-next swiper-button-next2" style="right: 35px;top: 65%;transform: scale(.85);"></div>
        </section>

        <section class="py-4 px-sm-2 px-lg-4" style="background: url('./assets/images/bg-class-home3b.png') no-repeat bottom;">
            <div class="d-flex flex-column align-items-center position-relative">
                <div class="mb-3 w-100 mb-sm-4 d-flex flex-column align-items-center">
                    <h2 class="text-center fs-1 fw-600">Nos Actualités</h2>
                    <div class="bg-primary" style="height: 5px;width: 60px;"></div>
                </div>
            </div>

            <div class="position-relative">
                <div class="swiper-container mySwiper3">
                    <div class="swiper-wrapper">
                       
                       
                      
                        @if (count($posts) > 0)
                             @foreach ($posts as $post)
                        <div class="swiper-slide">
                            <div class="py-4">
                                <a href="details-blog.html" class="overflow-visible border-0 card card-blog position-relative b-15" style="background: url('{{ $post->getFirstMedia('blog-images')->getUrl() }}') no-repeat center;background-size: cover;">
                                    <div class="overlay-slide w-100 h-100 b-15"></div>
                                    <div class="pt-0 border-0 card-body position-absolute w-100 h-100" style="top: 0;left: 0;z-index: 5;">
                                        <div class="mt-4 ms-3">
                                            <p class="my-0 text-white w-max">Catégories</p>
                                        </div>
                                        <div class="top-0 px-5 position-absolute w-100 h-100 d-flex flex-column justify-content-center align-content-center" style="left: 0;">
                                            <p class="text-center text-white fs-15">{{ $post->created_at }}</p>
                                            <h2 class="text-center text-white line-clamp2 fs-5 fw-600" style="line-height: 1.8rem">{{ $post->title }}</h2>
                                        </div>
                                        <div class="d-flex align-items-center position-absolute w-100 ps-4" style="left: 0;bottom: 1.5rem;">
                                            <img src="assets/images/slide1.jpg" class="rounded-circle obj-cover me-2" alt="" style="width: 50px;height: 50px;">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="swiper-slide">
                            <div class="py-4">
                                <a href="details-blog.html" class="overflow-visible border-0 card card-blog position-relative b-15" style="background: url('../assets/images/slide1.jpg') no-repeat center;background-size: cover;">
                                    <div class="overlay-slide w-100 h-100 b-15"></div>
                                    <div class="pt-0 border-0 card-body position-absolute w-100 h-100" style="top: 0;left: 0;z-index: 5;">
                                       <h3>No Posts yet</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="swiper-button-prev swiper-button-prev3" style="left: 5px;top: 51%;transform: scale(.85);"></div>
                <div class="swiper-button-next swiper-button-next3" style="right: 5px;top: 51%;transform: scale(.85);"></div>
            </div>
        </section>

    </div>

    <div class="px-3 py-5 bg-primary">
        <div class="d-flex flex-md-row flex-column align-items-center justify-content-center container-md">
            <h4 class="my-0 text-center text-white fw-600 ps-3 border-lt">Pour plus de Renseignement</h4>
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalContact" role="button" class="px-4 py-2 mt-3 bg-white ms-md-auto mt-md-0 b-15 text-primary">Contactez-nous</a>
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
                            <div class="px-0 col-12 form-group">
                                <input name="nom" type="text" class="form-control" placeholder="Nom" required>
                            </div>
                            <div class="px-0 col-12 form-group">
                                <input name="prénom" type="text" class="form-control" placeholder="Prénom" required>
                            </div>
                            <div class="px-0 col-12 form-group">
                                <input name="telephone" type="tel" class="form-control" placeholder="Telephone" required>
                            </div>
                            <div class="px-0 col-12 form-group">
                                <input name="email" type="text" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="mt-4 col-12 d-flex justify-content-center">
                                <button type="submit" class="px-3 py-2 btn btn-ms mt-n4 b-15 font-weight-bold">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" class="section-padding position-relative" style="background: #1F2530;">
        <div class="container pt-5 pb-4 position-relative">
            <div class="pt-2 row footer-center">
                <div class="footer-map-container d-sm-block col-lg-4 col-md-6">
                    <a class="d-flex navbar-brand position-relative" href="/">
                        <img src="/assets/images/logo.png" alt="Logo" class="pb-3 img-fluid" style="object-fit: contain;max-width: 150px;filter: brightness(0) invert(1);">
                    </a>
                    <ul class="list-unstyled d-flex ps-2">
                        <li class="fs-14">
                            <a href="#" class="text-white d-flex align-items-center" target="_blank">
                                <i class="text-white bi bi-facebook me-3" style="font-size: 1.3rem;"></i>
                            </a>
                        </li>
                        <li class="fs-14">
                            <a href="#" class="text-white d-flex align-items-center" target="_blank">
                                <i class="text-white bi bi-twitter me-3" style="font-size: 1.3rem;"></i>
                            </a>
                        </li>
                        <li class="fs-14">
                            <a href="#" class="text-white d-flex align-items-center" target="_blank">
                                <i class="text-white bi bi-instagram me-3" style="font-size: 1.3rem;"></i>
                            </a>
                        </li>
                        <li class="fs-14">
                            <a href="#" class="text-white d-flex align-items-center" target="_blank">
                                <i class="text-white bi bi-linkedin me-3" style="font-size: 1.3rem;"></i>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class=" ms-lg-0 col-lg-4 col-md-6">
                    <div class="footer-widget footer-link">
                        <h5 class="pb-2 text-white one" style="width: max-content;">Navigation</h5>
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
                        <h5 class="pb-2 text-white one" style="width: max-content;">Contactez nous</h5>
                        <div class="mt-4 mb-4">
                            <div class="d-flex">
                                <i class="bi bi-envelope me-2 text-tertiary"></i>
                                <p class="my-0 text-white">contact@orcloud.dz</p>
                            </div>
                            <div class="mt-2 d-flex">
                                <i class="bi bi-telephone me-2 text-tertiary"></i>
                                <p class="my-0 text-white">0793 739 573</p>
                            </div>
                            <div class="mt-2 d-flex">
                                <i class="bi bi-telephone me-2 text-tertiary"></i>
                                <p class="my-0 text-white">0670 011 716</p>
                            </div>
                            <div class="mt-2 d-flex">
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

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const buttonRight = document.getElementById('slideRight');
        const buttonLeft = document.getElementById('slideLeft');

        buttonRight.onclick = function() {
            document.getElementById('scroll').scrollLeft += 232;
        };
        buttonLeft.onclick = function() {
            document.getElementById('scroll').scrollLeft -= 232;
        };
    </script>
    <script>
        var swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 3,
            autoplay: true,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next2",
                prevEl: ".swiper-button-prev2",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                600: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                917: {
                    slidesPerView: 4,
                    spaceBetween: 10
                },
                // when window width is >= 1250px
                1250: {
                    slidesPerView: 6,
                    spaceBetween: 10
                },
            }
        });
    </script>
    <script>
        var swiper1 = new Swiper(".mySwiper", {
            slidesPerView: 3,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next-home",
                prevEl: ".swiper-button-prev-home",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                520: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
                917: {
                    slidesPerView: 4,
                    spaceBetween: 10
                },
                1050: {
                    slidesPerView: 5,
                    spaceBetween: 10
                },
                1250: {
                    slidesPerView: 7,
                    spaceBetween: 10
                },
            }
        });
    </script>
    <script>
        var swiper4 = new Swiper(".mySwiper3", {
            slidesPerView: 3,
            autoplay: true,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next3",
                prevEl: ".swiper-button-prev3",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                800: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                // when window width is >= 1250px
                1150: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
            }
        });
    </script>
    <script>
        var swiper4 = new Swiper(".mySwiper4", {
            slidesPerView: 3,
            autoplay: true,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next4",
                prevEl: ".swiper-button-prev4",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                800: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                // when window width is >= 1250px
                1150: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
            }
        });
    </script>

    <script>
        $('.nav-item button').on('click', function(e) {
            e.preventDefault();
            $('.nav-link').removeClass('active');
            $(this).tab('show');
        });
    </script>
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