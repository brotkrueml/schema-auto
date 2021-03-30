<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_auto" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaAuto\EventListener;

use Brotkrueml\Schema\Event\RegisterAdditionalTypePropertiesEvent;
use Brotkrueml\Schema\Model\Type;

final class RegisterAdditionalProperties
{
    public function __invoke(RegisterAdditionalTypePropertiesEvent $event): void
    {
        if ($event->getType() === Type\Car::class) {
            $event->registerAdditionalProperty('accelerationTime');
            $event->registerAdditionalProperty('acrissCode');
            $event->registerAdditionalProperty('bodyType');
            $event->registerAdditionalProperty('emissionsCO2');
            $event->registerAdditionalProperty('fuelCapacity');
            $event->registerAdditionalProperty('meetsEmissionStandard');
            $event->registerAdditionalProperty('modelDate');
            $event->registerAdditionalProperty('payload');
            $event->registerAdditionalProperty('roofLoad');
            $event->registerAdditionalProperty('seatingCapacity');
            $event->registerAdditionalProperty('speed');
            $event->registerAdditionalProperty('tongueWeight');
            $event->registerAdditionalProperty('trailerWeight');
            $event->registerAdditionalProperty('vehicleSpecialUsage');
            $event->registerAdditionalProperty('weightTotal');
            $event->registerAdditionalProperty('wheelbase');
        }
        if ($event->getType() === Type\EngineSpecification::class) {
            $event->registerAdditionalProperty('engineDisplacement');
            $event->registerAdditionalProperty('enginePower');
            $event->registerAdditionalProperty('engineType');
            $event->registerAdditionalProperty('torque');
        }
        if ($event->getType() === Type\Vehicle::class) {
            $event->registerAdditionalProperty('accelerationTime');
            $event->registerAdditionalProperty('bodyType');
            $event->registerAdditionalProperty('emissionsCO2');
            $event->registerAdditionalProperty('fuelCapacity');
            $event->registerAdditionalProperty('meetsEmissionStandard');
            $event->registerAdditionalProperty('modelDate');
            $event->registerAdditionalProperty('payload');
            $event->registerAdditionalProperty('seatingCapacity');
            $event->registerAdditionalProperty('speed');
            $event->registerAdditionalProperty('tongueWeight');
            $event->registerAdditionalProperty('trailerWeight');
            $event->registerAdditionalProperty('vehicleSpecialUsage');
            $event->registerAdditionalProperty('weightTotal');
            $event->registerAdditionalProperty('wheelbase');
        }
    }
}
