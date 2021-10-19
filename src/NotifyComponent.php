<?php

namespace Marjose\notify;

use Illuminate\View\Component;

class NotifyComponent extends Component
{

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('notify::components.notify');
    }
}