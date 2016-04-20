<?php

namespace Sainsburys;

/**
 * Class CommonHelper
 * @package Sainsburys
 * @author  Sohrab Khan <sohrab@sohrabkhan.com>
 * @version 0.1
 */
class CommonHelper
{
    public static function humanReadableSize($size, $precision = 2)
    {
        $units = array('B','KB','MB','GB','TB','PB','EB','ZB','YB');
        $step = 1024;
        $i = 0;
        while (($size / $step) > 0.9) {
            $size = $size / $step;
            $i++;
        }
        return round($size, $precision).$units[$i];
    }
}