<?php
namespace Tj\GitHook;

use Illuminate\Support\Arr;

class GitHook implements GitHookInterface
{
    protected array $conf;

    public function __construct()
    {
        Arr::dot(config('git-hook'));
    }

    public function config(?string $key = null): mixed
    {
        $c = $this->conf;
        if ($key) $c = $this->conf[$key];
        return $c;
    }

    public function enabled(): bool
    {
        return false;
    }

    public function getRequiredEnvVariables(): array
    {
        return [
            'GIT_HOOK_ENABLED' => 0,
            'GIT_HOOK_SECRET' => '',
            'GIT_HOOK_LOG_ENABLED' => 0,
            'GIT_HOOK_LOG_CHANNEL' => 'stack'
        ];
    }

}
