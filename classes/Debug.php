<?php





class Debug
{
    public static function dump($test)
    {
        echo '<prev>';
        var_dump($test);
        echo'</prev>';
    }
}