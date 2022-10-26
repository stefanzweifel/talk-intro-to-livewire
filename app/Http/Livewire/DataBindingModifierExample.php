<?php

namespace App\Http\Livewire;

use App\Models\Mountain;
use Livewire\Component;

class DataBindingModifierExample extends Component
{
    public string $search = 'Hello World';

    public function render()
    {
        return view('livewire.data-binding-modifier-example');
    }
}
