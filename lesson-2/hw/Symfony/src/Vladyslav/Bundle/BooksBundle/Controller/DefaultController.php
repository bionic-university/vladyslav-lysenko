<?php

namespace Vladyslav\Bundle\BooksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VladyslavBooksBundle:Default:index.html.twig', array('name' => $name));
    }
}
