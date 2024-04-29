<?php

namespace App\Livewire\Etudiants;

use Livewire\Component;
use App\Models\Etudiant;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Models\Classe;

class Form extends Component
{   
    use WithFileUploads;
    
    #[Validate('nullable|image|max:1024')]
    public $photo;
    public $isActive = false;
    public $typeFormation = true;
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
            'city' => 'required',
            'region' => 'required',
            'zipCode' => 'required',
            'fatherName' => 'required',
            'motherName' => 'required',
            'adresseParent' => 'required',
            'phoneParent' => 'required',
            'jobParent' => 'required',
            'classeId' => 'required',
            'parcourId' => 'required',
            'photo' => 'required',
            'cardFile' => 'required',
            'baccFile' => 'required',
            'otherFile' => 'required',
        ]);
        
        $etudiant = Etudiant::create([
            'isActive'              => false,
            'typeFormation'         => true,
            'fname'                 => $this->fname,
            'lname'                 => $this->lname,
            'sexe'                  => $this->sexe,
            'email'                 => $this->email,
            'phoneStudent'          => $this->phoneStudent,
            'birth'                 => $this->birth,
            'birthLocation'         => $this->birthLocation,
            'adresse'               => $this->adresse,
            'country'               => $this->country,
            'city'                  => $this->city,
            'region'                => $this->region,
            'zipCode'               => $this->zipCode,
            'fatherName'            => $this->fatherName,
            'motherName'            => $this->motherName,
            'adresseParent'         => $this->adresseParent,
            'phoneParent'           => $this->phoneParent,
            'jobParent'             => $this->jobParent,
            'classeId'              => $this->classeId,
            'parcourId'             => $this->parcourId,
        ]);
        if ($this->photo) {
            $etudiant->addMedia($this->photo->getRealPath())
                ->usingName('photo d\'identité pour ' .$etudiant->fname)
                ->toMediaCollection('pre_inscriptions_files');
        }
        if ($this->cardFile) {
            $etudiant->addMedia($this->cardFile->getRealPath())
                ->usingName('carte d\'identité pour ' .$etudiant->fname)
                ->toMediaCollection('pre_inscriptions_files');
        }
        if ($this->baccFile) {
            foreach ($this->baccFile as $file) {
                $etudiant->addMedia($file->getRealPath())
                    ->usingName('fichiers bacc ' . $etudiant->fname)
                    ->toMediaCollection('pre_inscriptions_files');
            }
        }
        if ($this->otherFile) {
            foreach ($this->otherFile as $file) {
                $etudiant->addMedia($file->getRealPath())
                    ->usingName('fichiers divers ' . $etudiant->fname)
                    ->toMediaCollection('pre_inscriptions_files');
            }
        }
        //dd($etudiant);
        $this->reset();
        session()->flash('status', 'Etudiant successfully saved.');
        return $this->redirect('/');
    }

    public function checkLevel()
    {
        $this->isL1 = $this->classeId == Classe::where('sigle', 'L1')->first()->id;
        //$this->isL1 = true;
    }


    public function render()
    {
        return view('livewire.etudiants.form');
    }
}
