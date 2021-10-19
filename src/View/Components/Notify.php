<?php

namespace Marjose\notify\View\Components;

use Illuminate\View\Component;

class Notify extends Component
{
    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('notify::components.notify');
    }
}
