<?php
declare(strict_types=1);

namespace App\Factory;

use App\Entity\Dropoff;
use App\Entity\Pickup;
use App\Entity\Search as SearchEntity;

final class Search
{
    public static function create(array $pickup, array $dropoff, string $currency, string $visitId)
    {
        // build
        $pickupEntity = new Pickup();
        $pickupEntity
            ->setLocation($pickup['locationId'])
            ->setRegion($pickup['regionId'])
            ->setCity($pickup['cityId'])
            ->setCountry($pickup['countryId'])
            ->setDate(new \DateTime($pickup['date']))
            ->setQuery($pickup['query'])
        ;

        $dropoffEntity = new Dropoff();
        $dropoffEntity
            ->setLocation(($dropoff['locationId']) ?? $pickup['locationId'])
            ->setRegion(($dropoff['regionId']) ?? $pickup['regionId'])
            ->setCity(($dropoff['cityId']) ?? $pickup['cityId'])
            ->setCountry(($dropoff['countryId']) ?? $pickup['countryId'])
            ->setDate(new \DateTime($dropoff['date']))
            ->setQuery(($dropoff['query']) ?? $pickup['query'])
        ;

        $search = new SearchEntity();

        $search
            ->setCurrency($currency)
            ->setPickup($pickupEntity)
            ->setDropoff($dropoffEntity)
            ->setVisitId($visitId)
        ;

        return $search;
    }
}