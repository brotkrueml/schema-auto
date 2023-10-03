<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_auto" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaAuto\ViewHelpers\Type;

use Brotkrueml\Schema\Core\ViewHelpers\AbstractTypeViewHelper;

/**
 * A motorcycle or motorbike is a single-track, two-wheeled motor vehicle.
 */
final class MotorcycleViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'Motorcycle';
}
