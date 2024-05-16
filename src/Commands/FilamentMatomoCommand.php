<?php

namespace MarcoGermani87\FilamentMatomo\Commands;

use Illuminate\Console\Command;

class FilamentMatomoCommand extends Command
{
    public $signature = 'filament-matomo';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
