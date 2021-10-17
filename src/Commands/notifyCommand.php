<?php

namespace Marjose\notify\Commands;

use Illuminate\Console\Command;

class notifyCommand extends Command
{
    public $signature = 'laravel-bootstrap-notify';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
