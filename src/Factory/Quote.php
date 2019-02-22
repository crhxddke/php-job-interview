<?php
declare(strict_types=1);

namespace App\Factory;

use App\Entity\Search as SearchEntity;

final class Quote
{

    private const DEFAULT_PRODUCT_TYPE = 'cars';
    private const FILTER_VERSION = 'qe-1.0';

    public static function createFromEntity(SearchEntity $search): array
    {
        return [
            'currency' => $search->getCurrency(),
            'productType' => self::DEFAULT_PRODUCT_TYPE,
            'filters' => [
                'version' => self::FILTER_VERSION
            ],
           'comparison' => [],
           'inheritedFromQuoteSearchId' => null,
           'pickupQuery' => $search->getPickup()->getQuery(),
           'pickupDate' => $search->getPickup()->getDate()->format('Y-m-d h:i:s'),
           'pickupCountry' => $search->getPickup()->getCountry(),
           'pickupCity' => $search->getPickup()->getCity(),
           'pickupRegion' => $search->getPickup()->getRegion(),
           'pickupLocation' => $search->getPickup()->getLocation(),
           'dropoffQuery' => $search->getDropoff()->getQuery(),
           'dropoffDate' => $search->getDropoff()->getDate()->format('Y-m-d h:i:s'),
           'dropoffCountry'  => $search->getDropoff()->getCountry(),
           'dropoffCity' => $search->getDropoff()->getCity(),
           'dropoffRegion' => $search->getDropoff()->getRegion(),
           'dropoffLocation' => $search->getDropoff()->getLocation(),
        ];
    }
}