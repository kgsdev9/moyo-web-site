<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <!-- SEO meta tags -->
    <title>Moyo Éducation | Fintech éducative en Côte d'Ivoire</title>
    <meta name="description"
        content="Moyo est une startup innovante qui transforme l'éducation en Côte d'Ivoire à travers des solutions numériques de paiement, de gestion scolaire et d'accompagnement éducatif.">
    <meta name="keywords"
        content="fintech éducation, paiement frais scolaires, accompagnement scolaire, startup éducation, Côte d'Ivoire, Moyo Éducation">
    <meta name="author" content="Moyo Éducation">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon et icônes -->
    <link rel="icon" href="{{asset('flaticon-moyo.png')}}">
    <link rel="apple-touch-icon" href="assets/img/apple-icon-180x180.png">

    <!-- Import Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <!-- Styles CSS Vendor (Swiper, AOS, Icons) -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">

    {{-- <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/icons/around-icons.min.css') }}">

    <!-- Theme Bootstrap + Personnalisation -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

    <!-- Script pour gestion du mode sombre/clair -->
    <script src="{{ asset('assets/js/theme-switcher.js') }}"></script>

    <!-- Style de chargement -->
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: 'Inter', sans-serif;
        }

        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            transition: all .4s .2s ease-in-out;
            z-index: 9999;
        }

        [data-bs-theme="dark"] .page-loading {
            background-color: #121519;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            transform: translateY(-50%);
            opacity: 0;
            transition: opacity .2s ease-in-out;
        }

        .page-loading.active>.page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner>span {
            font-family: "Comfortaa", sans-serif;
            font-size: 1rem;
            font-weight: 700;
            color: #393e47;
        }

        [data-bs-theme="dark"] .page-loading-inner>span {
            color: #fff;
            opacity: .6;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            background-color: #d7dde2;
            border-radius: 50%;
            opacity: 0;
            animation: spinner .75s linear infinite;
        }

        [data-bs-theme="dark"] .page-spinner {
            background-color: rgba(255, 255, 255, .25);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        p,
        span,
        li,
        a,
        input,
        textarea,
        button {
            font-family: 'Comfortaa', sans-serif;
            font-weight: 700;
        }

        @keyframes spinner {
            0% {
                transform: scale(0);
            }

            50% {
                opacity: 1;
                transform: none;
            }
        }
    </style>


</head>
