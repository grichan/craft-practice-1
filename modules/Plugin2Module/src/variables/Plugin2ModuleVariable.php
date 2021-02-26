<?php

/**
 * Plugin2 module for Craft CMS 3.x
 *
 * Plugin2
 *
 * @link      https://github.com/grichan/
 * @copyright Copyright (c) 2021 Vlad
 */

namespace modules\Plugin2Module\variables;

use modules\Plugin2Module\Plugin2Module;
use modules\Plugin2Module\plugin2ModuleService;

use Craft;

/**
 * Plugin2 Variable
 *
 * Craft allows modules to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.plugin2Module }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Vlad
 * @package   Plugin2Module
 * @since     1.0.0
 */
class Plugin2ModuleVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.plugin2Module.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.plugin2Module.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }

    public function newsList($params = [])
    {
        return Plugin2Module::$instance->Plugin2ModuleService->list();
    }
}
