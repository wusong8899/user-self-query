<?php

use Flarum\Extend;
use Ex\userSelfQuery\Controller\UserSelfQueryIndexController;

$extend = [
    (new Extend\Frontend('admin'))->js(__DIR__.'/js/dist/admin.js'),
    (new Extend\Frontend('forum'))->js(__DIR__ . '/js/dist/forum.js')->css(__DIR__.'/less/forum.less')
        ->route('/userSelfQuery', 'userSelfQuery.index', UserSelfQueryIndexController::class),

    (new Extend\Locales(__DIR__ . '/locale')),

    (new Extend\Settings())
        ->serializeToForum('userSelfQueryUrl', 'user-self-query.userSelfQueryUrl'),
];

return $extend;