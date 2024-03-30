<form class="row g-3" wire:submit.prevent="save">
    <h5 class="mb-0">Personal information</h5>
    <!-- First name -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Nom <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <input type="text" class="form-control @error('fname') is-invalid @enderror" wire:model="fname"
                    id="fname">
                @error('fname') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>
    <!-- Last name -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Prénom(s)</h6>
            </div>
            <div class="col-lg-8">
                <input type="text" class="form-control @error('lname') is-invalid @enderror" wire:model="lname"
                    id="lname">
                @error('lname') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>
    <!-- Sexe -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Sexe <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <div class="d-flex">
                    <div class="form-check radio-bg-light me-4">
                        <input class="form-check-input @error('sexe') is-invalid @enderror" type="radio" value="H"
                            wire:model="sexe" id="homme">
                        <label class="form-check-label" for="homme">Homme</label>
                        @error('sexe') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-check radio-bg-light">
                        <input class="form-check-input @error('sexe') is-invalid @enderror" value="F" type="radio"
                            wire:model="sexe" id="femme">
                        <label class="form-check-label" for="femme">Femme</label>
                        @error('sexe') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Date of birth -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Date de naissance</h6>
            </div>
            <div class="col-lg-8">
                <input type="date" class="form-control @error('birth') is-invalid @enderror" wire:model="birth"
                    placeholder="jj/mm/aaaa" id="birth">
                @error('birth') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Lieu de naissance</h6>
            </div>
            <div class="col-lg-8">
                <input type="text" class="form-control @error('birthLocation') is-invalid @enderror"
                    wire:model="birthLocation" id="birthLocation">
                @error('birthLocation') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- Email -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Email <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email"
                    id="email">
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- Phone number -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Téléphone <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <input type="text" class="form-control @error('phoneStudent') is-invalid @enderror"
                    wire:model="phoneStudent" id="phoneStudent">
                @error('phoneStudent') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- Home address -->
    <div class="col-12">
        <div class="row g-xl-0">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Adresse <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <textarea class="form-control @error('adresse') is-invalid @enderror" rows="3" wire:model="adresse"
                    placeholder=""></textarea>
                @error('adresse') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- City -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Ville <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <input type="text" class="form-control @error('city') is-invalid @enderror" wire:model="city" id="city">
                @error('city') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- Region -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Région <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <input type="text" class="form-control @error('region') is-invalid @enderror" wire:model="region"
                    id="region">
                @error('region') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- Country -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Pays <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <input type="text" class="form-control @error('country') is-invalid @enderror" wire:model="country"
                    id="country">
                @error('country') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- Zip code-->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Zip code <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <input type="text" class="form-control @error('zipCode') is-invalid @enderror" wire:model="zipCode"
                    id="zipCode">
                @error('zipCode') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- Divider -->
    <hr class="my-5">

    <!-- Parent detail -->
    <h5 class="mt-0">Parent detail</h5>

    <!-- Father name -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Nom de père <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <input type="text" class="form-control @error('fatherName') is-invalid @enderror"
                    wire:model="fatherName" id="fatherName">
                @error('fatherName') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- mother name -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Nom de mère <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <input type="text" class="form-control @error('motherName') is-invalid @enderror"
                    wire:model="motherName" id="motherName">
                @error('motherName') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- Phone number parent -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Téléphone parent <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <input type="text" class="form-control @error('phoneParent') is-invalid @enderror"
                    wire:model="phoneParent" id="phoneParent">
                @error('phoneParent') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- Parent address -->
    <div class="col-12">
        <div class="row g-xl-0">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Adresse des parents <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <textarea class="form-control @error('adresseParent') is-invalid @enderror" rows="3"
                    wire:model="adresseParent" placeholder=""></textarea>
                @error('adresseParent') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- Job title parent-->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Fonction de parent <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <input type="text" class="form-control @error('jobParent') is-invalid @enderror" wire:model="jobParent"
                    id="jobParent">
                @error('jobParent') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- Divider -->
    <hr class="my-5">

    <!-- Education -->
    <h5 class="mt-0">Education</h5>

    <!-- Photo d'identité -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Photo <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <input type="file" class="form-control @error('photo') is-invalid @enderror" wire:model="photo" rules="mimes:jpeg,png"
                    id="photo">
                @error('photo') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- Classe -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Niveau <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <select class="form-select z-index-9 @error('classeId') is-invalid @enderror" wire:model="classeId"
                    aria-label=".form-select-sm">
                    <option value="">--Select--</option>
                    @foreach(App\Models\Classe::all() as $classe)
                    <option value="{{ $classe->id }}">{{ $classe->name }}</option>
                    @endforeach
                </select>
                @error('classeId') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>
    <!-- Parcours -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Parcours <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <select class="form-select z-index-9 @error('parcourId') is-invalid @enderror" wire:model="parcourId"
                    aria-label=".form-select-sm">
                    <option value="">--Select--</option>
                    @foreach(App\Models\Parcour::all() as $parcour)
                    <option value="{{ $parcour->id }}">{{ $parcour->name }}</option>
                    @endforeach
                </select>
                @error('parcourId') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <!-- Button -->
    <div class="col-12 text-sm-end">
        <button type="submit" class="mb-0 btn btn-primary">Confirmer</button>
    </div>
</form>