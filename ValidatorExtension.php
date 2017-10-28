<?php

declare(strict_types=1);

/*
 * This file is part of the RollerworksSearch package.
 *
 * (c) Sebastiaan Stok <s.stok@rollerscapes.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Rollerworks\Component\Search\Extension\Symfony\Validator;

use Rollerworks\Component\Search\AbstractExtension;

/**
 * @author Sebastiaan Stok <s.stok@rollerscapes.net>
 */
final class ValidatorExtension extends AbstractExtension
{
    protected function loadTypesExtensions(): array
    {
        return [
            new Type\FieldTypeValidatorExtension(),
        ];
    }
}
