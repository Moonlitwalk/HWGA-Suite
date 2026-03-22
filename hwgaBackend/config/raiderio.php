<?php

return [
    'base_url' => env('RAIDER_IO_BASE_URL', 'https://raider.io/api/v1'),
    'access_key' => env('RAIDER_IO_ACCESS_KEY'),
    'default_region' => env('RAIDER_IO_REGION', 'eu'),

    'groups' => [
        'general' => [
            'prefix' => '',
            'endpoints' => [
                'periods' => '/periods',
            ],
        ],

        'character' => [
            'prefix' => '/characters',
            'endpoints' => [
                'profile' => '/profile',
            ],
        ],

        'guild' => [
            'prefix' => '/guilds',
            'endpoints' => [
                'boss_kill' => '/boss-kill',
                'profile' => '/profile',
            ],
        ],

        'raiding' => [
            'prefix' => '/raiding',
            'endpoints' => [
                'boss_rankings' => '/boss-rankings',
                'hall_of_fame' => '/hall-of-fame',
                'progression' => '/progression',
                'raid_rankings' => '/raid-rankings',
                'static_data' => '/static-data',
            ],
        ],

        'mythic_plus' => [
            'prefix' => '/mythic-plus',
            'endpoints' => [
                'affixes' => '/affixes',
                'leaderboard_capacity' => '/leaderboard-capacity',
                'run_details' => '/run-details',
                'runs' => '/runs',
                'score' => '/score-tiers',
                'season-cutoffs' => '/season-cutoffs',
                'static_data' => '/static-data'
            ],
        ],
    ],
];
