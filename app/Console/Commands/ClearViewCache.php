<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ClearViewCache extends Command
{
    protected $signature = 'view:clear-cache';
    protected $description = 'Clear cached views';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $viewCachePath = storage_path('framework/views');

        $files = File::files($viewCachePath);

        foreach ($files as $file) {
            File::delete($file);
        }

        $this->info('View cache cleared!');
    }
}
