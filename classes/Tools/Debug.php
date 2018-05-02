<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 27/04/2018
 * Time: 10:26
 */

namespace Dev;


class Debug
{
    public function dump($test)
    {
        echo '<prev>';
        var_dump($test);
        echo'</prev>';
    }
}