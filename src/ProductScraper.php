<?php

namespace Sainsburys;

/**
 * Class ProductScraper does the actual scraping.
 *
 * @package Sainsburys
 * @author  Sohrab Khan <sohrab@sohrabkhan.com>
 * @version 0.1
 */
class ProductScraper implements ScraperInterface
{
    /**
     * The scrape method receives an array of options. At the current state of the project we are only interested
     * with the URL to scrape
     *
     * @param array $options
     * @return array
     */
    public function scrape(array $options = [])
    {
        $html = file_get_html($options['url']);

        $productsList = $html->find('div[class=product]');

        foreach ($html->find('abbr') as $abbr) {
            $abbr->innertext = '';
        }

        $search = function($html, $text, $item = 0, $property = null) {
            return trim(strip_tags($html->find($text, $item)->$property));
        };

        $products = [];
        $total = 0;
        for ($item = 0; $item < count($productsList); $item ++) {
            $product = new Product();
            $product->setTitle($search($html, 'div[class=productInfo] > a', $item, 'plaintext'));
            $unitPrice = $search($html, 'div[class=pricing] > p[class=pricePerUnit]', $item, 'plaintext');
            $unitPrice = (float)trim(str_replace('&pound', '', $unitPrice));
            $product->setUnitPrice($unitPrice);
            $total += $unitPrice;

            $descriptionLink = $search($html, 'div[class=productInfo] > a', $item, 'href');
            $descHtml = file_get_html($descriptionLink);
            $product->setDescription($search($descHtml, 'div[class=productText]', 0, 'plaintext'));
            $size = CommonHelper::humanReadableSize(mb_strlen($descHtml, '8bit'));
            $product->setSize($size);

            $products[] = $product->toArray();
        }

        return ['results' => $products, 'total' => $total];
    }
}