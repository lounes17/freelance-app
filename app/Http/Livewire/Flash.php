<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Flash extends Component
{
    public $message;
    public $type;
    public $colors=[
        "Error"=>"background-color: #FEE2E2;border: 1px solid #b91c1c;color: #b91c1c;",
        "Success"=>"background-color: #DCFCE7;border: 1px solid #15803D;color: #15803D;",
        'Warning'=>'background-color: #FEE;
        border: 1px solid #EDD;
        color: #;'
    ];
    
    protected $listeners = ['flash' => 'setMessageFlash'];

  


    public function setMessageFlash($message, $type)

    {

        $this->message = $message;
        $this->type = $type;

        $this->dispatchBrowserEvent('flash-message');

    }
    public function render()
    {
        return view('livewire.flash');
    }
}
