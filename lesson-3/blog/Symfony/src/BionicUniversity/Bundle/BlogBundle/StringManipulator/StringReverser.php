<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 30.10.14
 * Time: 20:28
 */
namespace BionicUniversity\Bundle\BlogBundle\StringManipulator;

class StringReverser implements ReverserInterface{
    public function reverse( $str)
    {
        $result = "";
        for($i=strlen($str)-1;$i>=0;$i--)
            $result.=$str[$i];
        return $result;
    }

}