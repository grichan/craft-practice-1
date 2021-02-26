<?php

/**
 * Plugin2 module for Craft CMS 3.x
 *
 * Plugin2
 *
 * @link      https://github.com/grichan/
 * @copyright Copyright (c) 2021 Vlad
 */

namespace modules\Plugin2Module\models;

use modules\Plugin2Module\Plugin2Module;

use Craft;
use craft\base\Model;

/**
 * Plugin2ModuleModel Model
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Vlad
 * @package   Plugin2Module
 * @since     1.0.0
 */
class Plugin2ModuleModel extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some model attribute
     *
     * @var string
     */
    public $someAttribute = 'Some Default';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['someAttribute', 'string'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }
}
