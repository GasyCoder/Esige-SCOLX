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
        $student->isActive = true;
        $student->save();
        $this->alert('success', 'Desactivé Etudiant!');
    }

    public function desactive($id)
    {   
        $student = Etudiant::findOrFail($id);
        $student->update([
            'isActive' => false,
        ]);
        $this->alert('success', 'Activé Etudiant!');
    }
    public function render()
    {
        return view('livewire.etudiants.listes', [
            'students'  => Etudiant::query()
            ->withoutTrashed()
            ->latest()
            ->paginate(10),
        ]);
    }


    public function delete($id)
    {
        $student = Etudiant::findOrFail($id);

        $student->delete();

        $this->alert('success', 'Etudiant en corbeille !');
    }

    public function restore($id)
    {
        $student = Etudiant::onlyTrashed()->findOrFail($id);

        $student->restore();

        $this->alert('success', 'Etudiant a été restauré!');
    }

    public function forceDelete($id)
    {
        $student = Etudiant::onlyTrashed()->findOrFail($id);

        $student->forceDelete();

        $this->alert('success', 'Etudiant a été supprimé définitivement!');
    }
}