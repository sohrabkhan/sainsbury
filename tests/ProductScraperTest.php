<?php

/**
 * Class ProductScraperTest
 * @author  Sohrab Khan <sohrab@sohrabkhan.com>
 * @version 0.1
 */
class ProductScraperTest extends \PHPUnit_Framework_TestCase
{
    public function testScrape()
    {
        $scraper = new \Sainsburys\ProductScraper();
        $scraped = $scraper->scrape([
            'url' => 'http://hiring-tests.s3-website-eu-west-1.amazonaws.com/2015_Developer_Scrape/5_products.html'
        ]);

        $this->assertArrayHasKey('results', $scraped);
        $this->assertArrayHasKey('total', $scraped);
        $this->assertSame(2, count($scraped));

        $this->assertTotal($scraped['total'], $scraped['results']);
        $this->assertProductKeys($scraped['results']);
    }

    /**
     * Test if the total is correct
     * @param $expected
     * @param $products
     */
    private function assertTotal($expected, $products)
    {
        $total = 0.0;
        foreach ($products as $product) {
            $total += $product['unit_price'];
        }

        $this->assertSame($expected, $total);
    }

    private function assertProductKeys($products)
    {
        foreach ($products as $product) {
            $this->assertArrayHasKey('title', $product);
            $this->assertArrayHasKey('unit_price', $product);
            $this->assertArrayHasKey('description', $product);
        }
    }
}