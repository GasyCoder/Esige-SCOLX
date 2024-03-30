<?php

namespace App\Livewire\Matiere;

use App\Models\Matiere;
use App\Models\Parcour;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class MatiereForm extends Component
{   
    use LivewireAlert, WithPagination;
    protected $paginationTheme = 'bootstrap';

    #[Validate('required')] 
    public $name = '';
    public $sigle = '';
    public $teacher_id;
    public $classe_id;
    public $parcour_id;
    public $is_active;
    public $note;
    public $page = 10;
    public $matiereId;
    public $addForm, $updateForm = false;
    public $teacherCurrent;

    public function save()
    {   
        $this->validate(); 
        $matiere = Matiere::create([
            'name'              => $this->name,
            'teacher_id'        => $this->teacher_id,
            'classe_id'         => $this->classe_id,
            'is_active'         => $this->is_active ? true : false,
            'sigle'             => $this->sigle,
            'note'              => $this->note,
        ]);

        $matiere->parcours()->attach($this->parcour_id);

        $this->reset();
        //Toast
        $this->alert('success', 'Ajouté avec succèss');
        // dd($class);
    }

    public function edit($id)
    {
        $matiere = Matiere::findOrFail($id);
        $this->name             = $matiere->name;
        $this->classe_id        = $matiere->classe_id;
        $this->is_active        = $matiere->is_active ? true : false;
        $this->sigle            = $matiere->sigle;
        $this->note             = $matiere->note;
        $this->matiereId        = $id;
        $this->teacherCurrent   = $matiere->teacher->fullname;
    }

    public function updateTeacher()
    {
        $this->validate([
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        $teacher = Matiere::findOrFail($this->matiereId);
        $updateData = [
            'teacher_id' => $this->teacher_id,
        ];

        $teacher->update($updateData);
        $this->alert('success', 'Enseignant ajouté avec succès');
        return $this->redirect('/matieres');
    }

    public function update()
    {   
        $this->validate(); 
        $matiere = Matiere::findOrFail($this->matiereId);
        $updateData = [
            'name'              => $this->name,
            'classe_id'         => $this->classe_id,
            'is_active'         => $this->is_active ? true : false,
            'sigle'             => $this->sigle,
            'note'              => $this->note,
        ];
        $matiere->parcours()->sync($this->parcour_id);
        $matiere->update($updateData);
        //Toast
        $this->alert('success', 'Updated avec succèss');
        return $this->redirect('/matieres');
    }

    public function destroy($id)
    {
        $destroy = Matiere::find($id);
        $destroy->delete();
        $this->alert('success', 'Supprimé avec succèss');
        return $this->redirect('/matieres');
    }

    public function render()
    {   

        $title = 'Liste des matieres';
        
        return view('livewire.matieres.index', [
            'matieres'  => Matiere::orderBy('id', 'asc')->paginate($this->page),     
            'title'     => $title,
        ]);

    }
}
