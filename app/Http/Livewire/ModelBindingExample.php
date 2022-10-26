<?php

namespace App\Http\Livewire;

use App\Models\Mountain;
use Livewire\Component;

class ModelBindingExample extends Component
{
    public ?Mountain $mountain = null;

    protected $rules = [
        'mountain.name' => 'required|string|min:6',
        'mountain.height' => 'required|string|max:500',
    ];

    public function mount()
    {
        $this->mountain = new Mountain();
    }

    public function save()
    {
        $this->validate();

        dd($this->mountain->toArray());
    }

    public function render()
    {
        return view('livewire.model-binding-example');
    }
}
