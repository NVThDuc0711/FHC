<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Test extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $type;
    public $message;
    public function __construct($type='success',$message = 'Hello')
    {
        $this->type= $type;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.test');
    }
}
