<x-base-layout>
@push('styles')

@endpush
<section class="py-3 py-lg-3">
    <!-- container -->
    <div class="container my-lg-3">
        <div class="row">
            <!-- cols -->
            <div class="col-md-12 col-lg-5">
                <div class="mb-8">
                    <!-- title -->
                    <h3 class="mb-3 display-5 fw-bold">Pré-inscription, 2023-2024</h3>
                    <!-- text -->
                    <p class="mb-0">Choisissez votre programme et remplissez les informations requises.</p>
                </div>
            </div>
        </div>
        <div>
            @session('status')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
            @endsession
        </div>
        <!-- Form START -->
        <livewire:etudiants.form />
        <!-- Form END -->
    </div>
</section>
<!-- =======================
Main part END -->

@push('scripts')

@endpush
</x-base-layout>