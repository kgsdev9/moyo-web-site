@extends('layout.layout')
@section('content')
    <section class="container pt-5 pb-lg-2 pb-xl-4 py-xxl-5 my-5">
        <div class="row pb-1 pb-sm-3 pb-lg-4">
            <div class="col-lg-4 pe-xxl-4">
                <!-- Page title -->
                <h1 class="display-2">Inscription Parent Local</h1>
                <p class="fs-lg pb-4 mb-0 mb-sm-2">Merci de remplir ce formulaire pour vous inscrire en tant que parent
                    ivoirien vivant en Côte d’Ivoire.</p>
            </div>
            <div class="col-lg-8 col-xl-7 offset-xl-1">
                <!-- Formulaire d'inscription -->
                <form class="row g-4 needs-validation" novalidate>
                    <div class="col-sm-12">
                        <label class="form-label fs-base" for="nomComplet">Nom complet</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Votre nom complet" required
                            id="nomComplet" />
                        <div class="invalid-feedback">Veuillez entrer votre nom complet !</div>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="telephone">Téléphone</label>
                        <input class="form-control form-control-lg" type="tel" placeholder="Votre numéro de téléphone"
                            required id="telephone" />
                        <div class="invalid-feedback">Veuillez entrer un numéro de téléphone valide !</div>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="profession">Profession</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Votre profession" required
                            id="profession" />
                        <div class="invalid-feedback">Veuillez entrer votre profession !</div>
                    </div>

                    <div class="col-sm-12">
                        <label class="form-label fs-base" for="adresseLongue">Adresse complète</label>
                        <textarea class="form-control form-control-lg" rows="4" placeholder="Ville, commune, quartier, détails..."
                            required id="adresseLongue"></textarea>
                        <div class="invalid-feedback">Veuillez entrer votre adresse complète !</div>
                    </div>

                    <div class="col-sm-12 pt-2">
                        <button class="btn btn-lg btn-primary" type="submit">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
