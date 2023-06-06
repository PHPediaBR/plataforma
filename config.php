<?php

declare(strict_types=1);

return [
    /****************************************************************************************
     * Librarian main config
     * Values set here will overwrite default configuration from the /config dir.
     *****************************************************************************************/

    // Site Information
    'site_name' => envconfig('SITE_NAME', 'PHPédia'),
    'site_author' => envconfig('SITE_AUTHOR', 'PHPédia BR Team'),
    'site_description' => envconfig('SITE_DESC', 'PHPédia - enciclopédia colaborativa de PHP na língua portuguesa'),
    'site_url' => envconfig('SITE_URL', 'http://localhost:8000'),
    'site_root' => envconfig('SITE_ROOT', '/'),
    'site_about' => envconfig('SITE_ABOUT', 'page/about'),
    // Set site_index if you want a custom index page
    //'site_index' => 'getting-started/introduction',

    'posts_per_page' => 10,

    // Optional: Social links that show up on the top right
    'social_links' => [
        'Twitter' => envconfig('LINK_TWITTER', 'https://twitter.com/phpediabr'),
        'Github' => envconfig('LINK_GITHUB', 'https://github.com/PHPediaBR/plataforma'),
        'YouTube' => envconfig('LINK_YOUTUBE'),
        'LinkedIn' => envconfig('LINK_LINKEDIN'),
        'Twitch' => envconfig('LINK_TWITCH'),
    ],
    'templates_path' => getenv('THEME') ?: __DIR__ . '/app/Resources/themes/custom',
];
