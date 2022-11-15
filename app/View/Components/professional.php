<?php

namespace App\View\Components;

use Illuminate\View\Component;

class professional extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $currentUser;
    public $user;

    public function __construct($currentUser,$user)
    {
        $this->currentUser = $currentUser;
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.professional');
    }
}
