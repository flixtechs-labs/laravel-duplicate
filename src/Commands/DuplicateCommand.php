<?php

namespace Flixtechs\Duplicate\Commands;

use Illuminate\Console\Command;

class DuplicateCommand extends Command
{
    public $signature = 'laravel-duplicate';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
