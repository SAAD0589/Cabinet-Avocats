<?php

namespace App\Http\Livewire;
use App\Models\User;

use Livewire\Component;
use Livewire\WithPagination;
class AffichageUsers extends Component
{
     use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name;
    public $Specialise;
    public $email;
    public $tel;
    public $status;

    public function searchName()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = User::where('type_clt', '=', 'clt3')
        ->where('isDeleted',0)
            ->when($this->name, function ($query) {
                $query->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->name . '%')
                        ->orWhere('LastName', 'like', '%' . $this->name . '%');
                        
                });
            })
            ->when($this->Specialise, function ($query) {
                $query->where('Specialise', 'like', '%' . $this->Specialise . '%');
            })
            ->when($this->email, function ($query) {
                $query->where('email', 'like', '%' . $this->email . '%');
            })
            ->when($this->tel, function ($query) {
                $query->where('Tel_Portable', 'like', '%' . $this->tel . '%');
            })
            ->when($this->status, function ($query) {
                $query->where('status', 'like', '%' . $this->status . '%');
            })
            ->paginate(2);

        return view('livewire.affichage-users', ['data' => $query]);
    }
}
