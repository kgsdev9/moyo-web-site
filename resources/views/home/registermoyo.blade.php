@include('layout.head')

<main class="page-wrapper">
    <div class="d-lg-flex position-relative h-100">

        <!-- Home button -->
        <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4"
            href="/" data-bs-toggle="tooltip" data-bs-placement="left" title="Retourner à la page d'accueil"
            aria-label="Retourner à la page d'accueil">
            <i class="ai-home"></i>
        </a>

        <section class="container pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5 mt-xxl-4 pb-lg-2 pb-xl-4 pb-xxl-5">
  <div class="row">
    <!-- Parent Ivoirien vivant en Côte d'Ivoire -->
    <div class="col-md-4 mb-4">
      <a class="card bg-secondary border-0 h-100 text-center text-decoration-none" href="{{route('register.parent.local')}}">
        <div class="card-body">
          <!-- Ici tu peux mettre une icône ou un SVG -->
          <svg class="d-block mx-auto mb-4" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Exemple d'icône -->
            <path class="text-primary" d="M39.2,0H16.8c-3.1,0-5.6,2.5-5.6,5.6V9h33.6V5.6C44.8,2.5,42.3,0,39.2,0z" fill="currentColor"></path>
            <!-- ... autre path ... -->
          </svg>
          <h3>Parent Ivoirien vivant en Côte d'Ivoire</h3>
          <p class="card-text">Rejoignez la communauté des parents ivoiriens engagés pour l’éducation de leurs enfants sur Moyo.</p>
        </div>
        <div class="card-footer border-0 px-0 pt-0 pb-4 mb-3">
          <div class="btn btn-icon btn-outline-primary rounded-circle stretched-link">
            <i class="ai-arrow-right"></i>
          </div>
        </div>
      </a>
    </div>

    <!-- Parent Ivoirien de la diaspora -->
    <div class="col-md-4 mb-4">
      <a class="card bg-secondary border-0 h-100 text-center text-decoration-none" href="{{route('register.parent.diaspora')}}">
        <div class="card-body">
          <!-- Icône SVG -->
          <svg class="d-block mx-auto mb-4" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Exemple d'icône -->
            <path class="text-primary" d="M39.2,0H16.8c-3.1,0-5.6,2.5-5.6,5.6V9h33.6V5.6C44.8,2.5,42.3,0,39.2,0z" fill="currentColor"></path>
            <!-- ... autre path ... -->
          </svg>
          <h3>Parent Ivoirien de la diaspora</h3>
          <p class="card-text">Contribuez et suivez la scolarité de vos enfants même à distance, grâce à Moyo.</p>
        </div>
        <div class="card-footer border-0 px-0 pt-0 pb-4 mb-3">
          <div class="btn btn-icon btn-outline-primary rounded-circle stretched-link">
            <i class="ai-arrow-right"></i>
          </div>
        </div>
      </a>
    </div>

    <!-- Devenir professionnel sur Moyo -->
    <div class="col-md-4 mb-4">
      <a class="card bg-secondary border-0 h-100 text-center text-decoration-none" href="{{route('register.professionel')}}">
        <div class="card-body">
          <!-- Icône SVG -->
          <svg class="d-block mx-auto mb-4" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Exemple d'icône -->
            <path class="text-primary" d="M39.2,0H16.8c-3.1,0-5.6,2.5-5.6,5.6V9h33.6V5.6C44.8,2.5,42.3,0,39.2,0z" fill="currentColor"></path>
            <!-- ... autre path ... -->
          </svg>
          <h3>Devenir professionnel sur Moyo</h3>
          <p class="card-text">Rejoignez la plateforme en tant qu’encadreur ou formateur et développez votre réseau.</p>
        </div>
        <div class="card-footer border-0 px-0 pt-0 pb-4 mb-3">
          <div class="btn btn-icon btn-outline-primary rounded-circle stretched-link">
            <i class="ai-arrow-right"></i>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>


    </div>
</main>

