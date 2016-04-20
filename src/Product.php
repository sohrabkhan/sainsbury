<?php

namespace Sainsburys;

/**
 * Class Product represents a single product that is scraped.
 *
 * @package Sainsburys
 * @author  Sohrab Khan <sohrab@sohrabkhan.com>
 * @version 0.1
 */
class Product
{
    /**
     * The product's title
     * @var string
     */
    private $title;
    /**
     * The size in Kb / Mb
     * @var string
     */
    private $size;
    /**
     * @var float
     */
    private $unit_price;
    /**
     * @var string
     */
    private $description;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    /**
     * @param float $unit_price
     */
    public function setUnitPrice($unit_price)
    {
        $this->unit_price = $unit_price;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function toArray()
    {
        return [
            'title' => $this->title,
            'size' => $this->size,
            'unit_price' => $this->unit_price,
            'description' => $this->description,
        ];
    }

}