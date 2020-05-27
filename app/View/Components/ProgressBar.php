<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProgressBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public $avg;
    public $event;

    public function __construct($event)
    {

        $this->event = $event;
        $this->avg = $event["current_participants"];

        $current = $event["current_participants"];
        $max = $event["max_participants"];

        $this->avg = ($current * 100) / $max;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.progress-bar');
    }
}
