<?php

namespace Tj\GitHook;

use Illuminate\Support\ServiceProvider;

class GitHookPackServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Merge configuration
        // Bind package api

    }

    public function boot(): void
    {
        // Publish config file
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/git-hook.php' => config_path('git-hook.php'),
            ], 'config');
        }

        // Append additional required env variables to base path .env
        $appEnv = file_get_contents(base_path('.env'));
        $appendedEnv = '';
        $envArr = GitHookApi::getRequiredEnvVariables();
        foreach ($envArr as $k => $v) {
            if (! str($appEnv)->contains($k)) {
                $appendedEnv .= "{$k}={$v}".PHP_EOL;
            }
        }
        $fh = fopen(base_path('.env'), 'a');
        fwrite($fh, $appendedEnv);
        fclose($fh);
    }
}
