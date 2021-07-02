<?php declare(strict_types=1);

namespace Shonans\ValidateTest\Validator;

use Shonans\Validate\Validator\AbstractValidator;

/**
 * Class ClassValidator
 *
 * @package Shonan\ValidateTest\Validator
 */
class AdemoValidatorTest extends AbstractValidator
{
    /**
     * @param mixed $value
     * @param array $data
     *
     * @return bool
     */
    public function validate($value, array $data): bool
    {
        return $value === 1;
    }
}
