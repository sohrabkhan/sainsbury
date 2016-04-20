<?php
/**
 * Created by PhpStorm.
 * User: maria
 * Date: 17/04/2016
 * Time: 23:27
 */

require "vendor/autoload.php";

$scrapper = new \Sainsburys\Scraper();

$options = ['url' => 'http://hiring-tests.s3-website-eu-west-1.amazonaws.com/2015_Developer_Scrape/5_products.html'];
if (isset($argv[1])) {
    $options['url'] = $argv[1];
}

$scrapper->setOptions($options);

echo json_encode($scrapper->scrape(new \Sainsburys\ProductScraper()));
