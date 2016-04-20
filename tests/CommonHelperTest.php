<?php

/**
 * Created by PhpStorm.
 * User: maria
 * Date: 20/04/2016
 * Time: 11:24
 */
class CommonHelperTest extends \PHPUnit_Framework_TestCase
{
    public function testHumanReadableSize()
    {
        $size = \Sainsburys\CommonHelper::humanReadableSize(1024);
        $this->assertEquals($size, '1KB');

        $size = \Sainsburys\CommonHelper::humanReadableSize(1048576);
        $this->assertEquals($size, '1MB');

        $size = \Sainsburys\CommonHelper::humanReadableSize(5767168);
        $this->assertEquals($size, '5.5MB');
    }
}