<?php

namespace App\Http\Livewire;

use App\Models\Mountain;
use Livewire\Component;

class DataBindingExample extends Component
{
    public string $search = '';

    public function getAvailableMountainsProperty()
    {
        return Mountain::query()
            ->when($this->search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%");
            })
            ->get();
    }

    public function render()
    {
        return view('livewire.data-binding-example');
    }
}
