<?php

/**
 * Plugin2 module for Craft CMS 3.x
 *
 * Plugin2
 *
 * @link      https://github.com/grichan/
 * @copyright Copyright (c) 2021 Vlad
 */

namespace modules\Plugin2Module\services;

use modules\Plugin2Module\Plugin2Module;

use Craft;
use craft\base\Component;


/**
 * Plugin2ModuleService Service
 *
 * All of your module’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other modules can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Vlad
 * @package   Plugin2Module
 * @since     1.0.0
 */
class Plugin2ModuleService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin/module file, call it like this:
     *
     *     Plugin2Module::$instance->plugin2ModuleService->exampleService()
     *
     * @return mixed
     */
    public function list($params = [])
    {
        $items = [];



        return 'yes';
    }
}
