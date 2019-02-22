<?php
declare(strict_types=1);

namespace App\Entity;

class Search
{
    private const CURRENCIES = ['EUR'];

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $visitId;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var Pickup
     */
    private $pickup;

    /**
     * @var Dropoff
     */
    private $dropoff;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getVisitId(): string
    {
        return $this->visitId;
    }

    /**
     * @param string $visitId
     * @return Search
     */
    public function setVisitId(string $visitId): Search
    {
        $this->visitId = $visitId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return Search
     */
    public function setCurrency(string $currency): Search
    {
        if (!in_array($currency, self::CURRENCIES)) {
            throw new \InvalidArgumentException(sprintf('%s is not accessible', $currency));
        }

        $this->currency = $currency;
        return $this;
    }

    /**
     * @return Pickup
     */
    public function getPickup(): Pickup
    {
        return $this->pickup;
    }

    /**
     * @param Pickup $pickup
     * @return Search
     */
    public function setPickup(Pickup $pickup): Search
    {
        $this->pickup = $pickup;
        return $this;
    }

    /**
     * @return Dropoff
     */
    public function getDropoff(): Dropoff
    {
        return $this->dropoff;
    }

    /**
     * @param Dropoff $dropoff
     * @return Search
     */
    public function setDropoff(Dropoff $dropoff): Search
    {
        $this->dropoff = $dropoff;
        return $this;
    }
}