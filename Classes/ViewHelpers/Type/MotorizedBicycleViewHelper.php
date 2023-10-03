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
 * A motorized bicycle is a bicycle with an attached motor used to power the vehicle, or to assist with pedaling.
 */
final class MotorizedBicycleViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'MotorizedBicycle';
}
