<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_auto" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaAuto\Model\AdditionalProperties;

use Brotkrueml\Schema\Core\AdditionalPropertiesInterface;

final class Car implements AdditionalPropertiesInterface
{
    public function getType(): string
    {
        return 'Car';
    }

    public function getAdditionalProperties(): array
    {
        return [
            'accelerationTime',
            'acrissCode',
            'bodyType',
            'emissionsCO2',
            'fuelCapacity',
            'meetsEmissionStandard',
            'modelDate',
            'payload',
            'roofLoad',
            'seatingCapacity',
            'speed',
            'tongueWeight',
            'trailerWeight',
            'vehicleSpecialUsage',
            'weightTotal',
            'wheelbase',
        ];
    }
}
