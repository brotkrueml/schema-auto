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
 * A value indicating a special usage of a car, e.g. commercial rental, driving school, or as a taxi.
 */
final class CarUsageTypeViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'CarUsageType';
}
