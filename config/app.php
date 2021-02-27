<?php

/**
 * Yii Application Config
 *
 * Edit this file at your own risk!
 *
 * The array returned by this file will get merged with
 * vendor/craftcms/cms/src/config/app.php and app.[web|console].php, when
 * Craft's bootstrap script is defining the configuration for the entire
 * application.
 *
 * You can define custom modules and system components, and even override the
 * built-in system components.
 *
 * If you want to modify the application config for *only* web requests or
 * *only* console requests, create an app.web.php or app.console.php file in
 * your config/ folder, alongside this one.
 */

use craft\helpers\App;

return [
    'id' => App::env('APP_ID') ?: 'CraftCMS',
    'modules'   => [
        'site-module' => [
            'class' => \modules\SiteModule\SiteModule::class,

        ],
        'plugin2-module' => [
            'class' => \modules\Plugin2Module\Plugin2Module::class,
            'components' => [
                'Plugin2ModuleService' => [
                    'class' => modules\Plugin2Module\services\Plugin2ModuleService::class,
                ],
            ],
        ],
        'module3' => [
            'class' => \modules\module3\Module3::class,
            'components' => [
                'module3Service' => [
                    'class' => modules\module3\services\Module3Service::class,
                ],
            ],
        ],
    ],
    'bootstrap' => ['site-module', 'plugin2-module', 'module3'],
];
