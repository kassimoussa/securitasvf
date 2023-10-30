<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminToggle extends Component
{
    public $sbtn = 1;

    public function focus($i)
    {
        $this->sbtn = $i;
    }
   public function render()
    {
        return view('livewire.admin-toggle');
    }
}
