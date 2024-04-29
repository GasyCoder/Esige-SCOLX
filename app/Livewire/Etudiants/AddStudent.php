<?php

namespace App\Livewire\Etudiants;
use Livewire\Component;
use App\Models\Etudiant;
use Livewire\WithPagination;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AddStudent extends Component
{   
    use LivewireAlert, WithPagination, WithFileUploads;
    
    #[Validate('nullable|image|max:1024')]
    public $photo;
    public $isActive = false;
    public $typeFormation;
    public $fname;
    public $lname;
    public $sexe;
    public $email;
    public $phoneStudent;
    public $birth;
    public $birthLocation;
    public $adresse;
    public $country;
    public $city;
    public $region;
    public $zipCode;
    public $fatherName;
    public $motherName;
    public $adresseParent;
    public $phoneParent;
    public $jobParent;
    public $classeId;
    public $parcourId;
    public $cardFile;
    public $baccFile, $otherFile = [];
    public $isL1 = false;

    public function save()
    {
        $this->validate([
            'fname' => 'required',
            'lname' => 'nullable',
            'sexe' => 'required',
            'email' => 'required|email|unique:etudiants',
            'phoneStudent' => 'required',
            'birth' => 'required',
            'birthLocation' => 'required',
            'adresse' => 'required',
            'country' => 'required',
            'classeId' => 'required',
        ]);
        $matricule = rand(1111,9999);
        $etudiant = Etudiant::create([
            'isActive'              => true,
            'typeFormation'         => $this->typeFormation ? true : false,
            'fname'                 => $this->fname,
            'lname'                 => $this->lname,
            'sexe'                  => $this->sexe,
            'email'                 => $this->email,
            'phoneStudent'          => $this->phoneStudent,
            'birth'                 => $this->birth,
            'birthLocation'         => $this->birthLocation,
            'adresse'               => $this->adresse,
            'country'               => $this->country,
            'classeId'              => $this->classeId,
            'parcourId'             => $this->parcourId,
            'number'                => $matricule,
        ]);
        //dd($etudiant);
        $this->reset();
        $this->alert('success', 'Etudiant successfully saved.');
        return redirect()->route('etudiants');
    }


    public function render()
    {
        return view('livewire.etudiants.add');
    }

}