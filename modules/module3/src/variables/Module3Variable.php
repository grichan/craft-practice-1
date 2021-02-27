<?php
/**
 * Module3 module for Craft CMS 3.x
 *
 * Module3 practice
 *
 * @link      https://github.com/grichan
 * @copyright Copyright (c) 2021 Vlad
 */

namespace modules\module3\variables;

use modules\module3\Module3;

use Craft;

/**
 * Module3 Variable
 *
 * Craft allows modules to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.module3 }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Vlad
 * @package   Module3
 * @since     1.0.0
 */
class Module3Variable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.module3.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.module3.exampleVariable(twigValue) }}
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
}
