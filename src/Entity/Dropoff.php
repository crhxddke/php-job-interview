<?php
declare(strict_types=1);

namespace App\Entity;

class Dropoff
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
     * @return Dropoff
     */
    public function setQuery(string $query): Dropoff
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
     * @return Dropoff
     */
    public function setDate(\DateTime $date): Dropoff
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
     * @return Dropoff
     */
    public function setCountry(?int $country): Dropoff
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
     * @return Dropoff
     */
    public function setCity(?int $city): Dropoff
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
     * @return Dropoff
     */
    public function setRegion(?int $region): Dropoff
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
     * @return Dropoff
     */
    public function setLocation(int $location): Dropoff
    {
        $this->location = $location;
        return $this;
    }
}