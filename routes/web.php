<?php
use Laravel\Fortify\Fortify;
use App\Livewire\StudentsAll;
use App\Livewire\Classe\ClasseForm;
use App\Livewire\Etudiants\FetchAll;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Matiere\MatiereForm;
use App\Livewire\Parcour\ParcourForm;
use App\Livewire\Teacher\TeacherForm;
use Illuminate\Support\Facades\Route;

// Routes pour le frontend
Route::group(['domain' => 'esige.test'], function () {
    
    //Redirect to homepage
    Route::get('/', function () {
        return view('homepage');
    })->name('home');
   
});

// Routes pour le frontend pour VatoBe, autre site sous-domaine
Route::group(['domain' => 'scolx.esige.test'], function () {

    Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])->group(function () {
        
        Route::middleware(['role:admin'])->group(function () {

            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');

            Route::get('/etudiants', FetchAll::class)->name('etudiants');

            Route::get('/niveau-etude', ClasseForm::class)->name('classe');
            Route::get('/parcours', ParcourForm::class)->name('parcour');
            Route::get('/matieres', MatiereForm::class)->name('matiere');
            Route::get('/enseignants', TeacherForm::class)->name('enseignant');

        });

    });


    Route::redirect('/', '/login');
    Route::redirect('/register', '/login');

});


