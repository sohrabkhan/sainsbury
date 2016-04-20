<?php

namespace Sainsburys;

/**
 * Interface ScrapperInterface defines the interface that any scraper should conform to.
 *
 * @package Sainsburys
 * @author  Sohrab Khan <sohrab@sohrabkhan.com>
 * @version 0.1
 */
interface ScraperInterface
{
    /**
     * The scrape method receives an array of options. At the current state of the project we are only interested
     * with the URL to scrape but I chose an array of options so that it's scalable.
     *
     * @param array $options The options or settings that a scraper would require to get started
     */
    public function scrape(array $options = []);
}