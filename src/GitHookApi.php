<?php
namespace Tj\GitHook;

use Illuminate\Support\Facades\Facade;
/**
 * @method bool enabled()
 * @method array getRequiredEnvVariables()
 * @method mixed config(?string $key = null)
 */
class GitHookApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return GitHookInterface::class;
    }
}
