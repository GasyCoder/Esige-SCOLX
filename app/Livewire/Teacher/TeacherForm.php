<?php

namespace App\Livewire\Teacher;

use App\Models\User;
use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TeacherForm extends Component
{
    use LivewireAlert, AuthorizesRequests, WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page = 10;
    public $fullname, $email, $phone, $sexe, $grade;
    public $teacherId;

    public function save()
    {
        // Vérifiez si les variables nécessaires sont définies
        if (!isset($this->email)) {
            $this->alert('warning', 'Email ou mot de passe manquant!');
            return;
        }

        // Vérifiez si l'email est unique
        if (Teacher::where('email', $this->email)->exists()) {
            $this->alert('warning', 'Cet email est déjà utilisé!');
            return;
        }

        $teacher = Teacher::create([
            'email'                 => $this->email,
            'fullname'              => $this->fullname,
            'grade'              => $this->grade,
            'phone'                 => $this->phone,
            'sexe'                  => $this->sexe,
        ]);

        $this->alert('success', 'Compte a été crée avec succèss!');
        $this->redirect('/enseignants');
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        $this->fullname     = $teacher->fullname;
        $this->email        = $teacher->email;
        $this->grade     = $teacher->grade;
        $this->phone        = $teacher->phone;
        $this->sexe         = $teacher->sexe;
        $this->teacherId    = $id;
    }

    public function update()
    {
        // Assurez-vous que vous mettez à jour le bon utilisateur
        $teacher = Teacher::where('id', $this->teacherId)->first();
        if (!$teacher) {
            $this->alert('warning : Utilisateur non trouvé!');
            return;
        }
        $teacher->update([
            'email'                 => $this->email,
            'fullname'              => $this->fullname,
            'grade'              => $this->grade,
            'phone'                 => $this->phone,
            'sexe'                  => $this->sexe,
        ]);

        $this->alert('success', 'Information a été à jour avec succèss!');
        $this->redirect('/enseignants');
    }

    public function delete($teacherId)
    {
        $teacher = Teacher::findOrFail($teacherId);
        $teacher->delete();
        $this->alert('success', 'Supprimé avec succèss');
        return $this->redirect('/user-teachers');
    }


    public function render()
    {
        $title = 'Enseignants';
        return view('livewire.teachers.index', [
            'teachers'  => Teacher::latest()->paginate($this->page),     
            'title'     => $title,
        ]);
    }
}
