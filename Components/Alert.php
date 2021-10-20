<?php

namespace Marjose\notify\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('notify::components.notify');
    }
}
