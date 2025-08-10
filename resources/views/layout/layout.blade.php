<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include('layout.head')

<body class="bg-light">


    <!-- Page wrapper -->
    <main class="page-wrapper">

        <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page -->
        <header class="navbar navbar-expand-lg fixed-top bg-white">

            <div class="container">

                <!-- Navbar brand (Logo) -->
                <a class="navbar-brand pe-sm-3" href="{{ route('home') }}">
                    <img src="{{ asset('logo-moyo.png') }}" style="height:70px;width:100px;" alt="">
                </a>

                <!-- Theme switcher -->
                <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
                    <input class="form-check-input" type="checkbox" id="theme-mode">
                    <label class="form-check-label" for="theme-mode">
                        <i class="ai-sun fs-lg"></i>
                    </label>
                    <label class="form-check-label" for="theme-mode">
                        <i class="ai-moon fs-lg"></i>
                    </label>
                </div>

                @guest
                    <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex"
                        href="{{ route('register.moyo') }}">
                        <i class="ai-user-plus fs-xl me-2 ms-n1"></i>
                        Rejoindre
                    </a>
                @else
                    <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex"
                        href="{{ route('dashboard') }}">
                        <i class="ai-home fs-xl me-2 ms-n1"></i>
                        Tableau de bord
                    </a>
                @endguest

                <!-- Mobile menu toggler (Hamburger) -->
                <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar collapse (Main navigation) -->
                <nav class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                                href="{{ route('home') }}">
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('pricing') ? 'active' : '' }}"
                                href="{{ route('pricing') }}">
                                Abonnement
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact.page') ? 'active' : '' }}"
                                href="{{ route('contact.page') }}">
                                Contact
                            </a>
                        </li>

                    </ul>
                </nav>

            </div>

        </header>


        @yield('content')

    </main>

    <!-- Footer -->
    <footer class="footer py-5">
        <div class="container pt-md-2 pt-lg-3 pt-xl-4">
            <div class="row pb-4 pb-md-5 pt-sm-2 mb-lg-2 text-center text-md-start">

                <div class="col-md-4 col-lg-3 pb-2 pb-md-0 mb-4 mb-md-0 mx-auto">
                    <a class="navbar-brand text-nav py-0 mb-3 mb-md-4 d-block" href="{{ URL::signedRoute('home') }}">
                        <img src="{{ asset('logo-moyo.png') }}" style="height:120px;" alt="">
                    </a>
                    <p class="fs-sm pb-2 pb-md-3 mb-3">L'éducation financière de vos enfants devient simple</p>
                    <div class="d-flex justify-content-center justify-content-md-start gap-3">
                        <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle"
                            href="https://www.facebook.com/share/1XA7hsYVpJ/" target="_blank" aria-label="Facebook">
                            <i class="ai-facebook"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-dark btn-tiktok rounded-circle"
                            href="https://www.tiktok.com/@moyo.ci" target="_blank" aria-label="TikTok">
                            <i class="ai-tiktok"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-success btn-whatsapp rounded-circle"
                            href="https://wa.me/33758946962?text=Bonjour%2C%20je%20souhaite%20avoir%20plus%20d'informations%20sur%20les%20formules%20de%20MOYO."
                            target="_blank" aria-label="WhatsApp">
                            <i class="ai-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                    <div class="row row-cols-1 row-cols-sm-3 justify-content-center">

                        <!-- Colonne 1 -->
                        <div class="col mb-3 mb-md-0 text-center text-md-start">
                            <ul class="nav flex-column">
                                <li><a class="nav-link fw-normal py-1 px-0"
                                        href="https://wa.me/33758946962?text=Bonjour%2C%20je%20souhaite%20avoir%20plus%20d'informations%20sur%20les%20formules%20de%20MOYO.">Devenir
                                        promoteur</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="/emploi">Offre d'emploi</a></li>
                                <li>
                                    <a class="nav-link fw-normal py-1 px-0"
                                        href="mailto:contact@moyo-ci.com?subject=Demande%20d'information&body=Bonjour,%20je%20voudrais%20plus%20d'informations...">
                                        contact@moyo-ci.com
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Colonne 2 -->
                        <div class="col mb-4 mb-md-0 text-center text-md-start">
                            <ul class="nav flex-column">
                                <li><a class="nav-link fw-normal py-1 px-0" href="{{ route('faq') }}">Faq</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0"
                                        href="{{ route('condition.utilisation') }}">Conditions générales</a>
                                </li>
                                <li><a class="nav-link fw-normal py-1 px-0"
                                        href="{{ route('terme.conditon') }}">Termes et condition</a></li>
                            </ul>
                        </div>
                        <!-- Colonne 3 -->
                        <div class="col text-center text-md-start">
                            <a class="btn btn-secondary px-3 py-2 mb-3" href="#">
                                <img src="{{ asset('Moyo-carte_old2.png') }}" width="120" alt="Orange Bank logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <p class="nav fs-sm mb-0 justify-content-center">
                <span class="text-body-secondary">&copy; Tous droits réservés</span>
                <a class="nav-link d-inline fw-normal p-0 ms-1" href="#" target="_blank" rel="noopener">Moyo
                    Edu Finance SARL</a>
            </p>
        </div>
    </footer>


    <a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
        <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5"
                stroke-miterlimit="10"></circle>
        </svg>
        <i class="ai-arrow-up"></i>
    </a>
    @include('layout.script')
    @stack('script')
</body>

</html>
