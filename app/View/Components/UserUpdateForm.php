<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserUpdateForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public  $data;
    public function __construct($data)
    {
       $this->data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.user-update-form');
    }
}
