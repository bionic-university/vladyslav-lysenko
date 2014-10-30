<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 30.10.14
 * Time: 20:41
 */

namespace BionicUniversity\Bundle\BlogBundle\StringManipulator;


class MagicStringReverser implements ReverserInterface{
    /**
     * @var StringReverser
     */
    private $stringReverser;

    /**
     * @var
     */
    private $secretSymbol;

    function __construct($secretSymbol)
    {
        $this->secretSymbol = $secretSymbol;
    }

    /**
     * @param StringReverser $stringReverser
     */
    public function setStringReverser(StringReverser $stringReverser)
    {
        $this->stringReverser = $stringReverser;
    }

    public function reverse($str)
    {
        $result = $this->stringReverser->reverse($str);
        $result.=$this->secretSymbol;
        return $result;
    }

}