<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: shonan
 * Date: 2017-11-07
 * Time: 10:04
 */

namespace Shonans\Validate;

/**
 * Class RuleValidation
 * - alias of the Validation
 * - one rule to many fields. like Yii 1/2 framework
 *
 * ```php
 * [
 *  ['field1, field2, ... ', 'validator', ...],
 *  ['field1, field3, ... ', 'validator', ...]
 * ]
 * ```
 *
 * @package Shonan\Validate
 */
class RuleValidation extends Validation
{
}
