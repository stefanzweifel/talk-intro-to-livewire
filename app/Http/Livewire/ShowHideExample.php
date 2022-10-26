<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowHideExample extends Component
{
    public bool $showMessage = false;

    public function toggle()
    {
        $this->showMessage = ! $this->showMessage;
    }

    public function render()
    {
        return view('livewire.show-hide-example');
    }
}
