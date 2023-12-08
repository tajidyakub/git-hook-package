<?php
namespace Tj\GitHook;

use Illuminate\Support\ServiceProvider;

class GitHookPackServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Merge configuration

    }

    public function boot(): void
    {
        // Publish config file
        // Append additional required env variables to base path .env
    }
}
