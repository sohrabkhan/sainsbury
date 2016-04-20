<?php

namespace Sainsburys;

/**
 * Class Scraper is the class which performs the actual scraping. It's type of scraping depends upon
 * the type of instance that is passed to it. In this case the ProductScraper instance is supplied to it and it will
 * make the ProductScraper class to perform the scraping. When later we develop the other types of scrapers and make
 * sure those scrapers implement our ScraperInterface then this class will not require anything, as it can make
 * any class that implements the ScraperInterface scrape. So depending upon the instance supplied it will make the
 * scraper scrape.
 *
 * @package Sainsburys
 * @author  Sohrab Khan <sohrab@sohrabkhan.com>
 * @version 0.1
 */
class Scraper
{
    private $options;

    /**
     * Set appropriate options. The scrape method receives an array of options. At the current state of the project
     * we are only interested with the URL to scrape but I chose an array of options so that it's scalable.
     */
    public function setOptions(array $options)
    {
        if (count($options) == 0) {
            throw new \InvalidArgumentException("Please give at least one option");
        }

        if (!isset($options['url'])) {
            throw new \InvalidArgumentException("Please supply a url to scrape");
        }

        $this->options = $options;
    }

    /**
     * This is the method that will make all the classes inheriting from ScraperInterface to call their
     * scrape method.
     *
     * @param ScraperInterface $scraper
     * @return array
     */
    public function scrape(ScraperInterface $scraper)
    {
        return $scraper->scrape($this->options);
    }
}