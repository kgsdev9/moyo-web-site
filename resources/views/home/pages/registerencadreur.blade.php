@extends('layout.layout')
@section('content')
<section class="container pt-5 pb-lg-2 pb-xl-4 py-xxl-5 my-5"
    x-data="RegisterProfessionnel()"
    @submit.prevent="submitForm">

    <!-- Étape 1 : Formulaire -->
    <template x-if="step === 1">
        <div class="row pb-1 pb-sm-3 pb-lg-4">
            <div class="col-lg-4 pe-xxl-4">
                <h1 class="display-2">Inscription Professionnel</h1>
                <p class="fs-lg pb-4 mb-0 mb-sm-2">
                    Merci de remplir ce formulaire pour vous inscrire en tant que professionnel sur Moyo.
                </p>
            </div>
            <div class="col-lg-8 col-xl-7 offset-xl-1">
                <form class="row g-4 needs-validation" novalidate>

                    <!-- Nom complet -->
                    <div class="col-sm-12">
                        <label class="form-label fs-base" for="nomComplet">Nom complet</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Votre nom complet" id="nomComplet" x-model="form.nomComplet" />
                        <span class="text-danger" x-show="errors.nomComplet" x-text="errors.nomComplet"></span>
                    </div>

                    <!-- Numéro téléphone -->
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="numero">Numéro</label>
                        <input class="form-control form-control-lg" type="tel" placeholder="07 78 98 98 09" id="numero" x-model="form.numero" @input="formatPhone" />
                        <span class="text-danger" x-show="errors.numero" x-text="errors.numero"></span>
                    </div>

                    <!-- Email -->
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="email">Email</label>
                        <input class="form-control form-control-lg" type="email" placeholder="Votre adresse email" id="email" x-model="form.email" />
                        <span class="text-danger" x-show="errors.email" x-text="errors.email"></span>
                    </div>

                    <!-- Adresse -->
                    <div class="col-sm-12">
                        <label class="form-label fs-base" for="adresse">Adresse</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Votre adresse complète" id="adresse" x-model="form.adresse" />
                        <span class="text-danger" x-show="errors.adresse" x-text="errors.adresse"></span>
                    </div>

                    <!-- Description -->
                    <div class="col-sm-12">
                        <label class="form-label fs-base" for="description">Décrivez-vous</label>
                        <textarea class="form-control form-control-lg" rows="5" placeholder="Parlez-nous de vous..." id="description" x-model="form.description"></textarea>
                        <span class="text-danger" x-show="errors.description" x-text="errors.description"></span>
                    </div>

                    <div class="col-sm-12 pt-2">
                        <button class="btn btn-lg btn-primary d-flex align-items-center justify-content-center" type="submit" :disabled="loading">
                            <template x-if="!loading">
                                <span>S'inscrire</span>
                            </template>
                            <template x-if="loading">
                                <span class="d-flex align-items-center">
                                    <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                                    Envoi...
                                </span>
                            </template>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </template>

    <!-- Étape 2 : Succès -->
    <template x-if="step === 2">
        <div class="text-center py-5">
            <div class="mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="none"
                    viewBox="0 0 24 24" stroke="green" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
            </div>
            <h1 class="display-5 fw-bold text-success">Inscription réussie 🎉</h1>
            <p class="fs-5 mt-3">Votre inscription a été enregistrée avec succès.<br>
                Nous vous recontacterons bientôt.</p>
            <button class="btn btn-primary mt-4" @click="step = 1">Nouvelle inscription</button>
        </div>
    </template>
</section>

<script>
function RegisterProfessionnel() {
    return {
        step: 1,
        form: {
            nomComplet: '',
            numero: '',
            email: '',
            adresse: '',
            description: ''
        },
        errors: {},
        loading: false,

        formatPhone() {
            let numbers = this.form.numero.replace(/\D/g, '').substring(0,10);
            this.form.numero = numbers.replace(/(\d{2})(?=\d)/g, '$1 ').trim();
        },

        validateForm() {
            this.errors = {};
            if (!this.form.nomComplet.trim()) this.errors.nomComplet = "Le nom complet est obligatoire.";

            let digits = this.form.numero.replace(/\D/g, '');
            if (digits.length !== 10) this.errors.numero = "Le numéro doit contenir exactement 10 chiffres.";

            if (!this.form.email.trim()) this.errors.email = "L'email est obligatoire.";
            else if (!this.form.email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) this.errors.email = "L'email n'est pas valide.";

            if (!this.form.adresse.trim()) this.errors.adresse = "L'adresse est obligatoire.";

            if (!this.form.description.trim()) this.errors.description = "La description est obligatoire.";

            return Object.keys(this.errors).length === 0;
        },

        async submitForm() {
            if (!this.validateForm()) return;

            this.loading = true;

            try {
                let formData = new FormData();
                formData.append('nomComplet', this.form.nomComplet);
                formData.append('numero', this.form.numero.replace(/\D/g, ''));
                formData.append('email', this.form.email);
                formData.append('adresse', this.form.adresse);
                formData.append('description', this.form.description);

                let response = await fetch("{{ route('professionnels.store') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: formData
                });

                let data = await response.json();

                if (response.ok) {
                    this.form = {
                        nomComplet: '',
                        numero: '',
                        email: '',
                        adresse: '',
                        description: ''
                    };
                    this.step = 2;
                } else {
                    alert(data.message || "Une erreur est survenue.");
                }
            } catch (error) {
                console.error(error);
                alert("Erreur lors de l'envoi.");
            } finally {
                this.loading = false;
            }
        }
    }
}
</script>
@endsection
