<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/config/site.yaml',
    'modified' => 1453582194,
    'data' => [
        'title' => 'Visual Fantasy',
        'author1' => [
            'name' => 'Matt Hong',
            'email' => 'mhong19414@gmail.com',
            'title' => 'Publisher',
            'url' => 'http://twitter.com/AllGoneMattHong'
        ],
        'author2' => [
            'name' => 'Ross Kulick',
            'email' => 'mhong19414@gmail.com',
            'title' => 'Editor-in-Chief',
            'url' => '#'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Fantasy Premier League + data vis'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => [
            '/redirect-test' => '/',
            '/old/(.*)' => '/new/$1'
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/new/(.*)' => '/blog/$1'
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'intro' => 'You should always think it’s possible, but it’s not easy.',
        'intro_avatar' => 'avatar.png',
        'menu' => NULL,
        'social' => [
            0 => [
                'icon' => 'send',
                'link' => 'mailto:afnizarhilmi@gmail.com'
            ],
            1 => [
                'icon' => 'twitter',
                'link' => 'http://twitter.com/flamekaizar'
            ],
            2 => [
                'icon' => 'dribbble',
                'link' => 'http://dribbble.com/flamekaizar'
            ],
            3 => [
                'icon' => 'behance',
                'link' => 'http://behance.com/flamekaizar'
            ]
        ]
    ]
];
