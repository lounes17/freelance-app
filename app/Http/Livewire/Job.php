<?php

namespace App\Http\Livewire;

use auth;
use Livewire\Component;

class Job extends Component
{
    public $job;
    public function addLike()
    { if (auth()->check()) {
        # code...
        auth()->user()->likes()->toggle($this->job->id);

    }else{
        $this->emit('flash', 'connecter d\'abord','Error');

    }
    }

    public function render()
    {
        return view('livewire.job');
    }
}
