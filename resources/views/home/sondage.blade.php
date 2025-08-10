@include('layout.head')

<main class="page-wrapper">
    <div class="d-lg-flex position-relative h-100">

        <!-- Home button -->
        <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4"
            href="/" data-bs-toggle="tooltip" data-bs-placement="left" title="Retourner à la page d'accueil"
            aria-label="Retourner à la page d'accueil">
            <i class="ai-home"></i>
        </a>

        <!-- Sign up form -->
        <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5" x-data="formSteps()">
            <div class="w-100 mt-auto" style="max-width: 526px;">
                <h1>Moyo Éducation — Inscription</h1>
                <p class="pb-3 mb-3 mb-lg-4">
                    Rejoignez Moyo et facilitez la scolarité des enfants en Côte d’Ivoire grâce à nos services
                    numériques et financiers adaptés à chaque profil.
                </p>

                <!-- Step 0: Choix du profil -->
                <div x-show="step === 0">
                    <h3 class="pb-3">Qui êtes-vous ?</h3>
                    <div class="list-group mb-4">
                        <button type="button" class="list-group-item list-group-item-action" @click="selectType('local')">
                            👨‍👩‍👧 Parent en Côte d'Ivoire
                            <small class="d-block text-muted">
                                Frais d’ouverture : 2 000 FCFA (inclut carte digitale MOYO + compte digital partenaire).
                            </small>
                        </button>
                        <button type="button" class="list-group-item list-group-item-action" @click="selectType('diaspora')">
                            🌍 Parent ivoirien vivant à l’étranger
                            <small class="d-block text-muted">
                                Frais d’ouverture : 2 000 FCFA (mêmes avantages que les parents locaux, gestion à distance).
                            </small>
                        </button>
                        <button type="button" class="list-group-item list-group-item-action" @click="selectType('encadreur')">
                            📚 Encadreur / Formateur / Enseignant
                            <small class="d-block text-muted">
                                Frais d’inscription : 5 000 FCFA (accès à l’application + avantages Moyo).
                            </small>
                        </button>
                    </div>
                </div>

                <!-- Step 1 -->
                <div x-show="step === 1" style="display:none;">

                    <!-- Bouton Retour -->
                    <button type="button" class="btn btn-outline-secondary mb-3" @click="previousStep()">
                        ← Retour
                    </button>

                    <template x-if="type === 'local'">
                        <p class="alert alert-info">
                            Vous inscrivez en tant que parent vivant en Côte d'Ivoire.
                            Frais d’ouverture : <strong>2 000 FCFA</strong> — inclut la carte digitale MOYO et un compte digital chez notre partenaire financier.
                        </p>
                    </template>
                    <template x-if="type === 'diaspora'">
                        <p class="alert alert-warning">
                            Vous inscrivez en tant que parent ivoirien vivant à l’étranger.
                            Frais d’ouverture : <strong>2 000 FCFA</strong> — mêmes avantages que les parents locaux, gestion et paiement à distance.
                        </p>
                    </template>
                    <template x-if="type === 'encadreur'">
                        <p class="alert alert-success">
                            Vous inscrivez en tant qu’encadreur ou enseignant.
                            Frais d’inscription : <strong>5 000 FCFA</strong> — vous êtes répertorié dans l’application et profitez des avantages MOYO.
                        </p>
                    </template>

                    <h3 class="pb-3">Étape 1 : Informations personnelles</h3>
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col mb-4">
                            <input type="text" class="form-control form-control-lg" placeholder="Nom"
                                x-model="formData.nom" required>
                        </div>
                        <div class="col mb-4">
                            <input type="text" class="form-control form-control-lg" placeholder="Prénom"
                                x-model="formData.prenom" required>
                        </div>
                        <div class="col mb-4">
                            <input type="email" class="form-control form-control-lg" placeholder="Email"
                                x-model="formData.email" required>
                        </div>
                        <div class="col mb-4">
                            <input type="tel" class="form-control form-control-lg" placeholder="Téléphone"
                                x-model="formData.telephone" required>
                        </div>
                        <div class="col mb-4">
                            <input type="text" class="form-control form-control-lg"
                                :placeholder="type === 'diaspora' ? 'Adresse à l’étranger' : 'Adresse en Côte d’Ivoire'"
                                x-model="formData.adresse" required>
                        </div>
                        <div class="col mb-4" x-show="type !== 'encadreur'">
                            <input type="number" class="form-control form-control-lg"
                                placeholder="Nombre d'enfants au secondaire" x-model="formData.nb_enfant" required>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary w-100 mb-4" @click="nextStep()">Valider</button>
                </div>

                <!-- Étapes suivantes inchangées -->

            </div>

            <!-- Copyright -->
            <p class="nav w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;">
                <span class="text-body-secondary">&copy; Tous droits réservés. Fait par</span>
                <a class="nav-link d-inline-block p-0 ms-1" href="https://myoo.com" target="_blank"
                    rel="noopener">Moyo Edu finance sarl</a>
            </p>
        </div>

        <!-- Cover image -->
        <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center"
            style="background-image: url('{{ asset('education-2.jpg') }}');">
        </div>
    </div>
</main>

@include('layout.script')

<script>
    function formSteps() {
        return {
            step: 0,
            type: '',
            formData: {
                nom: '', prenom: '', email: '', telephone: '',
                adresse: '', nb_enfant: '',
                piece_avant: null, piece_arriere: null, photo_assure: null,
                piece_avantPreview: null, piece_arrierePreview: null, photo_assurePreview: null,
                acceptConditions: false, loading: false,
            },
            message: '',
            messageType: '',
            selectType(type) {
                this.type = type;
                this.step = 1;
            },
            nextStep() { this.step++; },
            previousStep() { this.step = 0; },
            handleFileChange(event, type) {
                const file = event.target.files[0];
                if (!file) return;
                const reader = new FileReader();
                reader.onloadend = () => this.formData[type + 'Preview'] = reader.result;
                reader.readAsDataURL(file);
            },
            triggerFileInput(type) { document.getElementById(type).click(); },
            async submitForm() {
                this.formData.loading = true;
                const fd = new FormData();
                Object.keys(this.formData).forEach(k => {
                    if (this.formData[k] !== null) fd.append(k, this.formData[k]);
                });
                fd.append('type', this.type);

                try {
                    const res = await fetch('{{ route('clients.store') }}', {
                        method: 'POST',
                        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                        body: fd
                    });
                    const result = await res.json();
                    if (res.ok) {
                        this.message = result.message;
                        this.messageType = result.existe ? 'alert-danger' : 'alert-success';
                        if (!result.existe) window.location.href = result.signature;
                    } else {
                        this.message = 'Erreur serveur, réessayez dans 2 minutes.';
                        this.messageType = 'alert-danger';
                    }
                } catch (e) {
                    this.message = 'Erreur réseau.';
                    this.messageType = 'alert-danger';
                } finally {
                    this.formData.loading = false;
                }
            }
        };
    }
</script>
