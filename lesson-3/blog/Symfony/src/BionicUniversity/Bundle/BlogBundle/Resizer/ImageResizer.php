<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 30.10.14
 * Time: 19:40
 */

namespace BionicUniversity\Bundle\BlogBundle\Resizer;


class ImageResizer implements ResizerInterface{

    private $imageService;

    public function resize()
    {
        echo 'Resized';
    }

}