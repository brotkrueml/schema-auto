<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_auto" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaAuto\Model\Enumeration;

use Brotkrueml\Schema\Core\Model\EnumerationInterface;

/**
 * A value indicating a special usage of a car, e.g. commercial rental, driving school, or as a taxi.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum CarUsageType implements EnumerationInterface
{
    /**
     * Indicates the usage of the vehicle for driving school.
     */
    case DrivingSchoolVehicleUsage;

    /**
     * Indicates the usage of the vehicle as a rental car.
     */
    case RentalVehicleUsage;

    /**
     * Indicates the usage of the car as a taxi.
     */
    case TaxiVehicleUsage;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
