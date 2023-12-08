<?php

namespace Tj\GitHook;

interface GitHookInterface
{
    /**
     * Get package state from the configuration.
     */
    public function enabled(): bool;

    /**
     * Get array of environment variables required.
     */
    public function getRequiredEnvVariables(): array;

    /**
     * Get package's configuration.
     */
    public function config(?string $key = null): mixed;
}
