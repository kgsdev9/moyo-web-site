@extends('layout.layout')
@section('title', 'Politique de Confidentialité - Moyo')
@section('content')
    <main class="page-wrapper">
        <section class="bg-secondary position-relative overflow-hidden pt-5">
            <div class="container position-relative z-2 pt-4 pt-sm-5 mt-2 mt-sm-0 mt-md-2 mt-lg-3 mt-xl-4 mt-xxl-5">
                <div class="row justify-content-center py-4">
                    <div class="col-lg-11 col-xl-10 text-center pb-2 pb-sm-3 mb-lg-2 mb-xl-3">
                        <h1 class="display-2 fw-normal mb-0">
                            <span class="fw-bold">Politique de Confidentialité</span> de Moyo
                        </h1>
                        <p class="fs-lg mt-3">
                            Découvrez comment nous collectons, utilisons et protégeons vos données personnelles lors de l'utilisation de nos services.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-secondary py-5">
            <div class="container py-md-2 py-lg-3 py-xl-5 my-2 my-sm-3 my-md-4 my-xxl-5">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="accordion" id="privacyPolicy">

                            <!-- Article 1 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#articleOne" aria-expanded="true" aria-controls="articleOne">
                                        1. Informations collectées
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse show" id="articleOne" aria-labelledby="headingOne"
                                    data-bs-parent="#privacyPolicy">
                                    <div class="accordion-body fs-sm">
                                        Nous collectons :<br>
                                        • Informations personnelles : nom, prénom, email, numéro de téléphone, informations scolaires.<br>
                                        • Informations de paiement : détails des transactions.<br>
                                        • Données de connexion et d’usage : adresse IP, type de navigateur, pages consultées.<br>
                                        • Informations de localisation (si activées).<br>
                                        • Informations de communication (messages et demandes envoyés via l’application ou email).
                                    </div>
                                </div>
                            </div>

                            <!-- Article 2 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#articleTwo" aria-expanded="false" aria-controls="articleTwo">
                                        2. Utilisation des informations
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="articleTwo" aria-labelledby="headingTwo"
                                    data-bs-parent="#privacyPolicy">
                                    <div class="accordion-body fs-sm">
                                        Vos données sont utilisées pour :<br>
                                        • Gérer et suivre la scolarité de vos enfants.<br>
                                        • Faciliter le paiement sécurisé des frais scolaires.<br>
                                        • Gérer les cagnottes solidaires et contributions.<br>
                                        • Vous informer par notifications et emails importants.<br>
                                        • Améliorer nos services et l’expérience utilisateur.<br>
                                        • Fournir un support client.<br>
                                        • Analyser l’usage de l’application.
                                    </div>
                                </div>
                            </div>

                            <!-- Article 3 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#articleThree" aria-expanded="false" aria-controls="articleThree">
                                        3. Partage des informations
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="articleThree" aria-labelledby="headingThree"
                                    data-bs-parent="#privacyPolicy">
                                    <div class="accordion-body fs-sm">
                                        Nous ne vendons pas vos données. Elles peuvent être partagées uniquement :<br>
                                        • Avec les établissements scolaires concernés.<br>
                                        • Avec des prestataires tiers (paiement, hébergement, support technique).<br>
                                        • Si la loi l'exige.<br>
                                        • En cas de fusion, acquisition ou cession d’actifs, sous réserve de confidentialité.
                                    </div>
                                </div>
                            </div>

                            <!-- Article 4 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#articleFour" aria-expanded="false" aria-controls="articleFour">
                                        4. Sécurité des données
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="articleFour" aria-labelledby="headingFour"
                                    data-bs-parent="#privacyPolicy">
                                    <div class="accordion-body fs-sm">
                                        Nous protégeons vos données contre la perte, l’accès non autorisé et les usages frauduleux.
                                        Les paiements sont sécurisés et conformes aux normes PCI-DSS.
                                    </div>
                                </div>
                            </div>

                            <!-- Article 5 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#articleFive" aria-expanded="false" aria-controls="articleFive">
                                        5. Conservation des données
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="articleFive" aria-labelledby="headingFive"
                                    data-bs-parent="#privacyPolicy">
                                    <div class="accordion-body fs-sm">
                                        Vos données sont conservées uniquement pendant la durée nécessaire à la gestion de la scolarité et au respect des obligations légales.
                                    </div>
                                </div>
                            </div>

                            <!-- Article 6 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#articleSix" aria-expanded="false" aria-controls="articleSix">
                                        6. Cookies et technologies similaires
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="articleSix" aria-labelledby="headingSix"
                                    data-bs-parent="#privacyPolicy">
                                    <div class="accordion-body fs-sm">
                                        Nous utilisons des cookies pour améliorer votre expérience et analyser l’usage de l’application.
                                        Vous pouvez les désactiver, mais certaines fonctionnalités pourraient être limitées.
                                    </div>
                                </div>
                            </div>

                            <!-- Article 7 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#articleSeven" aria-expanded="false" aria-controls="articleSeven">
                                        7. Vos droits
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="articleSeven" aria-labelledby="headingSeven"
                                    data-bs-parent="#privacyPolicy">
                                    <div class="accordion-body fs-sm">
                                        Vous pouvez accéder, corriger, supprimer vos données, retirer votre consentement ou vous opposer à certains traitements.
                                        Contactez-nous : <a href="mailto:contact@moyo-ci.com">contact@moyo-ci.com</a>.
                                    </div>
                                </div>
                            </div>

                            <!-- Article 8 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#articleEight" aria-expanded="false" aria-controls="articleEight">
                                        8. Protection des enfants
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="articleEight" aria-labelledby="headingEight"
                                    data-bs-parent="#privacyPolicy">
                                    <div class="accordion-body fs-sm">
                                        Nous ne collectons pas sciemment les données d’enfants de moins de 13 ans sans consentement parental.
                                        Les parents peuvent demander la suppression de ces données.
                                    </div>
                                </div>
                            </div>

                            <!-- Article 9 -->
                            <div class="accordion-item bg-light">
                                <h3 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#articleNine" aria-expanded="false" aria-controls="articleNine">
                                        9. Modifications de la politique
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="articleNine" aria-labelledby="headingNine"
                                    data-bs-parent="#privacyPolicy">
                                    <div class="accordion-body fs-sm">
                                        Nous pouvons modifier cette politique de confidentialité.
                                        Toute modification sera publiée dans l’application ou sur notre site.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
