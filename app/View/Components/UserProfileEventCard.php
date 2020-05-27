<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserProfileEventCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $events;

    public function __construct($events)
    {
        $this->events = $events;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.user-profile-event-card');
    }
}
