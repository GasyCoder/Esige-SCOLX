<?php

namespace App\Livewire\Etudiants;
use Livewire\Component;
use App\Models\Etudiant;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class FetchAll extends Component
{   
    use LivewireAlert, WithPagination;

    public function active($id)
    {
        $student = Etudiant::findOrFail($id);
        if (!$student->number) {
            $autoNumber = rand(1111,9999);
            $student->number = $autoNumber;
        }
        $student->isActive = false;
        $student->save();
        $this->alert('success', 'Desactivé Etudiant!');
    }

    public function desactive($id)
    {   
        $student = Etudiant::findOrFail($id);
        $student->update([
            'isActive' => true,
        ]);
        $this->alert('success', 'Activé Etudiant!');
    }
    public function render()
    {
        return view('livewire.etudiants.listes', [
            'students'  => Etudiant::paginate(10),
        ]);
    }
}