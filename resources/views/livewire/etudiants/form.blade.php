<!-- form -->
<form class="needs-validation" novalidate wire:submit.prevent="save">
    <div class="row">
        <!-- col -->
        <div class="col-lg-4 col-md-4 col-12">
            <div class="mb-4">
                <div class="mb-4">
                    <!-- icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                        class="bi bi-person text-primary" viewBox="0
            0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0
                6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4
                8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6
                4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516
                10.68 10.289 10 8 10c-2.29
                0-3.516.68-4.168 1.332-.678.678-.83
                1.418-.832 1.664h10z" />
                    </svg>
                </div>
                <!-- heading -->
                <h3>1. Informations personnelles</h3>
                <p>Veuillez fournir vos informations personnelles ci-dessous.</p>
            </div>
        </div>
        <div class="offset-lg-1 col-lg-7 col-md-8 col-12">
            <div>
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="mb-3 col-12 col-md-6">
                        <!-- label -->
                        <label class="form-label" for="fname">
                            Nom
                            <span class="text-danger">*</span>
                        </label>
                        <!-- input -->
                        <input type="text" id="fname" wire:model="fname" class="form-control" placeholder="Nom" />
                        @error('fname') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <!-- label -->
                        <label class="form-label" for="lname">
                            Prénom(s)
                        </label>
                        <!-- input -->
                        <input type="text" id="lname" wire:model="lname" class="form-control" placeholder="Prénom(s)" />
                        @error('lname') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3 col-12 col-md-12">
                        <div class="d-flex border p-2">
                            <div class="form-check radio-bg-light me-4">
                                <input class="form-check-input @error('sexe') is-invalid @enderror" type="radio" value="H" wire:model="sexe"
                                    id="homme">
                                <label class="form-check-label" for="homme">Homme</label>
                                @error('sexe') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-check radio-bg-light">
                                <input class="form-check-input @error('sexe') is-invalid @enderror" value="F" type="radio" wire:model="sexe"
                                    id="femme">
                                <label class="form-check-label" for="femme">Femme</label>
                                @error('sexe') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <!-- label -->
                        <label class="form-label" for="lname">
                            Date de naissance
                            <span class="text-danger">*</span>
                        </label>
                        <!-- input -->
                        <input type="date" class="form-control @error('birth') is-invalid @enderror" wire:model="birth" placeholder="jj/mm/aaaa"
                            id="birth">
                        @error('birth') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <div class="row g-xl-0 align-items-center">
                            <label class="form-label" for="lname">
                                Lieu de naissance
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control @error('birthLocation') is-invalid @enderror"
                            placeholder="Lieu de naissance" 
                            wire:model="birthLocation"
                                id="birthLocation">
                            @error('birthLocation') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <!-- label -->
                        <label class="form-label" for="email">
                            Email
                            <span class="text-danger">*</span>
                        </label>
                        <!-- input -->
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                        placeholder="Adresse email"
                        wire:model="email" id="email">
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                   <div class="mb-3 col-12 col-md-6">
                        <!-- label -->
                        <label class="form-label" for="phone">
                            Numéro de téléphone
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control @error('phoneStudent') is-invalid @enderror" 
                        placeholder="Téléphone"
                        wire:model="phoneStudent"
                            id="phoneStudent">
                        @error('phoneStudent') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3 col-12 col-md-12">
                        <!-- label -->
                        <label class="form-label">
                            Adresses
                            <span class="text-danger">*</span>
                        </label>
                        <!-- textarea -->
                       <textarea class="form-control @error('adresse') is-invalid @enderror" rows="2"
                       placeholder="Adresses exacte"
                       wire:model="adresse"
                        placeholder=""></textarea>
                    @error('adresse') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <div class="row g-xl-0 align-items-center">
                            <label class="form-label" for="lname">
                                Pays
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control @error('coutnry') is-invalid @enderror"
                            placeholder="Pays" 
                            wire:model="country" id="country">
                            @error('country') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <!-- label -->
                        <label class="form-label" for="email">
                            Zip-Code
                            <span class="text-danger">*</span>
                        </label>
                        <!-- input -->
                        <input type="text" class="form-control @error('zipCode') is-invalid @enderror" 
                        placeholder="Code Postal"
                        wire:model="zipCode" id="zipCode">
                        @error('zipCode') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <div class="row g-xl-0 align-items-center">
                            <label class="form-label" for="lname">
                                Ville
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" 
                            placeholder="Ville"
                            wire:model="city" id="city">
                            @error('city') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <!-- label -->
                        <label class="form-label" for="email">
                            Région
                            <span class="text-danger">*</span>
                        </label>
                        <!-- input -->
                        <input type="text" class="form-control @error('region') is-invalid @enderror" 
                        placeholder="Région"
                        wire:model="region" id="region">
                        @error('region') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- hr -->
    <hr class="my-8" />
    <!-- row -->
    <div class="row">
        <!-- col -->
        <div class="col-lg-4 col-md-4 col-12">
            <div class="mb-4">
                <div class="mb-4">
                    <!-- icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                        class="bi bi-info-circle text-primary" viewBox="0 0 16
                16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0
                8 0a8 8 0 0 0 0 16z" />
                        <path d="m8.93
                    6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738
                    3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252
                    1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275
                    0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0
                    1 1 0 0 1 2 0z" />
                    </svg>
                </div>
                <!-- heading -->
                <h3>2. Détails des parents</h3>
                <!-- text -->
                <p>Veuillez fournir les détails des parents ci-dessous.</p>
            </div>
        </div>
        <div class="offset-lg-1 col-lg-7 col-md-8 col-12">
            <div>
                <!-- row -->
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <!-- label -->
                        <label class="form-label" for="fatherName">
                           Nom de père
                            <span class="text-danger">*</span>
                        </label>
                        <!-- input -->
                        <input type="text" class="form-control @error('fatherName') is-invalid @enderror" 
                        placeholder="Nom de père"
                        wire:model="fatherName"
                        id="fatherName">
                        @error('fatherName') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <!-- label -->
                        <label class="form-label" for="motherName">
                            Nom de mère
                            <span class="text-danger">*</span>
                        </label>
                        <!-- input -->
                        <input type="text" class="form-control @error('motherName') is-invalid @enderror" 
                        placeholder="Nom de mère"
                        wire:model="motherName"
                        id="motherName">
                        @error('motherName') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <!-- label -->
                        <label class="form-label" for="phoneParent">Téléphone</label>
                        <!-- input -->
                        <input type="text" class="form-control @error('phoneParent') is-invalid @enderror" 
                        placeholder="Nom de père"
                        wire:model="phoneParent"
                        id="phoneParent">
                        @error('phoneParent') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <!-- label -->
                        <label class="form-label" for="phoneParent">Fonction de parent</label>
                        <!-- input -->
                        <input type="text" class="form-control @error('jobParent') is-invalid @enderror"
                        placeholder="Fonction" 
                        wire:model="jobParent" id="jobParent">
                        @error('jobParent') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3 col-12 col-md-12">
                        <!-- label -->
                        <label class="form-label">Adresses pareents</label>
                        <!-- textarea -->
                        <textarea class="form-control @error('adresseParent') is-invalid @enderror" 
                        rows="2" wire:model="adresseParent"
                        placeholder="Adresses des parents ou répondant"></textarea>
                        @error('adresseParent') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-8" />
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="mb-4">
                <div class="mb-4">
                    <!-- icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" 
                    class="bi bi-file-earmark-pdf text-primary"
                        viewBox="0 0 16 16">
                        <path
                            d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                        <path
                            d="M4.603 14.087a.8.8 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.7 7.7 0 0 1 1.482-.645 20 20 0 0 0 1.062-2.227 7.3 7.3 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a11 11 0 0 0 .98 1.686 5.8 5.8 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.86.86 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.7 5.7 0 0 1-.911-.95 11.7 11.7 0 0 0-1.997.406 11.3 11.3 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.8.8 0 0 1-.58.029m1.379-1.901q-.25.115-.459.238c-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361q.016.032.026.044l.035-.012c.137-.056.355-.235.635-.572a8 8 0 0 0 .45-.606m1.64-1.33a13 13 0 0 1 1.01-.193 12 12 0 0 1-.51-.858 21 21 0 0 1-.5 1.05zm2.446.45q.226.245.435.41c.24.19.407.253.498.256a.1.1 0 0 0 .07-.015.3.3 0 0 0 .094-.125.44.44 0 0 0 .059-.2.1.1 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a4 4 0 0 0-.612-.053zM8.078 7.8a7 7 0 0 0 .2-.828q.046-.282.038-.465a.6.6 0 0 0-.032-.198.5.5 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822q.036.167.09.346z" />
                    </svg>
                </div>
                <!-- heading -->
                <h3>3. Pièces jointes</h3>
                <!-- text -->
                <p>Merci de fournir les pièces jointes requises ci-dessous.</p>
            </div>
        </div>
        <div class="offset-lg-1 col-lg-7 col-md-8 col-12">
            <div>
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <!-- label -->
                        <label class="form-label" for="parcourId">
                            Niveau choisir
                            <span class="text-danger">*</span>
                        </label>
                        <!-- select menu -->
                        <select class="form-select z-index-9 @error('classeId') is-invalid @enderror" 
                            wire:model="classeId"
                            aria-label=".form-select-sm" wire:change.live="checkLevel()">
                            <option value="">--Select--</option>
                            @foreach(App\Models\Classe::all() as $classe)
                            <option value="{{ $classe->id }}">{{ $classe->name }}</option>
                            @endforeach
                        </select>
                        @error('classeId') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <!-- label -->
                        <label class="form-label" for="parcourId">
                            Parcours choisir
                            <span class="text-danger">*</span>
                        </label>
                        <!-- select menu -->
                       <select class="form-select z-index-9 @error('parcourId') is-invalid @enderror" 
                            wire:model="parcourId"
                            aria-label=".form-select-sm">
                            <option value="">--Select--</option>
                            @foreach(App\Models\Parcour::all() as $parcour)
                            <option value="{{ $parcour->id }}">{{ $parcour->name }}</option>
                            @endforeach
                        </select>
                        @error('parcourId') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3 col-12 col-md-12">
                        <!-- label -->
                        <label class="form-label">Photo d'identité
                            <span class="text-danger">*</span>
                        </label>
                        <!-- input group -->
                        <div class="mb-2 input-group">
                            <input type="file" class="form-control @error('photo') is-invalid @enderror" wire:model="photo" id="photo" rules="mimes:jpeg,png" />
                            <!-- input group text -->
                            @error('photo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <!-- text -->
                        <span class="fs-6">La photo doit être un fichier PNG ou JPG de 500 x 500 pixels</span>
                    </div>

                    <div class="mb-3 col-12 col-md-12">
                        <!-- label -->
                        <label class="form-label">Carte d'identité/passeport/carte de séjour
                            <span class="text-danger">*</span>
                        </label>
                        <!-- input group -->
                        <div class="mb-2 input-group">
                            <input type="file" class="form-control @error('cardFile') is-invalid @enderror" wire:model="cardFile" id="cardFile"/>
                            <!-- input group text -->
                            @error('cardFile') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="mb-3 col-12 col-md-12">
                        <!-- label -->
                        <label class="form-label">Diplôme du Baccalauréat ou équivalent
                            <span class="text-danger">*</span>
                        </label>
                        <!-- input group -->
                        <div class="mb-2 input-group">
                            <input type="file" class="form-control @error('baccFile') is-invalid @enderror" 
                            wire:model="baccFile" id="baccFile" multiple/>
                            <!-- input group text -->
                            @error('baccFile') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    @if (!$isL1)
                    <div class="mb-3 col-12 col-md-12">
                        <!-- label -->
                        <label class="form-label">Relevés de notes ou diplômes Universitaire
                            <span class="text-danger">*</span>
                        </label>
                        <!-- input group -->
                        <div class="mb-2 input-group">
                            <input type="file" class="form-control @error('otherFile') is-invalid @enderror" wire:model="otherFile" id="otherFile" multiple/>
                            <!-- input group text -->
                            @error('otherFile')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    @endif

                    <div class="mb-5 col-12 col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"
                                required />
                            <label class="form-check-label" for="flexCheckDefault">
                                J'accepte le
                                <a href="#">termes et conditions</a>
                                pour soumetre mes informations sur ce site.
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <button type="submit" class="btn btn-primary">Soumettre le demande</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



