<?php
return (function () {
    $id = '([1-9]+\d*)';

    return [
        [
            'test' => '/^$/',
            'controller' => 'all',
            'params' => null,
        ],
        [
            'test' => '/^table\/?$/',
            'controller' => 'index',
            'params' => ['table' => 0]
        ],
        [
            'test' => '/^add$/',
            'controller' => 'add',
            'params' => null,
        ],
        [
            'test' => '/^contacts\/?$/',
            'controller' => 'contacts',
            'params' => null,
        ],
        [
            'test' => '/^message\/' . $id . '\/?$/',
            'controller' => 'message',
            'params' => ['id' => 1],
        ],
        [
            'test' => '/^edit\/' . $id . '\/?$/',
            'controller' => 'edit',
            'params' => ['id' => 1],
        ],
        [
            'test' => '/^delete\/' . $id . '\/?$/',
            'controller' => 'delete',
            'params' => ['id' => 1],
        ],

    ];
})();
