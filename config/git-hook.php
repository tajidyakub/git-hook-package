<?php

return [
    /**
     * Set enabled to `1` or true to enable webhook route.
     */

    'enabled' => env('GIT_HOOK_ENABLED', 0),

    /**
     * Secret key generated when the webhook was created in github.
     * An Exception will be throwed if not configured.
     */

    'github' => [
        'secret' => env('GIT_HOOK_SECRET', null)
    ],

    /**
     * Configuration to enables logging of each incoming requests
     * to the channel provided.
     */

    'log' => [
        'enabled' => env('GIT_HOOK_LOG_ENABLED', 0),
        'channel' => env('GIT_HOOK_LOG_CHANNEL'. 'stack')
    ],

    /**
     * Command(s) to execute once an update notification received.
     * A Command which executes `git update` is provided, you can remove it
     * and leave the array empty to not executes anything.
     */

    'commands' => [],

    'route' => [
        'name' => 'git-hook.v1',
        'path' => 'api/v1/git-hook'
    ],

    /**
     * List of repository's branches to watch on an update request.
     * Command will not be executed if the update is on an unwatched branch.
     */

    'watches' => [
        'branches' => [
            'main'
        ]
    ],
];
