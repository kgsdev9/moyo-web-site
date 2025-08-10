@extends('layout.layout')
@section('content')
    <section class="position-relative bg-light pt-lg-4 pt-xl-5 text-primary">
        <div class="jarallax position-absolute top-0 start-0 w-100 h-100" data-jarallax="" data-speed="0.4">
            <div id="jarallax-container-0" class="jarallax-container"
                style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
                <div class="jarallax-img"
                    style="background-image: url('assets/img/landing/saas-4/hero-bg-pattern.png'); object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 414px; height: 886.888px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; margin-top: 4.55625px; transform: translate3d(0px, -4.55625px, 0px);"
                    data-jarallax-original-styles="background-image: url(assets/img/landing/saas-4/hero-bg-pattern.png);">
                </div>
            </div>
        </div>

        <div class="container position-relative z-2 pt-2 pt-sm-4 pt-md-5">
            <div class="row justify-content-center pt-5">
                <div class="col-lg-9 col-xl-8 text-center pt-5 mt-1">
                    <a href="{{ route('register.moyo') }}"
                        class="d-inline-flex align-items-center fs-sm fw-semibold text-decoration-none bg-warning bg-opacity-10 text-warning rounded-pill py-2 px-3">
                        <span class="fw-semibold lh-sm">Inscrivez-vous à MOYO</span>
                        <i class="ai-arrow-right fs-lg ms-2 me-n1"></i>
                    </a>
                    <h1 class="display-4 text-dark pt-3 mt-3 mb-4 text-primary">
                        Dites adieu au stress de la rentrée scolaire
                    </h1>
                    <p class="text-dark opacity-85 fs-xl text-primary">
                        Avec MOYO, vous organisez, financez et suivez la scolarité de vos enfants du CP à la terminale —
                        même à distance depuis la diaspora.
                        Épargnez à l’avance, payez en toute sécurité, accédez à des cagnottes solidaires et restez serein
                        toute l’année.
                    </p>
                </div>
            </div>
        </div>

        <div class="d-none d-lg-block" style="height: 480px;"></div>
        <div class="d-lg-none" style="height: 400px;"></div>

        <div class="d-flex position-absolute bottom-0 start-0 w-100 overflow-hidden mb-n1"
            style="color: var(--ar-body-bg);">
            <div class="position-relative start-50 translate-middle-x flex-shrink-0" style="width: 3774px;">
                <svg width="3774" height="201" viewBox="0 0 3774 201" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 200.003C0 200.003 1137.52 0.188224 1873.5 0.000134392C2614.84 -0.189325 3774 200.003 3774 200.003H0Z"
                        fill="currentColor"></path>
                </svg>
            </div>
        </div>
    </section>

    <section class="container pb-2 pb-sm-3 pb-md-4 pb-lg-5 mb-xl-3 mb-xxl-5" style="margin-top: -400px;">
        <div class="bg-light rounded-5 py-4 py-md-5 px-lg-5">
            <div class="row row-cols-2 row-cols-md-4 g-0">
                <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
                    <div class="position-absolute top-50 end-0 translate-middle-y border-end" style="height: 60px;"></div>
                    <div class="p-3 px-sm-0 py-sm-4">
                        <div class="h2 display-5 text-primary mb-0">10 050+</div>
                        <span>Parents inscrits</span>
                    </div>
                </div>
                <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
                    <div class="position-absolute top-50 end-0 translate-middle-y border-end d-none d-md-block"
                        style="height: 60px;"></div>
                    <div class="p-3 px-sm-0 py-sm-4">
                        <div class="h2 display-5 text-primary mb-0">13</div>
                        <span>ONG et partenaires</span>
                    </div>
                </div>
                <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
                    <div class="position-absolute top-50 end-0 translate-middle-y border-end" style="height: 60px;"></div>
                    <div class="p-3 px-sm-0 py-sm-4">
                        <div class="h2 display-5 text-primary mb-0">15+</div>
                        <span>Écoles et centres partenaires</span>
                    </div>
                </div>
                <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
                    <div class="p-3 px-sm-0 py-sm-4">
                        <div class="h2 display-5 text-primary mb-0">2 500+</div>
                        <span>Utilisateurs actifs sur Moyo</span>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="container">
        <div class="row gy-4">
            <div class="col-md-4">
                <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
                    <div class="card-body pb-0">
                        <!-- Icône de fournitures scolaires -->
                        <svg class="d-block text-success mb-4" width="40" height="40" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4h16v16H4z" />
                            <path d="M8 4v16" />
                            <path d="M16 4v16" />
                            <path d="M4 8h16" />
                            <path d="M4 16h16" />
                        </svg>
                        <h3 class="h4 card-title mt-0">Scolarité clé en main</h3>
                        <p class="card-text">
                            MOYO s’occupe de tout : fournitures scolaires, paiement et suivi de la scolarité. Les parents
                            restent à la maison, tout arrive directement chez eux à chaque rentrée.
                        </p>
                    </div>
                    <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                        <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                            <i class="ai-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4">
                <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
                    <div class="card-body pb-0">
                        <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="18" fill="none" stroke="currentColor"
                                stroke-width="2" />
                            <path d="M2 20h36M20 2v36" stroke="currentColor" stroke-width="2" />
                            <path d="M14 8a18 18 0 0 0 0 24M26 8a18 18 0 0 1 0 24" stroke="currentColor" stroke-width="2" />
                        </svg>
                        <h3 class="h4 card-title mt-0">Coffre Scolaire MOYO</h3>
                        <p class="card-text">
                            Épargnez pour la scolarité de vos enfants avec le Coffre MOYO. Votre argent est gardé en
                            sécurité et disponible à tout moment pour payer les frais scolaires en toute tranquillité.
                        </p>


                    </div>
                    <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                        <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                            <i class="ai-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>


            <!-- Paiement sécurisé et suivi -->
            <div class="col-md-4">
                <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
                    <div class="card-body pb-0">
                        <!-- Icône téléphone -->
                        <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <rect x="12" y="5" width="16" height="30" rx="3" ry="3"
                                fill="none" stroke="currentColor" stroke-width="2" />
                            <circle cx="20" cy="30" r="2" fill="currentColor" />
                            <path d="M15 15h10" stroke="currentColor" stroke-width="2" />
                        </svg>
                        <h3 class="h4 card-title mt-0">Paiement sécurisé </h3>
                        <p class="card-text">Payez la scolarité depuis votre téléphone via Mobile Money. Suivez vos
                            transactions,
                            recevez des justificatifs et gérez la scolarité de vos enfants où que vous soyez dans le monde.
                        </p>
                    </div>
                    <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                        <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                            <i class="ai-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
                    <div class="card-body pb-0">
                        <!-- Icône de don : une main avec un cœur -->
                        <svg class="d-block text-danger mb-4" width="40" height="40" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 21c-4.28-2.36-7-5.28-7-8.7A4.3 4.3 0 0 1 9.3 8a4.36 4.36 0 0 1 2.7 1 4.36 4.36 0 0 1 2.7-1A4.3 4.3 0 0 1 19 12.3c0 3.42-2.72 6.34-7 8.7z" />
                        </svg>
                        <h3 class="h4 card-title mt-0">Cagnotte solidaire</h3>
                        <p class="card-text">
                            Créez une cagnotte solidaire pour aider à payer la scolarité. Les parents MOYO, donateurs et ONG
                            peuvent y contribuer chaque semestre selon les besoins.
                        </p>
                    </div>
                    <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                        <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                            <i class="ai-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>



            <!-- Assistance et accompagnement -->
            <div class="col-md-4">
                <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
                    <div class="card-body pb-0">
                        <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 5a15 15 0 1 0 15 15A15 15 0 0 0 20 5z" fill="none" stroke="currentColor"
                                stroke-width="2" />
                            <path d="M20 12v8l6 6" stroke="currentColor" stroke-width="2" fill="none" />
                        </svg>
                        <h3 class="h4 card-title mt-0">Encadrements educatifs</h3>
                        <p class="card-text">Bénéficiez d’une assistance personnalisée en cas de coup dur. Trouvez des
                            enseignants
                            et encadreurs qualifiés pour accompagner la réussite scolaire de vos enfants.</p>
                    </div>
                    <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                        <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                            <i class="ai-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Gestion pour la diaspora -->
            <div class="col-md-4">
                <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
                    <div class="card-body pb-0">
                        <!-- Icône voyage / diaspora -->
                        <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="2" />
                            <path d="M2 20h36M20 2a26 26 0 0 1 0 36M20 2a26 26 0 0 0 0 36" stroke="currentColor"
                                stroke-width="2" fill="none" />
                        </svg>

                        <h3 class="h4 card-title mt-0">Gestion pour la diaspora</h3>
                        <p class="card-text">
                            Vous vivez à l’étranger ? MOYO prend en charge toute la scolarité de vos enfants en Côte
                            d’Ivoire, du paiement aux fournitures, sans que vous ayez à vous déplacer.
                        </p>
                    </div>
                    <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                        <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                            <i class="ai-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>


        </div>
    </section>

    <!-- FAQ (Accordion) -->
    <section class="bg-secondary py-5 mt-4">
        <div class="container py-md-2 py-lg-3 py-xl-5 my-2 my-sm-3 my-md-4 my-xxl-5">
            <div class="row">
                <div class="col-md-4 text-center text-md-start">
                    <h2 class="h1" style="font-weight: 700;">Questions fréquentes (FAQ)</h2>
                    <p class="pb-3 pb-sm-4">
                        Moyo est une fintech éducative offrant des solutions innovantes comme le coffre scolaire, le
                        paiement de la scolarité, ainsi que des services dédiés aux professionnels de l’éducation.
                    </p>

                    <div class="d-none d-md-flex justify-content-center">
                        <svg class="text-warning ms-n4" width="200" height="211" viewBox="0 0 200 211"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <div class="col-md-8 col-lg-7 offset-lg-1">
                    <div class="accordion" id="faq">
                        <!-- Question 1 -->
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#questionOne" aria-expanded="true" aria-controls="questionOne">
                                    Qu’est-ce que Moyo et en quoi est-ce utile pour l’éducation ?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse show" id="questionOne" aria-labelledby="headingOne"
                                data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">
                                    Moyo est une fintech éducative qui aide les parents à gérer facilement les paiements et
                                    l’épargne pour la scolarité de leurs enfants. Elle permet aussi aux professionnels de
                                    l’éducation d’accéder à des services dédiés. Moyo rend l’éducation plus accessible et
                                    plus simple à gérer au quotidien.
                                </div>
                            </div>
                        </div>

                        <!-- Question 2 -->
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#questionTwo" aria-expanded="false" aria-controls="questionTwo">
                                    Comment recharger mon compte moyo depuis mon application ?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="questionTwo" aria-labelledby="headingTwo"
                                data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">
                                    Le rechargement consiste à choisir un mode de paiement (Wave, Orange Money, Moov Money,
                                    MTN Money, Visa ou PayPal), saisir le montant, puis valider en payant les frais de
                                    l’opérateur. Le montant est ensuite crédité rapidement sur votre compte.
                                </div>
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#questionThree" aria-expanded="false" aria-controls="questionThree">
                                    Comment effectuer le paiement de la scolarité ?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="questionThree" aria-labelledby="headingThree"
                                data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">
                                    Le parent utilise son compte principal pour payer la scolarité via l’onglet « Scolarité
                                    ». Il doit s’assurer que son solde est suffisant, c’est-à-dire supérieur au montant à
                                    régler, pour que le paiement soit validé.
                                </div>
                            </div>
                        </div>

                        <!-- Question 4 -->
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#questionFour" aria-expanded="false" aria-controls="questionFour">
                                    Comment fonctionne le paiement des frais de scolarité ?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="questionFour" aria-labelledby="headingFour"
                                data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">
                                    Grâce à Moyo, vous pouvez payer les frais scolaires en plusieurs fois de manière simple
                                    et sécurisée
                                    via notre application mobile, incluant les fournitures et services éducatifs.
                                </div>
                            </div>
                        </div>

                        <!-- Question 5 -->
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#questionFive" aria-expanded="false" aria-controls="questionFive">
                                    En quoi consiste la gestion de la scolarité ?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="questionFive" aria-labelledby="headingFive"
                                data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">
                                    Moyo prend en charge toutes les démarches liées à la scolarité de l’enfant : paiement
                                    des frais, suivi des échéances et communication avec l’école. En jouant ce rôle à la
                                    place du parent, Moyo facilite la gestion complète de la scolarité et simplifie la vie
                                    des familles.
                                </div>
                            </div>
                        </div>

                        <!-- Question 6 -->
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#questionSix" aria-expanded="false" aria-controls="questionSix">
                                    Pourquoi utiliser le coffre scolaire ?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="questionSix" aria-labelledby="headingSix"
                                data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">
                                    Le coffre scolaire permet aux parents d’épargner facilement et en toute sécurité pour
                                    les frais de scolarité de leurs enfants. Il garantit que l’argent est réservé uniquement
                                    à l’éducation, évitant les oublis ou retards de paiement, et facilite la gestion du
                                    budget scolaire tout au long de l’année.
                                </div>
                            </div>
                        </div>


                        <!-- Question 7 -->
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#questionSeven" aria-expanded="false" aria-controls="questionSeven">
                                    Pourquoi avoir créé la cagnotte scolaire ?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="questionSeven" aria-labelledby="headingSeven"
                                data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">
                                    La cagnotte scolaire a été créée pour permettre aux parents Moyo, ainsi qu’à leurs
                                    proches, amis et ONG, de contribuer facilement ensemble au financement de la scolarité
                                    de leurs enfants. Cela rend l’accès à l’éducation plus simple et moins stressant.
                                </div>
                            </div>
                        </div>

                        <!-- Question 8 -->
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#questionNine" aria-expanded="false" aria-controls="questionNine">
                                    Comment avoir accès aux services Moyo ?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="questionNine" aria-labelledby="headingNine"
                                data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">
                                    Pour avoir accès aux services Moyo, chaque parent doit s’acquitter d’une somme de 2 000
                                    FCFA pour l’activation du compte. Cette activation inclut la délivrance de la carte
                                    digitale scolaire Moyo. L’application est disponible sur le Play Store et l’App Store.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#questionTen" aria-expanded="false" aria-controls="questionTen">
                                    Comment annuler le service Moyo ?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="questionTen" aria-labelledby="headingTen"
                                data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">
                                    Pour annuler le service Moyo, vous pouvez contacter le service client via l’application
                                    ou par email. Après confirmation, votre compte sera désactivé et vos fonds restants vous
                                    seront reversés via Mobile Money.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="container mt-5 mt-sm-4 pb-5 mb-md-2 mb-lg-3 mb-xl-4 mb-xxl-5 mt-4">
            <h2 class="h1 text-center pb-3 pb-lg-4" style="font-weight: 700;">Témoignages </h2>

            <!-- Swiper slider -->
            <div class="swiper pb-1 pb-md-2 pb-lg-3 pb-xl-4 swiper-initialized swiper-horizontal swiper-autoheight swiper-backface-hidden"
                data-swiper-options="{
          &quot;spaceBetween&quot;: 24,
          &quot;loop&quot;: true,
          &quot;autoHeight&quot;: true,
          &quot;pagination&quot;: {
            &quot;el&quot;: &quot;.swiper-pagination&quot;,
            &quot;clickable&quot;: true
          },
          &quot;breakpoints&quot;: {
            &quot;576&quot;: { &quot;slidesPerView&quot;: 2 },
            &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }
          }
        }">
                <div class="swiper-wrapper" id="swiper-wrapper-3678906c8f89dc44" aria-live="polite"
                    style="height: 530px; transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); transition-delay: 0ms;">

                    <!-- Témoignage 1 -->
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4"
                        style="width: 380px; margin-right: 24px;" data-swiper-slide-index="0">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img class="rounded-circle" src="{{ asset('avis-moyo/avatr-home-A.jpg') }}"
                                        width="60" alt="Kouadio N’guessan">
                                    <div class="ps-3">
                                        <div class="h6 mb-1">Kouadio N’guessan</div>
                                        <div class="fs-sm text-body-secondary">Client de la diaspora</div>
                                    </div>
                                </div>
                                <p class="card-text">Moyo m'a permis de soutenir mes enfants en Côte d'Ivoire sans
                                    souci. Je peux envoyer de l'argent rapidement pour leur scolarité et suivre leur
                                    progrès scolaire grâce aux rapports que je reçois régulièrement. Je suis très
                                    satisfait.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Témoignage 2 -->
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4"
                        style="width: 380px; margin-right: 24px;" data-swiper-slide-index="1">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img class="rounded-circle" src="{{ asset('avis-moyo/image-avis-1.jpg') }}"
                                        width="60" alt="Awa Traoré">
                                    <div class="ps-3">
                                        <div class="h6 mb-1">Awa Traoré</div>
                                        <div class="fs-sm text-body-secondary">Client en Côte d'Ivoire</div>
                                    </div>
                                </div>
                                <p class="card-text">Grâce à Moyo, ma famille a bénéficié d'un soutien pour les
                                    frais scolaires. Nous avons aussi accès aux rapports sur la scolarité de mes
                                    enfants, ce qui nous permet de mieux suivre leurs progrès. C’est une solution
                                    fiable et pratique pour nous.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Témoignage 3 -->
                    <div class="swiper-slide" role="group" aria-label="3 / 4"
                        style="width: 380px; margin-right: 24px;" data-swiper-slide-index="2">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img class="rounded-circle" src="{{ asset('avis-moyo/avatar-home-3.jpg') }}"
                                        width="60" alt="Brahima Coulibaly">
                                    <div class="ps-3">
                                        <div class="h6 mb-1">Brahima Coulibaly</div>
                                        <div class="fs-sm text-body-secondary">Client ivoirien</div>
                                    </div>
                                </div>
                                <p class="card-text">Moyo a vraiment changé la donne pour ma famille. En tant que
                                    parent d'élève, je peux envoyer de l'argent pour la scolarité de mes enfants et
                                    suivre leur évolution scolaire grâce aux rapports. Moyo est une solution moderne
                                    et sécurisée.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Témoignage 4 -->
                    <div class="swiper-slide" role="group" aria-label="4 / 4"
                        style="width: 380px; margin-right: 24px;" data-swiper-slide-index="3">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img class="rounded-circle" src="{{ asset('avatarfemme.png') }}" width="60"
                                        alt="Mariam Diomandé">
                                    <div class="ps-3">
                                        <div class="h6 mb-1">Mariam Diomandé</div>
                                        <div class="fs-sm text-body-secondary">Assurée en Côte d'Ivoire</div>
                                    </div>
                                </div>
                                <p class="card-text">Moyo m'a donné la tranquillité d'esprit. Non seulement j'ai pu
                                    envoyer de l'argent pour la scolarité de mes enfants, mais j'ai aussi la
                                    possibilité de suivre leur rendement scolaire grâce aux rapports détaillés
                                    envoyés. Une très belle initiative pour les familles en Côte d'Ivoire.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Pagination (bullets) -->
                <div
                    class="swiper-pagination position-relative bottom-0 mt-2 mt-md-3 mt-lg-4 pt-4 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                        aria-label="Go to slide 1" aria-current="true"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                        aria-label="Go to slide 2"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                        aria-label="Go to slide 3"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                        aria-label="Go to slide 4"></span>
                </div>
            </div>
        </section>
    </section>
@endsection
