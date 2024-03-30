<x-base-layout>
@push('styles')

@endpush
<section>
    <div class="container">
        <div class="row g-5 justify-content-between">
            <!-- Admission form START -->
            <div class="mx-auto col-md-8">
                <!-- Title -->
                <h2 class="mb-3">Apply for Admission</h2>
                <p>You can apply online by filling up below form or <a href="#">Download a pdf</a> and submit. Any
                    question related admission process, please contact our admission office at <a href="#">+123 456
                        789</a> or <a href="#">example@email.com</a>.</p>
                <p class="mb-1">Before you proceed with the form please read below topics:</p>
                <ul class="ps-3">
                    <li>Application fee is $49</li>
                    <li>Fees are non-refundable</li>
                    <li>Field required with <span class="text-danger">*</span> are required to complete the admission
                        form</li>
                </ul>
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
            <!-- Admission form END -->
        </div>
    </div>
</section>
<!-- =======================
Main part END -->

@push('scripts')

@endpush
</x-base-layout>