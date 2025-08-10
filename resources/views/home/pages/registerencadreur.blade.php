@extends('layout.layout')
@section('content')
<section class="container pt-5 pb-lg-2 pb-xl-4 py-xxl-5 my-5">
  <div class="row pb-1 pb-sm-3 pb-lg-4">
    <div class="col-lg-4 pe-xxl-4">
      <!-- Page title -->
      <h1 class="display-2">Inscription Professionnel</h1>
      <p class="fs-lg pb-4 mb-0 mb-sm-2">
        Merci de remplir ce formulaire pour vous inscrire en tant que professionnel sur Moyo.
      </p>
    </div>
    <div class="col-lg-8 col-xl-7 offset-xl-1">
      <!-- Formulaire d'inscription -->
      <form class="row g-4 needs-validation" novalidate enctype="multipart/form-data" method="POST">
        @csrf

        <div class="col-sm-12">
          <label class="form-label fs-base" for="nomComplet">Nom complet</label>
          <input class="form-control form-control-lg" type="text" placeholder="Votre nom complet" required id="nomComplet" name="nomComplet" />
          <div class="invalid-feedback">Veuillez entrer votre nom complet !</div>
        </div>

        <div class="col-sm-6">
          <label class="form-label fs-base" for="numero">Numéro</label>
          <input class="form-control form-control-lg" type="tel" placeholder="Votre numéro de téléphone" required id="numero" name="numero" />
          <div class="invalid-feedback">Veuillez entrer un numéro valide !</div>
        </div>

        <div class="col-sm-6">
          <label class="form-label fs-base" for="email">Email</label>
          <input class="form-control form-control-lg" type="email" placeholder="Votre adresse email" required id="email" name="email" />
          <div class="invalid-feedback">Veuillez entrer une adresse email valide !</div>
        </div>

        <div class="col-sm-12">
          <label class="form-label fs-base" for="adresse">Adresse</label>
          <input class="form-control form-control-lg" type="text" placeholder="Votre adresse complète" required id="adresse" name="adresse" />
          <div class="invalid-feedback">Veuillez entrer votre adresse !</div>
        </div>

        {{-- <div class="col-sm-12">
          <label class="form-label fs-base" for="specialite_id">Spécialité</label>
          <select class="form-select form-select-lg" id="specialite_id" name="specialite_id" required>
            <option value="" disabled selected>Choisissez votre spécialité</option>
            @foreach($specialites as $specialite)
              <option value="{{ $specialite->id }}">{{ $specialite->nom }}</option>
            @endforeach
          </select>
          <div class="invalid-feedback">Veuillez choisir une spécialité !</div>
        </div> --}}

        <div class="col-sm-12">
          <label class="form-label fs-base" for="cv">Joindre mon CV (PDF ou DOC)</label>
          <input class="form-control form-control-lg" type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required />
          <div class="invalid-feedback">Veuillez joindre votre CV !</div>
        </div>

        <div class="col-sm-12">
          <label class="form-label fs-base" for="description">Décrivez-vous</label>
          <textarea class="form-control form-control-lg" rows="5" placeholder="Parlez-nous de vous..." id="description" name="description" required></textarea>
          <div class="invalid-feedback">Veuillez entrer une description !</div>
        </div>

        <div class="col-sm-12 pt-2">
          <button class="btn btn-lg btn-primary" type="submit">S'inscrire</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
