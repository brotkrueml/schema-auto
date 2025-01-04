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
 * A value indicating a special usage of a car, e.g. commercial rental, driving school, or as a taxi.
 * @deprecated This type represents an enumeration, use the specific CarUsageType enum instead.
 */
#[Type('CarUsageType')]
final class CarUsageType extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'mainEntityOfPage',
        'name',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'url',
    ];
}
