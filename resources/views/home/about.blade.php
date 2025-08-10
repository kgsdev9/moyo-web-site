@extends('layout.layout')
@section('title', 'À propos - Institut Roosevelt')
@section('content')
<main class="page-wrapper">

    <!-- Hero -->
    <section class="bg-secondary py-5">
        <div class="container text-center pt-5 mt-lg-4 mt-xl-5">
            <div class="position-relative mx-auto my-3" style="max-width: 850px;">
                <h1 class="display-3 position-relative z-2 mb-0" style="font-weight: 800;">
                    Moyo Éducation, la fintech qui révolutionne l’éducation
                </h1>
                <div class="text-success position-absolute top-0 start-50 translate-middle-x w-100 mt-md-3">
                    <svg width="608" height="66" viewBox="0 0 608 66" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path opacity=".35" d="M45.66 63.0651C48.1682 62.8708 50.692 62.5736 53.2046 62.482C55.5493 62.3949 57.8918 62.3033 60.232 62.2161C73.0671 61.7358 85.8977 61.1192 98.7394 60.9293C112.169 60.7304 125.603 60.402 139.035 60.3663C152.743 60.3328 166.446 60.2747 180.152 60.3417C206.867 60.4757 231.522 59.2366 258.233 59.3013C290.201 57.8797 306.797 56.9045 334.904 55.6546C348.07 55.5876 361.243 55.2681 374.408 55.0111C387.336 54.7632 399.538 53.6311 412.46 53.1396C415.299 53.0323 418.137 52.8201 420.972 52.6548C423.774 52.4894 426.583 52.3576 429.383 52.1432C436.572 51.5913 444.461 51.7091 451.639 51.0545C464.138 49.9061 476.595 48.378 489.11 47.4218C502.221 46.4209 515.361 45.8534 528.486 45.0379C534.408 44.6715 540.366 44.2135 546.249 43.4048C552.974 42.4865 559.639 41.3762 566.288 39.991C572.715 38.6505 579.137 37.2743 585.567 35.9584C588.655 35.3261 591.757 34.7497 594.873 34.2984C598.4 33.7868 601.894 33.2618 605.377 32.5044C607.052 32.138 607.381 29.8927 607.381 28.4494C607.388 27.6273 607.258 26.8297 606.995 26.0567C606.749 25.4065 606.232 24.3676 605.377 24.3967C599.094 24.6089 592.816 24.8234 586.535 25.1205C580.2 25.4177 573.853 25.6009 567.51 25.6903C555.192 25.8578 542.852 25.4311 530.548 24.9172C532.645 24.6335 534.742 24.3498 536.839 24.0638C544.371 23.0361 551.882 21.7448 559.453 21.0522C563.482 20.6813 567.524 20.373 571.541 19.8971C573.579 19.6581 575.599 19.381 577.614 18.9744C579.777 18.5365 581.91 17.9378 584.036 17.339C584.719 17.2653 585.234 16.9212 585.587 16.3158C586.213 15.4489 586.5 14.2872 586.608 13.1746C588.761 12.511 589.194 9.31622 589.194 7.39709C589.207 6.20853 589.022 5.05348 588.635 3.93417C588.261 2.94892 587.55 1.55034 586.297 1.53694C579.758 1.46321 573.23 1.01862 566.691 0.938188C565.93 0.931485 565.163 0.927017 564.397 0.927017C558.77 0.927017 553.155 1.17501 547.535 1.47885C535.016 2.1558 522.495 2.96679 509.989 3.87832C504.175 4.29834 498.369 4.79655 492.551 5.15178C485.435 5.58297 478.335 5.91139 471.212 6.19066C459.296 6.65536 447.361 6.83632 435.438 7.05527C421.763 7.3122 408.106 7.67189 394.447 8.31756C381.795 8.91631 369.155 9.7139 356.512 10.4757C343.816 11.2354 331.122 11.9905 318.427 12.7613C305.415 13.5499 292.394 14.1353 279.373 14.7206C272.783 15.02 266.185 15.1071 259.593 15.297C253.354 15.4758 247.107 15.5227 240.864 15.6143C228.574 15.7952 216.287 15.9069 203.998 16.0343C179.21 16.2867 154.428 16.6934 129.642 17.1067C116.025 17.3346 102.412 17.587 88.7943 17.8439C81.8486 17.9758 74.9007 18.2506 67.9594 18.4539C62.0236 18.6259 56.0901 19.0303 50.1565 19.3364C43.8406 19.6625 37.5247 20.0222 31.2089 20.3886C27.4542 20.6076 23.6952 20.8332 19.9362 21.0522C18.3053 21.1505 16.67 21.2443 15.0346 21.3426C13.5474 21.4297 12.0579 21.5415 10.5729 21.6554C9.51432 21.7358 8.47346 21.89 7.42818 22.0687C6.26798 22.2631 5.11442 22.7859 4.00063 23.1657C3.33545 23.7019 2.87138 24.381 2.61503 25.2099C2.24156 26.3002 2.05814 27.4217 2.0714 28.5768C2.05814 29.7341 2.24156 30.8556 2.61503 31.9459C2.81834 32.3569 3.02165 32.768 3.22496 33.1769C3.60506 33.8292 4.15974 34.1979 4.88901 34.2783C6.1818 34.6492 7.4547 35.0156 8.78063 35.2367C9.50548 35.1563 10.0602 34.7922 10.4381 34.142C10.5817 33.9432 10.7077 33.7309 10.8182 33.5075C11.5121 33.4896 12.2082 33.4919 12.9043 33.4919C13.5695 33.4919 14.2369 33.4874 14.9043 33.4718C16.407 33.4383 17.9053 33.4003 19.4058 33.3645C23.2709 33.2729 27.136 33.1791 31.0011 33.0875C35.1889 32.987 39.3766 32.911 43.5622 32.8373C43.129 32.8753 42.6981 32.9132 42.265 32.9467C32.3735 33.7242 22.4886 34.5062 12.606 35.3931C11.0038 35.5741 9.79056 36.3784 8.95301 37.806C7.71768 39.5129 7.04366 41.7135 6.70996 43.9231C4.97299 43.9075 3.2338 43.8873 1.49682 43.8739C0.28359 43.865 0.0449219 46.0031 0.0449219 46.8252C0.0449219 47.6608 0.28359 49.7564 1.50345 49.7698C3.1675 49.7855 4.83376 49.8145 6.49781 49.8369C6.64146 51.6934 7.01272 53.5098 7.62265 55.2882C8.06905 56.1908 8.51545 57.0934 8.96184 57.9937C9.79719 59.4213 15.9944 65.1786 17.5966 65.3596C26.9466 64.5218 36.3011 63.789 45.66 63.0651Z"></path>
                    </svg>
                </div>
            </div>
            <p class="fs-lg pb-3 mb-2 mb-sm-3 mb-lg-4 mx-auto" style="max-width: 640px;">
                la plateforme qui simplifie la vie scolaire en Côte d’Ivoire : paiements, suivi et accompagnement réunis en un seul endroit.
            </p>
            </p>
            <a class="btn btn-lg btn-primary" href="{{ URL::signedRoute('sondages.scolaire') }}">
                Rejoindre Moyo
            </a>
        </div>
        <div class="container-fluid overflow-hidden px-4 pt-3 pt-sm-4 pb-sm-2 pb-md-3 py-lg-4 py-xl-5 mt-4">
            <div class="parallax mx-auto"
                style="max-width: 1440px; transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <div class="parallax-layer" data-depth="0.1"
                    style="transform: translate3d(-0.9px, -0.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                </div>
            </div>
        </div>
    </section>



    <!-- Clients -->
    <section class="container pt-5 mt-xl-3 mt-xxl-4">
        <h2 class="h4 text-center pb-3 pb-md-4 mb-lg-4">
            Orange Banque nous accompagne pour une gestion simplifiée de vos paiements
        </h2>

        <div
            class="row row-cols-3 row-cols-sm-4 row-cols-lg-5 row-cols-xl-6 justify-content-center align-items-center g-4">
            <div class="col text-center">
                <a class="swap-image my-1 my-sm-2" href="#">
                    <img class="swap-to" src="{{ asset('orange-logo.png') }}" width="145" alt="Foster">
                    <div class="swap-from">
                        <img class="d-dark-mode-none" src="{{ asset('orange-logo.png') }}" width="145"
                            alt="Foster">
                        <img class="d-none d-dark-mode-block" src="{{ asset('orange-logo.png') }}" width="145"
                            alt="Foster">
                    </div>
                </a>
            </div>
        </div>
    </section>


    <section class="overflow-hidden py-5 my-md-2 my-xl-4 my-xxl-5">
        <div class="container py-2 py-sm-4 py-lg-5">
            <h2 class="h1 text-center pb-3 mb-3 mb-lg-4 mt-xxl-2" style="font-weight: 800;">Pourquoi choisir Moyo ?</h2>

            <!-- Étape 1 -->
            <div class="row align-items-center position-relative pb-5 mb-4">
                <div class="col-md-6 col-xl-5 offset-lg-1 order-md-2 mb-4 mb-md-0" data-aos="fade-left">
                    <div class="card-moyo">
                        <div class="card-moyo-inner">
                            <!-- Recto -->
                            <div class="card-moyo-front">
                                <img src="{{ asset('Moyo-carte.png') }}" alt="Carte MOYO recto" style="width:100%; height:100%; object-fit: cover;">
                            </div>

                            <!-- Verso -->
                            <div class="card-moyo-back">
                                <img src="{{ asset('Moyo-carte-verso.png') }}" alt="Carte MOYO verso" style="width:100%; height:100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4 offset-xl-1 order-md-1" data-aos="fade-right">
                    <div class="pe-md-4 pe-lg-0">
                        <span class="badge fs-sm bg-primary bg-opacity-10 text-primary mb-3">Étape 01</span>
                        <h3 class="h2 mb-3">Cotisez en toute simplicité pour la scolarité</h3>
                        <p class="mb-4">Avec Moyo, les parents peuvent cotiser chaque mois pour couvrir les frais de scolarité, sans stress. Tout est planifié à l’avance pour que la rentrée ne soit plus un fardeau.</p>
                        <a class="btn btn-outline-primary rounded-pill" href="{{route('sondages.scolaire')}}">Commencer à cotiser</a>
                    </div>
                </div>
            </div>

            <div class="d-none d-lg-flex justify-content-center" data-aos="fade-in" data-aos-duration="500" data-aos-offset="250">
                <svg class="d-block text-primary" width="339" height="365" viewBox="0 0 339 365" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left: -150px; margin-top: -140px; margin-bottom: -108px;">
                <path d="M324 291.371C120.111 291.37 240.756 58.7225 1.00032 73.2606" stroke="url(#arrow1)" stroke-width="2" stroke-linecap="round" stroke-dasharray="6 6"></path>
                <path d="M337.375 290.62C338.074 290.998 338.074 292.001 337.375 292.379L328.476 297.196C327.81 297.557 327 297.074 327 296.317L327 286.683C327 285.925 327.81 285.443 328.476 285.803L337.375 290.62Z" fill="currentColor"></path>
                <defs>
                    <linearGradient id="arrow1" x1="324" y1="291.5" x2="-2.99974" y2="72.4997" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="currentColor"></stop>
                    <stop offset="1" stop-color="currentColor" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
                </svg>
            </div>

            <!-- Étape 2 -->
            <div class="row align-items-center position-relative pb-5 mb-4">
                <div class="col-md-6 col-xl-5 offset-xl-1 mb-4 mb-md-0" data-aos="fade-right">
                    <div class="card-moyo">
                        <div class="card-moyo-inner">
                            <!-- Recto -->
                            <div class="card-moyo-front">
                                <img src="{{ asset('Moyo-carte-verso.png') }}" alt="Carte MOYO recto" style="width:100%; height:100%; object-fit: cover;">
                            </div>

                            <!-- Verso -->
                            <div class="card-moyo-back">
                                <img src="{{ asset('Moyo-carte.png') }}" alt="Carte MOYO verso" style="width:100%; height:100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1" data-aos="fade-left">
                    <div class="ps-md-4 ps-lg-0">
                        <span class="badge fs-sm bg-primary bg-opacity-10 text-primary mb-3">Étape 02</span>
                        <h3 class="h2 mb-3">Profitez d'achats groupés de fournitures scolaires</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex pt-1 mt-2">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                Fournitures de qualité à prix négociés
                            </li>
                            <li class="d-flex pt-1 mt-2">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                Kits livrés à domicile avant la rentrée
                            </li>
                            <li class="d-flex pt-1 mt-2">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                Possibilité de paiement échelonné
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="d-none d-lg-flex justify-content-center" data-aos="fade-in" data-aos-duration="500" data-aos-offset="250">
                <svg class="d-block text-primary" width="263" height="275" viewBox="0 0 263 275" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: -60px; margin-left: -120px; margin-bottom: -80px;">
                <path d="M8.13678 249.647C7.47108 250.081 6.59001 249.602 6.59106 248.808L6.60444 238.689C6.60544 237.931 7.4158 237.45 8.08162 237.811L16.5478 242.408C17.2136 242.77 17.2512 243.712 16.6163 244.125L8.13678 249.647Z" fill="currentColor"></path>
                <path d="M261.961 37.8891C216.908 65.6243 128.226 135.486 133.916 193.05C141.029 265.005 265.134 173.468 173.666 148.634C89.2542 125.715 30.9125 210.547 13.9796 236.702" stroke="url(#arrow2)" stroke-width="2" stroke-linecap="round" stroke-dasharray="6 6"></path>
                <defs>
                    <linearGradient id="arrow2" x1="13.9797" y1="234.5" x2="276.704" y2="60.1939" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="currentColor"></stop>
                    <stop offset="1" stop-color="currentColor" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
                </svg>
            </div>


            <!-- Étape 3 -->
            <div class="row align-items-center position-relative">
                <div class="col-md-6 col-xl-5 offset-lg-1 order-md-2 d-md-flex justify-content-end mb-4 mb-md-0" data-aos="fade-left">
                    <img src="{{ asset('banner.png') }}" width="473" alt="Image">
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4 offset-xl-1 order-md-1" data-aos="fade-right">
                    <div class="pe-md-4 pe-lg-0">
                        <span class="badge fs-sm bg-primary bg-opacity-10 text-primary mb-3">Étape 03</span>
                        <h3 class="h2 mb-3">Bénéficiez d’un accompagnement éducatif</h3>
                        <p class="mb-4">Suivi personnalisé des enfants, conseils pédagogiques pour les parents, plateforme intuitive : Moyo vous aide à construire un vrai cadre de réussite scolaire, même à distance.</p>
                        <a class="btn btn-outline-primary rounded-pill" href="{{route('sondages.scolaire')}}">Créer un compte</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container pt-5 mt-md-3 mt-lg-2 mt-xl-4 mt-xxl-5">
        <h2 class="h1 text-center pt-3 pt-sm-4 pt-lg-5 pb-3 mb-3 mb-lg-4" style="font-weight: 800;">Nos Avantages</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

          <!-- Item -->
          <div class="col">
            <div class="card card-flip">
              <div class="card-flip-inner">
                <div class="card-flip-front bg-secondary rounded-5 py-2 py-lg-4 px-0">
                  <div class="card-body text-center">
                    <svg class="d-block text-primary mb-4 mx-auto" width="40" height="40" viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.805 15.6567L34.6717 15.2583C34.4133 14.4633 34.095 13.6967 33.7233 12.9683L35.6583 10.4767C36.4417 9.46833 36.35 8.045 35.455 7.17833L32.83 4.55333C31.955 3.65 30.5317 3.56 29.5217 4.34167L27.0333 6.27667C26.305 5.905 25.5383 5.58667 24.7417 5.32833L24.3433 2.2C24.1933 0.945 23.1283 0 21.8667 0H18.1333C16.8717 0 15.8067 0.945 15.6567 2.195L15.2583 5.32833C14.4617 5.58667 13.695 5.90333 12.9667 6.27667L10.4767 4.34167C9.47 3.56 8.04667 3.65 7.17833 4.545L4.55333 7.16833C3.65 8.045 3.55833 9.46833 4.34167 10.4783L6.27667 12.9683C5.90333 13.6967 5.58667 14.4633 5.32833 15.2583L2.2 15.6567C0.945 15.8067 0 16.8717 0 18.1333V21.8667C0 23.1283 0.945 24.1933 2.195 24.3433L5.32833 24.7417C5.58667 25.5367 5.905 26.3033 6.27667 27.0317L4.34167 29.5233C3.55833 30.5317 3.65 31.955 4.545 32.8217L7.17 35.4467C8.04667 36.3483 9.46833 36.4383 10.4783 35.6567L12.9683 33.7217C13.6967 34.095 14.4633 34.4133 15.2583 34.67L15.6567 37.7967C15.8067 39.055 16.8717 40 18.1333 40H21.8667C23.1283 40 24.1933 39.055 24.3433 37.805L24.7417 34.6717C25.5367 34.4133 26.3033 34.095 27.0317 33.7233L29.5233 35.6583C30.5317 36.4417 31.955 36.35 32.8217 35.455L35.4467 32.83C36.35 31.9533 36.4417 30.5317 35.6583 29.5217L33.7233 27.0317C34.0967 26.3033 34.415 25.5367 34.6717 24.7417L37.7983 24.3433C39.0533 24.1933 39.9983 23.1283 39.9983 21.8667V18.1333C40 16.8717 39.055 15.8067 37.805 15.6567ZM20 28.3333C15.405 28.3333 11.6667 24.595 11.6667 20C11.6667 15.405 15.405 11.6667 20 11.6667C24.595 11.6667 28.3333 15.405 28.3333 20C28.3333 24.595 24.595 28.3333 20 28.3333Z"></path>
                    </svg>
                    <h3>Support</h3>
                    <p class="card-text">Les utilisateurs et partenaires peuvent compter sur une assistance technique 24h/24 et 7j/7, ainsi que sur l'aide du département d'analyse technique et des équipes d'experts spécialisés.</p>
                  </div>
                </div>
                <div class="card-flip-back bg-primary rounded-5 py-2 py-lg-4 px-0">
                  <div class="card-body text-center">
                    <svg class="d-block text-white mt-2 mt-lg-n4 mb-4 mx-auto" width="32" height="32" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M30.244 12.5253L27.7373 12.2067C27.5307 11.5707 27.276 10.9573 26.9787 10.3747L28.5267 8.38133C29.1533 7.57467 29.08 6.436 28.364 5.74267L26.264 3.64267C25.564 2.92 24.4253 2.848 23.6173 3.47333L21.6267 5.02133C21.044 4.724 20.4307 4.46933 19.7933 4.26267L19.4747 1.76C19.3547 0.756 18.5027 0 17.4933 0H14.5067C13.4973 0 12.6453 0.756 12.5253 1.756L12.2067 4.26267C11.5693 4.46933 10.956 4.72267 10.3733 5.02133L8.38133 3.47333C7.576 2.848 6.43733 2.92 5.74267 3.636L3.64267 5.73467C2.92 6.436 2.84667 7.57467 3.47333 8.38267L5.02133 10.3747C4.72267 10.9573 4.46933 11.5707 4.26267 12.2067L1.76 12.5253C0.756 12.6453 0 13.4973 0 14.5067V17.4933C0 18.5027 0.756 19.3547 1.756 19.4747L4.26267 19.7933C4.46933 20.4293 4.724 21.0427 5.02133 21.6253L3.47333 23.6187C2.84667 24.4253 2.92 25.564 3.636 26.2573L5.736 28.3573C6.43733 29.0787 7.57467 29.1507 8.38267 28.5253L10.3747 26.9773C10.9573 27.276 11.5707 27.5307 12.2067 27.736L12.5253 30.2373C12.6453 31.244 13.4973 32 14.5067 32H17.4933C18.5027 32 19.3547 31.244 19.4747 30.244L19.7933 27.7373C20.4293 27.5307 21.0427 27.276 21.6253 26.9787L23.6187 28.5267C24.4253 29.1533 25.564 29.08 26.2573 28.364L28.3573 26.264C29.08 25.5627 29.1533 24.4253 28.5267 23.6173L26.9787 21.6253C27.2773 21.0427 27.532 20.4293 27.7373 19.7933L30.2387 19.4747C31.2427 19.3547 31.9987 18.5027 31.9987 17.4933V14.5067C32 13.4973 31.244 12.6453 30.244 12.5253ZM16 22.6667C12.324 22.6667 9.33333 19.676 9.33333 16C9.33333 12.324 12.324 9.33333 16 9.33333C19.676 9.33333 22.6667 12.324 22.6667 16C22.6667 19.676 19.676 22.6667 16 22.6667Z"></path>
                    </svg>
                    <div class="h3 display-4 text-white pb-1 mb-2">24/7</div>
                    <p class="card-text text-white opacity-70">Les utilisateurs et partenaires peuvent compter sur une assistance technique 24h/24 et 7j/7, ainsi que sur l'aide du département d'analyse technique et des équipes d'experts spécialisés.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-flip">
              <div class="card-flip-inner">
                <div class="card-flip-front bg-secondary rounded-5 py-2 py-lg-4 px-0">
                  <div class="card-body text-center">
                    <svg class="d-block text-danger mb-4 mx-auto" width="40" height="40" viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.0833 13.3335H2.91669C1.31669 13.3335 0 14.6502 0 16.2502V37.0835C0 38.6835 1.31669 40.0002 2.91669 40.0002H37.0834C38.6834 40.0002 40.0001 38.6835 40.0001 37.0835V16.2502C40 14.6502 38.6833 13.3335 37.0833 13.3335ZM35 21.2502V32.0835C35 33.6835 33.7 35.0002 32.0833 35.0002H22.9167C21.3 35.0002 20 33.6835 20 32.0835V21.2502C20 19.6502 21.3 18.3335 22.9167 18.3335H32.0834C33.7 18.3335 35 19.6502 35 21.2502ZM15.4167 27.5002H6.25C5.56669 27.5002 5 26.9335 5 26.2502C5 25.5669 5.56669 25.0002 6.25 25.0002H15.4167C16.1 25.0002 16.6667 25.5669 16.6667 26.2502C16.6667 26.9335 16.1 27.5002 15.4167 27.5002ZM16.6667 31.2502C16.6667 31.9335 16.1 32.5002 15.4167 32.5002H6.25C5.56669 32.5002 5 31.9335 5 31.2502C5 30.5669 5.56669 30.0002 6.25 30.0002H15.4167C16.1 30.0002 16.6667 30.5669 16.6667 31.2502ZM15.4167 22.5002H6.25C5.56669 22.5002 5 21.9335 5 21.2502C5 20.5669 5.56669 20.0002 6.25 20.0002H15.4167C16.1 20.0002 16.6667 20.5669 16.6667 21.2502C16.6667 21.9335 16.1 22.5002 15.4167 22.5002Z"></path>
                      <path d="M37.0859 0H16.2526C14.6443 0 13.3359 1.30835 13.3359 2.91669V7.08339C13.3359 8.69173 14.6443 10.0001 16.2526 10.0001H37.0859C38.6943 10 40.0026 8.69165 40.0026 7.08331V2.91669C40.0026 1.30835 38.6943 0 37.0859 0Z"></path>
                      <path d="M5 10C7.76142 10 10 7.76142 10 5C10 2.23858 7.76142 0 5 0C2.23858 0 0 2.23858 0 5C0 7.76142 2.23858 10 5 10Z"></path>
                    </svg>
                    <h3>Tableau de bord individuel</h3>
                    <p class="card-text">Retrouvez ici toutes vos activités, vos interactions et l’historique de vos actions, centralisés dans un tableau de bord clair et interactif.</p>
                  </div>
                </div>
                <div class="card-flip-back bg-danger rounded-5 py-2 py-lg-4 px-0">
                  <div class="card-body text-center">
                    <svg class="d-block text-white mt-2 mt-lg-n4 mb-4 mx-auto" width="32" height="32" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M29.6664 10.667H2.33334C1.05335 10.667 0 11.7203 0 13.0003V29.6669C0 30.9468 1.05335 32.0002 2.33334 32.0002H29.6665C30.9465 32.0002 31.9998 30.9468 31.9998 29.6669V13.0003C31.9998 11.7203 30.9464 10.667 29.6664 10.667ZM27.9998 17.0003V25.6669C27.9998 26.9469 26.9598 28.0002 25.6665 28.0002H18.3332C17.0399 28.0002 15.9999 26.9469 15.9999 25.6669V17.0003C15.9999 15.7203 17.0399 14.667 18.3332 14.667H25.6665C26.9598 14.667 27.9998 15.7203 27.9998 17.0003ZM12.3333 22.0003H4.99997C4.45332 22.0003 3.99997 21.5469 3.99997 21.0003C3.99997 20.4536 4.45332 20.0003 4.99997 20.0003H12.3333C12.8799 20.0003 13.3333 20.4536 13.3333 21.0003C13.3333 21.5469 12.8799 22.0003 12.3333 22.0003ZM13.3333 25.0002C13.3333 25.5469 12.8799 26.0002 12.3333 26.0002H4.99997C4.45332 26.0002 3.99997 25.5469 3.99997 25.0002C3.99997 24.4536 4.45332 24.0003 4.99997 24.0003H12.3333C12.8799 24.0003 13.3333 24.4536 13.3333 25.0002ZM12.3333 18.0003H4.99997C4.45332 18.0003 3.99997 17.5469 3.99997 17.0003C3.99997 16.4537 4.45332 16.0003 4.99997 16.0003H12.3333C12.8799 16.0003 13.3333 16.4537 13.3333 17.0003C13.3333 17.5469 12.8799 18.0003 12.3333 18.0003Z"></path>
                      <path d="M29.6639 0H12.9974C11.7107 0 10.6641 1.04667 10.6641 2.33334V5.66667C10.6641 6.95334 11.7107 8.00001 12.9974 8.00001H29.6639C30.9506 7.99994 31.9973 6.95327 31.9973 5.66661V2.33334C31.9973 1.04667 30.9506 0 29.6639 0Z"></path>
                      <path d="M3.99997 7.99994C6.2091 7.99994 7.99994 6.2091 7.99994 3.99997C7.99994 1.79085 6.2091 0 3.99997 0C1.79085 0 0 1.79085 0 3.99997C0 6.2091 1.79085 7.99994 3.99997 7.99994Z"></path>
                    </svg>
                    <div class="h3 display-4 text-white pb-1 mb-2">136</div>
                    <p class="card-text text-white opacity-70">Retrouvez ici toutes vos activités, vos interactions et l’historique de vos actions, centralisés dans un tableau de bord clair et interactif.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-flip">
              <div class="card-flip-inner">
                <div class="card-flip-front bg-secondary rounded-5 py-2 py-lg-4 px-0">
                  <div class="card-body text-center">
                    <svg class="d-block text-info mb-4 mx-auto" width="40" height="40" viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.11125 25.5903H5.55542C6.16903 25.5903 6.66667 26.0876 6.66667 26.7012V37.8124C6.66667 38.426 6.16903 38.9237 5.55542 38.9237H1.11125C0.49764 38.9237 0 38.426 0 37.8124V26.7012C0 26.0876 0.49764 25.5903 1.11125 25.5903Z"></path>
                      <path d="M12.2202 16.7012H16.6648C17.2784 16.7012 17.776 17.1988 17.776 17.8124V37.8124C17.776 38.426 17.2784 38.9237 16.6648 38.9237H12.2202C11.6066 38.9237 11.1094 38.426 11.1094 37.8124V17.8124C11.1094 17.1988 11.6066 16.7012 12.2202 16.7012Z"></path>
                      <path d="M23.33 21.146H27.7746C28.3882 21.146 28.8854 21.6436 28.8854 22.2572V37.8127C28.8854 38.4263 28.3882 38.9239 27.7746 38.9239H23.33C22.7164 38.9239 22.2188 38.4263 22.2188 37.8127V22.2572C22.2188 21.6436 22.7164 21.146 23.33 21.146Z"></path>
                      <path d="M34.4472 14.479H38.8914C39.505 14.479 40.0026 14.9766 40.0026 15.5903V37.8123C40.0026 38.4259 39.505 38.9236 38.8914 38.9236H34.4472C33.8336 38.9236 33.3359 38.4259 33.3359 37.8123V15.5903C33.3359 14.9766 33.8336 14.479 34.4472 14.479Z"></path>
                      <path d="M36.6667 1.146C34.8267 1.14803 33.3354 2.63932 33.3333 4.47933C33.3378 4.84228 33.4021 5.20199 33.5238 5.54378L27.9614 8.85026C27.2314 8.07593 26.1731 7.70076 25.1184 7.84196C24.0633 7.98315 23.1413 8.62362 22.6404 9.56274L17.7344 7.13273C17.7584 6.98991 17.7726 6.84587 17.7779 6.70142C17.7804 5.35213 16.9694 4.13468 15.7235 3.6167C14.4775 3.09912 13.0424 3.38354 12.0882 4.33732C11.1336 5.2911 10.8484 6.72583 11.3656 7.97217L5.00163 12.7215C4.49707 12.4208 3.9209 12.2605 3.33333 12.2572C1.49251 12.2572 0 13.7493 0 15.5906C0 17.4314 1.49251 18.9239 3.33333 18.9239C5.17415 18.9239 6.66667 17.4314 6.66667 15.5906C6.66382 15.1894 6.58813 14.7926 6.44328 14.4187L12.8707 9.62174C14.128 10.3228 15.6962 10.1173 16.7301 9.11556L22.3092 11.8788C22.6811 13.5353 24.2399 14.647 25.9273 14.459C27.6147 14.271 28.8908 12.844 28.8888 11.146C28.8888 11.0614 28.87 10.9816 28.8639 10.8986L34.9137 7.302C35.4382 7.63363 36.0457 7.81063 36.6667 7.81266C38.5075 7.81266 40 6.32015 40 4.47933C40 2.63851 38.5075 1.146 36.6667 1.146Z"></path>
                    </svg>
                    <h3>Des données fiables</h3>
                    <p class="card-text">Grâce à notre plateforme, développée à l'aide de méthodes avancées de gestion des données, la qualité des données atteint 100 %, soit 20 % de mieux que les autres plateformes.</p>
                  </div>
                </div>
                <div class="card-flip-back bg-info rounded-5 py-2 py-lg-4 px-0">
                  <div class="card-body text-center">
                    <svg class="d-block text-white mt-2 mt-lg-n4 mb-4 mx-auto" width="32" height="32" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.888997 20.4722H4.44434C4.93522 20.4722 5.33333 20.87 5.33333 21.3608V30.2498C5.33333 30.7407 4.93522 31.1388 4.44434 31.1388H0.888997C0.398112 31.1388 0 30.7407 0 30.2498V21.3608C0 20.87 0.398112 20.4722 0.888997 20.4722Z"></path>
                      <path d="M9.7793 13.3608H13.335C13.8258 13.3608 14.224 13.759 14.224 14.2498V30.2498C14.224 30.7407 13.8258 31.1388 13.335 31.1388H9.7793C9.28841 31.1388 8.89062 30.7407 8.89062 30.2498V14.2498C8.89062 13.759 9.28841 13.3608 9.7793 13.3608Z"></path>
                      <path d="M18.6702 16.9165H22.2259C22.7168 16.9165 23.1146 17.3146 23.1146 17.8055V30.2498C23.1146 30.7407 22.7168 31.1388 22.2259 31.1388H18.6702C18.1794 31.1388 17.7812 30.7407 17.7812 30.2498V17.8055C17.7812 17.3146 18.1794 16.9165 18.6702 16.9165V16.9165Z"></path>
                      <path d="M27.5531 11.5835H31.1084C31.5993 11.5835 31.9974 11.9816 31.9974 12.4725V30.2502C31.9974 30.7411 31.5993 31.1392 31.1084 31.1392H27.5531C27.0622 31.1392 26.6641 30.7411 26.6641 30.2502V12.4725C26.6641 11.9816 27.0622 11.5835 27.5531 11.5835V11.5835Z"></path>
                      <path d="M29.3333 0.916504C27.8613 0.918132 26.6683 2.11117 26.6667 3.58317C26.6702 3.87353 26.7217 4.1613 26.819 4.43473L22.3691 7.07991C21.7852 6.46045 20.9385 6.16032 20.0947 6.27327C19.2507 6.38623 18.513 6.8986 18.1123 7.6499L14.1875 5.70589C14.2067 5.59163 14.2181 5.4764 14.2223 5.36084C14.2243 4.28141 13.5755 3.30745 12.5788 2.89307C11.582 2.479 10.4339 2.70654 9.67057 3.46956C8.9069 4.23258 8.67871 5.38037 9.09245 6.37744L4.0013 10.1769C3.59766 9.93636 3.13672 9.8081 2.66667 9.8055C1.19401 9.8055 0 10.9992 0 12.4722C0 13.9448 1.19401 15.1388 2.66667 15.1388C4.13932 15.1388 5.33333 13.9448 5.33333 12.4722C5.33105 12.1512 5.27051 11.8338 5.15462 11.5347L10.2965 7.6971C11.3024 8.25797 12.557 8.09359 13.3841 7.29215L17.8473 9.50277C18.1449 10.828 19.3919 11.7173 20.7419 11.5669C22.0918 11.4165 23.1126 10.2749 23.111 8.9165C23.111 8.84879 23.096 8.78499 23.0911 8.71859L27.931 5.84131C28.3506 6.10661 28.8366 6.24821 29.3333 6.24984C30.806 6.24984 32 5.05583 32 3.58317C32 2.11051 30.806 0.916504 29.3333 0.916504V0.916504Z"></path>
                    </svg>
                    <div class="h3 display-4 text-white pb-1 mb-2">100%</div>
                    <p class="card-text text-white opacity-70">Grâce à notre plateforme, développée à l'aide de méthodes avancées de gestion des données, la qualité des données atteint 100 %, soit 20 % de mieux que les autres plateformes.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>




    <section class="container pt-5 mt-lg-2 mt-xl-4 mt-xxl-5">
        <div class="row align-items-center pt-2 pt-sm-4 pt-md-5 mt-xl-2 mt-xxl-3 aos-init" data-aos="fade-up"
            data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">

            <div class="col-md-7 offset-xl-1 pb-3 pb-md-0 mb-3 mb-md-0 order-md-2">
                <img class="d-dark-mode-none" src="{{asset('image-1.jpg')}}" width="500" alt="Image">
                <img class="d-none d-dark-mode-block" src="" width="744" alt="Ajoute une Image en PNG sans fond pour le darkmode Stéph">
            </div>

            <div class="col-md-5 col-xl-4 order-md-1 aos-init" data-aos="fade-up" data-aos-duration="850"
                data-aos-offset="200" data-disable-parallax-down="md">

                <h2 class="mb-lg-4">Votre carte Moyo, un accès simple à tous vos services</h2>
                <p class="pb-1 pb-md-2 mb-xl-4">
                    La carte ou application Moyo vous permet de gérer facilement vos cotisations, vos achats de fournitures et le suivi éducatif de vos enfants, à tout moment et en toute transparence.
                </p>

                <ul class="list-unstyled">
                    <li class="d-flex pt-1 mt-2">
                        <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                        Suivi en temps réel de vos cotisations scolaires.
                    </li>
                    <li class="d-flex pt-1 mt-2">
                        <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                        Accès instantané à votre tableau de bord et aux fournitures commandées.
                    </li>
                    <li class="d-flex pt-1 mt-2">
                        <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                        Suivi éducatif : progression scolaire, alertes et conseils personnalisés.
                    </li>
                </ul>

                <a class="btn btn-outline-primary rounded-pill" href="{{route('sondages.scolaire')}}">Découvrir la carte Moyo</a>
            </div>
        </div>
    </section>



</main>
@endsection
