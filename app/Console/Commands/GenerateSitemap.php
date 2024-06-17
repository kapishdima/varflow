<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\URL;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml file for the website.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        SitemapGenerator::create(env('APP_URL', 'http://localhost'))
            ->writeToFile(public_path('sitemap.xml'));
    }
}
