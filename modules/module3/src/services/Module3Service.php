<?php
/**
 * Module3 module for Craft CMS 3.x
 *
 * Module3 practice
 *
 * @link      https://github.com/grichan
 * @copyright Copyright (c) 2021 Vlad
 */

namespace modules\module3\services;

use modules\module3\Module3;

use Craft;
use craft\base\Component;

/**
 * Module3Service Service
 *
 * All of your module’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other modules can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Vlad
 * @package   Module3
 * @since     1.0.0
 */
class Module3Service extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin/module file, call it like this:
     *
     *     Module3::$instance->module3Service->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
