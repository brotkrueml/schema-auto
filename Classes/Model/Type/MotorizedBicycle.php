<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_auto" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaAuto\Model\Type;

use Brotkrueml\Schema\Attributes\Type;
use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * A motorized bicycle is a bicycle with an attached motor used to power the vehicle, or to assist with pedaling.
 */
#[Type('MotorizedBicycle')]
final class MotorizedBicycle extends AbstractType
{
    protected static array $propertyNames = [
        'accelerationTime',
        'additionalProperty',
        'additionalType',
        'aggregateRating',
        'alternateName',
        'audience',
        'award',
        'bodyType',
        'brand',
        'cargoVolume',
        'category',
        'color',
        'countryOfOrigin',
        'dateVehicleFirstRegistered',
        'depth',
        'description',
        'disambiguatingDescription',
        'driveWheelConfiguration',
        'emissionsCO2',
        'fuelCapacity',
        'fuelConsumption',
        'fuelEfficiency',
        'fuelType',
        'gtin12',
        'gtin13',
        'gtin14',
        'gtin8',
        'height',
        'identifier',
        'image',
        'isAccessoryOrSparePartFor',
        'isConsumableFor',
        'isFamilyFriendly',
        'isRelatedTo',
        'isSimilarTo',
        'isVariantOf',
        'itemCondition',
        'keywords',
        'knownVehicleDamages',
        'logo',
        'mainEntityOfPage',
        'manufacturer',
        'material',
        'meetsEmissionStandard',
        'mileageFromOdometer',
        'model',
        'modelDate',
        'mpn',
        'name',
        'numberOfAirbags',
        'numberOfAxles',
        'numberOfDoors',
        'numberOfForwardGears',
        'numberOfPreviousOwners',
        'offers',
        'payload',
        'potentialAction',
        'productID',
        'productionDate',
        'purchaseDate',
        'releaseDate',
        'review',
        'sameAs',
        'seatingCapacity',
        'sku',
        'slogan',
        'speed',
        'steeringPosition',
        'subjectOf',
        'tongueWeight',
        'trailerWeight',
        'url',
        'vehicleConfiguration',
        'vehicleEngine',
        'vehicleIdentificationNumber',
        'vehicleInteriorColor',
        'vehicleInteriorType',
        'vehicleModelDate',
        'vehicleSeatingCapacity',
        'vehicleSpecialUsage',
        'vehicleTransmission',
        'weight',
        'weightTotal',
        'wheelbase',
        'width',
    ];
}
