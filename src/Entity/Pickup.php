<?php

declare(strict_types=1);

namespace App\Entity;

class Pickup
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $query;
    /**
     * @var \DateTime
     */
    private $date;
    /**
     * @var null|int
     */
    private $country;
    /**
     * @var null|int
     */
    private $city;

    /**
     * @var null|int
     */
    private $region;

    /**
     * @var int
     */
    private $location;

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
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * @param string $query
     * @return Pickup
     */
    public function setQuery(string $query): Pickup
    {
        $this->query = $query;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return Pickup
     */
    public function setDate(\DateTime $date): Pickup
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCountry(): ?int
    {
        return $this->country;
    }

    /**
     * @param int|null $country
     * @return Pickup
     */
    public function setCountry(?int $country): Pickup
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCity(): ?int
    {
        return $this->city;
    }

    /**
     * @param int|null $city
     * @return Pickup
     */
    public function setCity(?int $city): Pickup
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRegion(): ?int
    {
        return $this->region;
    }

    /**
     * @param int|null $region
     * @return Pickup
     */
    public function setRegion(?int $region): Pickup
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocation(): int
    {
        return $this->location;
    }

    /**
     * @param int $location
     * @return Pickup
     */
    public function setLocation(int $location): Pickup
    {
        $this->location = $location;
        return $this;
    }
}